<?php

use PHPUnit\Framework\TestCase;

/**
 *
 * @author kamran
 */
class FormatterTest extends TestCase
{
    public function testOutputFormatter()
    {
        $mockCard = $this->getMockBuilder("App\Cards\TrainBoardingCard")
                ->disableOriginalConstructor()
                ->getMock();

        $mockCard->method('startPoint')
                ->willReturn('A');
        $mockCard->method('destinationPoint')
                ->willReturn('B');
        $mockCard->method('toString')
                ->willReturn('Train Boarding Card');
            
        $mockTrip = $this->getMockBuilder("\App\Trip")
                    ->getMock();
        $mockTrip->method('startOfJourney')
                ->willReturn('A');
        $mockTrip->method('allBoardingCards')
                ->willReturn(['A' => $mockCard]);
        
        $formatter = new \App\OutputFormat\Formatter();
        
        $formattedOutput =  $formatter->setLineBreak(PHP_EOL)
            ->format($mockTrip);
        
         $this->assertContains("Train Boarding Card", $formattedOutput);
         $this->assertContains("You have arrived at your final destination.", $formattedOutput);
    }
}
