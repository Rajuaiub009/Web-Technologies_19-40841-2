<!DOCTYPE html>  
 <html>  
    
      <body>    
      <div class="container" style="width:500px;">              
                <div class="table-responsive">         
                     <table class="table table-bordered">  
                          <tr>  
                               <th>Product Name</th> 
                               <th>Product Category</th>  
                               <th>Product Price</th>   
                                 
                          </tr>  
                          <?php   
                          include '../Controller/productdcontroller.php';

                          $data = loadData();

                          foreach($data as $row)  
                          {                         
                              ?>
                               <tr>
                               <td><a href="../view/productdetails.php? name=<?php echo $row['Product name']?>"><?php echo $row['Product name'] ?></a></td>
                               
                               <td><?php echo $row['Product Category'] ?></td>
                               <td><?php echo $row['Product Price'] ?></td>
                          </tr> 
                               <?php 
                          }  
                          ?>  
                     </table> 
                     <br>
                     <a href="../view/addproduct.php" > <button> ADD NEW </button> </a> <br> <br>
                     <a href="../view/Profile.php" > <button> BACK </button> </a> 
                     </div>
                 </div>
      </body>  
 </html>  