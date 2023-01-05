<?php

require_once("Car.php");
class Toyota extends Car
{
    public function calcNumMilesOnFullTank()
    {
        return $miles = $this->tankVolume*33;
    }

    public function getColor()
    {
        return "beige";
    }
}

