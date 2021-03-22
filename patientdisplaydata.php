<?php
session_start();


if($_SESSION["userlogged"]==NULL){
    echo "<script>
            alert('You are not logged in please login first.');
            window.location.href='index.php';
           </script>";
}

$RegNo = $_GET['mobile'];
include './connection.php';
$selectSR = mysqli_query($conn, "SELECT * FROM `data` where mobile = '$RegNo' ");
while ($row = mysqli_fetch_array($selectSR)) {
    $patname = $row['name'];
    $patage = $row['age'];
    $patid=$row['sr_no'];
    $patheight = $row['height'];
    $patweight = $row['weight'];
    $regdate = $row['date'];
    $disease = $row['disease'];
}
?>
<!DOCTYPE html>
<html class="no-js"> 
    <head>
        <meta charset="utf-8">
        <title>Hospital</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Bootstrap Stylesheet -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- Animate -->
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
        <!-- Google Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

        <!-- FontAwesome Icons -->
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <!-- Normailize Stylesheet -->
        <link rel="stylesheet" href="css/normalize.min.css">

        <!-- Main Styles -->
        <link rel="stylesheet" href="css/style.css">

        <link rel="stylesheet" href="css/doctor.css">

        <script src="js/doc.js"></script>

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
         <style> 
            /* body{
                
                background-image: url("images/contact-bg.png");
                background-repeat:no-repeat;
                background-size:cover;
                background-position:center;
                text-align: center;
                color: white;
                padding-top: 100px;
            }
            .row{
                padding:10px;
                padding-left:30px;
                padding-right:30px;
            } */
        </style>
    </head>
    <body>
    

    <!--Section: Content-->
    <section class="p-5 mb-md-5 text-center" 
    style="background-image: url(https://mdbootstrap.com/img/Photos/Others/background.jpg); background-size: cover; background-position: center center;">
    <div class="col-12">
        <a class="btn btn-secondary float-left" href="index.php">logout</a>
    </div>        
    

        <div class="row">
        <div class="col-md-6 mx-auto">
            <!-- Material form login -->
            <div class="card">

            <!--Card content-->
            <div class="card-body">

                <!-- Form -->
                <form class="text-center" style="color: #757575;" action="#!">

                <h3 class="font-weight-bold my-4 pb-2 text-center dark-grey-text">
                Hi, <?php echo $patname;?> &nbsp;&nbsp; &nbsp;</h3>

                <!-- Name -->
                <label for="defaultForm-email">Your Name</label>
                <input readonly type="text" value="<?php echo $patname;?>" id="defaultSubscriptionFormPassword" class="form-control mb-4" placeholder="Your Name">

                <label for="defaultForm-email">Your Age</label>
                <input readonly type="text" value="<?php echo $patage;?>" id="defaultSubscriptionForage" class="form-control mb-4" placeholder="Your Name">
                
                
                <label for="defaultForm-email">Your Weight</label>
                <input readonly type="text" value="<?php echo $patweight;?>" id="defaultSubscriptionFormEmail" class="form-control" placeholder="Your Weight">
                <label for="defaultForm-email">Disease</label>
                <input readonly type="text" value="<?php echo $disease;?>" id="defaultSubscriptionForage" class="form-control mb-4" placeholder="Disease">

                <br><br><br><br>
                <!-- <div class="text-center">
                <a href="index.php" class="btn btn-danger  text-white my-2 my-sm-0" type="button">Logout</a>
                </div> -->

                </form>
                <!-- Form -->

            </div>

            </div>
            <!-- Material form login -->
        </div>
        </div>
        <br><br><br>    
        <div class="row">
            <div class="col-md-10 mx-auto">
                <!-- Material form login -->
                <div class="card">

                    <!--Card content-->
                    <div class="card-body">
                        <h3 class="font-weight-bold my-4 pb-2 text-center dark-grey-text">
                        PRESCRIPTION HISTORY</h3>
                        <hr>
                        <div class="form-group">
                                <div class="table-responsive">
                                <table class="table table-bordered" id="ni">
                                <thead>
                                    <tr>
                                        <th scope="col">Sr No.</th>
                                        <th scope="col">Medicine Name</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Dose per day</th>
                                        <th scope="col">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    
                                    $sql = "SELECT id, medicinename, quantity, timeofmed,disease, createddate, createid FROM patientprescription where patientid=$patid order by id desc";
                                    // if ($conn->query($sql) === TRUE) {
                                    //     $inserted='true';
                                    // }else {
                                    //     echo "Error: " . $sql . "<br>" . $conn->error;
                                    // }
                                    $resultx = $conn->query($sql);
                                    $var1=1;
                                    //print_r($resultx);
                                    if (!empty($resultx) && $resultx->num_rows > 0) {
                                    // output data of each row
                                    while($row1 = $resultx->fetch_assoc()) {
                                    ?>	

                                    <tr>
                                    <td><?php echo $var1++;?></td>
                                    <td><?php echo $row1["medicinename"];?></td>
                                    <td><?php echo $row1["quantity"];?></td>
                                    <td><?php echo $row1["timeofmed"];?></td>
                                    <td><?php echo $row1["createddate"];?></td>
                                    </tr>
                                    <?php	
                        
                                        }
                                    } else {
                                        
                                        echo "<tr><td colspan='5' align='centre'>Sorry, Doctor has not yet prescribed you any medicine !</td></tr>";
                                    }
                                    $conn->close();
                                    ?>
                                </tbody>
                                </table>
                                
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        

    </section>
    <!--Section: Content-->
        <script src="js/vendor/jquery-1.10.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/templatemo_custom.js"></script> 
        <script>
            const loginbox = document.getElementById('log_doc');
            document.getElementById('show_logger').onclick = function () {
                loginbox.classList.toggle('disp_none');
            };
        </script>
    </body>
</html

