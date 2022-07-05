<?php
    $email = "";
   $emailErr = "";
   

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
    if (empty($_POST["email"])) {
        $emailErr = "*Email is required";
  }
  
       else {
        $email = $_POST["email"];
        
        if (!filter_var($email , FILTER_VALIDATE_EMAIL)) 
        {
          $emailErr = "*Please type a valid Email address";
        }
      }
}
?>