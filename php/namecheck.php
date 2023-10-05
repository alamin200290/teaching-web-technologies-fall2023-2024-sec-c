<?php 

    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if($username == "" || $password == ""){
        echo "null username/password!";
    }else if($username == $password){
        //echo "valid user!";
        header('location: home.php');
    }else{
        echo "invaid user!";
    }
?>