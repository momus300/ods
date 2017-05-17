<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BrandSets
 *
 * @ORM\Table(name="brand_sets")
 * @ORM\Entity
 */
class BrandSets
{
    /**
     * @var integer
     *
     * @ORM\Column(name="bin_code", type="integer", nullable=true)
     */
    private $binCode;

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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Brands", inversedBy="brandSet")
     * @ORM\JoinTable(name="brand_set_brands",
     *   joinColumns={
     *     @ORM\JoinColumn(name="brand_set_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="brand_id", referencedColumnName="id")
     *   }
     * )
     */
    private $brand;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->brand = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set binCode
     *
     * @param integer $binCode
     *
     * @return BrandSets
     */
    public function setBinCode($binCode)
    {
        $this->binCode = $binCode;

        return $this;
    }

    /**
     * Get binCode
     *
     * @return integer
     */
    public function getBinCode()
    {
        return $this->binCode;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return BrandSets
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
     * @return BrandSets
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
     * Add brand
     *
     * @param \AppBundle\Entity\Brands $brand
     *
     * @return BrandSets
     */
    public function addBrand(\AppBundle\Entity\Brands $brand)
    {
        $this->brand[] = $brand;

        return $this;
    }

    /**
     * Remove brand
     *
     * @param \AppBundle\Entity\Brands $brand
     */
    public function removeBrand(\AppBundle\Entity\Brands $brand)
    {
        $this->brand->removeElement($brand);
    }

    /**
     * Get brand
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBrand()
    {
        return $this->brand;
    }
}
