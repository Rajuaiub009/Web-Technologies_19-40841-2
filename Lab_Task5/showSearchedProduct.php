
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table,td,th
		{
			border:1px solid black;
		}
	</style>
</head>
<body>

<?php 
    include "nav.php";

?>

<table>
	<thead>
		<tr>
			<th>Product_name</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($allSearchedProduct as $i => $user): ?>
			<tr>
				<td><a href="../showProduct.php?id=<?php echo $user['name'] ?>"><?php echo $user['name'] ?></a></td>
				<td><?php echo $user['Username'] ?></td>
				<td><a href="../editProduct.php?id=<?php echo $user['name'] ?>">Edit</a>&nbsp<a href="deleteProduct.php?id=<?php echo $user['name'] ?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>