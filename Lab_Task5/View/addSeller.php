<?php
include "nav.php";
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

<form name="myform" method="post" action="../Controller/createSeller.php" method="POST"  onsubmit="return validateform()"> 

    <h2> ADD SELLER </h2>
  Name <br> 
  <input type="text" name="name" id="name" onblur="checkName()" onkeyup="checkName()"  >
  <p id="nameErr"></p>
  <br> 

  Email <br>
  <input type="text" name="email" id="email" onblur="checkEmail()" onkeyup="checkEmail()">
  <p id="emailErr"></p>
  <br> 

  Username <br> 
  <input type="text" name="username" id="username" onblur="checkUsername()" onkeyup="checkUsername()">
  <p id="usernameErr"></p>
 
  <br> 

   Password  <br>
  <input type="password" name="password" id="password" onblur="checkPass()">
  <p id="passErr"></p>
  
  <br> 

  Retype Password <br>
  <input type="password" name="retypepassword" id="retypepassword" onblur="checkRetypepass()">
  <p id="retypepasswordErr"></p>

  <br> 

  <input type="submit" name ="createSeller"value = "Create"> 
  </form>
  <a href="../View/seller.php"> <button> Back </button></a>
  <script src="../View/js/addSeller.js">  </script>


  </body>
  </html>





