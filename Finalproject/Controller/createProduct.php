<?php  
// include "../View/na.php";
require_once '../Model/mod.php';


if (isset($_POST['createProduct'])) {
	$data['productname'] = $_POST['productname'];
	$data['productcategory'] = $_POST['productcategory'];
	$data['productprice'] = $_POST['productprice'];
   
  if (addProduct($data)) {
  	echo 'Successfully added!!';
  }
} else {
	echo 'You are not allowed to access this page.';
}

?>