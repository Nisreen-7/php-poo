<?php

namespace App\Example;

class Zoo
{
    /**
     * @var $animal[]
     */
    private array $animals = [];
    // ça sera un Animal[]
    public ?Person $guardian;



    public function add(Animal $animal)
    {

        if ($animal instanceof Person) {
            $this->guardian = $animal;
        } else {
            $this->animals[] = $animal;

        }

    }

    public function feedAnimals()
    {
        if (!$this->guardian) {
            echo "il n \'y a pas de gardien de zoo";
            return;

        } else {
            echo "Le {$this->guardian->getLastName()} fait son travail";
        }
        foreach ($this->animals as $item) {

            $item->eat();

        }



    }

    /**
     * @return array
     */
    public function getAnimals(): array
    {
        return $this->animals;
    }

    /**
     * @param array $animals 
     * @return self
     */
    public function setAnimals(array $animals): self
    {
        $this->animals = $animals;
        return $this;
    }
}