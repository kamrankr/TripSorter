<?php

use App\Cards\BusBoardingCard;
use PHPUnit\Framework\TestCase;

class BusBoardingCardTest extends TestCase
{

   public function testBusBoardingCardStartAndDestinationPointOuput()
    {
        $busBoardingCard = new BusBoardingCard('testStartPoint', 'testDestinationPoint');
        $output = $busBoardingCard->toString();

        $this->assertContains("testStartPoint", $output, "Unable to verify start Point exist in bus card");
        $this->assertContains("testDestinationPoint", $output, "Unable to verify destination Point exist in bus card");
    }

    public function testBusBoardingCardWithoutSeatAssignment()
    {
        $busBoardingCard = new BusBoardingCard('A', 'B');
        $output = $busBoardingCard->toString();
        $this->assertContains("No seat assignment", $output, "empty seat should return ,  no seat assignment");
    }

    public function testBusBoardingCardWithSeatAssignment()
    {
        $busBoardingCard = new BusBoardingCard('A', 'B');
        $seatNumber = rand(1, 100) . 'B'; // Random Seat Number Generation
        $busBoardingCard->seatNumber($seatNumber);

        $output = $busBoardingCard->toString();
        $this->assertContains($seatNumber, $output, "expecting seat number in output");
    }

}
