<?php  
include '../Model/Model.php';

function loadData(){
return readData();

}
function addData($data){
	$final_data = storeData($data);
    if(file_put_contents('../seller.json', $final_data))  
        {  
            header("location:../View/seller.php");
        }  

}
function sellerInfo($data){

$all_data = readData();
    foreach($all_data as $row)  
    {
        if ($row['name']==$data) 
        {
            $d_data = array(
                'name' => $row['name'],
                'e-mail' => $row['e-mail'],
                'username' => $row['Username'],
                'gender' => $row['Gender'],
                'dob' => $row['Dob']
                
            );
        return $d_data;
        }
    }

}

?>