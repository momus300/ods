<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CcConfigurationsPasDatas
 *
 * @ORM\Table(name="cc_configurations_pas_datas", indexes={@ORM\Index(name="fk_cc_configurations_pas_datas_pas_datas_idx", columns={"pas_data_id"}), @ORM\Index(name="fk_cc_configurations_pas_datas_cc_confiugrations_idx", columns={"cc_configuration_id"})})
 * @ORM\Entity
 */
class CcConfigurationsPasDatas
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="recommended", type="boolean", nullable=false)
     */
    private $recommended = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $price;

    /**
     * @var integer
     *
     * @ORM\Column(name="e_coupon_id", type="integer", nullable=true)
     */
    private $eCouponId;

    /**
     * @var integer
     *
     * @ORM\Column(name="amount", type="integer", nullable=false)
     */
    private $amount = '1';

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
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\PasDatas
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\PasDatas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pas_data_id", referencedColumnName="id")
     * })
     */
    private $pasData;

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
     * Set recommended
     *
     * @param boolean $recommended
     *
     * @return CcConfigurationsPasDatas
     */
    public function setRecommended($recommended)
    {
        $this->recommended = $recommended;

        return $this;
    }

    /**
     * Get recommended
     *
     * @return boolean
     */
    public function getRecommended()
    {
        return $this->recommended;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return CcConfigurationsPasDatas
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set eCouponId
     *
     * @param integer $eCouponId
     *
     * @return CcConfigurationsPasDatas
     */
    public function setECouponId($eCouponId)
    {
        $this->eCouponId = $eCouponId;

        return $this;
    }

    /**
     * Get eCouponId
     *
     * @return integer
     */
    public function getECouponId()
    {
        return $this->eCouponId;
    }

    /**
     * Set amount
     *
     * @param integer $amount
     *
     * @return CcConfigurationsPasDatas
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return integer
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return CcConfigurationsPasDatas
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
     * @return CcConfigurationsPasDatas
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
     * Set deleted
     *
     * @param boolean $deleted
     *
     * @return CcConfigurationsPasDatas
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return boolean
     */
    public function getDeleted()
    {
        return $this->deleted;
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
     * Set pasData
     *
     * @param \AppBundle\Entity\PasDatas $pasData
     *
     * @return CcConfigurationsPasDatas
     */
    public function setPasData(\AppBundle\Entity\PasDatas $pasData = null)
    {
        $this->pasData = $pasData;

        return $this;
    }

    /**
     * Get pasData
     *
     * @return \AppBundle\Entity\PasDatas
     */
    public function getPasData()
    {
        return $this->pasData;
    }

    /**
     * Set ccConfiguration
     *
     * @param \AppBundle\Entity\CcConfigurations $ccConfiguration
     *
     * @return CcConfigurationsPasDatas
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
