<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo APP_NAME;?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
<base href="<?php echo base_url('assets/home/');?>">
    <!-- Favicon -->
    <link href="img/fevicon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2 text-white"></small>
                    <small class="text-white"><?php echo ADDRESS;?></small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <small class="far fa-envelope text-primary me-2 text-white"></small>
                    <small class="text-white"><?php echo EMAIL;?></small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt text-primary me-2 text-white"></small>
                    <small class="text-white"><?php echo MOBNO;?></small>
                </div>
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary text-white" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary text-white" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary text-white" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-square btn-link rounded-0 text-white" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="<?php echo base_url();?>" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
            <h2 class="m-0 text-primary"><?php echo APP_NAME;?></h2></a></h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="<?php echo base_url();?>" class="nav-item nav-link active">Home</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About Us</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="<?php echo base_url('home/about');?>" class="dropdown-item">Introduction</a>
                        <a href="<?php echo base_url('home/objective');?>" class="dropdown-item">Objective</a>
                         <a href="<?php echo base_url('home/vision_mission');?>" class="dropdown-item">Vision And Mission</a>
                         <a href="<?php echo base_url('home/board_of_directors');?>" class="dropdown-item">Board of Directors</a>
                         <a href="<?php echo base_url('home/organizational_structure');?>" class="dropdown-item">Organizational Structure</a>
                         <a href="<?php echo base_url('home/senior_executive');?>" class="dropdown-item">Senior Executives</a>
                          <a href="<?php echo base_url('home/code_of_conduct');?>" class="dropdown-item">Code of Conduct</a>
                          <a href="<?php echo base_url('home/csr');?>" class="dropdown-item">BSNL Group CSR</a>
                           <a href="<?php echo base_url('home/committees_of_the_board');?>" class="dropdown-item">Committees of the Board</a>
                    </div>
                </div>
                 <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Business</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="<?php echo base_url('home/solar_photovoltaic');?>" class="dropdown-item">Solar Photovoltaic</a>
                        <a href="<?php echo base_url('home/solar_thermal');?>" class="dropdown-item">Solar Thermal</a>
                         <a href="<?php echo base_url('home/solarization_of_ports');?>" class="dropdown-item">Solarization of Ports</a>
                         <a href="<?php echo base_url('home/consultancy_services');?>" class="dropdown-item">Consultancy Services</a>
                         <a href="<?php echo base_url('home/r_and_d');?>" class="dropdown-item">R & D</a>
                    </div>
                </div>
                <!-- <a href="<?php echo base_url('home/services');?>" class="nav-item nav-link">Services</a> -->
                <a href="<?php echo base_url('home/solar_park');?>" class="nav-item nav-link">Solar Park</a>
           <!--      <a href="<?php echo base_url('home/project');?>" class="nav-item nav-link">Project</a> -->
                <!-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="feature.html" class="dropdown-item">Feature</a>
                        <a href="quote.html" class="dropdown-item">Free Quote</a>
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div> -->
                <a href="<?php echo base_url('home/career');?>" class="nav-item nav-link">Career</a>
                <a href="<?php echo base_url('home/contact');?>" class="nav-item nav-link">Contact</a>
            </div>
            <a href="tel:<?php echo MOBNO;?>" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Call Now<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->