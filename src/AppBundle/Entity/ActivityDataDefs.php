<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActivityDataDefs
 *
 * @ORM\Table(name="activity_data_defs", uniqueConstraints={@ORM\UniqueConstraint(name="ind_name", columns={"name"})})
 * @ORM\Entity
 */
class ActivityDataDefs
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
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="optout_delete", type="boolean", nullable=false)
     */
    private $optoutDelete = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=20, nullable=false)
     */
    private $type = 'string';

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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Activities", mappedBy="data")
     */
    private $activity;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Leads", mappedBy="activityDataDef")
     */
    private $lead;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->activity = new \Doctrine\Common\Collections\ArrayCollection();
        $this->lead = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     *
     * @return ActivityDataDefs
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return ActivityDataDefs
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set optoutDelete
     *
     * @param boolean $optoutDelete
     *
     * @return ActivityDataDefs
     */
    public function setOptoutDelete($optoutDelete)
    {
        $this->optoutDelete = $optoutDelete;

        return $this;
    }

    /**
     * Get optoutDelete
     *
     * @return boolean
     */
    public function getOptoutDelete()
    {
        return $this->optoutDelete;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return ActivityDataDefs
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return ActivityDataDefs
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
     * @return ActivityDataDefs
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
     * Add activity
     *
     * @param \AppBundle\Entity\Activities $activity
     *
     * @return ActivityDataDefs
     */
    public function addActivity(\AppBundle\Entity\Activities $activity)
    {
        $this->activity[] = $activity;

        return $this;
    }

    /**
     * Remove activity
     *
     * @param \AppBundle\Entity\Activities $activity
     */
    public function removeActivity(\AppBundle\Entity\Activities $activity)
    {
        $this->activity->removeElement($activity);
    }

    /**
     * Get activity
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * Add lead
     *
     * @param \AppBundle\Entity\Leads $lead
     *
     * @return ActivityDataDefs
     */
    public function addLead(\AppBundle\Entity\Leads $lead)
    {
        $this->lead[] = $lead;

        return $this;
    }

    /**
     * Remove lead
     *
     * @param \AppBundle\Entity\Leads $lead
     */
    public function removeLead(\AppBundle\Entity\Leads $lead)
    {
        $this->lead->removeElement($lead);
    }

    /**
     * Get lead
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLead()
    {
        return $this->lead;
    }
}
