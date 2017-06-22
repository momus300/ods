<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PasDependencies
 *
 * @ORM\Table(name="pas_dependencies", indexes={@ORM\Index(name="fk_pas_dependencies_pas_data_1_idx", columns={"pas_data_id1"}), @ORM\Index(name="fk_pas_dependencies_pas_data_2_idx", columns={"pas_data_id2"})})
 * @ORM\Entity
 */
class PasDependencies
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
     * @var \PasDatas
     *
     * @ORM\ManyToOne(targetEntity="PasDatas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pas_data_id1", referencedColumnName="id")
     * })
     */
    private $pasData1;

    /**
     * @var \PasDatas
     *
     * @ORM\ManyToOne(targetEntity="PasDatas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pas_data_id2", referencedColumnName="id")
     * })
     */
    private $pasData2;



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
     * Set created
     *
     * @param \DateTime $created
     *
     * @return PasDependencies
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
     * @return PasDependencies
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
     * Set active
     *
     * @param integer $active
     *
     * @return PasDependencies
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
     * @return PasDependencies
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
     * @return PasDependencies
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
     * Set pasData1
     *
     * @param \AppBundle\Entity\PasDatas $pasData1
     *
     * @return PasDependencies
     */
    public function setPasData1(\AppBundle\Entity\PasDatas $pasData1 = null)
    {
        $this->pasData1 = $pasData1;

        return $this;
    }

    /**
     * Get pasData1
     *
     * @return \AppBundle\Entity\PasDatas
     */
    public function getPasData1()
    {
        return $this->pasData1;
    }

    /**
     * Set pasData2
     *
     * @param \AppBundle\Entity\PasDatas $pasData2
     *
     * @return PasDependencies
     */
    public function setPasData2(\AppBundle\Entity\PasDatas $pasData2 = null)
    {
        $this->pasData2 = $pasData2;

        return $this;
    }

    /**
     * Get pasData2
     *
     * @return \AppBundle\Entity\PasDatas
     */
    public function getPasData2()
    {
        return $this->pasData2;
    }
}
