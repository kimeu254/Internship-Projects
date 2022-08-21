<?php
//To create a constant, use: define(name, value, case-insensitive) function
//This is a case-insensitive constant
define("GREETING", "Hello there php user!", true);

//constants are global and can be used inside functions
function myConstant() {
    echo greeting;
}
myConstant();

?>