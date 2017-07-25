<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * certification
 *
 * @ORM\Table(name="certification")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\certificationRepository")
 */
class certification
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
     * @ORM\Column(name="title_name", type="string", length=255)
     */
    private $titleName;

    /**
     * @var int
     *
     * @ORM\Column(name="organization_id", type="integer")
     */
    private $organizationId;

    /**
     * @var string
     *
     * @ORM\Column(name="issuing_num", type="string", length=255)
     */
    private $issuingNum;


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
     * Set titleName
     *
     * @param string $titleName
     *
     * @return certification
     */
    public function setTitleName($titleName)
    {
        $this->titleName = $titleName;

        return $this;
    }

    /**
     * Get titleName
     *
     * @return string
     */
    public function getTitleName()
    {
        return $this->titleName;
    }

    /**
     * Set organizationId
     *
     * @param integer $organizationId
     *
     * @return certification
     */
    public function setOrganizationId($organizationId)
    {
        $this->organizationId = $organizationId;

        return $this;
    }

    /**
     * Get organizationId
     *
     * @return int
     */
    public function getOrganizationId()
    {
        return $this->organizationId;
    }

    /**
     * Set issuingNum
     *
     * @param string $issuingNum
     *
     * @return certification
     */
    public function setIssuingNum($issuingNum)
    {
        $this->issuingNum = $issuingNum;

        return $this;
    }

    /**
     * Get issuingNum
     *
     * @return string
     */
    public function getIssuingNum()
    {
        return $this->issuingNum;
    }
}

