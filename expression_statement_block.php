<?php

/**
 * Expression
 * Di PHP, hampir semua kode yang kita tulis adalah sebuah expression
 * Secara sederhana, expression adalah apapun yang memiliki nilai atau value
 *
 * $a = 5; Ketika kitta menuliskan "5" maka tentu itu adalah nilai, oleh karena itu 5 tersebut adalah expression.
 * Lalu kita menulis $b = $a; $a bisa kita bila expression. Karena $a adalah nilai 5
 */

$a = 5;
$b = $a;

function getValue()
{
    return 100;
}

$value = getValue();

/** Pada contoh diatas, getValue() adalah expression, karena getValue() bernilai angka 100 */

/**
 * Statement
 * berisikan execution komplit, biasanya diakhiri dengan titik koma
 */

$name = "Eko Kurniawan Khannedy";
echo $name;
$date = new DateTime();

/**
 * Block
 * kumpulan statement yang terdiri dari nol atau lebih statement
 * diawali dan diakhiri dengna kurung kurawal {}
 */

function runApp($name)
{
    echo "Start Program" . PHP_EOL;
    echo "Hello $name" . PHP_EOL;
    echo "End Program" . PHP_EOL;
}
