<?php
include 'db_conn.php';
$sql = "Select * from patientreg";
$result=mysqli_query($conn,$sql);
if(isset($_GET["dlt"]))
{
  echo "ID:";
  echo $_GET["dlt"];
  echo " Patient release!<br>";
}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Release Patient</title>
  </head>
  <body style="background-color: white;">

  <?php require "model.php" ?>
      <h3 style="margin-left: 600px; background-color: black; color: blanchedalmond; width: 400px; text-align: center; margin-bottom: 30px;">Patient Detaill</h3>
  <table class="table table-success table-striped">
 <tr>
   <th>User ID</th>
   <th>First name</th>
   <th>Last name</th>
   <th>Address</th>
   <th>Admit reason</th>
   <th>Age</th>
   <th>Mobile</th>
   <th>Room no</th>
   <th>Delete</th>
 </tr>
 <?php

while ($row = mysqli_fetch_assoc($result)) {
    $_SESSION["id"] = $row["id"];
    echo "<tr>
    <td>" . $row["id"] . "</td>
    <td>" . $row["fname"] . "</td>
    <td>" . $row["lname"] . "</td>
    <td>" . $row["address"] . "</td>
    <td>" . $row["admitreason"] . "</td>
    <td>" . $row["age"] . "</td>
    <td>" . $row["mobile"] . "</td>
    <td>" . $row["roomNo"] . "</td>
    <td>" . "<a href=" . "deletedata.php" . "?id=" . $_SESSION["id"] . ">Delete</a>" . "</td>
    </tr>";
}
?>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
