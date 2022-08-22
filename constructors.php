<?php
//The __construct Function allows you to initialize an object's properties

class Car {
    public $name;
    public $color;

    function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }
    function get_name() {
        return $this->name;
    }
    function get_color() {
        return $this->color;
    }
}

$mercedes = new Car("Mercedes", "black");
echo $mercedes->get_name();
echo "<br>";
echo $mercedes->get_color();
