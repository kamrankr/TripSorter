<?php


class BoardingCardTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;


    // tests
    public function testBoardingCardClassProperties()
    {
        $boardingCard = new App\Cards\BoardingCards();
        $this->assertObjectHasAttribute('startPoint', $boardingCard);
        $this->assertObjectHasAttribute('destinationPoint', $boardingCard);
        $this->assertObjectHasAttribute('seatNumber', $boardingCard);
        $this->assertObjectHasAttribute('transportIdentificationNumber', $boardingCard);
    }
}