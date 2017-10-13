<?php
use App\Cards\BusBoardingCard;


class BusBoardingCardTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    public function testBusBoardingCardStartAndDestinationPointOuput()
    {
        $busBoardingCard = new BusBoardingCard();
        $busBoardingCard->startPoint('testStartPoint')->destinationPoint('testDestinationPoint');
        $output = $busBoardingCard->toString();
         
        $this->assertContains("testStartPoint",$output,"Unable to verify start Point exist in bus card");
        $this->assertContains("testDestinationPoint",$output,"Unable to verify destination Point exist in bus card");
    }
    
    public function testBusBoardingCardWithoutSeatAssignment()
    {
        $busBoardingCard = new BusBoardingCard();
        $output = $busBoardingCard->toString();
        $this->assertContains("No seat assignment",$output,"empty seat should return ,  no seat assignment");
    }
    
    public function testBusBoardingCardWithSeatAssignment()
    {
        $busBoardingCard = new BusBoardingCard();
        $seatNumber = rand(1,100).'B'; // Random Seat Number Generation
        $busBoardingCard->seatNumber($seatNumber);
        
        $output = $busBoardingCard->toString();
        $this->assertContains($seatNumber,$output,"expecting seat number in output");
    }
}