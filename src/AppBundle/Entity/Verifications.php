<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Verifications
 *
 * @ORM\Table(name="verifications", uniqueConstraints={@ORM\UniqueConstraint(name="token_UNIQUE", columns={"token"})}, indexes={@ORM\Index(name="fk_verifications_customers1_idx", columns={"customer_id"}), @ORM\Index(name="fk_verifications_application_auth_types1_idx", columns={"auth_type_id", "application_id"}), @ORM\Index(name="email_idx", columns={"email"}), @ORM\Index(name="email_token_idx", columns={"email", "token"}), @ORM\Index(name="cellphone_idx", columns={"cellphone"}), @ORM\Index(name="code_idx", columns={"code"})})
 * @ORM\Entity
 */
class Verifications
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="request_type", type="boolean", nullable=false)
     */
    private $requestType = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="notification_type", type="boolean", nullable=false)
     */
    private $notificationType = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=80, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=32, nullable=true)
     */
    private $token;

    /**
     * @var string
     *
     * @ORM\Column(name="cellphone", type="string", length=9, nullable=true)
     */
    private $cellphone;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=5, nullable=true)
     */
    private $code;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sent", type="datetime", nullable=false)
     */
    private $sent = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="verified", type="datetime", nullable=true)
     */
    private $verified;

    /**
     * @var boolean
     *
     * @ORM\Column(name="verifiable", type="boolean", nullable=false)
     */
    private $verifiable = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="landing_page", type="string", length=250, nullable=true)
     */
    private $landingPage;

    /**
     * @var string
     *
     * @ORM\Column(name="adding_ip", type="string", length=15, nullable=true)
     */
    private $addingIp;

    /**
     * @var string
     *
     * @ORM\Column(name="verification_ip", type="string", length=15, nullable=true)
     */
    private $verificationIp;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Customers
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Customers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customer_id", referencedColumnName="id")
     * })
     */
    private $customer;

    /**
     * @var \AppBundle\Entity\ApplicationAuthTypes
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\ApplicationAuthTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="auth_type_id", referencedColumnName="auth_type_id"),
     *   @ORM\JoinColumn(name="application_id", referencedColumnName="application_id")
     * })
     */
    private $authType;



    /**
     * Set requestType
     *
     * @param boolean $requestType
     *
     * @return Verifications
     */
    public function setRequestType($requestType)
    {
        $this->requestType = $requestType;

        return $this;
    }

    /**
     * Get requestType
     *
     * @return boolean
     */
    public function getRequestType()
    {
        return $this->requestType;
    }

    /**
     * Set notificationType
     *
     * @param boolean $notificationType
     *
     * @return Verifications
     */
    public function setNotificationType($notificationType)
    {
        $this->notificationType = $notificationType;

        return $this;
    }

    /**
     * Get notificationType
     *
     * @return boolean
     */
    public function getNotificationType()
    {
        return $this->notificationType;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Verifications
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
     * Set token
     *
     * @param string $token
     *
     * @return Verifications
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set cellphone
     *
     * @param string $cellphone
     *
     * @return Verifications
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
     * Set code
     *
     * @param string $code
     *
     * @return Verifications
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
     * Set sent
     *
     * @param \DateTime $sent
     *
     * @return Verifications
     */
    public function setSent($sent)
    {
        $this->sent = $sent;

        return $this;
    }

    /**
     * Get sent
     *
     * @return \DateTime
     */
    public function getSent()
    {
        return $this->sent;
    }

    /**
     * Set verified
     *
     * @param \DateTime $verified
     *
     * @return Verifications
     */
    public function setVerified($verified)
    {
        $this->verified = $verified;

        return $this;
    }

    /**
     * Get verified
     *
     * @return \DateTime
     */
    public function getVerified()
    {
        return $this->verified;
    }

    /**
     * Set verifiable
     *
     * @param boolean $verifiable
     *
     * @return Verifications
     */
    public function setVerifiable($verifiable)
    {
        $this->verifiable = $verifiable;

        return $this;
    }

    /**
     * Get verifiable
     *
     * @return boolean
     */
    public function getVerifiable()
    {
        return $this->verifiable;
    }

    /**
     * Set landingPage
     *
     * @param string $landingPage
     *
     * @return Verifications
     */
    public function setLandingPage($landingPage)
    {
        $this->landingPage = $landingPage;

        return $this;
    }

    /**
     * Get landingPage
     *
     * @return string
     */
    public function getLandingPage()
    {
        return $this->landingPage;
    }

    /**
     * Set addingIp
     *
     * @param string $addingIp
     *
     * @return Verifications
     */
    public function setAddingIp($addingIp)
    {
        $this->addingIp = $addingIp;

        return $this;
    }

    /**
     * Get addingIp
     *
     * @return string
     */
    public function getAddingIp()
    {
        return $this->addingIp;
    }

    /**
     * Set verificationIp
     *
     * @param string $verificationIp
     *
     * @return Verifications
     */
    public function setVerificationIp($verificationIp)
    {
        $this->verificationIp = $verificationIp;

        return $this;
    }

    /**
     * Get verificationIp
     *
     * @return string
     */
    public function getVerificationIp()
    {
        return $this->verificationIp;
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
     * Set customer
     *
     * @param \AppBundle\Entity\Customers $customer
     *
     * @return Verifications
     */
    public function setCustomer(\AppBundle\Entity\Customers $customer = null)
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
     * Set authType
     *
     * @param \AppBundle\Entity\ApplicationAuthTypes $authType
     *
     * @return Verifications
     */
    public function setAuthType(\AppBundle\Entity\ApplicationAuthTypes $authType = null)
    {
        $this->authType = $authType;

        return $this;
    }

    /**
     * Get authType
     *
     * @return \AppBundle\Entity\ApplicationAuthTypes
     */
    public function getAuthType()
    {
        return $this->authType;
    }
}
