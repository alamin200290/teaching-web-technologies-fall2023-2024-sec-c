<?php 

    if(isset($_REQUEST['username'])){
        $username = $_REQUEST['username'];
        //echo $username;
    }
?>


<html lang="en">
<head>
    <title>PHP Form Sub</title>
</head>
<body>
        <form method="post" action="#" enctype="">
            
            Username: <input type="text" name="username" value="<?php if(isset($username)){echo $username;}?>" /> <br>
            <input type="submit" name="submit" value="Submit" />

        </form>
</body>
</html>