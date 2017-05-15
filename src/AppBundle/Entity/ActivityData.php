<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActivityData
 *
 * @ORM\Table(name="activity_data")
 * @ORM\Entity
 */
class ActivityData
{
    /**
     * @var integer
     *
     * @ORM\Column(name="activity_id", type="integer", nullable=true)
     */
    private $activityId;

    /**
     * @var integer
     *
     * @ORM\Column(name="data_id", type="integer", nullable=true)
     */
    private $dataId;

    /**
     * @var string
     *
     * @ORM\Column(name="default_value", type="string", length=18, nullable=true)
     */
    private $defaultValue;

    /**
     * @var integer
     *
     * @ORM\Column(name="required", type="integer", nullable=true)
     */
    private $required;

    /**
     * @var string
     *
     * @ORM\Column(name="created", type="string", length=19, nullable=true)
     */
    private $created;

    /**
     * @var string
     *
     * @ORM\Column(name="last_modified", type="string", length=19, nullable=true)
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
     * Set activityId
     *
     * @param integer $activityId
     *
     * @return ActivityData
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
     * @return ActivityData
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

    /**
     * Set defaultValue
     *
     * @param string $defaultValue
     *
     * @return ActivityData
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
     * @return ActivityData
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
     * @param string $created
     *
     * @return ActivityData
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set lastModified
     *
     * @param string $lastModified
     *
     * @return ActivityData
     */
    public function setLastModified($lastModified)
    {
        $this->lastModified = $lastModified;

        return $this;
    }

    /**
     * Get lastModified
     *
     * @return string
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
}
