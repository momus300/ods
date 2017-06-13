<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Activities
 *
 * @ORM\Table(name="activities", uniqueConstraints={@ORM\UniqueConstraint(name="code_UNIQUE", columns={"code"})}, indexes={@ORM\Index(name="report_channel_id", columns={"report_channel_id"}), @ORM\Index(name="report_group_id", columns={"report_group_id"})})
 * @ORM\Entity
 */
class Activities
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
     * @ORM\Column(name="action_name", type="string", length=40, nullable=true)
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
     * @ORM\Column(name="action_type", type="string", length=40, nullable=true)
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
     * @ORM\Column(name="category", type="string", length=200, nullable=true)
     */
    private $category;

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
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_modified", type="datetime", nullable=true)
     */
    private $lastModified;

    /**
     * @var \ReportChannels
     *
     * @ORM\ManyToOne(targetEntity="ReportChannels")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="report_channel_id", referencedColumnName="id")
     * })
     */
    private $reportChannel;

    /**
     * @var \ReportGroups
     *
     * @ORM\ManyToOne(targetEntity="ReportGroups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="report_group_id", referencedColumnName="id")
     * })
     */
    private $reportGroup;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="ActivityDataDefs", inversedBy="activity")
     * @ORM\JoinTable(name="activity_data",
     *   joinColumns={
     *     @ORM\JoinColumn(name="activity_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="data_id", referencedColumnName="id")
     *   }
     * )
     */
    private $data;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="EmailTemplates", inversedBy="activity")
     * @ORM\JoinTable(name="activity_email_triggers",
     *   joinColumns={
     *     @ORM\JoinColumn(name="activity_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="email_template_id", referencedColumnName="id")
     *   }
     * )
     */
    private $emailTemplate;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="ActivityExportDefs", mappedBy="activity")
     */
    private $activityExportDef;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="GiodoDefinition", mappedBy="activity")
     */
    private $giodoDefinition;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="SmsTemplates", inversedBy="activity")
     * @ORM\JoinTable(name="activity_sms_triggers",
     *   joinColumns={
     *     @ORM\JoinColumn(name="activity_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="sms_template_id", referencedColumnName="id")
     *   }
     * )
     */
    private $smsTemplate;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Applications", mappedBy="activity")
     */
    private $application;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->data = new \Doctrine\Common\Collections\ArrayCollection();
        $this->emailTemplate = new \Doctrine\Common\Collections\ArrayCollection();
        $this->activityExportDef = new \Doctrine\Common\Collections\ArrayCollection();
        $this->giodoDefinition = new \Doctrine\Common\Collections\ArrayCollection();
        $this->smsTemplate = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @param boolean $active
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
     * @return Activities
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
     * Set reportChannel
     *
     * @param \AppBundle\Entity\ReportChannels $reportChannel
     *
     * @return Activities
     */
    public function setReportChannel(\AppBundle\Entity\ReportChannels $reportChannel = null)
    {
        $this->reportChannel = $reportChannel;

        return $this;
    }

    /**
     * Get reportChannel
     *
     * @return \AppBundle\Entity\ReportChannels
     */
    public function getReportChannel()
    {
        return $this->reportChannel;
    }

    /**
     * Set reportGroup
     *
     * @param \AppBundle\Entity\ReportGroups $reportGroup
     *
     * @return Activities
     */
    public function setReportGroup(\AppBundle\Entity\ReportGroups $reportGroup = null)
    {
        $this->reportGroup = $reportGroup;

        return $this;
    }

    /**
     * Get reportGroup
     *
     * @return \AppBundle\Entity\ReportGroups
     */
    public function getReportGroup()
    {
        return $this->reportGroup;
    }

    /**
     * Add datum
     *
     * @param \AppBundle\Entity\ActivityDataDefs $datum
     *
     * @return Activities
     */
    public function addDatum(\AppBundle\Entity\ActivityDataDefs $datum)
    {
        $this->data[] = $datum;

        return $this;
    }

    /**
     * Remove datum
     *
     * @param \AppBundle\Entity\ActivityDataDefs $datum
     */
    public function removeDatum(\AppBundle\Entity\ActivityDataDefs $datum)
    {
        $this->data->removeElement($datum);
    }

    /**
     * Get data
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Add emailTemplate
     *
     * @param \AppBundle\Entity\EmailTemplates $emailTemplate
     *
     * @return Activities
     */
    public function addEmailTemplate(\AppBundle\Entity\EmailTemplates $emailTemplate)
    {
        $this->emailTemplate[] = $emailTemplate;

        return $this;
    }

    /**
     * Remove emailTemplate
     *
     * @param \AppBundle\Entity\EmailTemplates $emailTemplate
     */
    public function removeEmailTemplate(\AppBundle\Entity\EmailTemplates $emailTemplate)
    {
        $this->emailTemplate->removeElement($emailTemplate);
    }

    /**
     * Get emailTemplate
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEmailTemplate()
    {
        return $this->emailTemplate;
    }

    /**
     * Add activityExportDef
     *
     * @param \AppBundle\Entity\ActivityExportDefs $activityExportDef
     *
     * @return Activities
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
     * Add giodoDefinition
     *
     * @param \AppBundle\Entity\GiodoDefinition $giodoDefinition
     *
     * @return Activities
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
     * Add smsTemplate
     *
     * @param \AppBundle\Entity\SmsTemplates $smsTemplate
     *
     * @return Activities
     */
    public function addSmsTemplate(\AppBundle\Entity\SmsTemplates $smsTemplate)
    {
        $this->smsTemplate[] = $smsTemplate;

        return $this;
    }

    /**
     * Remove smsTemplate
     *
     * @param \AppBundle\Entity\SmsTemplates $smsTemplate
     */
    public function removeSmsTemplate(\AppBundle\Entity\SmsTemplates $smsTemplate)
    {
        $this->smsTemplate->removeElement($smsTemplate);
    }

    /**
     * Get smsTemplate
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSmsTemplate()
    {
        return $this->smsTemplate;
    }

    /**
     * Add application
     *
     * @param \AppBundle\Entity\Applications $application
     *
     * @return Activities
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
