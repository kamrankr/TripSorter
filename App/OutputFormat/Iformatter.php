<?php
namespace App\OutputFormat;

use App\Trip;

/**
 *
 * @author kamran
 */
interface Iformatter
{
    public function format(Trip $trip);
}
