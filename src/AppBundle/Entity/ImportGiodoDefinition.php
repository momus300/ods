<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImportGiodoDefinition
 *
 * @ORM\Table(name="import_giodo_definition", uniqueConstraints={@ORM\UniqueConstraint(name="code", columns={"code"})})
 * @ORM\Entity
 */
class ImportGiodoDefinition
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=45, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="crm_code", type="string", nullable=true)
     */
    private $crmCode;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active = '1';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="active_from", type="datetime", nullable=true)
     */
    private $activeFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="active_to", type="datetime", nullable=true)
     */
    private $activeTo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modified", type="datetime", nullable=true)
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
     * @return ImportGiodoDefinition
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
     * @return ImportGiodoDefinition
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
     * @return ImportGiodoDefinition
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
     * @return ImportGiodoDefinition
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
     * @param boolean $active
     *
     * @return ImportGiodoDefinition
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set activeFrom
     *
     * @param \DateTime $activeFrom
     *
     * @return ImportGiodoDefinition
     */
    public function setActiveFrom($activeFrom)
    {
        $this->activeFrom = $activeFrom;

        return $this;
    }

    /**
     * Get activeFrom
     *
     * @return \DateTime
     */
    public function getActiveFrom()
    {
        return $this->activeFrom;
    }

    /**
     * Set activeTo
     *
     * @param \DateTime $activeTo
     *
     * @return ImportGiodoDefinition
     */
    public function setActiveTo($activeTo)
    {
        $this->activeTo = $activeTo;

        return $this;
    }

    /**
     * Get activeTo
     *
     * @return \DateTime
     */
    public function getActiveTo()
    {
        return $this->activeTo;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return ImportGiodoDefinition
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
     * Set modified
     *
     * @param \DateTime $modified
     *
     * @return ImportGiodoDefinition
     */
    public function setModified($modified)
    {
        $this->modified = $modified;

        return $this;
    }

    /**
     * Get modified
     *
     * @return \DateTime
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
