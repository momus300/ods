<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImportActivityData
 *
 * @ORM\Table(name="import_activity_data", indexes={@ORM\Index(name="fk_activities_has_activity_data_defs_activity_data_defs1_idx", columns={"data_id"}), @ORM\Index(name="fk_activities_has_activity_data_defs_activities1_idx", columns={"activity_id"})})
 * @ORM\Entity
 */
class ImportActivityData
{
    /**
     * @var string
     *
     * @ORM\Column(name="default_value", type="text", length=65535, nullable=true)
     */
    private $defaultValue;

    /**
     * @var integer
     *
     * @ORM\Column(name="required", type="integer", nullable=false)
     */
    private $required = '0';

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
     * @ORM\Column(name="activity_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $activityId;

    /**
     * @var integer
     *
     * @ORM\Column(name="data_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $dataId;



    /**
     * Set defaultValue
     *
     * @param string $defaultValue
     *
     * @return ImportActivityData
     */
    public function setDefaultValue($defaultValue)
    {
        $this->defaultValue = $defaultValue;

        return $this;
    }

    /**
     * Get defaultValue
     *
     * @return string
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }

    /**
     * Set required
     *
     * @param integer $required
     *
     * @return ImportActivityData
     */
    public function setRequired($required)
    {
        $this->required = $required;

        return $this;
    }

    /**
     * Get required
     *
     * @return integer
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return ImportActivityData
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
     * @return ImportActivityData
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
     * Set activityId
     *
     * @param integer $activityId
     *
     * @return ImportActivityData
     */
    public function setActivityId($activityId)
    {
        $this->activityId = $activityId;

        return $this;
    }

    /**
     * Get activityId
     *
     * @return integer
     */
    public function getActivityId()
    {
        return $this->activityId;
    }

    /**
     * Set dataId
     *
     * @param integer $dataId
     *
     * @return ImportActivityData
     */
    public function setDataId($dataId)
    {
        $this->dataId = $dataId;

        return $this;
    }

    /**
     * Get dataId
     *
     * @return integer
     */
    public function getDataId()
    {
        return $this->dataId;
    }
}
