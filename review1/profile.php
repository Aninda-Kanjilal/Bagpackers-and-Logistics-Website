<?php
$servername="127.0.0.1";
$username='root';
$password='';
$dbname = "iwp_project";
try {
    $first= $_POST['firstname'];
    $last = $_POST['lastname'];
    $email = $_POST['email'];
	$pass= $_POST['password'];
    $phone = $_POST['phone'];
	$gender = $_POST['gender'];
	$state = $_POST['stt'];
	$city = $_POST['state'];
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    /* set the PDO error mode to exception */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   	$sql = "INSERT INTO profile (firstname,lastname,email,password,phone,gender,state,city)
    VALUES ('$first','$last','$email','$pass','$phone','$gender','$state','$city')";
    $conn->exec($sql);
	header("Location: home2.html");
   }
catch(PDOException $e)
    {

    	echo "<br>" . $e->getMessage();
    }

$conn = null;
?>