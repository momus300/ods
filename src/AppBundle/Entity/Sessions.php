<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sessions
 *
 * @ORM\Table(name="sessions", uniqueConstraints={@ORM\UniqueConstraint(name="session_UNIQUE", columns={"session"})}, indexes={@ORM\Index(name="fk_sessions_customers1_idx", columns={"customers_id"}), @ORM\Index(name="fk_sessions_applications1_idx", columns={"applications_id"}), @ORM\Index(name="fk_sessions_cc_configurations1_idx", columns={"cc_configurations_id"}), @ORM\Index(name="last_modified_idx", columns={"last_modified"}), @ORM\Index(name="user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class Sessions
{
    /**
     * @var string
     *
     * @ORM\Column(name="session", type="string", length=64, nullable=false)
     */
    private $session;

    /**
     * @var string
     *
     * @ORM\Column(name="data", type="text", length=65535, nullable=true)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="ext_ip", type="string", length=15, nullable=true)
     */
    private $extIp;

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
     * @var string
     *
     * @ORM\Column(name="user_agent", type="string", length=140, nullable=true)
     */
    private $userAgent;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var \AppBundle\Entity\Customers
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Customers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customers_id", referencedColumnName="id")
     * })
     */
    private $customers;

    /**
     * @var \AppBundle\Entity\CcConfigurations
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\CcConfigurations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cc_configurations_id", referencedColumnName="id")
     * })
     */
    private $ccConfigurations;

    /**
     * @var \AppBundle\Entity\Applications
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Applications")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="applications_id", referencedColumnName="id")
     * })
     */
    private $applications;



    /**
     * Set session
     *
     * @param string $session
     *
     * @return Sessions
     */
    public function setSession($session)
    {
        $this->session = $session;

        return $this;
    }

    /**
     * Get session
     *
     * @return string
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * Set data
     *
     * @param string $data
     *
     * @return Sessions
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
     * Set extIp
     *
     * @param string $extIp
     *
     * @return Sessions
     */
    public function setExtIp($extIp)
    {
        $this->extIp = $extIp;

        return $this;
    }

    /**
     * Get extIp
     *
     * @return string
     */
    public function getExtIp()
    {
        return $this->extIp;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Sessions
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
     * @return Sessions
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
     * Set userAgent
     *
     * @param string $userAgent
     *
     * @return Sessions
     */
    public function setUserAgent($userAgent)
    {
        $this->userAgent = $userAgent;

        return $this;
    }

    /**
     * Get userAgent
     *
     * @return string
     */
    public function getUserAgent()
    {
        return $this->userAgent;
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
     * Set user
     *
     * @param \AppBundle\Entity\Users $user
     *
     * @return Sessions
     */
    public function setUser(\AppBundle\Entity\Users $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\Users
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set customers
     *
     * @param \AppBundle\Entity\Customers $customers
     *
     * @return Sessions
     */
    public function setCustomers(\AppBundle\Entity\Customers $customers = null)
    {
        $this->customers = $customers;

        return $this;
    }

    /**
     * Get customers
     *
     * @return \AppBundle\Entity\Customers
     */
    public function getCustomers()
    {
        return $this->customers;
    }

    /**
     * Set ccConfigurations
     *
     * @param \AppBundle\Entity\CcConfigurations $ccConfigurations
     *
     * @return Sessions
     */
    public function setCcConfigurations(\AppBundle\Entity\CcConfigurations $ccConfigurations = null)
    {
        $this->ccConfigurations = $ccConfigurations;

        return $this;
    }

    /**
     * Get ccConfigurations
     *
     * @return \AppBundle\Entity\CcConfigurations
     */
    public function getCcConfigurations()
    {
        return $this->ccConfigurations;
    }

    /**
     * Set applications
     *
     * @param \AppBundle\Entity\Applications $applications
     *
     * @return Sessions
     */
    public function setApplications(\AppBundle\Entity\Applications $applications = null)
    {
        $this->applications = $applications;

        return $this;
    }

    /**
     * Get applications
     *
     * @return \AppBundle\Entity\Applications
     */
    public function getApplications()
    {
        return $this->applications;
    }
}
