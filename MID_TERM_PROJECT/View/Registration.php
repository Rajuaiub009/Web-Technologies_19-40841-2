<?php
include '../controller/header.php';
include '../controller/Registration.php';
?>
<!DOCTYPE HTML>  
<html>
<body>

<form method="POST">  
<?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?> 
    <br>
    <h2> Registration Page </h2>
    <br>
  FirstName: <br> 
  <input type="text" name="fname" value="<?php echo $Firstname;?>">
  <span> <?php echo $FirstnameErr;?></span>
  <br> <br>

  LastName: <br> 
  <input type="text" name="lname" value="<?php echo $Lastname;?>">
  <span> <?php echo $LastnameErr;?></span>
  <br> <br>

  Email: <br>
  <input type="text" name="email" value="<?php echo $email;?>">
  <span> <?php echo $emailErr;?></span>
  <br> <br>

  Username: <br> 
  <input type="text" name="uname" value="<?php echo $username;?>">
  <span> <?php echo $usernameErr;?></span>
  <br> <br>

   Password:  <br>
  <input type="password" name="npassword" value="<?php echo $password;?>">
  <span><?php echo $passwordErr;?></span>
  <br> <br>

  Retype Password: <br>
  <input type="password" name="rtpassword" value="<?php echo $retypepassword;?>">
  <span><?php echo $retypepasswordErr;?></span>
  <br> <br>


  Gender: 
  <input type="radio" name="g" id = "g" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="g" id = "g" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="g" id = "g"<?php if (isset($gender)  && $gender=="other") echo "checked";?> value="other">Other  
  <span><?php echo $genderErr;?></span>
  <br><br>

  Date of birth:
  <input type="date" name="dob" value="<?php echo $dob;?>">
  <span> <?php echo $dobErr; ?></span>
  <br> <br>

  <input type="submit" name ="submit"value = "Submit"> <br> <br>
  
  <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>

  </body>

  </html>
  <?php
  include '../Controller/footer.php';
  ?>




