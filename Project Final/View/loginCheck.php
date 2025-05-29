<?php
 session_start();
 if (isset($_SESSION['status']) && $_SESSION['status'] === true){
   // header('location: ../Control/userLogin.php');
       header('location: ../View/login.html');
       exit();

 }
 else{ 
    header('location: ../View/home.php');
    exit();
 }