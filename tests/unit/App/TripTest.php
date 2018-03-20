<?php

class TripTest extends \Codeception\Test\Unit
{

    /**
     * @var \UnitTester
     */
    protected $tester;

    public function testGetTripCards()
    {
        /*
         * Reason to mock Boarding card is error in BoardingClass
         * should not result in failure of this unit test (Isolated unit tests)
         */

        $mockCard = $this->getMockBuilder("App\Cards\TrainBoardingCard")
                ->disableOriginalConstructor()
                ->getMock();

        $mockCard->method('startPoint')
                ->willReturn('A');
        $mockCard->method('destinationPoint')
                ->willReturn('B');

        $trip = new App\Trip();
        $trip->addCard($mockCard);
        $cards = $trip->allBoardingCards();
        $this->assertCount(1, $cards, "count of returned array should be equal to cards added");
    }

}
