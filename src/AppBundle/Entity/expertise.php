<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * expertise
 *
 * @ORM\Table(name="expertise")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\expertiseRepository")
 */
class expertise
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
     * @ORM\Column(name="duration", type="integer")
     */
    private $duration;


     /**
     * @ORM\ManyToOne(targetEntity="experience", inversedBy="expertises")
     * @ORM\JoinColumn(name="experience_id", referencedColumnName="id")
     */
    protected $experience;

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
     * Set experienceId
     *
     * @param integer $experienceId
     *
     * @return expertise
     */
    public function setExperienceId($experienceId)
    {
        $this->experienceId = $experienceId;

        return $this;
    }

    /**
     * Get experienceId
     *
     * @return int
     */
    public function getExperienceId()
    {
        return $this->experienceId;
    }

    /**
     * Set duration
     *
     * @param integer $duration
     *
     * @return expertise
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return int
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set experience
     *
     * @param \AppBundle\Entity\experience $experience
     *
     * @return expertise
     */
    public function setExperience(\AppBundle\Entity\experience $experience = null)
    {
        $this->experience = $experience;

        return $this;
    }

    /**
     * Get experience
     *
     * @return \AppBundle\Entity\experience
     */
    public function getExperience()
    {
        return $this->experience;
    }
}
