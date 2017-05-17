<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActivityEmailHistory
 *
 * @ORM\Table(name="activity_email_history", indexes={@ORM\Index(name="fk_activities_has_email_templates_email_templates2_idx", columns={"template_id"}), @ORM\Index(name="fk_activities_has_email_templates_activities2_idx", columns={"activity_id"}), @ORM\Index(name="ind_status", columns={"status"}), @ORM\Index(name="token_index", columns={"token"}), @ORM\Index(name="receiver_email", columns={"receiver_email"})})
 * @ORM\Entity
 */
class ActivityEmailHistory
{
    /**
     * @var string
     *
     * @ORM\Column(name="sender_email", type="string", length=80, nullable=false)
     */
    private $senderEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="sender_name", type="string", length=250, nullable=true)
     */
    private $senderName;

    /**
     * @var string
     *
     * @ORM\Column(name="receiver_email", type="string", length=80, nullable=false)
     */
    private $receiverEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="text", length=65535, nullable=false)
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="content_text", type="text", length=65535, nullable=false)
     */
    private $contentText;

    /**
     * @var string
     *
     * @ORM\Column(name="content_html", type="text", length=65535, nullable=true)
     */
    private $contentHtml;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sent", type="datetime", nullable=false)
     */
    private $sent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=64, nullable=true)
     */
    private $token;

    /**
     * @var string
     *
     * @ORM\Column(name="data", type="text", length=65535, nullable=true)
     */
    private $data;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status = '-1';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\EmailTemplates
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\EmailTemplates")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="template_id", referencedColumnName="id")
     * })
     */
    private $template;

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
     * Set senderEmail
     *
     * @param string $senderEmail
     *
     * @return ActivityEmailHistory
     */
    public function setSenderEmail($senderEmail)
    {
        $this->senderEmail = $senderEmail;

        return $this;
    }

    /**
     * Get senderEmail
     *
     * @return string
     */
    public function getSenderEmail()
    {
        return $this->senderEmail;
    }

    /**
     * Set senderName
     *
     * @param string $senderName
     *
     * @return ActivityEmailHistory
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
     * Set receiverEmail
     *
     * @param string $receiverEmail
     *
     * @return ActivityEmailHistory
     */
    public function setReceiverEmail($receiverEmail)
    {
        $this->receiverEmail = $receiverEmail;

        return $this;
    }

    /**
     * Get receiverEmail
     *
     * @return string
     */
    public function getReceiverEmail()
    {
        return $this->receiverEmail;
    }

    /**
     * Set subject
     *
     * @param string $subject
     *
     * @return ActivityEmailHistory
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set contentText
     *
     * @param string $contentText
     *
     * @return ActivityEmailHistory
     */
    public function setContentText($contentText)
    {
        $this->contentText = $contentText;

        return $this;
    }

    /**
     * Get contentText
     *
     * @return string
     */
    public function getContentText()
    {
        return $this->contentText;
    }

    /**
     * Set contentHtml
     *
     * @param string $contentHtml
     *
     * @return ActivityEmailHistory
     */
    public function setContentHtml($contentHtml)
    {
        $this->contentHtml = $contentHtml;

        return $this;
    }

    /**
     * Get contentHtml
     *
     * @return string
     */
    public function getContentHtml()
    {
        return $this->contentHtml;
    }

    /**
     * Set sent
     *
     * @param \DateTime $sent
     *
     * @return ActivityEmailHistory
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
     * Set created
     *
     * @param \DateTime $created
     *
     * @return ActivityEmailHistory
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
     * Set token
     *
     * @param string $token
     *
     * @return ActivityEmailHistory
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set data
     *
     * @param string $data
     *
     * @return ActivityEmailHistory
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
     * Set status
     *
     * @param integer $status
     *
     * @return ActivityEmailHistory
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
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
     * Set template
     *
     * @param \AppBundle\Entity\EmailTemplates $template
     *
     * @return ActivityEmailHistory
     */
    public function setTemplate(\AppBundle\Entity\EmailTemplates $template = null)
    {
        $this->template = $template;

        return $this;
    }

    /**
     * Get template
     *
     * @return \AppBundle\Entity\EmailTemplates
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Set activity
     *
     * @param \AppBundle\Entity\Activities $activity
     *
     * @return ActivityEmailHistory
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
}
