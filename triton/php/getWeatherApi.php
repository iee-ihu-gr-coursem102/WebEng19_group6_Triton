<?php

$search =$_POST['search'];
$time =$_POST['starttime'];
$date =$_POST['startdate'];
$url='http://api.openweathermap.org/data/2.5/forecast/?q='.$search.'&appid=626ed06dc10b472392723ab792c57307&units=metric';
$json=file_get_contents($url);
$data=json_decode($json,true);
$data['city']['name'];
$temp = array();
foreach($data['list'] as $day => $value) {
	if (gmdate("d-m-y", $value['dt']) == $date)
		if (strtotime(substr($value['dt_txt'],11)) > strtotime($time)) {echo $value['weather'][0]['description']; break;}
}
?>