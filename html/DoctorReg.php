<?php
session_start();
$alrtSuccess="";
$alrt="";
if(empty($_SESSION['username'])){
  header("location:adminLogin.php");
}
    if($_SERVER['REQUEST_METHOD']=='POST'){
        include "db_conn.php";
        $name=$_POST['name'];
        $designation=$_POST['designation'];
        $address=$_POST['address'];
        $department=$_POST['department'];
        $dutyTimeStart=$_POST['dutyTimeStart'];
        $dutyTimeEnd=$_POST['dutyTimeEnd'];
        $mobile=$_POST['mobile'];

        if(!empty($_POST['name']) && !empty($_POST['designation']) && !empty($_POST['address']) && !empty($_POST['department']) && !empty($_POST['dutyTimeStart']) && !empty($_POST['dutyTimeEnd']) && !empty($_POST['mobile'])){
         $sql="INSERT INTO doctorreg (`name`,`designation`,`address`,`department`,`dutyTimeStart`,`dutyTimeEnd`,`mobile`) VALUES ( '$name','$designation','$address','$department','$dutyTimeStart','$dutyTimeEnd','$mobile')";
         $result=mysqli_query($conn,$sql);
         if(!$result)
         {
            $alrt="Your input is wrong";
         }
         if($result){
            $alrtSuccess="Form submission successfully.";
         }
         else{
             echo "Form submission unsuccessful";
         }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/DoctorReg.css">
    <link rel="stylesheet" href="./../bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./../bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/js/bootstrap.min.js">
    <title>Doctor's Regstration</title>
</head>
<body style="background-color: wheat;">
    <?php 
    require "model.php";
    if($alrtSuccess) {
    
        echo ' <div class="alert alert-success
            alert-dismissible fade show" role="alert"> 
        <strong>Congratulations!</strong> '.$alrtSuccess.'
    
       <button type="button" class="close" 
            data-dismiss="alert aria-label="Close">
            <span aria-hidden="true">×</span> 
       </button> 
     </div> '; 
    }
    ?>
    <div class="form">
    <form action="DoctorReg.php" method="post" class="form">
            <h2 class="head">Doctors Regstration</h2>
        <div class="form-floating spc">
        <input type="text" class="form-control" id="floatingInput" placeholder="Name" name="name" required>
        <label for="floatingInput">Name</label>
    </div>
    <div class="form-floating spc">
        <input type="text" class="form-control" id="floatingPassword" placeholder="Designation" name="designation"  required>
        <label for="floatingInput">Designation</label>
    </div>
    <div class="form-floating spc">
        <input type="text" class="form-control" id="floatingPassword" placeholder="Address" name="address" required>
        <label for="floatingInput">Address</label>
    </div>
    <div class="form-floating spc">
        <input type="text" class="form-control" id="floatingPassword" placeholder="Department" name="department"  required>
        <label for="floatingInput">Department</label>
    </div>
    <div class="form-floating spc">
        <input type="text" class="form-control" id="floatingPassword"  name="dutyTimeStart" pattern="[0-9]{2}:[0-9]{2}:[0-9]{2}" required>
        <label for="floatingInput">Duty time start</label>
    </div>
    <div class="form-floating spc">
        <input type="text" class="form-control" id="floatingPassword"  name="dutyTimeEnd" pattern="[0-9]{2}:[0-9]{2}:[0-9]{2}" required>
        <label for="floatingInput">Duty time end</label>
    </div>
    <div class="form-floating spc">
        <input type="text" class="form-control" id="floatingPassword" placeholder="Mobile" name="mobile" pattern="[0-9]{11}" required>
        <label for="floatingInput">Mobile number</label>
    </div>
    <button type="submit" class="btn btn-warning" name = "submit">Submit</button>
</div>
</form>
    </div>
</body>
</html>