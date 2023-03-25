<?php
    $name = $email = $username = $password = $retypepassword ="";
   
    
{

        if (empty($_POST["name"])) 
        {
            $nameErr = "*Name is required";
          
        }
        else 
           {
            $name = $_POST["name"];    
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

          if (empty($_POST["username"])) 
          {
              $usernameErr = "*UserName is required";
            
          }
          else 
             {
              $username = $_POST["username"];    
              }

              if (empty($_POST["password"])) 
    {
        $passwordErr = "*password is required";    
    }

    else
    {
        $password = $_POST["retypepassword"];    
    }
    if (empty($_POST["retypepassword"])) 
    {
        $retypepasswordErr = "*password is required";    
    }

    else
    {
        $retypepassword = $_POST["retypepassword"];    
        if(($_POST["password"] !== $_POST["retypepassword"]))
        {
            $retypepasswordErr ="Must be matched with Password";
        }
    }

           
      }

    
    
    ?>