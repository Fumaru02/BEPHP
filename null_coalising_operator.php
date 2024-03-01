<?php

$data = ["Action" => "Create"];

if (isset($data["actiom"])){
    $action = $data["action"];
}else{
    $action = "nothing";
}

echo $action . PHP_EOL;

//shortcut

$data1 = [];
$action = $data["action"]??"Nothing";

echo $action . PHP_EOL;

