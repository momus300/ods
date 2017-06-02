<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ApplicationIps
 *
 * @ORM\Table(name="application_ips", indexes={@ORM\Index(name="IDX_D04BA5593E030ACD", columns={"application_id"})})
 * @ORM\Entity(repositoryClass="AppBundle\Entity\ApplicationIpsRepository")
 */
class ApplicationIps
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=15)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ip;

    /**
     * @var \AppBundle\Entity\Applications
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Applications")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="application_id", referencedColumnName="id")
     * })
     */
    private $application;



    /**
     * Set created
     *
     * @ORM\PrePersist()
     *
     * @return ApplicationIps
     */
    public function setCreated()
    {
        $this->created = new \DateTime();

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
     * Set ip
     *
     * @param string $ip
     *
     * @return ApplicationIps
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

    /**
     * Set application
     *
     * @param \AppBundle\Entity\Applications $application
     *
     * @return ApplicationIps
     */
    public function setApplication(\AppBundle\Entity\Applications $application)
    {
        $this->application = $application;

        return $this;
    }

    /**
     * Get application
     *
     * @return \AppBundle\Entity\Applications
     */
    public function getApplication()
    {
        return $this->application;
    }
}
