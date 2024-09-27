<?php

// function tanpa nama, di PHP sering disebut juga dengan Closure
// biasanya digunakan sebagai argument atau sebagai value di variable
// membuat kita bisa mengirim function sebagai argument di function lainnya

$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Tasya");

// anonymous sebagai argument
function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good bye $finalName" . PHP_EOL;
}

sayGoodBye("Eko", static function (string $name) {
    return strtoupper($name);
});

// mengakses variable di luar Closure
// secara default, anonymous function tidak bisa mengakses variable yang terdapat di luar function
// jika kita ingin menggunakan variable yang terdapat di luar anonymous function, kita perlu secara
// explicit menyebutkannya menggunakan kata kunci use lalu diikuti variable-variable yang ingin kita gunakan.
$firstName = "Tasya";
$lastName = "Dea Ardelia";

$sayHelloTasya = static function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHelloTasya();

