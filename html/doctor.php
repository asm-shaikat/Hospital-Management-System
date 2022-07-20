<?php
include 'db_conn.php';
$sql = "Select * from doctorreg";
$result=mysqli_query($conn,$sql);

?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Doctor Detail</title>
  </head>
  <body style="background-color: whitesmoke;">
    <div>
      <?php require "model.php" ?>
      <h3 style="margin-left: 600px; background-color: black; color: blanchedalmond; width: 400px; text-align: center; margin-bottom: -30px;">Doctor's Detail</h3>
    </div>
  <table class="table table-success table-striped tb" style="width: 80%; margin-left: 170px; margin-top: 50px;">
 <tr>
   <th>ID</th>
   <th>Name</th>
   <th>Designation</th>
   <th>Department</th>
   <th>Address</th>
   <th>Duty Time From</th>
   <th>Duty Time To</th>
   <th>Mobile</th>
 </tr>
 <?php

while ($row = mysqli_fetch_assoc($result)) {
    $_SESSION["id"] = $row["id"];
    echo "<tr>
    <td>" . $row["id"] . "</td>
    <td>" . $row["name"] . "</td>
    <td>" . $row["designation"] . "</td>
    <td>" . $row["department"] . "</td>
    <td>" . $row["address"] . "</td>
    <td>" . $row["dutyTimeStart"] . "</td>
    <td>" . $row["dutyTimeEnd"] . "</td>
    <td>" . $row["mobile"] . "</td>
    </tr>";
}
?>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
