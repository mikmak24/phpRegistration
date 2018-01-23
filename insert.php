<?php

 include 'connect.inc.php';

 $usn = $_POST['username'];
 $email = $_POST['email'];
 $pass =   $_POST['pass'];
 $cpass = $_POST['cpass'];


 $fname = $_POST['f_name'];
 $lname = $_POST['l_name'];
 $cnumber = $_POST['c_number'];
 $address= $_POST['address'];
 $city= $_POST['city'];
 $state= $_POST['state'];
 $zip= $_POST['zip'];






if (empty($usn)){
  header("Location: login.php?error=empty");  
    exit();
}if (empty($email)){
  header("Location: login.php?error=empty");  
    exit();
}if (empty($pass)){
  header("Location: login.php?error=empty");  
    exit();
}if (empty($cpass)){
  header("Location: login.php?error=empty");  
    exit();
}if (empty($fname)){
  header("Location: login.php?error=empty");  
    exit();
}if (empty($lname)){
  header("Location: login.php?error=empty"); 
    
    exit();
}if (empty($cnumber)){
  header("Location: login.php?error=empty"); 
    exit();
    
}if (empty($address)){
  header("Location: login.php?error=empty"); 
    exit();
}if (empty($city)){
  header("Location: login.php?error=empty");  
    exit();
}if (empty($state)){
  header("Location: login.php?error=empty");   
    exit();  
}if (empty($zip)){
  header("Location: login.php?error=empty");  
    exit();
}else{
   $sql1 = "INSERT INTO userinfo (f_name,l_name,c_number,address,city,state,zip) VALUES ('$fname', '$lname', '$cnumber', '$address','$city','$state', '$zip')";
    $result = $conn -> query($sql1);
    
   $sql2 = "INSERT INTO accinfo (username,email,pass,cpass) VALUES ('$usn', '$email', '$pass', '$cpass')";
    $result = $conn -> query($sql2);


   header("Location: login.php?error=empty"); 
    
    
    
}
?>