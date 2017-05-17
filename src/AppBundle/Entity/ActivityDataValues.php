<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActivityDataValues
 *
 * @ORM\Table(name="activity_data_values", indexes={@ORM\Index(name="fk_activity_data_values_activity_data1_idx", columns={"activity_id", "data_id"})})
 * @ORM\Entity
 */
class ActivityDataValues
{
    /**
     * @var string
     *
     * @ORM\Column(name="value", type="text", length=65535, nullable=false)
     */
    private $value;

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
     * @var \AppBundle\Entity\ActivityData
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\ActivityData")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="activity_id", referencedColumnName="activity_id"),
     *   @ORM\JoinColumn(name="data_id", referencedColumnName="data_id")
     * })
     */
    private $activity;



    /**
     * Set value
     *
     * @param string $value
     *
     * @return ActivityDataValues
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
     * Set created
     *
     * @param \DateTime $created
     *
     * @return ActivityDataValues
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
     * @return ActivityDataValues
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
     * Set activity
     *
     * @param \AppBundle\Entity\ActivityData $activity
     *
     * @return ActivityDataValues
     */
    public function setActivity(\AppBundle\Entity\ActivityData $activity = null)
    {
        $this->activity = $activity;

        return $this;
    }

    /**
     * Get activity
     *
     * @return \AppBundle\Entity\ActivityData
     */
    public function getActivity()
    {
        return $this->activity;
    }
}
