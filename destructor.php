<?php
//The __destruct Function is called when the object is destructed or the script is stopped or exited

class Bourbon {
    public $name;
    public $color;
    public $origin;

    function __construct($name, $origin) {
        $this->name = $name;
        $this->origin = $origin;
    }
    //Destructor
    function __destruct() {
        echo "The brand is {$this->name} and its origin is {$this->origin}.";
    }
}

$glenfiddich = new Bourbon("Glenfiddich", "Scotland");