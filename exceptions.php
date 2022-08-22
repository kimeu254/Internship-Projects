<?php
//An exception is an object that describes an error or unexpected behaviour of a PHP script
//Show a message when an exception is thrown
function divide($dividend, $divisor) {
    if($divisor == 0) {
        throw new Exception("Division by zero");
    }
    return $dividend / $divisor;
}

try {
    echo divide(5, 0);
} catch(Exception $e) {
    echo "Unable to divide.";
}