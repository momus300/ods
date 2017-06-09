<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductDiscounts
 *
 * @ORM\Table(name="product_discounts", indexes={@ORM\Index(name="code_idx", columns={"code"}), @ORM\Index(name="model_key_idx", columns={"model_key"}), @ORM\Index(name="product_code_idx", columns={"product_code"}), @ORM\Index(name="fk_product_discounts_discount_history1_idx", columns={"discount_history_id"})})
 * @ORM\Entity
 */
class ProductDiscounts
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=20, nullable=true)
     */
    private $code;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="model_key", type="string", length=6, nullable=false)
     */
    private $modelKey;

    /**
     * @var string
     *
     * @ORM\Column(name="product_code", type="string", length=150, nullable=true)
     */
    private $productCode;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $value = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="value_rate", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $valueRate;

    /**
     * @var integer
     *
     * @ORM\Column(name="active", type="integer", nullable=false)
     */
    private $active = '1';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="active_start", type="datetime", nullable=true)
     */
    private $activeStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="active_end", type="datetime", nullable=true)
     */
    private $activeEnd;

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
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\DiscountHistory
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\DiscountHistory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="discount_history_id", referencedColumnName="id")
     * })
     */
    private $discountHistory;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return ProductDiscounts
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return ProductDiscounts
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
     * Set type
     *
     * @param integer $type
     *
     * @return ProductDiscounts
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set modelKey
     *
     * @param string $modelKey
     *
     * @return ProductDiscounts
     */
    public function setModelKey($modelKey)
    {
        $this->modelKey = $modelKey;

        return $this;
    }

    /**
     * Get modelKey
     *
     * @return string
     */
    public function getModelKey()
    {
        return $this->modelKey;
    }

    /**
     * Set productCode
     *
     * @param string $productCode
     *
     * @return ProductDiscounts
     */
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;

        return $this;
    }

    /**
     * Get productCode
     *
     * @return string
     */
    public function getProductCode()
    {
        return $this->productCode;
    }

    /**
     * Set value
     *
     * @param string $value
     *
     * @return ProductDiscounts
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
     * Set valueRate
     *
     * @param string $valueRate
     *
     * @return ProductDiscounts
     */
    public function setValueRate($valueRate)
    {
        $this->valueRate = $valueRate;

        return $this;
    }

    /**
     * Get valueRate
     *
     * @return string
     */
    public function getValueRate()
    {
        return $this->valueRate;
    }

    /**
     * Set active
     *
     * @param integer $active
     *
     * @return ProductDiscounts
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return integer
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set activeStart
     *
     * @param \DateTime $activeStart
     *
     * @return ProductDiscounts
     */
    public function setActiveStart($activeStart)
    {
        $this->activeStart = $activeStart;

        return $this;
    }

    /**
     * Get activeStart
     *
     * @return \DateTime
     */
    public function getActiveStart()
    {
        return $this->activeStart;
    }

    /**
     * Set activeEnd
     *
     * @param \DateTime $activeEnd
     *
     * @return ProductDiscounts
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
     * Set created
     *
     * @param \DateTime $created
     *
     * @return ProductDiscounts
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
     * @return ProductDiscounts
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set discountHistory
     *
     * @param \AppBundle\Entity\DiscountHistory $discountHistory
     *
     * @return ProductDiscounts
     */
    public function setDiscountHistory(\AppBundle\Entity\DiscountHistory $discountHistory = null)
    {
        $this->discountHistory = $discountHistory;

        return $this;
    }

    /**
     * Get discountHistory
     *
     * @return \AppBundle\Entity\DiscountHistory
     */
    public function getDiscountHistory()
    {
        return $this->discountHistory;
    }
}
