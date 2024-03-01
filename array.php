<?php

$values = array(1,2,3,4,5);
var_dump($values);

$name = array('fadilah','umar','dewi');
var_dump($name);

//shotcut array
$komplek = ['ikip','permai','sentra'];
var_dump($komplek);

//akses index array
var_dump($komplek[0]);

//mengubah data array
$komplek[1] = 'Jatikramat';
var_dump($komplek);

//menambah data array dari paling akhir
$komplek[] = 'Jatimekar';
var_dump($komplek);

//menghapus data array index akan ilang bersama dengan datanya maka akan terlongkap
unset($names[1]);

//menghitung total array
var_dump(count($komplek));

//array sebagai map

$umar = array(
    "id" => "Fadilah",
    "Umur" => "24",
    "address" => [
        "city" => "Bekasi",
        "country" => "Indonesia"
    ]
);

//menggunakan square
$budi = [
    "id" => "budi",
    "name" => "nugraha",
];

var_dump($umar);
//get data map

var_dump($umar["id"]);

//get data nested array
var_dump($umar["address"]["country"]);