<?php
session_start();
unset($_SESSION['ses_user']);
session_destroy();
header("location:login.php");
?>