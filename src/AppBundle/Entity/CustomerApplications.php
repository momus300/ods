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
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="applications_id", type="integer", nullable=false)
     */
    private $applicationsId;

    /**
     * @var \Customers
     *
     * @ORM\ManyToOne(targetEntity="Customers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customers_id", referencedColumnName="id"),
     *   @ORM\JoinColumn(name="brand_set_id", referencedColumnName="brand_set_id")
     * })
     */
    private $customers;



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
     * Set applicationsId
     *
     * @param integer $applicationsId
     *
     * @return CustomerApplications
     */
    public function setApplicationsId($applicationsId)
    {
        $this->applicationsId = $applicationsId;

        return $this;
    }

    /**
     * Get applicationsId
     *
     * @return integer
     */
    public function getApplicationsId()
    {
        return $this->applicationsId;
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
}
