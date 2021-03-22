
<?php
  session_start();
  session_unset();
  if(isset($_GET['register'])){
    if($_GET['register']=='success'){
      echo "<script>
            alert('You have registered successfully. Login to continue !');
           </script>";
    }
  }
  if(isset($_GET['register'])){
    if($_GET['register']=='alreadyregistered'){
      echo "<script>
            alert('You have already registered. Login to continue !');
           </script>";
    }
  }
  
?>
<!doctype html>
<html lang="en">
  <head>
  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <title>Alexis Hospital</title>
  </head>
  <style>
    .carousel-item{
        height: 550px;
    } 
    .carousel-item img{
        height: 550px;
    }
    
  </style>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-4">
  <a class="navbar-brand" href="#">&nbsp;&nbsp;&nbsp;
  <img classs="img-responsive" width="50px" height="" src="./images/medicine-icons-I-03-512.png">
  <span>Alexis Hospital</span>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>&nbsp;&nbsp;
      <li class="nav-item">
        <a class="nav-link" href="index.php#specialities">Specialities <span class="sr-only">(current)</span></a>
      </li>&nbsp;&nbsp;
      <li class="nav-item">
        <a class="nav-link" href="aboutus.php">About Us <span class="sr-only">(current)</span></a>
      </li>&nbsp;&nbsp;
      <li class="nav-item">
        <a class="nav-link" href="#contactus">Contact <span class="sr-only">(current)</span></a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
      <a href="" class="btn btn-outline-success text-white my-2 my-sm-0" type="submit" data-toggle="modal" data-target="#modalLoginForm0">Patient Login</a>&nbsp;
      <a href="" class="btn btn-outline-secondary  text-white my-2 my-sm-0" type="submit" data-toggle="modal" data-target="#modalLoginForm1">Registration</a>&nbsp;
      <a href="" class="btn btn-outline-primary  text-white my-2 my-sm-0" type="submit" data-toggle="modal" data-target="#modalLoginForm">Doctor login</a>
    </form>
  </div>
</nav>


    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img class="d-block w-100" src="./images/COMMWEB72.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
            <div class="d-flex h-100 align-items-center justify-content-center">
                <h1>Highest Quality of Medical Care</h1>
            </div>
                
                <p>Our Hospital is designed to provide quality and affordable experience for patients 
                    with an aesthetic and warm atmosphere. We pull out all stops to make the hospital stay.
                </p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="./images/hospital.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <div class="d-flex h-100 align-items-center justify-content-center">
                    <h1>A healthy body holds a Healthy Soul</h1>
                </div>
                <p>We provides a wide range of clinical services including prevention, screening, assessment, 
                    treatment of an extensive range of diseases in different sections under specialist doctors.
                </p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="./images/AR-161019915.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <div class="d-flex h-100 align-items-center justify-content-center">
                    <h1>We always honest with our patients</h1>
                </div>
                <p>Good health is a state of complete physical, mental and social well- being. It is not just about the absence of disease or infirmity. 
                    It is about finding a meaning and purpose for life. It is about achieving goals and enhancing the quality of life. 
                </p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">Doctor login</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="submitdoctor.php" method="POST">
          <div class="modal-body mx-3">
            <div class="md-form mb-1 mt-4">
              <i class="fas fa-envelope prefix grey-text"></i>
              <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
              <input type="email" id="defaultForm-email" name="doc_email" class="form-control validate">
            </div>

            <div class="md-form mb-2">
              <i class="fas fa-lock prefix grey-text"></i>
              <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
              <input type="password" id="defaultForm-pass" name="doc_password" class="form-control validate">
            </div>
          </div>
          
          <div class="modal-footer d-flex justify-content-center">
            <button class="btn btn-primary" type="submit">Login</button>
          </div>
          </form>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modalLoginForm1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">Registration Form</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="submitdetails.php" method="POST">
          <div class="modal-body mx-3">
            <div class="md-form mb-1 mt-4">
              <i class="fas fa-envelope prefix grey-text"></i>
              <label data-error="wrong" data-success="right" for="defaultForm-email">Full Name</label>
              <input type="text" id="defaultForm-email" placeholder="Ex : Oshin Gaikwad" name="fullname" required class="form-control validate">
            </div>
            <div class="md-form mb-1">
              <i class="fas fa-envelope prefix grey-text"></i>
              <label data-error="wrong" data-success="right" for="defaultForm-email">Age</label>
              <input type="number" id="defaultForm-email" min="0" placeholder="Ex : 25" name="age" required class="form-control validate">
            </div>
            <!-- <div class="md-form mb-1 mt-4">
              <i class="fas fa-envelope prefix grey-text"></i>
              <label data-error="wrong" data-success="right" for="defaultForm-email">Height (cms)</label>
              <input type="text" id="defaultForm-email" placeholder="Ex : 150cm" name="height" required class="form-control validate">
            </div> -->
            <div class="md-form mb-1">
              <i class="fas fa-envelope prefix grey-text"></i>
              <label data-error="wrong" data-success="right" for="defaultForm-email">Weight (Kgs)</label>
              <input type="number" id="defaultForm-email" min="1" placeholder="Ex : 100 kg" name="weight" required class="form-control validate">
            </div>
            <div class="md-form mb-1">
              <i class="fas fa-envelope prefix grey-text"></i>
              <label data-error="wrong" data-success="right" for="defaultForm-email">Mobile Number</label>
              <input type="number" id="defaultForm-email" placeholder="Ex : 9857458624" name="regmob" required class="form-control validate">
            </div>
            <div class="md-form mb-1">
              <i class="fas fa-envelope prefix grey-text"></i>
              <label data-error="wrong" data-success="right" for="defaultForm-email">Disease</label>
              <input type="text" id="defaultForm-email" placeholder="Ex : Typhoid" name="disease" required class="form-control validate">
            </div>
            <div class="md-form mb-2">
              <i class="fas fa-lock prefix grey-text"></i>
              <label data-error="wrong" data-success="right" for="defaultForm-pass">Date of Appointment</label>
              <input type="date" placeholder="" id="defaultForm-pass" name="date" class="form-control validate">
            </div>
          </div>
          
          <div class="modal-footer d-flex justify-content-center">
            <button class="btn btn-success" type="submit">Register</button>
          </div>
          </form>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modalLoginForm0" tabindex="-1" role="dialog" aria-labelledby="myModalLabel0"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">Patient Login</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="submitpatient.php" method="POST">
          <div class="modal-body mx-3">
            <div class="md-form mb-1 mt-4">
              <i class="fas fa-envelope prefix grey-text"></i>
              <label data-error="wrong" data-success="right" for="defaultForm-email">Enter Mobile number</label>
              <input type="text" id="defaultForm-email" placeholder="Ex : 8596847586" name="regMobNo" required class="form-control validate">
            </div>
          </div>
          
          <div class="modal-footer d-flex justify-content-center">
            <button class="btn btn-success" type="submit">Login</button>
          </div>
          </form>
        </div>
      </div>
    </div>
    <div class="container mt-5">


  <!--Section: Content-->
  <section id="specialities" class="dark-grey-text text-center">

    <style>
      .md-pills .nav-link.active {
        background-color: cyan;
      }
      .img-fluid {
        max-width: 100%;
        height: 250px;
      }
    </style>
    
    <!-- Section heading -->
    <h3  class="font-weight-bold mb-4 pb-2">Our Specialities
</h3>
    <!-- Section description -->
    <p class="text-muted w-responsive mx-auto mb-5">Under astute leadership and strong management, Alexis Group of Hospitals has evolved as a centre of excellence in medicine providing the highest quality standards of medical treatment to all sections of the society. </p>
    
      <!--First row-->
      <div class="row">
        
        <!--First column-->
        <div class="col-12">
          
          <!-- Nav tabs -->
          <ul class="nav md-pills flex-center flex-wrap mx-0" role="tablist">
            <li class="nav-item">
              <a class="nav-link active font-weight-bold" data-toggle="tab" href="#panel31" role="tab">ALL</a>
            </li>
            <li class="nav-item">
              <a class="nav-link font-weight-bold" data-toggle="tab" href="#panel32" role="tab">SURGERY</a>
            </li>
            <li class="nav-item">
              <a class="nav-link font-weight-bold" data-toggle="tab" href="#panel33" role="tab">NEURO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link font-weight-bold" data-toggle="tab" href="#panel34" role="tab">PHYSICIAN</a>
            </li>
          </ul>
          
        </div>
        <!--First column-->

    </div>
    <!--First row-->
    <br><br>
    <!--Tab panels-->
    <div class="tab-content">

      <!--Panel 1-->
      <div class="tab-pane fade show in active" id="panel31" role="tabpanel">

        <!--First row-->
        <div class="row">
          
          <!--First column-->
          <div class="col-lg-4 col-md-12 mb-4">
            <!--Featured image-->
            <div class="view overlay zoom z-depth-2">
              <img src="./images/cancer.jpg" class="img-fluid">
            </div>
            <p class="text-uppercase text-center font-weight-bold text-muted my-4">Cancer</p>
          </div>
          <!--First column-->
          
          <!--Second column-->
          <div class="col-lg-4 col-md-6 mb-4">
            <!--Featured image-->
            <div class="view overlay zoom z-depth-2">
              <img src="./images/Cardiology.jfif" class="img-fluid">
            </div>
            <p class="text-uppercase text-center font-weight-bold text-muted my-4">Cardiology</p>
          </div>
          <!--Second column-->
          
          <!--Third column-->
          <div class="col-lg-4 col-md-6 mb-4">
            <!--Featured image-->
            <div class="view overlay zoom z-depth-2">
              <img src="./images/CTSurgery.jpg" class="img-fluid">
            </div>
            <p class="text-uppercase text-center font-weight-bold text-muted my-4">CT Surgery</p>
          </div>
          <!--Third column-->
          <!--First column-->
          <div class="col-lg-4 col-md-12 mb-4">
            <!--Featured image-->
            <div class="view overlay zoom z-depth-2">
              <img src="./images/Orthopaedics.jfif" class="img-fluid">
            </div>
            <p class="text-uppercase text-center font-weight-bold text-muted my-4">Orthopaedics</p>
          </div>
          <!--First column-->
          
         
          
          
          <!--First column-->
          <div class="col-lg-4 col-md-12 mb-4">
            <!--Featured image-->
            <div class="view overlay zoom z-depth-2">
              <img height="100%" src="./images/Multiorgan.jpg" class="img-fluid">
            </div>
            <p class="text-uppercase text-center font-weight-bold text-muted my-4">Multiorgan transplant</p>
          </div>
          <!--First column-->
          
          <!--Second column-->
          <div class="col-lg-4 col-md-6 mb-4">
            <!--Featured image-->
            <div class="view overlay zoom z-depth-2">
              <img height="100%" src="./images/Neurosciences.jpg" class="img-fluid">
            </div>
            <p class="text-uppercase text-center font-weight-bold text-muted my-4">Neurosciences</p>
          </div>
          <!--Second column-->
          
        </div>
        <!--First row-->

      </div>
      <!--Panel 1-->

      <!--Panel 2-->
      <div class="tab-pane fade" id="panel32" role="tabpanel">

        <!--First row-->
        <div class="row">
          
          
          
          <!--First column-->
          <div class="col-lg-4 col-md-12 mb-4">
            <!--Featured image-->
            <div class="view overlay zoom z-depth-2">
              <img src="./images/Orthopaedics.jfif" class="img-fluid">
            </div>
            <p class="text-uppercase text-center font-weight-bold text-muted my-4">Orthopaedics</p>
          </div>
          <!--First column-->
          
          <!--First column-->
          <div class="col-lg-4 col-md-12 mb-4">
            <!--Featured image-->
            <div class="view overlay zoom z-depth-2">
              <img src="./images/Multiorgan.jpg" class="img-fluid">
            </div>
            <p class="text-uppercase text-center font-weight-bold text-muted my-4">Multiorgan transplant</p>
          </div>
          <!--First column-->
          
        </div>
        <!--First row-->

      </div>
      <!--Panel 2-->

      <!--Panel 3-->
      <div class="tab-pane fade" id="panel33" role="tabpanel">

        <!--First row-->
        <div class="row">
          
          <!--Second column-->
          <div class="col-lg-4 col-md-6 mb-4">
            <!--Featured image-->
            <div class="view overlay zoom z-depth-2">
              <img src="./images/Neurosciences.jpg" class="img-fluid">
            </div>
            <p class="text-uppercase text-center font-weight-bold text-muted my-4">Neurosciences</p>
          </div>
          <!--Second column-->
          
          <!--Third column-->
          <div class="col-lg-4 col-md-6 mb-4">
            <!--Featured image-->
            <div class="view overlay zoom z-depth-2">
              <img src="./images/CTSurgery.jpg" class="img-fluid">
            </div>
            <p class="text-uppercase text-center font-weight-bold text-muted my-4">CT Surgery</p>
          </div>
          <!--Third column-->
          
          <!--Second column-->
          <div class="col-lg-4 col-md-6 mb-4">
            <!--Featured image-->
            <div class="view overlay zoom z-depth-2">
              <img src="./images/Cardiology.jfif" class="img-fluid">
            </div>
            <p class="text-uppercase text-center font-weight-bold text-muted my-4">Cardiology</p>
          </div>
          <!--Second column-->

        </div>
        <!--First row-->

      </div>
      <!--Panel 3-->

      <!--Panel 4-->
      <div class="tab-pane fade" id="panel34" role="tabpanel">

        <!--First row-->
        <div class="row">
          
          
          
          
          
          <!--First column-->
          <div class="col-lg-4 col-md-12 mb-4">
            <!--Featured image-->
            <div class="view overlay zoom z-depth-2">
              <img src="./images/cancer.jpg" class="img-fluid">
            </div>
            <p class="text-uppercase text-center font-weight-bold text-muted my-4">Cancer</p>
          </div>
          <!--First column-->
          
        </div>
        <!--First row-->

      </div>
      <!--Panel 4-->

    </div>
    <!--Tab panels-->

	</section>
 </div>
    <div style='opacity:1;text-align:center;background-image: url(./images/bghome.jpg);background-repeat:no-repeat;background-size: cover;' class="container my-5 z-depth-1">
      <!--Section: Content-->
      <section class="dark-grey-text">

        <div class="row pr-lg-5">
          <div class="col-md-7 mb-4">

            <div class="view" style="padding:60px;padding-top:90px">
              <img src="./images/img1nurse.jpg" class="img-fluid" alt="smaple image">
            </div>

          </div>
          <div class="col-md-5 d-flex align-items-center">
            <div>
              
              <h3 class="font-weight-bold mb-4 text-white">Vision</h3>

              <p class="text-white">Our vision is Universal access to Affordable, Advanced medical facilities to all, delivered with empathy, sincerity and compassion.
              We are geared to anticipate challenges and develop new and innovative ways to add excellence in healthcare.</p>
            </div>
          </div>
        </div>
      </section>
      <!--Section: Content-->
    </div>

    <div style='opacity:1;text-align:center;background-image: url(./images/stetscope.jpg);background-repeat:no-repeat;background-size: cover;' class="container my-5 z-depth-1">
      <!--Section: Content-->
      <section class="dark-grey-text">

        <div class="row pr-lg-5">
        <div class="col-md-12 d-flex align-items-center" style="padding:180px;padding-top:60px">
            <div>
              <br><br>
              <h3 class="font-weight-bold text-white">Mission</h3>
              <br><br>
              <p class="text-white">Our mission is continual progress in providing expertise in medical services based on the vast experience of our qualified team of medical professionals.
              Anticipating the health needs of society and striving to fulfill them.</p>
            </div>
          </div>
          <!-- <div class="col-md-7 mb-4">

            <div class="view" style="padding:60px;padding-top:90px">
              <img src="./images/imginner.jpg" class="img-fluid" alt="smaple image">
            </div>

          </div> -->
          
        </div>
      </section>
      <!--Section: Content-->
    </div>
    <!-- Optional JavaScript -->
    
    <!-- Footer -->
<footer id="contactus" class="page-footer font-small unique-color-dark"  class="container text-center text-md-left mt-5" style='opacity:1;text-align:center;background-image: url(./images/bgfooter.jpg);background-repeat:no-repeat;background-size: cover;'>

<div style="background-color:#343a40;">
  <div class="container">

    <!-- Grid row-->
    <div class="row py-4 d-flex align-items-center">

      <!-- Grid column -->
      <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
        <h6 class="mb-0 text-white" >Get connected with us!</h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-6 col-lg-7 text-center text-md-right">

        <!-- Facebook -->
        <a class="fb-ic">
          <i class="fab fa-facebook-f white-text mr-4"> </i>
        </a>
        <!-- Twitter -->
        <a class="tw-ic">
          <i class="fab fa-twitter white-text mr-4"> </i>
        </a>
        <!-- Google +-->
        <a class="gplus-ic">
          <i class="fab fa-google-plus-g white-text mr-4"> </i>
        </a>
        <!--Linkedin -->
        <a class="li-ic">
          <i class="fab fa-linkedin-in white-text mr-4"> </i>
        </a>
        <!--Instagram-->
        <a class="ins-ic">
          <i class="fab fa-instagram white-text"> </i>
        </a>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->

  </div>
</div>

<!-- Footer Links -->
<div class="container my-5 z-depth-1">

  <!-- Grid row -->
  <div class="row mt-3">

    <!-- Grid column -->
    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

      <!-- Content -->
      <h6 class="text-uppercase font-weight-bold text-white">Alexis Hospital</h6>
      <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p class="text-white">Our Hospital is designed to provide quality and affordable experience for patients with an aesthetic and warm atmosphere. We pull out all stops to make the hospital stay.

      </p>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

      <!-- Links -->
      <h6 class="text-uppercase font-weight-bold text-white">Specialities</h6>
      <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto text-white" style="width: 60px;">
      <p>
        <a class=" text-white" href="#!">Cardiology</a>
      </p>
      <p>
        <a class=" text-white" href="#!">CT Surgery</a>
      </p>
      <p>
        <a class=" text-white" href="#!">Orthopaedics</a>
      </p>
      <p>
        <a class=" text-white" href="#!"> Neurosciences</a>
      </p>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

      <!-- Links -->
      <h6 class="text-uppercase font-weight-bold text-white">Useful links</h6>
      <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto text-white" style="width: 60px;">
      <p>
        <a class=" text-white" href="#!">About Us</a>
      </p>
      <p>
        <a class=" text-white" href="#!">Register</a>
      </p>
      <p>
        <a  class=" text-white" href="#!">Doctor login</a>
      </p>
      <p >
        <a  class=" text-white" href="#!">Patient login</a>
      </p>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

      <!-- Links -->
      <h6 class="text-uppercase font-weight-bold text-white">Contact</h6>
      <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p class=" text-white">
        <i class="fas fa-home mr-3 text-white"></i> Teka Naka, Nagpur , India</p>
      <p  class=" text-white">
        <i class="fas fa-envelope mr-3 text-white"></i> info@Alexishospital.com</p>
      <p  class=" text-white">
        <i class="fas fa-phone mr-3"></i> +91 8578968885</p>
      <p  class=" text-white">
        <i class="fas fa-print mr-3 text-white"></i> +91 9785785587</p>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3 text-white">© 2021 Copyright:
  <a href="#" class="text-white"> www.Alexishospital.com</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer --> 
    <!-- Footer -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>