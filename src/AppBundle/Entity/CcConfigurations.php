<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CcConfigurations
 *
 * @ORM\Table(name="cc_configurations", uniqueConstraints={@ORM\UniqueConstraint(name="cc_id_UNIQUE", columns={"cc_id"})}, indexes={@ORM\Index(name="model_key_idx", columns={"model_key"}), @ORM\Index(name="batch_id_idx", columns={"batch_id"}), @ORM\Index(name="appliance_id", columns={"appliance_id"}), @ORM\Index(name="application_id", columns={"application_id"})})
 * @ORM\Entity
 */
class CcConfigurations
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
     * @ORM\Column(name="model_key", type="string", length=6, nullable=false)
     */
    private $modelKey;

    /**
     * @var string
     *
     * @ORM\Column(name="model_id", type="string", length=50, nullable=true)
     */
    private $modelId;

    /**
     * @var string
     *
     * @ORM\Column(name="model_name", type="string", length=100, nullable=true)
     */
    private $modelName;

    /**
     * @var string
     *
     * @ORM\Column(name="model_code", type="string", length=3, nullable=true)
     */
    private $modelCode;

    /**
     * @var string
     *
     * @ORM\Column(name="version_id", type="string", length=50, nullable=true)
     */
    private $versionId;

    /**
     * @var string
     *
     * @ORM\Column(name="version_name", type="string", length=30, nullable=true)
     */
    private $versionName;

    /**
     * @var string
     *
     * @ORM\Column(name="version_code", type="string", length=50, nullable=true)
     */
    private $versionCode;

    /**
     * @var string
     *
     * @ORM\Column(name="motor_id", type="string", length=2, nullable=true)
     */
    private $motorId;

    /**
     * @var string
     *
     * @ORM\Column(name="motor_name", type="string", length=60, nullable=true)
     */
    private $motorName;

    /**
     * @var string
     *
     * @ORM\Column(name="motor_code", type="string", length=50, nullable=true)
     */
    private $motorCode;

    /**
     * @var string
     *
     * @ORM\Column(name="exterior_id", type="string", length=4, nullable=true)
     */
    private $exteriorId;

    /**
     * @var string
     *
     * @ORM\Column(name="exterior_name", type="string", length=50, nullable=true)
     */
    private $exteriorName;

    /**
     * @var string
     *
     * @ORM\Column(name="exterior_code", type="string", length=50, nullable=true)
     */
    private $exteriorCode;

    /**
     * @var string
     *
     * @ORM\Column(name="interior_id", type="string", length=2, nullable=true)
     */
    private $interiorId;

    /**
     * @var string
     *
     * @ORM\Column(name="interior_name", type="string", length=60, nullable=true)
     */
    private $interiorName;

    /**
     * @var string
     *
     * @ORM\Column(name="interior_code", type="string", length=50, nullable=true)
     */
    private $interiorCode;

    /**
     * @var integer
     *
     * @ORM\Column(name="appliance_id", type="integer", nullable=true)
     */
    private $applianceId;

    /**
     * @var string
     *
     * @ORM\Column(name="appliance_code", type="string", length=10, nullable=true)
     */
    private $applianceCode;

    /**
     * @var string
     *
     * @ORM\Column(name="appliance_name", type="string", length=200, nullable=true)
     */
    private $applianceName;

    /**
     * @var string
     *
     * @ORM\Column(name="appliance_price", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $appliancePrice;

    /**
     * @var string
     *
     * @ORM\Column(name="engine_price", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $enginePrice = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="exterior_price", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $exteriorPrice = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="equipment_price", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $equipmentPrice = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="importer_price", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $importerPrice = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="dealer_price", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $dealerPrice = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="discount_value", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $discountValue = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="pas_discount", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $pasDiscount = '0.00';

    /**
     * @var boolean
     *
     * @ORM\Column(name="finished", type="boolean", nullable=false)
     */
    private $finished = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="cc_id", type="integer", nullable=true)
     */
    private $ccId;

    /**
     * @var string
     *
     * @ORM\Column(name="state_machine", type="text", length=65535, nullable=true)
     */
    private $stateMachine;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="configuration_for_date", type="datetime", nullable=true)
     */
    private $configurationForDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="min_credit_rate", type="integer", nullable=true)
     */
    private $minCreditRate;

    /**
     * @var string
     *
     * @ORM\Column(name="pdf_path", type="string", length=50, nullable=true)
     */
    private $pdfPath;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deleted", type="datetime", nullable=true)
     */
    private $deleted;

    /**
     * @var string
     *
     * @ORM\Column(name="batch_id", type="string", length=20, nullable=true)
     */
    private $batchId;

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
     * @var \Applications
     *
     * @ORM\ManyToOne(targetEntity="Applications")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="application_id", referencedColumnName="id")
     * })
     */
    private $application;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Leads", mappedBy="ccConfiguration")
     */
    private $lead;

    /**
     * Constructor
     */
    public function __construct()
    {
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
     * Set modelKey
     *
     * @param string $modelKey
     *
     * @return CcConfigurations
     */
    public function setModelKey($modelKey)
    {
        $this->modelKey = $modelKey;

        return $this;
    }

    /**
     * Get modelKey
     *
     * @return string
     */
    public function getModelKey()
    {
        return $this->modelKey;
    }

    /**
     * Set modelId
     *
     * @param string $modelId
     *
     * @return CcConfigurations
     */
    public function setModelId($modelId)
    {
        $this->modelId = $modelId;

        return $this;
    }

    /**
     * Get modelId
     *
     * @return string
     */
    public function getModelId()
    {
        return $this->modelId;
    }

    /**
     * Set modelName
     *
     * @param string $modelName
     *
     * @return CcConfigurations
     */
    public function setModelName($modelName)
    {
        $this->modelName = $modelName;

        return $this;
    }

    /**
     * Get modelName
     *
     * @return string
     */
    public function getModelName()
    {
        return $this->modelName;
    }

    /**
     * Set modelCode
     *
     * @param string $modelCode
     *
     * @return CcConfigurations
     */
    public function setModelCode($modelCode)
    {
        $this->modelCode = $modelCode;

        return $this;
    }

    /**
     * Get modelCode
     *
     * @return string
     */
    public function getModelCode()
    {
        return $this->modelCode;
    }

    /**
     * Set versionId
     *
     * @param string $versionId
     *
     * @return CcConfigurations
     */
    public function setVersionId($versionId)
    {
        $this->versionId = $versionId;

        return $this;
    }

    /**
     * Get versionId
     *
     * @return string
     */
    public function getVersionId()
    {
        return $this->versionId;
    }

    /**
     * Set versionName
     *
     * @param string $versionName
     *
     * @return CcConfigurations
     */
    public function setVersionName($versionName)
    {
        $this->versionName = $versionName;

        return $this;
    }

    /**
     * Get versionName
     *
     * @return string
     */
    public function getVersionName()
    {
        return $this->versionName;
    }

    /**
     * Set versionCode
     *
     * @param string $versionCode
     *
     * @return CcConfigurations
     */
    public function setVersionCode($versionCode)
    {
        $this->versionCode = $versionCode;

        return $this;
    }

    /**
     * Get versionCode
     *
     * @return string
     */
    public function getVersionCode()
    {
        return $this->versionCode;
    }

    /**
     * Set motorId
     *
     * @param string $motorId
     *
     * @return CcConfigurations
     */
    public function setMotorId($motorId)
    {
        $this->motorId = $motorId;

        return $this;
    }

    /**
     * Get motorId
     *
     * @return string
     */
    public function getMotorId()
    {
        return $this->motorId;
    }

    /**
     * Set motorName
     *
     * @param string $motorName
     *
     * @return CcConfigurations
     */
    public function setMotorName($motorName)
    {
        $this->motorName = $motorName;

        return $this;
    }

    /**
     * Get motorName
     *
     * @return string
     */
    public function getMotorName()
    {
        return $this->motorName;
    }

    /**
     * Set motorCode
     *
     * @param string $motorCode
     *
     * @return CcConfigurations
     */
    public function setMotorCode($motorCode)
    {
        $this->motorCode = $motorCode;

        return $this;
    }

    /**
     * Get motorCode
     *
     * @return string
     */
    public function getMotorCode()
    {
        return $this->motorCode;
    }

    /**
     * Set exteriorId
     *
     * @param string $exteriorId
     *
     * @return CcConfigurations
     */
    public function setExteriorId($exteriorId)
    {
        $this->exteriorId = $exteriorId;

        return $this;
    }

    /**
     * Get exteriorId
     *
     * @return string
     */
    public function getExteriorId()
    {
        return $this->exteriorId;
    }

    /**
     * Set exteriorName
     *
     * @param string $exteriorName
     *
     * @return CcConfigurations
     */
    public function setExteriorName($exteriorName)
    {
        $this->exteriorName = $exteriorName;

        return $this;
    }

    /**
     * Get exteriorName
     *
     * @return string
     */
    public function getExteriorName()
    {
        return $this->exteriorName;
    }

    /**
     * Set exteriorCode
     *
     * @param string $exteriorCode
     *
     * @return CcConfigurations
     */
    public function setExteriorCode($exteriorCode)
    {
        $this->exteriorCode = $exteriorCode;

        return $this;
    }

    /**
     * Get exteriorCode
     *
     * @return string
     */
    public function getExteriorCode()
    {
        return $this->exteriorCode;
    }

    /**
     * Set interiorId
     *
     * @param string $interiorId
     *
     * @return CcConfigurations
     */
    public function setInteriorId($interiorId)
    {
        $this->interiorId = $interiorId;

        return $this;
    }

    /**
     * Get interiorId
     *
     * @return string
     */
    public function getInteriorId()
    {
        return $this->interiorId;
    }

    /**
     * Set interiorName
     *
     * @param string $interiorName
     *
     * @return CcConfigurations
     */
    public function setInteriorName($interiorName)
    {
        $this->interiorName = $interiorName;

        return $this;
    }

    /**
     * Get interiorName
     *
     * @return string
     */
    public function getInteriorName()
    {
        return $this->interiorName;
    }

    /**
     * Set interiorCode
     *
     * @param string $interiorCode
     *
     * @return CcConfigurations
     */
    public function setInteriorCode($interiorCode)
    {
        $this->interiorCode = $interiorCode;

        return $this;
    }

    /**
     * Get interiorCode
     *
     * @return string
     */
    public function getInteriorCode()
    {
        return $this->interiorCode;
    }

    /**
     * Set applianceId
     *
     * @param integer $applianceId
     *
     * @return CcConfigurations
     */
    public function setApplianceId($applianceId)
    {
        $this->applianceId = $applianceId;

        return $this;
    }

    /**
     * Get applianceId
     *
     * @return integer
     */
    public function getApplianceId()
    {
        return $this->applianceId;
    }

    /**
     * Set applianceCode
     *
     * @param string $applianceCode
     *
     * @return CcConfigurations
     */
    public function setApplianceCode($applianceCode)
    {
        $this->applianceCode = $applianceCode;

        return $this;
    }

    /**
     * Get applianceCode
     *
     * @return string
     */
    public function getApplianceCode()
    {
        return $this->applianceCode;
    }

    /**
     * Set applianceName
     *
     * @param string $applianceName
     *
     * @return CcConfigurations
     */
    public function setApplianceName($applianceName)
    {
        $this->applianceName = $applianceName;

        return $this;
    }

    /**
     * Get applianceName
     *
     * @return string
     */
    public function getApplianceName()
    {
        return $this->applianceName;
    }

    /**
     * Set appliancePrice
     *
     * @param string $appliancePrice
     *
     * @return CcConfigurations
     */
    public function setAppliancePrice($appliancePrice)
    {
        $this->appliancePrice = $appliancePrice;

        return $this;
    }

    /**
     * Get appliancePrice
     *
     * @return string
     */
    public function getAppliancePrice()
    {
        return $this->appliancePrice;
    }

    /**
     * Set enginePrice
     *
     * @param string $enginePrice
     *
     * @return CcConfigurations
     */
    public function setEnginePrice($enginePrice)
    {
        $this->enginePrice = $enginePrice;

        return $this;
    }

    /**
     * Get enginePrice
     *
     * @return string
     */
    public function getEnginePrice()
    {
        return $this->enginePrice;
    }

    /**
     * Set exteriorPrice
     *
     * @param string $exteriorPrice
     *
     * @return CcConfigurations
     */
    public function setExteriorPrice($exteriorPrice)
    {
        $this->exteriorPrice = $exteriorPrice;

        return $this;
    }

    /**
     * Get exteriorPrice
     *
     * @return string
     */
    public function getExteriorPrice()
    {
        return $this->exteriorPrice;
    }

    /**
     * Set equipmentPrice
     *
     * @param string $equipmentPrice
     *
     * @return CcConfigurations
     */
    public function setEquipmentPrice($equipmentPrice)
    {
        $this->equipmentPrice = $equipmentPrice;

        return $this;
    }

    /**
     * Get equipmentPrice
     *
     * @return string
     */
    public function getEquipmentPrice()
    {
        return $this->equipmentPrice;
    }

    /**
     * Set importerPrice
     *
     * @param string $importerPrice
     *
     * @return CcConfigurations
     */
    public function setImporterPrice($importerPrice)
    {
        $this->importerPrice = $importerPrice;

        return $this;
    }

    /**
     * Get importerPrice
     *
     * @return string
     */
    public function getImporterPrice()
    {
        return $this->importerPrice;
    }

    /**
     * Set dealerPrice
     *
     * @param string $dealerPrice
     *
     * @return CcConfigurations
     */
    public function setDealerPrice($dealerPrice)
    {
        $this->dealerPrice = $dealerPrice;

        return $this;
    }

    /**
     * Get dealerPrice
     *
     * @return string
     */
    public function getDealerPrice()
    {
        return $this->dealerPrice;
    }

    /**
     * Set discountValue
     *
     * @param string $discountValue
     *
     * @return CcConfigurations
     */
    public function setDiscountValue($discountValue)
    {
        $this->discountValue = $discountValue;

        return $this;
    }

    /**
     * Get discountValue
     *
     * @return string
     */
    public function getDiscountValue()
    {
        return $this->discountValue;
    }

    /**
     * Set pasDiscount
     *
     * @param string $pasDiscount
     *
     * @return CcConfigurations
     */
    public function setPasDiscount($pasDiscount)
    {
        $this->pasDiscount = $pasDiscount;

        return $this;
    }

    /**
     * Get pasDiscount
     *
     * @return string
     */
    public function getPasDiscount()
    {
        return $this->pasDiscount;
    }

    /**
     * Set finished
     *
     * @param boolean $finished
     *
     * @return CcConfigurations
     */
    public function setFinished($finished)
    {
        $this->finished = $finished;

        return $this;
    }

    /**
     * Get finished
     *
     * @return boolean
     */
    public function getFinished()
    {
        return $this->finished;
    }

    /**
     * Set ccId
     *
     * @param integer $ccId
     *
     * @return CcConfigurations
     */
    public function setCcId($ccId)
    {
        $this->ccId = $ccId;

        return $this;
    }

    /**
     * Get ccId
     *
     * @return integer
     */
    public function getCcId()
    {
        return $this->ccId;
    }

    /**
     * Set stateMachine
     *
     * @param string $stateMachine
     *
     * @return CcConfigurations
     */
    public function setStateMachine($stateMachine)
    {
        $this->stateMachine = $stateMachine;

        return $this;
    }

    /**
     * Get stateMachine
     *
     * @return string
     */
    public function getStateMachine()
    {
        return $this->stateMachine;
    }

    /**
     * Set configurationForDate
     *
     * @param \DateTime $configurationForDate
     *
     * @return CcConfigurations
     */
    public function setConfigurationForDate($configurationForDate)
    {
        $this->configurationForDate = $configurationForDate;

        return $this;
    }

    /**
     * Get configurationForDate
     *
     * @return \DateTime
     */
    public function getConfigurationForDate()
    {
        return $this->configurationForDate;
    }

    /**
     * Set minCreditRate
     *
     * @param integer $minCreditRate
     *
     * @return CcConfigurations
     */
    public function setMinCreditRate($minCreditRate)
    {
        $this->minCreditRate = $minCreditRate;

        return $this;
    }

    /**
     * Get minCreditRate
     *
     * @return integer
     */
    public function getMinCreditRate()
    {
        return $this->minCreditRate;
    }

    /**
     * Set pdfPath
     *
     * @param string $pdfPath
     *
     * @return CcConfigurations
     */
    public function setPdfPath($pdfPath)
    {
        $this->pdfPath = $pdfPath;

        return $this;
    }

    /**
     * Get pdfPath
     *
     * @return string
     */
    public function getPdfPath()
    {
        return $this->pdfPath;
    }

    /**
     * Set deleted
     *
     * @param \DateTime $deleted
     *
     * @return CcConfigurations
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return \DateTime
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Set batchId
     *
     * @param string $batchId
     *
     * @return CcConfigurations
     */
    public function setBatchId($batchId)
    {
        $this->batchId = $batchId;

        return $this;
    }

    /**
     * Get batchId
     *
     * @return string
     */
    public function getBatchId()
    {
        return $this->batchId;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return CcConfigurations
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
     * @return CcConfigurations
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
     * Set application
     *
     * @param \AppBundle\Entity\Applications $application
     *
     * @return CcConfigurations
     */
    public function setApplication(\AppBundle\Entity\Applications $application = null)
    {
        $this->application = $application;

        return $this;
    }

    /**
     * Get application
     *
     * @return \AppBundle\Entity\Applications
     */
    public function getApplication()
    {
        return $this->application;
    }

    /**
     * Add lead
     *
     * @param \AppBundle\Entity\Leads $lead
     *
     * @return CcConfigurations
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
