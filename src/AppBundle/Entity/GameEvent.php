<?php

namespace AppBundle\Entity;

/**
 * GameEvent
 */
class GameEvent
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $time;

    /**
     * @var \AppBundle\Entity\GameEventType
     */
    private $gameEventType;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $game;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->game = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set time
     *
     * @param \DateTime $time
     *
     * @return GameEvent
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return \DateTime
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set gameEventType
     *
     * @param \AppBundle\Entity\GameEventType $gameEventType
     *
     * @return GameEvent
     */
    public function setGameEventType(\AppBundle\Entity\GameEventType $gameEventType)
    {
        $this->gameEventType = $gameEventType;

        return $this;
    }

    /**
     * Get gameEventType
     *
     * @return \AppBundle\Entity\GameEventType
     */
    public function getGameEventType()
    {
        return $this->gameEventType;
    }

    /**
     * Add game
     *
     * @param \AppBundle\Entity\Game $game
     *
     * @return GameEvent
     */
    public function addGame(\AppBundle\Entity\Game $game)
    {
        $this->game[] = $game;

        return $this;
    }

    /**
     * Remove game
     *
     * @param \AppBundle\Entity\Game $game
     */
    public function removeGame(\AppBundle\Entity\Game $game)
    {
        $this->game->removeElement($game);
    }

    /**
     * Get game
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGame()
    {
        return $this->game;
    }
}
