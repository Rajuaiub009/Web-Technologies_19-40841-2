<!DOCTYPE html>
<html>
    <title>Search</title>
    <style>
        h1{
          background-color: darkblue;
          text-align: center;
          color: burlywood;
           }
      
       body{
        background-image: url("../images/img.jpg");
          text-align: center;
          color:white;
         }
    </style>
  <body>
<?php 
    include "nav.php";

?>
    <!-- [SEARCH FORM] -->
    <form method="post" action="../Controller/findUser.php">
      <h1>SEARCH FOR USERS</h1>
      <input type="text" name="username" />
      <input type="submit" name="findUser" value="Search"/>
    </form>
  </body>
</html>