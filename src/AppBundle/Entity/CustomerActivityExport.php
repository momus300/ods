<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerActivityExport
 *
 * @ORM\Table(name="customer_activity_export", indexes={@ORM\Index(name="fk_activity_export_has_customer_activities_customer_activit_idx", columns={"customer_activity_id"}), @ORM\Index(name="fk_activity_export_has_customer_activities_activity_export1_idx", columns={"activity_export_request_id"}), @ORM\Index(name="fk_customer_activity_export_applications1_idx", columns={"application_id"}), @ORM\Index(name="idx_application_customer_activity", columns={"application_id", "customer_activity_id"})})
 * @ORM\Entity
 */
class CustomerActivityExport
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created = 'CURRENT_TIMESTAMP';

    /**
     * @var \AppBundle\Entity\ActivityExportRequests
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\ActivityExportRequests")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="activity_export_request_id", referencedColumnName="id")
     * })
     */
    private $activityExportRequest;

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
     * @var \AppBundle\Entity\Applications
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Applications")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="application_id", referencedColumnName="id")
     * })
     */
    private $application;



    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return CustomerActivityExport
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
     * Set activityExportRequest
     *
     * @param \AppBundle\Entity\ActivityExportRequests $activityExportRequest
     *
     * @return CustomerActivityExport
     */
    public function setActivityExportRequest(\AppBundle\Entity\ActivityExportRequests $activityExportRequest)
    {
        $this->activityExportRequest = $activityExportRequest;

        return $this;
    }

    /**
     * Get activityExportRequest
     *
     * @return \AppBundle\Entity\ActivityExportRequests
     */
    public function getActivityExportRequest()
    {
        return $this->activityExportRequest;
    }

    /**
     * Set customerActivity
     *
     * @param \AppBundle\Entity\CustomerActivities $customerActivity
     *
     * @return CustomerActivityExport
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

    /**
     * Set application
     *
     * @param \AppBundle\Entity\Applications $application
     *
     * @return CustomerActivityExport
     */
    public function setApplication(\AppBundle\Entity\Applications $application = null)
    {
        $this->application = $application;

        return $this;
    }

    /**
     * Get application
     *
     * @return \AppBundle\Entity\Applications
     */
    public function getApplication()
    {
        return $this->application;
    }
}
