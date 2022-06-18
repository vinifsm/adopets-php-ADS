<?php
    session_start();
    
    unset($_SESSION['login']);
    unset($_SESSION['id']);
    unset($_SESSION['pwd']);
    unset($_SESSION['nivel']); 
    unset($_SESSION['username']);
    unset($_SESSION['telefone']);

    Header("location: index.php"); 
?>