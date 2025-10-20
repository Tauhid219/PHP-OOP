<?php 

class Person {
    public $name;
    public $age;
    
    public function details($name, $age) {
        return "Name: " . $name . ", Age: " . $age; 
    }
}

$person = new Person();
echo $person->details('Alice', 30);

?>