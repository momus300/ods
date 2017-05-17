<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImportActivityGiodo
 *
 * @ORM\Table(name="import_activity_giodo", indexes={@ORM\Index(name="fk_activity_giodo_giodo_definition1_idx", columns={"giodo_definition_id"}), @ORM\Index(name="fk_activity_giodo_activities1_idx", columns={"activity_id"})})
 * @ORM\Entity
 */
class ImportActivityGiodo
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="required", type="boolean", nullable=false)
     */
    private $required = '1';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     *
     * @ORM\Column(name="giodo_definition_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $giodoDefinitionId;

    /**
     * @var integer
     *
     * @ORM\Column(name="activity_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $activityId;



    /**
     * Set required
     *
     * @param boolean $required
     *
     * @return ImportActivityGiodo
     */
    public function setRequired($required)
    {
        $this->required = $required;

        return $this;
    }

    /**
     * Get required
     *
     * @return boolean
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
     * @return ImportActivityGiodo
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
     * Set giodoDefinitionId
     *
     * @param integer $giodoDefinitionId
     *
     * @return ImportActivityGiodo
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
     * @return ImportActivityGiodo
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
}
