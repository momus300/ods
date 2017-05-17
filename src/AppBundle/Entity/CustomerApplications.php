<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerApplications
 *
 * @ORM\Table(name="customer_applications", indexes={@ORM\Index(name="fk_customers_has_applications_applications1_idx", columns={"applications_id", "brand_set_id"}), @ORM\Index(name="fk_customers_has_applications_customers1_idx", columns={"customers_id", "brand_set_id"})})
 * @ORM\Entity
 */
class CustomerApplications
{
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
     *   @ORM\JoinColumn(name="customers_id", referencedColumnName="id"),
     *   @ORM\JoinColumn(name="brand_set_id", referencedColumnName="brand_set_id")
     * })
     */
    private $customers;

    /**
     * @var \AppBundle\Entity\Applications
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Applications")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="applications_id", referencedColumnName="id"),
     *   @ORM\JoinColumn(name="brand_set_id", referencedColumnName="brand_set_id")
     * })
     */
    private $applications;



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
     * Set customers
     *
     * @param \AppBundle\Entity\Customers $customers
     *
     * @return CustomerApplications
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
     * Set applications
     *
     * @param \AppBundle\Entity\Applications $applications
     *
     * @return CustomerApplications
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
