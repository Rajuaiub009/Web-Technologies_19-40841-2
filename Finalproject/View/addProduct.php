<?php 
        include "na.php";

     ?>
   
<!DOCTYPE HTML>  
<html>
<body> 
<style>
    h2{
    background-color: darkblue;
    text-align: center;
    color: burlywood;
     }

 body{
  background-image: url("../images/image4.jpg");
    text-align: center;
    color:white;
   }
     </style>
<h2> ADD PRODUCT </h2>
<form name="myform" method="post" action="../Controller/createProduct.php" onsubmit="return validateform()" >  
Product Name  
<br>
<input type="text" name="productname" id="productname" onblur="checkProductname()" onkeyup="checkProductname()"> 
<p id="productnameErr"></p>
<br> 
Product Category

<input type="radio" name="productcategory" id = "productcategory" value="mobile" onblur="checkProductcategory()" onkeyup="checkProductcategory()"> Mobiles
  <input type="radio" name="productcategory" id = "productcategory" value="electronics" onblur="checkProductcategory()" onkeyup="checkProductcategory()">Electronics
  <input type="radio" name="productcategory" id = "productcategory" value="other" onblur="checkProductcategory()" onkeyup="checkProductcategory()">Others  
  <p id="productcategoryErr"></p>
  <br>

Product Price <br>
<input type="text" name="productprice" id="productprice" onblur="checkProductprice()" onkeyup="checkProductprice()"> 
<p id="productpriceErr"></p>
<br> 
<input type="submit" name="submit" value="ADD"> 
<input type="reset" name="reset">

</form>
<a href="../View/product.php"> <button> Back </button></a>
<script src="../View/js/addproduct.js"></script>

  </body>
  </html>