<?php

final class ResidentialWay extends HighWay
{
    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function addVehicle(Vehicle $vehicle)
    {
        if($vehicle instanceof Vehicle) $this->currrentVehicles[] = $vehicle;
            else  echo "Not the good type - Should be a vehicle ".PHP_EOL;
    }

}