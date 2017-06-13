<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActivitySmsHistory
 *
 * @ORM\Table(name="activity_sms_history", indexes={@ORM\Index(name="fk_activities_has_sms_templates_sms_templates2_idx", columns={"template_id"}), @ORM\Index(name="fk_activities_has_sms_templates_activities2_idx", columns={"activity_id"})})
 * @ORM\Entity
 */
class ActivitySmsHistory
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
     * @ORM\Column(name="cellphone", type="string", length=9, nullable=false)
     */
    private $cellphone;

    /**
     * @var string
     *
     * @ORM\Column(name="sender_name", type="string", length=32, nullable=true)
     */
    private $senderName;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", length=65535, nullable=false)
     */
    private $content;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sent", type="datetime", nullable=true)
     */
    private $sent;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created = 'CURRENT_TIMESTAMP';

    /**
     * @var \Activities
     *
     * @ORM\ManyToOne(targetEntity="Activities")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="activity_id", referencedColumnName="id")
     * })
     */
    private $activity;

    /**
     * @var \SmsTemplates
     *
     * @ORM\ManyToOne(targetEntity="SmsTemplates")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="template_id", referencedColumnName="id")
     * })
     */
    private $template;



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
     * Set cellphone
     *
     * @param string $cellphone
     *
     * @return ActivitySmsHistory
     */
    public function setCellphone($cellphone)
    {
        $this->cellphone = $cellphone;

        return $this;
    }

    /**
     * Get cellphone
     *
     * @return string
     */
    public function getCellphone()
    {
        return $this->cellphone;
    }

    /**
     * Set senderName
     *
     * @param string $senderName
     *
     * @return ActivitySmsHistory
     */
    public function setSenderName($senderName)
    {
        $this->senderName = $senderName;

        return $this;
    }

    /**
     * Get senderName
     *
     * @return string
     */
    public function getSenderName()
    {
        return $this->senderName;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return ActivitySmsHistory
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set sent
     *
     * @param \DateTime $sent
     *
     * @return ActivitySmsHistory
     */
    public function setSent($sent)
    {
        $this->sent = $sent;

        return $this;
    }

    /**
     * Get sent
     *
     * @return \DateTime
     */
    public function getSent()
    {
        return $this->sent;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return ActivitySmsHistory
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return ActivitySmsHistory
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
     * Set activity
     *
     * @param \AppBundle\Entity\Activities $activity
     *
     * @return ActivitySmsHistory
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
     * Set template
     *
     * @param \AppBundle\Entity\SmsTemplates $template
     *
     * @return ActivitySmsHistory
     */
    public function setTemplate(\AppBundle\Entity\SmsTemplates $template = null)
    {
        $this->template = $template;

        return $this;
    }

    /**
     * Get template
     *
     * @return \AppBundle\Entity\SmsTemplates
     */
    public function getTemplate()
    {
        return $this->template;
    }
}
