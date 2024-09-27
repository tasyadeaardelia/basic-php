<?php

function sum(int $first, int $second)
{
    return $first + $second;
}

$total = sum(10, 10);
var_dump($total);

$total = sum(20, 20);
var_dump($total);

// return type declarations
// function sum (int $first, int $second): int
