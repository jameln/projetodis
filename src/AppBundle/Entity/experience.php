<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * experience
 *
 * @ORM\Table(name="experience")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\experienceRepository")
 */
class experience
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
     * @var \DateTime
     *
     * @ORM\Column(name="start_date", type="datetime")
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date", type="datetime", nullable=true)
     */
    private $endDate;

    /**
     * @var int
     *
     * @ORM\Column(name="experience_mat", type="integer")
     */
    private $experienceMat;
    
    /**
     * @ORM\OneToMany(targetEntity="expertise", mappedBy="experience")
     */
    private $expertises;

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
     * Set startDate
     *
     * @param \DateTime $startDate
     *
     * @return experience
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     *
     * @return experience
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set experienceId
     *
     * @param integer $experienceId
     *
     * @return experience
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
     * Constructor
     */
    public function __construct()
    {
        $this->expertises = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add expertise
     *
     * @param \AppBundle\Entity\expertise $expertise
     *
     * @return experience
     */
    public function addExpertise(\AppBundle\Entity\expertise $expertise)
    {
        $this->expertises[] = $expertise;

        return $this;
    }

    /**
     * Remove expertise
     *
     * @param \AppBundle\Entity\expertise $expertise
     */
    public function removeExpertise(\AppBundle\Entity\expertise $expertise)
    {
        $this->expertises->removeElement($expertise);
    }

    /**
     * Get expertises
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getExpertises()
    {
        return $this->expertises;
    }

    /**
     * Set experienceMat
     *
     * @param integer $experienceMat
     *
     * @return experience
     */
    public function setExperienceMat($experienceMat)
    {
        $this->experienceMat = $experienceMat;

        return $this;
    }

    /**
     * Get experienceMat
     *
     * @return integer
     */
    public function getExperienceMat()
    {
        return $this->experienceMat;
    }
}
