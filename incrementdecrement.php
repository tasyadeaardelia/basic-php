<?php

/**
 * $a++
 * Post Increment
 * Kembalikan $a lalu naikan 1 angka
 *
 * ++$a
 * Pre Increment
 * Naikan $a satu angka, lalu kembalikan $a
 *
 * $a--
 * Post Decrement
 * Kembalikan $a lalu turunkan 1 angka
 *
 * --$a
 * Pre Decrement
 * Kurangkan $a satu angka, lalu kembalikan $a
 */

$a = 10;
$b = ++$a;

var_dump($b);
var_dump($a);