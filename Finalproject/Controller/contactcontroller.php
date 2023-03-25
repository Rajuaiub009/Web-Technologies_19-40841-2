<?php  
include '../Model/contactmodel.php';

function loadData(){
return readData();

}

$all_data = readData();
    foreach($all_data as $row)  
    {
        

        {
            $d_data = array(
                'phone' => $row['phone'],
                'email' => $row['email']
        
                
            );
        return $d_data;
        }
    }

?>