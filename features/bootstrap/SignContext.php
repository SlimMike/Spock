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

class SignContext extends BasicContext
{
    /**
     * @Given there is new Rock sign
     */
    public function thereIsNewRockSign()
    {
        $rock = new Rock();
    }

    /**
     * @Given there is new Paper sign
     */
    public function thereIsNewPaperSign()
    {
        $paper = new Paper();
    }

    /**
     * @Given there is new Scissors sign
     */
    public function thereIsNewScissorsSign()
    {
        $scissors = new Scissors();
    }

    /**
     * @Given there is new Spock sign
     */
    public function thereIsNewSpockSign()
    {
        $spock = new Spock();
    }

    /**
     * @Given there is new Lizard sign
     */
    public function thereIsNewLizardSign()
    {
        $lizard = new Lizard();
    }
}