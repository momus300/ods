<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PasDatas
 *
 * @ORM\Table(name="pas_datas", indexes={@ORM\Index(name="fk_pas_data_pas_category_idx", columns={"pas_category_id"}), @ORM\Index(name="fk_pas_data_pas_icon_idx", columns={"pas_icon_id"}), @ORM\Index(name="ind_status", columns={"status"}), @ORM\Index(name="ind_priority_cios", columns={"priority_cios"}), @ORM\Index(name="code", columns={"code"}), @ORM\Index(name="name", columns={"name"}), @ORM\Index(name="price_base", columns={"price_base"}), @ORM\Index(name="version", columns={"version"})})
 * @ORM\Entity
 */
class PasDatas
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
     * @ORM\Column(name="code", type="string", length=100, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=250, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="price_base", type="float", precision=15, scale=2, nullable=false)
     */
    private $priceBase;

    /**
     * @var float
     *
     * @ORM\Column(name="price_promo", type="float", precision=15, scale=2, nullable=true)
     */
    private $pricePromo;

    /**
     * @var integer
     *
     * @ORM\Column(name="priority", type="integer", nullable=true)
     */
    private $priority;

    /**
     * @var integer
     *
     * @ORM\Column(name="priority_cios", type="integer", nullable=false)
     */
    private $priorityCios = '0';

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
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status = '1';

    /**
     * @var float
     *
     * @ORM\Column(name="version", type="float", precision=10, scale=0, nullable=false)
     */
    private $version = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="param_1", type="text", length=65535, nullable=true)
     */
    private $param1;

    /**
     * @var string
     *
     * @ORM\Column(name="param_2", type="text", length=65535, nullable=true)
     */
    private $param2;

    /**
     * @var string
     *
     * @ORM\Column(name="param_3", type="text", length=65535, nullable=true)
     */
    private $param3;

    /**
     * @var string
     *
     * @ORM\Column(name="param_4", type="text", length=65535, nullable=true)
     */
    private $param4;

    /**
     * @var string
     *
     * @ORM\Column(name="param_5", type="text", length=65535, nullable=true)
     */
    private $param5;

    /**
     * @var string
     *
     * @ORM\Column(name="param_6", type="text", length=65535, nullable=true)
     */
    private $param6;

    /**
     * @var string
     *
     * @ORM\Column(name="param_7", type="text", length=65535, nullable=true)
     */
    private $param7;

    /**
     * @var string
     *
     * @ORM\Column(name="param_8", type="text", length=65535, nullable=true)
     */
    private $param8;

    /**
     * @var string
     *
     * @ORM\Column(name="param_9", type="text", length=65535, nullable=true)
     */
    private $param9;

    /**
     * @var string
     *
     * @ORM\Column(name="param_10", type="text", length=65535, nullable=true)
     */
    private $param10;

    /**
     * @var string
     *
     * @ORM\Column(name="param_11", type="text", length=65535, nullable=true)
     */
    private $param11;

    /**
     * @var string
     *
     * @ORM\Column(name="param_12", type="text", length=65535, nullable=true)
     */
    private $param12;

    /**
     * @var string
     *
     * @ORM\Column(name="param_13", type="text", length=65535, nullable=true)
     */
    private $param13;

    /**
     * @var string
     *
     * @ORM\Column(name="param_14", type="text", length=65535, nullable=true)
     */
    private $param14;

    /**
     * @var string
     *
     * @ORM\Column(name="param_15", type="text", length=65535, nullable=true)
     */
    private $param15;

    /**
     * @var integer
     *
     * @ORM\Column(name="client_type", type="integer", nullable=false)
     */
    private $clientType;

    /**
     * @var \PasCategories
     *
     * @ORM\ManyToOne(targetEntity="PasCategories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pas_category_id", referencedColumnName="id")
     * })
     */
    private $pasCategory;

    /**
     * @var \PasIcons
     *
     * @ORM\ManyToOne(targetEntity="PasIcons")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pas_icon_id", referencedColumnName="id")
     * })
     */
    private $pasIcon;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Brands", inversedBy="pasData")
     * @ORM\JoinTable(name="pas_data_brands",
     *   joinColumns={
     *     @ORM\JoinColumn(name="pas_data_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="brand_id", referencedColumnName="id")
     *   }
     * )
     */
    private $brand;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->brand = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set code
     *
     * @param string $code
     *
     * @return PasDatas
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return PasDatas
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return PasDatas
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set priceBase
     *
     * @param float $priceBase
     *
     * @return PasDatas
     */
    public function setPriceBase($priceBase)
    {
        $this->priceBase = $priceBase;

        return $this;
    }

    /**
     * Get priceBase
     *
     * @return float
     */
    public function getPriceBase()
    {
        return $this->priceBase;
    }

    /**
     * Set pricePromo
     *
     * @param float $pricePromo
     *
     * @return PasDatas
     */
    public function setPricePromo($pricePromo)
    {
        $this->pricePromo = $pricePromo;

        return $this;
    }

    /**
     * Get pricePromo
     *
     * @return float
     */
    public function getPricePromo()
    {
        return $this->pricePromo;
    }

    /**
     * Set priority
     *
     * @param integer $priority
     *
     * @return PasDatas
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return integer
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set priorityCios
     *
     * @param integer $priorityCios
     *
     * @return PasDatas
     */
    public function setPriorityCios($priorityCios)
    {
        $this->priorityCios = $priorityCios;

        return $this;
    }

    /**
     * Get priorityCios
     *
     * @return integer
     */
    public function getPriorityCios()
    {
        return $this->priorityCios;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return PasDatas
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
     * @return PasDatas
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
     * Set status
     *
     * @param integer $status
     *
     * @return PasDatas
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set version
     *
     * @param float $version
     *
     * @return PasDatas
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return float
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set param1
     *
     * @param string $param1
     *
     * @return PasDatas
     */
    public function setParam1($param1)
    {
        $this->param1 = $param1;

        return $this;
    }

    /**
     * Get param1
     *
     * @return string
     */
    public function getParam1()
    {
        return $this->param1;
    }

    /**
     * Set param2
     *
     * @param string $param2
     *
     * @return PasDatas
     */
    public function setParam2($param2)
    {
        $this->param2 = $param2;

        return $this;
    }

    /**
     * Get param2
     *
     * @return string
     */
    public function getParam2()
    {
        return $this->param2;
    }

    /**
     * Set param3
     *
     * @param string $param3
     *
     * @return PasDatas
     */
    public function setParam3($param3)
    {
        $this->param3 = $param3;

        return $this;
    }

    /**
     * Get param3
     *
     * @return string
     */
    public function getParam3()
    {
        return $this->param3;
    }

    /**
     * Set param4
     *
     * @param string $param4
     *
     * @return PasDatas
     */
    public function setParam4($param4)
    {
        $this->param4 = $param4;

        return $this;
    }

    /**
     * Get param4
     *
     * @return string
     */
    public function getParam4()
    {
        return $this->param4;
    }

    /**
     * Set param5
     *
     * @param string $param5
     *
     * @return PasDatas
     */
    public function setParam5($param5)
    {
        $this->param5 = $param5;

        return $this;
    }

    /**
     * Get param5
     *
     * @return string
     */
    public function getParam5()
    {
        return $this->param5;
    }

    /**
     * Set param6
     *
     * @param string $param6
     *
     * @return PasDatas
     */
    public function setParam6($param6)
    {
        $this->param6 = $param6;

        return $this;
    }

    /**
     * Get param6
     *
     * @return string
     */
    public function getParam6()
    {
        return $this->param6;
    }

    /**
     * Set param7
     *
     * @param string $param7
     *
     * @return PasDatas
     */
    public function setParam7($param7)
    {
        $this->param7 = $param7;

        return $this;
    }

    /**
     * Get param7
     *
     * @return string
     */
    public function getParam7()
    {
        return $this->param7;
    }

    /**
     * Set param8
     *
     * @param string $param8
     *
     * @return PasDatas
     */
    public function setParam8($param8)
    {
        $this->param8 = $param8;

        return $this;
    }

    /**
     * Get param8
     *
     * @return string
     */
    public function getParam8()
    {
        return $this->param8;
    }

    /**
     * Set param9
     *
     * @param string $param9
     *
     * @return PasDatas
     */
    public function setParam9($param9)
    {
        $this->param9 = $param9;

        return $this;
    }

    /**
     * Get param9
     *
     * @return string
     */
    public function getParam9()
    {
        return $this->param9;
    }

    /**
     * Set param10
     *
     * @param string $param10
     *
     * @return PasDatas
     */
    public function setParam10($param10)
    {
        $this->param10 = $param10;

        return $this;
    }

    /**
     * Get param10
     *
     * @return string
     */
    public function getParam10()
    {
        return $this->param10;
    }

    /**
     * Set param11
     *
     * @param string $param11
     *
     * @return PasDatas
     */
    public function setParam11($param11)
    {
        $this->param11 = $param11;

        return $this;
    }

    /**
     * Get param11
     *
     * @return string
     */
    public function getParam11()
    {
        return $this->param11;
    }

    /**
     * Set param12
     *
     * @param string $param12
     *
     * @return PasDatas
     */
    public function setParam12($param12)
    {
        $this->param12 = $param12;

        return $this;
    }

    /**
     * Get param12
     *
     * @return string
     */
    public function getParam12()
    {
        return $this->param12;
    }

    /**
     * Set param13
     *
     * @param string $param13
     *
     * @return PasDatas
     */
    public function setParam13($param13)
    {
        $this->param13 = $param13;

        return $this;
    }

    /**
     * Get param13
     *
     * @return string
     */
    public function getParam13()
    {
        return $this->param13;
    }

    /**
     * Set param14
     *
     * @param string $param14
     *
     * @return PasDatas
     */
    public function setParam14($param14)
    {
        $this->param14 = $param14;

        return $this;
    }

    /**
     * Get param14
     *
     * @return string
     */
    public function getParam14()
    {
        return $this->param14;
    }

    /**
     * Set param15
     *
     * @param string $param15
     *
     * @return PasDatas
     */
    public function setParam15($param15)
    {
        $this->param15 = $param15;

        return $this;
    }

    /**
     * Get param15
     *
     * @return string
     */
    public function getParam15()
    {
        return $this->param15;
    }

    /**
     * Set clientType
     *
     * @param integer $clientType
     *
     * @return PasDatas
     */
    public function setClientType($clientType)
    {
        $this->clientType = $clientType;

        return $this;
    }

    /**
     * Get clientType
     *
     * @return integer
     */
    public function getClientType()
    {
        return $this->clientType;
    }

    /**
     * Set pasCategory
     *
     * @param \AppBundle\Entity\PasCategories $pasCategory
     *
     * @return PasDatas
     */
    public function setPasCategory(\AppBundle\Entity\PasCategories $pasCategory = null)
    {
        $this->pasCategory = $pasCategory;

        return $this;
    }

    /**
     * Get pasCategory
     *
     * @return \AppBundle\Entity\PasCategories
     */
    public function getPasCategory()
    {
        return $this->pasCategory;
    }

    /**
     * Set pasIcon
     *
     * @param \AppBundle\Entity\PasIcons $pasIcon
     *
     * @return PasDatas
     */
    public function setPasIcon(\AppBundle\Entity\PasIcons $pasIcon = null)
    {
        $this->pasIcon = $pasIcon;

        return $this;
    }

    /**
     * Get pasIcon
     *
     * @return \AppBundle\Entity\PasIcons
     */
    public function getPasIcon()
    {
        return $this->pasIcon;
    }

    /**
     * Add brand
     *
     * @param \AppBundle\Entity\Brands $brand
     *
     * @return PasDatas
     */
    public function addBrand(\AppBundle\Entity\Brands $brand)
    {
        $this->brand[] = $brand;

        return $this;
    }

    /**
     * Remove brand
     *
     * @param \AppBundle\Entity\Brands $brand
     */
    public function removeBrand(\AppBundle\Entity\Brands $brand)
    {
        $this->brand->removeElement($brand);
    }

    /**
     * Get brand
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBrand()
    {
        return $this->brand;
    }
}
