
function tokenRequest(cookie) {

  var setCookie = document.cookie;

  var EditedSetCookie = setCookie.replace(/ /g,"");
  var array = EditedSetCookie.split(";");
  var arraySize = array.length;
  var csrfToken = "";
  var csrfCookie = "";
  var i = 0;
  
  
  while(i <= arraySize){
    var element = array[i];
    var result = element.match(cookie+"=");
    if(result != null){
      var array1 = array[i].split("=");
      csrfToken = array1[1];
      csrfCookie = array1[0];
      break;
    }
    i++;
  }
  document.getElementById("Token").setAttribute("value", csrfToken);
  document.getElementById("CsrfCookie").setAttribute("value", csrfCookie);
}