<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Activities;
use AppBundle\Entity\ActivityDataDefs;
use AppBundle\Entity\ApplicationIps;
use AppBundle\Entity\Applications;
use AppBundle\Entity\BrandSets;
use AppBundle\Form\ActivityApplicationType;
use AppBundle\Form\ApplicationsType;
use AppBundle\Utils\CsvExport;
use AppBundle\Utils\PasswordGenerator;
use Doctrine\DBAL\Types\BooleanType;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\CsvEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class PanelController extends Controller
{
    public function showAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $brands = $em->getRepository('AppBundle:Brands')->findAll();
        return $this->render('@App/panel/show.html.twig', ['brands' => $brands]);
    }

    public function activitiesAction(Request $request)
    {
        $activities = [];
        if ($request->isMethod('post')) {
            $param = $request->get('test');
            $em = $this->getDoctrine()->getManager();

            $qb = $em->createQueryBuilder();

//            $activities = $em->getRepository('AppBundle:Activities')->findBy(['code' => $param]);
        }
        return $this->render('@App/panel/acrivities.html.twig', ['activities' => $activities]);
    }

    public function activityAddAction(Request $request)
    {
        $activity = new Activities();
        $form = $this->createForm(ActivityApplicationType::class, $activity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var Activities $data */
            $data = $form->getData();
            /** @var Applications $application */
            $application = $data->getApplication()[0];
            $application->addActivity($data);
            $em = $this->getDoctrine()->getManager();
            $em->persist($application);
            $em->persist($data);
            $em->flush();

            $this->addFlash('success', 'Formularz został dodany.');

            return $this->redirectToRoute('activity_data');
        }

        return $this->render('@App/panel/activity-add.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function ipAddressesAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Applications');
        $applications = $repository->findAll();

        $applicationsIps = [];
        if ($request->isMethod('post')) {
            $param = $request->get('app_id');

            /** @var \Doctrine\DBAL\Query\QueryBuilder $qb */
            $qb = $repository->createQueryBuilder('a');
            $applicationsIps = $qb
                ->select('ai')
                ->join('AppBundle:ApplicationIps', 'ai', 'WITH', 'a.id = ai.application')
                ->where('a.appId = :param')
                ->setParameter('param', $param)
                ->getQuery()
                ->getResult();
        }
        return $this->render('@App/panel/ip-addresses.html.twig', ['applications' => $applications, 'applicationsIps' => $applicationsIps]);
    }

    public function reactAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Applications');
        $applications = $repository->findAll();

        $applicationsIps = [];
        if ($request->isMethod('post')) {
            if( $ips = $request->get('ip_address') ){
                dump($ips);
                die();
            }
            $param = $request->get('app_id');

            /** @var \Doctrine\DBAL\Query\QueryBuilder $qb */
            $qb = $repository->createQueryBuilder('a');
            $applicationsIps = $qb
                ->select('ai')
                ->join('AppBundle:ApplicationIps', 'ai', 'WITH', 'a.id = ai.application')
                ->where('a.appId = :param')
                ->setParameter('param', $param)
                ->getQuery()
                ->getResult();
        }
        return $this->render('@App/panel/react.html.twig', ['applications' => $applications, 'applicationsIps' => $applicationsIps]);
    }

    public function activityDataAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Activities');
        $activities = $repository->findAll();

        $activityData = [];
        if ($request->isMethod('post')) {
            $param = $request->get('activity_id');

            /** @var \Doctrine\DBAL\Query\QueryBuilder $qb */
            $qb = $repository->createQueryBuilder('a');
            $activityData = $qb
                ->select('add.name, add.description, ad.required')
                ->join('AppBundle:ActivityData', 'ad', 'WITH', 'a.id = ad.activityId')
                ->join('AppBundle:ActivityDataDefs', 'add', 'WITH', 'ad.dataId = add.id')
                ->where('a.id = :param')
                ->setParameter('param', $param)
                ->getQuery()
                ->getResult();

//            dump($activityData);
//            die();
        }
        return $this->render('@App/panel/activity-data.html.twig', ['activities' => $activities, 'activityData' => $activityData]);
    }

    public function activityExportAction(Request $request)
    {
        /** @var EntityRepository $repository */
        $repository = $this->getDoctrine()->getRepository('AppBundle:Activities');
        $activities = $repository->findAll();

        $activityExport = [];
        if ($request->isMethod('post')) {
            $param = $request->get('activity_id');

            /** @var \Doctrine\DBAL\Query\QueryBuilder $qb */
            $qb = $repository->createQueryBuilder('a');
            $activityExport = $qb
                ->select('aed.name, aed.code')
                ->join('AppBundle:ActivityExportDefActivity', 'aeda', 'WITH', 'a.id = aeda.activity')
                ->join('AppBundle:ActivityExportDefs', 'aed', 'WITH', 'aeda.activityExportDef = aed.id')
                ->where('a.id = :param')
                ->setParameter('param', $param)
                ->getQuery()
                ->getResult();

//            dump($activityExport);
//            die();
        }
        return $this->render('@App/panel/activity-export.html.twig', ['activities' => $activities, 'activityExport' => $activityExport]);
    }

    public function applicationAddAction(Request $request)
    {
        $generator = $this->get('app.password_generator');

        $application = new Applications();
        $application->setPublicKey($generator->generate()->getPassword());
        $application->setAdminKey($generator->generate()->getPassword());

        $form = $this->createForm(ApplicationsType::class, $application);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var Applications $application */
            $application = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($application);

            if ($form->get('copyIps')->getData()) {
                $company = $application->getCompany();
                $lastApplication = $this->getDoctrine()->getRepository('AppBundle:Applications')->findOneBy(['company' => $company], ['id' => 'DESC']);
                $lastApplicationIps = $this->getDoctrine()->getRepository('AppBundle:ApplicationIps')->findBy(['application' => $lastApplication]);

                foreach ($lastApplicationIps as $LastAplicationIp) {
                    $ApplicationIp = new ApplicationIps();
                    $ApplicationIp->setApplication($application);
                    $ApplicationIp->setIp($LastAplicationIp->getIp());
                    $em->persist($ApplicationIp);
                }
            }

            $em->flush();

            $this->addFlash('success', 'Aplikacja została dodana.');

            return $this->redirectToRoute('application_add');
        }

        return $this->render('@App/panel/activity-add.html.twig', [
            'form' => $form->createView()
        ]);
    }

//    public function applicationJoinActivityAction()
//    {
//        $em = $this->getDoctrine()->getManager();
//        $appRepo = $em->getRepository('AppBundle:Applications');
//        $applications = $appRepo->findAll();
//
//        $em = $this->getDoctrine()->getManager();
//        $appRepo = $em->getRepository('AppBundle:Activities');
//        $activities = $appRepo->findAll();
//
//        return $this->render('@App/panel/application-join-activity.html.twig', ['applications' => $applications, 'activities' => $activities]);
//    }

    public function documentsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('AppBundle:Activities');
        $activities = $repository->findAll();

        if ($request->isMethod('post')) {
            $paramId = $request->get('activity_id');
            /** @var Activities $activity */
            $activity = $repository->find($paramId);
            /** @var Applications $application */
            $application = $activity->getApplication()->get(0);
            /** @var ActivityDataDefs $data */


//            $content = "\xEF\xBB\xBF";
            $content = "";
            if (!is_null($request->get('download_csv'))) {
                $content .= (new CsvExport($application, $activity))
                    ->getActivityFormContent();
                $fileName = sprintf('%s.csv', $application->getAppId());
            } elseif (!is_null($request->get('download_log_requests'))) {
                $content .= (new CsvExport($application, $activity))
                    ->getRequestsActivityFormContent();
                $fileName = sprintf('%s_REQLOG.csv', $application->getAppId());
            }

            return new Response($content, 200, [
                'Content-Encoding' => 'UTF-8',
                'charset' => 'UTF-8',
                'X-Sendfile' => $fileName,
                'Content-type' => 'text/csv',
                'Content-Disposition' => sprintf('attachment; filename="%s"', $fileName)
            ]);
        }

        return $this->render('@App/panel/documents-for-agency.html.twig', ['activities' => $activities]);
    }

    public function generateCodesAction()
    {
        $generator = $this->get('app.password_generator');
        $passwords['admin'] = $generator->generate()->getPassword();
        $passwords['public'] = $generator->generate()->getPassword();

        return $this->render('@App/panel/generata-password.html.twig', ['passwords' => $passwords]);
    }

    public function ipAddressAddAction($ip)
    {
        $em = $this->getDoctrine()->getManager();
        $aplicationIp = $em->getRepository('AppBundle:Applications')->find();

        $aplicationIp = new ApplicationIps();
        $aplicationIp->setIp($ip);
        $aplicationIp->setApplication($aplicationIp);

        dump($aplicationIp);
        die();

        $em->persist($aplicationIp);
        $em->flush();

        $this->addFlash('success', 'Rekord ' . $aplicationIp->getIp() . ' został dodany.');
        return $this->redirectToRoute('ip_addresses');
    }

    public function ipAddressDeleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $aplicationIp = $em->getRepository('AppBundle:ApplicationIps')->find($id);

        $this->addFlash('success', 'Rekord ' . $aplicationIp->getIp() . ' został usunięty.');

//        $em->remove($aplicationIp);
//        $em->flush();
        return $this->redirectToRoute('ip_addresses');
//        die();
    }
}
