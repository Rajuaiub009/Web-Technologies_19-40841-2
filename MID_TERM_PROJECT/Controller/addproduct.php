<?php

    //session_start();
   $productname = $productcat = $productprice = "";
   $productnameErr = $productcatErr = $productpriceErr = "";
    
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
  
    if (empty($_POST["pn"])) 
    {
        $productnameErr = "Product name is required";    
    }

    else
    {
     $productname = $_POST["pn"];    
    }
    if (empty($_POST["pc"])) 
          {
            $productcatErr = "*Category is required";
          } 
          else
           {
            $productcat = $_POST["pc"];
          }


    if(empty($_POST["pp"]))
    {
        $productpriceErr = "Price is required";
    }
    else
    {
        $productprice = $_POST["pp"]; 
    }

if(isset($_POST["submit"]))
           if(isset($_POST["pc"]))
           {

               if(file_exists('../product.json'))
               {
               $current_data = file_get_contents('../product.json');  
               $array_data = json_decode($current_data, true);  
               $extra = array(  
                    'Product name'               =>     $_POST['pn'],  
                    'Product Category'            =>     $_POST['pc'],  
                    'Product Price'          =>     $_POST["pp"] 
               );  
               $array_data[] = $extra;  
               $final_data = json_encode($array_data);  
               if(file_put_contents('../product.json', $final_data))  
               {  
                    $message = "<label class='text-success'>**Successfully Appended**</p>";  
               }  
          }  
          else  
          {  
               $error = 'JSON File not exits';  
          } 
        } 
    }
            

?>