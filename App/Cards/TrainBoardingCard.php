<?php

namespace App\Cards;

/**
 * Description of TrainBoardingCard
 *
 * @author kamran
 */
class TrainBoardingCard extends BoardingCards
{
     /**
     * Returns the Formated String output for Train Card.
     *
     * @return string
     */
    public function toString()
    {
        return 'Take train ' . $this->transportIdentificationNumber() . ' from ' . $this->startPoint() .
            ' to ' . $this->destinationPoint() . '. Sit in seat ' . $this->seatNumber() . '.';
    }

}
