<?php  
require_once '../Controller/productInfo.php';

$product = fetchProduct($_GET['id']);


    include "na.php";



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<tr>
            <th>Product Name</th>
			<th>Product Category</th>
			<th>Product Price</th>
	</tr>
	<tr>
		<td><a href="showProduct.php?id=<?php echo $product['ID'] ?>"><?php echo $product['productname'] ?></a></td>
		<td><?php echo $product['productcategory'] ?></td>
		<td><?php echo $product['productprice'] ?></td>
		
		
	</tr>

</table>


</body>
</html>