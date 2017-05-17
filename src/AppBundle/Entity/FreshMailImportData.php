<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FreshMailImportData
 *
 * @ORM\Table(name="fresh_mail_import_data")
 * @ORM\Entity
 */
class FreshMailImportData
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="message_date", type="datetime", nullable=true)
     */
    private $messageDate;

    /**
     * @var string
     *
     * @ORM\Column(name="message_name", type="string", length=200, nullable=true)
     */
    private $messageName;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=200, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="param", type="string", length=200, nullable=true)
     */
    private $param;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=200, nullable=true)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="event_date", type="datetime", nullable=true)
     */
    private $eventDate;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=200, nullable=true)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="os_name", type="string", length=200, nullable=true)
     */
    private $osName;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_activity_id", type="integer", nullable=true)
     */
    private $customerActivityId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="imported", type="boolean", nullable=false)
     */
    private $imported = 'b\'0\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set messageDate
     *
     * @param \DateTime $messageDate
     *
     * @return FreshMailImportData
     */
    public function setMessageDate($messageDate)
    {
        $this->messageDate = $messageDate;

        return $this;
    }

    /**
     * Get messageDate
     *
     * @return \DateTime
     */
    public function getMessageDate()
    {
        return $this->messageDate;
    }

    /**
     * Set messageName
     *
     * @param string $messageName
     *
     * @return FreshMailImportData
     */
    public function setMessageName($messageName)
    {
        $this->messageName = $messageName;

        return $this;
    }

    /**
     * Get messageName
     *
     * @return string
     */
    public function getMessageName()
    {
        return $this->messageName;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return FreshMailImportData
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
     * Set param
     *
     * @param string $param
     *
     * @return FreshMailImportData
     */
    public function setParam($param)
    {
        $this->param = $param;

        return $this;
    }

    /**
     * Get param
     *
     * @return string
     */
    public function getParam()
    {
        return $this->param;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return FreshMailImportData
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set eventDate
     *
     * @param \DateTime $eventDate
     *
     * @return FreshMailImportData
     */
    public function setEventDate($eventDate)
    {
        $this->eventDate = $eventDate;

        return $this;
    }

    /**
     * Get eventDate
     *
     * @return \DateTime
     */
    public function getEventDate()
    {
        return $this->eventDate;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return FreshMailImportData
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
     * Set osName
     *
     * @param string $osName
     *
     * @return FreshMailImportData
     */
    public function setOsName($osName)
    {
        $this->osName = $osName;

        return $this;
    }

    /**
     * Get osName
     *
     * @return string
     */
    public function getOsName()
    {
        return $this->osName;
    }

    /**
     * Set customerActivityId
     *
     * @param integer $customerActivityId
     *
     * @return FreshMailImportData
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
     * Set imported
     *
     * @param boolean $imported
     *
     * @return FreshMailImportData
     */
    public function setImported($imported)
    {
        $this->imported = $imported;

        return $this;
    }

    /**
     * Get imported
     *
     * @return boolean
     */
    public function getImported()
    {
        return $this->imported;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return FreshMailImportData
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
