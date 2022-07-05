<?php
        include '../Controller/header.php';
        include '../Controller/Login.php';
        ?>

<!DOCTYPE HTML>  
<html>
<body>
<br> <br> 
<h2> Login Page </h2>
<br>
<form method = "POST"  action = "">

Username:  <br>
<input type="text" name="uname" value="<?php if(isset($_COOKIE['uname'])) {echo $_COOKIE['uname'];} echo $username ?>">
<span><?php echo $usernameErr;?></span>
<br> <br>

Password:  <br>
<input type="password" name="password" value="<?php if(isset($_COOKIE['password'])) {echo $_COOKIE['password'];} echo $password ?>">
<span><?php echo $passwordErr;?></span>
<br> <br>
<input type="submit" name="login" value="Login"> <br>
<p> <input type = "checkbox" name = "remember" <?php if(isset($_COOKIE['uname'])) {echo "checked";} ?>> <label for="remember">Remember Me</label>

<p> Forget Password? <a href = '../View/Forgetpass.php'> Click Here  </a> </p>
<br>

<?php
		if (isset($msg)) 
                {
			echo $msg;
		}
	 ?>	 	
        

  </body>
  </html> <br>
  <?php
  include '../Controller/footer.php';
  ?>