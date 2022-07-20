<?php
session_start();
if(!isset($_SESSION['username']) || $_SESSION['loggedin']!=true){
    header("location:adminLogin.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="./../css/home.css">
    <link rel="stylesheet" href="./../bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <script src="./../bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <title>Home</title>
</head>
<body style="background-color: rgb(23, 64, 92);">
<div class="menu-bar">
        <a href="home.php" class="home">
            <div>
                <i class="material-icons" style="font-size:48px;color:rgb(255, 255, 255)">home</i>
                <h6 style="color:white;">Home</h6>
            </div>
        </a>
        <a href="doctor.php" class="contact">
            <div>
                <i class="material-icons" style="font-size:48px;color:rgb(255, 251, 251)">medication</i>
                <h6 style="color:white;">Doctor</h6>
            </div>
        </a>
        <a href="adminSignup.php" class="account">
            <div>
                <i class="material-icons" style="font-size:48px;color:rgb(255, 250, 250)">person_add_alt_1</i>
                <h6 style="color:white;">Admin</h6>
            </div>
        </a>
    </div>
    <div class="logout">
        <a href="logout.php"><button class="btn btn-danger">Logout</button></a>
    </div>

    <div class="web-body">
        <div class="quick-access">
            <div class="parent">
                <a href="PatientReg.php">
                    <div class="menu-reg patient-reg">
                        <i class="material-icons" style="font-size:70px;color:rgb(253, 253, 253)">person_add_alt_1</i>
                        <p style="color: white;">Patient Regstration</p>
                    </div>
                </a>
                <a href="release.php">
                    <div class="menu-reg patient-bill">
                        <i class="material-icons" style="font-size:70px;color:rgb(253, 253, 253)">check</i>
                        <p style="color: white;">Release Patient</p>
                    </div>
                </a>
                <a href="PatientMonitor.php">
                    <div class="menu-reg patient-monitor">
                        <i class="material-icons" style="font-size:70px;color:rgb(253, 253, 253)">videocam</i>
                        <p style="color: white;">Patient Monitor</p>
                    </div>
                </a>
            </div>
            <div class="child">
                <a href="DoctorReg.php">
                    <div class="menu-reg doctor-reg">
                        <i class="material-icons" style="font-size:70px;color:rgb(253, 253, 253)">supervisor_account</i>
                        <p style="color: white;">Doctor's Regstration</p>
                    </div>
                </a>
                <a href="editDoctor.php">
                    <div class="menu-reg doctor-monitor">
                        <i class="material-icons" style="font-size:70px;color:rgb(253, 253, 253)">edit</i>
                        <p style="color: white;">Edit Doctor Detail</p>
                    </div>
                </a>
            </div>

        </div>
    </div>
</body>
</html>
