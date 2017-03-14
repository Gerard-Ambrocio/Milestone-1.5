<?php

$key = $_GET['key'];

$Cooking = file_get_contents('items.json');
$Cooking = json_decode($Cooking,true);

unset($Cooking[$key]);

$fp = fopen('items.json', 'w');
fwrite($fp, json_encode($Cooking, JSON_PRETTY_PRINT));
fclose($fp);

header('location:shop.php#blank');

?>