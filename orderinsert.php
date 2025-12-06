<?php
require'config.php';
session_start();
insertdata();

function insertdata()
{
    global $con;
    $mail=$_SESSION['email'];
    $ctgry=$_POST['category'];
    $audi=$_POST['audience'];
    $p_type=$_POST['payment'];
    $p_rice=$_POST['price'];
    $mobile=$_POST['m_number'];
    $k_words=$_POST['key'];
    $des=$_POST['add_d'];
    $d_ate=$_POST['date'];
    $sql="INSERT into orders(order_id,email,category,audience,payment_type,price,m_number,keywords,descript,dates) 
     VALUES('','$mail','$ctgry','$audi','$p_type','$p_rice','$mobile','$k_words','$des','$d_ate')";

    
    /*$sql="INSERT into order(category,audience,payment_type,price,m_number,keywords,	descript,dates)  VALUES('$ctgry','$audi','$p_type','$p_rice','$mobile','$k_words','$des','$d_ate')";*/

    if($con->query($sql))
    {
        echo" Insereted successfully";
        header("Location:orderlist.php");
    }
    else
    {
        echo "ERROR :".$con->error;
    }
}


?>