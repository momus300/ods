<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DicNames
 *
 * @ORM\Table(name="dic_names", indexes={@ORM\Index(name="name_idx", columns={"name"}), @ORM\Index(name="ind_purl", columns={"purl"})})
 * @ORM\Entity
 */
class DicNames
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="vocative", type="string", length=50, nullable=false)
     */
    private $vocative;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=1, nullable=false)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="purl", type="string", length=50, nullable=true)
     */
    private $purl;

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
     * Set name
     *
     * @param string $name
     *
     * @return DicNames
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
     * Set vocative
     *
     * @param string $vocative
     *
     * @return DicNames
     */
    public function setVocative($vocative)
    {
        $this->vocative = $vocative;

        return $this;
    }

    /**
     * Get vocative
     *
     * @return string
     */
    public function getVocative()
    {
        return $this->vocative;
    }

    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return DicNames
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set purl
     *
     * @param string $purl
     *
     * @return DicNames
     */
    public function setPurl($purl)
    {
        $this->purl = $purl;

        return $this;
    }

    /**
     * Get purl
     *
     * @return string
     */
    public function getPurl()
    {
        return $this->purl;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return DicNames
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
     * @return DicNames
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
}
