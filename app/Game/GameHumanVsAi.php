<?php

namespace app\Game;

use app\Player\Player;
use app\Turn;

class GameHumanVsAi implements Game
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
     * @var Turn[]
     */
    private $turns;

    /**
     * @param Player $firstPlayer
     * @param Player $secondPlayer
     */
    public function __construct(Player $firstPlayer, Player $secondPlayer)
    {
        $this->firstPlayer  = $firstPlayer;
        $this->secondPlayer = $secondPlayer;
    }

    public function addTurn(Turn $turn)
    {
        $this->turns[] = $turn;
    }
}