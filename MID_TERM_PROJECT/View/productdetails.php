<?php  
include '../Controller/productdcontroller.php';

$name = $_GET['name'];

$product = productInfo($name);

	echo $product['name'];
	echo "<br>";
	echo $product['Product Category'];
	echo "<br>";
	echo $product['Product Price'];
	echo "<br>";
	echo "<br>";

	echo "<a href = '../View/product.php'> Back </a>"; 
?>