<?php

function sayHello()
{
    echo "Hello function" . PHP_EOL;
}

sayHello();
sayHello();

// Function Argument
// bisa kirim informasi ke function
function sayHelloWithArgument($name)
{
    echo "Hello $name" . PHP_EOL;
}

sayHello("Tasya");

// default argument value
// function sayHelloWithDefaultArgument($name = "Tasya")
// Default argument value bisa disimpan argument manapun
// namun jika argument lebih dari satu, dan kita menyimpan default argument value di parameter awal, maka itu kurang berguna
//
function wrongDefaultArgument($firstName = "Anonymous", $lastName)
{
    echo "Hello $firstName $lastName" . PHP_EOL;
}
wrongDefaultArgument("Kurniawan");

/**
 * Type Declaration
 *
 * Valid Types
 * - Class
 *      Parameter harus tipe Class / Interface
 * - Self
 *      Parameter harus sama dengan Class dimana function ini di buat
 * - array
 *      Parameter harus array
 * - callable
 *      Parameter harus callable
 * - bool
 *      Parameter harus boolean
 * - float
 *      Parameter harus floating point
 * - int
 *      Parameter harus integer number
 * - string
 *      Parameter harus string
 * - interable
 *      Parameter harus array atau tipe Traversable
 * - Object
 *      Parameter harus sebuah object
 *
 */

/**
 * Variable-length Argument List
 *
 * - kemampuan dimana kita bisa membuat sebuah parameter yang menerima banyak value
 * - otomatis membuat argument tersebut menjadi array, namun tidak perlu manual mengirim array ke functionnya
 * - hanya bisa dilakukan di argument posisi terakhir
 * - gunakan tanda ... (titik tiga kali) sebelum nama argument untuk membuat variable-length argument list
 */
function sumAll(...$values)
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total " . implode(" + ", $values) . " = $total" . PHP_EOL;
}

sumAll(10, 20, 30, 40);
sumAll(...[10, 20, 30, 40]);