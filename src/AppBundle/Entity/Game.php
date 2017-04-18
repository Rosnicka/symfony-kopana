<?php

namespace AppBundle\Entity;

/**
 * Game
 */
class Game
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $start;

    /**
     * @var \AppBundle\Entity\GameField
     */
    private $gameField;

    /**
     * @var \AppBundle\Entity\Team
     */
    private $homeTeam;

    /**
     * @var \AppBundle\Entity\Team
     */
    private $hostTeam;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $gameEvent;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->gameEvent = new \Doctrine\Common\Collections\ArrayCollection();
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

    /**
     * Set start
     *
     * @param \DateTime $start
     *
     * @return Game
     */
    public function setStart($start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Get start
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Set gameField
     *
     * @param \AppBundle\Entity\GameField $gameField
     *
     * @return Game
     */
    public function setGameField(\AppBundle\Entity\GameField $gameField)
    {
        $this->gameField = $gameField;

        return $this;
    }

    /**
     * Get gameField
     *
     * @return \AppBundle\Entity\GameField
     */
    public function getGameField()
    {
        return $this->gameField;
    }

    /**
     * Set homeTeam
     *
     * @param \AppBundle\Entity\Team $homeTeam
     *
     * @return Game
     */
    public function setHomeTeam(\AppBundle\Entity\Team $homeTeam)
    {
        $this->homeTeam = $homeTeam;

        return $this;
    }

    /**
     * Get homeTeam
     *
     * @return \AppBundle\Entity\Team
     */
    public function getHomeTeam()
    {
        return $this->homeTeam;
    }

    /**
     * Set hostTeam
     *
     * @param \AppBundle\Entity\Team $hostTeam
     *
     * @return Game
     */
    public function setHostTeam(\AppBundle\Entity\Team $hostTeam)
    {
        $this->hostTeam = $hostTeam;

        return $this;
    }

    /**
     * Get hostTeam
     *
     * @return \AppBundle\Entity\Team
     */
    public function getHostTeam()
    {
        return $this->hostTeam;
    }

    /**
     * Add gameEvent
     *
     * @param \AppBundle\Entity\GameEvent $gameEvent
     *
     * @return Game
     */
    public function addGameEvent(\AppBundle\Entity\GameEvent $gameEvent)
    {
        $this->gameEvent[] = $gameEvent;

        return $this;
    }

    /**
     * Remove gameEvent
     *
     * @param \AppBundle\Entity\GameEvent $gameEvent
     */
    public function removeGameEvent(\AppBundle\Entity\GameEvent $gameEvent)
    {
        $this->gameEvent->removeElement($gameEvent);
    }

    /**
     * Get gameEvent
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGameEvent()
    {
        return $this->gameEvent;
    }
}
