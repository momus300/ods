<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CiosRecommended
 *
 * @ORM\Table(name="cios_recommended", indexes={@ORM\Index(name="fk_cios_recommended_activity_email_history1_idx", columns={"activity_email_history_id"}), @ORM\Index(name="fk_cios_recommended_cc_configurations1_idx", columns={"cc_configuration_id"}), @ORM\Index(name="fk_cios_recommended_pas_datas1_idx", columns={"pas_datas_id"}), @ORM\Index(name="fk_cios_recommended_cc_configuration_equipment1_idx", columns={"cc_configuration_equipment_id"})})
 * @ORM\Entity
 */
class CiosRecommended
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
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created = 'CURRENT_TIMESTAMP';

    /**
     * @var \ActivityEmailHistory
     *
     * @ORM\ManyToOne(targetEntity="ActivityEmailHistory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="activity_email_history_id", referencedColumnName="id")
     * })
     */
    private $activityEmailHistory;

    /**
     * @var \CcConfigurationEquipment
     *
     * @ORM\ManyToOne(targetEntity="CcConfigurationEquipment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cc_configuration_equipment_id", referencedColumnName="id")
     * })
     */
    private $ccConfigurationEquipment;

    /**
     * @var \CcConfigurations
     *
     * @ORM\ManyToOne(targetEntity="CcConfigurations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cc_configuration_id", referencedColumnName="id")
     * })
     */
    private $ccConfiguration;

    /**
     * @var \PasDatas
     *
     * @ORM\ManyToOne(targetEntity="PasDatas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pas_datas_id", referencedColumnName="id")
     * })
     */
    private $pasDatas;



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
     * Set created
     *
     * @param \DateTime $created
     *
     * @return CiosRecommended
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
     * Set activityEmailHistory
     *
     * @param \AppBundle\Entity\ActivityEmailHistory $activityEmailHistory
     *
     * @return CiosRecommended
     */
    public function setActivityEmailHistory(\AppBundle\Entity\ActivityEmailHistory $activityEmailHistory = null)
    {
        $this->activityEmailHistory = $activityEmailHistory;

        return $this;
    }

    /**
     * Get activityEmailHistory
     *
     * @return \AppBundle\Entity\ActivityEmailHistory
     */
    public function getActivityEmailHistory()
    {
        return $this->activityEmailHistory;
    }

    /**
     * Set ccConfigurationEquipment
     *
     * @param \AppBundle\Entity\CcConfigurationEquipment $ccConfigurationEquipment
     *
     * @return CiosRecommended
     */
    public function setCcConfigurationEquipment(\AppBundle\Entity\CcConfigurationEquipment $ccConfigurationEquipment = null)
    {
        $this->ccConfigurationEquipment = $ccConfigurationEquipment;

        return $this;
    }

    /**
     * Get ccConfigurationEquipment
     *
     * @return \AppBundle\Entity\CcConfigurationEquipment
     */
    public function getCcConfigurationEquipment()
    {
        return $this->ccConfigurationEquipment;
    }

    /**
     * Set ccConfiguration
     *
     * @param \AppBundle\Entity\CcConfigurations $ccConfiguration
     *
     * @return CiosRecommended
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

    /**
     * Set pasDatas
     *
     * @param \AppBundle\Entity\PasDatas $pasDatas
     *
     * @return CiosRecommended
     */
    public function setPasDatas(\AppBundle\Entity\PasDatas $pasDatas = null)
    {
        $this->pasDatas = $pasDatas;

        return $this;
    }

    /**
     * Get pasDatas
     *
     * @return \AppBundle\Entity\PasDatas
     */
    public function getPasDatas()
    {
        return $this->pasDatas;
    }
}
