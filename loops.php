<?php
//Loops are used to execute the same block of code when a certain condition is true
$x = 1;
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

//while Loop
while($x <= 100) {
    echo "The number is: $x <br>";
    $x+=10;
}

//do while Loop
do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);

//for Loop
for ($x = 0; $x <= 100; $x+=10) {
    echo "The number is: $x <br>";
}

//foreach Loop
foreach($age as $x => $val) {
    echo "$x = $val<br>";
}

?>