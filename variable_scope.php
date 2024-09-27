<?php

/**
 * Global Scope
 *
 * - dibuat di luar function memiliki scope global
 * - hanya bisa diakses dari luar function
 */

$name = 'Eko';
function sayName()
{
    echo $name; // error
}
sayName();

/**
 * Local Scope
 *
 * - dibuat di dalam function
 * - hanya bisa diakses dari dalam function itu sendiri
 */

function createName()
{
    $nameIn = 'Eko';
}
createName();;
echo $nameIn; // error

/**
 * Global keyword
 *
 * namun jika kita ingin mengakses variable diluar function (global scope) dari dalam function, kita bisa menggunakan
 * kata kunci global
 * dengan menggunakan kata kunci global, maka kita bisa mengakses variabel yang ada di dalam global scope dari dalam function
 */
$name2 = 'Eko';
function sayName2()
{
    global $name2;
    echo "Hello $name2" . PHP_EOL;
}
sayName2();

/**
 * $GLOBAL Variable
 *
 * - setiap variable yang dibuat di global scope, secara otomatis akan disimpan dalam array $GLOBAL oleh PHP
 * - $GLOBAL adalah variable yang bersifat superglobal, artinya bisa diakses dari scope manapun
 */
$name3 = 'Eko';
function sayName3()
{
    echo "Hello {$GLOBALS['name']}" . PHP_EOL;
}
sayName3();

/**
 * Static Scope
 *
 * - Secara default local variable itu siklus hidupnya hanya sebatas functionnya dieksekusi
 * - Jika function selesai dieksekusi, maka siklus hidup local variable nya selesai
 * - PHP memiliki scope yang bernama static
 * - Static scope hanya bisa di set ke local variable
 * - Saat kita membuat seuah local variable menjadi static, maka siklus hidupnya tidak akan berhenti ketika sebuah function selesai dieksekusi
 * - Artinya jika function tersebut dieksekusi lagi, maka static variable tersebut akan memiliki value dari sebelumnya
 */

function increment()
{
    static $counter = 1;
    echo "Counter : $counter" . PHP_EOL;
    $counter++;
}
increment();
increment();
increment();