<?php
session_start();

$username = $password = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = validate($_POST["username"]);
  $password = validate($_POST["password"]);
}
function validate($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$isValidate = true;

if ($isValidate) {
  $servername = "localhost";
  $u = "root";
  $p = "";
  $dbname = "ecommerce";
  // Create connection
  $conn = mysqli_connect($servername, $u, $p, $dbname);
  
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  //echo "Connected successfully";

  $isLogin = false;
 
  $sql = "SELECT * FROM admin WHERE username = '$username' and password = '$password';";

  // echo $sql;
  $result = $conn->query($sql);
  
    // var_dump($result);

  if ($result->num_rows > 0) {
    // output data of each row
    // setcookie("username", json_encode($value), time() + (86400 * 30) , "/",);
    $_SESSION["username"] = "<b> Admin || Raju  </b>";
    $isLogin = true;
  } else {

  }
  $conn->close();
  
  if (!$isLogin) {
    echo "Username Or Password Is Incorrect";
  } 
  else if ($_SERVER["REQUEST_METHOD"] == "POST")  {
    $_SESSION["username"] = $username;
    header("location: ../View/Profile.php");
  }
}
