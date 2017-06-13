<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Activities;
use AppBundle\Entity\ActivityDataDefs;
use AppBundle\Entity\ActivityExportDefs;
use AppBundle\Entity\ApplicationIps;
use AppBundle\Entity\Applications;
use AppBundle\Entity\BrandSets;
use AppBundle\Entity\Methods;
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

class ApplicationController extends Controller
{
    const SET_ACTIVITY_METHOD = 23;

    public function addAction(Request $request)
    {
        $application = new Applications();
        $form = $this->createForm(ApplicationsType::class, $application);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var Applications $application */
            $application = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $method = $em->getRepository(Methods::class)->find(self::SET_ACTIVITY_METHOD);
            $application->addMethod($method);
            $em->persist($method);
            $em->persist($application);

            if ($form->get('copyIps')->getData()) {
                $company = $application->getCompany();
                $lastApplication = $this->getDoctrine()->getRepository('AppBundle:Applications')
                    ->findOneBy(['company' => $company], ['id' => 'DESC']);
                $lastApplicationIps = $this->getDoctrine()->getRepository('AppBundle:ApplicationIps')
                    ->findBy(['application' => $lastApplication]);

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

        return $this->render('@App/application/add.html.twig', [
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
        return $this->render('@App/application/ip-addresses.html.twig', ['applications' => $applications, 'applicationsIps' => $applicationsIps]);
    }

    public function generateCodesAction()
    {
        $generator = $this->get('app.password_generator');
        $passwords['admin'] = $generator->generate()->getPassword();
        $passwords['public'] = $generator->generate()->getPassword();

        return $this->render('@App/application/generate-password.html.twig', ['passwords' => $passwords]);
    }
}
