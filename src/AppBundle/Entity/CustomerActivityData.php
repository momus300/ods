<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerActivityData
 *
 * @ORM\Table(name="customer_activity_data", indexes={@ORM\Index(name="fk_customer_activities_has_activity_data_activity_data2_idx", columns={"activity_id", "data_id"}), @ORM\Index(name="fk_customer_activities_has_activity_data_customer_activitie_idx", columns={"customer_activity_id"}), @ORM\Index(name="created_idx", columns={"created"}), @ORM\Index(name="fk_customer_activity_data_activity_data_def", columns={"data_id"}), @ORM\Index(name="IDX_CA5258F281C06096", columns={"activity_id"})})
 * @ORM\Entity
 */
class CustomerActivityData
{
    /**
     * @var string
     *
     * @ORM\Column(name="value", type="text", length=65535, nullable=true)
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
     * @var \AppBundle\Entity\ActivityDataDefs
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\ActivityDataDefs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="data_id", referencedColumnName="id")
     * })
     */
    private $data;

    /**
     * @var \AppBundle\Entity\Activities
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Activities")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="activity_id", referencedColumnName="id")
     * })
     */
    private $activity;

    /**
     * @var \AppBundle\Entity\CustomerActivities
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\CustomerActivities")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customer_activity_id", referencedColumnName="id")
     * })
     */
    private $customerActivity;



    /**
     * Set value
     *
     * @param string $value
     *
     * @return CustomerActivityData
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
     * @return CustomerActivityData
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
     * @return CustomerActivityData
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
     * Set data
     *
     * @param \AppBundle\Entity\ActivityDataDefs $data
     *
     * @return CustomerActivityData
     */
    public function setData(\AppBundle\Entity\ActivityDataDefs $data)
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

    /**
     * Set activity
     *
     * @param \AppBundle\Entity\Activities $activity
     *
     * @return CustomerActivityData
     */
    public function setActivity(\AppBundle\Entity\Activities $activity)
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
     * Set customerActivity
     *
     * @param \AppBundle\Entity\CustomerActivities $customerActivity
     *
     * @return CustomerActivityData
     */
    public function setCustomerActivity(\AppBundle\Entity\CustomerActivities $customerActivity)
    {
        $this->customerActivity = $customerActivity;

        return $this;
    }

    /**
     * Get customerActivity
     *
     * @return \AppBundle\Entity\CustomerActivities
     */
    public function getCustomerActivity()
    {
        return $this->customerActivity;
    }
}
