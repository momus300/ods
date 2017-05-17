<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Brands
 *
 * @ORM\Table(name="brands", uniqueConstraints={@ORM\UniqueConstraint(name="code_UNIQUE", columns={"code"})})
 * @ORM\Entity
 */
class Brands
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=20, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=2, nullable=false)
     */
    private $code;

    /**
     * @var integer
     *
     * @ORM\Column(name="bin_code", type="integer", nullable=true)
     */
    private $binCode;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_multi", type="boolean", nullable=false)
     */
    private $isMulti = '0';

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
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Users", mappedBy="brand")
     */
    private $user;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Dealers", mappedBy="brand")
     */
    private $dealer;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\BrandSets", mappedBy="brand")
     */
    private $brandSet;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
        $this->dealer = new \Doctrine\Common\Collections\ArrayCollection();
        $this->brandSet = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set name
     *
     * @param string $name
     *
     * @return Brands
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
     * @return Brands
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
     * Set binCode
     *
     * @param integer $binCode
     *
     * @return Brands
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
     * Set description
     *
     * @param string $description
     *
     * @return Brands
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set isMulti
     *
     * @param boolean $isMulti
     *
     * @return Brands
     */
    public function setIsMulti($isMulti)
    {
        $this->isMulti = $isMulti;

        return $this;
    }

    /**
     * Get isMulti
     *
     * @return boolean
     */
    public function getIsMulti()
    {
        return $this->isMulti;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Brands
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
     * @return Brands
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
     * Add user
     *
     * @param \AppBundle\Entity\Users $user
     *
     * @return Brands
     */
    public function addUser(\AppBundle\Entity\Users $user)
    {
        $this->user[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \AppBundle\Entity\Users $user
     */
    public function removeUser(\AppBundle\Entity\Users $user)
    {
        $this->user->removeElement($user);
    }

    /**
     * Get user
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add dealer
     *
     * @param \AppBundle\Entity\Dealers $dealer
     *
     * @return Brands
     */
    public function addDealer(\AppBundle\Entity\Dealers $dealer)
    {
        $this->dealer[] = $dealer;

        return $this;
    }

    /**
     * Remove dealer
     *
     * @param \AppBundle\Entity\Dealers $dealer
     */
    public function removeDealer(\AppBundle\Entity\Dealers $dealer)
    {
        $this->dealer->removeElement($dealer);
    }

    /**
     * Get dealer
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDealer()
    {
        return $this->dealer;
    }

    /**
     * Add brandSet
     *
     * @param \AppBundle\Entity\BrandSets $brandSet
     *
     * @return Brands
     */
    public function addBrandSet(\AppBundle\Entity\BrandSets $brandSet)
    {
        $this->brandSet[] = $brandSet;

        return $this;
    }

    /**
     * Remove brandSet
     *
     * @param \AppBundle\Entity\BrandSets $brandSet
     */
    public function removeBrandSet(\AppBundle\Entity\BrandSets $brandSet)
    {
        $this->brandSet->removeElement($brandSet);
    }

    /**
     * Get brandSet
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBrandSet()
    {
        return $this->brandSet;
    }
}
