<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GiodoDefinition
 *
 * @ORM\Table(name="giodo_definition")
 * @ORM\Entity
 */
class GiodoDefinition
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=48, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1120, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=38, nullable=true)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="crm_code", type="string", length=23, nullable=true)
     */
    private $crmCode;

    /**
     * @var integer
     *
     * @ORM\Column(name="active", type="integer", nullable=true)
     */
    private $active;

    /**
     * @var string
     *
     * @ORM\Column(name="active_from", type="string", length=10, nullable=true)
     */
    private $activeFrom;

    /**
     * @var string
     *
     * @ORM\Column(name="active_to", type="string", length=10, nullable=true)
     */
    private $activeTo;

    /**
     * @var string
     *
     * @ORM\Column(name="created", type="string", length=19, nullable=true)
     */
    private $created;

    /**
     * @var string
     *
     * @ORM\Column(name="modified", type="string", length=10, nullable=true)
     */
    private $modified;

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
     * @return GiodoDefinition
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
     * @return GiodoDefinition
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
     * Set code
     *
     * @param string $code
     *
     * @return GiodoDefinition
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
     * Set crmCode
     *
     * @param string $crmCode
     *
     * @return GiodoDefinition
     */
    public function setCrmCode($crmCode)
    {
        $this->crmCode = $crmCode;

        return $this;
    }

    /**
     * Get crmCode
     *
     * @return string
     */
    public function getCrmCode()
    {
        return $this->crmCode;
    }

    /**
     * Set active
     *
     * @param integer $active
     *
     * @return GiodoDefinition
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
     * Set activeFrom
     *
     * @param string $activeFrom
     *
     * @return GiodoDefinition
     */
    public function setActiveFrom($activeFrom)
    {
        $this->activeFrom = $activeFrom;

        return $this;
    }

    /**
     * Get activeFrom
     *
     * @return string
     */
    public function getActiveFrom()
    {
        return $this->activeFrom;
    }

    /**
     * Set activeTo
     *
     * @param string $activeTo
     *
     * @return GiodoDefinition
     */
    public function setActiveTo($activeTo)
    {
        $this->activeTo = $activeTo;

        return $this;
    }

    /**
     * Get activeTo
     *
     * @return string
     */
    public function getActiveTo()
    {
        return $this->activeTo;
    }

    /**
     * Set created
     *
     * @param string $created
     *
     * @return GiodoDefinition
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
     * Set modified
     *
     * @param string $modified
     *
     * @return GiodoDefinition
     */
    public function setModified($modified)
    {
        $this->modified = $modified;

        return $this;
    }

    /**
     * Get modified
     *
     * @return string
     */
    public function getModified()
    {
        return $this->modified;
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
