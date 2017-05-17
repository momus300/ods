<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImportActivities
 *
 * @ORM\Table(name="import_activities", uniqueConstraints={@ORM\UniqueConstraint(name="code_UNIQUE", columns={"code"})}, indexes={@ORM\Index(name="fk_activities_report_channel1_idx", columns={"report_channel_id"}), @ORM\Index(name="fk_activities_report_group1_idx", columns={"report_group_id"})})
 * @ORM\Entity
 */
class ImportActivities
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
     * @ORM\Column(name="code", type="string", length=50, nullable=false)
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
     * @ORM\Column(name="name_report", type="string", length=100, nullable=true)
     */
    private $nameReport;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=100, nullable=true)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="action_name", type="string", length=60, nullable=true)
     */
    private $actionName;

    /**
     * @var string
     *
     * @ORM\Column(name="business_name", type="string", length=100, nullable=true)
     */
    private $businessName;

    /**
     * @var string
     *
     * @ORM\Column(name="campaign_ext_id", type="string", length=100, nullable=true)
     */
    private $campaignExtId;

    /**
     * @var string
     *
     * @ORM\Column(name="action_type", type="string", length=20, nullable=true)
     */
    private $actionType;

    /**
     * @var integer
     *
     * @ORM\Column(name="channel", type="integer", nullable=true)
     */
    private $channel = '2';

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
     * @return ImportActivities
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
     * @return ImportActivities
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
     * @return ImportActivities
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
     * @return ImportActivities
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
     * @return ImportActivities
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
     * @return ImportActivities
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
     * @return ImportActivities
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
     * @return ImportActivities
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
     * @return ImportActivities
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
     * @return ImportActivities
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
     * @return ImportActivities
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
     * @return ImportActivities
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
     * Set active
     *
     * @param boolean $active
     *
     * @return ImportActivities
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
     * @return ImportActivities
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
     * @return ImportActivities
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
     * @return ImportActivities
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
     * @return ImportActivities
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
