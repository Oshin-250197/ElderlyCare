<?php
include 'connection.php';

session_start();


if($_SESSION["userlogged"]==NULL){
    echo "<script>
            alert('You are not logged in please login first.');
            window.location.href='index.php';
           </script>";
}
$globaldisease='';
$submit_id = $_GET['id'];
//echo $submit_id;

if(isset($_POST['submit']))
{
// Counting No fo skilss
$count = count($_POST["medicine"]);

//Getting post values
$createid=rand();
$datex=date('Y/m/d H:i:s');
$quantity=$_POST["quantity"];	
$inserted='false';
$dose=$_POST["dose"];
$medicine=$_POST["medicine"];	
// print_r($time);exit;
if($count >= 1)
{
    //echo "srgrg";exit;
	for($i=0; $i<$count; $i++)
	{
        
		if($_POST["medicine"][$i] != '')
		{
		    $sql="INSERT INTO patientprescription (patientid,medicinename,quantity,timeofmed,disease,createddate,createid) VALUES ('$submit_id','$medicine[$i]','$quantity[$i]','$dose[$i]','$globaldisease','$datex','$createid')";
            
            if ($conn->query($sql) === TRUE) {
                $inserted='true';
            }
		}
	}
}
    // $sql = "INSERT INTO data (`name`, `age`, `height`, `weight`, `mobile`, `date`)
    // VALUES ('$fullname', '$age', '$height', '$weight', '$mobile', '$date')";
    
    // INSERT INTO MyGuests (firstname, lastname, email)
    // VALUES ('John', 'Doe', 'john@example.com')
    
    if($inserted=='true') {
        echo "<script>alert('medicines inserted successfully');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
        <link href="css/accordian.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
        <!-- Google Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <style> 
        </style>
    </head>

    <body>

        <!--Section: Content-->
    <section class="p-5 text-center" 
    style="background-image: url(https://mdbootstrap.com/img/Photos/Others/background.jpg); background-size: cover; background-position: center center;">

  

        <div class="row">
        <div class="col-12">
            <a class="btn btn-success float-left" href="showpatientdetails.php">Back</a>
        </div>
        <div class="col-md-6 mx-auto">
            <!-- Material form login -->
            <div class="card">

            <!--Card content-->
            <div class="card-body">

                <!-- Form -->

                <h3 class="font-weight-bold my-4 pb-2 text-center dark-grey-text">
                PATIENT DETAILS</h3>
                <hr>
                <?php
                $sql = "SELECT sr_no, name, age, height,disease, weight, mobile, date FROM data WHERE sr_no=$submit_id";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    $globaldisease=$row['disease'];
                    ?>
                <!-- Name -->
                <label for="defaultForm-email">Full Name</label>
                <input readonly type="text" name="fullname" id="fullname" value="<?php echo $row['name'] ?>" class="form-control mb-4" placeholder="Full Name">

                <label for="defaultForm-email">Age</label>
                <input readonly type="text" name="age" id="age" value="<?php echo $row['age'] ?>" class="form-control mb-4" placeholder="Age">

                
                <label for="defaultForm-email">Weight</label>
                <input readonly type="text" name="weight" id="weight" value="<?php echo $row['weight'] ?>" class="form-control" placeholder="Weight">
                
                <label for="defaultForm-email">Mobile</label>
                <input readonly type="text" name="mobile" id="mobile" value="<?php echo $row['mobile'] ?>" class="form-control mb-4" placeholder="Your Name">

                <label for="defaultForm-email">Your Age</label>
                <input readonly type="date" name="date" id="date" value="<?php echo $row['date'] ?>" class="form-control mb-4" placeholder="Date">
                <label for="defaultForm-email">Disease</label>
                <input readonly type="text" name="disease" id="disease" value="<?php echo $row['disease'] ?>" class="form-control mb-4" placeholder="Disease">
    
                <br><br>
                <!-- <div class="text-center">
                <a href="index.php" class="btn btn-danger  text-white my-2 my-sm-0" type="button">Logout</a>
                </div> -->
                <?php
                    }
                } else {
                    echo "0 results";
                }
                ?>
                <!-- Form -->

                
            </div>

            </div>
            <br><br>


                        <!-- Material form login -->
        </div>
        </div>



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
                                    
                                    $sql = "SELECT id, medicinename, quantity, timeofmed, createddate, createid FROM patientprescription where patientid=$submit_id order by id desc";
                                    // if ($conn->query($sql) === TRUE) {
                                    //     $inserted='true';
                                    // }else {
                                    //     echo "Error: " . $sql . "<br>" . $conn->error;
                                    // }
                                    $resultx = $conn->query($sql);
                                    $var1=1;
                                    //print_r($resultx);
                                    if ($resultx->num_rows > 0) {
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
                                        
                                        echo "<tr><td colspan='5' align='centre'>0 results</td></tr>";
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




        <div class="row">
            <div class="col-md-10 mx-auto">
                <!-- Material form login -->
                <div class="card">

                    <!--Card content-->
                    <div class="card-body">
                        <h3 class="font-weight-bold my-4 pb-2 text-center dark-grey-text">
                        PRESCRIPTION DETAILS</h3>
                        <hr>
                        <div class="form-group">
                            <form name="add_name" id="add_name" method="post">
                                <div class="table-responsive">
                                <table class="table table-bordered" id="dynamic_field">
                                <tr>
                                <td><input type="text" name="medicine[]" placeholder="Enter Medicine Name" class="form-control name_list" /></td>
                                <td><input type="number" name="quantity[]" min="1" placeholder="Enter Quantity" class="form-control name_list" /></td>
                                <td><input type="number" name="dose[]" min="1" placeholder="Enter dose per day" class="form-control name_list" /></td>
                                <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
                                </tr>
                                </table>
                                <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>       
    </section>


        <script>
        $(document).ready(function(){
            var i=1;
            $('#add').click(function(){
            i++;
            $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="medicine[]" placeholder="Enter your medicine" class="form-control name_list" /></td><td><input type="number" min="1" name="quantity[]" placeholder="Enter Quantity" class="form-control name_list" /></td><td><input type="number" name="dose[]" min="1" placeholder="Enter dose per day" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
            });
            
        $(document).on('click', '.btn_remove', function(){
        var button_id = $(this).attr("id"); 
        $('#row'+button_id+'').remove();
            });
        });
        </script>        
        <script src="js/vendor/jquery-1.10.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/templatemo_custom.js"></script> 
        <script>
            $(document).ready(function () {
                $('.collapse.in').prev('.panel-heading').addClass('active');
                $('#accordion, #bs-collapse')
                        .on('show.bs.collapse', function (a) {
                            $(a.target).prev('.panel-heading').addClass('active');
                        })
                        .on('hide.bs.collapse', function (a) {
                            $(a.target).prev('.panel-heading').removeClass('active');
                        });
            });
        </script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      
    </body>
</html>