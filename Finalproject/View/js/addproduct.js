function validateform(){  
    var productname=document.myform.productname.value;  
    var productcategory=document.myform.productcategory.value; 

      if (productname==null || productname==""){  
      alert("Product name can't be empty");  
      return false;  
      }
      else if ( productcategory==null || productcategory==""){  
            alert("Product category can't be empty");  
            return false; 
            }
 }

      function checkProductname() {
        if (document.getElementById("productname").value == "") {
              document.getElementById("productnameErr").innerHTML = "Productname can't be Empty";
              document.getElementById("productname").style.borderColor = "red";
        }else{
              document.getElementById("productnameErr").innerHTML = "";
              document.getElementById("productname").style.borderColor = "black";
        }		
    }

//     function checkProductcategory() {
//         if (document.getElementById("productcategory").value == "") {
//               document.getElementById("productcategoryErr").innerHTML = "Product category can't be Empty";
//               document.getElementById("productcategory").style.borderColor = "red";
//         }else{
//               document.getElementById("productcategoryErr").innerHTML = "";
//               document.getElementById("productcategory").style.borderColor = "black";
//         }		
//     }

    function checkProductprice() {
        if (document.getElementById("productprice").value == "") {
              document.getElementById("productpriceErr").innerHTML = "Product price can't be Empty";
              document.getElementById("productprice").style.borderColor = "red";
        }else{
              document.getElementById("productpriceErr").innerHTML = "";
              document.getElementById("productprice").style.borderColor = "black";
        }		
    }