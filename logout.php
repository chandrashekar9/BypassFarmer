<?php
session_start();
session_destroy();
unset($_SESSION['Email']);
header("Location: bypassfarmer_loginuser.php");
?>