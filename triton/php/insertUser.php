<?php
include "configuration.php";
    
    
$fname =mysqli_real_escape_string($link,$_POST['fname']);
$lname =mysqli_real_escape_string($link,$_POST['lname']);
$email =mysqli_real_escape_string($link,$_POST['email']);
$uname =mysqli_real_escape_string($link,$_POST['uname']);
$password =mysqli_real_escape_string($link,$_POST['password']);
$passwordMD5=md5($password);
$passwordEncr=hash('sha256',$passwordMD5);

$sql = "INSERT INTO users (first_name, last_name, email,username,password,active) VALUES ('$fname', '$lname', '$email','$uname','$passwordEncr','0')";


if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>