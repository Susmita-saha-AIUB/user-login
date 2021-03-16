<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = $passErr =  "";
$name = $email = $gender = $comment = $website = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $fnameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
  
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  
  if (empty($_POST["password"])) {
    $passErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
  }
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Login System</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
 First Name: <input type="text" name="First name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Last Name: <input type="text" name="Last name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
   Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  
  User Name: <input type="text" name= "User Name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  
  Password: <input type="password" name= "User Password">
  <span class="error">* <?php echo $passErr;?></span>
  <br><br>
  
  Recovary-email: <input type="text" name="Recovery-email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  
  <button type="submit" form="form" value="Submit">Submit</button><br>


<?php


session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php

$_SESSION["User Name"]= "abc" ;
$_SESSION["First Name"] = "AB" ;
$_SESSION["Last Name"] = "CD" ;
$_SESSION["E-mail"] = "a@gmail" ;
echo "Session variables are set.";
?>

</body>
</html>

</body>
</html>