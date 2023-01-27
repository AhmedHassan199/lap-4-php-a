
<?php
session_start();
if(isset($_SESSION['name'])){
       header('location:home.php');
  
       }
       ?>



<h2>login form</h2>
<form method="post" action="">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  password: <input type="password" name="password">
  <br><br>
  <input type="submit" name="submit" value="Submit" >  
</form>
<?php
  
$name= '' ;
$email= '' ;
if(isset($_POST['name'])){
  $_SESSION['name'] = $_POST['name'];
  // $_SESSION['email']= $_POST['email'];
  $email=$_POST['email'];
  $name=$_POST['name'] ;
}
require 'conc.php';
$sql = "SELECT  Name,  Email FROM persons where  Name = '$name' and Email = '$email' ";
$result = $con->query($sql);
//  print_r($result->fetch_assoc()) ;
//  var_dump($result->fetch_assoc()) ;
 if( $result->fetch_assoc()){
  header('location:home.php'); 
}
  else{
  echo " please enter your email and  passward " ;
 }
?>


<!-- // session_start();
// if(isset($_SESSION['name'])){
      //  header('location:home.php');
  
      //  }
// $name= '' ;
// $email= '' ;
// if(isset($_POST['name'])){
//   $_SESSION['name'] = $_POST['name'];
//   // $_SESSION['email']= $_POST['email'];
//   $email=$_POST['email'];
//   $name=$_POST['name'] ;
// }
// require 'conc.php';
// $sql = "SELECT  Name,  Email FROM persons where  Name = '$name' and Email = '$email' ";
// $result = $con->query($sql);
// //  print_r($result->fetch_assoc()) ;
// //  var_dump($result->fetch_assoc()) ;
//  if( $result->fetch_assoc()){
//   header('location:home.php'); 
// }
//   else{
//   echo " please enter your email and  passward " ;
//  }

// while($row = $result->fetch_assoc())
//  {
//   if($name == trim($row['Name'] ) && $email==trim($row['Email']) ){
//     // echo $row['Name'] ;
//      if(isset($_SESSION['name'])){
//     header('location:home.php');

//      }

//   }
//   else{
//     echo "false" ;
//   }

// } -->



