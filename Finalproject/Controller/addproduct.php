<?php

    //session_start();
   $productname = $productcategory = $productprice = "";
  
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productname = validate($_POST["productname"]?? "");

    $productcategory = validate($_POST["productcategory"]?? "");

    $productprice = validate($_POST["productprice"]?? "");
    
   }

   function validate($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  $isValidate = true;
    
  {
    
    if (empty($_POST["productname"])) 
    {
        $productnameErr = "Product name is required";    
    }

    else
    {
     $productname = $_POST["productcategory"];    
    }
    if (empty($_POST["productcategory"])) 
          {
            $productcatErr = "*Category is required";
          } 
          else
           {
            $productcat = $_POST["productcategory"];
          }


    if(empty($_POST["productprice"]))
    {
        $productpriceErr = "Price is required";
    }
    else
    {
        $productprice = $_POST["productprice"]; 
    }

// if(isset($_POST["submit"]))
//            if(isset($_POST["pc"]))
//            {

//                if(file_exists('../product.json'))
//                {
//                $current_data = file_get_contents('../product.json');  
//                $array_data = json_decode($current_data, true);  
//                $extra = array(  
//                     'Product name'               =>     $_POST['pn'],  
//                     'Product Category'            =>     $_POST['pc'],  
//                     'Product Price'          =>     $_POST["productprice"] 
//                );  
//                $array_data[] = $extra;  
//                $final_data = json_encode($array_data);  
//                if(file_put_contents('../product.json', $final_data))  
//                {  
//                     $message = "<label class='text-success'>**Successfully Aproductpriceended**</p>";  
//                }  
//           }  
//           else  
//           {  
//                $error = 'JSON File not exits';  
//           } 
//         } 
   }

   if ($isValidate) {
    $servername = "localhost";
    $u = "root";
    $p = "";
    $dbname = "ecommerce";
    // Create connection
    $conn = mysqli_connect($servername, $u, $p, $dbname);
    
    // Check connection
    if (!$conn) {
      die("Connection failed: ".mysqli_connect_error());
    }
    //echo "Connected successfully";
  
    $sql = "INSERT INTO add_product  VALUES ('$productname', '$productcategory', '$productprice');";
  
    //echo $sql;
    $result = $conn->query($sql);
    // var_dump ($result);
    // $row = $result->fetch_assoc();
}
?>
