<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LeadMailDeliveryErrors
 *
 * @ORM\Table(name="lead_mail_delivery_errors", indexes={@ORM\Index(name="fk_lead_mail_delivery_errors_leads1_idx", columns={"lead_id"})})
 * @ORM\Entity
 */
class LeadMailDeliveryErrors
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
     * @ORM\Column(name="type", type="string", length=50, nullable=false)
     */
    private $type;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="error_date", type="datetime", nullable=false)
     */
    private $errorDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created = 'CURRENT_TIMESTAMP';

    /**
     * @var \Leads
     *
     * @ORM\ManyToOne(targetEntity="Leads")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lead_id", referencedColumnName="id")
     * })
     */
    private $lead;



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
     * Set type
     *
     * @param string $type
     *
     * @return LeadMailDeliveryErrors
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set errorDate
     *
     * @param \DateTime $errorDate
     *
     * @return LeadMailDeliveryErrors
     */
    public function setErrorDate($errorDate)
    {
        $this->errorDate = $errorDate;

        return $this;
    }

    /**
     * Get errorDate
     *
     * @return \DateTime
     */
    public function getErrorDate()
    {
        return $this->errorDate;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return LeadMailDeliveryErrors
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
     * Set lead
     *
     * @param \AppBundle\Entity\Leads $lead
     *
     * @return LeadMailDeliveryErrors
     */
    public function setLead(\AppBundle\Entity\Leads $lead = null)
    {
        $this->lead = $lead;

        return $this;
    }

    /**
     * Get lead
     *
     * @return \AppBundle\Entity\Leads
     */
    public function getLead()
    {
        return $this->lead;
    }
}
