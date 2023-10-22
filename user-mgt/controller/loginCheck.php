<?php 
    session_start();
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];


    if($username == "" || $password == ""){
        echo "null username/password!";   
    }else{
        $con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
        $sql = "select * from users where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            $_SESSION['flag'] = "true";
            header('location: ../view/home.php');
        }else{
            echo "invaid user!";
        }
    }
?>