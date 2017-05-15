<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BrandSetBrands
 *
 * @ORM\Table(name="brand_set_brands")
 * @ORM\Entity
 */
class BrandSetBrands
{
    /**
     * @var integer
     *
     * @ORM\Column(name="brand_set_id", type="integer", nullable=true)
     */
    private $brandSetId;

    /**
     * @var integer
     *
     * @ORM\Column(name="brand_id", type="integer", nullable=true)
     */
    private $brandId;

    /**
     * @var string
     *
     * @ORM\Column(name="created", type="string", length=19, nullable=true)
     */
    private $created;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set brandSetId
     *
     * @param integer $brandSetId
     *
     * @return BrandSetBrands
     */
    public function setBrandSetId($brandSetId)
    {
        $this->brandSetId = $brandSetId;

        return $this;
    }

    /**
     * Get brandSetId
     *
     * @return integer
     */
    public function getBrandSetId()
    {
        return $this->brandSetId;
    }

    /**
     * Set brandId
     *
     * @param integer $brandId
     *
     * @return BrandSetBrands
     */
    public function setBrandId($brandId)
    {
        $this->brandId = $brandId;

        return $this;
    }

    /**
     * Get brandId
     *
     * @return integer
     */
    public function getBrandId()
    {
        return $this->brandId;
    }

    /**
     * Set created
     *
     * @param string $created
     *
     * @return BrandSetBrands
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return string
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
}
