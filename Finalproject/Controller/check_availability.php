<?php 
require_once("../Model/db_connect.php");
//code check email
if(!empty($_POST["email"])) {
$uemail=$_POST["email"];
$sql ="SELECT email FROM admin WHERE email=:email";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
 
if($query -> rowCount() > 0)
echo "<span style='color:red'> Email Already Exit .</span>";
else
 echo "<span style='color:green'> Email Available.</span>";
}