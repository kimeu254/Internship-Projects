<?php
//Operators are used to perform operations on variables and values

$x = 10;
$y = 6;

//Arithmetic Operators
function arithmeticOperators() {
    global $x, $y;
    echo $x + $y;
}
arithmeticOperators();

//Assignment Operators
function assignmentOperators() {
    $x = 10;
    $x /= 2;
    echo $x;
}
assignmentOperators();

//Comparison Operators
function comparisonOperators() {
    global $x, $y;
    var_dump($x != $y);
}
comparisonOperators();

//Logical Operators
if ($x == 10 or $y == 8) {
    echo "Hello world!";
}

?>