<?php
require 'config.php'; 
session_start();
insertdata();

function insertdata()
{
    global $con;
    $mail = $_SESSION['email'];
    $cname = $_POST['company'];
    $ctgry = $_POST['category'];
    $rate = $_POST['rate']; 
    $sql = "INSERT INTO portfolio (p_id, company_name, category, ratings) 
            VALUES ('', '$cname', '$ctgry', '$rate')";

    if ($con->query($sql)) {
        echo "Inserted successfully";
        header("Location: admin_portfolio.php");
        exit; 
    } else {
        echo "ERROR: " . $con->error;
    }
}
?>
