

<?php  
include 'header.php';
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["name"]))  
      {  
           $error = "<label>Enter Name</label>";  
      }
      else if(empty($_POST["email"]))  
      {  
           $error = "<label>Enter an e-mail</label>";  
      }  
      else if(empty($_POST["un"]))  
      {  
           $error = "<label>Enter a name</label>";  
      }  
      else if(empty($_POST["pass"]))  
      {  
           $error = "<label>Enter a password</label>";  
      }
      else if(empty($_POST["Cpass"]))  
      {  
           $error = "<label>Confirm password field cannot be empty</label>";  
      } 
      else if(empty($_POST["gender"]))  
      {  
           $error = "<label>Gender cannot be empty</label>";  
      } 
       
      else  
      {  
           if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name'               =>     $_POST['name'],  
                     'e-mail'          =>     $_POST["email"],  
                     'username'     =>     $_POST["un"],  
                     'gender'     =>     $_POST["gender"],  
                     'dob'     =>     $_POST["dob"]  
               
                );  
                
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('data.json', $final_data))  
                {  
                     $message = "<label> Success fully Inserted</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>   
      <body>  
           <br />  
                <h3>Registration Page</h3><br />                 
                <form method="post" action = "">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br />  
                     <label>Name</label>  
                     <input type="text" name="name" class="form-control" /><br/> <br> 
                     <label>E-mail</label>
                     <input type="text" name = "email" class="form-control" /><br/> <br>
                     <label>User Name</label>
                     <input type="text" name = "un" class="form-control" /><br/> <br>
                     <label>Password</label>
                     <input type="password" name = "pass" class="form-control" /><br/> <br>
                     <label>Confirm Password</label>
                     <input type="password" name = "Cpass" class="form-control" /><br/> <br>

                   
                    <legend>Gender</legend>
                    <input type="radio" id="male" name="gender" value="male">
                     <label for="male">Male</label>                     
                     <input type="radio" id="female" name="gender" value="female">
                     <label for="female">Female</label>
                     <input type="radio" id="other" name="gender" value="other">
                     <label for="other">Other</label><br> <br>
                    
                     <legend>Date of Birth:</legend>
                     <input type="date" name="dob"> <br><br>
                
                     
                     <input type="submit" name="submit" value="Append" class="btn btn-info" />  
                     <input type="reset" name="reset" >         
                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
                </form>  
           <br />  
      </body>  
 </html>  