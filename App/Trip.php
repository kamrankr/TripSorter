<?php

namespace App;

use App\Cards\BoardingCards;

/**
 * Trip is the class to create new Trip and sort cards
 *
 * @author kamran
 */
class Trip
{
    public $tripBoardingCards;
    public $start;
    public $canBeStartOfJourney;
    public $canNotBeStartOfJourney;

    /*
     * Add card method will accept Boarding cards and works on two associated arrays
     * canBeStartOfJourney and canNotBeStartOfJourney
     * for every new card we add we have source and destination prresent in card.
     * All the destination points will be saved in $canNotBeStartOfJourney and every 
     * source point be will be $canBeStartOfJourney and if the source is present
     * in  destination array ($canNotBeStartOfJourney), 
     * we will remove that source from $canBeStartOfJourney
     * At the end leaving $canBeStartOfJourney of journey with only one item that is "start of journey"
     * we need only start of journey to navigate till the last leg. as every destination is the
     * source for nex trip 
     */
    public function addCard(BoardingCards $tripCard)
    {
        if (empty($tripCard->startPoint()) || empty($tripCard->destinationPoint()))
        {
            throw new \InvalidArgumentException("Card should have a start and destination point");
        }
        // save allboarding cards by source point
        $this->tripBoardingCards[$tripCard->startPoint()] = $tripCard;
        
        // Destination points cannot be the "start of journey" where trip starts
        $this->canNotBeStartOfJourney[$tripCard->destinationPoint()] = true;
        
        // if start point is not in the destination array save it in start array
        if (!isset($this->canNotBeStartOfJourney[$tripCard->startPoint()]))
        {
            $this->canBeStartOfJourney[$tripCard->startPoint()] = true;
        }
        // if start point is present in the destination array remove it from start array
        if (isset($this->canBeStartOfJourney[$tripCard->destinationPoint()]))
        {
            unset($this->canBeStartOfJourney[$tripCard->destinationPoint()]);
        }
    }

    public function sortedTripCards()
    {
        foreach ($this->canBeStartOfJourney as $start => $val)
        {
            /*
             *  Getting the "start of journey", The complexity is 
             * constant as we have only 1 item left that is start of trip  
             */
            $tripStartsAt = $start;  
        }

        while ($tripStartsAt != null)
        {
            if (isset($this->tripBoardingCards[$tripStartsAt]))
            {
                $cards[] = $this->tripBoardingCards[$tripStartsAt];
                $tripStartsAt = $this->tripBoardingCards[$tripStartsAt]->destinationPoint();
            } else
            {
                $tripStartsAt = null;
            }
        }
        return $cards;
    }

}
