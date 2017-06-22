<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ecoupons
 *
 * @ORM\Table(name="ecoupons", indexes={@ORM\Index(name="fk_ecoupons_ecoupon_groups1_idx", columns={"ecoupon_group_id"}), @ORM\Index(name="code_idx", columns={"code"})})
 * @ORM\Entity
 */
class Ecoupons
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
     * @ORM\Column(name="code", type="string", length=20, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=20, nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="product", type="string", length=400, nullable=true)
     */
    private $product;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $value;

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
     * @var \EcouponGroups
     *
     * @ORM\ManyToOne(targetEntity="EcouponGroups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ecoupon_group_id", referencedColumnName="id")
     * })
     */
    private $ecouponGroup;



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
     * Set code
     *
     * @param string $code
     *
     * @return Ecoupons
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Ecoupons
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
     * Set product
     *
     * @param string $product
     *
     * @return Ecoupons
     */
    public function setProduct($product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return string
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set value
     *
     * @param string $value
     *
     * @return Ecoupons
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
     * @return Ecoupons
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
     * @return Ecoupons
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
     * Set ecouponGroup
     *
     * @param \AppBundle\Entity\EcouponGroups $ecouponGroup
     *
     * @return Ecoupons
     */
    public function setEcouponGroup(\AppBundle\Entity\EcouponGroups $ecouponGroup = null)
    {
        $this->ecouponGroup = $ecouponGroup;

        return $this;
    }

    /**
     * Get ecouponGroup
     *
     * @return \AppBundle\Entity\EcouponGroups
     */
    public function getEcouponGroup()
    {
        return $this->ecouponGroup;
    }
}
