<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sanjeevani hospital</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<style>
    #name{
        font-size: 3vw;
    }
</style>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-dark m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-secondary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


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
            <h1 class="m-0 text-primary"><img src="img/logos.png" height="60px" alt=""></i><span id="name">Sanjeevani Hospital</span></h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.html" class="nav-item nav-link">Home</a>
                <a href="about.html" class="nav-item nav-link ">About</a>
                <a href="service.html" class="nav-item nav-link">Service</a>
                <a href="Gallery.html" class="nav-item nav-link">Facilities</a>
                 <a href="Doctors.html" class="nav-item nav-link">Doctors</a>   
                   
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
            <div id="but">
                <button class="animated slideInLeft" id="btn"><a id="dev" href="appointment.php">Appointment</a></button>
              
             </div>
        </div>
    </nav>
    <!-- Navbar End -->






<?php
// include 'header.php';


include 'db.php';


?>     

<html>


<body>

<section class="section-padding" id="booking">
                <div class="container"style="margin-bottom:10%;" >
                    <div class="row">
                    
                        <div class="col-lg-12 col-12 mx-auto">
                            <div class="booking-form">
                               
                                <h1 class="text-center mb-lg-3 mb-2 " style="margin-top:10%;  font-weight:bold;"> Search Appointment History by Mobile Number</h1>

                                <form role="form" method="post" style="margin: 16px 152px;" >
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <input id="searchdata" type="text" name="searchdata" required="true" class="form-control" placeholder="Enter Your Mobile Number">
                                        </div>
<br>
                                        <div class="col-lg-3 col-md-4 col-6 mx-auto">
                                            <button type="submit" class="form-control"   style="color:white; background-color:black;" name="search" id="submit-button">Check</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            
<?php

if(isset($_POST['search']))
{
    $id=$_POST['searchdata'];
   
    $mobile=$_POST['searchdata'];
    $query="SELECT * FROM `appointment` WHERE  mobile='$mobile' ";

    $query_run = mysqli_query($con,$query);

?>
                            <table class="table table-bordered">
       
 
       <thead>
         <tr>
           <th scope="col">#</th>
           <th scope="col">Service</th>
            <th scope="col">Doctors</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col"> Date</th>
            <th scope="col">time</th>
            <th scope="col">mobile</th>
         <th scope="col">Status</th> 
         </tr>
       </thead>
       <tbody>
         
       <?php
         $i=1;
                                                             if(mysqli_num_rows($query_run) > 0)
                                                             {
                                                                 while($row = mysqli_fetch_array($query_run))
                                                                 {
                                                                                                           
                                                 ?>
                                                   
         <tr>
           <th><?php echo $i ?></th>
           <td><?php echo $row['Service'] ?></td>
            <td><?php echo $row['Doctors'] ?></td>
            <td><?php echo $row['Name'] ?></td>
            <td><?php echo $row['Email'] ?></td>
            <td><?php echo $row['Address'] ?></td>
            <td><?php echo $row['Date'] ?></td>
            <td><?php echo $row['time'] ?></td>
            <td><?php echo $row['mobile'] ?></td>
           <td>          <?php  
if($row['status']=="Selected")
{
  echo "Selected";
}

if($row['status']=="Rejected")
{
  echo "Rejected";
}

     ?></td>
        
         </tr>

         <?php
         $i++;
                                                        }
                                                    }
                                                    else
                                                    {
                                                        ?>

                                                            <tr>
                                                                <td colspan="6">NO RECORD FOUND</td>
                                                            </tr>

                                                        <?php
                                                    }
        
        ?>



</tbody>
</table>

<?php       
                                                    }
                                    ?>
        
                   

                        
</div>
<?php       

?>
</div>
</section>
<?php
// include 'footer.php';
?>

<!-- Footer Start -->
<div class="container-fluid bg-dark text-light py-5 wow fadeInUp" data-wow-delay="0.3s">
    <div class="container pt-5">
        <div class="row g-5 pt-4">
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Quick Links</h3>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About</a>
                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i> Service</a>
                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Facilities</a>
                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Doctors</a>
                    <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact</a>
                </div>
            </div>
             <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Popular Links</h3>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About</a>
                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Service</a>
                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Facilities</a>
                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Doctors</a>
                    <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact</a>
                </div>
            </div> 
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Get In Touch</h3>
                <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>Parsi Chawl AbuRoad,Rajasthan(307026)</p>
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
    



    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="lib/twentytwenty/jquery.event.move.js"></script>
    <script src="lib/twentytwenty/jquery.twentytwenty.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>