<?php

use App\Cards\BusBoardingCard;
use App\Cards\FlightBoardingCard;
use App\Cards\TrainBoardingCard;
use App\Trip;

require 'vendor/autoload.php';

/*
 * Start - Creating different types of cards Flight , Train , Bus
 */

$cards = [];

$cards[] = (new FlightBoardingCard('Stockholm', 'New York JFK'))
    ->seatNumber('7B')
    ->transportIdentificationNumber('SK22')
    ->gate(22);


$cards[] = (new TrainBoardingCard('Madrid', 'Barcelona'))
    ->seatNumber('45B')
    ->transportIdentificationNumber('78A');


$cards[] = (new BusBoardingCard('Barcelona', 'Gerona Airport'));

$cards[] = (new FlightBoardingCard('Gerona Airport', 'Stockholm'))
    ->seatNumber('3A')
    ->transportIdentificationNumber('SK455')
    ->gate('45B')
    ->baggageCounter(344);

// shuffle($cards); // Shuffle cards to test sorting

/*
 * New Trip With cards generarted
 */

$trip = new Trip();
foreach ($cards as $card)
{
    $trip->addCard($card);
}


// get all added boarding cards, keyed by departure and value is card object
$tripCards = $trip->allBoardingCards();

// getting the start of journey, as all journeys are connected only start of journey is required to traverse
$tripStartsAt = $trip->startOfJourney();

while ($tripStartsAt != null)
{
    if (isset($tripCards[$tripStartsAt]))
    {
        echo $tripCards[$tripStartsAt]->toString();
        if (php_sapi_name() == "cli")
        {
            echo PHP_EOL;
        }
        else
        {
            echo "<br />";
        }
        $tripStartsAt = $tripCards[$tripStartsAt]->destinationPoint();
    }
    else
    {
        $tripStartsAt = null;
    }
}

echo "You have arrived at your final destination.";
echo PHP_EOL;
