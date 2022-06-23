<!DOCTYPE HTML>  
<html>
<body>
    <?php
    //session_start();
    include 'header.php';

    $username = "";
    $password = "";
    $nameErr = $passwordErr = "";

    //if (isset($_POST['un'])) {
		//if ($_POST['un']==$username && $_POST['pass']==$password) {
			//$_SESSION['un'] = $username;
			//header("location:welcome.php");
		//}
		//else{
			//$msg = "username or password invalid";
		//}
	//}

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
  
    if (empty($_POST["un"])) 
    {
        $nameErr = "Name is required";    
    }

    else
    {
     $name = $_POST["un"];    
    }

    //Pass
    if(empty($_POST["pass"]))
    {
        $passwordErr = "Password is required";
    }
    else
    {
        $password = $_POST["pass"]; 
    }
}

?>

<form method="post" action = "">  

<br>

Name:  <br>
<input type="text" name="un" value="<?php echo $username;?>">
<span><?php echo $nameErr;?></span>
<br>

Password:  <br>
<input type="text" name="password" value="<?php echo $password;?>">
<span><?php echo $passwordErr;?></span>
<br>


	<input type="submit" name="login" value="Login"> 
  
  </form>
  </body>
  </html>