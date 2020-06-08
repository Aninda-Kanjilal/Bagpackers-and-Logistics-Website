<?php
$servername="127.0.0.1";
$username='root';
$password='';
$dbname = "iwp_project";
try {
    $user= $_POST['username'];
    $email = $_POST['email'];
	$pass= $_POST['password'];
    $phone = $_POST['phone'];
	$service_type = $_POST['service_type'];
	$source_state = $_POST['source_state'];
	$source_city = $_POST['source_city'];
	$destination_state = $_POST['destination_state'];
	$destination_city = $_POST['destination_city'];
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    /* set the PDO error mode to exception */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   	$sql = "INSERT INTO booking (username, 	email, 	password, 	phone, 	service_type, 	source_state, 	source_city, 	destination_state, 	destination_city)
    VALUES ('$user','$email','$pass','$phone','$service_type','$source_state','$source_city','$destination_state','$destination_city')";
    $conn->exec($sql);
	header("Location: home2.html");
   }
catch(PDOException $e)
    {

    	echo "<br>" . $e->getMessage();
    }

$conn = null;
?>