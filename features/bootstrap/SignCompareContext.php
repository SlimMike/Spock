<?php


class SignCompareContext extends BasicContext
{
    use ManipulatesFirstAndSecondSign;

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
