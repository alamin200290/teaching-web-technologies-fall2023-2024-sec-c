<?php 
   include('../controller/sessionCheck.php');
?>

<html lang="en">
<head>
    <title>View All Users</title>
</head>
<body>

    <a href="home.php">Back</a> |
    <a href="../controller/logout.php">logout</a>

    <br><br>

    <table border="1">
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>EMAIL</td>
            <td>Password</td>
            <td>Action</td>
        </tr>
        <tr>
            <td>1</td>
            <td>ABC</td>
            <td>abc@aiub.edu</td>
            <td>123</td>
            <td>
                <a href="edit_user.php?id=1"> EDIT </a> |
                <a href="delete_user.php"> DELETE </a>
            </td>
        </tr>
        <tr>
            <td>1</td>
            <td>ABC</td>
            <td>abc@aiub.edu</td>
            <td>123</td>
            <td>
                <a href="edit_user.php?id=2"> EDIT </a> |
                <a href="delete_user.php"> DELETE </a>
            </td>
        </tr>
    </table>
</body>
</html>