<?php
//Static methods and properties are declared with the static keyword

class greeting {
    public static function welcome() {
        echo "Welcome to your static method tutorial!";
    }
}

// Call static method
greeting::welcome();

class pi {
    public static $value = 3.14159;
}

// Get static property
echo pi::$value;