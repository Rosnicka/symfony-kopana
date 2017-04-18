<?php

namespace AppBundle\Entity;

/**
 * Player
 */
class Player
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $firstname;

    /**
     * @var string
     */
    private $lastname;

    /**
     * @var integer
     */
    private $personal_identification_number;

    /**
     * @var \DateTime
     */
    private $birth_date;

    /**
     * @var integer
     */
    private $number;

    /**
     * @var boolean
     */
    private $season_active;

    /**
     * @var \AppBundle\Entity\Team
     */
    private $team;


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
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Player
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return Player
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set personalIdentificationNumber
     *
     * @param integer $personalIdentificationNumber
     *
     * @return Player
     */
    public function setPersonalIdentificationNumber($personalIdentificationNumber)
    {
        $this->personal_identification_number = $personalIdentificationNumber;

        return $this;
    }

    /**
     * Get personalIdentificationNumber
     *
     * @return integer
     */
    public function getPersonalIdentificationNumber()
    {
        return $this->personal_identification_number;
    }

    /**
     * Set birthDate
     *
     * @param \DateTime $birthDate
     *
     * @return Player
     */
    public function setBirthDate($birthDate)
    {
        $this->birth_date = $birthDate;

        return $this;
    }

    /**
     * Get birthDate
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birth_date;
    }

    /**
     * Set number
     *
     * @param integer $number
     *
     * @return Player
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return integer
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set seasonActive
     *
     * @param boolean $seasonActive
     *
     * @return Player
     */
    public function setSeasonActive($seasonActive)
    {
        $this->season_active = $seasonActive;

        return $this;
    }

    /**
     * Get seasonActive
     *
     * @return boolean
     */
    public function getSeasonActive()
    {
        return $this->season_active;
    }

    /**
     * Set team
     *
     * @param \AppBundle\Entity\Team $team
     *
     * @return Player
     */
    public function setTeam(\AppBundle\Entity\Team $team = null)
    {
        $this->team = $team;

        return $this;
    }

    /**
     * Get team
     *
     * @return \AppBundle\Entity\Team
     */
    public function getTeam()
    {
        return $this->team;
    }
}
