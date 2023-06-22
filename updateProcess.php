<?php
session_start();
print_r(extract($_POST)) ;
include_once 'database.php';
if(isset($_POST['update'])) {
    // print_r("Hello ::: ".$_POST['first_name']);
    // print_r("q ::: "."UPDATE users set name='" . $_POST['first_name'] . "', email='" . $_POST['email'] . "', phone='" . $_POST['phone'] . "', address='" . $_POST['address'] . "' ,payment_option='" . $_POST['payment_method'] . "' WHERE user_id='" . $_POST['userId'] . "'");die();
    $sql = mysqli_query($conn, "UPDATE users set name='" . $_POST['first_name'] . "', email='" . $_POST['email'] . "', phone='" . $_POST['phone'] . "', address='" . $_POST['address'] . "' ,payment_option='" . $_POST['payment_method'] . "' WHERE user_id='" . $_POST['userId'] . "'")or die("Could Not Perform the Query");
    header("Location: http://localhost/knowledgebay.lk/myaccount.php?status=success");

}
?>