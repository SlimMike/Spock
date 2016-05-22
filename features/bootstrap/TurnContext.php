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
     * @Given there is a Turn with first and second sign
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

    /**
     * @Then last Turn is won by fist sign
     */
    public function lastTurnIsWonByFistSign()
    {
        PHPUnit_Framework_Assert::assertEquals(
            true,
            $this->turn->isFirstSignOwningSecond()
        );
    }


    /**
     * @Then last Turn is won by second sign
     */
    public function lastTurnIsWonBySecondSign()
    {
        PHPUnit_Framework_Assert::assertEquals(
            true,
            $this->turn->isSecondSignOwningFirst()
        );
    }

    /**
     * @Then last Turn results in a draw
     */
    public function lastTurnResultsInADraw()
    {
        PHPUnit_Framework_Assert::assertEquals(
            true,
            $this->turn->isDraw()
        );
    }

    /**
     * @Then last Turn is not won by first sign
     */
    public function lastTurnIsNotWonByFirstSign()
    {
        PHPUnit_Framework_Assert::assertEquals(
            false,
            $this->turn->isFirstSignOwningSecond()
        );
    }

    /**
     * @Then last Turn is not won by second sign
     */
    public function lastTurnIsNotWonBySecondSign()
    {
        PHPUnit_Framework_Assert::assertEquals(
            false,
            $this->turn->isSecondSignOwningFirst()
        );
    }

    /**
     * @Then last Turn does not results in a draw
     */
    public function lastTurnDoesNotResultsInADraw()
    {
        PHPUnit_Framework_Assert::assertEquals(
            false,
            $this->turn->isDraw()
        );
    }
}
