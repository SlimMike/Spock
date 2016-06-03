<?php

use app\Player\AiPlayer;
use app\Player\HumanPlayer;

class PlayerContext extends BasicContext
{
    /**
     * @Given We can create a human player
     */
    public function weCanCreateAHumanPlayer()
    {
        $player = new HumanPlayer();
    }

    /**
     * @Given We can create a ai player
     */
    public function weCanCreateAAiPlayer()
    {
        $player = new AiPlayer();
    }
}
