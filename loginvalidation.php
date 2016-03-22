<!DOCTYPE html>
<html>
<head>
</head>    
<body>
  <?php
// define variables and set to empty values
  $email = $password = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = test_input($_POST["email"]);
    $password = test_input($_POST["password"]) ;
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>

  <h2>Login</h2>            
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">       E-mail: <input type="text" name="email">
    <br><br>
    Password: <input type="text" name="password">
  </form>

  <?php

  $emailErr = $passwordErr = "";
  $email = $password = "";
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"])) {
      $emailErr = "E-mail is required";
    } else {
      $email = test_input($_POST["email"]);
  // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format"; 
      }
    }

    if (empty($_POST["password"])) {
      $passwordErr = "Password is required";
    } else {
      $password = test_input($_POST["password"]);
    }
  }
  ?>            
</body>
</html>