<?php
session_start();
include 'database.php';
if($_GET['userid'] == '-1'){
    header("Location: login.php");
}else{
    $bookId = $_GET['bookid'];
    $userId = $_GET['userid'];
    $sql = mysqli_query($conn, "SELECT * FROM user_wish_list where book_id='$bookId' AND user_id='$userId'");
    if(mysqli_num_rows($sql)>0){
        header("Location: book-detail.php?bookid=" . $bookId);
    }else{
        $query = "INSERT INTO user_wish_list( user_id, book_id) VALUES ('$userId', '$bookId')";
        $sql = mysqli_query($conn, $query) or die("Could Not Perform the Query");
        header("Location: book-detail.php?bookid=" . $bookId . "&wishlist=success");
    }
}

?>