<?php
session_start();
session_unset();
session_destroy();
header("location: /triton/Main%20Page-Unregistered%20User.php");
exit();
?>