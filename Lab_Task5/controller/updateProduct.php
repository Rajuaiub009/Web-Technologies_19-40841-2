<?php  
require_once '../model/model.php';


if (isset($_POST['updateProduct'])) {
	$data['name'] = $_POST['name'];
	$data['bname'] = $_POST['bname'];
	$data['sname'] = $_POST['sname'];
	

  if (updateProduct($_POST['name'], $data)) {
  	echo 'Successfully updated!!';

  	header('Location: ../showProduct.php?id=' . $_POST["name"]);
  }
} else {
	echo 'You are not allowed to access this page.';
}


?>