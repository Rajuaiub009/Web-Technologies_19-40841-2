<?php
    
    include 'regdatacontroller.php';
     $data = loadData();
    
    $username = "";
    $password = "";
    $usernameErr = $passwordErr = "";

    if(isset($_POST['login']))
    {
        $username = $_POST['uname'];
        $password = $_POST ['password'];
        if($_POST['uname'] == $username && $_POST['password'] == $password){
            if(isset($_POST['remember'])){
                setcookie('uname', $username, time() +10);
                setcookie('password', $password, time() +10);

            }
            session_start();
            $_SESSION['uname'] = $username;
            header("../View/Profile.php");
        }
        else{
            // echo "invalid";
        
            header("../View/Login.php");
        }

    }


    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
  
    if (empty($_POST["uname"])) 
    {
        $usernameErr = "Username is required";    
    }

    else
    {
     $username = $_POST["uname"];    
    }

    //Pass
    if(empty($_POST["password"]))
    {
        $passwordErr = "Password is required";
    }
    else
    {
        $password = $_POST["password"]; 

    }

    
        $isValid =  false;
        
                 foreach($data as  $row)  
                          {           
                            if($row['Username'] == $username && $row['Password'] == $password)
                            {
                                $isValid = true;
                            } 
                        }                                     
                  
              
          if($isValid){

            header("location:../View/Profile.php");
          }     
          else
          
          {
            $msg= "Invalid username or password";
          } 

 }  


?>