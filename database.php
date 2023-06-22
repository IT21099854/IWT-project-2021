<?php
$url='localhost';
$username='root';
$password='';
$dbname='knowledgebay_db';
$conn=mysqli_connect($url,$username,$password,$dbname);
if(!$conn){
 die('Could not Connect My Sql:' .mysqli_connect_error());
}

// mysqli_close($conn);
?>