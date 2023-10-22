<?php 
      include('../controller/sessionCheck.php'); session_start();
?>

<html lang="en">
<head>
    <title>Create User</title>
</head>
<body>
    <a href="home.php">Back</a> |
    <a href="../controller/logout.php">logout</a>

        <form method="post" action="" enctype="">
            <fieldset>
                <legend>Add new</legend>
                Username: <input type="text" name="username" value="" /> <br>
                Password: <input type="password" name="password" value="" /> <br>
                Email: <input type="email" name="email" value="" /> <br>
                <input type="submit" name="submit" value="Add" />
            </fieldset>
        </form>
</body>
</html>