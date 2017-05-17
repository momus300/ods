<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActivityExportDefActivity
 *
 * @ORM\Table(name="activity_export_def_activity", indexes={@ORM\Index(name="fk_activity_export_defs_application_activities_activity_exp_idx", columns={"activity_export_def_id"}), @ORM\Index(name="fk_activity_export_def_activity_activities1_idx", columns={"activity_id"})})
 * @ORM\Entity
 */
class ActivityExportDefActivity
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
     * @var \AppBundle\Entity\ActivityExportDefs
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\ActivityExportDefs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="activity_export_def_id", referencedColumnName="id")
     * })
     */
    private $activityExportDef;

    /**
     * @var \AppBundle\Entity\Activities
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Activities")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="activity_id", referencedColumnName="id")
     * })
     */
    private $activity;



    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return ActivityExportDefActivity
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
     * Set activityExportDef
     *
     * @param \AppBundle\Entity\ActivityExportDefs $activityExportDef
     *
     * @return ActivityExportDefActivity
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
     * Set activity
     *
     * @param \AppBundle\Entity\Activities $activity
     *
     * @return ActivityExportDefActivity
     */
    public function setActivity(\AppBundle\Entity\Activities $activity = null)
    {
        $this->activity = $activity;

        return $this;
    }

    /**
     * Get activity
     *
     * @return \AppBundle\Entity\Activities
     */
    public function getActivity()
    {
        return $this->activity;
    }
}
