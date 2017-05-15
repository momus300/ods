<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Brands
 *
 * @ORM\Table(name="brands")
 * @ORM\Entity
 */
class Brands
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=11, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=1, nullable=true)
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
     * @ORM\Column(name="description", type="string", length=10, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_multi", type="integer", nullable=true)
     */
    private $isMulti;

    /**
     * @var string
     *
     * @ORM\Column(name="created", type="string", length=19, nullable=true)
     */
    private $created;

    /**
     * @var string
     *
     * @ORM\Column(name="last_modified", type="string", length=19, nullable=true)
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
     * @param integer $isMulti
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
     * @return integer
     */
    public function getIsMulti()
    {
        return $this->isMulti;
    }

    /**
     * Set created
     *
     * @param string $created
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
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set lastModified
     *
     * @param string $lastModified
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
     * @return string
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
}
