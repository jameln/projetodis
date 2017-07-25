<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * software_exp
 *
 * @ORM\Table(name="software_exp")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\software_expRepository")
 */
class software_exp
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
     * @var int
     *
     * @ORM\Column(name="software_id", type="integer")
     */
    private $softwareId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer")
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="version", type="string", length=255)
     */
    private $version;

    /**
     * @var string
     *
     * @ORM\Column(name="level", type="string", length=255)
     */
    private $level;


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
     * Set softwareId
     *
     * @param integer $softwareId
     *
     * @return software_exp
     */
    public function setSoftwareId($softwareId)
    {
        $this->softwareId = $softwareId;

        return $this;
    }

    /**
     * Get softwareId
     *
     * @return int
     */
    public function getSoftwareId()
    {
        return $this->softwareId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return software_exp
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set version
     *
     * @param string $version
     *
     * @return software_exp
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set level
     *
     * @param string $level
     *
     * @return software_exp
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
    }
}

