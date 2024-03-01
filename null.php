<?php

$name = 'umar';
$name = null;

$age = null;

echo "Name : ";
echo $name;
echo "\n";

//check tipe data is null?
echo is_null($age);
var_dump(is_null($age));

//menghapus variable

$contoh = "Umar";
unset($contoh);

echo $contoh;

$contoh = "fadilah";
//better gunakan isset untuk mengecek sebuah variable
var_dump(isset($contoh));