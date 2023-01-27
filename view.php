


<?php
require 'all.php';

$male= '';
$famale= '';
$agreement = '' ;
require 'conc.php';
if(isset($_GET['id'])){
    $user_id = $_GET['id'];
    $query="select* from persons where ID = '$user_id'";
    $result=$con->query($query);
    
    $row=$result->fetch_assoc();
}
?> 

<h2>View data</h2>
<form method="post" action="show.php">  
  Name:
  <p>  <?php  echo $row['Name']; ?>  </p>
  <br><br>
  E-mail: 
  <p>  <?php  echo $row['Email']; ?>  </p>

  <br><br>
  Gender:
  <p>  <?php  echo $row['Gender']; ?>  </p>

  <br><br>
  Mail_Status:
  <p>  <?php  echo $row['Mail_Status']; ?>  </p>
  <br> <br>
  <button > <a href="show.php"></a> Back</button>



