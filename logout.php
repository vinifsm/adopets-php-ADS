<?php
    session_start();
    
    unset($_SESSION['login']);
    unset($_SESSION['pwd']); 

    Header("location: index.php"); 
?>