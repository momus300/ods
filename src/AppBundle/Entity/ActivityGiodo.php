<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActivityData
 *
 * @ORM\Table(name="activity_giodo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ActivityGiodoRepository")
 */
class ActivityGiodo
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \Activities
     *
     * @ORM\ManyToOne(targetEntity="Activities", inversedBy="giodo")
     * @ORM\JoinColumn(name="activity_id", referencedColumnName="id")
     *
     */
    private $activity;

    /**
     * @var \GiodoDefinition
     *
     * @ORM\ManyToOne(targetEntity="GiodoDefinition")
     * @ORM\JoinColumn(name="giodo_definition_id", referencedColumnName="id")
     */
    private $giodoDefinition;

    /**
     * @var bool
     *
     * @ORM\Column(name="required", type="boolean")
     */
    private $required;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created;


    /**
     * Set required
     *
     * @param boolean $required
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
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set activity
     *
     * @param \AppBundle\Entity\Activities $activity
     *
     * @return ActivityGiodo
     */
    public function setActivity(\AppBundle\Entity\Activities $activity)
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

    /**
     * Set giodoDefinition
     *
     * @param \AppBundle\Entity\GiodoDefinition $giodoDefinition
     *
     * @return ActivityGiodo
     */
    public function setGiodoDefinition(\AppBundle\Entity\GiodoDefinition $giodoDefinition = null)
    {
        $this->giodoDefinition = $giodoDefinition;

        return $this;
    }

    /**
     * Get giodoDefinition
     *
     * @return \AppBundle\Entity\GiodoDefinition
     */
    public function getGiodoDefinition()
    {
        return $this->giodoDefinition;
    }
}
