<?php
  $name = $_POST["name"];
  $email =  $_POST["email"];
  $subject = $_POST["subject"];
  $message = $POST["subject"];
  $body = "from:  $name($mail)\n $message";
  $to = "example@mail.com";
  if (mail($to, $subject, $body)) {
	  echo("<p>Email succesfully sent</p>")
  }
  
  else {
	  echo("<p>Email delivery failed...<p>")
  
 }
 
 ?>
  