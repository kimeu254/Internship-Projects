<?php
//global scope variable
//can only be accessed outside a function
$x = 10;

echo "Variable $x can only be accessed here";

//local scope variable only accessible in a function
function localScope() {
    $y = 5;
    echo "Variable $y can only be accessed in this function";
}
localScope();

//The global keyword can be used to access a variable from within a function
function globalKeyword() {
    global $x;
    echo "Variable $x can be used here by use of the global keyword";
}
globalKeyword();
?>