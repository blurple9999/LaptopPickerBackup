<?php
require("credentials.php");
$con = mysqli_connect($servername,$username,$password,$database);

$fullname = $_POST["fname"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$comment = $_POST["comment"];



$sql = "INSERT INTO contact(Full_name,  Email, Mobile, Comment) VALUES ('{$fullname}','{$email}','{$mobile}','{$comment}' )";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
header("location: ThankYou.html");
mysqli_close($conn);
?>