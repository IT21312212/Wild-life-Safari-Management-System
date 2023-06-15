<?php

 if(isset($_POST['submit']))
 {

 //include connection file
require 'config.php';



	  $fname = $_POST['fullname'];
    $ephone = $_POST['phone'];
   	$eemail = $_POST['email'];
   	$fb = $_POST['fback'];
   
//insert data

$sql = "INSERT INTO feedback VALUES ('$fname','$ephone','$eemail','$fb')";

// Check connection
if ($con->query($sql))
{
  header("Location:http://localhost/IT21250088/Project/src/html/contactUs.html");

} 
else
 {
  echo "Error: ".$con->error;
}


 }


?>