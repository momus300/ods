<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipment
 *
 * @ORM\Table(name="equipment")
 * @ORM\Entity
 */
class Equipment
{
    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=7, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="model_class", type="string", length=2, nullable=true)
     */
    private $modelClass;

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
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\EcouponGroups", mappedBy="equipment")
     */
    private $ecouponGroup;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ecouponGroup = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set code
     *
     * @param string $code
     *
     * @return Equipment
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
     * Set modelClass
     *
     * @param string $modelClass
     *
     * @return Equipment
     */
    public function setModelClass($modelClass)
    {
        $this->modelClass = $modelClass;

        return $this;
    }

    /**
     * Get modelClass
     *
     * @return string
     */
    public function getModelClass()
    {
        return $this->modelClass;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Equipment
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
     * @return Equipment
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
     * Add ecouponGroup
     *
     * @param \AppBundle\Entity\EcouponGroups $ecouponGroup
     *
     * @return Equipment
     */
    public function addEcouponGroup(\AppBundle\Entity\EcouponGroups $ecouponGroup)
    {
        $this->ecouponGroup[] = $ecouponGroup;

        return $this;
    }

    /**
     * Remove ecouponGroup
     *
     * @param \AppBundle\Entity\EcouponGroups $ecouponGroup
     */
    public function removeEcouponGroup(\AppBundle\Entity\EcouponGroups $ecouponGroup)
    {
        $this->ecouponGroup->removeElement($ecouponGroup);
    }

    /**
     * Get ecouponGroup
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEcouponGroup()
    {
        return $this->ecouponGroup;
    }
}
