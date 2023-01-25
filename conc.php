<?php
//info
$serverName="localhost";
$dbuser="root";
$dbpassword="";
$dbname="phplab4";
//connect to db server
$con=new mysqli($serverName,$dbuser,$dbpassword,$dbname);//oop

//check if error 
if($con->connect_error)
{
    die("details ".$con->connect_error);
}


?>