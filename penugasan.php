<?php

/**
 * Operator Penugasan
 *
 * $a += $b equals with $a = $a + $b
 * $a -= $b equals with $a = $a - $b
 * $a *= $b equals with $a = $a * $b
 * $a /= $b equals with $a = $a / $b
 * $a %= $b equals with $a = $a % $b
 */
$total = 0;
$fruit = 10000;
$chicken = 35000;
$orangeJuice = 1000;

$total += $fruit;
$total += $chicken;
$total += $orangeJuice;

var_dump($total);