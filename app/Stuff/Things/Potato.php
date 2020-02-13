<?php

namespace App\Stuff\Things;

class Potato
{
    private $timesWatered = 0;

    public function water()
    {
        $this->timesWatered = $this->timesWatered + 1;
        return $this;
    }

    public function hasGrown() : bool
    {
        if($this->timesWatered >= 5){
            return true;
        }
        else{
            return false;
        }
    }
}