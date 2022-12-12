<?php
require("credentials.php");

$fullname = $_POST["fname"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$comment = $_POST["comment"];



$mysqli = require __DIR__ . "/credentials.php";
$mysqli=new mysqli($servername,$username,$password,$database);

$stmt = $mysqli->stmt_init();

$conn = mysqli_connect("localhost", "root", "", "login_db") or die("connection failed");
$sql = "INSERT INTO contact(Full_name,  Email, Mobile, Comment) VALUES ('{$fullname}','{$email}','{$mobile}','{$comment}' )";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
header("location: ThankYou.html");
mysqli_close($conn);
?>