<?php

namespace App\Cards;
/*
 * Base Class for Boarding cards 
 * Contains all the similar properties for cards
 */
class BoardingCards
{
    protected $startPoint;
    protected $destinationPoint;
    protected $seatNumber;
    protected $transportIdentificationNumber;

    public function startPoint($startPoint = null)
    {
        if (null === $startPoint)
        {
            return $this->startPoint;
        }

        $this->startPoint = $startPoint;
        return $this;
    }

    public function destinationPoint($destinationPoint = null)
    {
        if (null === $destinationPoint)
        {
            return $this->destinationPoint;
        }
        $this->destinationPoint = $destinationPoint;
        return $this;
    }

    public function seatNumber($seatNumber = null)
    {
        if (null === $seatNumber)
        {
            return $this->seatNumber;
        }

        $this->seatNumber = $seatNumber;
        return $this;
    }

    public function transportIdentificationNumber($transportIdentificationNumber = null)
    {
        if (null === $transportIdentificationNumber)
        {
            return $this->transportIdentificationNumber;
        }

        $this->transportIdentificationNumber = $transportIdentificationNumber;
        return $this;
    }
}
