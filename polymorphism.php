<?php

// polymorphism example
class Animal
{
    public function sound()
    {
        return "Some generic animal sound";
    }
}
class Dog extends Animal
{
    public function sound()
    {
        return parent::sound() . " and Bark";
    }
}

$animal = new Dog();
echo $animal->sound();







?>