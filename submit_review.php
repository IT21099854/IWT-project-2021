<?php
if(isset($_POST)){
  session_start();
  include_once 'database.php';
  extract($_POST);
  $sql = "INSERT INTO book_review (book_id, summary, name_of_reviewer, review)
  VALUES ('$bookid', '$summary', '$name', '$review')";

  if ($conn->query($sql) === TRUE) {
    header ("Location: http://localhost/knowledgebay.lk/book-detail.php?bookid=".$bookid);
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();

}

?>