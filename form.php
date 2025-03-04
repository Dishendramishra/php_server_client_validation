<?php
$email = $_POST["email"];
$name = $_POST["name"];

$emailPattern = '/^[^\s@]+@[^\s@]+\.[^\s@]+$/';
$error = "";
$msg = "";

if (!preg_match($emailPattern, $email)) {
  $error .= "Invalid email format<br>";
}
else{
  $msg .= "Email is OK.<br>";
}
if (!preg_match('/^[a-zA-Z]{3,15}$/',$name)) {
  $error .= "Invalid name format";
}
else{
  $msg .= "Name is OK.";
}

echo $error;
echo $msg;
  ?>
<!-- for regex explanation https://regexr.com/ -->