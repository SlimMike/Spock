<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use app\Sign\Rock;
use app\Sign\Paper;
use app\Sign\Scissors;
use app\Sign\Spock;
use app\Sign\Lizard;
use app\Turn;

class TurnContext extends BasicContext
{
    /**
     * @var Turn
     */
    private $turn;

    /**
     * @Then we can create a Turn with first and second sign
     */
    public function weCanCreateATurnWithFirstAndSecondSign()
    {
        $this->turn = new Turn();
    }

    /**
     * @Then Turns first sign is Spock
     */
    public function turnsFirstSignIsSpock()
    {
        throw new PendingException();
    }

    /**
     * @Then Turns second sign is Lizard
     */
    public function turnsSecondSignIsLizard()
    {
        throw new PendingException();
    }
}
