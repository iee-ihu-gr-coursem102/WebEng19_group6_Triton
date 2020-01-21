<?php
require_once("configuration.php");
//code check email

if (!empty($_POST["email"]) && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
	$result = mysqli_query($link, "SELECT count(*) FROM users WHERE email='" . $_POST["email"] . "'");
	$row = mysqli_fetch_row($result);
	$email_count = $row[0];
	if ($email_count > 0) {
		echo '<div id="emaildiv" class="invalid-feedback" style="display:inline"> Email already exist.</div>';
		echo '<script>document.getElementById("regemail").innerHTML = "";</script>';
	} else {
		echo '<div id="emaildiv" class="valid-feedback" style="display:inline"> Email available.</div>';
		echo '<script>document.getElementById("regemail").innerHTML = "";</script>';
	}
} elseif (!empty($_POST["email"]) && !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
	echo '<div id="emaildiv" class="invalid-feedback" style="display:inline"> Enter proper email.</div>';
	echo '<script>document.getElementById("regemail").innerHTML = "";</script>';
}

// End code check email
//Code check user name
if (!empty($_POST["uname"])) {
	$result1 = mysqli_query($link, "SELECT count(*) FROM users WHERE username='" . $_POST["uname"] . "'");
	$row1 = mysqli_fetch_row($result1);
	$user_count = $row1[0];
	if ($user_count > 0) {
		echo '<div id="unamediv" class="invalid-feedback" style="display:inline"> Username already exist.</div>';
		echo '<script>document.getElementById("reguname").innerHTML = "";</script>';
	} else {
		echo '<div id="unamediv" class="valid-feedback" style="display:inline"> Username available.</div>';
		echo '<script>document.getElementById("reguname").innerHTML = "";</script>';
	}
}
// End code check username
