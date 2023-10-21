<?php
//kill session
session_start();
$_SESSION["login"] = '';
$_SESSION["email"] = '';
header("Location: ../login.php");
?>