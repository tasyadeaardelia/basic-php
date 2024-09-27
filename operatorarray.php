<?php

/**
 * $a + $b
 * Union
 * Menggabungkan array $a dan $b
 *
 * $a == $b
 * Equality
 * true jika $a dan $b memiliki key-value sama
 *
 * $a === $b
 * Identity
 * true jika $a dan $b memiliki key-value sama dan posisi sama
 *
 * $a != $b
 * Inequality
 * true jika $a dan $b tidak sama
 *
 * $a <> $b
 * Inequality
 * true jika $a dan $b tidak sama
 *
 * $a !== $b
 * Nonidentity
 * true jika $a dan $b tidak identik
 */

$first = [
    "first_name" => "Eko"
];

$last = [
    "last_name" => "Khannedy"
];

var_dump($first + $last);

$a = [
    "first_name" => "Eko",
    "last_name" => "Khannedy"
];

$b = [
    "last_name" => "Khannedy",
    "first_name" => "Eko"
];

var_dump($a == $b);
var_dump($a === $b);