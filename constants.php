<?php

class Animal
{
    const SPECIES = "Canis Lupus Familiaris";
}

class Dog extends Animal
{
    public function getSpecies()
    {
        return self::SPECIES;
    }
}

$dog = new Dog();
echo "Dog Species: " . $dog->getSpecies() . "\n";

// outer the class
echo "Animal Species: " . Animal::SPECIES . "\n";


?>