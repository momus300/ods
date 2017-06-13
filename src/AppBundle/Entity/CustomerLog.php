<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerLog
 *
 * @ORM\Table(name="customer_log", indexes={@ORM\Index(name="fk_customer_log_customers1_idx", columns={"customer_id"}), @ORM\Index(name="fk_customer_log_applications1_idx", columns={"application_id"})})
 * @ORM\Entity
 */
class CustomerLog
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
     * @ORM\Column(name="field", type="string", length=25, nullable=false)
     */
    private $field;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=250, nullable=true)
     */
    private $value;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created = 'CURRENT_TIMESTAMP';

    /**
     * @var \Applications
     *
     * @ORM\ManyToOne(targetEntity="Applications")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="application_id", referencedColumnName="id")
     * })
     */
    private $application;

    /**
     * @var \Customers
     *
     * @ORM\ManyToOne(targetEntity="Customers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customer_id", referencedColumnName="id")
     * })
     */
    private $customer;



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
     * Set field
     *
     * @param string $field
     *
     * @return CustomerLog
     */
    public function setField($field)
    {
        $this->field = $field;

        return $this;
    }

    /**
     * Get field
     *
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Set value
     *
     * @param string $value
     *
     * @return CustomerLog
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return CustomerLog
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
     * Set application
     *
     * @param \AppBundle\Entity\Applications $application
     *
     * @return CustomerLog
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
     * Set customer
     *
     * @param \AppBundle\Entity\Customers $customer
     *
     * @return CustomerLog
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
