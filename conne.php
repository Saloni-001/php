<?php
$con= mysqli_connect("localhost","root","","internship");
if($con==true)
{
    echo 'Connection Is Sucessfull';
}else
{
    echo 'Connection Is  Not Sucessfull';
}
?>