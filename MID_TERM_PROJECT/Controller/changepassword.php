<?php

    $username = $currentpassword = $newpassword = $retypenewpassword = "";
    $usernameErr = $currentpasswordErr = $newpasswordErr = $retypenewpasswordErr = "";


    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
  
    if (empty($_POST["un"])) 
    {
        $usernameErr = "Username is required";    
    }

    else
    {
     $username = $_POST["un"];    
    }

    if (empty($_POST["cpass"])) 
    {
        $currentpasswordErr = "Current password is required";    
    }

    else
    {
        $currentpassword = $_POST["cpass"];    
    }

    if(empty($_POST["npass"]))
    {
        $newpasswordErr = "Password is required";
    }
    else
    {
        $newpassword = $_POST["npass"]; 

    if(($_POST["cpass"] == $_POST["npass"]))
    {
        $newpasswordErr ="Should not be same as current password";
    }
 }
    

 if(empty($_POST["rtpass"]))
 {
     $retypenewpasswordErr = "required";
 }
 else
 {
     $retypenewpassword = $_POST["rtpass"]; 

 if(($_POST["npass"] !== $_POST["rtpass"]))
 {
     $retypenewpasswordErr ="Must match be matched with new Password";
 }

}


$existingData = json_decode(file_get_contents("../admin.json",true),true);
  $updated = false;
foreach($existingData as $feedback => $x){
    if($x["Password"] == $currentpassword) {
        // echo "found";
        $existingData[$feedback]["Password"] = $newpassword;
        
        $updated = true;
        break;
  }
}

//var_dump($existingData);


if($updated){
    $fp = fopen('../admin.json', 'w');
    fwrite($fp, json_encode($existingData, JSON_PRETTY_PRINT));  
    fclose($fp);
    
    $message = "<label class='text-success'>**Password Changed Successfully**</p>";  

}
  }
  else{

    //$error = 'JSON File not exits';  
    
   }


?>