<?php
  
 

  include 'connect.inc.php';


$uid = $_POST['username'];
$pwd = $_POST['pwd'];


$sql = "SELECT * FROM registration WHERE username='$uid' AND cpass='$pwd'";
$result = $conn -> query($sql);

if (!$row = $result -> fetch_assoc()){
  
   header("Location: login.php?error=incorrectUsernamePassword");  
   exit();  
    

    
    
}else{
  $_SESSION['id'] = $row['id'];
  $_SESSION['f_name'] = $row['f_name'];
  $_SESSION['l_name'] = $row['l_name'];    
  header("Location: login.php");    
    
}


?>
