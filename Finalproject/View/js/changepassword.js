function validateform(){
    var username=document.myform.username.value;
    var currentpass=document.myform.currentpass.value;
    var newpass=document.myform.newpass.value;
    var retypenewpass=document.myform.retypenewpass.value;

    if(username==null || username==""){
        alert("username can't be empty");
        return false;
    }
    else if(currentpass.length<6){
        alert("password must be at least 6 characters");
    }
    if(currentpass == newpass){
        alert("Current and new Password can't be Same");
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

function checkCurrentpass(){
    if (document.getElementById("currentpass").value == "") {
      document.getElementById("currentpassErr").innerHTML = "can't be blank";
      document.getElementById("currentpass").style.borderColor = "red";
}else{
    document.getElementById("currentpassErr").innerHTML="";
    document.getElementById("currentpass").style.borderColor ="black";
     }
}

function checkNewpass(){
    if (document.getElementById("newpass").value == "") {
      document.getElementById("newpassErr").innerHTML = "can't be blank";
      document.getElementById("newpass").style.borderColor = "red";
}else{
    document.getElementById("newpassErr").innerHTML="";
    document.getElementById("newpass").style.borderColor ="black";
    }
}

function checkRetypenewpass(){
    if (document.getElementById("retypenewpass").value == "") {
      document.getElementById("retypenewpassErr").innerHTML = "can't be blank";
      document.getElementById("retypenewpass").style.borderColor = "red";
}else{
    document.getElementById("retypenewpassErr").innerHTML="";
    document.getElementById("retypenewpass").style.borderColor ="black";
    }
}