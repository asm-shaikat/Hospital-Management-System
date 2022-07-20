<?php
$login = false;
$showError = "";
$emty = "";
session_start();
if (!empty($_SESSION['username'])) {
  header("location:home.php");
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include 'db_conn.php';
  $username = $_POST["username"];
  $password = $_POST["password"];
  $sql = "Select * from signup where username='$username' AND password='$password'";
  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);
  if ($num == 1) {
    $login = true;
    // session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    header("location:home.php");
  }
  if (($username == null) && ($password == null)) {
    $emty = "Enter username and password";
    // header("location:adminLogin.php");
  } else {
    $showError = "Invalid username or password";
  }
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Login</title>
  <style>
    .form {
      margin-top: 140px;
    }

    .form h3 {
      padding: 20px;
      color: white;
      margin-bottom: 20px;
    }

    .form-control {
      margin-bottom: 17px;
    }

    .new-admin {
      margin-left: 700px;
      margin-top: -65px;
    }

    .login {
      margin-left: 100px;
    }
  </style>
</head>

<body style="background-color: slateblue;">
  <?php
  if ($showError) {

    echo ' <div class="alert alert-danger 
            alert-dismissible fade show" role="alert"> 
        <strong>Error!</strong> ' . $showError . '
    
       <button type="button" class="close" 
            data-dismiss="alert aria-label="Close">
            <span aria-hidden="true">×</span> 
       </button> 
     </div> ';
  }
  if ($emty) {

    echo ' <div class="alert alert-danger 
  alert-dismissible fade show" role="alert"> 
<strong>Error!</strong> ' . $emty . '

<button type="button" class="close" 
  data-dismiss="alert aria-label="Close">
  <span aria-hidden="true">×</span> 
</button> 
</div> ';
  }
  ?>
  <h1 style="margin-left:500px;margin-top: 120px; color:white; margin-bottom: -90px;font-family: Georgia, 'Times New Roman', Times, serif;">Hospital Management System</h1>
  <form action="adminLogin.php" method="post">
    <div class="container col-md-4 form">
      <h3 class="container text-center btn-success">Login</h3>
      <input class="form-control form-control-lg" type="text" placeholder="Username" aria-label=".form-control-lg example" name="username">
      <input class="form-control form-control-lg" type="password" placeholder="Password" aria-label=".form-control-lg example" name="password">
      <input class="btn btn-success login" type="submit" value="Submit">
    </div>
  </form>
  <!-- <a href="adminSignup.php"><input class="btn btn-danger new-admin" type="submit" value="Add New Admin"></a> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>