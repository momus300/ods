<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImportApplications
 *
 * @ORM\Table(name="import_applications", uniqueConstraints={@ORM\UniqueConstraint(name="code_UNIQUE", columns={"app_id"}), @ORM\UniqueConstraint(name="public_key_UNIQUE", columns={"public_key"}), @ORM\UniqueConstraint(name="admin_key_UNIQUE", columns={"admin_key"}), @ORM\UniqueConstraint(name="application_id_brand_set_id", columns={"id", "brand_set_id"})}, indexes={@ORM\Index(name="ind_active_start_end", columns={"active", "active_start", "active_end"}), @ORM\Index(name="fk_applications_brand_sets1_idx", columns={"brand_set_id"}), @ORM\Index(name="fk_applications_campaigns1_idx", columns={"campaign_id"}), @ORM\Index(name="fk_applications_comapnies1_idx", columns={"company_id"}), @ORM\Index(name="fk_applications_report_areas1_idx", columns={"report_area_id"}), @ORM\Index(name="fk_applications_report_category1_idx", columns={"report_category_id"})})
 * @ORM\Entity
 */
class ImportApplications
{
    /**
     * @var integer
     *
     * @ORM\Column(name="brand_set_id", type="integer", nullable=false)
     */
    private $brandSetId;

    /**
     * @var integer
     *
     * @ORM\Column(name="company_id", type="integer", nullable=false)
     */
    private $companyId;

    /**
     * @var integer
     *
     * @ORM\Column(name="report_area_id", type="integer", nullable=true)
     */
    private $reportAreaId;

    /**
     * @var integer
     *
     * @ORM\Column(name="report_category_id", type="integer", nullable=true)
     */
    private $reportCategoryId;

    /**
     * @var integer
     *
     * @ORM\Column(name="campaign_id", type="integer", nullable=true)
     */
    private $campaignId;

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
    private $order;

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
     * Set brandSetId
     *
     * @param integer $brandSetId
     *
     * @return ImportApplications
     */
    public function setBrandSetId($brandSetId)
    {
        $this->brandSetId = $brandSetId;

        return $this;
    }

    /**
     * Get brandSetId
     *
     * @return integer
     */
    public function getBrandSetId()
    {
        return $this->brandSetId;
    }

    /**
     * Set companyId
     *
     * @param integer $companyId
     *
     * @return ImportApplications
     */
    public function setCompanyId($companyId)
    {
        $this->companyId = $companyId;

        return $this;
    }

    /**
     * Get companyId
     *
     * @return integer
     */
    public function getCompanyId()
    {
        return $this->companyId;
    }

    /**
     * Set reportAreaId
     *
     * @param integer $reportAreaId
     *
     * @return ImportApplications
     */
    public function setReportAreaId($reportAreaId)
    {
        $this->reportAreaId = $reportAreaId;

        return $this;
    }

    /**
     * Get reportAreaId
     *
     * @return integer
     */
    public function getReportAreaId()
    {
        return $this->reportAreaId;
    }

    /**
     * Set reportCategoryId
     *
     * @param integer $reportCategoryId
     *
     * @return ImportApplications
     */
    public function setReportCategoryId($reportCategoryId)
    {
        $this->reportCategoryId = $reportCategoryId;

        return $this;
    }

    /**
     * Get reportCategoryId
     *
     * @return integer
     */
    public function getReportCategoryId()
    {
        return $this->reportCategoryId;
    }

    /**
     * Set campaignId
     *
     * @param integer $campaignId
     *
     * @return ImportApplications
     */
    public function setCampaignId($campaignId)
    {
        $this->campaignId = $campaignId;

        return $this;
    }

    /**
     * Get campaignId
     *
     * @return integer
     */
    public function getCampaignId()
    {
        return $this->campaignId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return ImportApplications
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
     * @return ImportApplications
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
     * @return ImportApplications
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
     * @return ImportApplications
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
     * @return ImportApplications
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
     * @return ImportApplications
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
     * @return ImportApplications
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
     * @return ImportApplications
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
     * @return ImportApplications
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
     * @return ImportApplications
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
     * @return ImportApplications
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
     * @return ImportApplications
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
     * @return ImportApplications
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
}
