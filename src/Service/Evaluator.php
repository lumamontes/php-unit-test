<?php 

namespace Alura\Auction\Service;

use Alura\Auction\Model\Auction;

class Evaluator 
{
    private $highestValue;

    public function evaluate(Auction $auction): void
    {
        $bids = $auction->getBids();
        $lastBid = $bids[count($bids) - 1];
        $this->highestValue = $lastBid->getValue();
        
    }

    public function getHighestValue(): float
    {
        return $this->highestValue;
    }
}