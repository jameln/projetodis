<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * area_expertise
 *
 * @ORM\Table(name="area_expertise")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\area_expertiseRepository")
 */
class area_expertise
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
     * @ORM\Column(name="expertise_id", type="integer")
     */
    private $expertiseId;

    /**
     * @var string
     *
     * @ORM\Column(name="expertise_name", type="string", length=255)
     */
    private $expertiseName;


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
     * Set expertiseId
     *
     * @param integer $expertiseId
     *
     * @return area_expertise
     */
    public function setExpertiseId($expertiseId)
    {
        $this->expertiseId = $expertiseId;

        return $this;
    }

    /**
     * Get expertiseId
     *
     * @return int
     */
    public function getExpertiseId()
    {
        return $this->expertiseId;
    }

    /**
     * Set expertiseName
     *
     * @param string $expertiseName
     *
     * @return area_expertise
     */
    public function setExpertiseName($expertiseName)
    {
        $this->expertiseName = $expertiseName;

        return $this;
    }

    /**
     * Get expertiseName
     *
     * @return string
     */
    public function getExpertiseName()
    {
        return $this->expertiseName;
    }
}

