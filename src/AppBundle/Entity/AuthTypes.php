<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AuthTypes
 *
 * @ORM\Table(name="auth_types", uniqueConstraints={@ORM\UniqueConstraint(name="type_UNIQUE", columns={"type"})})
 * @ORM\Entity
 */
class AuthTypes
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
     * @ORM\Column(name="type", type="string", length=50, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_global", type="boolean", nullable=false)
     */
    private $isGlobal = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="customer_field", type="string", length=50, nullable=true)
     */
    private $customerField;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_field_required", type="boolean", nullable=false)
     */
    private $customerFieldRequired = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active = '1';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="active_start", type="datetime", nullable=true)
     */
    private $activeStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="active_end", type="datetime", nullable=true)
     */
    private $activeEnd;

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
     * @ORM\ManyToMany(targetEntity="Applications", inversedBy="authType")
     * @ORM\JoinTable(name="application_auth_types",
     *   joinColumns={
     *     @ORM\JoinColumn(name="auth_type_id", referencedColumnName="id")
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
     * Set type
     *
     * @param string $type
     *
     * @return AuthTypes
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
     * Set description
     *
     * @param string $description
     *
     * @return AuthTypes
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
     * Set isGlobal
     *
     * @param boolean $isGlobal
     *
     * @return AuthTypes
     */
    public function setIsGlobal($isGlobal)
    {
        $this->isGlobal = $isGlobal;

        return $this;
    }

    /**
     * Get isGlobal
     *
     * @return boolean
     */
    public function getIsGlobal()
    {
        return $this->isGlobal;
    }

    /**
     * Set customerField
     *
     * @param string $customerField
     *
     * @return AuthTypes
     */
    public function setCustomerField($customerField)
    {
        $this->customerField = $customerField;

        return $this;
    }

    /**
     * Get customerField
     *
     * @return string
     */
    public function getCustomerField()
    {
        return $this->customerField;
    }

    /**
     * Set customerFieldRequired
     *
     * @param boolean $customerFieldRequired
     *
     * @return AuthTypes
     */
    public function setCustomerFieldRequired($customerFieldRequired)
    {
        $this->customerFieldRequired = $customerFieldRequired;

        return $this;
    }

    /**
     * Get customerFieldRequired
     *
     * @return boolean
     */
    public function getCustomerFieldRequired()
    {
        return $this->customerFieldRequired;
    }

    /**
     * Set active
     *
     * @param boolean $active
     *
     * @return AuthTypes
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
     * Set activeStart
     *
     * @param \DateTime $activeStart
     *
     * @return AuthTypes
     */
    public function setActiveStart($activeStart)
    {
        $this->activeStart = $activeStart;

        return $this;
    }

    /**
     * Get activeStart
     *
     * @return \DateTime
     */
    public function getActiveStart()
    {
        return $this->activeStart;
    }

    /**
     * Set activeEnd
     *
     * @param \DateTime $activeEnd
     *
     * @return AuthTypes
     */
    public function setActiveEnd($activeEnd)
    {
        $this->activeEnd = $activeEnd;

        return $this;
    }

    /**
     * Get activeEnd
     *
     * @return \DateTime
     */
    public function getActiveEnd()
    {
        return $this->activeEnd;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return AuthTypes
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
     * @return AuthTypes
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
     * Add application
     *
     * @param \AppBundle\Entity\Applications $application
     *
     * @return AuthTypes
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
