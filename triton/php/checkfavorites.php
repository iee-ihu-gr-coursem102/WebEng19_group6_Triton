<?php
include "configuration.php";
session_start();


  $user = $_SESSION['uname'];
  $id = $_POST['id'];
  
if ($stmt = $link->prepare('SELECT * FROM UserFavEvent WHERE uname = ? AND eid = ? ')) {
	 
	$stmt->bind_param('si', $user , $id);
	$stmt->execute();
	$stmt->store_result();
}

if ($stmt->num_rows > 0){
	echo "fav";
} else {echo "notfav";}

  
 ?>