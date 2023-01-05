<?php
require_once("Toyota.php");
require_once ("Honda.php");


$toyota1 = new Toyota();
$toyota1 -> setTankVolume(10);
echo $toyota1->calcNumMilesOnFullTank();

?>
    <br> <br>
<?php

echo $toyota1->getColor();