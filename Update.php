<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="" method="POST">
            <label>Name</label>
            <input name="txtname"  type="text"></br>
            <label>Email Id</label>
            <input name="txtemail" type="text"></br>
            <label>Phone No</label>
            <input name="txtphone" type="text"></br>
            <input type="submit" name="Update" value="Update">
        </form>
    </body>
</html>

<?php
include 'conne.php';
if(isset($_POST["Update"]))
{
    $nme=$_POST['txtname'];
    $uid=$_POST['txtemail'];
    $uno=$_POST['txtphone'];
    $ud="update tbl_user set name='$nme',phone='$uno' where email='$uid'";
    $res= mysqli_query($con, $ud);
    if($res)
    {
        echo 'Updated';
        echo 'User Name:'.$nme."<br>";
        echo 'User Email Id:'.$uid."<br>";
        echo 'User Phone No:'.$uno."<br>";
    }else
    {
        echo 'Not Updated';
    }
        
}
?>
