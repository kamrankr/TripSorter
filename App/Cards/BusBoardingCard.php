<?php

namespace App\Cards;

/**
 * BusBoardingCard
 *
 * @author kamran
 */
class BusBoardingCard extends BoardingCards implements CardsI
{

    public function toString()
    {
        return 'Take the airport bus from ' . $this->startPoint() .
            ' to ' . $this->destinationPoint() . '. ' .
            ($this->seatNumber() ? 'Sit in seat ' . $this->seatNumber() . '.' : 'No seat assignment.');
    }

}
