<?php
session_start();
echo $_SESSION["username"];
if(!isset($_SESSION['username'])) {
header("location: ../View/Login.php");
}
?>
<!DOCTYPE HTML>  
<html>
    <body>
      <title>ADMIN Profile</title>
    <style>
    h1{
    background-color: darkblue;
    text-align: center;
    color: burlywood;
     }

 body{
    text-align: center;
    background-image: url("../images/img.jpg");
   }
     </style>


<form action="../View/Livesearch.php">
<input type="submit" value="Search"></form>

<h1> E-COMMERCE WEBSITE </h1>
<h1> ADMIN DASHBOARD </h1>
<br>

<!-- <a href = '../view/viewprofile.php'>  <button> VIEW PROFILE </button></a><br><br> -->

<a href = '../View/seller.php'> <button> SELLER LIST </button> </a><br><br>

<a href = '../View/product.php'> <button> PRODUCT LIST </button> </a><br><br>

 <a href = '../View/changepassword.php'> <button> CHANGE PASSWORD </button></a><br><br>

<form action="../Controller/logout.php"><input type="submit" value="Logout"> </form>

  </body>
  </html>

