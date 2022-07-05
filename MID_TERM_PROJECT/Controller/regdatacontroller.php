<?php  
include '../Model/regmodel.php';

function loadData(){
return readData();

}


$all_data = readData();
    foreach($all_data as $row)  
    {
        

        {
            $d_data = array(
                'first name' => $row['Firstname'],
                'last name' => $row['Lastname'],
                'e-mail' => $row['e-mail'],
                'username' => $row['Username'],
                'gender' => $row['Gender'],
                'dob' => $row['Dob']
                
            );
        return $d_data;
        }
    }

?>