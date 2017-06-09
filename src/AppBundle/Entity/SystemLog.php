<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SystemLog
 *
 * @ORM\Table(name="system_log", indexes={@ORM\Index(name="fk_system_log_system_log_defs_idx", columns={"code_id"}), @ORM\Index(name="fk_system_log_customers1_idx", columns={"customer_id"}), @ORM\Index(name="ind_created", columns={"created"}), @ORM\Index(name="ind_ext_ip", columns={"ext_ip"}), @ORM\Index(name="fk_system_log_applications1_idx", columns={"application_id"})})
 * @ORM\Entity
 */
class SystemLog
{
    /**
     * @var string
     *
     * @ORM\Column(name="ext_ip", type="string", length=15, nullable=false)
     */
    private $extIp;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="data", type="text", length=65535, nullable=true)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="module", type="string", length=15, nullable=true)
     */
    private $module;

    /**
     * @var string
     *
     * @ORM\Column(name="stack_trace", type="text", length=65535, nullable=true)
     */
    private $stackTrace;

    /**
     * @var string
     *
     * @ORM\Column(name="request", type="text", length=65535, nullable=true)
     */
    private $request;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Applications
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Applications")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="application_id", referencedColumnName="id")
     * })
     */
    private $application;

    /**
     * @var \AppBundle\Entity\SystemLogDefs
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\SystemLogDefs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="code_id", referencedColumnName="id")
     * })
     */
    private $code;

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
     * Set extIp
     *
     * @param string $extIp
     *
     * @return SystemLog
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
     * @return SystemLog
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
     * Set data
     *
     * @param string $data
     *
     * @return SystemLog
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
     * Set module
     *
     * @param string $module
     *
     * @return SystemLog
     */
    public function setModule($module)
    {
        $this->module = $module;

        return $this;
    }

    /**
     * Get module
     *
     * @return string
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * Set stackTrace
     *
     * @param string $stackTrace
     *
     * @return SystemLog
     */
    public function setStackTrace($stackTrace)
    {
        $this->stackTrace = $stackTrace;

        return $this;
    }

    /**
     * Get stackTrace
     *
     * @return string
     */
    public function getStackTrace()
    {
        return $this->stackTrace;
    }

    /**
     * Set request
     *
     * @param string $request
     *
     * @return SystemLog
     */
    public function setRequest($request)
    {
        $this->request = $request;

        return $this;
    }

    /**
     * Get request
     *
     * @return string
     */
    public function getRequest()
    {
        return $this->request;
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
     * Set application
     *
     * @param \AppBundle\Entity\Applications $application
     *
     * @return SystemLog
     */
    public function setApplication(\AppBundle\Entity\Applications $application = null)
    {
        $this->application = $application;

        return $this;
    }

    /**
     * Get application
     *
     * @return \AppBundle\Entity\Applications
     */
    public function getApplication()
    {
        return $this->application;
    }

    /**
     * Set code
     *
     * @param \AppBundle\Entity\SystemLogDefs $code
     *
     * @return SystemLog
     */
    public function setCode(\AppBundle\Entity\SystemLogDefs $code = null)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return \AppBundle\Entity\SystemLogDefs
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set customer
     *
     * @param \AppBundle\Entity\Customers $customer
     *
     * @return SystemLog
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
}
