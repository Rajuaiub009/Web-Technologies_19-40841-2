<?php
include '../controller/changepassword.php';
?>


<!DOCTYPE HTML>  
<html>
    <body>
<br> <br> 
<h2> Change Password </h2>
<br>
<form action = "" method = "POST">
 
Username:  <br>
<input type="text" name="un" value="<?php echo $username;?>">
<span><?php echo $usernameErr;?></span>
<br> <br>

Current Password:  <br>
<input type="password" name="cpass" value="<?php echo $currentpassword;?>">
<span><?php echo $currentpasswordErr;?></span>
<br> <br>

New Password:  <br>
<input type="password" name="npass" value="<?php echo $newpassword;?>">
<span><?php echo $newpasswordErr;?></span>
<br> <br>

Retype New Password:  <br>
<input type="password" name="rtpass" value="<?php echo $retypenewpassword;?>">
<span><?php echo $retypenewpasswordErr;?></span>
<br> <br>

<input type="submit" name="submit" value="Submit"> <br> <br>
<a href="../View/Login.php" > BACK TO LOGIN PAGE </a> 
<?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>
</body>
</html>
