<style>
    body {
      background-color: lightblue;
    }
h1 {text-align: center;}
h2 {text-align: center;}
p {text-align: center;}
div {text-align: center;}
    </style>
<?php

session_start();


echo $_SESSION['name']; 
echo date('Y m d H:i:s', $_SESSION['time']);
echo "<br>session_id(): ".session_id(); 

echo '<br /><a href="register.php">register</a>';
session_unset(); 
session_destroy(); 
session_write_close(); 
setcookie(session_name(),'',0,'/'); 
session_regenerate_id(true); 

// Define regular expressions for input validation
$nameRegex = "/^[A-Za-z ]+$/";
$matricnoRegex = "/^[A-Za-z0-9]+$/";
$mobilephoneRegex = "/^[0-9]{11}$/";

// Define error messages
$errors = array();
$nameError = "";
$matricnoError = "";
$currentaddressError = "";
$homeaddressError = "";
$emailError = "";
$mobilephoneError = "";
$homephoneError = "";

// Validate input fields
if (!preg_match($nameRegex, $_POST["name"])) {
  $nameError = "Only letters and spaces allowed";
  array_push($errors, $nameError);
}
if (!preg_match($matricnoRegex, $_POST["matricno"])) {
  $matricnoError = "Only letters and digits allowed";
  array_push($errors, $matricnoError);
}
if ($_POST["currentaddress"] === "") {
  $currentaddressError = "Please enter your current address";
  array_push($errors, $currentaddressError);
}
if ($_POST["homeaddress"] === "") {
  $homeaddressError = "Please enter your home address";
  array_push($errors, $homeaddressError);
}
if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) || !strpos($_POST["email"], "@gmail.com")) {
  $emailError = "Please enter a valid Gmail account";
  array_push($errors, $emailError);
}
if (!preg_match($mobilephoneRegex, $_POST["mobilephone"])) {
  $mobilephoneError = "Please enter a valid 11-digit mobile phone number";
  array_push($errors, $mobilephoneError);
}
if (!preg_match($mobilephoneRegex, $_POST["homephone"])) {
  $homephoneError = "Please enter a valid 11-digit home phone number";
  array_push($errors, $homephoneError);
}

// If there are no errors, display the input values
if (count($errors) == 0) {
  echo "<h2>Student Details</h2>";
  echo "<p><strong>Name:</strong> " . $_POST["name"] . "</p>";
  echo "<p><strong>Matric No:</strong> " . $_POST["matricno"] . "</p>";
  echo "<p><strong>Current Address:</strong> " . $_POST["currentaddress"] . "</p>";
  echo "<p><strong>Home Address:</strong> " . $_POST["homeaddress"] . "</p>";
  echo "<p><strong>Email:</strong> " . $_POST["email"] . "</p>";
  echo "<p><strong>Mobile Phone No:</strong> " . $_POST["mobilephone"] . "</p>";
  echo "<p><strong>Home Phone No:</strong> " . $_POST["homephone"] . "</p>";
}
// Otherwise, display the error messages
else {
  echo "<h2>Errors:</h2>";
  foreach ($errors as $error) {
    echo "<p>" . $error . "</p>";
  }
}
?>