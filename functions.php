<?php
//php has built-in functions called directly to perform a specific task and custom functions

declare(strict_types=1);

function addNumbers(int $a, int $b): int
{
    return $a + $b;
}
echo addNumbers(5, 10);

?>