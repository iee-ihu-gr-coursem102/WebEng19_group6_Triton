<?php

$url = 'http://api.openweathermap.org/data/2.5/forecast?q=Thessaloniki&appid=626ed06dc10b472392723ab792c57307';

$data = file_get_contents($url);

$obj = json_decode($data,true);

//$metroAreaId=$obj['resultsPage']['results']['location'][0]['metroArea']['id'];
//echo $metroAreaId;

//$eventData=json_decode($eventData);
header('Content-Type: application/json');
$json_pretty = json_encode(json_decode($data), JSON_PRETTY_PRINT);

$getDate=$obj['list'][0]['dt'];

echo $json_pretty;
echo date("Y-m-d\TH:i:s\Z", $getDate);
//echo $getDate;
?>