<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MethodsApplications
 *
 * @ORM\Table(name="methods_applications")
 * @ORM\Entity
 */
class MethodsApplications
{
    /**
     * @var integer
     *
     * @ORM\Column(name="method_id", type="integer", nullable=true)
     */
    private $methodId;

    /**
     * @var integer
     *
     * @ORM\Column(name="application_id", type="integer", nullable=true)
     */
    private $applicationId;

    /**
     * @var string
     *
     * @ORM\Column(name="created", type="string", length=19, nullable=true)
     */
    private $created;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set methodId
     *
     * @param integer $methodId
     *
     * @return MethodsApplications
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
     * @return MethodsApplications
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

    /**
     * Set created
     *
     * @param string $created
     *
     * @return MethodsApplications
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
