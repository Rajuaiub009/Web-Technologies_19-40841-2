<?php  
include '../Model/productmodel.php';

function loadData(){
return readData();

}
function addData($data){
	$final_data = storeData($data);
    if(file_put_contents('../product.json', $final_data))  
        {  
            header("location:../View/product.php");
        }  

}
function productInfo($data){

$all_data = readData();
    foreach($all_data as $row)  
    {
        if ($row['Product name']==$data) 
        {
            $d_data = array(
                'name' => $row['Product name'],
                'Product Category' => $row['Product Category'],
                'Product Price' => $row['Product Price']          
            );
        return $d_data;
        }
    }

}

?>