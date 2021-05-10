<?php
  
  error_reporting(0);

  $name = $_POST['userName'];
  $password = $_POST['password'];
  

  
  if ($name == "g181210385@sakarya.edu.tr" && $password=="12345678") {
  echo "<br>"."Welcome G181210385"."<br>";
  }
  else{
      echo "<br>"."You logged in incorrectly"."<br>";
  }

  
  
  
    
?>