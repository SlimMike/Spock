<?php

namespace app\Game;

use app\Player\Player;

class GameHumanVsAi extends Game
{
    /**
     * @param Player $firstPlayer
     * @param Player $secondPlayer
     */
    public function __construct(Player $firstPlayer, Player $secondPlayer)
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
        return 3 === $this->getCountOfTurnsWonByFirstPlayer();
    }
}