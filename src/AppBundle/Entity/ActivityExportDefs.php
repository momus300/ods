<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActivityExportDefs
 *
 * @ORM\Table(name="activity_export_defs")
 * @ORM\Entity
 */
class ActivityExportDefs
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
     * @ORM\Column(name="code", type="string", length=20, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

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
     * @ORM\ManyToMany(targetEntity="Activities", inversedBy="activityExportDef")
     * @ORM\JoinTable(name="activity_export_def_activity",
     *   joinColumns={
     *     @ORM\JoinColumn(name="activity_export_def_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="activity_id", referencedColumnName="id")
     *   }
     * )
     */
    private $activity;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Applications", inversedBy="activityExportDef")
     * @ORM\JoinTable(name="activity_export_def_application",
     *   joinColumns={
     *     @ORM\JoinColumn(name="activity_export_def_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="application_id", referencedColumnName="id")
     *   }
     * )
     */
    private $application;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->activity = new \Doctrine\Common\Collections\ArrayCollection();
        $this->application = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set code
     *
     * @param string $code
     *
     * @return ActivityExportDefs
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return ActivityExportDefs
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
     * @return ActivityExportDefs
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
     * Set created
     *
     * @param \DateTime $created
     *
     * @return ActivityExportDefs
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
     * @return ActivityExportDefs
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
     * @return ActivityExportDefs
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
     * Add application
     *
     * @param \AppBundle\Entity\Applications $application
     *
     * @return ActivityExportDefs
     */
    public function addApplication(\AppBundle\Entity\Applications $application)
    {
        $this->application[] = $application;

        return $this;
    }

    /**
     * Remove application
     *
     * @param \AppBundle\Entity\Applications $application
     */
    public function removeApplication(\AppBundle\Entity\Applications $application)
    {
        $this->application->removeElement($application);
    }

    /**
     * Get application
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getApplication()
    {
        return $this->application;
    }
}
