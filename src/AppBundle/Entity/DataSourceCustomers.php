<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DataSourceCustomers
 *
 * @ORM\Table(name="data_source_customers", indexes={@ORM\Index(name="fk_data_sources_has_customers_customers1_idx", columns={"customer_id"}), @ORM\Index(name="fk_data_sources_has_customers_data_sources1_idx", columns={"data_source_id"})})
 * @ORM\Entity
 */
class DataSourceCustomers
{
    /**
     * @var string
     *
     * @ORM\Column(name="source_customer_id", type="string", length=30, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sourceCustomerId;

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
     * @var \Customers
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Customers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customer_id", referencedColumnName="id")
     * })
     */
    private $customer;

    /**
     * @var \DataSources
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="DataSources")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="data_source_id", referencedColumnName="id")
     * })
     */
    private $dataSource;



    /**
     * Set sourceCustomerId
     *
     * @param string $sourceCustomerId
     *
     * @return DataSourceCustomers
     */
    public function setSourceCustomerId($sourceCustomerId)
    {
        $this->sourceCustomerId = $sourceCustomerId;

        return $this;
    }

    /**
     * Get sourceCustomerId
     *
     * @return string
     */
    public function getSourceCustomerId()
    {
        return $this->sourceCustomerId;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return DataSourceCustomers
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
     * @return DataSourceCustomers
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
     * Set customer
     *
     * @param \AppBundle\Entity\Customers $customer
     *
     * @return DataSourceCustomers
     */
    public function setCustomer(\AppBundle\Entity\Customers $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer
     *
     * @return \AppBundle\Entity\Customers
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set dataSource
     *
     * @param \AppBundle\Entity\DataSources $dataSource
     *
     * @return DataSourceCustomers
     */
    public function setDataSource(\AppBundle\Entity\DataSources $dataSource)
    {
        $this->dataSource = $dataSource;

        return $this;
    }

    /**
     * Get dataSource
     *
     * @return \AppBundle\Entity\DataSources
     */
    public function getDataSource()
    {
        return $this->dataSource;
    }
}
