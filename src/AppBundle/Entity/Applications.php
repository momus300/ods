<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Applications
 *
 * @ORM\Table(name="applications", uniqueConstraints={@ORM\UniqueConstraint(name="code_UNIQUE", columns={"app_id"}), @ORM\UniqueConstraint(name="public_key_UNIQUE", columns={"public_key"}), @ORM\UniqueConstraint(name="admin_key_UNIQUE", columns={"admin_key"}), @ORM\UniqueConstraint(name="application_id_brand_set_id", columns={"id", "brand_set_id"})}, indexes={@ORM\Index(name="ind_active_start_end", columns={"active", "active_start", "active_end"}), @ORM\Index(name="fk_applications_campaigns", columns={"campaign_id"}), @ORM\Index(name="fk_applications_brand_sets1_idx", columns={"brand_set_id"}), @ORM\Index(name="fk_applications_comapnies1_idx", columns={"company_id"}), @ORM\Index(name="fk_applications_report_areas1", columns={"report_area_id"}), @ORM\Index(name="report_category_id", columns={"report_category_id"})})
 * @ORM\Entity
 */
class Applications
{
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
     * @var string
     *
     * @ORM\Column(name="app_id", type="string", length=10, nullable=false)
     */
    private $appId;

    /**
     * @var string
     *
     * @ORM\Column(name="public_key", type="string", length=64, nullable=false)
     */
    private $publicKey;

    /**
     * @var string
     *
     * @ORM\Column(name="admin_key", type="string", length=64, nullable=false)
     */
    private $adminKey;

    /**
     * @var string
     *
     * @ORM\Column(name="data_source_id", type="string", length=20, nullable=true)
     */
    private $dataSourceId;

    /**
     * @var integer
     *
     * @ORM\Column(name="order", type="integer", nullable=false)
     */
    private $order = '1';

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
     * @var string
     *
     * @ORM\Column(name="linked_app_login_url", type="string", length=255, nullable=true)
     */
    private $linkedAppLoginUrl;

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
     * @var \AppBundle\Entity\Campaigns
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Campaigns")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="campaign_id", referencedColumnName="id")
     * })
     */
    private $campaign;

    /**
     * @var \AppBundle\Entity\Companies
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Companies")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     * })
     */
    private $company;

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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\AuthTypes", mappedBy="application")
     */
    private $authType;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\ActivityExportDefs", mappedBy="application")
     */
    private $activityExportDef;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Activities", inversedBy="application")
     * @ORM\JoinTable(name="application_activities",
     *   joinColumns={
     *     @ORM\JoinColumn(name="application_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="activity_id", referencedColumnName="id")
     *   }
     * )
     */
    private $activity;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->authType = new \Doctrine\Common\Collections\ArrayCollection();
        $this->activityExportDef = new \Doctrine\Common\Collections\ArrayCollection();
        $this->activity = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set name
     *
     * @param string $name
     *
     * @return Applications
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
     * @return Applications
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
     * Set appId
     *
     * @param string $appId
     *
     * @return Applications
     */
    public function setAppId($appId)
    {
        $this->appId = $appId;

        return $this;
    }

    /**
     * Get appId
     *
     * @return string
     */
    public function getAppId()
    {
        return $this->appId;
    }

    /**
     * Set publicKey
     *
     * @param string $publicKey
     *
     * @return Applications
     */
    public function setPublicKey($publicKey)
    {
        $this->publicKey = $publicKey;

        return $this;
    }

    /**
     * Get publicKey
     *
     * @return string
     */
    public function getPublicKey()
    {
        return $this->publicKey;
    }

    /**
     * Set adminKey
     *
     * @param string $adminKey
     *
     * @return Applications
     */
    public function setAdminKey($adminKey)
    {
        $this->adminKey = $adminKey;

        return $this;
    }

    /**
     * Get adminKey
     *
     * @return string
     */
    public function getAdminKey()
    {
        return $this->adminKey;
    }

    /**
     * Set dataSourceId
     *
     * @param string $dataSourceId
     *
     * @return Applications
     */
    public function setDataSourceId($dataSourceId)
    {
        $this->dataSourceId = $dataSourceId;

        return $this;
    }

    /**
     * Get dataSourceId
     *
     * @return string
     */
    public function getDataSourceId()
    {
        return $this->dataSourceId;
    }

    /**
     * Set order
     *
     * @param integer $order
     *
     * @return Applications
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     *
     * @return integer
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Set active
     *
     * @param boolean $active
     *
     * @return Applications
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
     * @return Applications
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
     * @return Applications
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
     * Set linkedAppLoginUrl
     *
     * @param string $linkedAppLoginUrl
     *
     * @return Applications
     */
    public function setLinkedAppLoginUrl($linkedAppLoginUrl)
    {
        $this->linkedAppLoginUrl = $linkedAppLoginUrl;

        return $this;
    }

    /**
     * Get linkedAppLoginUrl
     *
     * @return string
     */
    public function getLinkedAppLoginUrl()
    {
        return $this->linkedAppLoginUrl;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Applications
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
     * @return Applications
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
     * Set campaign
     *
     * @param \AppBundle\Entity\Campaigns $campaign
     *
     * @return Applications
     */
    public function setCampaign(\AppBundle\Entity\Campaigns $campaign = null)
    {
        $this->campaign = $campaign;

        return $this;
    }

    /**
     * Get campaign
     *
     * @return \AppBundle\Entity\Campaigns
     */
    public function getCampaign()
    {
        return $this->campaign;
    }

    /**
     * Set company
     *
     * @param \AppBundle\Entity\Companies $company
     *
     * @return Applications
     */
    public function setCompany(\AppBundle\Entity\Companies $company = null)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return \AppBundle\Entity\Companies
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set brandSet
     *
     * @param \AppBundle\Entity\BrandSets $brandSet
     *
     * @return Applications
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
     * Add authType
     *
     * @param \AppBundle\Entity\AuthTypes $authType
     *
     * @return Applications
     */
    public function addAuthType(\AppBundle\Entity\AuthTypes $authType)
    {
        $this->authType[] = $authType;

        return $this;
    }

    /**
     * Remove authType
     *
     * @param \AppBundle\Entity\AuthTypes $authType
     */
    public function removeAuthType(\AppBundle\Entity\AuthTypes $authType)
    {
        $this->authType->removeElement($authType);
    }

    /**
     * Get authType
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAuthType()
    {
        return $this->authType;
    }

    /**
     * Add activityExportDef
     *
     * @param \AppBundle\Entity\ActivityExportDefs $activityExportDef
     *
     * @return Applications
     */
    public function addActivityExportDef(\AppBundle\Entity\ActivityExportDefs $activityExportDef)
    {
        $this->activityExportDef[] = $activityExportDef;

        return $this;
    }

    /**
     * Remove activityExportDef
     *
     * @param \AppBundle\Entity\ActivityExportDefs $activityExportDef
     */
    public function removeActivityExportDef(\AppBundle\Entity\ActivityExportDefs $activityExportDef)
    {
        $this->activityExportDef->removeElement($activityExportDef);
    }

    /**
     * Get activityExportDef
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getActivityExportDef()
    {
        return $this->activityExportDef;
    }

    /**
     * Add activity
     *
     * @param \AppBundle\Entity\Activities $activity
     *
     * @return Applications
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
}
