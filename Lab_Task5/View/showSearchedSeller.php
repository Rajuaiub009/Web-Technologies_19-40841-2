
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table,td,th{
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
			<th>User_id</th>
			<th>User_name</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($allSearchedSellers as $i => $seller): ?>
			<tr>
				<td><a href="..View/showSeller.php?id=<?php echo $seller['ID'] ?>"><?php echo $seller['ID'] ?></a></td>
				<td><?php echo $seller['username'] ?></td>
				<td><a href="..View/editSeller.php?id=<?php echo $seller['ID'] ?>">Edit</a>&nbsp<a href="..Controller/deleteSeller.php?id=<?php echo $seller['ID'] ?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>