<?php


/**
 * Reference
 *
 * - Reference adalah mengakses variable yang sama dengan nama variable yang berbeda.
 * - Reference di PHP tidak sama dengan reference di bahasa pemograman seperti C / C++ yang memiliki fitur pointer
 * - Analogi Reference itu seperti file, jika variable adalah file, dan valuenya adalah isi filenya, maka
 * reference adalah membuat shortcut atau alias terhadap file yang sama
 * - Saat kita mengubah isi value dari reference, maka secara otomatis value variable aslinya pun berubah
 * - Untuk membuat reference terhadap variable, kita bisa menggunakan karakter &
 */

$name = 'Eko';
$otherName = &$name;
$otherName = "Budi";

echo $name . PHP_EOL;

function increment(int &$value)
{
    $value++;
}

$counter = 1;
increment($counter);
echo $counter . PHP_EOL;

/**
 * Returning Reference
 *
 * PHP juga bisa mengembalikan reference pada function
 * Namun hati-hati, gunakan fitur ini jika memang ada alasannya, karena fitur ini bisa membingungkan
 *
 */
function &getValue()
{
    static $value = 100;
    return $value;
}

$a = &getValue();
$a = 200;

$b = &getValue();
echo $b = PHP_EOL;