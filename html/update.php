<?php
include_once 'db_conn.php';
$alrtSuccess="";
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE doctorreg set  name='" . $_POST['fname'] . "', designation='" . $_POST['designation'] . "', address='" . $_POST['address'] . "', department='" . $_POST['department'] . "' ,mobile='" . $_POST['mobile'] ."' ,dutyTimeStart='" . $_POST['dutyTimeStart'] ."' ,dutyTimeEnd='" . $_POST['dutyTimeEnd'] . "' WHERE id='" . $_POST['id'] . "'");
$alrtSuccess = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM doctorreg WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body{
            background-color: cyan;
        }
        .main-form{
            margin-top: 50px;
            margin-left: 300px;
            width: 800px;
            height: 500px;
        }
        .headr{
            background-color: yellow;
            text-align: center;
            margin: 0 auto;
        }
    </style>
    <title>Update Record</title>
  </head>
  <body>
  <?php
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
    <form name="frmUser" method="post" action="" class="main-form">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<h2 class="headr">Doctors Regstration</h2>
    <div class="form-floating spc">
        <input type="hidden" class="form-control" id="floatingInput" value="<?php echo $row['id']; ?> "name="id" required>
        <label for="floatingInput">ID</label>
    </div>
    <div class="form-floating spc">
        <input type="text" class="form-control" id="floatingInput" name="fname" value="<?php echo $row['name']; ?>" required>
        <label for="floatingInput">Name</label>
    </div>
    <div class="form-floating spc">
        <input type="text" class="form-control" id="floatingPassword" value="<?php echo $row['designation']; ?> "name="designation" required>
        <label for="floatingInput">Designation</label>
    </div>
    <div class="form-floating spc">
        <input type="text" class="form-control" id="floatingPassword" value="<?php echo $row['address']; ?>" name="address" required>
        <label for="floatingInput">Address</label>
    </div>
    <div class="form-floating spc">
        <input type="text" class="form-control" id="floatingPassword" value="<?php echo $row['department']; ?>" name="department" required>
        <label for="floatingInput">Department</label>
    </div>
    <div class="form-floating spc">
        <input type="text" class="form-control" id="floatingPassword" value="<?php echo $row['dutyTimeStart']; ?> "  name="dutyTimeStart" pattern="[0-9]{2}:[0-9]{2}:[0-9]{2}{}" required >
        <label for="floatingInput">Duty time start</label>
    </div>
    <div class="form-floating spc">
        <input type="text" class="form-control" id="floatingPassword" value="<?php echo $row['dutyTimeEnd']; ?>" name="dutyTimeEnd" pattern="[0-9]{2}:[0-9]{2}:[0-9]{2}{}" required>
        <label for="floatingInput">Duty time end</label>
    </div>
    <div class="form-floating spc">
        <input type="text" class="form-control" id="floatingPassword" value="<?php echo $row['mobile']; ?> "name="mobile" required>
        <label for="floatingInput">Mobile number</label>
    </div><br>
    <button type="submit" class="btn btn-warning" name = "submit">Submit</button>
</form>
<a href="editDoctor.php"><button class="btn btn-dark">Go Back</button></a>
</body>
</html>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
