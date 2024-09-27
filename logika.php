<?php

/**
 * $a && $b
 * true jika $a dan $b keduanya true
 *
 * $a and $b
 * true jika $a dan $b keduanya true
 *
 * $a || $b
 * true jika $a dan $b salah satu atau keduanya true
 *
 * $a or $b
 * true jika $a dan $b salah satu atau keduanya true
 *
 * !$a
 * true jika $a bernilai false
 *
 * $a xor $b
 * true jika $a dan $b salah satu true, tapi tidak keduanya
 */

var_dump(true && true);
var_dump(true && false);
var_dump(true || false);
var_dump(true xor true);
var_dump(!true);