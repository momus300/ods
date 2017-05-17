<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImportMethodsApplications
 *
 * @ORM\Table(name="import_methods_applications", indexes={@ORM\Index(name="fk_methods_applications_methods_idx", columns={"method_id"}), @ORM\Index(name="fk_methods_applications_applications1_idx", columns={"application_id"})})
 * @ORM\Entity
 */
class ImportMethodsApplications
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     *
     * @ORM\Column(name="method_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $methodId;

    /**
     * @var integer
     *
     * @ORM\Column(name="application_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $applicationId;



    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return ImportMethodsApplications
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
     * Set methodId
     *
     * @param integer $methodId
     *
     * @return ImportMethodsApplications
     */
    public function setMethodId($methodId)
    {
        $this->methodId = $methodId;

        return $this;
    }

    /**
     * Get methodId
     *
     * @return integer
     */
    public function getMethodId()
    {
        return $this->methodId;
    }

    /**
     * Set applicationId
     *
     * @param integer $applicationId
     *
     * @return ImportMethodsApplications
     */
    public function setApplicationId($applicationId)
    {
        $this->applicationId = $applicationId;

        return $this;
    }

    /**
     * Get applicationId
     *
     * @return integer
     */
    public function getApplicationId()
    {
        return $this->applicationId;
    }
}
