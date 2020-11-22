<?php 
    if (isset($_GET['logout'])) { 
        session_destroy();
        header('Location:tampilan%201.php'); 
    }   
?>