<?php

namespace AppBundle\Entity;

/**
 * GameEventType
 */
class GameEventType
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

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
     * Set name
     *
     * @param string $name
     *
     * @return GameEventType
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
     * Add gameEvent
     *
     * @param \AppBundle\Entity\GameEvent $gameEvent
     *
     * @return GameEventType
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
