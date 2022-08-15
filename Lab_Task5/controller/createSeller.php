<?php  
include "../View/nav.php";
require_once '../Model/model.php';


if (isset($_POST['createSeller'])) {
	$data['name'] = $_POST['name'];
	$data['email'] = $_POST['email'];
	$data['username'] = $_POST['username'];
    $data['password'] = $_POST['password'];
    $data['retypepassword'] = $_POST['retypepassword'];
	
	

  if (addSeller($data)) {
  	echo 'Successfully added!!';
  }
} else {
	echo 'You are not allowed to access this page.';
}

?>