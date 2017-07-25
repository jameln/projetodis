<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * field_experience
 *
 * @ORM\Table(name="field_experience")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\field_experienceRepository")
 */
class field_experience
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
     * @ORM\Column(name="fe_name", type="string", length=255)
     */
    private $feName;

    /**
     * @var int
     *
     * @ORM\Column(name="fe_id", type="integer")
     */
    private $feId;


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
     * Set feName
     *
     * @param string $feName
     *
     * @return field_experience
     */
    public function setFeName($feName)
    {
        $this->feName = $feName;

        return $this;
    }

    /**
     * Get feName
     *
     * @return string
     */
    public function getFeName()
    {
        return $this->feName;
    }

    /**
     * Set feId
     *
     * @param integer $feId
     *
     * @return field_experience
     */
    public function setFeId($feId)
    {
        $this->feId = $feId;

        return $this;
    }

    /**
     * Get feId
     *
     * @return int
     */
    public function getFeId()
    {
        return $this->feId;
    }
}

