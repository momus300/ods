<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Activities;
use AppBundle\Entity\ActivityData;
use AppBundle\Entity\ActivityDataDefs;
use AppBundle\Entity\ActivityExportDefs;
use AppBundle\Entity\ActivityGiodo;
use AppBundle\Entity\ApplicationIps;
use AppBundle\Entity\Applications;
use AppBundle\Entity\BrandSets;
use AppBundle\Entity\Methods;
use AppBundle\Form\ActivityAddDataType;
use AppBundle\Form\ActivityApplicationType;
use AppBundle\Form\ActivityDataDefsType;
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
        $form = $this->createForm(ActivityApplicationType::class, new Activities());
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var Activities $activity */
            $activity = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($activity);

            $dataRequired = $form->get("activityDataRequired")->getData();
            if($dataRequired){
                foreach($dataRequired as $activityDataDef){
                    $activityData = new ActivityData();
                    $activityData->setRequired(true);
                    $activityData->setActivity($activity);
                    $activityData->setData($activityDataDef);
                    $em->persist($activityData);
                }
            }

            $dataOptional = $form->get("activityDataOptional")->getData();
            if($dataOptional){
                foreach($dataOptional as $activityDataDef){
                    $activityData = new ActivityData();
                    $activityData->setRequired(false);
                    $activityData->setActivity($activity);
                    $activityData->setData($activityDataDef);
                    $em->persist($activityData);
                }
            }

            $giodoRequired = $form->get("activityGiodoRequired")->getData();
            if($giodoRequired){
                foreach($giodoRequired as $giodoDef){
                    $activityGiodo = new ActivityGiodo();
                    $activityGiodo->setRequired(true);
                    $activityGiodo->setActivity($activity);
                    $activityGiodo->setGiodoDefinition($giodoDef);
                    $em->persist($activityGiodo);
                }
            }

            $giodoOptional = $form->get("activityGiodoOptional")->getData();
            if($giodoOptional){
                foreach($giodoOptional as $giodoDef){
                    $activityGiodo = new ActivityGiodo();
                    $activityGiodo->setRequired(false);
                    $activityGiodo->setActivity($activity);
                    $activityGiodo->setGiodoDefinition($giodoDef);
                    $em->persist($activityGiodo);
                }
            }

            /** @var Applications $application */
            $application = $activity->getApplication()->first();
            $application->addActivity($activity);

            /** @var ActivityExportDefs $activityEsportDef */
            $activityEsportDef = $activity->getActivityExportDef()->first();
            if($activityEsportDef){
                $activityEsportDef->addActivity($activity);
                $em->persist($activityEsportDef);
            }

            $em->flush();

            $this->addFlash('success', 'Formularz został dodany.');

            return $this->redirectToRoute('activity_data');
        }

        return $this->render('@App/activity/add.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function addDataAction(Request $request)
    {
//        $repository = $this->getDoctrine()->getRepository('AppBundle:Activities');
//        $activities = $repository->findBy([], ['id' => 'DESC']);
//        dump($activities);
//        die();
//        $activityDataDefs = $this->getDoctrine()->getRepository(ActivityDataDefs::class)->findBy([], null, 5);


        $activityDataDefs = new ActivityDataDefs();
//        $activity = new Activities();
        $form = $this->createForm(ActivityDataDefsType::class, $activityDataDefs);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            dump($data);
            die();
        }
//        if ($request->isMethod('post')) {
//            $dataDef = $request->get('data_def');
//            dump($dataDef);
//            die();
//            /** @var Activities $activityData */
//            $activity = $repository->find($dataDef);
//            $activityData = $activity->getData();
//        }

//        return $this->render('@App/activity/add-data.html.twig', ['activities' => $activities,  'activityDataDefs' => $activityDataDefs]);
        return $this->render('@App/activity/add-data2.html.twig', ['form' => $form->createView()]);

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
