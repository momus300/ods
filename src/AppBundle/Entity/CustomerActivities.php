<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerActivities
 *
 * @ORM\Table(name="customer_activities", indexes={@ORM\Index(name="fk_activities_has_customers_customers1_idx", columns={"customer_id"}), @ORM\Index(name="fk_customer_activities_cc_configurations1_idx", columns={"cc_configuration_id"}), @ORM\Index(name="fk_customer_activities_sessions1_idx", columns={"session_id"}), @ORM\Index(name="created_idx", columns={"created"}), @ORM\Index(name="fk_customer_activities_application_activities1_idx", columns={"application_id"}), @ORM\Index(name="fk_customer_activities_activity_sources1_idx", columns={"activity_source_id"}), @ORM\Index(name="fk_customer_activities_customer_activity_imports1_idx", columns={"customer_activity_import_id"}), @ORM\Index(name="fk_customer_activities_activities1_idx", columns={"activity_id"}), @ORM\Index(name="idx_lead_processed", columns={"lead_processed"}), @ORM\Index(name="value_idx", columns={"value"})})
 * @ORM\Entity
 */
class CustomerActivities
{
    /**
     * @var integer
     *
     * @ORM\Column(name="customer_activity_import_id", type="integer", nullable=true)
     */
    private $customerActivityImportId;

    /**
     * @var integer
     *
     * @ORM\Column(name="value", type="integer", nullable=true)
     */
    private $value;

    /**
     * @var string
     *
     * @ORM\Column(name="data", type="text", length=65535, nullable=true)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="ext_ip", type="string", length=15, nullable=false)
     */
    private $extIp;

    /**
     * @var boolean
     *
     * @ORM\Column(name="lead_processed", type="boolean", nullable=false)
     */
    private $leadProcessed = 'b\'0\'';

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
     * @var \AppBundle\Entity\CcConfigurations
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\CcConfigurations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cc_configuration_id", referencedColumnName="id")
     * })
     */
    private $ccConfiguration;

    /**
     * @var \AppBundle\Entity\Sessions
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Sessions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="session_id", referencedColumnName="id")
     * })
     */
    private $session;

    /**
     * @var \AppBundle\Entity\Customers
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Customers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customer_id", referencedColumnName="id")
     * })
     */
    private $customer;

    /**
     * @var \AppBundle\Entity\ApplicationActivities
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\ApplicationActivities")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="application_id", referencedColumnName="application_id")
     * })
     */
    private $application;

    /**
     * @var \AppBundle\Entity\ActivitySources
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\ActivitySources")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="activity_source_id", referencedColumnName="id")
     * })
     */
    private $activitySource;

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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\GiodoDefinition", mappedBy="customerActivity")
     */
    private $giodoDefinition;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->giodoDefinition = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set customerActivityImportId
     *
     * @param integer $customerActivityImportId
     *
     * @return CustomerActivities
     */
    public function setCustomerActivityImportId($customerActivityImportId)
    {
        $this->customerActivityImportId = $customerActivityImportId;

        return $this;
    }

    /**
     * Get customerActivityImportId
     *
     * @return integer
     */
    public function getCustomerActivityImportId()
    {
        return $this->customerActivityImportId;
    }

    /**
     * Set value
     *
     * @param integer $value
     *
     * @return CustomerActivities
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return integer
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set data
     *
     * @param string $data
     *
     * @return CustomerActivities
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set extIp
     *
     * @param string $extIp
     *
     * @return CustomerActivities
     */
    public function setExtIp($extIp)
    {
        $this->extIp = $extIp;

        return $this;
    }

    /**
     * Get extIp
     *
     * @return string
     */
    public function getExtIp()
    {
        return $this->extIp;
    }

    /**
     * Set leadProcessed
     *
     * @param boolean $leadProcessed
     *
     * @return CustomerActivities
     */
    public function setLeadProcessed($leadProcessed)
    {
        $this->leadProcessed = $leadProcessed;

        return $this;
    }

    /**
     * Get leadProcessed
     *
     * @return boolean
     */
    public function getLeadProcessed()
    {
        return $this->leadProcessed;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return CustomerActivities
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
     * Set ccConfiguration
     *
     * @param \AppBundle\Entity\CcConfigurations $ccConfiguration
     *
     * @return CustomerActivities
     */
    public function setCcConfiguration(\AppBundle\Entity\CcConfigurations $ccConfiguration = null)
    {
        $this->ccConfiguration = $ccConfiguration;

        return $this;
    }

    /**
     * Get ccConfiguration
     *
     * @return \AppBundle\Entity\CcConfigurations
     */
    public function getCcConfiguration()
    {
        return $this->ccConfiguration;
    }

    /**
     * Set session
     *
     * @param \AppBundle\Entity\Sessions $session
     *
     * @return CustomerActivities
     */
    public function setSession(\AppBundle\Entity\Sessions $session = null)
    {
        $this->session = $session;

        return $this;
    }

    /**
     * Get session
     *
     * @return \AppBundle\Entity\Sessions
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * Set customer
     *
     * @param \AppBundle\Entity\Customers $customer
     *
     * @return CustomerActivities
     */
    public function setCustomer(\AppBundle\Entity\Customers $customer = null)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer
     *
     * @return \AppBundle\Entity\Customers
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set application
     *
     * @param \AppBundle\Entity\ApplicationActivities $application
     *
     * @return CustomerActivities
     */
    public function setApplication(\AppBundle\Entity\ApplicationActivities $application = null)
    {
        $this->application = $application;

        return $this;
    }

    /**
     * Get application
     *
     * @return \AppBundle\Entity\ApplicationActivities
     */
    public function getApplication()
    {
        return $this->application;
    }

    /**
     * Set activitySource
     *
     * @param \AppBundle\Entity\ActivitySources $activitySource
     *
     * @return CustomerActivities
     */
    public function setActivitySource(\AppBundle\Entity\ActivitySources $activitySource = null)
    {
        $this->activitySource = $activitySource;

        return $this;
    }

    /**
     * Get activitySource
     *
     * @return \AppBundle\Entity\ActivitySources
     */
    public function getActivitySource()
    {
        return $this->activitySource;
    }

    /**
     * Set activity
     *
     * @param \AppBundle\Entity\Activities $activity
     *
     * @return CustomerActivities
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

    /**
     * Add giodoDefinition
     *
     * @param \AppBundle\Entity\GiodoDefinition $giodoDefinition
     *
     * @return CustomerActivities
     */
    public function addGiodoDefinition(\AppBundle\Entity\GiodoDefinition $giodoDefinition)
    {
        $this->giodoDefinition[] = $giodoDefinition;

        return $this;
    }

    /**
     * Remove giodoDefinition
     *
     * @param \AppBundle\Entity\GiodoDefinition $giodoDefinition
     */
    public function removeGiodoDefinition(\AppBundle\Entity\GiodoDefinition $giodoDefinition)
    {
        $this->giodoDefinition->removeElement($giodoDefinition);
    }

    /**
     * Get giodoDefinition
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGiodoDefinition()
    {
        return $this->giodoDefinition;
    }
}
