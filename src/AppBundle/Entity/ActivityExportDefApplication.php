<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActivityExportDefApplication
 *
 * @ORM\Table(name="activity_export_def_application", indexes={@ORM\Index(name="fk_activity_export_defs_has_applications_applications1_idx", columns={"application_id"}), @ORM\Index(name="fk_activity_export_defs_has_applications_activity_export_de_idx", columns={"activity_export_def_id"})})
 * @ORM\Entity
 */
class ActivityExportDefApplication
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
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Applications
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Applications")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="application_id", referencedColumnName="id")
     * })
     */
    private $application;

    /**
     * @var \AppBundle\Entity\ActivityExportDefs
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\ActivityExportDefs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="activity_export_def_id", referencedColumnName="id")
     * })
     */
    private $activityExportDef;



    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return ActivityExportDefApplication
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set application
     *
     * @param \AppBundle\Entity\Applications $application
     *
     * @return ActivityExportDefApplication
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

    /**
     * Set activityExportDef
     *
     * @param \AppBundle\Entity\ActivityExportDefs $activityExportDef
     *
     * @return ActivityExportDefApplication
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
}
