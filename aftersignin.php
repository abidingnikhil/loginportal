<?php
include "mydbconnect.php";



$email=$_POST["email"];
$psw=$_POST["psw"];


$var1=("satlting".$psw."done");
$enpsw=md5($var1);
$sql=
"SELECT * FROM `users` WHERE email='$email';";
$check=queryDatabase($sql);

 $rowcount=mysqli_num_rows($check);
$var=0;
$row = mysqli_fetch_assoc($check);
$pswchch=$row["password"];
if ($enpsw==$pswchch){
  $var=1;
session_start();
$_SESSION["sid"]=session_id();
$_SESSION["fname"]=$row["firstname"];
$_SESSION["email"]=$row["email"];
$_SESSION["hello"]=2222;
// echo $_SESSION['sid'];
// header("Location:products.php");
}
 ?>

<html>

  <head>
    <meta charset="utf-8">
    <title>Sign Up</title>
<!-- <meta http-equiv="refresh" content="3;url=products.php" /> -->
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
print("<h1>Logged in Successfully!</h1>");
print("<p>You're successfully logged in.</p>");
echo(
          "<p>".
        "Welcome <b>". $row["firstname"]." "
      . $row["lastname"]."</b>!".
        "</p>");

}
else{
print("<h1>Aww, Snap!</h1>");
print("<p>Either the passwordyou entered is wronh or you're not an existing user. Please Sign Up/In!</p>");

  ?>
  <br>
  <a  href="register.php">
    <button type="button" class="btn btn-primary btn-md">Register</button>
  </a>  <a  href="signin.php">
      <button type="button" class="btn btn-primary btn-md">Sign In</button>
    </a>
  <?php
}
     ?>


  </div>
  <?php if(isset($_SESSION["fname"]))
  { ?>
    <script type="text/javascript">

                function Redirect() {
                   window.location="products.php";
                }


                setTimeout('Redirect()', 2000);

          </script>
          <?php } ?>
</body>
</html>
