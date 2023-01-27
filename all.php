<div>
<a href="form.php">Add New User</a>
<a href="logout.php">logout</a>
<a href="show.php">show details</a>
</div>

<?php
session_start(); 
 if (!isset($_SESSION['name'] )){
  header("location:login.php");
 }
 echo "Hello " .$_SESSION['name'] ;
 ?>

