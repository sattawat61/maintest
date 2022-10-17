<?php
// prepare database connection variables
$db_host = 'localhost';
$db_name = 'dbmember2';
$db_user = 'root';
$db_pass = '';
$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
mysqli_set_charset($conn,"utf8");
date_default_timezone_set("Asia/Bangkok");
    if(mysqli_connect_errno()){
        echo "Database Connect Failed : " . mysqli_connect_error();
    }else{
        // echo "Database Connected";
    }
?>