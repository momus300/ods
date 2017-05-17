<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerEcoupons
 *
 * @ORM\Table(name="customer_ecoupons", indexes={@ORM\Index(name="fk_customers_has_ecoupons_ecoupons1_idx", columns={"ecoupon_id"}), @ORM\Index(name="fk_customers_has_ecoupons_customers1_idx", columns={"customer_id"}), @ORM\Index(name="fk_customer_ecoupons_cc_configurations1_idx", columns={"cc_configuration_id"})})
 * @ORM\Entity
 */
class CustomerEcoupons
{
    /**
     * @var integer
     *
     * @ORM\Column(name="choice", type="integer", nullable=false)
     */
    private $choice = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created = 'CURRENT_TIMESTAMP';

    /**
     * @var \AppBundle\Entity\Ecoupons
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Ecoupons")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ecoupon_id", referencedColumnName="id")
     * })
     */
    private $ecoupon;

    /**
     * @var \AppBundle\Entity\Customers
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Customers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customer_id", referencedColumnName="id")
     * })
     */
    private $customer;

    /**
     * @var \AppBundle\Entity\CcConfigurations
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\CcConfigurations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cc_configuration_id", referencedColumnName="id")
     * })
     */
    private $ccConfiguration;



    /**
     * Set choice
     *
     * @param integer $choice
     *
     * @return CustomerEcoupons
     */
    public function setChoice($choice)
    {
        $this->choice = $choice;

        return $this;
    }

    /**
     * Get choice
     *
     * @return integer
     */
    public function getChoice()
    {
        return $this->choice;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return CustomerEcoupons
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
     * Set ecoupon
     *
     * @param \AppBundle\Entity\Ecoupons $ecoupon
     *
     * @return CustomerEcoupons
     */
    public function setEcoupon(\AppBundle\Entity\Ecoupons $ecoupon)
    {
        $this->ecoupon = $ecoupon;

        return $this;
    }

    /**
     * Get ecoupon
     *
     * @return \AppBundle\Entity\Ecoupons
     */
    public function getEcoupon()
    {
        return $this->ecoupon;
    }

    /**
     * Set customer
     *
     * @param \AppBundle\Entity\Customers $customer
     *
     * @return CustomerEcoupons
     */
    public function setCustomer(\AppBundle\Entity\Customers $customer)
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
     * Set ccConfiguration
     *
     * @param \AppBundle\Entity\CcConfigurations $ccConfiguration
     *
     * @return CustomerEcoupons
     */
    public function setCcConfiguration(\AppBundle\Entity\CcConfigurations $ccConfiguration = null)
    {
        $this->ccConfiguration = $ccConfiguration;

        return $this;
    }

    /**
     * Get ccConfiguration
     *
     * @return \AppBundle\Entity\CcConfigurations
     */
    public function getCcConfiguration()
    {
        return $this->ccConfiguration;
    }
}
