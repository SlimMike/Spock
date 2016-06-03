<?php

use app\Game\GameHumanVsAi;
use app\Player\AiPlayer;
use app\Player\HumanPlayer;
use app\Player\Player;

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
     * @var GameHumanVsAi
     */
    private $game;

    /**
     * @Given human first player
     */
    public function humanFirstPlayer()
    {
        $this->firstPlayer = new HumanPlayer();
    }

    /**
     * @Given ai second player
     */
    public function aiSecondPlayer()
    {
        $this->secondPlayer = new AiPlayer();
    }

    /**
     * @Then We can create a game with first and second player
     */
    public function weCanCreateAGameWithFirstAndSecondPlayer()
    {
        $this->game = new GameHumanVsAi($this->firstPlayer, $this->secondPlayer);
    }
}
