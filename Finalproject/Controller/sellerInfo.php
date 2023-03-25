<?php 

require_once ('../Model/model.php');

function fetchAllSellers(){
	return showAllSellers();

}
function fetchSeller($id){
	return showSeller($id);
}