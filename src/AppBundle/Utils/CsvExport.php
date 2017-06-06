<?php

namespace AppBundle\Utils;

use AppBundle\Entity\Activities;
use AppBundle\Entity\ActivityDataDefs;
use AppBundle\Entity\Applications;
use Doctrine\DBAL\Connection;

class CsvExport
{
    const BOM = "\xEF\xBB\xBF";

    /** @var  Activities */
    private $activity;
    /** @var  Applications */
    private $application;

    public function __construct(Applications $application, Activities $activity)
    {
        $this->application = $application;
        $this->activity = $activity;
    }

    private function getContainer()
    {
        global $kernel;
        return $kernel->getContainer();
    }

    private function saveFile($fileName, $content)
    {
        $logger = $this->getContainer()->get('logger');

        if (file_put_contents(
                $fileName,
                $content
            ) !== false
        ) {
            $logger->info(sprintf('Plik %s zostal zapisany!', $fileName));
        }
        $logger->warning(sprintf('Blad przy zapisie pliku %s', $fileName));
    }

    public function generateFormFile()
    {
        $data = $this->getData();
        return $this->getCSVContent( $data );
    }

    public function generateRequestedFormFile()
    {
        $data = $this->getRequestedData();
        return $this->getCSVContent( $data );
    }

    private function getCSVContent( array $data )
    {
        $serializer = $this->getContainer()->get('serializer');
        $content = self::BOM;
        $content .= $serializer->encode($data, 'csv');
        $fileName = sprintf('%s.csv', $this->application->getAppId());
        $this->saveFile($fileName, $content);

        return $content;
    }

    public function getActivityFormContent()
    {
        return $this->generateFormFile();
    }

    public function getRequestsActivityFormContent()
    {
        return $this->generateRequestedFormFile();
    }

    private function getData()
    {
        /** @var ActivityDataDefs $data */
//        dump($this->activity);
//        die();
        $excelData = [];
        foreach ($this->activity->getData() as $data) {
            $excelData[] = [
                'application_id' => $this->application->getId(),
                'app_id' => $this->application->getAppId(),
                'app_key' => $this->application->getPublicKey(),
                'app_name' => $this->application->getName(),
                'activity_id' => $this->activity->getId(),
                'activity_code' => $this->activity->getCode(),
                'activity_name' => $this->activity->getName(),
                'action_name' => $this->activity->getActionName(),
                'activity_data_id' => $data->getId(),
                'activity_data_name' => $data->getName(),
                'crm_code' => $data->getName(),
                'activity_data_description' => $data->getDescription(),
                'activity_data_required' => $this->getRequired($data->getId()),
                'activity_data_type' => 'DATA'
            ];
        }

        foreach ($this->getGiodoAgreement() as $giodoAgreement) {
            $excelData[] = [
                'application_id' => $this->application->getId(),
                'app_id' => $this->application->getAppId(),
                'app_key' => $this->application->getPublicKey(),
                'app_name' => $this->application->getName(),
                'activity_id' => $this->activity->getId(),
                'activity_code' => $this->activity->getCode(),
                'activity_name' => $this->activity->getName(),
                'action_name' => $this->activity->getActionName(),
                'activity_data_id' => $giodoAgreement['id'],
                'activity_data_name' => $giodoAgreement['code'],
                'crm_code' => $giodoAgreement['crm_code'],
                'activity_data_description' => $giodoAgreement['description'],
                'activity_data_required' => $giodoAgreement['required'],
                'activity_data_type' => 'GIODO'
            ];
        }

        return $excelData;
    }

    private function getRequired($dataId)
    {
        /** @var Connection $conn */
        $conn = $this->getContainer()->get('database_connection');
        $sql = "SELECT required FROM activity_data WHERE activity_id = :activity_id AND data_id = :data_id";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue("activity_id", $this->activity->getId());
        $stmt->bindValue("data_id", $dataId);
        $stmt->execute();
        return $stmt->fetchColumn(0);
    }

    private function getGiodoAgreement()
    {
        /** @var Connection $conn */
        $conn = $this->getContainer()->get('database_connection');
        $sql = "SELECT * FROM activity_giodo ag
JOIN giodo_definition gd ON ag.giodo_definition_id = gd.id
WHERE activity_id = :activity_id";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue("activity_id", $this->activity->getId());
        $stmt->execute();
        return $stmt->fetchAll();
    }

    private function getRequestsActivityForm()
    {
        /** @var Connection $conn */
        $conn = $this->getContainer()->get('database_connection');
        $sql = "SELECT ca.application_id, ca.activity_id, cad.customer_activity_id, ca.ext_ip, add1.name, cad.value FROM gmind_esb.customer_activities ca
JOIN gmind_esb.customer_activity_data cad ON ca.id = cad.customer_activity_id
JOIN gmind_esb.activity_data_defs add1 ON cad.data_id = add1.id
WHERE cad.activity_id = :activity_id
ORDER BY cad.customer_activity_id
LIMIT 100";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue("activity_id", $this->activity->getId());
        $stmt->execute();
        return $stmt->fetchAll();
    }

    private function getRequestedData()
    {
        /** @var Connection $conn */
        $conn = $this->getContainer()->get('database_connection');
        $sql = "SELECT ca.application_id, ca.activity_id, cad.customer_activity_id, ca.ext_ip, add1.name, cad.value, cad.created FROM gmind_esb.customer_activities ca
JOIN gmind_esb.customer_activity_data cad ON ca.id = cad.customer_activity_id
JOIN gmind_esb.activity_data_defs add1 ON cad.data_id = add1.id
WHERE cad.activity_id = :activity_id

UNION

SELECT ca.application_id, ca.activity_id, cag.customer_activity_id, ca.ext_ip, concat('[', gd.code, '] ', gd.description), cag.accepted, cag.created FROM gmind_esb.customer_activities ca
JOIN gmind_esb.customer_activity_giodo cag ON ca.id = cag.customer_activity_id
JOIN gmind_esb.giodo_definition gd ON cag.giodo_definition_id = gd.id
WHERE ca.activity_id = :activity_id

ORDER BY customer_activity_id DESC
LIMIT 1000";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue("activity_id", $this->activity->getId());
        $stmt->execute();
        return $stmt->fetchAll();
    }
}