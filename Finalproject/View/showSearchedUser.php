
<!DOCTYPE html>
<html>
<head>
	<title></title>
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
		
	</style>
</head>
<body>

<!-- <?php 
    // include "nav.php";

?> -->

<table>
	<thead>
		<tr>
			
			<th>User_name</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($allSearchedUsers as $i => $user): ?>
			<tr>
				<!-- <td><a href="../View/showSeller.php?id=<?php echo $user['ID'] ?>"><?php echo $user['ID'] ?></a></td> -->
				<td><?php echo $user['username'] ?></td>
				<td><a href="../View/editSeller.php?id=<?php echo $user['ID'] ?>">Edit</a>&nbsp<a href="../Controller/deleteSeller.php?id=<?php echo $user['ID'] ?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>