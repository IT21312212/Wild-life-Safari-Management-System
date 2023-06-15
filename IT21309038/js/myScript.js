//image slider js
var counter = 1;

setInterval(function(){
  document.getElementById('radio' + counter).checked = true;
  counter++;
  if(counter > 5)
  {
    counter = 1;
  }
},5000);

//login button
function myFunction()
{
  var un = document.forms["myForm"]["Uname"].value;
  var pw = document.forms["myForm"]["pwd"].value;
  if(un != "" && pw != "")
  {
    alert("correct!!!");
  }
  else{
    alert("invalid username and password");
  }
}

//create account button
function myFunction1()
{
  location.replace('../../IT21312380/html/registration.html');
}
