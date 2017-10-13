<?php

namespace App\Cards;

/**
 * Description of FlightBoardingCard
 *
 * @author kamran
 */
class FlightBoardingCard extends BoardingCards implements CardsI
{

    private $gate;
    private $baggageCounter;

    public function gate($gate = null)
    {
        if (null === $gate)
        {
            return $this->gate;
        }

        $this->gate = $gate;
        return $this;
    }

    public function baggageCounter($baggageCounter = null)
    {
        if (null === $baggageCounter)
        {
            return $this->baggageCounter;
        }

        $this->baggageCounter = $baggageCounter;
        return $this;
    }

    public function toString()
    {
        return 'From ' . $this->startPoint() .
            ', take flight ' . $this->transportIdentificationNumber() . ' to ' .
            $this->destinationPoint() . '. Gate ' .
            $this->gate() . ', seat ' .
            $this->seatNumber() . '. ' .
            ($this->baggageCounter() ? 'Baggage drop at ticket counter ' .
            $this->baggageCounter() . '.' : 'Baggage will be automatically transferred from your last leg.');
    }

}
