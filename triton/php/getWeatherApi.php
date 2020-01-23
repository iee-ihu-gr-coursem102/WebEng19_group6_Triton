<?php

$search =$_POST['w'];
$url='http://api.openweathermap.org/data/2.5/forecast/?q='.$search.'&appid=626ed06dc10b472392723ab792c57307&units=metric';
$json=file_get_contents($url);
$data=json_decode($json,true);
$data['city']['name'];
$temp = array();
foreach($data['list'] as $day => $value) {
   $temp[]=array(gmdate("d-m-Y", $value['dt']),$value['weather'][0]['description']);
}

//$json_pretty = json_encode(json_decode($temp), JSON_PRETTY_PRINT);
echo json_encode($temp);
?>