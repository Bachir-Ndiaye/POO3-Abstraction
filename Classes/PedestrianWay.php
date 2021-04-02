<?php

final class PedestrianWay extends HighWay
{
    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function addVehicle(Vehicle $vehicle)
    {
        if(($vehicle instanceof Bike) || ($vehicle instanceof Skateboard)) $this->currrentVehicles[] = $vehicle;
            else echo "Not the good type - Shoule be a bike or a skateboard".PHP_EOL;
    }

}