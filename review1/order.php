<?php
$servername="127.0.0.1";
$username='root';
$password='';
$dbname = "iwp_project";
try {
    $name= $_POST['name'];
    $email = $_POST['email'];
	$mode= $_POST['mode'];
    $weight = $_POST['wt'];
	$distance = $_POST['dist'];
	$zipcode = $_POST['zipcode'];
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    /* set the PDO error mode to exception */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   	$sql = "INSERT INTO ordermaster (name,email,mode,weight,distance,zipcode)
	VALUES ('$name','$email','$mode','$weight','$distance','$zipcode')";
    $conn->exec($sql);
	header("Location: home2.html");
   }
catch(PDOException $e)
    {

    	echo "<br>" . $e->getMessage();
    }

$conn = null;
?>