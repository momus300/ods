<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VinDiscount
 *
 * @ORM\Table(name="vin_discount", indexes={@ORM\Index(name="model_key_idx", columns={"model_key"})})
 * @ORM\Entity
 */
class VinDiscount
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
     * @ORM\Column(name="model_key", type="string", length=6, nullable=false)
     */
    private $modelKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="model_year", type="integer", nullable=false)
     */
    private $modelYear;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $value = '0.00';

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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set modelKey
     *
     * @param string $modelKey
     *
     * @return VinDiscount
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
     * Set modelYear
     *
     * @param integer $modelYear
     *
     * @return VinDiscount
     */
    public function setModelYear($modelYear)
    {
        $this->modelYear = $modelYear;

        return $this;
    }

    /**
     * Get modelYear
     *
     * @return integer
     */
    public function getModelYear()
    {
        return $this->modelYear;
    }

    /**
     * Set value
     *
     * @param string $value
     *
     * @return VinDiscount
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
     * Set active
     *
     * @param integer $active
     *
     * @return VinDiscount
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
     * @return VinDiscount
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
     * @return VinDiscount
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
     * @return VinDiscount
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
     * @return VinDiscount
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
}
