<?php
$email = $_POST['email'];
$password = $_POST['password'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$Error = '';
if(strlen($email) >=10 and strlen($email) <=40 || strlen($password) >=8 and strlen($password) <=20 || strlen($name) >=2 and strlen($name) <=20 || strlen($email) == 10){
$host = "localhost";
$username = "root";
$password = "";
$dbname = "library";
$conn = new mysqli($host, $username, $password, $dbname, "3308");
if(mysqli_connect_error()){
die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
}
else{
$password = $_POST['password'];
$SELECT = "SELECT email from lib where email = ? Limit 1";
$INSERT = "INSERT Into lib (email, name, password, phone) values(?, ?, ?, ?)";
$stmt = $conn->prepare($SELECT);
$stmt ->bind_param("s", $email);
$stmt ->execute();
$stmt->bind_result($email);
$stmt->store_result();
$rnum = $stmt->num_rows;                          
if($rnum == 0){
	$stmt->close();
	$stmt = $conn->prepare($INSERT);
	$stmt->bind_param("sssi", $email, $name, $password, $phone);
	$stmt->execute();
	echo "New record inserted sucessfully";
}
else{
echo "Someone already register using the same email";
}
$stmt->close();
$conn->close();
}}
else{
echo "ENTER VALID INPUT";
}
?>

















