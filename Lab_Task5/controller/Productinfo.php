<?php 

require_once ('model/model.php');

function fetchAllproducts(){
	return showAllproduct();

}
function fetchProduct($name){
	return showProduct($name);

}
