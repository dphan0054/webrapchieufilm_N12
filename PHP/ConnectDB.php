<?php
    $servername="localhost";
    $username="root";
    $password="";
    $db_name="db_vexemphim";
    $conn=new mysqli($servername,$username,$password,$db_name);
    if($conn->connect_error){
        die("Connection faile:".$conn->connect_error);
    }
    mysqli_set_charset($conn,'utf8');
 ?>