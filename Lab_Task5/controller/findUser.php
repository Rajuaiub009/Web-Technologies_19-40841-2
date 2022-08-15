<?php

require_once '../Model/model.php';

if (isset($_POST['findUser'])) {
	
		echo $_POST['username'];

    try {
    	
    	$allSearchedSellers = searchSeller($_POST['username']);
    	require_once '..View/showSearchedSeller.php';

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
}

