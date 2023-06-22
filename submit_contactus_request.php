<?php
if(isset($_POST)){
  session_start();
  include_once 'database.php';
  extract($_POST);
  $sql = "INSERT INTO contact_request (name, email, subject, message)
  VALUES ('$name', '$email', '$subject', '$message')";

  if ($conn->query($sql) === TRUE) {
    header ("Location: http://localhost/knowledgebay.lk/contactus.php");
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();

}

?>