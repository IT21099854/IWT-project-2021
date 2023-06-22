<?php
session_start();
if (isset($_POST['save'])) {
    extract($_POST);
    include 'database.php';
    $sql = mysqli_query($conn, "SELECT * FROM users where email='$email' and password='md5($pass)'");
    $row = mysqli_fetch_array($sql);
    if (is_array($row)) {
        $_SESSION["id"] = $row['user_id'];
        $_SESSION["email"] = $row['email'];
        $_SESSION["name"] = $row['name'];
        $_SESSION["payment_option"] = $row['payment_option'];
        $_SESSION["image"] = $row['image'];
        header("Location: index.php");
    } else {
        header("Location: login.php?status=fail");
        echo "Invalid Email ID/Password";
    }
}
