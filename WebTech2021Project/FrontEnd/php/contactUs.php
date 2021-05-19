<?php
  
  error_reporting(0);

  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $gender = $_POST['gender'];
  $birthDate = $_POST['birthDate'];
  $mail = $_POST['mail'];
  $cellphone = $_POST['cellphone'];
  $message = $_POST['message'];
  $team = $_POST['sportTeam'];


  
  if (empty($_POST['device1'])==false) {
  $device1 = $_POST['device1'];
  }

  if (empty($_POST['device2'])==false) {
  $device2 = $_POST['device2'];
  }

  if (empty($_POST['device3'])==false) {
  $device3 = $_POST['device3'];
  }
 
 

  echo "<br>";
  echo "name :".$name."<br>";
  echo "surname :".$surname."<br>";
  echo "gender :".$gender."<br>";
  echo "birth date :".$birthDate."<br>";
  echo "mail :".$mail."<br>";
  echo "team :".$team."<br>";
  echo "cellphone number :".$cellphone."<br>";
  echo "message :".$message."<br>";
 


  if (empty($device1)==false) {
  echo "the devices you use to access our site : cellphone";
  echo "<br>";
  }
  if (empty($device2)==false) {
  echo "the devices you use to access our site : tablet";
  echo "<br>";
  }
if (empty($device3)==false) {
  echo "the devices you use to access our site : PC";
  echo "<br>";
  }

  
    
?>