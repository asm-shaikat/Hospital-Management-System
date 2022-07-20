<?php
$id = $_GET["id"];
include 'db_conn.php';
$sql = "DELETE FROM patientreg WHERE id = $id";
$result=mysqli_query($conn,$sql);
header("Location: release.php?dlt=$id")
?>
