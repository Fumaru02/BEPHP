<?php

$name = "fadilah umar";

echo "Nama : " . $name . PHP_EOL; 

$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);


$valueFloat = (float)"1.02";
var_dump($valueFloat);

$name = "umar";
echo $name[0];
echo $name[1];
echo $name[2];

//variable parsing
echo "Fadilah $name";
//curly brace
echo "Fadilah ${name}s";
