<?php

namespace app\Game;

use app\Player\Player;
use app\Turn;

abstract class Game
{
    /**
     * @var Player
     */
    protected $firstPlayer;

    /**
     * @var Player
     */
    protected $secondPlayer;

    /**
     * @var Turn[]
     */
    protected $turns;

    /**
     * @return boolean
     */
    public abstract function isFinished();

    /**
     * @param Turn $turn
     *
     * @throws AddingTurnToFinishedException
     */
    public function addTurn(Turn $turn)
    {
        if ($this->isFinished()) {
            throw new AddingTurnToFinishedException();
        }

        $this->turns[] = $turn;
    }

    /**
     * @return int
     */
    public function getCountOfTurnsWonByFirstPlayer()
    {
        $turnsWon = $this->getTurnsWonByFirstPlayer();

        return count($turnsWon);
    }

    /**
     * @return int
     */
    public function getCountOfTurnsWonBySecondPlayer()
    {
        $turnsWon = $this->getTurnsWonBySecondPlayer();

        return count($turnsWon);
    }

    /**
     * @return Turn[]
     */
    protected function getTurnsWonByFirstPlayer()
    {
        return array_filter($this->turns, function(Turn $turn) {
            return $turn->isFirstSignOwningSecond();
        });
    }

    /**
     * @return Turn[]
     */
    protected function getTurnsWonBySecondPlayer()
    {
        return array_filter($this->turns, function(Turn $turn) {
            return $turn->isSecondSignOwningFirst();
        });
    }

    /**
     * @return int
     */
    public function getScoreForFirstPlayer()
    {
        return 2 * $this->getCountOfTurnsWonByFirstPlayer();
    }
}