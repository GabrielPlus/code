<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="form">
    <h1>Login Form</h1>
    <form name="form" action="login.php" method="POST">
      <label for="name">name</label>
      <input type="text" id="user" name="name"  required></br></br>
      <label for="age">age</label>
      <input type="number" id="user" name="age"  required></br></br>
      <label for="email">email</label>
      <input type="text" id="user" name="email"  required></br></br>
      <label for="count">county</label>
      <input type="text" id="user" name="county"  required></br></br>
      <input type="submit" id="btn" value="Login" name="submit"/>
    </form>
  </div>
  <script>
    function isvalid(){
      var user = document.form.user.value;
      var pass = document.form.pass.value;
      if(user.length=="" && pass.length==""){
        alert("username and password field is empty!!!");
        return false
      }
      else{
        if(user.length==""){
        alert("username is empty!!!");
        return false)
      }
      if(pass.length==""){
        alert("password is empty!!!");
        return false)
      }
    }
</body>
</html>