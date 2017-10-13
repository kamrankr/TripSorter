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
    
    /**
     * This method sets startPoint of a card and returns startPoint of card if null is passed.
     *
     * @param string $startPoint startPoint Of card.
     *
     * @return string
     */
    
    public function startPoint($startPoint = null)
    {
        if (null === $startPoint)
        {
            return $this->startPoint;
        }

        $this->startPoint = $startPoint;
        return $this;
    }
    
    /**
     * This method sets destinationPoint of a card and returns destinationPoint of card if null is passed.
     *
     * @param string $destinationPoint destinationPoint Of card.
     *
     * @return string
     */
    public function destinationPoint($destinationPoint = null)
    {
        if (null === $destinationPoint)
        {
            return $this->destinationPoint;
        }
        $this->destinationPoint = $destinationPoint;
        return $this;
    }

    /**
     * This method sets seatNumber of a card and returns startPoint of card if null is passed.
     *
     * @param string $seatNumber seatNumber Of card.
     *
     * @return string
     */
    public function seatNumber($seatNumber = null)
    {
        if (null === $seatNumber)
        {
            return $this->seatNumber;
        }

        $this->seatNumber = $seatNumber;
        return $this;
    }
    
    /**
     * This method sets transportIdentificationNumber of a card and returns transportIdentificationNumber of card if null is passed.
     *
     * @param string $transportIdentificationNumber transportIdentificationNumber Of card.
     *
     * @return string
     */
    
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
