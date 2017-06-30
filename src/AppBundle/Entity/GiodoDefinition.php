<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * GiodoDefinition
 *
 * @ORM\Table(name="giodo_definition", indexes={@ORM\Index(name="code", columns={"code"})})
 * @ORM\Entity
 */
class GiodoDefinition
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
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=45, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="crm_code", type="string", nullable=true)
     */
    private $crmCode;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active = '1';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="active_from", type="datetime", nullable=true)
     */
    private $activeFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="active_to", type="datetime", nullable=true)
     */
    private $activeTo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modified", type="datetime", nullable=true)
     */
    private $modified;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Activities", inversedBy="giodoDefinition")
     * @ORM\JoinTable(name="activity_giodo",
     *   joinColumns={
     *     @ORM\JoinColumn(name="giodo_definition_id", referencedColumnName="id")
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
     * @ORM\ManyToMany(targetEntity="CustomerActivities", inversedBy="giodoDefinition")
     * @ORM\JoinTable(name="customer_activity_giodo",
     *   joinColumns={
     *     @ORM\JoinColumn(name="giodo_definition_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="customer_activity_id", referencedColumnName="id")
     *   }
     * )
     */
    private $customerActivity;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Leads", mappedBy="giodoDefinition")
     */
    private $lead;

    /**
     * @var \ActivityGiodo
     *
     * @ORM\OneToMany(targetEntity="ActivityGiodo", mappedBy="giodoDefinition")
     */
    private $giodoDefinitions;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->giodoDefinitions = new ArrayCollection();
        $this->activity = new ArrayCollection();
        $this->customerActivity = new ArrayCollection();
        $this->lead = new ArrayCollection();
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
     * @return GiodoDefinition
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
     * @return GiodoDefinition
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
     * Set code
     *
     * @param string $code
     *
     * @return GiodoDefinition
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
     * Set crmCode
     *
     * @param string $crmCode
     *
     * @return GiodoDefinition
     */
    public function setCrmCode($crmCode)
    {
        $this->crmCode = $crmCode;

        return $this;
    }

    /**
     * Get crmCode
     *
     * @return string
     */
    public function getCrmCode()
    {
        return $this->crmCode;
    }

    /**
     * Set active
     *
     * @param boolean $active
     *
     * @return GiodoDefinition
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set activeFrom
     *
     * @param \DateTime $activeFrom
     *
     * @return GiodoDefinition
     */
    public function setActiveFrom($activeFrom)
    {
        $this->activeFrom = $activeFrom;

        return $this;
    }

    /**
     * Get activeFrom
     *
     * @return \DateTime
     */
    public function getActiveFrom()
    {
        return $this->activeFrom;
    }

    /**
     * Set activeTo
     *
     * @param \DateTime $activeTo
     *
     * @return GiodoDefinition
     */
    public function setActiveTo($activeTo)
    {
        $this->activeTo = $activeTo;

        return $this;
    }

    /**
     * Get activeTo
     *
     * @return \DateTime
     */
    public function getActiveTo()
    {
        return $this->activeTo;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return GiodoDefinition
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
     * Set modified
     *
     * @param \DateTime $modified
     *
     * @return GiodoDefinition
     */
    public function setModified($modified)
    {
        $this->modified = $modified;

        return $this;
    }

    /**
     * Get modified
     *
     * @return \DateTime
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * Add activity
     *
     * @param \AppBundle\Entity\Activities $activity
     *
     * @return GiodoDefinition
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
     * Add customerActivity
     *
     * @param \AppBundle\Entity\CustomerActivities $customerActivity
     *
     * @return GiodoDefinition
     */
    public function addCustomerActivity(\AppBundle\Entity\CustomerActivities $customerActivity)
    {
        $this->customerActivity[] = $customerActivity;

        return $this;
    }

    /**
     * Remove customerActivity
     *
     * @param \AppBundle\Entity\CustomerActivities $customerActivity
     */
    public function removeCustomerActivity(\AppBundle\Entity\CustomerActivities $customerActivity)
    {
        $this->customerActivity->removeElement($customerActivity);
    }

    /**
     * Get customerActivity
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCustomerActivity()
    {
        return $this->customerActivity;
    }

    /**
     * Add lead
     *
     * @param \AppBundle\Entity\Leads $lead
     *
     * @return GiodoDefinition
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

    /**
     * Add giodoDefinition
     *
     * @param \AppBundle\Entity\ActivityGiodo $giodoDefinition
     *
     * @return GiodoDefinition
     */
    public function addGiodoDefinition(\AppBundle\Entity\ActivityGiodo $giodoDefinition)
    {
        $this->giodoDefinitions[] = $giodoDefinition;

        return $this;
    }

    /**
     * Remove giodoDefinition
     *
     * @param \AppBundle\Entity\ActivityGiodo $giodoDefinition
     */
    public function removeGiodoDefinition(\AppBundle\Entity\ActivityGiodo $giodoDefinition)
    {
        $this->giodoDefinitions->removeElement($giodoDefinition);
    }

    /**
     * Get giodoDefinitions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGiodoDefinitions()
    {
        return $this->giodoDefinitions;
    }
}
