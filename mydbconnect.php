<?php

function queryDatabase($queryString)
{
$conn=openDatabase();
$result=useDatabase($conn,$queryString);
closeDatabase($conn);
return $result;
echo($result);
}

function openDatabase()
{
  $servername = "localhost";
  $username = "root";
  $password = "";

  $conn = mysqli_connect($servername, $username, $password,"mykart");
return $conn;
}

function useDatabase($conn,$queryString)
{
//$result is associative array for requested query
// $result = mysql_query ($queryString);
$result = mysqli_query($conn, $queryString);
//Return result - needs to be processed using the
return $result;
}

function closeDatabase($conn)
{
//close db
// mysql_close();
mysqli_close($conn);
}

?>
