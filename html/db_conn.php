<?php
$server="localhost";
$username="root";
$password="";
$database="hospital";
$conn=mysqli_connect($server,$username,$password,$database);
if(!$conn){
    echo "Database not connected";
}
?>