<?php 
   require_once('../controller/sessionCheck.php');
   require_once('../model/userModel.php');
   $users = getAllUser();
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

<?php for($i=0; $i<count($users); $i++){ ?>
        <tr>
            <td><?=$users[$i]['id']?></td>
            <td><?=$users[$i]['username']?></td>
            <td><?=$users[$i]['email']?></td>
            <td><?=$users[$i]['password']?></td>
            <td>
                <a href="edit_user.php?id=<?=$users[$i]['id']?>"> EDIT </a> |
                <a href="delete_user.php?id=<?=$users[$i]['id']?>"> DELETE </a>
            </td>
        </tr>

<?php } ?>
    </table>
</body>
</html>