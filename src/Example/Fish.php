<?php

namespace App\Example;

class Fish extends Animal
{
    public bool $inWater;

    public function __construct(bool $inWater = "true")
    {
        $this->inWater = $inWater;

    }


    public function swim(string $name)
    {
        if ($this->inWater == true) {
            echo "{$this->name} je nage";

        } else {
            echo "{$this->name} je peux pas nager hors de l\'eau";

        }
    }
    public function breath()
    {
        if ($this->inWater == true) {
            parent::breath();
        } else {
            echo "je vais bien";
        }

    }
}