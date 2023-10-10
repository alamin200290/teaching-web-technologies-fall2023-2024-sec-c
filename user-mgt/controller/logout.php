<?php 
    session_start();
    //session_destroy();
    //session_unset($_SESSION['flag']);
    unset($_SESSION['flag']);
    header('location: ../view/login.php');
?>