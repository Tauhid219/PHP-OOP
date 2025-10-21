<?php

namespace App\Inheritance;

// inheritence 

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
        return Parent::sound() . " and Bark";
    }
}

$animal = new Dog();
echo $animal->sound();



?>