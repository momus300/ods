<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActivityGiodo
 *
 * @ORM\Table(name="activity_giodo")
 * @ORM\Entity
 */
class ActivityGiodo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="giodo_definition_id", type="integer", nullable=true)
     */
    private $giodoDefinitionId;

    /**
     * @var integer
     *
     * @ORM\Column(name="activity_id", type="integer", nullable=true)
     */
    private $activityId;

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
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set giodoDefinitionId
     *
     * @param integer $giodoDefinitionId
     *
     * @return ActivityGiodo
     */
    public function setGiodoDefinitionId($giodoDefinitionId)
    {
        $this->giodoDefinitionId = $giodoDefinitionId;

        return $this;
    }

    /**
     * Get giodoDefinitionId
     *
     * @return integer
     */
    public function getGiodoDefinitionId()
    {
        return $this->giodoDefinitionId;
    }

    /**
     * Set activityId
     *
     * @param integer $activityId
     *
     * @return ActivityGiodo
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
     * Set required
     *
     * @param integer $required
     *
     * @return ActivityGiodo
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
     * @return ActivityGiodo
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
