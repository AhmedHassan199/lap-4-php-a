<?php
session_start();
$useName = $_POST['name'] ;
$email = $_POST['email'] ;
$gander = $_POST['gender'] ;
$agree = $_POST['Agree'] ;
$_SESSION['username'] = $useName ;
$_SESSION['Email'] = $email ;
$_SESSION['Gander'] = $gander ;
$_SESSION['Agree'] = $agree ;


header('location:insertData.php');









?>