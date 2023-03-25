<?php 

require_once ('../Model/mod.php');

function fetchAllProducts(){
	return showAllProducts();

}
function fetchProduct($id){
	return showProduct($id);
}