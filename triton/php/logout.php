<?php
session_start();
session_unset();
session_destroy();
header("location: /webeng19g6/index.php");
exit();
?>