<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Leads
 *
 * @ORM\Table(name="leads", uniqueConstraints={@ORM\UniqueConstraint(name="email", columns={"email", "brand_set_id"})}, indexes={@ORM\Index(name="fk_leads_brand_sets1_idx", columns={"brand_set_id"}), @ORM\Index(name="fk_leads_customers1_idx", columns={"customer_id"})})
 * @ORM\Entity
 */
class Leads
{
    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=false)
     */
    private $email;

    /**
     * @var boolean
     *
     * @ORM\Column(name="opt_out", type="boolean", nullable=true)
     */
    private $optOut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="opt_out_date", type="datetime", nullable=true)
     */
    private $optOutDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_fm_sent", type="datetime", nullable=true)
     */
    private $lastFmSent;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=100, nullable=true)
     */
    private $surname;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=100, nullable=true)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_no", type="string", length=100, nullable=true)
     */
    private $phoneNo;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=10, nullable=true)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="owned_car_model", type="string", length=50, nullable=true)
     */
    private $ownedCarModel;

    /**
     * @var string
     *
     * @ORM\Column(name="owned_car_year", type="string", length=5, nullable=true)
     */
    private $ownedCarYear;

    /**
     * @var string
     *
     * @ORM\Column(name="car_model", type="string", length=10, nullable=true)
     */
    private $carModel;

    /**
     * @var string
     *
     * @ORM\Column(name="estimated_buy", type="string", length=50, nullable=true)
     */
    private $estimatedBuy;

    /**
     * @var string
     *
     * @ORM\Column(name="model_expert", type="string", length=50, nullable=true)
     */
    private $modelExpert;

    /**
     * @var string
     *
     * @ORM\Column(name="newsletter_group", type="string", length=50, nullable=true)
     */
    private $newsletterGroup;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="bounce_hard_date", type="datetime", nullable=true)
     */
    private $bounceHardDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="bounce_soft_date", type="datetime", nullable=true)
     */
    private $bounceSoftDate;

    /**
     * @var string
     *
     * @ORM\Column(name="source", type="string", length=100, nullable=true)
     */
    private $source;

    /**
     * @var string
     *
     * @ORM\Column(name="action_name", type="string", length=100, nullable=true)
     */
    private $actionName;

    /**
     * @var string
     *
     * @ORM\Column(name="activity_code", type="string", length=100, nullable=true)
     */
    private $activityCode;

    /**
     * @var string
     *
     * @ORM\Column(name="action_type", type="string", length=20, nullable=true)
     */
    private $actionType;

    /**
     * @var boolean
     *
     * @ORM\Column(name="lead_type", type="boolean", nullable=true)
     */
    private $leadType;

    /**
     * @var string
     *
     * @ORM\Column(name="login_code", type="string", length=20, nullable=true)
     */
    private $loginCode;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_ck_id", type="string", length=30, nullable=true)
     */
    private $customerCkId;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_activity_id", type="integer", nullable=true)
     */
    private $customerActivityId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="giodo", type="boolean", nullable=true)
     */
    private $giodo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="test_drive_status", type="string", length=30, nullable=true)
     */
    private $testDriveStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="test_drive_model", type="string", length=30, nullable=true)
     */
    private $testDriveModel;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="test_drive_date", type="datetime", nullable=true)
     */
    private $testDriveDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="check_offer_date", type="datetime", nullable=true)
     */
    private $checkOfferDate;

    /**
     * @var string
     *
     * @ORM\Column(name="check_offer_model", type="string", length=30, nullable=true)
     */
    private $checkOfferModel;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="configuration_date", type="datetime", nullable=true)
     */
    private $configurationDate;

    /**
     * @var string
     *
     * @ORM\Column(name="action_name_newsletter", type="string", length=100, nullable=true)
     */
    private $actionNameNewsletter;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="test_drive_date_newsletter", type="datetime", nullable=true)
     */
    private $testDriveDateNewsletter;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="check_offer_date_newsletter", type="datetime", nullable=true)
     */
    private $checkOfferDateNewsletter;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="configuration_date_newsletter", type="datetime", nullable=true)
     */
    private $configurationDateNewsletter;

    /**
     * @var string
     *
     * @ORM\Column(name="configuration_model", type="string", length=30, nullable=true)
     */
    private $configurationModel;

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
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\BrandSets
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\BrandSets")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="brand_set_id", referencedColumnName="id")
     * })
     */
    private $brandSet;

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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\GiodoDefinition", inversedBy="lead")
     * @ORM\JoinTable(name="leads_giodo_definitions",
     *   joinColumns={
     *     @ORM\JoinColumn(name="lead_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="giodo_definition_id", referencedColumnName="id")
     *   }
     * )
     */
    private $giodoDefinition;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\CustomerActivities", inversedBy="lead")
     * @ORM\JoinTable(name="leads_customer_activities",
     *   joinColumns={
     *     @ORM\JoinColumn(name="lead_id", referencedColumnName="id")
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
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\ActivityDataDefs", inversedBy="lead")
     * @ORM\JoinTable(name="leads_activity_data_defs",
     *   joinColumns={
     *     @ORM\JoinColumn(name="lead_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="activity_data_def_id", referencedColumnName="id")
     *   }
     * )
     */
    private $activityDataDef;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\CcConfigurations", inversedBy="lead")
     * @ORM\JoinTable(name="leads_cc_configurations",
     *   joinColumns={
     *     @ORM\JoinColumn(name="lead_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="cc_configuration_id", referencedColumnName="id")
     *   }
     * )
     */
    private $ccConfiguration;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->giodoDefinition = new \Doctrine\Common\Collections\ArrayCollection();
        $this->customerActivity = new \Doctrine\Common\Collections\ArrayCollection();
        $this->activityDataDef = new \Doctrine\Common\Collections\ArrayCollection();
        $this->ccConfiguration = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set email
     *
     * @param string $email
     *
     * @return Leads
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set optOut
     *
     * @param boolean $optOut
     *
     * @return Leads
     */
    public function setOptOut($optOut)
    {
        $this->optOut = $optOut;

        return $this;
    }

    /**
     * Get optOut
     *
     * @return boolean
     */
    public function getOptOut()
    {
        return $this->optOut;
    }

    /**
     * Set optOutDate
     *
     * @param \DateTime $optOutDate
     *
     * @return Leads
     */
    public function setOptOutDate($optOutDate)
    {
        $this->optOutDate = $optOutDate;

        return $this;
    }

    /**
     * Get optOutDate
     *
     * @return \DateTime
     */
    public function getOptOutDate()
    {
        return $this->optOutDate;
    }

    /**
     * Set lastFmSent
     *
     * @param \DateTime $lastFmSent
     *
     * @return Leads
     */
    public function setLastFmSent($lastFmSent)
    {
        $this->lastFmSent = $lastFmSent;

        return $this;
    }

    /**
     * Get lastFmSent
     *
     * @return \DateTime
     */
    public function getLastFmSent()
    {
        return $this->lastFmSent;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Leads
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
     * Set surname
     *
     * @param string $surname
     *
     * @return Leads
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Leads
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set phoneNo
     *
     * @param string $phoneNo
     *
     * @return Leads
     */
    public function setPhoneNo($phoneNo)
    {
        $this->phoneNo = $phoneNo;

        return $this;
    }

    /**
     * Get phoneNo
     *
     * @return string
     */
    public function getPhoneNo()
    {
        return $this->phoneNo;
    }

    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return Leads
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set ownedCarModel
     *
     * @param string $ownedCarModel
     *
     * @return Leads
     */
    public function setOwnedCarModel($ownedCarModel)
    {
        $this->ownedCarModel = $ownedCarModel;

        return $this;
    }

    /**
     * Get ownedCarModel
     *
     * @return string
     */
    public function getOwnedCarModel()
    {
        return $this->ownedCarModel;
    }

    /**
     * Set ownedCarYear
     *
     * @param string $ownedCarYear
     *
     * @return Leads
     */
    public function setOwnedCarYear($ownedCarYear)
    {
        $this->ownedCarYear = $ownedCarYear;

        return $this;
    }

    /**
     * Get ownedCarYear
     *
     * @return string
     */
    public function getOwnedCarYear()
    {
        return $this->ownedCarYear;
    }

    /**
     * Set carModel
     *
     * @param string $carModel
     *
     * @return Leads
     */
    public function setCarModel($carModel)
    {
        $this->carModel = $carModel;

        return $this;
    }

    /**
     * Get carModel
     *
     * @return string
     */
    public function getCarModel()
    {
        return $this->carModel;
    }

    /**
     * Set estimatedBuy
     *
     * @param string $estimatedBuy
     *
     * @return Leads
     */
    public function setEstimatedBuy($estimatedBuy)
    {
        $this->estimatedBuy = $estimatedBuy;

        return $this;
    }

    /**
     * Get estimatedBuy
     *
     * @return string
     */
    public function getEstimatedBuy()
    {
        return $this->estimatedBuy;
    }

    /**
     * Set modelExpert
     *
     * @param string $modelExpert
     *
     * @return Leads
     */
    public function setModelExpert($modelExpert)
    {
        $this->modelExpert = $modelExpert;

        return $this;
    }

    /**
     * Get modelExpert
     *
     * @return string
     */
    public function getModelExpert()
    {
        return $this->modelExpert;
    }

    /**
     * Set newsletterGroup
     *
     * @param string $newsletterGroup
     *
     * @return Leads
     */
    public function setNewsletterGroup($newsletterGroup)
    {
        $this->newsletterGroup = $newsletterGroup;

        return $this;
    }

    /**
     * Get newsletterGroup
     *
     * @return string
     */
    public function getNewsletterGroup()
    {
        return $this->newsletterGroup;
    }

    /**
     * Set bounceHardDate
     *
     * @param \DateTime $bounceHardDate
     *
     * @return Leads
     */
    public function setBounceHardDate($bounceHardDate)
    {
        $this->bounceHardDate = $bounceHardDate;

        return $this;
    }

    /**
     * Get bounceHardDate
     *
     * @return \DateTime
     */
    public function getBounceHardDate()
    {
        return $this->bounceHardDate;
    }

    /**
     * Set bounceSoftDate
     *
     * @param \DateTime $bounceSoftDate
     *
     * @return Leads
     */
    public function setBounceSoftDate($bounceSoftDate)
    {
        $this->bounceSoftDate = $bounceSoftDate;

        return $this;
    }

    /**
     * Get bounceSoftDate
     *
     * @return \DateTime
     */
    public function getBounceSoftDate()
    {
        return $this->bounceSoftDate;
    }

    /**
     * Set source
     *
     * @param string $source
     *
     * @return Leads
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set actionName
     *
     * @param string $actionName
     *
     * @return Leads
     */
    public function setActionName($actionName)
    {
        $this->actionName = $actionName;

        return $this;
    }

    /**
     * Get actionName
     *
     * @return string
     */
    public function getActionName()
    {
        return $this->actionName;
    }

    /**
     * Set activityCode
     *
     * @param string $activityCode
     *
     * @return Leads
     */
    public function setActivityCode($activityCode)
    {
        $this->activityCode = $activityCode;

        return $this;
    }

    /**
     * Get activityCode
     *
     * @return string
     */
    public function getActivityCode()
    {
        return $this->activityCode;
    }

    /**
     * Set actionType
     *
     * @param string $actionType
     *
     * @return Leads
     */
    public function setActionType($actionType)
    {
        $this->actionType = $actionType;

        return $this;
    }

    /**
     * Get actionType
     *
     * @return string
     */
    public function getActionType()
    {
        return $this->actionType;
    }

    /**
     * Set leadType
     *
     * @param boolean $leadType
     *
     * @return Leads
     */
    public function setLeadType($leadType)
    {
        $this->leadType = $leadType;

        return $this;
    }

    /**
     * Get leadType
     *
     * @return boolean
     */
    public function getLeadType()
    {
        return $this->leadType;
    }

    /**
     * Set loginCode
     *
     * @param string $loginCode
     *
     * @return Leads
     */
    public function setLoginCode($loginCode)
    {
        $this->loginCode = $loginCode;

        return $this;
    }

    /**
     * Get loginCode
     *
     * @return string
     */
    public function getLoginCode()
    {
        return $this->loginCode;
    }

    /**
     * Set customerCkId
     *
     * @param string $customerCkId
     *
     * @return Leads
     */
    public function setCustomerCkId($customerCkId)
    {
        $this->customerCkId = $customerCkId;

        return $this;
    }

    /**
     * Get customerCkId
     *
     * @return string
     */
    public function getCustomerCkId()
    {
        return $this->customerCkId;
    }

    /**
     * Set customerActivityId
     *
     * @param integer $customerActivityId
     *
     * @return Leads
     */
    public function setCustomerActivityId($customerActivityId)
    {
        $this->customerActivityId = $customerActivityId;

        return $this;
    }

    /**
     * Get customerActivityId
     *
     * @return integer
     */
    public function getCustomerActivityId()
    {
        return $this->customerActivityId;
    }

    /**
     * Set giodo
     *
     * @param boolean $giodo
     *
     * @return Leads
     */
    public function setGiodo($giodo)
    {
        $this->giodo = $giodo;

        return $this;
    }

    /**
     * Get giodo
     *
     * @return boolean
     */
    public function getGiodo()
    {
        return $this->giodo;
    }

    /**
     * Set testDriveStatus
     *
     * @param string $testDriveStatus
     *
     * @return Leads
     */
    public function setTestDriveStatus($testDriveStatus)
    {
        $this->testDriveStatus = $testDriveStatus;

        return $this;
    }

    /**
     * Get testDriveStatus
     *
     * @return string
     */
    public function getTestDriveStatus()
    {
        return $this->testDriveStatus;
    }

    /**
     * Set testDriveModel
     *
     * @param string $testDriveModel
     *
     * @return Leads
     */
    public function setTestDriveModel($testDriveModel)
    {
        $this->testDriveModel = $testDriveModel;

        return $this;
    }

    /**
     * Get testDriveModel
     *
     * @return string
     */
    public function getTestDriveModel()
    {
        return $this->testDriveModel;
    }

    /**
     * Set testDriveDate
     *
     * @param \DateTime $testDriveDate
     *
     * @return Leads
     */
    public function setTestDriveDate($testDriveDate)
    {
        $this->testDriveDate = $testDriveDate;

        return $this;
    }

    /**
     * Get testDriveDate
     *
     * @return \DateTime
     */
    public function getTestDriveDate()
    {
        return $this->testDriveDate;
    }

    /**
     * Set checkOfferDate
     *
     * @param \DateTime $checkOfferDate
     *
     * @return Leads
     */
    public function setCheckOfferDate($checkOfferDate)
    {
        $this->checkOfferDate = $checkOfferDate;

        return $this;
    }

    /**
     * Get checkOfferDate
     *
     * @return \DateTime
     */
    public function getCheckOfferDate()
    {
        return $this->checkOfferDate;
    }

    /**
     * Set checkOfferModel
     *
     * @param string $checkOfferModel
     *
     * @return Leads
     */
    public function setCheckOfferModel($checkOfferModel)
    {
        $this->checkOfferModel = $checkOfferModel;

        return $this;
    }

    /**
     * Get checkOfferModel
     *
     * @return string
     */
    public function getCheckOfferModel()
    {
        return $this->checkOfferModel;
    }

    /**
     * Set configurationDate
     *
     * @param \DateTime $configurationDate
     *
     * @return Leads
     */
    public function setConfigurationDate($configurationDate)
    {
        $this->configurationDate = $configurationDate;

        return $this;
    }

    /**
     * Get configurationDate
     *
     * @return \DateTime
     */
    public function getConfigurationDate()
    {
        return $this->configurationDate;
    }

    /**
     * Set actionNameNewsletter
     *
     * @param string $actionNameNewsletter
     *
     * @return Leads
     */
    public function setActionNameNewsletter($actionNameNewsletter)
    {
        $this->actionNameNewsletter = $actionNameNewsletter;

        return $this;
    }

    /**
     * Get actionNameNewsletter
     *
     * @return string
     */
    public function getActionNameNewsletter()
    {
        return $this->actionNameNewsletter;
    }

    /**
     * Set testDriveDateNewsletter
     *
     * @param \DateTime $testDriveDateNewsletter
     *
     * @return Leads
     */
    public function setTestDriveDateNewsletter($testDriveDateNewsletter)
    {
        $this->testDriveDateNewsletter = $testDriveDateNewsletter;

        return $this;
    }

    /**
     * Get testDriveDateNewsletter
     *
     * @return \DateTime
     */
    public function getTestDriveDateNewsletter()
    {
        return $this->testDriveDateNewsletter;
    }

    /**
     * Set checkOfferDateNewsletter
     *
     * @param \DateTime $checkOfferDateNewsletter
     *
     * @return Leads
     */
    public function setCheckOfferDateNewsletter($checkOfferDateNewsletter)
    {
        $this->checkOfferDateNewsletter = $checkOfferDateNewsletter;

        return $this;
    }

    /**
     * Get checkOfferDateNewsletter
     *
     * @return \DateTime
     */
    public function getCheckOfferDateNewsletter()
    {
        return $this->checkOfferDateNewsletter;
    }

    /**
     * Set configurationDateNewsletter
     *
     * @param \DateTime $configurationDateNewsletter
     *
     * @return Leads
     */
    public function setConfigurationDateNewsletter($configurationDateNewsletter)
    {
        $this->configurationDateNewsletter = $configurationDateNewsletter;

        return $this;
    }

    /**
     * Get configurationDateNewsletter
     *
     * @return \DateTime
     */
    public function getConfigurationDateNewsletter()
    {
        return $this->configurationDateNewsletter;
    }

    /**
     * Set configurationModel
     *
     * @param string $configurationModel
     *
     * @return Leads
     */
    public function setConfigurationModel($configurationModel)
    {
        $this->configurationModel = $configurationModel;

        return $this;
    }

    /**
     * Get configurationModel
     *
     * @return string
     */
    public function getConfigurationModel()
    {
        return $this->configurationModel;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Leads
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
     * @return Leads
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set brandSet
     *
     * @param \AppBundle\Entity\BrandSets $brandSet
     *
     * @return Leads
     */
    public function setBrandSet(\AppBundle\Entity\BrandSets $brandSet = null)
    {
        $this->brandSet = $brandSet;

        return $this;
    }

    /**
     * Get brandSet
     *
     * @return \AppBundle\Entity\BrandSets
     */
    public function getBrandSet()
    {
        return $this->brandSet;
    }

    /**
     * Set customer
     *
     * @param \AppBundle\Entity\Customers $customer
     *
     * @return Leads
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
     * Add giodoDefinition
     *
     * @param \AppBundle\Entity\GiodoDefinition $giodoDefinition
     *
     * @return Leads
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

    /**
     * Add customerActivity
     *
     * @param \AppBundle\Entity\CustomerActivities $customerActivity
     *
     * @return Leads
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
     * Add activityDataDef
     *
     * @param \AppBundle\Entity\ActivityDataDefs $activityDataDef
     *
     * @return Leads
     */
    public function addActivityDataDef(\AppBundle\Entity\ActivityDataDefs $activityDataDef)
    {
        $this->activityDataDef[] = $activityDataDef;

        return $this;
    }

    /**
     * Remove activityDataDef
     *
     * @param \AppBundle\Entity\ActivityDataDefs $activityDataDef
     */
    public function removeActivityDataDef(\AppBundle\Entity\ActivityDataDefs $activityDataDef)
    {
        $this->activityDataDef->removeElement($activityDataDef);
    }

    /**
     * Get activityDataDef
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getActivityDataDef()
    {
        return $this->activityDataDef;
    }

    /**
     * Add ccConfiguration
     *
     * @param \AppBundle\Entity\CcConfigurations $ccConfiguration
     *
     * @return Leads
     */
    public function addCcConfiguration(\AppBundle\Entity\CcConfigurations $ccConfiguration)
    {
        $this->ccConfiguration[] = $ccConfiguration;

        return $this;
    }

    /**
     * Remove ccConfiguration
     *
     * @param \AppBundle\Entity\CcConfigurations $ccConfiguration
     */
    public function removeCcConfiguration(\AppBundle\Entity\CcConfigurations $ccConfiguration)
    {
        $this->ccConfiguration->removeElement($ccConfiguration);
    }

    /**
     * Get ccConfiguration
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCcConfiguration()
    {
        return $this->ccConfiguration;
    }
}
