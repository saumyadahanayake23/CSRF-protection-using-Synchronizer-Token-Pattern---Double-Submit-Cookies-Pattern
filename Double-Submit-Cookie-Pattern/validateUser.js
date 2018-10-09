
function ValidateUser() {
  var name = document.forms["logiForm"]["username"].value;
  var password = document.forms["loginForm"]["password"].value;

  if (name != "saumya"  || password != "saumya123"){
    alert("Invalid username or password");
    return false;
  }
}