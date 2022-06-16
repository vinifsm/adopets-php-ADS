<?php
  session_start(); 
   if (!isset($_SESSION['login']))
       Header("Location: index.php");   
?> 