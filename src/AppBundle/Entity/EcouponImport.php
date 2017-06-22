<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EcouponImport
 *
 * @ORM\Table(name="ecoupon_import", indexes={@ORM\Index(name="ck_customer_id_idx", columns={"ck_customer_id"})})
 * @ORM\Entity
 */
class EcouponImport
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
     * @ORM\Column(name="ecoupon_group_id", type="integer", nullable=false)
     */
    private $ecouponGroupId;

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
     * @ORM\Column(name="product", type="string", length=250, nullable=true)
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
     * @ORM\Column(name="active_end", type="datetime", nullable=true)
     */
    private $activeEnd;

    /**
     * @var integer
     *
     * @ORM\Column(name="ck_customer_id", type="integer", nullable=true)
     */
    private $ckCustomerId;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_id", type="integer", nullable=true)
     */
    private $customerId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created = 'CURRENT_TIMESTAMP';



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
     * Set ecouponGroupId
     *
     * @param integer $ecouponGroupId
     *
     * @return EcouponImport
     */
    public function setEcouponGroupId($ecouponGroupId)
    {
        $this->ecouponGroupId = $ecouponGroupId;

        return $this;
    }

    /**
     * Get ecouponGroupId
     *
     * @return integer
     */
    public function getEcouponGroupId()
    {
        return $this->ecouponGroupId;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return EcouponImport
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
     * @return EcouponImport
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
     * @return EcouponImport
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
     * @return EcouponImport
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
     * Set activeEnd
     *
     * @param \DateTime $activeEnd
     *
     * @return EcouponImport
     */
    public function setActiveEnd($activeEnd)
    {
        $this->activeEnd = $activeEnd;

        return $this;
    }

    /**
     * Get activeEnd
     *
     * @return \DateTime
     */
    public function getActiveEnd()
    {
        return $this->activeEnd;
    }

    /**
     * Set ckCustomerId
     *
     * @param integer $ckCustomerId
     *
     * @return EcouponImport
     */
    public function setCkCustomerId($ckCustomerId)
    {
        $this->ckCustomerId = $ckCustomerId;

        return $this;
    }

    /**
     * Get ckCustomerId
     *
     * @return integer
     */
    public function getCkCustomerId()
    {
        return $this->ckCustomerId;
    }

    /**
     * Set customerId
     *
     * @param integer $customerId
     *
     * @return EcouponImport
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * Get customerId
     *
     * @return integer
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return EcouponImport
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
}
