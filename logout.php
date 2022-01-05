<?php
session_start();
unset($_SESSION["customername"]);
unset($_SESSION["password"]);
header("Location:login.php");
?>
