<?php

namespace AppBundle\Utils;

use AppBundle\Entity\Activities;
use AppBundle\Entity\ActivityDataDefs;
use AppBundle\Entity\Applications;

class CsvExport
{
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

    public function generateFile()
    {
        $serializer = $this->getContainer()->get('serializer');
        $content = $serializer->encode($this->getData(), 'csv');
        $fileName = sprintf('%s.csv', $this->application->getAppId());
        $this->saveFile($fileName, $content);

        return $content;
    }

    public function getFileContent()
    {
        return $this->generateFile();
    }

    private function getData()
    {
        /** @var ActivityDataDefs $data */
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
//                'activity_data_required' => $data->getName(),
                'activity_data_type' => 'DATA'
            ];
        }

        return $excelData;
    }
}