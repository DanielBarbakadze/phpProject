<?php

include_once 'Vehicle.php';

class Hatchback extends Vehicle
{

    private $make;

    private $type = 'Hatchback';

    private $hp;

    private $turbo;

    private $weight;

    private $plus;

    public function __construct($make, $hp, $turbo, $weight)
    {
        $this->make = $make;
        $this->hp = $hp;
        $this->turbo = $turbo;
        $this->weight = $weight;
        parent::__construct($make, $hp, $turbo, $weight);
        $type = $this->type;
        parent::setType($type);
    }

    public function getMake()
    {
        return $this->make;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getHP()
    {
        return $this->hp;
    }

    public function getTurbo()
    {
        return $this->turbo;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function getRank()
    {
        if ($this->getTurbo() === 'Y') {
            $this->plus = 1.5;
        } else $this->plus = 1;
        return ($this->getHP() * 10 - $this->getWeight() * 0.5) * $this->plus;
    }
}