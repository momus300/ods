<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Activities;
use AppBundle\Entity\ActivityDataDefs;
use AppBundle\Entity\ActivityExportDefs;
use AppBundle\Entity\ApplicationIps;
use AppBundle\Entity\Applications;
use AppBundle\Entity\Brands;
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

class PanelController extends Controller
{
    public function showAction()
    {
        $em = $this->getDoctrine()->getManager();
        $brands = $em->getRepository(Brands::class)->findAll();

        return $this->render('@App/panel/show.html.twig', ['brands' => $brands]);
    }

//    public function activitiesAction(Request $request)
//    {
//        $activities = [];
//        if ($request->isMethod('post')) {
//            $param = $request->get('test');
//            $em = $this->getDoctrine()->getManager();
//
//            $qb = $em->createQueryBuilder();
//
////            $activities = $em->getRepository('AppBundle:Activities')->findBy(['code' => $param]);
//        }
//        return $this->render('@App/panel/acrivities.html.twig', ['activities' => $activities]);
//    }



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

//    public function ipAddressAddAction($ip)
//    {
//        $em = $this->getDoctrine()->getManager();
//        $aplicationIp = $em->getRepository('AppBundle:Applications')->find();
//
//        $aplicationIp = new ApplicationIps();
//        $aplicationIp->setIp($ip);
//        $aplicationIp->setApplication($aplicationIp);
//
//        dump($aplicationIp);
//        die();
//
//        $em->persist($aplicationIp);
//        $em->flush();
//
//        $this->addFlash('success', 'Rekord ' . $aplicationIp->getIp() . ' został dodany.');
//        return $this->redirectToRoute('ip_addresses');
//    }
//
//    public function ipAddressDeleteAction(Request $request, $id)
//    {
//        $em = $this->getDoctrine()->getManager();
//        $aplicationIp = $em->getRepository('AppBundle:ApplicationIps')->find($id);
//
//        $this->addFlash('success', 'Rekord ' . $aplicationIp->getIp() . ' został usunięty.');
//
////        $em->remove($aplicationIp);
////        $em->flush();
//        return $this->redirectToRoute('ip_addresses');
////        die();
//    }
}
