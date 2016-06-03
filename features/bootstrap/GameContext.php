<?php

use app\Game\AddingTurnToFinishedException;
use app\Game\GameHumanVsAi;
use app\Player\AiPlayer;
use app\Player\HumanPlayer;
use app\Player\Player;
use app\Sign\Lizard;
use app\Sign\Paper;
use app\Sign\Rock;
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
     * @Then we cannot add new turn
     */
    public function weCannotAddNewTurn()
    {
        $this->exceptionWillBeThrown(
            AddingTurnToFinishedException::class,
            function() {
                $this->addingADrawTurn();
            }
        );
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

    /**
     * @Then game is finished
     */
    public function gameIsFinished()
    {
        PHPUnit_Framework_Assert::assertEquals(
            true,
            $this->game->isFinished()
        );
    }

    /**
     * @Then game is not finished
     */
    public function gameIsNotFinished()
    {
        PHPUnit_Framework_Assert::assertEquals(
            false,
            $this->game->isFinished()
        );
    }

    /**
     * @Given adding turn won by player
     */
    public function addingTurnWonByPlayer()
    {
        $turn = $this->getTurnWonByFirstPlayer();

        $this->game->addTurn($turn);
    }

    /**
     * @Given adding a draw turn
     */
    public function addingADrawTurn()
    {
        $turn = $this->getDrawTurn();

        $this->game->addTurn($turn);
    }

    /**
     * @Given adding a turn lost by player
     */
    public function addingATurnLostByPlayer()
    {
        $turn = $this->getTurnLostByFirstPlayer();

        $this->game->addTurn($turn);
    }

    /**
     * @Then count of turns won by a player equals to :numberOfTurns
     */
    public function countOfTurnsWonByAPlayerEqualsTo($numberOfTurns)
    {
        PHPUnit_Framework_Assert::assertEquals(
            (int) $numberOfTurns,
            $this->game->getCountOfTurnsWonByFirstPlayer()
        );
    }

    /**
     * @return Turn
     */
    private function getTurnWonByFirstPlayer()
    {
        return new Turn(new Lizard(), new Spock());
    }

    /**
     * @return Turn
     */
    private function getDrawTurn()
    {
        return new Turn(new Rock(), new Rock());
    }

    /**
     * @return Turn
     */
    private function getTurnLostByFirstPlayer()
    {
        return new Turn(new Rock(), new Paper());
    }
}
