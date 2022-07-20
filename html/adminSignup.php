<?php
$showAlert = false;
$showError = false;
$alrtuser=false;
$alrtpass=false;
$alrtcpass=false;
session_start();
if(empty($_SESSION['username']))
{
  header("location:adminLogin.php");
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'db_conn.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $exists=false;
    if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['cpassword'])){
        if(($password == $cpassword) && $exists==false){
            $sql = "INSERT INTO `signup` ( `username`, `password`, `date`) VALUES ('$username', '$password', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if ($result){
                $showAlert = true;
                header("location:home.php");
            }
        }
        
        else{
            $showError = "Passwords do not match";
        }
    }
    if(empty($_POST['username'])){
        $alrtuser="Username required";
    }
    if(empty($_POST['password'])){
        $alrtpass="Password required";
    }
    if(empty($_POST['cpassword'])){
        $alrtcpass="Confirm Password required";
    }

}
    
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Signup</title>
    <style>
        .form{
            margin-top: 90px;
        }
        .form h3{
            padding: 20px;
            color: white;
        }
        .form-control{
            margin-bottom: 17px;
        }
        .submit{
            margin-left: 165px;
        }
        .login{
          margin-left: 790px;
          margin-top: -65px;
        }
    </style>
  </head>
  <body style="background-color: rebeccapurple;">
  <?php require "model.php"?>
  <?php
    if($alrtuser) {
    
        echo ' <div class="alert alert-danger 
            alert-dismissible fade show" role="alert"> 
        <strong>Error!</strong> '. $alrtuser.'
    
       <button type="button" class="close" 
            data-dismiss="alert aria-label="Close">
            <span aria-hidden="true">×</span> 
       </button> 
     </div> '; 
   }
    
    
    if($showError) {
    
        echo ' <div class="alert alert-danger 
            alert-dismissible fade show" role="alert"> 
        <strong>Error!</strong> '. $showError.'
    
       <button type="button" class="close" 
            data-dismiss="alert aria-label="Close">
            <span aria-hidden="true">×</span> 
       </button> 
     </div> '; 
   }
   if($alrtcpass) {
    
    echo ' <div class="alert alert-danger 
        alert-dismissible fade show" role="alert"> 
    <strong>Error!</strong> '. $alrtcpass.'

   <button type="button" class="close" 
        data-dismiss="alert aria-label="Close">
        <span aria-hidden="true">×</span> 
   </button> 
 </div> '; 
}   
if($alrtpass) {
    
    echo ' <div class="alert alert-danger 
        alert-dismissible fade show" role="alert"> 
    <strong>Error!</strong> '. $alrtpass.'

   <button type="button" class="close" 
        data-dismiss="alert aria-label="Close">
        <span aria-hidden="true">×</span> 
   </button> 
 </div> '; 
}
?>
    <form action="adminSignup.php" method="post">
        <div class="container col-md-4 form">
            <h3 class="container text-center btn-warning">Signup</h3>
        <input class="form-control form-control-lg" type="text" placeholder="Username" aria-label=".form-control-lg example" name="username">
        <input class="form-control form-control-lg" type="password" placeholder="Password" aria-label=".form-control-lg example" name="password">
        <input class="form-control form-control-lg" type="password" placeholder="Confirm password" aria-label=".form-control-lg example" name="cpassword">
        <input class="btn btn-success submit" type="submit">
    </div>
    </form>
    <a href="adminLogin.php"><input class="btn btn-danger login" type="submit" value="Sign in"></a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>
