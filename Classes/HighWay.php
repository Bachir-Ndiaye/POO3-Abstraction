<?php

abstract class HighWay
{
    protected array $currrentVehicles;
    protected int $nbLane;
    protected int $maxSpeed;

    
    abstract public function addVehicle(Vehicle $vehicle);

    /**
     * Get the value of currrentVehicles
     */ 
    public function getCurrrentVehicles()
    {
        return $this->currrentVehicles;
    }

    /**
     * Set the value of currrentVehicles
     *
     * @return  self
     */ 
    public function setCurrrentVehicles($currrentVehicles)
    {
        $this->currrentVehicles = $currrentVehicles;

        return $this;
    }

    /**
     * Get the value of nbLane
     */ 
    public function getNbLane()
    {
        return $this->nbLane;
    }

    /**
     * Set the value of nbLane
     *
     * @return  self
     */ 
    public function setNbLane($nbLane)
    {
        $this->nbLane = $nbLane;

        return $this;
    }

    /**
     * Get the value of maxSpeed
     */ 
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    /**
     * Set the value of maxSpeed
     *
     * @return  self
     */ 
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;

        return $this;
    }
}