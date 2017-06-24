<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script type="text/javascript">

                function Redirect() {
                   window.location="signin.php";
                }


                setTimeout('Redirect()', 1000);

          </script>
  </head>
  <body>

  </body>
</html>
