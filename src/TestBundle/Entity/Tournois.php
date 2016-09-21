<?php

namespace TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tournois
 *
 * @ORM\Table(name="tournois")
 * @ORM\Entity(repositoryClass="TestBundle\Repository\TournoisRepository")
 */
class Tournois
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    protected $name;

    /**
     * @var string
     *
     * @ORM\Column(name="jeux", type="string", length=255)
     */
    protected $jeux;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=255)
     */

    protected $date;


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
     * Set name
     *
     * @param string $name
     * @return Tournois
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set jeux
     *
     * @param string $jeux
     * @return Tournois
     */
    public function setJeux($jeux)
    {
        $this->jeux = $jeux;

        return $this;
    }

    /**
     * Get jeux
     *
     * @return string 
     */
    public function getJeux()
    {
        return $this->jeux;
    }
    /**
     * Set date
     *
     * @param string $date
     * @return Tournois
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string 
     */
    public function getDate()
    {
        return $this->date;
    }

   }
