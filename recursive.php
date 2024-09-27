<?php


// function yang memanggil function dirinya sendiri
function factorialLoop(int $value)
{
    $total = 1;
    for ($i = 1; $i <= $value; $i++) {
        $total *= $i;
    }
    return $total;
}
var_dump(factorialLoop(6));

function factorialRecursive(int $value): int
{
    if ($value === 1) {
        return 1;
    } else {
        return $value * factorialRecursive($value - 1);
    }
}
var_dump(factorialRecursive(6));

/**
 * Problem dengan Recursive
 *
 * Jika recursive terlalu dalam, maka akan ada kemungkinan terjadinya memory overflow yaitu error dimana
 * memory terlalu banyak digunakan di PHP
 * Kenapa bisa terjadi? karena ketika kita memanggil function, PHP akan menyimpannya dalam stack.
 * Jika function tersebut memanggil function lain, maka stack akan menumpuk terus. dan
 * jika terlalu banyak, maka akan membutuhkan konsumsi memory besar jika sudah melewati batas maka akan terjadi error memory
 */
function loop (int $value)
{
    if ($value == 0) {
        echo "Selesai" . PHP_EOL;
    } else {
        echo "Loop-$value" . PHP_EOL;
        loop($value - 1);
    }
}
loop (3000000);