<!DOCTYPE HTML>  
<html>
    <body>

<h1 style="color:blue;"> E-COMMERCE WEBSITE </h1>
<h1 style= "color:red;"> ADMIN DASHBOARD </h1>
<br>
<?php
session_start();
if (isset($_SESSION['uname'])) {
echo "WELCOME ADMIN |  |" .$_SESSION['uname']; 
}


echo "<br> <br>" ;

echo "<a href = '../view/viewprofile.php'>  VIEW PROFILE  </a><br><br>"; 

echo "<a href = '../View/seller.php'> SELLER LIST </a><br><br>";

echo "<a href = '../View/product.php'> PRODUCT LIST </a><br><br>";

echo "<a href = '../View/changepassword.php'> CHANGE PASSWORD </a><br><br>";

echo "<a href = '../View/Login.php'> LOGOUT </a>"; 

?>
  </body>
  </html>

