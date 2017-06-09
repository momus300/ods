<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LeadTestDrives
 *
 * @ORM\Table(name="lead_test_drives", indexes={@ORM\Index(name="fk_lead_test_drives_leads1_idx", columns={"lead_id"})})
 * @ORM\Entity
 */
class LeadTestDrives
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sent", type="datetime", nullable=false)
     */
    private $sent;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=45, nullable=true)
     */
    private $model;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=45, nullable=true)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_modified", type="datetime", nullable=true)
     */
    private $lastModified;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Leads
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Leads")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lead_id", referencedColumnName="id")
     * })
     */
    private $lead;



    /**
     * Set sent
     *
     * @param \DateTime $sent
     *
     * @return LeadTestDrives
     */
    public function setSent($sent)
    {
        $this->sent = $sent;

        return $this;
    }

    /**
     * Get sent
     *
     * @return \DateTime
     */
    public function getSent()
    {
        return $this->sent;
    }

    /**
     * Set model
     *
     * @param string $model
     *
     * @return LeadTestDrives
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return LeadTestDrives
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return LeadTestDrives
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
     * Set lastModified
     *
     * @param \DateTime $lastModified
     *
     * @return LeadTestDrives
     */
    public function setLastModified($lastModified)
    {
        $this->lastModified = $lastModified;

        return $this;
    }

    /**
     * Get lastModified
     *
     * @return \DateTime
     */
    public function getLastModified()
    {
        return $this->lastModified;
    }

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
     * Set lead
     *
     * @param \AppBundle\Entity\Leads $lead
     *
     * @return LeadTestDrives
     */
    public function setLead(\AppBundle\Entity\Leads $lead = null)
    {
        $this->lead = $lead;

        return $this;
    }

    /**
     * Get lead
     *
     * @return \AppBundle\Entity\Leads
     */
    public function getLead()
    {
        return $this->lead;
    }
}
