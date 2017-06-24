<!DOCTYPE html>
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
    <h1>Registration</h1>
    <br>
    <div class="formbody">
      <form action="afterregister.php" method="post">
    <div>
      <label><b>First Name</b></label>
      <input type="text" placeholder="Enter First Name" name="fname" required class="form">
<br><br>
      <label><b>Last Name</b></label>
      <input type="text" placeholder="Enter Last Name" name="lname" required class="form">
<br><br>
      <label><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required class="form">
<br><br>
      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required class="form">

<br><br><br>
      <div class="subbtn">
        <button type="submit" class="btn btn-primary btn-md">Sign Up</button>
        <br><br><hr>
        <p>Already a user?</p>
        <a href="signin.php" class="redirect">Log in here</a>
      </div>
    </div>
  </form>
    </div>

  </div>
  </body>
</html>
