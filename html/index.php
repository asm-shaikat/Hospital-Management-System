<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $comments=$_POST['comments'];
     $servername="localhost";
     $username="root";
     $password="";
     $database="projectresources";
     $conn=mysqli_connect($servername,$username,$password,$database);
     if(!$conn){
         die("Sorry we failed to connect: ".mysqli_connect_error());

     }
     else{
         echo"Connect successfully";
         $sql="INSERT INTO `doctors` (`comments`) VALUES ('$comments')";
         $result=mysqli_query($conn,$sql);
         if($result){
             echo"Recorded successfully! ";
         }
         else{
             echo"Gota a errora:".mysqli_errno($conn);
         }
        }
    }
?>