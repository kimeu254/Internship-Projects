<?php
//Conditional Statements
$time = date("H");
$favoriteColor = "red";

//if Statement
if ($time < "20") {
    echo "Have a good day!";
}

//if...else Statement
if ($time < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}

//if...elseif...else Statement
if ($time < "10") {
    echo "Have a good morning!";
} elseif ($time < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}

//switch Statement

switch ($favoriteColor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}