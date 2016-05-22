<?php

use app\Sign\Lizard;
use app\Sign\Paper;
use app\Sign\Rock;
use app\Sign\Scissors;
use app\Sign\Sign;
use app\Sign\Spock;

trait ManipulatesFirstAndSecondSign
{
    /**
     * @var Sign
     */
    private $firstSign;

    /**
     * @var Sign
     */
    private $secondSign;

    /**
     * @Given first sign is Spock
     */
    public function firstSignIsSpock()
    {
        $this->firstSign = new Spock();
    }

    /**
     * @Given second sign is Rock
     */
    public function secondSignIsRock()
    {
        $this->secondSign = new Rock();
    }

    /**
     * @Given second sign is Paper
     */
    public function secondSignIsPaper()
    {
        $this->secondSign = new Paper();
    }

    /**
     * @Given second sign is Scissors
     */
    public function secondSignIsScissors()
    {
        $this->secondSign = new Scissors();
    }

    /**
     * @Given second sign is Spock
     */
    public function secondSignIsSpock()
    {
        $this->secondSign = new Spock();
    }

    /**
     * @Given second sign is Lizard
     */
    public function secondSignIsLizard()
    {
        $this->secondSign = new Lizard();
    }
}