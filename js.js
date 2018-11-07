let loginContainer = document.getElementById('loginContainer');
let loginButton = document.getElementById('loginButton');
let loginOutButton = document.getElementById('logOutButton');

loginButton.addEventListener("click", function() {
  loginContainer.style.visibility = "visible";
});

logOutButton.addEventListener("click", function() {

});

$("#submitLoginButton").click(function(){
  console.log("klick på submitloginButton");
  $.getJSON("login.php", {username: $("#inputUsername").val(), password: $("#inputPassword").val()},
  function(data){
    console.log(data.login);
    if (data.login == true) {
      console.log("inne");
      loginContainer.style.visibility = "hidden";
      loginButton.style.display = "none";
      logOutButton.style.visibility = "visible";
      //logOutButton.style.display = "visible";
    } else {
      console.log("inte inloggad");
    }
  });
});
