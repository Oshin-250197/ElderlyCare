<?php include 'connection.php';

session_start();


if($_SESSION["userlogged"]==NULL){
    echo "<script>
            alert('You are not logged in please login first.');
            window.location.href='index.php';
           </script>";
}
?>

<html>
<head>
<title></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>
    <style>
    body{
      background-image: url(https://mdbootstrap.com/img/Photos/Others/background.jpg); background-size: cover; background-position: center center;    }
    table {
  width: 100%;
  border-collapse: collapse;
}
 
tr:nth-of-type(odd) {
  background: #f4f4f4;
}
 
tr:nth-of-type(even) {
  background: #fff;
}
 
th {
  background: #5cb85c;
  color: #ffffff;
  font-weight: 300;
}
 
td,
th {
  padding: 10px;
  border: 1px solid #ccc;
  text-align: left;
}
 
td:nth-of-type(1) {
  font-weight: 500 !important;
}
 
td {
  font-family: 'Roboto', sans-serif !important;
  font-weight: 300;
  line-height: 20px;
}
 
span {
  font-style: italic
}
.pagination>li>a, .pagination>li>span {
    position: relative;
    float: left;
    padding: 6px 12px;
    margin-left: -1px;
    line-height: 1.42857143;
    color: #337ab7;
    text-decoration: none;
    background-color: #fff;
    border: 1px solid #ddd;
}
.pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover {
    z-index: 3;
    color: #fff;
    cursor: default;
    background-color: #337ab7;
    border-color: #337ab7;
}
.dataTables_length{
  padding-bottom:10px;
} 
@media only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px) {
 
  table.responsive,
  .responsive thead,
  .responsive tbody,
  .responsive th,
  .responsive td,
  .responsive tr {
    display: block !important;
  }
 
  .responsive thead tr {
    position: absolute !important;
    top: -9999px;
    left: -9999px;
  }
 
  .responsive tr {
    border: 1px solid #ccc;
  }
 
  .responsive td {
    border: none;
    border-bottom: 1px solid #eee !important;
    position: relative !important;
    padding-left: 25% !important;
  }
 
  .responsive td:before {
    position: absolute !important;
    top: 6px;
    left: 6px;
    width: 45%;
    padding-right: 10px;
    white-space: nowrap !important;
    font-weight: 500 !important;
  }
 
 
  .responsive td:before {
    content: attr(data-table-header) !important;
  }
}

    </style>
	<body>

        <!--Section: Content-->
    <section class="p-5 text-center">

    

        <div class="row">
        <div class="col-12">
            <a class="btn btn-secondary float-left" href="index.php">logout</a>
        </div>
        <div class="col-md-10 mx-auto">
            <!-- Material form login -->
            <div class="card">
            <div class="card-header  bg-success">
              <h3 class="font-weight-bold my-1 pb-2  text-center text-white">Welcome to Doctor Portal</h3>
            </div>
            <!--Card content-->
            <div class="card-body">
                <!-- <h3 class="font-weight-bold my-4 pb-2 text-center dark-grey-text">
               
                &nbsp;&nbsp; &nbsp;</h3> -->
                <div class="row">
                  <div class="col-sm-2">
                  
                  </div>
                  <div class="col-sm-8">
                  <table class="table responsive" id="sort">
                    <thead>
                        <tr>
                            <th scope="col">sr_no</th>
                            <th scope="col">Fullname</th>
                            <th scope="col">Age</th>
                            <th scope="col">Weight</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Date</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql = "SELECT sr_no, name, age, height, weight, mobile, date, status FROM data order by sr_no";
                    $result = $conn->query($sql);
                              $var1=1;
                    if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                                  $status = $row["status"];
                    ?>	
                              <tr>
                      <td data-table-header="sr_no"><?php echo $var1++;?></td>
                      <td data-table-header="Fullname"><?php echo $row["name"];?></td>
                      <td data-table-header="Age"><?php echo $row["age"];?></td>
                      <td data-table-header="Weight"><?php echo $row["weight"];?></td>
                      <td data-table-header="Mobile"><?php echo $row["mobile"];?></td>
                      <td data-table-header="Date"><?php echo $row["date"];?></td>
                      <td>
                            <?php
                            if($status == 1){
                            ?>
                            <center>
                                <a href="patientdetails.php?id=<?php echo $row["sr_no"]?>"><button class="btn btn-success" type="submit" style="font-size:18px">Open</button></a> 
                            </center>
                            <?php
                                }else{
                                ?>
                            <form method="POST" action="doctorconfirmappointment.php">
                            <center>
                                <input type="hidden" value="<?php echo $row["mobile"];?>" name="conmobile">
                                <button class="btn btn-danger" type="submit"  style="font-size:18px"><i class="fa fa-check"></i>Confirm</button>
                            </center>                   
                            </form>
                        <?php } ?>
                        </td>
                      </tr>
                      
                      <?php	
                        
                        }
                      } else {
                        echo "0 results";
                      }
                      $conn->close();
                      ?>
                    </tbody>
                </table>
                  </div>
                  <div class="col-2">
                  
                  </div>
                </div>

            </div>

            </div>
            <!-- Material form login -->
        </div>
        </div>

    </section>
    <!--Section: Content-->
           
			
        <script>$(document).ready(function() {
            $("#sort").DataTable({
                columnDefs : [
                { type : 'date', targets : [3] }
            ],  
            });
            });
        </script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/jquery.dataTables.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/dataTables.bootstrap.min.js"></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.0/moment.min.js'></script>

	</body>
</html>

