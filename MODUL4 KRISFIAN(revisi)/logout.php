<?php
session_start();
$_SESSION['session_Submit']= '';
unset($_SESSION['session_Submit']);
session_unset();
session_destroy();
header("location:tampilan%201.php");
?>