<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
if(!empty($email) || !empty($password)){
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
$SELECT = "SELECT * FROM lib where email = ? && password = ?";
$stmt = $conn->prepare($SELECT);
$stmt ->bind_param("ss", $email,$password);
$stmt ->execute();
$stmt->bind_result($email,$password);
$stmt->store_result();
$rnum = $stmt->num_rows;
if($rnum == 0){
	$stmt->close();
	echo "NO SUCH REGISTERED EMAILID";
	echo "$email";
	echo "$password";
}
else{
	$_Session['name'] = $name;
	header('location: home.html');
}
$stmt->close();
$conn->close();
}}
?>















