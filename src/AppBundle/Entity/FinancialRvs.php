<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FinancialRvs
 *
 * @ORM\Table(name="financial_rvs")
 * @ORM\Entity
 */
class FinancialRvs
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
     * @ORM\Column(name="model_code", type="string", length=10, nullable=false)
     */
    private $modelCode;

    /**
     * @var integer
     *
     * @ORM\Column(name="yearly_limit", type="integer", nullable=false)
     */
    private $yearlyLimit;

    /**
     * @var integer
     *
     * @ORM\Column(name="financial_time", type="integer", nullable=false)
     */
    private $financialTime;

    /**
     * @var string
     *
     * @ORM\Column(name="rv", type="decimal", precision=9, scale=2, nullable=true)
     */
    private $rv;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    private $created = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modified", type="date", nullable=true)
     */
    private $modified;



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
     * Set modelCode
     *
     * @param string $modelCode
     *
     * @return FinancialRvs
     */
    public function setModelCode($modelCode)
    {
        $this->modelCode = $modelCode;

        return $this;
    }

    /**
     * Get modelCode
     *
     * @return string
     */
    public function getModelCode()
    {
        return $this->modelCode;
    }

    /**
     * Set yearlyLimit
     *
     * @param integer $yearlyLimit
     *
     * @return FinancialRvs
     */
    public function setYearlyLimit($yearlyLimit)
    {
        $this->yearlyLimit = $yearlyLimit;

        return $this;
    }

    /**
     * Get yearlyLimit
     *
     * @return integer
     */
    public function getYearlyLimit()
    {
        return $this->yearlyLimit;
    }

    /**
     * Set financialTime
     *
     * @param integer $financialTime
     *
     * @return FinancialRvs
     */
    public function setFinancialTime($financialTime)
    {
        $this->financialTime = $financialTime;

        return $this;
    }

    /**
     * Get financialTime
     *
     * @return integer
     */
    public function getFinancialTime()
    {
        return $this->financialTime;
    }

    /**
     * Set rv
     *
     * @param string $rv
     *
     * @return FinancialRvs
     */
    public function setRv($rv)
    {
        $this->rv = $rv;

        return $this;
    }

    /**
     * Get rv
     *
     * @return string
     */
    public function getRv()
    {
        return $this->rv;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return FinancialRvs
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
     * @return FinancialRvs
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
}
