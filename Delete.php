<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="" method="POST">
            <label>Email Id</label>
            <input name="txtemail" type="text"></br>
            <input type="submit" name="delete" value="delete">
        </form>
    </body>
</html>

<?php
include 'conne.php';
if(isset($_POST["delete"]))
{
    $de=$_POST['txtemail'];
    $del="delete from tbl_user where email='$de'";
$re= mysqli_query($con, $del);
if($re)
{
    echo 'Deleted';
} else {
    echo 'Not Deleted';
}

    
}
?>