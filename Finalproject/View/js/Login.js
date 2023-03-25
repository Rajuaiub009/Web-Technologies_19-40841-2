function validateform(){  
    var username=document.myform.username.value;  
    var password=document.myform.password.value;  
    
            if (username==null || username==""){  
      alert("Username can't be blank");  
      return false;  
              
      
    }else if(password.length<6){  
      alert("Password must be at least 6 characters long.");  
      return false;  
      }  
    }
    function checkUsername() {
        if (document.getElementById("username").value == "") {
              document.getElementById("usernameErr").innerHTML = "username can't be blank";
              document.getElementById("username").style.borderColor = "red";
              document.getElementById("usernameErr").style.color = "red";
              
        }else{
              document.getElementById("usernameErr").innerHTML = "";
              document.getElementById("username").style.borderColor = "black";
              document.getElementById("usernameErr").style.color = "red";

        }			
    }
    function checkPass(){
        if (document.getElementById("password").value == "") {
              document.getElementById("passErr").innerHTML = "Password can't be blank";
              document.getElementById("password").style.borderColor = "red";
              document.getElementById("passErr").style.color = "red";
        }else{
            document.getElementById("passErr").innerHTML = "";
              document.getElementById("password").style.borderColor = "black";
        }
    }