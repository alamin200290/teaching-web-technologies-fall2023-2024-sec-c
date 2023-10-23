<?php 
    session_start();
    require_once('../model/userModel.php');
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];


    if($username == "" || $password == ""){
        echo "null username/password!";   
    }else{
        
        $status = login($username, $password);
        if($status){
            $_SESSION['flag'] = "true";
            header('location: ../view/home.php');
        }else{
            echo "invaid user!";
        }
    }
?>