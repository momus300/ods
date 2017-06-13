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

class ActivityController extends Controller
{

    public function addAction(Request $request)
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
            /** @var ActivityExportDefs $activityEsportDef */
            $activityEsportDef = $data->getActivityExportDef()[0];
            $activityEsportDef->addActivity($data);
            $em = $this->getDoctrine()->getManager();
            $em->persist($activityEsportDef);
            $em->persist($application);
            $em->persist($data);
            $em->flush();

            $this->addFlash('success', 'Formularz został dodany.');

            return $this->redirectToRoute('activity_data');
        }

        return $this->render('@App/activity/add.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function dataAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Activities');
        $activities = $repository->findBy([], ['id' => 'DESC']);

        $activityData = [];
        $giodoDefinition = [];

        if ($request->isMethod('post')) {
            $activityId = $request->get('activity_id');
            /** @var Activities $activityData */
            $activity = $repository->find($activityId);
            $activityData = $activity->getData();
            $giodoDefinition = $activity->getGiodoDefinition();
        }

        return $this->render('@App/activity/data.html.twig', ['activities' => $activities, 'activityData' => $activityData, 'giodoDefinition' => $giodoDefinition]);
    }

    public function exportAction(Request $request)
    {
        /** @var EntityRepository $repository */
        $repository = $this->getDoctrine()->getRepository('AppBundle:Activities');
        $activities = $repository->findBy([], ['id' => 'DESC']);

        $activityExport = [];

        if ($request->isMethod('post')) {
            $param = $request->get('activity_id');
            /** @var Activities $activity */
            $activity = $repository->find($param);
            $activityExport = $activity->getActivityExportDef();
        }

        return $this->render('@App/activity/export.html.twig', ['activities' => $activities, 'activityExport' => $activityExport]);
    }
}
