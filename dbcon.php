<?php 
$dbhost = "remotemysql.com";
$username = "LhkE5FiUVM";
$password = "MLMH4DR2Ol";
$db = 'LhkE5FiUVM';
$con = mysqli_connect($dbhost , $username , $password , $db); 
if($con){
    // echo "connection success";
        }
        else{
           echo "conncetion failed";
           }
?>