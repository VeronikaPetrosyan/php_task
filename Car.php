<?php


abstract class Car {
    protected $tankVolume;
    protected $carColor;
    public function setTankVolume($volume)
    {
        $this->tankVolume = $volume;
    }

    abstract public function calcNumMilesOnFullTank();
    abstract public function getColor();
}
