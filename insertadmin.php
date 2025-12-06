<?php
require'config.php';
session_start();
insertdata();

function insertdata()
{
    global $con;
    $mail=$_POST['email'];
    $fname=$_POST['name'];
    $pw=$_POST['password'];
    $sql="INSERT into admins(admin_ID,email,F_name,pass_word)VALUES('','$mail','$fname','$pw')";


    if($con->query($sql))
    {
        echo" Insereted successfully";
        header("Location:add_admin.php");
    }
    else
    {
        echo "ERROR :".$con->error;
    }
}


?>