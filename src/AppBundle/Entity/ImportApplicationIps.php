<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImportApplicationIps
 *
 * @ORM\Table(name="import_application_ips")
 * @ORM\Entity
 */
class ImportApplicationIps
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     *
     * @ORM\Column(name="application_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $applicationId;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=15)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ip;



    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return ImportApplicationIps
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set applicationId
     *
     * @param integer $applicationId
     *
     * @return ImportApplicationIps
     */
    public function setApplicationId($applicationId)
    {
        $this->applicationId = $applicationId;

        return $this;
    }

    /**
     * Get applicationId
     *
     * @return integer
     */
    public function getApplicationId()
    {
        return $this->applicationId;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return ImportApplicationIps
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }
}
