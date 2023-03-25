<!DOCTYPE html>  
 <html>  
    
      <body>    
      <div class="container" style="width:500px;">              
                <div class="table-responsive">         
                     <table class="table table-bordered">  
                          <tr>  
                               <th>Phone</th> 
                               <th>EMail</th>  
          
                                 
                          </tr>  
                          <?php   
                          include '../Controller/contactcontroller.php';

                          $data = loadData();

                          foreach($data as $row)  
                          {                         
                              ?>
                               <tr>
                               
                               <td><?php echo $row['phone'] ?></td>
                               <td><?php echo $row['email'] ?></td>
                          </tr> 
                               <?php 
                          }  
                          ?>  
                     </table> 
                     <br>
                    
      </body>  
 </html>  