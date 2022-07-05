<!DOCTYPE html>  
 <html>  
    <body>
    
                          <?php   
                          include '../Controller/regdatacontroller.php';

                          $data = loadData();

                          foreach($data as  $row)  
                          {                         
                              ?>
                              <?php echo "Firstname:"; echo $row['Firstname']; echo "<br> <br>"?>
                             
                             
                               <?php echo "Lastname:"; echo $row['Lastname']; echo "<br> <br>";?>
                               
                               <?php echo "E-mail:"; echo $row['e-mail']; echo "<br> <br>" ?>
                              
                               <?php echo "Username:"; echo $row['Username']; echo "<br> <br>" ?>
                               
                               <?php echo"Gender:"; echo $row['Gender']; echo "<br> <br>" ?>
                             
                               <?php echo "Date of Birth:"; echo $row['Dob']; echo "<br> <br>" ?>
                        
                               <?php 
                          }  
                          ?>  
                     <br>
                   
                     <a href="../view/Profile.php" > <button> BACK </button> </a> 
      </body>  
 </html>  