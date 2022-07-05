<?php  
include '../Controller/DataController.php';

$name = $_GET['name'];

$seller = sellerInfo($name);

	echo $seller['name'];
	echo "<br>";
	echo $seller['e-mail'];
	echo "<br>";
	echo $seller['username'];
	echo "<br>";
	echo $seller['gender'];
	echo "<br>";
	echo $seller['dob'];
	echo "<br>";
	echo "<br>";

	echo "<a href = '../View/seller.php'> Back </a>"; 
	

?>