<?php
class TrainBoardingCardTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    public function testTrainBoardingCardWithTransportIdentificationNumber()
    {
        $trainBoardingCard = new App\Cards\TrainBoardingCard();
        $trainBoardingCard
            ->startPoint('testStartPoint')
            ->destinationPoint('testDestinationPoint')
            ->transportIdentificationNumber('78A');
        $output = $trainBoardingCard->toString();
        $this->assertContains("78A",$output,"TransportIdentification number is invalid");
    }
}