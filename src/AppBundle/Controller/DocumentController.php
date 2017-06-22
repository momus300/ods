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

class DocumentController extends Controller
{
    public function agencyAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('AppBundle:Activities');
        $activities = $repository->findBy([], ['id' => 'DESC']);

        if ($request->isMethod('post')) {
            $paramId = $request->get('activity_id');
            /** @var Activities $activity */
            $activity = $repository->find($paramId);
            /** @var Applications $application */
            $application = $activity->getApplication()->get(0);
            /** @var ActivityDataDefs $data */

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

        return $this->render('@App/document/agency.html.twig', ['activities' => $activities]);
    }
}
