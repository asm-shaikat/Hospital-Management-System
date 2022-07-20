<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Patient Monitor</title>
    <style>
        .form{
            margin-top: 50px;
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
          margin-left: 200px;
          margin-top: -10px;
          margin-bottom: 10px;
        }
    </style>
  </head>
  <body style="background-color: white;">
    <?php  require "model.php"?>
  <form action="PatientMonitor.php" method="post">
        <div class="container col-md-4 form">
            <h3 class="container text-center btn-success">Search</h3>
        <input class="form-control form-control-lg" type="text" placeholder="First name" aria-label=".form-control-lg example" name="fname" required>
        <input class="form-control form-control-lg" type="text" placeholder="Last name" aria-label=".form-control-lg example" name="lname" required>
        <input class="form-control form-control-lg" type="text" placeholder="Mobile number" aria-label=".form-control-lg example" name="mobile" required>
        <input class="btn btn-success login" type="submit" value="Click here">
    </div>
    </form>
  <table class="table table-success table-striped container">
  <tr>
      <td>First Name</td>
      <td>Last Name</td>
      <td>Age</td>
      <td>Address</td>
      <td>Mobile</td>
      <td>Room</td>
      <td>Admit Reason</td>
      

  </tr>
  <?php
  session_start();
  if(empty($_SESSION['username'])){
    header("location:adminLogin.php");
  }
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        include "db_conn.php";
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $mobile=$_POST['mobile'];
        $sql="SELECT * FROM `patientreg` WHERE  `Fname`='$fname' AND `Lname`='$lname' AND `Mobile`='$mobile'";
        $result = mysqli_query($conn, $sql);
        while($data = mysqli_fetch_array($result)){
    ?>
    <tr>
    <td><?php echo $data['fname'];?></td>
    <td><?php echo $data['lname'];?></td>
    <td><?php echo $data['age'];?></td>
    <td><?php echo $data['address'];?></td>
    <td><?php echo $data['mobile'];?></td>
    <td><?php echo $data['roomNo'];?></td>
    <td><?php echo $data['admitreason'];?></td>
  </tr>	
  <?php
    }
  }
?>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
