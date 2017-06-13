<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Customers
 *
 * @ORM\Table(name="customers", uniqueConstraints={@ORM\UniqueConstraint(name="customer_id_brand_set_id", columns={"id", "brand_set_id"})}, indexes={@ORM\Index(name="purl_idx", columns={"purl"}), @ORM\Index(name="company_idx", columns={"company"}), @ORM\Index(name="nip_idx", columns={"nip"}), @ORM\Index(name="import_id", columns={"import_id"}), @ORM\Index(name="ck_customer_id", columns={"ck_customer_id"}), @ORM\Index(name="cellphone", columns={"cellphone"}), @ORM\Index(name="skoda_id", columns={"skoda_id"}), @ORM\Index(name="email", columns={"email"}), @ORM\Index(name="fk_customers_brand_sets1_idx", columns={"brand_set_id"})})
 * @ORM\Entity
 */
class Customers
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
     * @ORM\Column(name="fname", type="string", length=30, nullable=true)
     */
    private $fname;

    /**
     * @var string
     *
     * @ORM\Column(name="mname", type="string", length=50, nullable=true)
     */
    private $mname;

    /**
     * @var string
     *
     * @ORM\Column(name="lname", type="string", length=50, nullable=true)
     */
    private $lname;

    /**
     * @var string
     *
     * @ORM\Column(name="purl", type="string", length=200, nullable=true)
     */
    private $purl;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=1, nullable=true)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=80, nullable=true)
     */
    private $email;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_valid_email", type="boolean", nullable=false)
     */
    private $isValidEmail = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="cellphone", type="string", length=9, nullable=true)
     */
    private $cellphone;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=20, nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="skoda_id", type="string", length=17, nullable=true)
     */
    private $skodaId;

    /**
     * @var integer
     *
     * @ORM\Column(name="ck_customer_id", type="integer", nullable=true)
     */
    private $ckCustomerId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="lead_status", type="boolean", nullable=false)
     */
    private $leadStatus = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active = '1';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="active_start", type="datetime", nullable=true)
     */
    private $activeStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="active_end", type="datetime", nullable=true)
     */
    private $activeEnd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthday", type="datetime", nullable=true)
     */
    private $birthday;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=50, nullable=true)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=50, nullable=true)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="post", type="string", length=50, nullable=true)
     */
    private $post;

    /**
     * @var string
     *
     * @ORM\Column(name="zipcode", type="string", length=6, nullable=true)
     */
    private $zipcode;

    /**
     * @var string
     *
     * @ORM\Column(name="address_type", type="string", length=5, nullable=true)
     */
    private $addressType;

    /**
     * @var string
     *
     * @ORM\Column(name="street", type="string", length=80, nullable=true)
     */
    private $street;

    /**
     * @var string
     *
     * @ORM\Column(name="street_no", type="string", length=20, nullable=true)
     */
    private $streetNo;

    /**
     * @var string
     *
     * @ORM\Column(name="flat_no", type="string", length=10, nullable=true)
     */
    private $flatNo;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="agree_marketing", type="integer", nullable=false)
     */
    private $agreeMarketing = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_loggedin", type="datetime", nullable=true)
     */
    private $lastLoggedin;

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
     * @var string
     *
     * @ORM\Column(name="nip", type="string", length=10, nullable=true)
     */
    private $nip;

    /**
     * @var string
     *
     * @ORM\Column(name="company", type="string", length=200, nullable=true)
     */
    private $company;

    /**
     * @var string
     *
     * @ORM\Column(name="company_address_type", type="string", length=5, nullable=true)
     */
    private $companyAddressType;

    /**
     * @var string
     *
     * @ORM\Column(name="company_street", type="string", length=80, nullable=true)
     */
    private $companyStreet;

    /**
     * @var string
     *
     * @ORM\Column(name="company_street_no", type="string", length=30, nullable=true)
     */
    private $companyStreetNo;

    /**
     * @var string
     *
     * @ORM\Column(name="company_flat_no", type="string", length=20, nullable=true)
     */
    private $companyFlatNo;

    /**
     * @var string
     *
     * @ORM\Column(name="company_zipcode", type="string", length=6, nullable=true)
     */
    private $companyZipcode;

    /**
     * @var string
     *
     * @ORM\Column(name="company_city", type="string", length=50, nullable=true)
     */
    private $companyCity;

    /**
     * @var string
     *
     * @ORM\Column(name="company_phone", type="string", length=20, nullable=true)
     */
    private $companyPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="company_cellphone", type="string", length=9, nullable=true)
     */
    private $companyCellphone;

    /**
     * @var string
     *
     * @ORM\Column(name="company_email", type="string", length=80, nullable=true)
     */
    private $companyEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="company_regon", type="string", length=14, nullable=true)
     */
    private $companyRegon;

    /**
     * @var string
     *
     * @ORM\Column(name="internal_notes", type="string", length=250, nullable=true)
     */
    private $internalNotes;

    /**
     * @var integer
     *
     * @ORM\Column(name="import_id", type="integer", nullable=true)
     */
    private $importId;

    /**
     * @var integer
     *
     * @ORM\Column(name="test", type="integer", nullable=false)
     */
    private $test = '0';

    /**
     * @var \BrandSets
     *
     * @ORM\ManyToOne(targetEntity="BrandSets")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="brand_set_id", referencedColumnName="id")
     * })
     */
    private $brandSet;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Campaigns", mappedBy="customer")
     */
    private $campaign;

//    /**
//     * @var \Doctrine\Common\Collections\Collection
//     *
//     * @ORM\ManyToMany(targetEntity="ApplicationAuthTypes", mappedBy="customer")
//     */
//    private $authType;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->campaign = new \Doctrine\Common\Collections\ArrayCollection();
        $this->authType = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set fname
     *
     * @param string $fname
     *
     * @return Customers
     */
    public function setFname($fname)
    {
        $this->fname = $fname;

        return $this;
    }

    /**
     * Get fname
     *
     * @return string
     */
    public function getFname()
    {
        return $this->fname;
    }

    /**
     * Set mname
     *
     * @param string $mname
     *
     * @return Customers
     */
    public function setMname($mname)
    {
        $this->mname = $mname;

        return $this;
    }

    /**
     * Get mname
     *
     * @return string
     */
    public function getMname()
    {
        return $this->mname;
    }

    /**
     * Set lname
     *
     * @param string $lname
     *
     * @return Customers
     */
    public function setLname($lname)
    {
        $this->lname = $lname;

        return $this;
    }

    /**
     * Get lname
     *
     * @return string
     */
    public function getLname()
    {
        return $this->lname;
    }

    /**
     * Set purl
     *
     * @param string $purl
     *
     * @return Customers
     */
    public function setPurl($purl)
    {
        $this->purl = $purl;

        return $this;
    }

    /**
     * Get purl
     *
     * @return string
     */
    public function getPurl()
    {
        return $this->purl;
    }

    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return Customers
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Customers
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set isValidEmail
     *
     * @param boolean $isValidEmail
     *
     * @return Customers
     */
    public function setIsValidEmail($isValidEmail)
    {
        $this->isValidEmail = $isValidEmail;

        return $this;
    }

    /**
     * Get isValidEmail
     *
     * @return boolean
     */
    public function getIsValidEmail()
    {
        return $this->isValidEmail;
    }

    /**
     * Set cellphone
     *
     * @param string $cellphone
     *
     * @return Customers
     */
    public function setCellphone($cellphone)
    {
        $this->cellphone = $cellphone;

        return $this;
    }

    /**
     * Get cellphone
     *
     * @return string
     */
    public function getCellphone()
    {
        return $this->cellphone;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Customers
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set skodaId
     *
     * @param string $skodaId
     *
     * @return Customers
     */
    public function setSkodaId($skodaId)
    {
        $this->skodaId = $skodaId;

        return $this;
    }

    /**
     * Get skodaId
     *
     * @return string
     */
    public function getSkodaId()
    {
        return $this->skodaId;
    }

    /**
     * Set ckCustomerId
     *
     * @param integer $ckCustomerId
     *
     * @return Customers
     */
    public function setCkCustomerId($ckCustomerId)
    {
        $this->ckCustomerId = $ckCustomerId;

        return $this;
    }

    /**
     * Get ckCustomerId
     *
     * @return integer
     */
    public function getCkCustomerId()
    {
        return $this->ckCustomerId;
    }

    /**
     * Set leadStatus
     *
     * @param boolean $leadStatus
     *
     * @return Customers
     */
    public function setLeadStatus($leadStatus)
    {
        $this->leadStatus = $leadStatus;

        return $this;
    }

    /**
     * Get leadStatus
     *
     * @return boolean
     */
    public function getLeadStatus()
    {
        return $this->leadStatus;
    }

    /**
     * Set active
     *
     * @param boolean $active
     *
     * @return Customers
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set activeStart
     *
     * @param \DateTime $activeStart
     *
     * @return Customers
     */
    public function setActiveStart($activeStart)
    {
        $this->activeStart = $activeStart;

        return $this;
    }

    /**
     * Get activeStart
     *
     * @return \DateTime
     */
    public function getActiveStart()
    {
        return $this->activeStart;
    }

    /**
     * Set activeEnd
     *
     * @param \DateTime $activeEnd
     *
     * @return Customers
     */
    public function setActiveEnd($activeEnd)
    {
        $this->activeEnd = $activeEnd;

        return $this;
    }

    /**
     * Get activeEnd
     *
     * @return \DateTime
     */
    public function getActiveEnd()
    {
        return $this->activeEnd;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     *
     * @return Customers
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Customers
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Customers
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set post
     *
     * @param string $post
     *
     * @return Customers
     */
    public function setPost($post)
    {
        $this->post = $post;

        return $this;
    }

    /**
     * Get post
     *
     * @return string
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * Set zipcode
     *
     * @param string $zipcode
     *
     * @return Customers
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    /**
     * Get zipcode
     *
     * @return string
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Set addressType
     *
     * @param string $addressType
     *
     * @return Customers
     */
    public function setAddressType($addressType)
    {
        $this->addressType = $addressType;

        return $this;
    }

    /**
     * Get addressType
     *
     * @return string
     */
    public function getAddressType()
    {
        return $this->addressType;
    }

    /**
     * Set street
     *
     * @param string $street
     *
     * @return Customers
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set streetNo
     *
     * @param string $streetNo
     *
     * @return Customers
     */
    public function setStreetNo($streetNo)
    {
        $this->streetNo = $streetNo;

        return $this;
    }

    /**
     * Get streetNo
     *
     * @return string
     */
    public function getStreetNo()
    {
        return $this->streetNo;
    }

    /**
     * Set flatNo
     *
     * @param string $flatNo
     *
     * @return Customers
     */
    public function setFlatNo($flatNo)
    {
        $this->flatNo = $flatNo;

        return $this;
    }

    /**
     * Get flatNo
     *
     * @return string
     */
    public function getFlatNo()
    {
        return $this->flatNo;
    }

    /**
     * Set type
     *
     * @param integer $type
     *
     * @return Customers
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set agreeMarketing
     *
     * @param integer $agreeMarketing
     *
     * @return Customers
     */
    public function setAgreeMarketing($agreeMarketing)
    {
        $this->agreeMarketing = $agreeMarketing;

        return $this;
    }

    /**
     * Get agreeMarketing
     *
     * @return integer
     */
    public function getAgreeMarketing()
    {
        return $this->agreeMarketing;
    }

    /**
     * Set lastLoggedin
     *
     * @param \DateTime $lastLoggedin
     *
     * @return Customers
     */
    public function setLastLoggedin($lastLoggedin)
    {
        $this->lastLoggedin = $lastLoggedin;

        return $this;
    }

    /**
     * Get lastLoggedin
     *
     * @return \DateTime
     */
    public function getLastLoggedin()
    {
        return $this->lastLoggedin;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Customers
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
     * @return Customers
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
     * Set nip
     *
     * @param string $nip
     *
     * @return Customers
     */
    public function setNip($nip)
    {
        $this->nip = $nip;

        return $this;
    }

    /**
     * Get nip
     *
     * @return string
     */
    public function getNip()
    {
        return $this->nip;
    }

    /**
     * Set company
     *
     * @param string $company
     *
     * @return Customers
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set companyAddressType
     *
     * @param string $companyAddressType
     *
     * @return Customers
     */
    public function setCompanyAddressType($companyAddressType)
    {
        $this->companyAddressType = $companyAddressType;

        return $this;
    }

    /**
     * Get companyAddressType
     *
     * @return string
     */
    public function getCompanyAddressType()
    {
        return $this->companyAddressType;
    }

    /**
     * Set companyStreet
     *
     * @param string $companyStreet
     *
     * @return Customers
     */
    public function setCompanyStreet($companyStreet)
    {
        $this->companyStreet = $companyStreet;

        return $this;
    }

    /**
     * Get companyStreet
     *
     * @return string
     */
    public function getCompanyStreet()
    {
        return $this->companyStreet;
    }

    /**
     * Set companyStreetNo
     *
     * @param string $companyStreetNo
     *
     * @return Customers
     */
    public function setCompanyStreetNo($companyStreetNo)
    {
        $this->companyStreetNo = $companyStreetNo;

        return $this;
    }

    /**
     * Get companyStreetNo
     *
     * @return string
     */
    public function getCompanyStreetNo()
    {
        return $this->companyStreetNo;
    }

    /**
     * Set companyFlatNo
     *
     * @param string $companyFlatNo
     *
     * @return Customers
     */
    public function setCompanyFlatNo($companyFlatNo)
    {
        $this->companyFlatNo = $companyFlatNo;

        return $this;
    }

    /**
     * Get companyFlatNo
     *
     * @return string
     */
    public function getCompanyFlatNo()
    {
        return $this->companyFlatNo;
    }

    /**
     * Set companyZipcode
     *
     * @param string $companyZipcode
     *
     * @return Customers
     */
    public function setCompanyZipcode($companyZipcode)
    {
        $this->companyZipcode = $companyZipcode;

        return $this;
    }

    /**
     * Get companyZipcode
     *
     * @return string
     */
    public function getCompanyZipcode()
    {
        return $this->companyZipcode;
    }

    /**
     * Set companyCity
     *
     * @param string $companyCity
     *
     * @return Customers
     */
    public function setCompanyCity($companyCity)
    {
        $this->companyCity = $companyCity;

        return $this;
    }

    /**
     * Get companyCity
     *
     * @return string
     */
    public function getCompanyCity()
    {
        return $this->companyCity;
    }

    /**
     * Set companyPhone
     *
     * @param string $companyPhone
     *
     * @return Customers
     */
    public function setCompanyPhone($companyPhone)
    {
        $this->companyPhone = $companyPhone;

        return $this;
    }

    /**
     * Get companyPhone
     *
     * @return string
     */
    public function getCompanyPhone()
    {
        return $this->companyPhone;
    }

    /**
     * Set companyCellphone
     *
     * @param string $companyCellphone
     *
     * @return Customers
     */
    public function setCompanyCellphone($companyCellphone)
    {
        $this->companyCellphone = $companyCellphone;

        return $this;
    }

    /**
     * Get companyCellphone
     *
     * @return string
     */
    public function getCompanyCellphone()
    {
        return $this->companyCellphone;
    }

    /**
     * Set companyEmail
     *
     * @param string $companyEmail
     *
     * @return Customers
     */
    public function setCompanyEmail($companyEmail)
    {
        $this->companyEmail = $companyEmail;

        return $this;
    }

    /**
     * Get companyEmail
     *
     * @return string
     */
    public function getCompanyEmail()
    {
        return $this->companyEmail;
    }

    /**
     * Set companyRegon
     *
     * @param string $companyRegon
     *
     * @return Customers
     */
    public function setCompanyRegon($companyRegon)
    {
        $this->companyRegon = $companyRegon;

        return $this;
    }

    /**
     * Get companyRegon
     *
     * @return string
     */
    public function getCompanyRegon()
    {
        return $this->companyRegon;
    }

    /**
     * Set internalNotes
     *
     * @param string $internalNotes
     *
     * @return Customers
     */
    public function setInternalNotes($internalNotes)
    {
        $this->internalNotes = $internalNotes;

        return $this;
    }

    /**
     * Get internalNotes
     *
     * @return string
     */
    public function getInternalNotes()
    {
        return $this->internalNotes;
    }

    /**
     * Set importId
     *
     * @param integer $importId
     *
     * @return Customers
     */
    public function setImportId($importId)
    {
        $this->importId = $importId;

        return $this;
    }

    /**
     * Get importId
     *
     * @return integer
     */
    public function getImportId()
    {
        return $this->importId;
    }

    /**
     * Set test
     *
     * @param integer $test
     *
     * @return Customers
     */
    public function setTest($test)
    {
        $this->test = $test;

        return $this;
    }

    /**
     * Get test
     *
     * @return integer
     */
    public function getTest()
    {
        return $this->test;
    }

    /**
     * Set brandSet
     *
     * @param \AppBundle\Entity\BrandSets $brandSet
     *
     * @return Customers
     */
    public function setBrandSet(\AppBundle\Entity\BrandSets $brandSet = null)
    {
        $this->brandSet = $brandSet;

        return $this;
    }

    /**
     * Get brandSet
     *
     * @return \AppBundle\Entity\BrandSets
     */
    public function getBrandSet()
    {
        return $this->brandSet;
    }

    /**
     * Add campaign
     *
     * @param \AppBundle\Entity\Campaigns $campaign
     *
     * @return Customers
     */
    public function addCampaign(\AppBundle\Entity\Campaigns $campaign)
    {
        $this->campaign[] = $campaign;

        return $this;
    }

    /**
     * Remove campaign
     *
     * @param \AppBundle\Entity\Campaigns $campaign
     */
    public function removeCampaign(\AppBundle\Entity\Campaigns $campaign)
    {
        $this->campaign->removeElement($campaign);
    }

    /**
     * Get campaign
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCampaign()
    {
        return $this->campaign;
    }
}
