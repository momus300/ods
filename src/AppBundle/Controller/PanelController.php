<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Activities;
use AppBundle\Entity\ApplicationIps;
use AppBundle\Entity\Applications;
use AppBundle\Utils\PasswordGenerator;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;

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

        /** @var Form $form */
        $form = $this->createFormBuilder($activity)
            ->add('code', TextType::class, ['attr' => ['placeholder' => 'Przykład: SKMOMA2017-submit']])
            ->add('name', TextType::class, ['attr' => ['placeholder' => 'Przykład: Formularz zgłoszeniowy do konkursu']])
            ->add('description', TextType::class, ['required' => false, 'attr' => ['placeholder' => 'Przykład: Oferta lojlanościowa 2017 dla duchownych z możliwością wypełlnienia formularza ofertowego lub jazdy próbnej']])
            ->add('actionName', TextType::class, ['required' => false, 'attr' => ['placeholder' => 'Przykład: 201704_w_dobra_strone_ze_skoda']])
            ->add('actionType', TextType::class, ['attr' => ['placeholder' => 'Przykład: zapis_konkurs/OF/JP']])
            ->add('channel', ChoiceType::class, ['choices' => array_flip([
                'Internet',
                'Event',
                'Emailing',
                'Ipad',
                'Callcenter',
                'Mobile',
                'SMS',
                'TV'
            ])])
            ->add('active', ChoiceType::class, ['choices' => array_combine(range(0, 1), range(0, 1))])
            ->add('save', SubmitType::class, ['label' => 'Dodaj', 'attr' => ['class' => 'btn btn-success']])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

//            dump($data);
//            die();

            $em = $this->getDoctrine()->getManager();
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

//            dump($applicationsIps);
//            die();
        }
        return $this->render('@App/panel/ip-addresses.html.twig', ['applications' => $applications, 'applicationsIps' => $applicationsIps]);
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

        $brands = $this->getDoctrine()->getRepository('AppBundle:Brands')->findAll();

        $application = new Applications();
        $application->setPublicKey($generator->generate()->getPassword());
        $application->setAdminKey($generator->generate()->getPassword());

        /** @var Form $form */
        $form = $this->createFormBuilder($application)
            ->add('brand_set', ChoiceType::class)
            ->add('company', EntityType::class, [
                'choice_label' => 'name',
                'class' => 'AppBundle:Brands'
            ])
            ->add('name', TextType::class)
            ->add('description', TextType::class)
            ->add('appId', TextType::class)
            ->add('order', ChoiceType::class, ['choices' => array_combine(range(0, 1), range(0, 1))])
            ->add('active', ChoiceType::class, ['choices' => array_combine(range(0, 1), range(0, 1))])
            ->add('save', SubmitType::class, ['label' => 'Dodaj', 'attr' => ['class' => 'btn btn-success']])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            dump($data);
            die();

            $em = $this->getDoctrine()->getManager();
            $em->persist($data);
            $em->flush();

            $this->addFlash('success', 'Formularz został dodany.');

            return $this->redirectToRoute('activity_data');
        }

        return $this->render('@App/panel/activity-add.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function ipAddressAddAction($ip)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $aplicationIp = $em->getRepository('AppBundle:Applications')->find();

        $aplicationIp = new ApplicationIps();
        $aplicationIp->setIp($ip);
        $aplicationIp->setApplication($aplicationIp);

        $em->persist($aplicationIp);
        $em->flush();

        $this->addFlash('success', 'Rekord ' . $aplicationIp->getIp() . ' został dodany.');
        return $this->redirectToRoute('ip_addresses');
    }

    public function ipAddressDeleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $aplicationIp = $em->getRepository('AppBundle:ApplicationIps')->find($id);

        $this->addFlash('success', 'Rekord ' . $aplicationIp->getIp() . ' został usunięty.');

//        $em->remove($aplicationIp);
//        $em->flush();
        return $this->redirectToRoute('ip_addresses');
//        die();
    }
}
