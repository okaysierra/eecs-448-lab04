function validate() {
  var x = document.getElementById("email").value;
  var y = document.getElementById("password").value;
  var z = document.getElementById("plates").value;
  var a = document.getElementById("pillow").value;
  var b = document.getElementById("tote").value;
  var c = document.getElementsByTagName("shipping").value;

  if(x==null || x==""){
    window.alert("Email must be filled out");
    return false;
  }
  else if(y==null || y=="") {
    window.alert("You must enter a password");
    return false;
  }
  else if(z==null || z=="" || a==null || a=="" || b==null || b==""){
      window.alert("Quantities cannot be blank");
      return false;
  }
  else if(z<0 || a<0 || b<0){
    window.alert("Quantities must be greater than or equal to zero");
    return false;
  }
  else if(c==null){
    window.alert("You must select a shipping option");
    return false;
  }
  else if(emailcheck(x)!=true){
    window.alert("Please enter a valid email address")
    return false;
  }
  else{
    return true;
  }
}

function emailcheck(var email){
  var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
  return re.test(email);
}
