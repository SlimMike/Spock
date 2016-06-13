<?php

namespace app\Game;

use app\Player\AiPlayer;
use app\Player\HumanPlayer;

/**
 * @property HumanPlayer $firstPlayer
 * @property AiPlayer    $secondPlayer
 */
class GameHumanVsAi extends Game
{
    /**
     * @param HumanPlayer $firstPlayer
     * @param AiPlayer    $secondPlayer
     */
    public function __construct(HumanPlayer $firstPlayer, AiPlayer $secondPlayer)
    {
        $this->firstPlayer  = $firstPlayer;
        $this->secondPlayer = $secondPlayer;
        $this->turns        = [];
    }

    /**
     * @return boolean
     */
    public function isFinished()
    {
        return 3 === $this->getCountOfTurnsWonBySecondPlayer();
    }
}