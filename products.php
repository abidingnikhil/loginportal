
<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Products</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="mycss2.css">
    <link rel="stylesheet" href="table.css">

  </head>
  <body>
<?php if(isset($_SESSION["fname"]))
{ ?>
    <div class="table">
    <h1>Product Page</h1>
    <p>Welcome   <b>
<?php

echo $_SESSION["fname"];
 ?>

</b>
    </p>
    <?php } ?>
    <br><table>
      <?php
      include "mydbconnect.php";

      //echo $_SESSION["email"];die;
      if (isset($_SESSION["email"])) {

    echo("<tr>"."<th>". "Store Code"."</th>"."<th>". "Name"."</th>"."<th>". "Description"."</th>"."</tr>");
    $sql2="SELECT * FROM products ;";
    $result1=queryDatabase($sql2);
    while($row = mysqli_fetch_assoc($result1)) {
            echo(
              "<tr>".
            "<td>". $row["store_code"]."</td>".
            "<td>". $row["name"]."</td>".
            "<td>". $row["description"]."</td>".
            "</tr>");
        }
   }
   else{
   print("<h1>Uh-Oh! No current sessions</h1>");
   print("<p>Please Sign In!</p>");
     ?>
     <br>
     <a  href="signin.php">
       <button type="bu tton" class="btn btn-primary btn-md">Log IN</button>
     </a>
     <?php
   }
        ?>

</table>
<?php if(isset($_SESSION["fname"]))
{ ?>
  <br>
  <hr>
<form action="destroy.php">
  <button type="submit" class="btn btn-primary btn-md">Log Out</button>

    </form>
    <?php }

     ?>

  </div>
  </body>
</html>
