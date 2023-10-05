<?php 
    session_start();
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if($username == "" || $password == ""){
        echo "null username/password!";
    }else if($username == $password){
        //echo "valid user!";
        $_SESSION['flag'] = "true";
        header('location: home.php');
    }else{
        echo "invaid user!";
    }
?>