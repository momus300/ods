<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Activities
 *
 * @ORM\Table(name="activities")
 * @ORM\Entity
 */
class Activities
{
    /**
     * @var integer
     *
     * @ORM\Column(name="report_channel_id", type="integer", nullable=true)
     */
    private $reportChannelId;

    /**
     * @var integer
     *
     * @ORM\Column(name="report_group_id", type="integer", nullable=true)
     */
    private $reportGroupId;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=49, nullable=true)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="name_report", type="string", length=54, nullable=true)
     */
    private $nameReport;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=583, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=80, nullable=true)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="action_name", type="string", length=40, nullable=true)
     */
    private $actionName;

    /**
     * @var string
     *
     * @ORM\Column(name="business_name", type="string", length=21, nullable=true)
     */
    private $businessName;

    /**
     * @var string
     *
     * @ORM\Column(name="campaign_ext_id", type="string", length=10, nullable=true)
     */
    private $campaignExtId;

    /**
     * @var string
     *
     * @ORM\Column(name="action_type", type="string", length=23, nullable=true)
     */
    private $actionType;

    /**
     * @var integer
     *
     * @ORM\Column(name="channel", type="integer", nullable=true)
     */
    private $channel;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=1, nullable=true)
     */
    private $category;

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
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;

    /**
     * @var string
     *
     * @ORM\Column(name="last_modified", type="datetime")
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
     * Set reportChannelId
     *
     * @param integer $reportChannelId
     *
     * @return Activities
     */
    public function setReportChannelId($reportChannelId)
    {
        $this->reportChannelId = $reportChannelId;

        return $this;
    }

    /**
     * Get reportChannelId
     *
     * @return integer
     */
    public function getReportChannelId()
    {
        return $this->reportChannelId;
    }

    /**
     * Set reportGroupId
     *
     * @param integer $reportGroupId
     *
     * @return Activities
     */
    public function setReportGroupId($reportGroupId)
    {
        $this->reportGroupId = $reportGroupId;

        return $this;
    }

    /**
     * Get reportGroupId
     *
     * @return integer
     */
    public function getReportGroupId()
    {
        return $this->reportGroupId;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return Activities
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
     * @return Activities
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
     * Set nameReport
     *
     * @param string $nameReport
     *
     * @return Activities
     */
    public function setNameReport($nameReport)
    {
        $this->nameReport = $nameReport;

        return $this;
    }

    /**
     * Get nameReport
     *
     * @return string
     */
    public function getNameReport()
    {
        return $this->nameReport;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Activities
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
     * Set url
     *
     * @param string $url
     *
     * @return Activities
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set actionName
     *
     * @param string $actionName
     *
     * @return Activities
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
     * Set businessName
     *
     * @param string $businessName
     *
     * @return Activities
     */
    public function setBusinessName($businessName)
    {
        $this->businessName = $businessName;

        return $this;
    }

    /**
     * Get businessName
     *
     * @return string
     */
    public function getBusinessName()
    {
        return $this->businessName;
    }

    /**
     * Set campaignExtId
     *
     * @param string $campaignExtId
     *
     * @return Activities
     */
    public function setCampaignExtId($campaignExtId)
    {
        $this->campaignExtId = $campaignExtId;

        return $this;
    }

    /**
     * Get campaignExtId
     *
     * @return string
     */
    public function getCampaignExtId()
    {
        return $this->campaignExtId;
    }

    /**
     * Set actionType
     *
     * @param string $actionType
     *
     * @return Activities
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
     * Set channel
     *
     * @param integer $channel
     *
     * @return Activities
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;

        return $this;
    }

    /**
     * Get channel
     *
     * @return integer
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Set category
     *
     * @param string $category
     *
     * @return Activities
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set active
     *
     * @param integer $active
     *
     * @return Activities
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
     * @return Activities
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
     * @return Activities
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
     * Set created
     *
     * @param string $created
     *
     * @return Activities
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
     * @ORM\PrePersist()
     *
     * @return Activities
     */
    public function setLastModified($lastModified)
    {
        $this->lastModified = new \DateTime();

        return $this;
    }

    /**
     * Get lastModified
     *
     * @ORM\PreUpdate()
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
