<?php

namespace app;


class Game
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