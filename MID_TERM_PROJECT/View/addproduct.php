<?php
        include '../Controller/addproduct.php';
        ?>

<!DOCTYPE HTML>  
<html>
<body>
<br> <br> 
<h2> ADD PRODUCT </h2>
<br>
<form method = "POST">
<?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?> 
                     
Product Name:  <br>
<input type="text" name="pn" value="<?php echo $productname;?>">
<span><?php echo $productnameErr;?></span>
<br> <br>

Product Category:
<input type="radio" name="pc" id = "pc" <?php if (isset($prouctcat) && $prouctcat=="mobile") echo "checked";?> value="mobile">Mobiles
  <input type="radio" name="pc" id = "pc" <?php if (isset($prouctcat) && $prouctcat=="electronics") echo "checked";?> value="electronics">Electronics
  <input type="radio" name="pc" id = "pc"<?php if (isset($prouctcat) && $prouctcatr=="others") echo "checked";?> value="other">Others  
  <span><?php echo $productcatErr;?></span>
  <br><br>

Product Price: <br>
<input type="text" name="pp" value="<?php echo $productprice;?>">
<span><?php echo $productpriceErr;?></span>
<br> <br>
<input type="submit" name="submit" value="Append"> <br><br>
<a href="../view/product.php" >  Back  </a> 

<?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>

  </body>
  </html>
  <?php
  ?>