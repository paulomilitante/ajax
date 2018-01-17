<?php

$index = $_GET['index'];

$string = file_get_contents('assets/items.json');
$items = json_decode($string,true);

array_splice($items, $index, 1); 

$file = fopen('assets/items.json','w');
fwrite($file, json_encode($items,JSON_PRETTY_PRINT));
fclose($file);

header("location: items.php");



?>