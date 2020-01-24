<?php
include "configuration.php";
session_start();

  $myclass = $_POST['myclass'];
  $user = $_SESSION['uname'];
  $id = $_POST['id'];
  $text = $_POST['text'];
  $date = $_POST['date'];
  if ($myclass == "fas fa-heart") {
    mysqli_query($link,"INSERT INTO UserFavEvent (uname, eid) VALUES ('$user', '$id')");
	mysqli_query($link,"INSERT INTO event (id, eve_name, eve_date) VALUES ('$id', '$text', '$date')");
  }
  else if ($myclass == "far fa-heart"){
    mysqli_query($link,"DELETE FROM UserFavEvent WHERE uname = '$user' AND eid = '$id'");
  }
  
 ?>