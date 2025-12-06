<?php
require'config.php';


function readdata()
{
    global $con;
   

    $sql="SELECT F_name,L_name,gender,mobile_num,email,addresses,dob,passwords	 FROM user";
    $result=$con->query($sql);

    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
            echo "First name :".$row["F_name"]."<br>"."Last name :".$row["L_name"]."gender :".$row["gender"]."mobile number :".$row["mobile_num"]."email :".$row["email"]."addresses :".$row["addresses"]."dob :".$row["dob"]."passwords :".$row["passwords"]."<br>";
        }
    }    
    else
        {
            echo "No result";
        }
        $con->close();
    
}
?> 