<?php

    // $username = $password = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = validate($_POST["username"]);
        $password = validate($_POST["password"]);
        // $newpass = validate($_POST["newpass"]);
        // $retypenewpass = validate($_POST["retypenewpass"]);
        
      }
      function validate($data)
      {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
      $isValidate = true;


//     if ($_SERVER["REQUEST_METHOD"] == "POST")
//     {
  
//     if (empty($_POST["un"])) 
//     {
//         $usernameErr = "Username is required";    
//     }

//     else
//     {
//      $username = $_POST["un"];    
//     }

//     if (empty($_POST["cpass"])) 
//     {
//         $currentpasswordErr = "Current password is required";    
//     }

//     else
//     {
//         $currentpassword = $_POST["cpass"];    
//     }

//     if(empty($_POST["npass"]))
//     {
//         $newpasswordErr = "Password is required";
//     }
//     else
//     {
//         $newpassword = $_POST["npass"]; 

//     if(($_POST["cpass"] == $_POST["npass"]))
//     {
//         $newpasswordErr ="Should not be same as current password";
//     }
//  }
    

//  if(empty($_POST["rtpass"]))
//  {
//      $retypenewpasswordErr = "required";
//  }
//  else
//  {
//      $retypenewpassword = $_POST["rtpass"]; 

//  if(($_POST["npass"] !== $_POST["rtpass"]))
//  {
//      $retypenewpasswordErr ="Must match be matched with new Password";
//  }

// }


// $existingData = json_decode(file_get_contents("../admin.json",true),true);
//   $updated = false;
// foreach($existingData as $feedback => $x){
//     if($x["Password"] == $currentpassword) {
//         // echo "found";
//         $existingData[$feedback]["Password"] = $newpassword;
        
//         $updated = true;
//         break;
//   }
// }

// //var_dump($existingData);


// if($updated){
//     $fp = fopen('../admin.json', 'w');
//     fwrite($fp, json_encode($existingData, JSON_PRETTY_PRINT));  
//     fclose($fp);
    
//     $message = "<label class='text-success'>**Password Changed Successfully**</p>";  

// }
//   }
//   else{

//     //$error = 'JSON File not exits';  
    
//    }
    //}
    if ($isValidate) {
        $servername = "localhost";
        $u = "root";
        $p = "";
        $dbname = "ecommerce";
        // Create connection
        $conn = mysqli_connect($servername, $u, $p, $dbname);
        
        // Check connection
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }
        // echo "Connected successfully";
        
        $isLogin = false;
        
        $sql = "UPDATE admin SET password = '$password' WHERE username = '$username';";
        //echo $sql;
        $result = $conn->query($sql);
        
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        // $_POST["username"] = $username;
        // $_POST["currentpass"] = $currentpass;
        
        // header("location: ../View/Login.php");
        echo "Updated successfully";
    }
  
    ?>

?>