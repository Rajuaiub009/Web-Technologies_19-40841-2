<?php
include '../controller/header.php';
include '../Controller/Forgetpass.php';
?>



<!DOCTYPE HTML>  
<html>
<br> <br> 
<h2> Forget Password </h2>
<br>
<form method = "POST">
    

E-Mail:  <br>
<input type="text" name="email" value="<?php echo $email;?>">
<span><?php echo $emailErr;?></span>
<br> <br>


<input type="submit" name="submit" value="Get New Password"> <br><br>
<a href = "../view/Login.php"> Back </a>



  </form>
  </body>
  </html>
  <?php
  include '../Controller/footer.php';
  ?>