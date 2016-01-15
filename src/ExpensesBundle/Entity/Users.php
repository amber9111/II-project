<?php

namespace ExpensesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 */
class Users
{
    /**
     * @var string
     */
    private $imie;

    /**
     * @var string
     */
    private $nazwisko;

    /**
     * @var string
     */
    private $adres;

    /**
     * @var string
     */
    private $telefon;

    /**
     * @var string
     */
    private $email;

    /**
     * @var integer
     */
    private $pokoj;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set imie
     *
     * @param string $imie
     * @return Users
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
     * @return Users
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
     * Set adres
     *
     * @param string $adres
     * @return Users
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
     * Set telefon
     *
     * @param string $telefon
     * @return Users
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
     * Set email
     *
     * @param string $email
     * @return Users
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set pokoj
     *
     * @param integer $pokoj
     * @return Users
     */
    public function setPokoj($pokoj)
    {
        $this->pokoj = $pokoj;

        return $this;
    }

    /**
     * Get pokoj
     *
     * @return integer 
     */
    public function getPokoj()
    {
        return $this->pokoj;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
