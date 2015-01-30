<?php

namespace StronaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Klient
 *
 * @ORM\Table(name="klient", indexes={@ORM\Index(name="fk_klient_domek1_idx", columns={"domek_iddomek"})})
 * @ORM\Entity
 */
class Klient
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idklient", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idklient;

    /**
     * @var string
     *
     * @ORM\Column(name="imie", type="string", length=45, nullable=false)
     */
    private $imie;

    /**
     * @var string
     *
     * @ORM\Column(name="nazwisko", type="string", length=45, nullable=false)
     */
    private $nazwisko;

    /**
     * @var string
     *
     * @ORM\Column(name="pesel", type="string", length=45, nullable=false)
     */
    private $pesel;

    /**
     * @var string
     *
     * @ORM\Column(name="data_urodzenia", type="string", length=45, nullable=false)
     */
    private $dataUrodzenia;

    /**
     * @var string
     *
     * @ORM\Column(name="miejscowosc", type="string", length=45, nullable=false)
     */
    private $miejscowosc;

    /**
     * @var string
     *
     * @ORM\Column(name="ulica", type="string", length=45, nullable=false)
     */
    private $ulica;

    /**
     * @var string
     *
     * @ORM\Column(name="kod_pocztowy", type="string", length=45, nullable=false)
     */
    private $kodPocztowy;

    /**
     * @var string
     *
     * @ORM\Column(name="telefon", type="string", length=45, nullable=false)
     */
    private $telefon;

    /**
     * @var string
     *
     * @ORM\Column(name="data_od", type="string", length=45, nullable=false)
     */
    private $dataOd;

    /**
     * @var string
     *
     * @ORM\Column(name="data_do", type="string", length=45, nullable=false)
     */
    private $dataDo;

    /**
     * @var \Domek
     *
     * @ORM\ManyToOne(targetEntity="Domek")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="domek_iddomek", referencedColumnName="iddomek")
     * })
     */
    private $domekdomek;



    /**
     * Get idklient
     *
     * @return integer 
     */
    public function getIdklient()
    {
        return $this->idklient;
    }

    /**
     * Set imie
     *
     * @param string $imie
     * @return Klient
     */
    public function setImie($imie)
    {
        $this->imie = $imie;

        return $this;
    }

    /**
     * Get imie
     *
     * @return string 
     */
    public function getImie()
    {
        return $this->imie;
    }

    /**
     * Set nazwisko
     *
     * @param string $nazwisko
     * @return Klient
     */
    public function setNazwisko($nazwisko)
    {
        $this->nazwisko = $nazwisko;

        return $this;
    }

    /**
     * Get nazwisko
     *
     * @return string 
     */
    public function getNazwisko()
    {
        return $this->nazwisko;
    }

    /**
     * Set pesel
     *
     * @param string $pesel
     * @return Klient
     */
    public function setPesel($pesel)
    {
        $this->pesel = $pesel;

        return $this;
    }

    /**
     * Get pesel
     *
     * @return string 
     */
    public function getPesel()
    {
        return $this->pesel;
    }

    /**
     * Set dataUrodzenia
     *
     * @param string $dataUrodzenia
     * @return Klient
     */
    public function setDataUrodzenia($dataUrodzenia)
    {
        $this->dataUrodzenia = $dataUrodzenia;

        return $this;
    }

    /**
     * Get dataUrodzenia
     *
     * @return string 
     */
    public function getDataUrodzenia()
    {
        return $this->dataUrodzenia;
    }

    /**
     * Set miejscowosc
     *
     * @param string $miejscowosc
     * @return Klient
     */
    public function setMiejscowosc($miejscowosc)
    {
        $this->miejscowosc = $miejscowosc;

        return $this;
    }

    /**
     * Get miejscowosc
     *
     * @return string 
     */
    public function getMiejscowosc()
    {
        return $this->miejscowosc;
    }

    /**
     * Set ulica
     *
     * @param string $ulica
     * @return Klient
     */
    public function setUlica($ulica)
    {
        $this->ulica = $ulica;

        return $this;
    }

    /**
     * Get ulica
     *
     * @return string 
     */
    public function getUlica()
    {
        return $this->ulica;
    }

    /**
     * Set kodPocztowy
     *
     * @param string $kodPocztowy
     * @return Klient
     */
    public function setKodPocztowy($kodPocztowy)
    {
        $this->kodPocztowy = $kodPocztowy;

        return $this;
    }

    /**
     * Get kodPocztowy
     *
     * @return string 
     */
    public function getKodPocztowy()
    {
        return $this->kodPocztowy;
    }

    /**
     * Set telefon
     *
     * @param string $telefon
     * @return Klient
     */
    public function setTelefon($telefon)
    {
        $this->telefon = $telefon;

        return $this;
    }

    /**
     * Get telefon
     *
     * @return string 
     */
    public function getTelefon()
    {
        return $this->telefon;
    }

    /**
     * Set dataOd
     *
     * @param string $dataOd
     * @return Klient
     */
    public function setDataOd($dataOd)
    {
        $this->dataOd = $dataOd;

        return $this;
    }

    /**
     * Get dataOd
     *
     * @return string 
     */
    public function getDataOd()
    {
        return $this->dataOd;
    }

    /**
     * Set dataDo
     *
     * @param string $dataDo
     * @return Klient
     */
    public function setDataDo($dataDo)
    {
        $this->dataDo = $dataDo;

        return $this;
    }

    /**
     * Get dataDo
     *
     * @return string 
     */
    public function getDataDo()
    {
        return $this->dataDo;
    }

    /**
     * Set domekdomek
     *
     * @param \StronaBundle\Entity\Domek $domekdomek
     * @return Klient
     */
    public function setDomekdomek(\StronaBundle\Entity\Domek $domekdomek = null)
    {
        $this->domekdomek = $domekdomek;

        return $this;
    }

    /**
     * Get domekdomek
     *
     * @return \StronaBundle\Entity\Domek 
     */
    public function getDomekdomek()
    {
        return $this->domekdomek;
    }
}
