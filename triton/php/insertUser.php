<?php
include "configuration.php";
session_start();     
    
$fname =mysqli_real_escape_string($link,$_POST['fname']);
$lname =mysqli_real_escape_string($link,$_POST['lname']);
$email =mysqli_real_escape_string($link,$_POST['email']);
$uname =mysqli_real_escape_string($link,$_POST['uname']);
$password =mysqli_real_escape_string($link,$_POST['password']);
$passwordMD5=md5($password);
$passwordEncr=hash('sha256',$passwordMD5);
$hash = md5( rand(0,1000) );

$sql = "INSERT INTO users (first_name, last_name, email,username,password,active,emailHash) VALUES ('$fname', '$lname', '$email','$uname','$passwordEncr','0','$hash')";


if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

$to      = $email; // Send email to our user
$subject = 'Signup | Verification'; // Give the email a subject 
$message = '
 
Thanks for signing up!
Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
 
------------------------
Username: '.$uname.'
Password: '.$password.'
------------------------
 
Please click this link to activate your account:
localhost/verify.php?email='.$email.'&hash='.$hash.'
 
'; // Our message above including the link
                     
$headers = 'From:eyagstag@gmail.com' . "\r\n"; // Set from headers
mail($to, $subject, $message, $headers); // Send our email

// Close connection
mysqli_close($link);
$_SESSION['uname']=$uname;
header("Location: http://localhost/triton/Main%20Page-Registered%20User.php");
?>