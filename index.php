<!DOCTYPE html>
<html lang="en">
<!-- style section start -->
<style>
    .p {
        text-align: center;
    }
    /* hero appoint button */
    @media screen and (max-width:455px){
        #app{
        margin-top: -560px;
        width: 40px;
       
    }
   
    }

    @media screen and (max-width:355px){
        #app{
       
       display: none;
    }

    }
</style>

<!-- style section cloes -->

<head>
    <meta charset="utf-8">
    <title>Sanjeevani Hospital</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet">

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
        font-size: 2vw;
    }
</style>
<body>
    <!-- Spinner Start
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
    </div> -->
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light ps-5 pe-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <small class="py-2"><i class="far fa-clock text-primary me-2"></i>Opening Hours: Time:10:30am to
                        3:00pm -5:00pm to 8:30pm </small>
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
            <h1 class="m-0 text-primary" id="hospital-name"><img src="img/logos.png" height="60px" alt=""><span id="name">Sanjeevani Life Care Hospital</span>
            </h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="service.html" class="nav-item nav-link">Service</a>
                <a href="Gallery.html" class="nav-item nav-link">Facilities</a>
                <a href="Doctors.html" class="nav-item nav-link">Doctors</a>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
                <a href="login.php" class="nav-item nav-link">login</a>
            </div>
            <div id="but">
                <button class="animated slideInLeft" id="btn"><a id="dev"
                        href="appointment.php">Appointment</a></button>
                <!-- <button class="animated slideInLeft" id="btn"><a id="dev" href="pateint.php">Pateint Details</a></button> -->
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Full Screen Search End -->

    <!-- hero page -->



    <section id="intro" style="background-color: #c0dee8;  margin-top: px;">

        <div class="intro-content" style="margin-top: 150px;">
            <!-- <h2 style="color: #D4573F;"><span style="color: black;">Sanjeevani Hospital</span><br><br>Best Hospital in
                City</h2> -->
            <!-- <div id="app">
                <a href="appointment.php" class="btn-get-started scrollto"
                    style="background-color:#D4573F; color: #fff;font-size: 10px;">APPOINT NOW</a>
            </div> -->
        </div>
        <!-- <div class="item img-fluid" style="background-image: url('image/home-banner.jpg'); width: 100%; height: 93vh;"></div> -->
        <img src="image/banner3.jpg" class="img-fluid" alt="Error Loading">
    </section>


    <!--hero page end-->

    
    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s " id="ABOUT">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">About</h5>
                        <h1 class="display-5 mb-0">Best Health Care Solution In Your City</h1>
                    </div>
                    <h4 class="text-body fst-italic mb-4">Sanjeevani Hospital is a private hospital located in Abu Road,
                        Rajasthan</h4>
                    <p class="mb-4"> Sanjeevani Hospital has completed 20 yearsAs our specialist work, in work place
                        24*7 working hours and we have best specialist and provide best facilities</p>
                    <div class="row g-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Award Winning</h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Professional Staff</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>24*7 Opened</h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>affordable Prices</h5>
                        </div>
                    </div>
                    <a href="appointment.php" class="btn btn-primary py-3 px-5 mt-4 wow zoomIn"
                        data-wow-delay="0.6s">Make Appointment</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                            src="image/doctor1.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Appointment Start -->
    <!-- <div class="container-fluid bg-primary bg-appointment my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 py-5">
                    <div class="py-5">
                        <h1 class="display-5 text-white mb-4">We Are A Certified and Award Winning You Can Trust On
                            Sanjeevani Hospital</h1>
                        <p class="text-white mb-0"></p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="appointment-form h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn"
                        data-wow-delay="0.6s">
                        <h1 class="text-white mb-4">Make Appointment</h1>
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <select class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected>Select A Service</option>
                                         <option value="1">Sonography</option>
                                        <option value="2">ECG</option>
                                        <option value="3">Pulse oximeter</option>
                                        <option value="3">Skin Causes</option>
                                        <option value="3">defibrillator</option>
                                        <option value="3">Nebulizer</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected>Select Doctor</option>
                                        <option value="1">Dr.Tosher S.Cotractor</option>
                                        <option value="2">Dr.Devendra R.parmar</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Your Name"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control bg-light border-0" placeholder="Your Email"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="date" class="form-control bg-light border-0 datetimepicker-input"
                                            placeholder="Appointment Date" data-target="#date1"
                                            data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="time" id="time1" data-target-input="nearest">
                                        <input type="time" class="form-control bg-light border-0 datetimepicker-input"
                                            placeholder="Appointment Time" data-target="#time1"
                                            data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="number" id="number1" data-target-input="nearest">
                                        <input type="mobile" maxlength="10"
                                            class="form-control bg-light border-0 datetimepicker-input"
                                            placeholder="Mobile Number" data-target="#number1"
                                            data-toggle="numberpicker" number="num" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit"> <a href="appointment.php">Make Appointment </a></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Appointment End -->


    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="SERVICES">
        <div class="container">
            <div class="row g-5 mb-5">
                <div class="col-lg-5 wow zoomIn" data-wow-delay="0.3s" style="min-height: 400px;">
                    <div class="twentytwenty-container position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="image/sonography2.jpg" style="object-fit: cover;">

                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title mb-5">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Our Service</h5>
                        <h1 class="display-5 mb-0">We Always Offer The Best Quality Services</h1>
                    </div>
                    <div class="row g-5">
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.6s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="img/ECG2.jpg" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">ECG Service</h5>
                            </div>
                        </div>
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.9s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="img/Pulse oximeter.jpg" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">Pulse oximeter</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-7">
                    <div class="row g-5">
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.3s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="img/defibrillator.jpg" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">Defibrillator</h5>
                            </div>
                        </div>
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.6s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="img/Nebulizer.jpg" alt="">

                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">Nebulizer</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 service-item wow zoomIn" data-wow-delay="0.9s">
                    <div
                        class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-4">
                        <h3 class="text-white mb-3">Make Appointment</h3>
                        <p class="text-white mb-3">Take the appointment to your family</p>
                        <h2 class="text-white mb-0">+91-9928370538</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- Service End -->


    <!-- Gallery -->


    <!-- <section class=""> -->
        <div class="section-title mb-5 p" id="GALLERY">
            <h5 class="position-relative d-inline-block text-primary text-uppercase">Our Facilities </h5>

        </div>
        <!-- Section: Images -->
         <section class="">
            <div class="row gallery">
                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                    <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                        <img src="image/bed.jpg" class="w-100" />
                        <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal1">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                        <img src="image/bed1.jpg" class="w-100" />
                        <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal2">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                        <img src="image/office.jpg" class="w-100" />
                        <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal3">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section: Images -->

    <!-- </section> -->
    <br> 
    <!-- Modal gallery -->

    <!-- Modal gallery -->
     <section class="">
        <!-- Section: Images -->
         <section class="">
            <div class="row gallery">
                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                    <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                        <img src="image/clinic.jpg" class="w-100" />
                        <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal1">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                        <img src="image/sonography1.jpg" class="w-100" />
                        <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal2">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                        <img src="image/office room (1).jpeg" class="w-100" />
                        <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal3">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section: Images -->

        <!-- Team Start -->
        <div class="container-fluid py-5" id="s" id="DOCTORS">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title bg-light rounded h-100 p-5">
                            <h5 class="position-relative d-inline-block text-primary text-uppercase">Our Doctor</h5>
                            <h1 class="display-6 mb-4">Meet Our Experienced Doctors</h1>
                            <a href="appointment.php" class="btn btn-primary py-3 px-5"><span style="font-size: 2vw;">Appointment</span></a>
                        </div>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                        <div class="team-item">
                            <div class="position-relative rounded-top" style="z-index: 1;">
                                <img class="img-fluid rounded-top w-100" src="image/doctor.jpg" alt="">
                                <!-- <div
                                    class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                    <a class="btn btn-primary btn-square m-1" href="#"><i
                                           class="fa-brands fa-whatsapp"></i></a>

                                    <a class="btn btn-primary btn-square m-1" href="https://www.facebook.com/SanjeevaniLifeCareHospital?mibextid=ZbWKwL"><i
                                            class="fab fa-facebook-f fw-normal"></i></a>
                                        
                                         
                                </div> -->
                            </div>
                            <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                                <h4 class="mb-2">Dr.Tosher S.Cotractor</S></h4>
                                <p class="text-primary mb-0">Specialist in Heart Dieseases</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                        <div class="team-item">
                            <div class="position-relative rounded-top" style="z-index: 1;">
                                <img class="img-fluid rounded-top w-100" src="image/dr parmar1 (1).jpg" alt="">
                                <!-- <div
                                    class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                    <a class="btn btn-primary btn-square m-1" href="#"><i
                                            
                                            class="fab fa-facebook-f fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i
                                            
                                 
                                            class="fab fa-instagram fw-normal"></i></a>
                                </div> -->
                            </div>
                            <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                                <h4 class="mb-2">Dr.Devendra R Parmar</S></h4>
                                <p class="text-primary mb-0"> Specialist in Skin Care</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <br>

            <!-- Team End -->

            <!-- Footer Start -->
            <div class="container-fluid bg-dark text-light py-5 wow fadeInUp" data-wow-delay="0.3s">
                <div class="container pt-5">
                    <div class="row g-5 pt-4">
                        <div class="col-lg-3 col-md-6">
                            <h3 class="text-white mb-4">Quick Links</h3>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="#HOME"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <a class="text-light mb-2" href="#ABOUT"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>About</a>
                                <a class="text-light mb-2" href="#SERVICES"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Service</a>
                                <a class="text-light mb-2" href="#GALLERY"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Facilities</a>
                                <a class="text-light mb-2" href="#DOCTORS"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Doctors</a>
                                <a class="text-light" href="#CONTACT"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Contact</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <h3 class="text-white mb-4">Popular Links</h3>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="#HOME"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <a class="text-light mb-2" href="#ABOUT"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>About</a>
                                <a class="text-light mb-2" href="#SERVICES"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Service</a>
                                <a class="text-light mb-2" href="#GALLERY"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Facilities</a>
                                <a class="text-light mb-2" href="#DOCTORS"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Doctors</a>
                                <a class="text-light" href="#CONTACT"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Contact</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <h3 class="text-white mb-4">Get In Touch</h3>
                            <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>Parsi Chawl Aburoad,Rajasthan(307026)
                            </p>
                            <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>toshersc@gmail.com</p>
                            <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>+91-9928370538</p>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <h3 class="text-white mb-4">Follow Us</h3>
                            <div class="d-flex">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i
                                        class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i
                                        class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i
                                        class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i
                                        class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid text-light py-4" style="background: #051225;">
                <div class="container">
                    <div class="row g-0">
                        <div class="col-md-6 text-center text-md-start">
                            <p class="mb-md-0">&copy; <a class="text-white border-bottom" href="#">Your Site
                                    Name</a>Sanjeevani Hospital</p>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <p class="mb-0">Designed by <a class="text-white border-bottom"
                                    href="https://htmlcodex.com">Devyanshu Ravindra</a><br>


                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->

            <!-- Back to Top -->
            <!-- 
                
             -->


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
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>