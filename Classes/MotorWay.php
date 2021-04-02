<?php

final class MotorWay extends HighWay
{
    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function addVehicle(Vehicle $vehicle)
    {
        if($vehicle instanceof Car) $this->currrentVehicles[] = $vehicle;
            else  echo "Not the good type - Should be a car ".PHP_EOL;;
    }

}