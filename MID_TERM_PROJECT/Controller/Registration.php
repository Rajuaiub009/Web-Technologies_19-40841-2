<?php
    $Firstname = $Lastname = $email = $username = $password = $retypepassword =  $gender  = $dob ="";
    $FirstnameErr = $LastnameErr = $emailErr = $usernameErr = $passwordErr = $retypepasswordErr = $genderErr = $dobErr = "";
    $message ='';
    $error = '';
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    
{
  // FirstName......
    if (empty($_POST["fname"])) 
    {
        $FirstnameErr = "*FirstName is required";
      
    }
    else 
       {
        $Firstname = $_POST["fname"];    
        }

    //LastName...

        if (empty($_POST["lname"])) 
        {
            $LastnameErr = "*LastName is required";
          
        }
        else 
           {
            $Lastname = $_POST["lname"];    
            }
        
      // E-Mail....

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
          
          //User Name

          if (empty($_POST["uname"])) 
          {
              $usernameErr = "*UserName is required";
            
          }
          else 
             {
              $username = $_POST["uname"];    
              }

              if (empty($_POST["npassword"])) 
    {
        $passwordErr = "*password is required";    
    }

    else
    {
        $password = $_POST["rtpassword"];    
    }
    if (empty($_POST["rtpassword"])) 
    {
        $retypepasswordErr = "*password is required";    
    }

    else
    {
        $retypepassword = $_POST["rtpassword"];    
    }

            //Gender...

          if (empty($_POST["g"])) 
          {
            $genderErr = "*Gender is required";
          } 
          else
           {
            $gender = $_POST["g"];
          }

          //Date of birth...

          if (empty($_POST["dob"])) {
            $dobErr = "*Please Select Date";
          } 
          else {
            $dob = $_POST["dob"];  
          } 
           if(isset($_POST["submit"]))
           if(isset($_POST["g"]))
           {

               if(file_exists('../admin.json'))
               {
               $current_data = file_get_contents('../admin.json');  
               $array_data = json_decode($current_data, true);  
               $extra = array(  
                    'Firstname'               =>     $_POST['fname'],  
                    'Lastname'            =>     $_POST['lname'],  
                    'e-mail'          =>     $_POST["email"],  
                    'Username'     =>     $_POST["uname"],  
                    'Password'   =>       $_POST["npassword"],   
                    'Gender'     =>     $_POST["g"],  
                    'Dob'     =>     $_POST["dob"] 
               );  
               $array_data[] = $extra;  
               $final_data = json_encode($array_data);  
               if(file_put_contents('../admin.json', $final_data))  
               {  
                    $message = "<label class='text-success'>**Registration Successful**</p>";  
               }  
          }  
          else  
          {  
               $error = 'JSON File not exits';  
          } 
        } 
      }
    
      
    
    ?>