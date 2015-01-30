<?php

namespace StronaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Domek
 *
 * @ORM\Table(name="domek", indexes={@ORM\Index(name="fk_domek_wyposazenie1_idx", columns={"wyposazenie_idwyposazenie"})})
 * @ORM\Entity
 */
class Domek
{
    /**
     * @var integer
     *
     * @ORM\Column(name="iddomek", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddomek;

    /**
     * @var string
     *
     * @ORM\Column(name="nazwa", type="string", length=45, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="adres", type="string", length=45, nullable=false)
     */
    private $adres;

    /**
     * @var integer
     *
     * @ORM\Column(name="liczba miejsc", type="integer", nullable=false)
     */
    private $liczbaMiejsc;

    /**
     * @var \Wyposazenie
     *
     * @ORM\ManyToOne(targetEntity="Wyposazenie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="wyposazenie_idwyposazenie", referencedColumnName="idwyposazenie")
     * })
     */
    private $wyposazeniewyposazenie;



    /**
     * Get iddomek
     *
     * @return integer 
     */
    public function getIddomek()
    {
        return $this->iddomek;
    }

    /**
     * Set nazwa
     *
     * @param string $nazwa
     * @return Domek
     */
    public function setNazwa($nazwa)
    {
        $this->nazwa = $nazwa;

        return $this;
    }

    /**
     * Get nazwa
     *
     * @return string 
     */
    public function getNazwa()
    {
        return $this->nazwa;
    }

    /**
     * Set adres
     *
     * @param string $adres
     * @return Domek
     */
    public function setAdres($adres)
    {
        $this->adres = $adres;

        return $this;
    }

    /**
     * Get adres
     *
     * @return string 
     */
    public function getAdres()
    {
        return $this->adres;
    }

    /**
     * Set liczbaMiejsc
     *
     * @param integer $liczbaMiejsc
     * @return Domek
     */
    public function setLiczbaMiejsc($liczbaMiejsc)
    {
        $this->liczbaMiejsc = $liczbaMiejsc;

        return $this;
    }

    /**
     * Get liczbaMiejsc
     *
     * @return integer 
     */
    public function getLiczbaMiejsc()
    {
        return $this->liczbaMiejsc;
    }

    /**
     * Set wyposazeniewyposazenie
     *
     * @param \StronaBundle\Entity\Wyposazenie $wyposazeniewyposazenie
     * @return Domek
     */
    public function setWyposazeniewyposazenie(\StronaBundle\Entity\Wyposazenie $wyposazeniewyposazenie = null)
    {
        $this->wyposazeniewyposazenie = $wyposazeniewyposazenie;

        return $this;
    }

    /**
     * Get wyposazeniewyposazenie
     *
     * @return \StronaBundle\Entity\Wyposazenie 
     */
    public function getWyposazeniewyposazenie()
    {
        return $this->wyposazeniewyposazenie;
    }
}
