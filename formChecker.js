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
  else{
    document.submit();
    return true;
  }
}
