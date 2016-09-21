<?php

namespace TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sheet
 *
 * @ORM\Table(name="sheet")
 * @ORM\Entity(repositoryClass="TestBundle\Repository\SheetRepository")
 */
class Sheet
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
     * @ORM\Column(name="console", type="string", length=255)
     */
    protected $console;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255)
     */
    protected $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="prix", type="string", length=255)
     */

    protected $prix;


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
     * @return Sheet
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
     * Set console
     *
     * @param string $console
     * @return Sheet
     */
    public function setConsole($console)
    {
        $this->console = $console;

        return $this;
    }

    /**
     * Get console
     *
     * @return string 
     */
    public function getConsole()
    {
        return $this->console;
    }
    /**
     * Set etat
     *
     * @param string $etat
     * @return Sheet
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set prix
     *
     * @param string $prix
     * @return Sheet
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return string 
     */
    public function getPrix()
    {
        return $this->prix;
    }
}
