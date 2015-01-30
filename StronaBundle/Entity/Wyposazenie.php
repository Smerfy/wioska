<?php

namespace StronaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Wyposazenie
 *
 * @ORM\Table(name="wyposazenie")
 * @ORM\Entity
 */
class Wyposazenie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idwyposazenie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idwyposazenie;

    /**
     * @var boolean
     *
     * @ORM\Column(name="tv", type="boolean", nullable=true)
     */
    private $tv;

    /**
     * @var boolean
     *
     * @ORM\Column(name="czajnik", type="boolean", nullable=true)
     */
    private $czajnik;

    /**
     * @var boolean
     *
     * @ORM\Column(name="lodowka", type="boolean", nullable=true)
     */
    private $lodowka;

    /**
     * @var boolean
     *
     * @ORM\Column(name="microfalowka", type="boolean", nullable=true)
     */
    private $microfalowka;

    /**
     * @var boolean
     *
     * @ORM\Column(name="wifi", type="boolean", nullable=true)
     */
    private $wifi;

    /**
     * @var integer
     *
     * @ORM\Column(name="lozko1os", type="integer", nullable=true)
     */
    private $lozko1os;

    /**
     * @var integer
     *
     * @ORM\Column(name="lozko2os", type="integer", nullable=true)
     */
    private $lozko2os;



    /**
     * Get idwyposazenie
     *
     * @return integer 
     */
    public function getIdwyposazenie()
    {
        return $this->idwyposazenie;
    }

    /**
     * Set tv
     *
     * @param boolean $tv
     * @return Wyposazenie
     */
    public function setTv($tv)
    {
        $this->tv = $tv;

        return $this;
    }

    /**
     * Get tv
     *
     * @return boolean 
     */
    public function getTv()
    {
        return $this->tv;
    }

    /**
     * Set czajnik
     *
     * @param boolean $czajnik
     * @return Wyposazenie
     */
    public function setCzajnik($czajnik)
    {
        $this->czajnik = $czajnik;

        return $this;
    }

    /**
     * Get czajnik
     *
     * @return boolean 
     */
    public function getCzajnik()
    {
        return $this->czajnik;
    }

    /**
     * Set lodowka
     *
     * @param boolean $lodowka
     * @return Wyposazenie
     */
    public function setLodowka($lodowka)
    {
        $this->lodowka = $lodowka;

        return $this;
    }

    /**
     * Get lodowka
     *
     * @return boolean 
     */
    public function getLodowka()
    {
        return $this->lodowka;
    }

    /**
     * Set microfalowka
     *
     * @param boolean $microfalowka
     * @return Wyposazenie
     */
    public function setMicrofalowka($microfalowka)
    {
        $this->microfalowka = $microfalowka;

        return $this;
    }

    /**
     * Get microfalowka
     *
     * @return boolean 
     */
    public function getMicrofalowka()
    {
        return $this->microfalowka;
    }

    /**
     * Set wifi
     *
     * @param boolean $wifi
     * @return Wyposazenie
     */
    public function setWifi($wifi)
    {
        $this->wifi = $wifi;

        return $this;
    }

    /**
     * Get wifi
     *
     * @return boolean 
     */
    public function getWifi()
    {
        return $this->wifi;
    }

    /**
     * Set lozko1os
     *
     * @param integer $lozko1os
     * @return Wyposazenie
     */
    public function setLozko1os($lozko1os)
    {
        $this->lozko1os = $lozko1os;

        return $this;
    }

    /**
     * Get lozko1os
     *
     * @return integer 
     */
    public function getLozko1os()
    {
        return $this->lozko1os;
    }

    /**
     * Set lozko2os
     *
     * @param integer $lozko2os
     * @return Wyposazenie
     */
    public function setLozko2os($lozko2os)
    {
        $this->lozko2os = $lozko2os;

        return $this;
    }

    /**
     * Get lozko2os
     *
     * @return integer 
     */
    public function getLozko2os()
    {
        return $this->lozko2os;
    }
}
