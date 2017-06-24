<?php
include "mydbconnect.php";

$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$psw=$_POST["psw"];

$sql="SELECT * FROM `users` WHERE email ='$email';";
$var1=("satlting".$psw."done");
$enpsw=md5($var1);
$check=queryDatabase($sql);
 $rowcount=mysqli_num_rows($check);
 $var=0;
 if($rowcount>0)
   $var=0;
   else {
  $sql1=   "INSERT INTO `users` (`firstname`, `lastname`, `email`, `password`) VALUES
  ('$fname', '$lname', '$email', '$enpsw')";
  queryDatabase($sql1);
  $var=1;
   }
 ?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="mycss2.css">
  </head>
  <body>
     <div class="full">
    <?php
if ($var==1){
print("<h1>Registered Successfully!</h1>");
print("<p>You're successfully registered. Please Sign in!</p>");
}
else{
print("<h1>Uh-Oh!</h1>");
print("<p>You're an existing user. Please Sign in!</p>");
}
     ?>
<p>Thank You.</p>
    <br><a  href="signin.php">
    <button type="button" class="btn btn-primary btn-md">Log In</button>
</a>


  </div>
</body>
</html>
