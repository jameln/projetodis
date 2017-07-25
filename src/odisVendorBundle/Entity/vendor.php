<?php

namespace odisVendorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * vendor
 *
 * @ORM\Table(name="vendor")
 * @ORM\Entity(repositoryClass="odisVendorBundle\Repository\vendorRepository")
 */
class vendor
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="legal_name", type="string", length=255)
     */
    private $legalName;

    /**
     * @var string
     *
     * @ORM\Column(name="trade_name", type="string", length=255)
     */
    private $tradeName;

    /**
     * @var string
     *
     * @ORM\Column(name="head_quarter", type="string", length=255)
     */
    private $headQuarter;

    /**
     * @var int
     *
     * @ORM\Column(name="num_employee", type="integer")
     */
    private $numEmployee;

    /**
     * @var string
     *
     * @ORM\Column(name="website", type="string", length=255)
     */
    private $website;

    /**
     * @var string
     *
     * @ORM\Column(name="ca_name", type="string", length=255)
     */
    private $caName;

    /**
     * @var string
     *
     * @ORM\Column(name="ca_mail", type="string", length=255)
     */
    private $caMail;

    /**
     * @var string
     *
     * @ORM\Column(name="ca_position", type="string", length=255)
     */
    private $caPosition;

    /**
     * @var string
     *
     * @ORM\Column(name="ca_telephone", type="string", length=255)
     */
    private $caTelephone;

    /**
     * @var string
     *
     * @ORM\Column(name="alt_name", type="string", length=255)
     */
    private $altName;

    /**
     * @var string
     *
     * @ORM\Column(name="alt_mail", type="string", length=255)
     */
    private $altMail;

    /**
     * @var string
     *
     * @ORM\Column(name="alt_telephone", type="string", length=255)
     */
    private $altTelephone;

    /**
     * @var string
     *
     * @ORM\Column(name="regu_complience", type="string", length=255)
     */
    private $reguComplience;

    /**
     * @var string
     *
     * @ORM\Column(name="rpc_regulation", type="string", length=255)
     */
    private $rpcRegulation;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=255)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    public function __construct()
    {    }
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set legalName
     *
     * @param string $legalName
     *
     * @return vendor
     */
    public function setLegalName($legalName)
    {
        $this->legalName = $legalName;

        return $this;
    }

    /**
     * Get legalName
     *
     * @return string
     */
    public function getLegalName()
    {
        return $this->legalName;
    }

    /**
     * Set tradeName
     *
     * @param string $tradeName
     *
     * @return vendor
     */
    public function setTradeName($tradeName)
    {
        $this->tradeName = $tradeName;

        return $this;
    }

    /**
     * Get tradeName
     *
     * @return string
     */
    public function getTradeName()
    {
        return $this->tradeName;
    }

    /**
     * Set headQuarter
     *
     * @param string $headQuarter
     *
     * @return vendor
     */
    public function setHeadQuarter($headQuarter)
    {
        $this->headQuarter = $headQuarter;

        return $this;
    }

    /**
     * Get headQuarter
     *
     * @return string
     */
    public function getHeadQuarter()
    {
        return $this->headQuarter;
    }

    /**
     * Set numEmployee
     *
     * @param integer $numEmployee
     *
     * @return vendor
     */
    public function setNumEmployee($numEmployee)
    {
        $this->numEmployee = $numEmployee;

        return $this;
    }

    /**
     * Get numEmployee
     *
     * @return int
     */
    public function getNumEmployee()
    {
        return $this->numEmployee;
    }

    /**
     * Set website
     *
     * @param string $website
     *
     * @return vendor
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set caName
     *
     * @param string $caName
     *
     * @return vendor
     */
    public function setCaName($caName)
    {
        $this->caName = $caName;

        return $this;
    }

    /**
     * Get caName
     *
     * @return string
     */
    public function getCaName()
    {
        return $this->caName;
    }

    /**
     * Set caMail
     *
     * @param string $caMail
     *
     * @return vendor
     */
    public function setCaMail($caMail)
    {
        $this->caMail = $caMail;

        return $this;
    }

    /**
     * Get caMail
     *
     * @return string
     */
    public function getCaMail()
    {
        return $this->caMail;
    }

    /**
     * Set caPosition
     *
     * @param string $caPosition
     *
     * @return vendor
     */
    public function setCaPosition($caPosition)
    {
        $this->caPosition = $caPosition;

        return $this;
    }

    /**
     * Get caPosition
     *
     * @return string
     */
    public function getCaPosition()
    {
        return $this->caPosition;
    }

    /**
     * Set caTelephone
     *
     * @param string $caTelephone
     *
     * @return vendor
     */
    public function setCaTelephone($caTelephone)
    {
        $this->caTelephone = $caTelephone;

        return $this;
    }

    /**
     * Get caTelephone
     *
     * @return string
     */
    public function getCaTelephone()
    {
        return $this->caTelephone;
    }

    /**
     * Set altName
     *
     * @param string $altName
     *
     * @return vendor
     */
    public function setAltName($altName)
    {
        $this->altName = $altName;

        return $this;
    }

    /**
     * Get altName
     *
     * @return string
     */
    public function getAltName()
    {
        return $this->altName;
    }

    /**
     * Set altMail
     *
     * @param string $altMail
     *
     * @return vendor
     */
    public function setAltMail($altMail)
    {
        $this->altMail = $altMail;

        return $this;
    }

    /**
     * Get altMail
     *
     * @return string
     */
    public function getAltMail()
    {
        return $this->altMail;
    }

    /**
     * Set altTelephone
     *
     * @param string $altTelephone
     *
     * @return vendor
     */
    public function setAltTelephone($altTelephone)
    {
        $this->altTelephone = $altTelephone;

        return $this;
    }

    /**
     * Get altTelephone
     *
     * @return string
     */
    public function getAltTelephone()
    {
        return $this->altTelephone;
    }

    /**
     * Set reguComplience
     *
     * @param string $reguComplience
     *
     * @return vendor
     */
    public function setReguComplience($reguComplience)
    {
        $this->reguComplience = $reguComplience;

        return $this;
    }

    /**
     * Get reguComplience
     *
     * @return string
     */
    public function getReguComplience()
    {
        return $this->reguComplience;
    }

    /**
     * Set rpcRegulation
     *
     * @param string $rpcRegulation
     *
     * @return vendor
     */
    public function setRpcRegulation($rpcRegulation)
    {
        $this->rpcRegulation = $rpcRegulation;

        return $this;
    }

    /**
     * Get rpcRegulation
     *
     * @return string
     */
    public function getRpcRegulation()
    {
        return $this->rpcRegulation;
    }

    /**
     * Set login
     *
     * @param string $login
     *
     * @return vendor
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return vendor
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }
}

