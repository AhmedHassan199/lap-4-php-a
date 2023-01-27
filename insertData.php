<?php
require 'all.php';
?>
<?php
$useName = $_SESSION['username']  ;
$email= $_SESSION['Email']  ;
$gander = $_SESSION['Gander']  ;
if (empty($_SESSION['Agree'])){
    $_SESSION['Agree'] = 'not agree';
}
$agree= $_SESSION['Agree']  ;


require 'conc.php';
$query="INSERT INTO persons( Name , Email ,  Gender ,Mail_Status)
VALUES('$useName ','$email','$gander','$agree')";

if($con->query($query)==true)
 {
     echo "Hello $useName <br/>";
 }else 
 {
      die("details ".$con->error);
 }
?>
<a href="show.php"> show all user details</a>