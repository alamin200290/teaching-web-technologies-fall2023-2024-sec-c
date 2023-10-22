<?php 

    $con = mysqli_connect('localhost', 'root', '', 'webtech');

    // if($con){
    //     echo "Success";
    // }else{
    //     echo "Error";
    // }

    $sql = "select * from users";
    $result = mysqli_query($con, $sql);
    //print_r($result);
    //$data = mysqli_fetch_assoc($result);
    //print_r($data);
    //$count = mysqli_num_rows($result);
    //echo $count;

    /* echo "<table border=1>
                <tr>
                    <td>ID</td>
                    <td>Username</td>
                    <td>Email</td>
                </tr>";

    while($data = mysqli_fetch_assoc($result)){
        echo "<tr>
                <td>{$data['id']}</td>
                <td>{$data['username']}</td>
                <td>{$data['email']}</td>
            </tr>";
    }

    echo "</table>"; */
?>


<table border=1>
    <tr>
        <td>ID</td>
        <td>Username</td>
        <td>Email</td>
    </tr>

<?php    while($data = mysqli_fetch_assoc($result)){ ?>
        <tr>
            <td><?=$data['id']?></td>
            <td><?=$data['username']?></td>
            <td><?=$data['email']?></td>
        </tr>
<?php    } ?>

</table>