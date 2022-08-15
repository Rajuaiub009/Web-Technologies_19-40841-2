<?php  
require_once '../Controller/sellerInfo.php';
$sellers = fetchAllSellers();


    include "nav.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Seller List</title>
</head>
<style>
    body{
		background-image: url("../images/img.jpg");
        text-align: center;
    }
     h1{
    background-color: darkblue;
    text-align: center;
    color: burlywood;
     }

     table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color: coral;}
</style>
<body>
    <h1> Seller List </h1>

<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Username</th>
			<th>Password</th>
			
		
		</tr>
	</thead>
	<tbody>
		<?php foreach ($sellers as $i => $seller): ?>
			<tr>
				<td><a href="../View/editSeller.php?id=<?php echo $seller['ID'] ?>"><?php echo $seller['name'] ?></a></td>
				<td><?php echo $seller['email'] ?></td>
				<td><?php echo $seller['username'] ?></td>
				<td><?php echo $seller['password'] ?></td>
                <td><a href="../View/editSeller.php?id=<?php echo $seller['ID'] ?>">Edit</a>&nbsp<a href="../Controller/deleteSeller.php?id=<?php echo $seller['ID'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a></td>
                
				
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>