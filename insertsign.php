<?php
require'config.php';
insertdata();

function insertdata()
{
    global $con;
    $fnam=$_POST['fname'];
    $lnam=$_POST['lname'];
    $gend=$_POST['Gender'];
    $number=$_POST['m_number'];
    $email=$_POST['mail'];
    $address=$_POST['adrs'];
    $dat=$_POST['date'];
    $psword=$_POST['pw'];
    $sql="INSERT into user(F_name,L_name,gender,mobile_num,email,addresses,dob,passwords)  VALUES('$fnam','$lnam','$gend','$number','$email','$address','$dat','$psword')";

    if($con->query($sql))
    {
        echo" Insereted successfully";
        header("Location: login.php");
    }
    else
    {
        echo "ERROR :".$con->error;
    }
}


?>