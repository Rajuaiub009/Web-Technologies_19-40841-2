<?php 
require_once '../Controller/sellerInfo.php';
 $seller = fetchseller($_GET['id']);
 include "nav.php";
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <form action="../Controller/updateSeller.php" method="POST" >
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
  
  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">

  <input type="submit" name = "updateSeller" value="Update">
  <input type="reset"> 
</form> 

</body>
</html>

