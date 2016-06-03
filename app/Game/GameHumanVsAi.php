<?php

namespace app\Game;

use app\Player\Player;

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
     * @param Player $firstPlayer
     * @param Player $secondPlayer
     */
    public function __construct(Player $firstPlayer, Player $secondPlayer)
    {
        $this->firstPlayer  = $firstPlayer;
        $this->secondPlayer = $secondPlayer;
    }
}