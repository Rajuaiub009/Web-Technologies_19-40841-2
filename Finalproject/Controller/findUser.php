<?php

require_once '../Model/model.php';

if (isset($_POST['findUser'])) {
	
		echo $_POST['username'];

    try {
    	
    	$allSearchedUsers = searchUser($_POST['username']);
    	require_once '../View/showSearchedUser.php';

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
}

