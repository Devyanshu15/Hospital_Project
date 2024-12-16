<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PATIENT DETAILS</title>
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
     <!-- Topbar Start -->
     <div class="container-fluid bg-light ps-5 pe-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <small class="py-2"><i class="far fa-clock text-primary me-2"></i>Opening Hours: Time:10:30am to 3:00pm -5:00pm to 8:30pm </small>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-end">
                <div class="position-relative d-inline-flex align-items-center bg-primary text-white top-shape px-5">
                    <div class="me-3 pe-3 border-end py-2">
                        <p class="m-0"><i class="fa fa-envelope-open me-2"></i>toshersc@gmail.com</p>
                    </div>
                    <div class="py-2">
                        <p class="m-0"><i class="fa fa-phone-alt me-2"></i>+91-9928370538</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="index.html" class="navbar-brand p-0">
        <h1 class="m-0 text-primary"><img src="img/logos.png" height="60px" alt=""></i>Sanjeevani Hospital</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.html" class="nav-item nav-link">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="service.html" class="nav-item nav-link">Service</a>
                <a href="Gallery.html" class="nav-item nav-link">Gallery</a>
                <a href="Doctors.html" class="nav-item nav-link active" >Doctors</a>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
                <a href="login.php" class="nav-item nav-link">Log-Out</a>
            </div>  
             <!-- <div id="but">
                
                <button class="animated slideInLeft" id="btn"><a  id="dev"href="dashboard.php">pateint Details</a></button>
             </div> -->
      
        </div>
    </nav>
    <!-- Navbar End -->

    <?php
                    require "db.php";
                    $sr=1;
                    $query="select * from appointment"; 
                    $result=mysqli_query($con,$query); 
            ?>
                
    <table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th scope="col">SERVICE</th>
        <th scope="col"> DOCTOR</th>
        <th scope="col"> NAME</th>
        <th scope="col"> E-MAIL</th>
        <th scope="col"> Address</th>
        <th scope="col">DATE</th>
        <th scope="col">NUMBER</th> 
        <th scope="col">FINAL</th>
   </tr>   
   


<?php while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
        <td><?php echo $sr++ ?></td>
        <td><?php echo $rows['Service']; ?></td>
       
        <td><?php echo $rows['Doctors']; ?></td>
        <td><?php echo $rows['Name']; ?></td>
        <td><?php echo $rows['Email']; ?></td>
        <td><?php echo $rows['Address']; ?></td>
        <td><?php echo $rows['Date']; ?></td>
        <td><?php echo $rows['mobile']; ?></td>
       
        <?php
        echo "<td><a href='delete.php?mobile=".$rows['mobile']."'>CHECKED</a></td>";
        ?> 
		</tr> 
	<?php 
               } 
          ?>

</table>


    

<!-- Footer Start -->
<div class="container-fluid bg-dark text-light py-5 wow fadeInUp" data-wow-delay="0.3s">
    <div class="container pt-5">
        <div class="row g-5 pt-4">
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Quick Links</h3>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Services</a>
                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Gallery</a>
                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Doctors</a>
                    <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Popular Links</h3>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Services</a>
                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Gallery</a>
                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Doctors</a>
                    <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Get In Touch</h3>
                <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>Parsi Chawl Aburoad,Rajasthan</p>
                <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>toshersc@gmail.com</p>
                <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>+91-9928370538</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Follow Us</h3>
                <div class="d-flex">
                    <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid text-light py-4" style="background: #051225;">
    <div class="container">
        <div class="row g-0">
            <div class="col-md-6 text-center text-md-start">
                <p class="mb-md-0">&copy; <a class="text-white border-bottom" href="#">Your Site Name</a>. All Rights Reserved.</p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <p class="mb-0">Designed by <a class="text-white border-bottom" href="https://htmlcodex.com">Devyanshu Ravindra</a><br>
            
                
                </p>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

</body>
</html>