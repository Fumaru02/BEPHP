<?php

$first = ["first_name" => "Fadilah"];
$last = ["last_name" => "umar"];

$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "Fadilah",
    "last_name" => "umar"
];

$b = [
    "last_name" => "umar",
    "first_name" => "Fadilah"
];

var_dump($a == $b);
var_dump($a === $b);