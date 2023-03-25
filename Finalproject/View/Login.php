<?php
include '../controller/header.php'; 
include '../controller/Login.php'; 

?>

<!DOCTYPE HTML>  
<html>
<body>
  <title>Login</title>
     <style>
    h2{
    background-color: darkblue;
    text-align: center;
    color: burlywood;
     }

 body{
  background-image: url("../images/image.jpg");
    text-align: center;
    color:white;
   }
     </style>
     
<form name="myform" method="post"  action="../Controller/Login.php"  onsubmit="return validateform()">  
<br>
<h2> Login Page </h2>
<br>
Username <br> 
<input type="text" name="username" id="username" onblur="checkUsername()" onkeyup="checkUsername()"> 
<p id="usernameErr"></p>
<br/>  

Password <br>
<input type="password" id="password" name="password" onblur="checkPass()">
<p id="passErr"></p>
<br/>  

<input type ="submit"  value="Login"> 

</form>
<script src="../View/js/Login.js"></script> 
  </body>
  </html> 
  <br>
  <?php
		if (isset($msg)) 
                {
			echo $msg;
		}
	 ?>

  <?php
include '../Controller/footer.php';
?>