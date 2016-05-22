<?php

use app\Player;
use app\Game;

class GameContext extends BasicContext
{
    /**
     * @var Player
     */
    private $firstPlayer;

    /**
     * @var Player
     */
    private $secondPlayer;

    /**
     * @var Game
     */
    private $game;

    /**
     * @Given first player
     */
    public function firstPlayer()
    {
        $this->firstPlayer = new Player();
    }

    /**
     * @Given second player
     */
    public function secondPlayer()
    {
        $this->secondPlayer = new Player();
    }

    /**
     * @Then We can create a game with first and second player
     */
    public function weCanCreateAGameWithFirstAndSecondPlayer()
    {
        $this->game = new Game($this->firstPlayer, $this->secondPlayer);
    }
}
