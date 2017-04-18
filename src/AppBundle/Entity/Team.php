<?php

namespace AppBundle\Entity;

/**
 * Team
 */
class Team
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
     * @var string
     */
    private $color_primary;

    /**
     * @var string
     */
    private $color_second;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $user;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $player;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $game;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $hostGame;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
        $this->player = new \Doctrine\Common\Collections\ArrayCollection();
        $this->game = new \Doctrine\Common\Collections\ArrayCollection();
        $this->hostGame = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Team
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
     * Set colorPrimary
     *
     * @param string $colorPrimary
     *
     * @return Team
     */
    public function setColorPrimary($colorPrimary)
    {
        $this->color_primary = $colorPrimary;

        return $this;
    }

    /**
     * Get colorPrimary
     *
     * @return string
     */
    public function getColorPrimary()
    {
        return $this->color_primary;
    }

    /**
     * Set colorSecond
     *
     * @param string $colorSecond
     *
     * @return Team
     */
    public function setColorSecond($colorSecond)
    {
        $this->color_second = $colorSecond;

        return $this;
    }

    /**
     * Get colorSecond
     *
     * @return string
     */
    public function getColorSecond()
    {
        return $this->color_second;
    }

    /**
     * Add user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Team
     */
    public function addUser(\AppBundle\Entity\User $user)
    {
        $this->user[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \AppBundle\Entity\User $user
     */
    public function removeUser(\AppBundle\Entity\User $user)
    {
        $this->user->removeElement($user);
    }

    /**
     * Get user
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add player
     *
     * @param \AppBundle\Entity\Player $player
     *
     * @return Team
     */
    public function addPlayer(\AppBundle\Entity\Player $player)
    {
        $this->player[] = $player;

        return $this;
    }

    /**
     * Remove player
     *
     * @param \AppBundle\Entity\Player $player
     */
    public function removePlayer(\AppBundle\Entity\Player $player)
    {
        $this->player->removeElement($player);
    }

    /**
     * Get player
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * Add game
     *
     * @param \AppBundle\Entity\Game $game
     *
     * @return Team
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

    /**
     * Add hostGame
     *
     * @param \AppBundle\Entity\Game $hostGame
     *
     * @return Team
     */
    public function addHostGame(\AppBundle\Entity\Game $hostGame)
    {
        $this->hostGame[] = $hostGame;

        return $this;
    }

    /**
     * Remove hostGame
     *
     * @param \AppBundle\Entity\Game $hostGame
     */
    public function removeHostGame(\AppBundle\Entity\Game $hostGame)
    {
        $this->hostGame->removeElement($hostGame);
    }

    /**
     * Get hostGame
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getHostGame()
    {
        return $this->hostGame;
    }
}
