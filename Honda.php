<?php

require_once ("Car.php");
class Honda extends Car
{
    public function calcNumMilesOnFullTank()
    {
        $miles = $this->tankVolume*30;
        return $miles;
    }

    public function getColor()
    {
        return "blue";
    }
}