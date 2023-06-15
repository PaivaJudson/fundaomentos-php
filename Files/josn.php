<?php

$pessoa = ['nome'=>'Judson Paiva', 'idade'=>29, 'cidade'=>"Luanda Angola", 'lista'=>[1, 2, 3, 4, 5, 6]];

$objectoJSON = json_encode($pessoa);
echo "<pre>";
var_dump($pessoa);
echo "<br>";
var_dump($objectoJSON);