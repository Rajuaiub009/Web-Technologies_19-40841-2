
          function validateform(){
            var name=document.myform.name.value;  
            var email=document.myform.email.value;    
            var username=document.myform.username.value;  
            var password=document.myform.password.value;   
            var retypepassword=document.myform.retypepassword.value;
  
            if (name==null || name==""){  
            alert("Name can't be blank");  
            return false;  
            }
  
       }
  
            function checkName(){
                 if(document.getElementById("name").value == ""){
                 document.getElementById("nameErr").innerHTML = "name can't be blank";
                 document.getElementById("name").style.borderColor = "red";
  
                 }
                 else{
                    document.getElementById("nameErr").innerHTML = "";
                    document.getElementById("name").style.borderColor = "black";
                 }
  
            }
  
            function checkEmail(){
                 if(document.getElementById("email").value == ""){
                 document.getElementById("emailErr").innerHTML = "email can't be blank";
                 document.getElementById("email").innerHTML = "name can't be blank";
  
                 }
                 else{
                    document.getElementById("emailErr").innerHTML = "";
                    document.getElementById("email").style.borderColor = "black";
                 }
  
            }
            function checkUsername() {
              if (document.getElementById("username").value == "") {
                    document.getElementById("usernameErr").innerHTML = "username can't be blank";
                    document.getElementById("username").style.borderColor = "red";
              }else{
                    document.getElementById("usernameErr").innerHTML = "";
                    document.getElementById("username").style.borderColor = "black";
  
              }
            }
  
                 function checkPass(){
              if (document.getElementById("password").value == "") {
                    document.getElementById("passErr").innerHTML = "Password can't be blank";
                    document.getElementById("password").style.borderColor = "red";
              }else{
                  document.getElementById("passErr").innerHTML = "";
                    document.getElementById("password").style.borderColor = "black";
              }
          }
          function checkRetypepass(){
              if (document.getElementById("retypepassword").value == "") {
                    document.getElementById("retypepasswordErr").innerHTML = " can't be blank";
                    document.getElementById("retypepassword").style.borderColor = "red";
              }else{
                  document.getElementById("retypepasswordErr").innerHTML = "";
                    document.getElementById("retypepassword").style.borderColor = "black";
              }
          }
              
  
  
      
  
  
  
  
  
  