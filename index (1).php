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
            <input type="submit" name="submit" value="submit">
        </form>
    </body>
</html>
<?php
include 'conne.php';
if(isset($_POST["submit"]))
{
    if(!empty($_POST["txtname"]) && !empty($_POST["txtemail"]) && !empty($_POST["txtphone"]))
    {
        $naame=$_POST['txtname'];
        $id=$_POST['txtemail'];
        $no=$_POST['txtphone'];
        if(is_numeric($no) && filter_var($id,FILTER_VALIDATE_EMAIL))
        {
                $ins="insert into tbl_user values('".$naame."','".$id."','".$no."')";
                $rel= mysqli_query($con, $ins);
                if($rel)
                {
                    echo 'Record Inserted'."<br>";
                    echo 'User Name:'.$naame."<br>";
                    echo 'User Email Id:'.$id."<br>";
                    echo 'User Phone No:'.$no."<br>";
                    
                }else
                {
                    echo 'Not Inserted';
                }
        }
    }
}
?>
