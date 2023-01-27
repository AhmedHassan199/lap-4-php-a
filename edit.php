<?php
require 'all.php';
?>
<?php
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

<h2>Form</h2>
<form method="post" action="show.php">  

<input type="hidden" name="user_id" value="<?= $row['ID']; ?>">

  Name: <input type="text" value="<?= $row['Name']; ?>" name="name">
  <br><br>
  E-mail: <input type="text" value="<?= $row['Email']; ?>" name="email">
  <br><br>
  Gender:
  <?php  if(($row['Gender'])== "male"){
    $male= "checked";
  }  else {
    $famale = "checked";
  }
    ?>

  <input type="radio"   name="gender"  <?php  echo $famale ?> value="female"  >Female  
  <input type="radio"   name="gender"   <?php echo $male ?> value="male" >Male
  <br><br>
  <?php  
  if(($row['Mail_Status']) == "Agree"){
    $agreement= "checked";
  }  
    ?>
  <input type="checkbox" id="aG" name="Agree" <?php echo $agreement ?> value="Agree" >
  <label for="vehicle1" > Recevie email from us</label><br>
  <br><br>

  <input type="submit" name="edit" value="Edit">  

</form>



