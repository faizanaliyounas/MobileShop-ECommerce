<?php
$mobile_id=$_GET['id']; 
include('connection.php');
// echo $mobile_id;
$data=mysqli_fetch_array(mysqli_query($con, "SELECT * FROM record where id=".$mobile_id.""));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <title>Mobile Market</title>
</head>
<body>

    <div class="container-fluid">
        


      <div class="row header">

        <div class="col-3">
          <img src="images/logo.png" alt="error 404" width="200px" height="100px" >

        </div>
        <div class="col-9  arrangement1  ">
          <div class="media-icons">
            <a href="#"><img class="icons" src="./images/facebook-logo.png" alt="facebook icon"></a>
            <a href="#"><img class="icons" src="./images/twitter-logo.png" alt="twitter icon"></a>
            <a href="#"><img class="icons" src="./images/insta-logo.png" alt="instagram icon"></a>
            <a href="#"><img class="icons" src="./images/tumblr-logo.png" alt="tumblr icon"></a>
            <a href="#"><img class="icons" src="./images/pinterest-logo.png" alt="pinterest icon"></a>
          </div>

        </div>
      </div>






       
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="./home.php" style="font-size: 20px;">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./aboutus.php" style="font-size: 20px;" >About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./products.php" style="font-size: 20px;">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./contact.php" style="font-size: 20px;">Contact Us</a>
              </li>
            </ul>
          </div>
          </nav>
        </div>
      </div>
       
      







      
      <div >
        <h1>REDMI NOTE 9</h1>
        <div class="row">


            <div class="col-lg-2 col-md-2 col-sm-2" >
                <div class="card" >
                    <img src="upload/<?php echo $data['img']; ?>" class="card-img-top" alt="error 404">
                    <div class="card-body">
                      <h5 class="card-title"><strong><?php echo $data['name']; ?></strong> </h5>
                      <p class="card-text"><?php echo $data['available']; ?></p>
                      <b><?php echo $data['price']; ?></b>
                    <br>
                     
                    </div>
                  </div>
            </div>
            <div class="col-10"> 
                <H2>
                    SPECIFICATIONS
                </H2>
                <ul>
                    <li>RAM :<?php echo $data['ram']; ?></li>
                    <li>ROM :<?php echo $data['rom']; ?></li>
                    <li>FRONT CAMERA :<?php echo $data['frontcam']; ?></li>
                    <li>BACK CAMERA :<?php echo $data['backcam']; ?></li>
                    <li>DOMINANT FEATURE :<?php echo $data['dom']; ?></li>
                </ul>
                <br>
                <h2>PRODUCT DETAILS</h2>
                <P class="aboutusdetail"> <?php echo $data['des']; ?>

                </P>
            </div>
        </div>
        
    </div>























        
        <footer class="page-footer font-small unique-color-dark">

          <div style="background-color: #3b3e41;">
            <div class="container">
        
              <!-- Grid row-->
              <div class="row py-4 d-flex align-items-center">
        
                <!-- Grid column -->
                <div class="col-md-6 col-lg-5 text-center ">
                  <h3 class="mb-0" style="color: aliceblue;">CONTACT US ON</h3>
                </div>
                <!-- Grid column -->
        
                <!-- Grid column -->
                <div class="col-md-6 col-lg-7 text-center text-md-right">
        
                      <a href="#"><img class="icons" src="./images/facebook-logo.png" alt="facebook icon"></a>
                      <a href="#"><img class="icons" src="./images/twitter-logo.png" alt="twitter icon"></a>
                      <a href="#"><img class="icons" src="./images/insta-logo.png" alt="instagram icon"></a>
                      <a href="#"><img class="icons" src="./images/tumblr-logo.png" alt="tumblr icon"></a>
                      <a href="#"><img class="icons" src="./images/pinterest-logo.png" alt="pinterest icon"></a>
        
                </div>
                <!-- Grid column -->
        
              </div>
              <!-- Grid row-->
        
            </div>
          </div>
        
          <!-- Footer Links -->
          <div class="container text-center text-md-left mt-5">
        
            <!-- Grid row -->
            <div class="row mt-3">
        
              <!-- Grid column -->
              <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
        
                <!-- Content -->
                <h6 class="text-uppercase font-weight-bold">Company name</h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis incidunt minima non fuga minus nam veniam. Vel nesciunt enim ex aliquid, a, assumend.</p>
        
              </div>
              <!-- Grid column -->
        
              <!-- Grid column -->
             
              <!-- Grid column -->
        
              <!-- Grid column -->
              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
        
                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">Legal Pages</h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                  <a href="#!">Disclaimer</a>
                </p>
                <p>
                  <a href="#!">Privacy Policy</a>
                </p>
                <p>
                  <a href="#!">Terms & Conditions</a>
                </p>
                <p>
                  <a href="#!">Refund Policy</a>
                </p>
        
              </div>
              <!-- Grid column -->
        
              <!-- Grid column -->
              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
        
                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">Contact</h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                  <i class="fas fa-home mr-3"></i> Defence Road, 54000</p>
                <p>
                  <i class="fas fa-envelope mr-3"></i> info@uol.edu.pk</p>
                <p>
                  <i class="fas fa-phone mr-3"></i> +92-02173623451</p>
                <p>
                  <i class="fas fa-print mr-3"></i> +92-02173623452</p>
        
              </div>
              <!-- Grid column -->
        
            </div>
            <!-- Grid row -->
        
          </div>
          <!-- Footer Links -->
        
          <!-- Copyright -->
          <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="#"> All Rights Reserved</a>
          </div>
          <!-- Copyright -->
        
        </footer>
        <!-- Footer -->
          <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
              integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
              crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
              integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
              crossorigin="anonymous"></script>
</body>
</html>