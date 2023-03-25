<?php
include '../Controller/header.php'; 
?>

<!DOCTYPE HTML>  
<html>
<body>
<style>
    h2{
    background-color: darkblue;
    text-align: center;
    color: burlywood;
     }

     body{
        background-image: url("../images/image4.jpg");
          text-align: center;
          color:white;
         }
     </style>

<form name="myform" method="post" action="" onsubmit="return validateform()">  

<h2> Change Password </h2>

Username <br>
<input type="text" name="username" id="username" onblur="checkUsername()" onkeydown="checkUsername()">
<p id="usernameErr"></p>
<br> 

Current Password <br>
<input type="password" name="currentass" id="currentpass" onblur="checkCurrentpass()">
<p id="currentpassErr"></p>
<br> 

New Password  <br>
<input type="password" name="newpass" id="newpass" onblur="checkNewpass()">
<p id="newpassErr"></p>
<br> 

Retype New Password  <br>
<input type="password" name="retypenewpass" id="retypenewpass" onblur="checkRetypenewpass()">
<p id="retypenewpassErr"></p>
<br> 

<input type="submit" name="submit" value="Change Password"> <br> <br>

<a href="../View/seller.php"> <button> Back </button></a>
</form>
<script src="../View/js/changepassword.js"></script>
</body>
</html>