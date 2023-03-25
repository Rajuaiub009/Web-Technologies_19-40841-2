
          function validateform(){
          var firstname=document.myform.username.value;  
          var lastname=document.myform.lastname.value;    
          var username=document.myform.username.value;  
          var password=document.myform.password.value;   
          var retypepassword=document.myform.retypepassword.value;

          if (firstname==null || firstname==""){  
		  alert("Firstname can't be blank");  
		  return false;  
          }

          else if (lastname==null || lastname==""){  
		  alert("Lastname can't be blank");  
		  return false;  
          }

         else if (username==null || username==""){  
		  alert("Username can't be blank");  
		  return false;  
          }

          else if(password.length<6){  
		  alert("Password must be at least 6 characters long.");  
		  return false;  
		  }  
     }

          function checkFirstname(){
               if(document.getElementById("firstname").value == ""){
               document.getElementById("firstnameErr").innerHTML= "firstname can't be blank";
               document.getElementById("firstname").style.borderColor = "red";
               document.getElementById("firstnameErr").style.color = "red";

               }
               else{
			  	document.getElementById("firstnameErr").innerHTML = "";
			  	document.getElementById("firstname").style.borderColor = "black";
               }

          }

          function checkLastname(){
               if(document.getElementById("lastname").value == ""){
               document.getElementById("lastnameErr").innerHTML = "Lastname can't be blank";
               document.getElementById("lastname").style.borderColor = "red";
               document.getElementById("lastnameErr").style.color = "red";

               

               }
               else{
			  	document.getElementById("lastnameErr").innerHTML = "";
			  	document.getElementById("lastname").style.borderColor = "black";
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
			


    





