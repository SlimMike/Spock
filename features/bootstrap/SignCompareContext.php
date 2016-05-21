<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use app\Sign\Sign;
use app\Sign\Rock;
use app\Sign\Paper;
use app\Sign\Scissors;
use app\Sign\Spock;
use app\Sign\Lizard;


class SignCompareContext extends BasicContext
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
     * @Given second sign is Lizard
     */
    public function secondSignIsLizard()
    {
        $this->secondSign = new Lizard();
    }

    /**
     * @Then first sign does not win with second sign
     */
    public function firstSignDoesNotWinWithSecondSign()
    {
        PHPUnit_Framework_Assert::assertEquals(false, $this->firstSign->isOwning($this->secondSign));
    }

    /**
     * @Then first sign wins with second sign
     */
    public function firstSignWinsWithSecondSign()
    {
        PHPUnit_Framework_Assert::assertEquals(true, $this->firstSign->isOwning($this->secondSign));
    }
}
