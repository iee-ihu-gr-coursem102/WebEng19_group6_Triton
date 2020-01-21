<?php

$url = 'http://api.openweathermap.org/data/2.5/forecast?q=Thessaloniki&appid=626ed06dc10b472392723ab792c57307';

$data = file_get_contents($url);

$array = json_decode($data);
//echo json_encode($array);

//$metroAreaId=$obj['resultsPage']['results']['location'][0]['metroArea']['id'];
//echo $metroAreaId;

//$eventData=json_decode($eventData);
header('Content-Type: application/json');
//$json_pretty = json_encode(json_decode($data), JSON_PRETTY_PRINT);

$i=0;
for($i=0;$i<40;$i++){
    $date = new DateTime();
    $value=$array->list[$i]->dt;
    $date=date('d-m-Y', $value);
    $weather=$array->list[$i]->weather;
    //echo $date;
     echo json_encode($weather);
}

//$json_pretty_time = json_encode(($array), JSON_PRETTY_PRINT);
//echo $json_pretty_time;

//echo $json_pretty;
//echo date("Y-m-d\TH:i:s\Z", $getDate);
//echo $getDate;
?>