<?php 
    session_start();
    if(!isset($_SESSION['flag'])){
        header('location: login.php');
    }

?>

<html lang="en">
<head>
    <title>Home Page</title>
</head>
<body>
    <h1>Welcome Home!</h1>
    <a href="view_users.php">View Users</a> |
    <a href="create_user.php">Create user</a> |
    <a href="../controller/logout.php">logout</a>
</body>
</html>