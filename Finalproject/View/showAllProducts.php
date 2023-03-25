<?php  
require_once '../Controller/productInfo.php';
$products = fetchAllProducts();

    include "na.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title>product List</title>
</head>
<style>
    body{
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
    <h1> product List </h1>

<table>
	<thead>
		<tr>
			<th>Product Name</th>
			<th>Product Category</th>
			<th>Product Price</th>
		
		</tr>
	</thead>
	<tbody>
		<?php foreach ($products as $i => $product): ?>
			<tr>
				
				<td><?php echo $product['productname'] ?></td>
				<td><?php echo $product['productcategory'] ?></td>
				<td><?php echo $product['productprice'] ?></td>
                
				
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>