<?php
session_start();
$email = $_POST['email'];
$wname = $_POST['wname'];
$book = $_POST['book'];
if(!empty($email) || !empty($wname) || !empty($book)){
$host = "localhost";
$username = "root";
$password = "";
$dbname = "library";
$conn = new mysqli($host, $username, $password, $dbname, "3308");
if(mysqli_connect_error()){
die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
}
else{

$SELECT = "SELECT * FROM lib where email = ?";
$INSERT = "INSERT Into req (email, wname, book) values(?, ?, ?)";
$stmt = $conn->prepare($SELECT);
$stmt ->bind_param("s", $email);
$stmt ->execute();
$stmt->bind_result($email);
$stmt->store_result();
$rnum = $stmt->num_rows;
if($rnum == 0){
	header('location: sign.html');
}
else{
	$stmt->close();
	$stmt = $conn->prepare($INSERT);
	$stmt->bind_param("sss", $email, $wname, $book);
	$stmt->execute();
	echo "REQUEST WILL BE FULLFILLED SOON";
}
$stmt->close();
$conn->close();
}}
?>















