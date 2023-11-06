<?php
session_start();
$_SESSION

 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
<html>

<head>
  <link rel="stylesheet" href="index.css">
</head>
<title>LOGIN</title>

  <body>
    <div class="hero"></div>
    <div class="form-box">
      <div class="button-box">
        <div id="bnt">
        </div>
        <button type="button" class="toggle-bnt" onclick="login()"> Login </button>
        <button type="button" class="toggle-bnt" onclick="register()"> Register </button>
      </div>
          <p> <ins>Open me in Android</ins> </p>

      <form id="login" class="input-group" action="login.inc.php" method="">
        <input type="text" class="input-field" placeholder="Enter Username" required>
        <input type="password" class="input-field" placeholder="Enter Password" required>
        <button type="submit" class="submit-btn">Login</button>
      </form>

      <form id="register" class="input-group">
          <input type="text" class="input-field" placeholder="Enter Username" required>
          <input type="email" class="input-field" placeholder="Enter Email" required>
        <input type="password" class="input-field" placeholder="Enter Password" required>
        <button type="submit" class="submit-btn">Register</button>
      </form>

    </div>

      <script>
        var x = document.getElementById ("login");
          var y = document.getElementById ("register");
              var z = document.getElementById ("bnt");

            function register(){
              x.style.left ="-400px";
              y.style.left = "75px";
              z.style.left ="110px";

            }
            function login(){
              x.style.left="75px";
                y.style.left="450px";
                  z.style.left="0px";
            }
      </script>

  </body>


</html>
