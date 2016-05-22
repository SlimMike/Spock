<?php

use app\Sign\Lizard;
use app\Sign\Spock;
use app\Turn;

class TurnContext extends BasicContext
{
    use ManipulatesFirstAndSecondSign;

    /**
     * @var Turn
     */
    private $turn;

    /**
     * @Then we can create a Turn with first and second sign
     */
    public function weCanCreateATurnWithFirstAndSecondSign()
    {
        $this->turn = new Turn($this->firstSign, $this->secondSign);
    }

    /**
     * @Then Turns first sign is Spock
     */
    public function turnsFirstSignIsSpock()
    {
        PHPUnit_Framework_Assert::assertEquals(
            true,
            $this->turn->getFirst() instanceof Spock
        );
    }

    /**
     * @Then Turns second sign is Lizard
     */
    public function turnsSecondSignIsLizard()
    {
        PHPUnit_Framework_Assert::assertEquals(
            true,
            $this->turn->getSecond() instanceof Lizard
        );
    }
}
