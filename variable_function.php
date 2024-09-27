<?php

// variable function adalah kemampuan sebuah function dari value yang terdapat di sebuah variable
// kita bisa secara langsung memanggil $namaVariable() jika ingin menambahkan argument,

function foo()
{
    echo "FOO" . PHP_EOL;
}

function bar()
{
    echo "BAR" . PHP_EOL;
}

$functionName = "foo";
$functionName();

$functionName = "bar";
$functionName();

function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}
sayHello("Tasya", "strtoupper");
sayHello("Tasya", "strtolower");