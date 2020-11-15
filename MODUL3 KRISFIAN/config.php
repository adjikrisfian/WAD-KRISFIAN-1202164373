<?php
$host = 'localhost'; 
$username = 'root'; 
$password = ''; 
$database = 'event_table'; 

$pdo = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);
?>
