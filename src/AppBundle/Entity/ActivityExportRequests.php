<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActivityExportRequests
 *
 * @ORM\Table(name="activity_export_requests", indexes={@ORM\Index(name="fk_activity_export_applications1_idx", columns={"application_id"}), @ORM\Index(name="fk_activity_export_activity_export_defs1_idx", columns={"activity_export_def_id"})})
 * @ORM\Entity
 */
class ActivityExportRequests
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="reason", type="string", length=100, nullable=false)
     */
    private $reason = 'Zaplanowany eksport danych';

    /**
     * @var string
     *
     * @ORM\Column(name="ext_ip", type="string", length=15, nullable=false)
     */
    private $extIp;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="confirm_token", type="string", length=32, nullable=false)
     */
    private $confirmToken;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created = 'CURRENT_TIMESTAMP';

    /**
     * @var \ActivityExportDefs
     *
     * @ORM\ManyToOne(targetEntity="ActivityExportDefs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="activity_export_def_id", referencedColumnName="id")
     * })
     */
    private $activityExportDef;

    /**
     * @var \Applications
     *
     * @ORM\ManyToOne(targetEntity="Applications")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="application_id", referencedColumnName="id")
     * })
     */
    private $application;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set reason
     *
     * @param string $reason
     *
     * @return ActivityExportRequests
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * Get reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Set extIp
     *
     * @param string $extIp
     *
     * @return ActivityExportRequests
     */
    public function setExtIp($extIp)
    {
        $this->extIp = $extIp;

        return $this;
    }

    /**
     * Get extIp
     *
     * @return string
     */
    public function getExtIp()
    {
        return $this->extIp;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return ActivityExportRequests
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set confirmToken
     *
     * @param string $confirmToken
     *
     * @return ActivityExportRequests
     */
    public function setConfirmToken($confirmToken)
    {
        $this->confirmToken = $confirmToken;

        return $this;
    }

    /**
     * Get confirmToken
     *
     * @return string
     */
    public function getConfirmToken()
    {
        return $this->confirmToken;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return ActivityExportRequests
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
     * Set activityExportDef
     *
     * @param \AppBundle\Entity\ActivityExportDefs $activityExportDef
     *
     * @return ActivityExportRequests
     */
    public function setActivityExportDef(\AppBundle\Entity\ActivityExportDefs $activityExportDef = null)
    {
        $this->activityExportDef = $activityExportDef;

        return $this;
    }

    /**
     * Get activityExportDef
     *
     * @return \AppBundle\Entity\ActivityExportDefs
     */
    public function getActivityExportDef()
    {
        return $this->activityExportDef;
    }

    /**
     * Set application
     *
     * @param \AppBundle\Entity\Applications $application
     *
     * @return ActivityExportRequests
     */
    public function setApplication(\AppBundle\Entity\Applications $application = null)
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
