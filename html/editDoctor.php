<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Enabe edit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
            margin-left: 440px;
        }
        table tr td:last-child{
            width: 120px;
        }
        .clearfix{
            height: 130px;
            width: 700px;
            background-color:cyan;
            border-radius: 20px;
            margin-left: -57px;
        }
        .clearfix h2 {
            margin-top: 50px;
            margin-left: 30px;
        }
        .clearfix>a{
            margin-top: 50px;
            margin-right: 40px;
        }
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body style="background-color: wheat;">
    <?php  require "model.php"?>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 up">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Edit Doctor Detail</h2>
                        <a href="DoctorReg.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i>ADD</a>
                    </div>
                    <?php
                    session_start();
                    if(empty($_SESSION['username'])){
                        header("location:adminLogin.php");
                      }
                    // Include config file
                    require_once "db_conn.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM doctorreg order by id DESC";
                    if($result = mysqli_query($conn, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>ID</th>";
                                        echo "<th>Name</th>";
                                        echo "<th>Address</th>";
                                        echo "<th>Mobile</th>";
                                        echo "<th>Department</th>";
                                        echo "<th>Duty Time From</th>";
                                        echo "<th>Duty Time To</th>";
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['address'] . "</td>";
                                        echo "<td>" . $row['mobile'] . "</td>";
                                        echo "<td>" . $row['department'] . "</td>";
                                        echo "<td>" . $row['dutyTimeStart'] . "</td>";
                                        echo "<td>" . $row['dutyTimeEnd'] . "</td>";
                                        echo "<td>";
                                            echo '<a href="update.php?id='. $row['id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                            echo '<a href="delete.php?id='. $row['id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
 
                    // Close connection
                    mysqli_close($conn);
                    ?>

                </div>
            </div>        
        </div>
    </div>
</body>
</html>