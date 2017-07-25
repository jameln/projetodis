<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * grade
 *
 * @ORM\Table(name="grade")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\gradeRepository")
 */
class grade
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
     * @ORM\Column(name="grade_name", type="string", length=255)
     */
    private $gradeName;


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
     * Set gradeName
     *
     * @param string $gradeName
     *
     * @return grade
     */
    public function setGradeName($gradeName)
    {
        $this->gradeName = $gradeName;

        return $this;
    }

    /**
     * Get gradeName
     *
     * @return string
     */
    public function getGradeName()
    {
        return $this->gradeName;
    }
}

