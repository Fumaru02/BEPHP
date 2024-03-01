<?php

//default value
function sayHello($name="umar"){
    echo "Hello $name". PHP_EOL;
}

sayHello("Fadilah");
sayHello(2);


//type declaration
function sum(int $first, int $last){
$total = $first + $last;
echo "Total $first + $last = $total";
}

sum(100,100);
sum("100","100");
sum(true,false);
// sum([],[]);

//variable-length argument list

function sumAll(...$values){
    $total = 0;
    foreach ($values as $value){
        $total += $value;
    }
    echo "Total " . implode(",", $values) . " = $total". PHP_EOL;
}

sumAll(1,2,3,4,5);

