<?php  
require_once '../Controller/sellerInfo.php';

$seller = fetchSeller($_GET['id']);


    include "nav.php";



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Username</th>
		<th>Password</th>
		<th>Retype Password</th>
	</tr>
	<tr>
		<td><a href="showSeller.php?id=<?php echo $seller['ID'] ?>"><?php echo $seller['name'] ?></a></td>
		<td><?php echo $seller['email'] ?></td>
		<td><?php echo $seller['username'] ?></td>
		<td><?php echo $seller['password'] ?></td>
        <td><?php echo $seller['retypepassword'] ?></td>
		
	</tr>

</table>


</body>
</html>