<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CcConfigurationsLog
 *
 * @ORM\Table(name="cc_configurations_log", indexes={@ORM\Index(name="fk_customer_activities_has_cc_configurations_cc_configurati_idx", columns={"cc_configuration_id"})})
 * @ORM\Entity
 */
class CcConfigurationsLog
{
    /**
     * @var string
     *
     * @ORM\Column(name="field", type="string", length=30, nullable=false)
     */
    private $field;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=50, nullable=true)
     */
    private $value;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\CcConfigurations
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\CcConfigurations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cc_configuration_id", referencedColumnName="id")
     * })
     */
    private $ccConfiguration;



    /**
     * Set field
     *
     * @param string $field
     *
     * @return CcConfigurationsLog
     */
    public function setField($field)
    {
        $this->field = $field;

        return $this;
    }

    /**
     * Get field
     *
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Set value
     *
     * @param string $value
     *
     * @return CcConfigurationsLog
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
     * @return CcConfigurationsLog
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set ccConfiguration
     *
     * @param \AppBundle\Entity\CcConfigurations $ccConfiguration
     *
     * @return CcConfigurationsLog
     */
    public function setCcConfiguration(\AppBundle\Entity\CcConfigurations $ccConfiguration = null)
    {
        $this->ccConfiguration = $ccConfiguration;

        return $this;
    }

    /**
     * Get ccConfiguration
     *
     * @return \AppBundle\Entity\CcConfigurations
     */
    public function getCcConfiguration()
    {
        return $this->ccConfiguration;
    }
}
