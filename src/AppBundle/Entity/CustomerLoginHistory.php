<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerLoginHistory
 *
 * @ORM\Table(name="customer_login_history", indexes={@ORM\Index(name="fk_customer_login_history_customers1_idx", columns={"customer_id"}), @ORM\Index(name="fk_customer_login_history_application_auth_types1_idx", columns={"auth_type_id", "application_id"}), @ORM\Index(name="fk_customer_login_history_sessions1_idx", columns={"session_id"})})
 * @ORM\Entity
 */
class CustomerLoginHistory
{
    /**
     * @var string
     *
     * @ORM\Column(name="ext_ip", type="string", length=15, nullable=false)
     */
    private $extIp;

    /**
     * @var string
     *
     * @ORM\Column(name="purl", type="string", length=200, nullable=true)
     */
    private $purl;

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
     * @var \AppBundle\Entity\Customers
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Customers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customer_id", referencedColumnName="id")
     * })
     */
    private $customer;

    /**
     * @var \AppBundle\Entity\ApplicationAuthTypes
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\ApplicationAuthTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="auth_type_id", referencedColumnName="auth_type_id"),
     *   @ORM\JoinColumn(name="application_id", referencedColumnName="application_id")
     * })
     */
    private $authType;

    /**
     * @var \AppBundle\Entity\Sessions
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Sessions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="session_id", referencedColumnName="id")
     * })
     */
    private $session;



    /**
     * Set extIp
     *
     * @param string $extIp
     *
     * @return CustomerLoginHistory
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
     * Set purl
     *
     * @param string $purl
     *
     * @return CustomerLoginHistory
     */
    public function setPurl($purl)
    {
        $this->purl = $purl;

        return $this;
    }

    /**
     * Get purl
     *
     * @return string
     */
    public function getPurl()
    {
        return $this->purl;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return CustomerLoginHistory
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

    /**
     * Set customer
     *
     * @param \AppBundle\Entity\Customers $customer
     *
     * @return CustomerLoginHistory
     */
    public function setCustomer(\AppBundle\Entity\Customers $customer = null)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer
     *
     * @return \AppBundle\Entity\Customers
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set authType
     *
     * @param \AppBundle\Entity\ApplicationAuthTypes $authType
     *
     * @return CustomerLoginHistory
     */
    public function setAuthType(\AppBundle\Entity\ApplicationAuthTypes $authType = null)
    {
        $this->authType = $authType;

        return $this;
    }

    /**
     * Get authType
     *
     * @return \AppBundle\Entity\ApplicationAuthTypes
     */
    public function getAuthType()
    {
        return $this->authType;
    }

    /**
     * Set session
     *
     * @param \AppBundle\Entity\Sessions $session
     *
     * @return CustomerLoginHistory
     */
    public function setSession(\AppBundle\Entity\Sessions $session = null)
    {
        $this->session = $session;

        return $this;
    }

    /**
     * Get session
     *
     * @return \AppBundle\Entity\Sessions
     */
    public function getSession()
    {
        return $this->session;
    }
}
