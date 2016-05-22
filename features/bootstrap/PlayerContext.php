<?php

use app\Player;

class PlayerContext extends BasicContext
{

    /**
     * @Given We can create a player
     */
    public function weCanCreateAPlayer()
    {
        $player = new Player();
    }
}
