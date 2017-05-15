<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Methods
 *
 * @ORM\Table(name="methods")
 * @ORM\Entity
 */
class Methods
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=27, nullable=true)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="active", type="integer", nullable=true)
     */
    private $active;

    /**
     * @var string
     *
     * @ORM\Column(name="active_start", type="string", length=10, nullable=true)
     */
    private $activeStart;

    /**
     * @var string
     *
     * @ORM\Column(name="active_end", type="string", length=10, nullable=true)
     */
    private $activeEnd;

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
     * @ORM\Column(name="is_admin", type="integer", nullable=true)
     */
    private $isAdmin;

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
     * @return Methods
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
     * Set active
     *
     * @param integer $active
     *
     * @return Methods
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
     * @param string $activeStart
     *
     * @return Methods
     */
    public function setActiveStart($activeStart)
    {
        $this->activeStart = $activeStart;

        return $this;
    }

    /**
     * Get activeStart
     *
     * @return string
     */
    public function getActiveStart()
    {
        return $this->activeStart;
    }

    /**
     * Set activeEnd
     *
     * @param string $activeEnd
     *
     * @return Methods
     */
    public function setActiveEnd($activeEnd)
    {
        $this->activeEnd = $activeEnd;

        return $this;
    }

    /**
     * Get activeEnd
     *
     * @return string
     */
    public function getActiveEnd()
    {
        return $this->activeEnd;
    }

    /**
     * Set created
     *
     * @param string $created
     *
     * @return Methods
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
     * @return Methods
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
     * Set isAdmin
     *
     * @param integer $isAdmin
     *
     * @return Methods
     */
    public function setIsAdmin($isAdmin)
    {
        $this->isAdmin = $isAdmin;

        return $this;
    }

    /**
     * Get isAdmin
     *
     * @return integer
     */
    public function getIsAdmin()
    {
        return $this->isAdmin;
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
