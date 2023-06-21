<?php

namespace App\Example;

class Fish extends Animal
{
    public bool $inWater;

    public function __construct(bool $inWater = true)
    {
        parent::__construct("Poisson Memo");


    }


    public function swim(string $name)
    {
        if ($this->inWater) {
            echo "{$this->name} je nage";

        } else {
            echo "{$this->name} je peux pas nager hors de l\'eau";

        }
    }
    public function breath()
    {
        if ($this->inWater) {
            parent::breath();
        } else {
            echo "je vais bien";
        }

    }
}