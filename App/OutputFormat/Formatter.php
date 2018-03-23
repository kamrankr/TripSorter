<?php

namespace App\OutputFormat;

use App\Trip;

/**
 * Formatter class to format and return trip data
 *
 * @author kamran
 */
class Formatter 
{
    protected $formatter;
    protected $lineBreak;
    
    /**
     * Accepts trip object and returns the Formated String output.
     *
     * @return string
     */
    
    public function format(Trip $trip)
    {
        $output = "";
        // get all added boarding cards, keyed by departure
        $tripCards = $trip->allBoardingCards();

        // start of journey, as all journeys are connected only need start to traverse all
        $tripStartsAt = $trip->startOfJourney();

        $loopIndex = 0;
        while ($tripStartsAt != null) 
        {
            if (isset($tripCards[$tripStartsAt]))
            {
                $output .= ++$loopIndex . "- " . $tripCards[$tripStartsAt]->toString();
                $tripStartsAt = $tripCards[$tripStartsAt]->destinationPoint();
                $output .= $this->getLineBreak();
            }
            else
            {
                $tripStartsAt = null;
            }
        }
        $output .= ++$loopIndex . "- You have arrived at your final destination.";
        $output .= $this->getLineBreak();
        
        return $output;
    }
    
    /**
     * get Line break character
     *
     * @return string
     */
    public function getLineBreak()
    {
        return $this->lineBreak;
    }
    
    /**
     * sets line break type
     *
     * @param string $lineBreak , "br" or "\n"
     */
    public function setLineBreak($lineBreak)
    {
        $this->lineBreak = $lineBreak;
        return $this;
    }
}
