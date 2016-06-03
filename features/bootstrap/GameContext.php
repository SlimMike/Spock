<?php

use app\Game\GameHumanVsAi;
use app\Player\AiPlayer;
use app\Player\HumanPlayer;
use app\Player\Player;
use app\Sign\Spock;
use app\Turn;

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
     * @var Turn
     */
    private $turn;

    /**
     * @Given game with human and ai player
     */
    public function gameWithHumanAndAiPlayer()
    {
        $this->humanFirstPlayer();
        $this->aiSecondPlayer();
        $this->weCanCreateAGameWithFirstAndSecondPlayer();
    }

    /**
     * @Then We can create a game with first and second player
     */
    public function weCanCreateAGameWithFirstAndSecondPlayer()
    {
        $this->game = new GameHumanVsAi($this->firstPlayer, $this->secondPlayer);
    }

    /**
     * @Then we can add new turn to the game
     */
    public function weCanAddNewTurnToTheGame()
    {
        $this->game->addTurn($this->turn);
    }

    /**
     * @Given new turn
     */
    public function newTurn()
    {
        $this->turn = new Turn(new Spock(), new Spock());
    }

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
}
