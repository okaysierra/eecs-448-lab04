function validate() {
  var x = document.forms["order"]["email"].value;
  var y = document.forms["order"]["password"].value;
  var z = document.forms["order"]["plates"].value;
  var a = document.forms["order"]["pillow"].value;
  var b = document.forms["order"]["tote"].value;
  var c = document.getElementsByName("shipping").value;

  if(x==null || x==""){
    alert("Email must be filled out");
    return false;
  }
  else if(y==null || y=="") {
    alert("You must enter a password");
    return false;
  }
  else if(z==null || z=="" || a==null || a=="" || b==null || b==""){
      alert("Quantities cannot be blank");
      return false;
  }
  else if(z<0 || a<0 || b<0){
    alert("Quantities must be greater than or equal to zero");
    return false;
  }
  else if(c==null){
    alert("You must select a shipping option");
    return false;
  }
  else if(emailcheck(x)!=true){
    alert("Please enter a valid email address")
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
