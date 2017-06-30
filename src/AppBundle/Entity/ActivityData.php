<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActivityData
 *
 * @ORM\Table(name="activity_data")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ActivityDataRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class ActivityData
{
    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $id;

    /**
     * @var \Activities
     *
     * @ORM\ManyToOne(targetEntity="Activities", inversedBy="activityDatas")
     * @ORM\JoinColumn(name="activity_id", referencedColumnName="id")
     *
     */
    private $activity;

    /**
     * @var \ActivityDataDefs
     *
     * @ORM\ManyToOne(targetEntity="ActivityDataDefs")
     * @ORM\JoinColumn(name="data_id", referencedColumnName="id")
     */
    private $data;

    /**
     * @var bool
     *
     * @ORM\Column(name="required", type="boolean")
     */
    private $required;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created;


    /**
     * Set required
     *
     * @param boolean $required
     *
     * @return ActivityData
     */
    public function setRequired($required)
    {
        $this->required = $required;

        return $this;
    }

    /**
     * Get required
     *
     * @return boolean
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * Set created
     *
     * @ORM\PrePersist()
     *
     * @return ActivityData
     */
    public function setCreated()
    {
        $this->created = new \DateTime();

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
     * Set activity
     *
     * @param \AppBundle\Entity\Activities $activity
     *
     * @return ActivityData
     */
    public function setActivity(\AppBundle\Entity\Activities $activity = null)
    {
        $this->activity = $activity;

        return $this;
    }

    /**
     * Get activity
     *
     * @return \AppBundle\Entity\Activities
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * Set data
     *
     * @param \AppBundle\Entity\ActivityDataDefs $data
     *
     * @return ActivityData
     */
    public function setData(\AppBundle\Entity\ActivityDataDefs $data = null)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return \AppBundle\Entity\ActivityDataDefs
     */
    public function getData()
    {
        return $this->data;
    }
}
