<?php


$url='http://api.openweathermap.org/data/2.5/forecast/?q=thessaloniki&appid=626ed06dc10b472392723ab792c57307&units=metric';
$json=file_get_contents($url);

header('Content-Type: application/json');
$json_pretty = json_encode(json_decode($json), JSON_PRETTY_PRINT);
echo $json_pretty;

?>