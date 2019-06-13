<?php

abstract class Vehicle
{

    private $make;

    private $type;

    private $hp;

    private $turbo;

    private $weight;

    public function __construct($make,$hp,$turbo,$weight)
    {
        $this->make = $make;
        $this->hp = $hp;
        $this->turbo = $turbo;
        $this->weight = $weight;
    }

    protected function setType($type)
    {
        $this->type = $type;
    }

}