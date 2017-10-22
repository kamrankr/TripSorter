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

    public function __construct($startPoint = null, $destinationPoint = null)
    {
        if (null === $startPoint || null === $destinationPoint)
        {
            throw new \Exception("Start and End point are required for a card");
        }
        $this->startPoint = $startPoint;
        $this->destinationPoint = $destinationPoint;
    }

    /**
     * This method returns startPoint of card.
     * @return string
     */
    public function startPoint()
    {
        return $this->startPoint;
    }

    /**
     * This method returns destinationPoint of card .
     *
     * @return string
     */
    public function destinationPoint()
    {
        return $this->destinationPoint;
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
