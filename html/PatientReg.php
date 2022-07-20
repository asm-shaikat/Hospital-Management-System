<?php
    session_start();
    $showAlert="";
    $alrtfname="";
    $alrtlname="";
    $alrtaddress="";
    $alrtadmit="";
    $alrtage="";
    $alrtmobile="";
    $altrroomNo="";
    if($_SERVER['REQUEST_METHOD']=='POST'){
        include 'db_conn.php';
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $address=$_POST['address'];
        $admitreason=$_POST['admitreason'];
        $mobile=$_POST['mobile'];
        $age=$_POST['age'];
        $roomNo=$_POST['roomNo'];
        if((!empty($_POST['fname'])) && !empty($_POST['lname']) && !empty($_POST['address']) && !empty($_POST['admitreason']) && !empty($_POST['mobile']) && !empty($_POST['roomNo'])){
            $sql = "INSERT INTO `patientreg` ( `fname`, `lname`, `address`, `admitreason`, `mobile`, `age`, `roomNo`) VALUES ('$fname', '$lname', '$address', '$admitreason', '$mobile', '$age', '$roomNo' )";
            $result = mysqli_query($conn, $sql);
            if ($result){
                $showAlert ="Form submitted";
            }

        }
        if(empty($_POST['fname'])){
            $alrtfname="First name required";
        }
        if(empty($_POST['lname'])){
            $alrtlname="Last name required";
        }
        if(empty($_POST['address'])){
            $alrtaddress="Address field required";
        }
        if(empty($_POST['admitreason'])){
            $alrtadmit="Admit reason field required";
        }
        if(empty($_POST['mobile'])){
            $alrtmobile="Mobile field required";
        }
        if(empty($_POST['age'])){
            $alrtage="Age field required";
        }
        if(empty($_POST['roomNo'])){
            $altrroomNo="Room number required";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/PatientReg.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>Regstration</title>
</head>
<body style="background-color: wheat;">
<?php
require "model.php";
    if($showAlert) {
    
        echo ' <div class="alert alert-success"> 
        <strong>Congratulations!</strong> '. $showAlert.'
    
       <button type="button" class="close" 
            data-dismiss="alert aria-label="Close">
            <span aria-hidden="true">×</span> 
       </button> 
     </div> '; 
    }
    
    if($alrtlname) {
    
        echo ' <div class="alert alert-danger 
            alert-dismissible fade show" role="alert"> 
        <strong>Error!</strong> '.$alrtlname.'
    
       <button type="button" class="close" 
            data-dismiss="alert aria-label="Close">
            <span aria-hidden="true">×</span> 
       </button> 
     </div> '; 
    }
    if($alrtaddress) {
    
        echo ' <div class="alert alert-danger 
            alert-dismissible fade show" role="alert"> 
        <strong>Error!</strong> '.$alrtaddress.'
    
       <button type="button" class="close" 
            data-dismiss="alert aria-label="Close">
            <span aria-hidden="true">×</span> 
       </button> 
     </div> '; 
    }
    if($alrtadmit) {
    
        echo ' <div class="alert alert-danger 
            alert-dismissible fade show" role="alert"> 
        <strong>Error!</strong> '.$alrtadmit.'
    
       <button type="button" class="close" 
            data-dismiss="alert aria-label="Close">
            <span aria-hidden="true">×</span> 
       </button> 
     </div> '; 
    }
    if($alrtage) {
    
        echo ' <div class="alert alert-danger 
            alert-dismissible fade show" role="alert"> 
        <strong>Error!</strong> '.$alrtage.'
    
       <button type="button" class="close" 
            data-dismiss="alert aria-label="Close">
            <span aria-hidden="true">×</span> 
       </button> 
     </div> '; 
    }
    if($alrtmobile) {
    
        echo ' <div class="alert alert-danger 
            alert-dismissible fade show" role="alert"> 
        <strong>Error!</strong> '.$alrtmobile.'
    
       <button type="button" class="close" 
            data-dismiss="alert aria-label="Close">
            <span aria-hidden="true">×</span> 
       </button> 
     </div> '; 
    }
    if($altrroomNo) {
    
        echo ' <div class="alert alert-danger 
            alert-dismissible fade show" role="alert"> 
        <strong>Error!</strong> '.$altrroomNo.'
    
       <button type="button" class="close" 
            data-dismiss="alert aria-label="Close">
            <span aria-hidden="true">×</span> 
       </button> 
     </div> '; 
    }
?>
    <form action="PatientReg.php" method="post">
    <div class="from">
            <h2 class="head">Regstration</h2>
        <div class="form-floating spc">
        <input type="text" class="form-control" id="floatingInput" placeholder="First name" name="fname" >
        <label for="floatingInput">First Name</label>
    </div>
    <div class="form-floating spc">
        <input type="text" class="form-control" id="floatingPassword" placeholder="Last name" name="lname">
        <label for="floatingInput">Last name</label>
    </div>
    <div class="form-floating spc">
        <input type="text" class="form-control" id="floatingPassword" placeholder="Address" name="address">
        <label for="floatingInput">Address</label>
    </div>
    <div class="form-floating spc">
        <input type="text" class="form-control" id="floatingPassword" placeholder="Admit reason" name="admitreason">
        <label for="floatingInput">Admit reason</label>
    </div>
    <div class="form-floating spc">
        <input type="text" class="form-control" id="floatingPassword" placeholder="Room Number" name="roomNo">
        <label for="floatingInput">Room Number</label>
    </div>
    <div class="form-floating spc">
        <input type="number" class="form-control" id="floatingPassword" placeholder="Age" name="age">
        <label for="floatingInput">Age</label>
    </div>
    <div class="form-floating spc">
        <input type="text" class="form-control" id="floatingPassword" placeholder="Mobile" name="mobile" pattern="[0-9]{11}">
        <label for="floatingInput">11 Digit Mobile number</label>
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
</div>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>