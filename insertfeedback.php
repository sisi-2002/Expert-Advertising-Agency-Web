<?php
require'config.php';
session_start();
insertdata();

function insertdata()
{
    global $con;
    $mail=$_SESSION['email'];
    $n_ame=$_POST['name'];
    $Phone_n=$_POST['phone'];
    $f_back=$_POST['feedback'];
    $sql="INSERT into feedback(feedback_id,email,names,phone_number,feedback) 
     VALUES('','$mail','$n_ame','$Phone_n','$f_back')";

    
    /*$sql="INSERT into order(category,audience,payment_type,price,m_number,keywords,	descript,dates)  VALUES('$ctgry','$audi','$p_type','$p_rice','$mobile','$k_words','$des','$d_ate')";*/

    if($con->query($sql))
    {
        echo" Insereted successfully";
        header("Location:feedback.php");
    }
    else
    {
        echo "ERROR :".$con->error;
    }
}


?>