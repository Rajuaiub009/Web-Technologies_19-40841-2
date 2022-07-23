<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <?php 
        include "nav.php";

     ?>
   

 <form action="controller/createProduct.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="bprice">Buying Price:</label><br>
  <input type="text" id="bprice" name="bprice"><br>
  <label for="sprice">Selling Price:</label><br>
  <input type="text" id="sprice" name="sprice"><br>
 
  <input type="submit" name = "createProduct" value="Create">
  <input type="reset"> 
</form> 

</body>
</html>

