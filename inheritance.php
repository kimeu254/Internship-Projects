<?php
//Inheritance is when a class derives from another class
class Seed {
    public $name;
    public $color;
    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }
    public function intro() {
        echo "The seed is {$this->name} and the color is {$this->color}.";
    }
}

// Maize is inherited from Fruit
class Maize extends Seed {
    public function message() {
        echo "Is it a fruit or a seed? ";
    }
}
$maize = new Maize("Maize", "white");
$maize->message();
$maize->intro();