<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActivityDataDefs
 *
 * @ORM\Table(name="activity_data_defs")
 * @ORM\Entity
 */
class ActivityDataDefs
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=27, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=231, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="optout_delete", type="integer", nullable=true)
     */
    private $optoutDelete;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=7, nullable=true)
     */
    private $type;

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
     * @return ActivityDataDefs
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
     * Set description
     *
     * @param string $description
     *
     * @return ActivityDataDefs
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
     * Set optoutDelete
     *
     * @param integer $optoutDelete
     *
     * @return ActivityDataDefs
     */
    public function setOptoutDelete($optoutDelete)
    {
        $this->optoutDelete = $optoutDelete;

        return $this;
    }

    /**
     * Get optoutDelete
     *
     * @return integer
     */
    public function getOptoutDelete()
    {
        return $this->optoutDelete;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return ActivityDataDefs
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set created
     *
     * @param string $created
     *
     * @return ActivityDataDefs
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
     * @return ActivityDataDefs
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
