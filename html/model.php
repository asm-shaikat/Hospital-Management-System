<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>
      .menu-bar{
    height: 100px;
    width: 600px;
    display: flex;
    margin:0 auto;
    background-color: rgb(0, 255, 136);
    border-radius: 15px;
    margin-bottom: 10px;

}
.menu-bar>a{
    margin-left: 59px;
    margin-right: 100px;
    margin-top: 3px;
    text-decoration: none;
}

    </style>
    <title></title>
  </head>
  <body style="background-color: red;">
  <div class="menu-bar">
        <a href="home.php" class="home" title="Home">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
