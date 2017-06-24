<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sign In
    </title>
    <link rel="stylesheet" href="mycss.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
    </script>
    <link rel="stylesheet" href="mycss2.css">
  </head>
  <body>
    <div class="full">
      <h1>Log In
      </h1>
      <br>
      <div class="formbody">
        <form action="aftersignin.php" method="post">
          <div>
            <label>
              <b>Email
              </b>
            </label>
            <input type="text" placeholder="Enter Email" name="email" required class="form">
            <br>
            <br>
            <label>
              <b>Password
              </b>
            </label>
            <input type="password" placeholder="Enter Password" name="psw" required class="form">
            <br>
            <br>
            <br>
            <div class="subbtn">
              <button type="submit" class="btn btn-primary btn-md">Log In
              </button>
              <br>
              <br>
              <hr>
              <p>New User?
              </p>
              <a href="register.php" class="redirect">Register here
              </a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
