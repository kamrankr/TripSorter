<?php
use App\Cards\BusBoardingCard;
use App\Cards\FlightBoardingCard;
use App\Cards\TrainBoardingCard;
use App\Trip;

require 'vendor/autoload.php';

 /*
  * Start - Creating different types of cards Flight , Train , Bus
  */
$cards[] = (new FlightBoardingCard())
    ->startPoint('Stockholm')
    ->destinationPoint('New York JFK')
    ->seatNumber('7B')
    ->transportIdentificationNumber('SK22')
    ->gate(22);


$cards[] = (new TrainBoardingCard())
    ->startPoint('Madrid')
    ->destinationPoint('Barcelona')
    ->seatNumber('45B')
    ->transportIdentificationNumber('78A');


$cards[] = (new BusBoardingCard())
    ->startPoint('Barcelona')
    ->destinationPoint('Gerona Airport');

$cards[] = (new FlightBoardingCard())
    ->startPoint('Gerona Airport')
    ->destinationPoint('Stockholm')
    ->seatNumber('3A')
    ->transportIdentificationNumber('SK455')
    ->gate('45B')
    ->baggageCounter(344);

 // shuffle ($cards); // Shuffle cards to test sorting 

 /*
  * New Trip With cards generarted
  */

    $trip = new Trip();
    foreach ($cards as $card)
    {
        $trip->addCard($card);
    }

 /*
  * Sorted Trip cards returned and displayed
  */
    $sortedCards = $trip->sortedTripCards() ;
    foreach ($sortedCards as $journeyCard)
    {
        echo $journeyCard->toString();
        if (php_sapi_name() == "cli") 
        {
            echo PHP_EOL;
        }
        else
        {
            echo "<br />";
        }
        
    }