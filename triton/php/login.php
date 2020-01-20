<?php
include "configuration.php";

// Initialize the session
session_start();

if ($stmt = $link->prepare('SELECT id, password FROM users WHERE username = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_POST['lusername']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();
}

if ($stmt->num_rows > 0) {
	$stmt->bind_result($id, $password);
	$stmt->fetch();
    $logpassword=$_POST['lpassword'];
    $logpassword=md5($logpassword);
    $logpasswordencr=hash('sha256',$logpassword);
	// Account exists, now we verify the password.
	// Note: remember to use password_hash in your registration file to store the hashed passwords.
	if ($logpasswordencr==$password) {
        echo "success";
		// Verification success! User has loggedin!
		// Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.
		session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['name'] = $_POST['lusername'];
		$_SESSION['id'] = $id;
		echo 'Welcome ' . $_SESSION['name'] . '!';
        header("Location: /triton/Main%20Page-Registered%20User.php");
	} else {
		$_SESSION["errorMessage"] = "Λάθος Username ή Password";
		header("location: /triton/Main%20Page-Unregistered%20User.php");
	}
} else {
	$_SESSION["errorMessage"] = "Λάνθασμένο Username ή Password";
	header("location: /triton/Main%20Page-Unregistered%20User.php");
}
	$stmt->close();
?>