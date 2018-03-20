<?php

use PHPUnit\Framework\TestCase;

class FlightBoardingCardTest extends TestCase
{

    public function testFlightBoardingCardWithBaggageCounter()
    {
        $baggageCounter     = "40"; // BaggageCounter
        $flightBoardingCard = new App\Cards\FlightBoardingCard('A', 'B');
        $flightBoardingCard->baggageCounter($baggageCounter);
        $output             = $flightBoardingCard->toString();
        $this->assertContains($baggageCounter, $output);
    }

    public function testFlightBoardingCardWithOutBaggageCounter()
    {
        $flightBoardingCard = new App\Cards\FlightBoardingCard('A', 'B');
        $output             = $flightBoardingCard->toString();
        $this->assertContains("Baggage will be automatically transferred from your last leg", $output);
    }

    public function testFlightBoardingCardWithGate()
    {
        $gateNumber         = "10"; // Gate Number
        $flightBoardingCard = new App\Cards\FlightBoardingCard('A', 'B');
        $flightBoardingCard->gate($gateNumber);
        $output             = $flightBoardingCard->toString();
        $this->assertContains($gateNumber, $output);
    }

}
