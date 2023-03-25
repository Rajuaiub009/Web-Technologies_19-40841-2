<?php
include '../controller/header.php'; 
include '../controller/Registration.php';
include_once("../Model/db_connect.php"); 
?>

<!DOCTYPE HTML>  
<html>
<body>
  <title>
    Registration
  </title>
 
     <style>
    h2{
    background-color: darkblue;
    text-align: center;
    color: burlywood;
     }

 body{
     background-image: url("../images/image2.jpg");
    text-align: center;
    color:white;
   }
     </style>
<form name="myform" method="post" action="" onsubmit="return validateform()">  
<h2> Registration Page </h2>
<br>
Firstname <br> 
<input type="text" name="firstname" id="firstname" onblur="checkFirstname()" onkeyup="checkFirstname()">
<p id="firstnameErr"></p>

<br>

Lastname <br> 
<input type="text" name="lastname" id="lastname" onblur="checkLastname()" onkeyup="checkLastname()">
<p id="lastnameErr"></p>

<br>

Email <br>
<input type="text" name="email" id = "email" onblur="checkemailAvailability()">
<br> <br>
Username <br> 
<input type="text" name="username" id="username" onblur="checkUsername()" onkeyup="checkUsername()"> 
<p id="usernameErr"></p>
<br> 

Password <br>
<input type="password" id="password" name="password" onblur="checkPass()">
<p id="passErr"></p>

<br> 

Retype Password <br>
<input type="password" name="retypepassword" id="retypepassword" onblur="checkRetypepass()">
<p id="retypepasswordErr"></p>
<br> <br>

Gender:  
<input type="radio" name="g" id = "g"  value="male"> Male
<input type="radio" name="g" id = "g"  value="female"> Female
<input type="radio" name="g" id = "g" value="other"> Other  

<br> <br>

Date of birth:
<input type="date" name="dob" >

<br> <br>

<input type="submit" name ="submit"value = "Register"> <br> <br>
</form>
<script src="../View/js/reg.js"></script>   

</body>
</html>
