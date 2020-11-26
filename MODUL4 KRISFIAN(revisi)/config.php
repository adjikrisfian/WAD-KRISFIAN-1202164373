<?php

$databaseHost = 'localhost';
$databasename = 'wad_modul4';
$databaseusername = 'root';
$databasepassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseusername, $databasepassword, $databasename);

if (mysqli_connect_errno()) {
    echo "error " . mysqli_connect_error();
    exit();
} 
?>