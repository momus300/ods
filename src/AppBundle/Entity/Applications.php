<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Applications
 *
 * @ORM\Table(name="applications")
 * @ORM\Entity
 */
class Applications
{
    /**
     * @var integer
     *
     * @ORM\Column(name="brand_set_id", type="integer", nullable=true)
     */
    private $brandSetId;

    /**
     * @var integer
     *
     * @ORM\Column(name="company_id", type="integer", nullable=true)
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
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=765, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="app_id", type="string", length=10, nullable=true)
     */
    private $appId;

    /**
     * @var string
     *
     * @ORM\Column(name="public_key", type="string", length=24, nullable=true)
     */
    private $publicKey;

    /**
     * @var string
     *
     * @ORM\Column(name="admin_key", type="string", length=32, nullable=true)
     */
    private $adminKey;

    /**
     * @var string
     *
     * @ORM\Column(name="data_source_id", type="string", length=10, nullable=true)
     */
    private $dataSourceId;

    /**
     * @var integer
     *
     * @ORM\Column(name="order", type="integer", nullable=true)
     */
    private $order;

    /**
     * @var integer
     *
     * @ORM\Column(name="active", type="integer", nullable=true)
     */
    private $active;

    /**
     * @var string
     *
     * @ORM\Column(name="active_start", type="string", length=10, nullable=true)
     */
    private $activeStart;

    /**
     * @var string
     *
     * @ORM\Column(name="active_end", type="string", length=10, nullable=true)
     */
    private $activeEnd;

    /**
     * @var string
     *
     * @ORM\Column(name="linked_app_login_url", type="string", length=71, nullable=true)
     */
    private $linkedAppLoginUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="created", type="string", length=19, nullable=true)
     */
    private $created;

    /**
     * @var string
     *
     * @ORM\Column(name="last_modified", type="string", length=19, nullable=true)
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
     * @return Applications
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
     * @return Applications
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
     * @return Applications
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
     * @return Applications
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
     * @return Applications
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
     * @param integer $active
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
     * @return integer
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set activeStart
     *
     * @param string $activeStart
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
     * @return string
     */
    public function getActiveStart()
    {
        return $this->activeStart;
    }

    /**
     * Set activeEnd
     *
     * @param string $activeEnd
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
     * @return string
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
     * @param string $created
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
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set lastModified
     *
     * @param string $lastModified
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
     * @return string
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
