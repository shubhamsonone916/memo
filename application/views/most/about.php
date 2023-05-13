<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Creative Studio landing page.">
    <meta name="author" content="Devcrud">
    <title>RA Info Solution</title>

    <!-- font icons -->
     <?= link_tag("assets/vendors/themify-icons/css/themify-icons.css")?>

    <!-- Bootstrap + Creative Studio main styles -->
	<?= link_tag("assets/css/creative-studio.css")?>
    <?= link_tag("assets/css/style.css")?>
    
        
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    
    <!-- Page Navigation -->
    <nav class="navbar custom-navbar navbar-expand-lg navbar-dark" data-spy="affix" data-offset-top="20">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="<?php echo base_url('assets/imgs/ra.jpeg'); ?>"> 
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
            </button>

           <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Main/index')?>">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Main/About_1')?>">ABOUT </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Main/Services_2')?>">SERVICES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Main/Portfolio_3')?>">PORTFOLIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Main/Team_4')?>">TEAM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Main/Testimonial_5')?>">TESTIMONIAL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Main/Bloag_6')?>">BLOAG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Main/Contact_7')?>">CONTACT</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link btn btn-primary btn-sm ml-lg-3" href="components.html">COMPONENTS</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> 

    <!-- End Of Page Navigation --><!-- Page Header -->
    <header class="header">
        <div class="overlay">
               <div class='main'>
                 <marquee><h1 class="demo">RA Info Solution </h1>
                 </marquee><marquee><h6  class="demo">Small Team With Big Ideas</h6></marquee>
         
                  
            </div>           
        </div>      
    </header>
    <section id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 col-lg-4">
                   <?php echo img (array('src'=>'assets/imgs/ss.jpeg','width'=>'350px'))?>
                </div>
                <div class="col-md-7 col-lg-8">
                    <h6 class="section-subtitle mb-0"></h6> 
                    <center><h1 class="section-title mb-3">About Us</h1></center>
                    <p>RA Info Solution is a value driven company in Pune, India offering Services like application development, website design, Desk Application. We put a special focus on meeting customer needs and expectations. Our key differentiator is in our ability to understand the customer requirements and delivering exactly as per the expectations.We are not afraid of being flexible in our approach, if the customer needs it.</p>
                    <center><h6 class="section-title mb-3">Vision</h6></center>
                    <p>To develop and deliver software services to the customers on shore and offshore With high quality, quick turnaround time and at low cost.
                    </p>
                    <center><h6 class="section-title mb-3">Mission</h6></center>
                    <p>To deliver the right business SOLUTION that integrate People,
                    Process and emerging Technology to help our clients to achieve the business benefits of a collaborative enterprise at very affordable prices.</p>
                </div>
            </div>
        </div>
        </header>
    </section>
    <!-- End of About Section --> 
<!-- About Section with bg -->
    <section class="has-bg-img py-md">
        <div class="container text-center">
            <h6 class="section-subtitle">We See</h6>
            <h6 class="section-title mb-6">Skills</h6>
            <div class="widget mb-4">
                <div class="widget-item">
                    <i class=""> </i>
                    <h4>Angular</h4>
                </div>
                <div class="widget-item">
                    <i class=""></i>
                    <h4>PHP</h4>
                </div>
                <div class="widget-item">
                    <i class=""></i>
                    <h4>Android</h4>
                </div>
                <div class="widget-item">
                    <i class=""></i>
                    <h4>Database</h4>
                </div>
            </div>
        </div>
    </section>
<div>
<hr>
</div>
     <section class="has-bg-img py-0">
        <div class="container">
            <div class="footer">
                <div class="footer-lists">
                    <ul class="list">
                        <li class="list-head">
                            <h6 class="font-weight-bold">About Us</h6>
                        </li>
                        <li class="list-body">
                            <a href="#" class="logo">
                                <img src="<?php echo base_url('assets/imgs/ra.jpeg'); ?>">   
                                <h6>RA Info Solution </h6>
                            </a>
                            <p></p> 
                            <p class="mt-3">
                                Copyright © 2021 All rights reserved | This template is made with : RA Info Solution 
                            </p>                   
                        </li>
                    </ul>
                      <ul class="list">
                        <li class="list-head">
                             <h6 class="font-weight-bold">Pages</h6>
                        </li>
                        <li class="list-body">
                            <div class="row">
                                <div class="col">
                            
                            <a class="nav-link" href="<?= base_url('Main/index')?>">Home</a>
                            <a class="nav-link" href="<?= base_url('Main/About_1')?>">About </a>
                            <a class="nav-link" href="<?= base_url('Main/Services_2')?>">Services</a>
                            <a class="nav-link" href="<?= base_url('Main/Portfolio_3')?>">Portfolio</a>
                            <a class="nav-link" href="<?= base_url('Main/Team_4')?>">Team</a>
                            <a class="nav-link" href="<?= base_url('Main/Testimonial_5')?>">Testimonial</a>
                            <a class="nav-link" href="<?= base_url('Main/Bloag_6')?>">Bloag</a>
                            <a class="nav-link" href="<?= base_url('Main/Contact_7')?>">Contact </a>
                        
                              </div>  
                            </div>
                        </li>
                    </ul>
                    <ul class="list">
                        <li class="list-head">
                            <h6 class="font-weight-bold">Tata Tele Business Services</h6>
                        </li>
                        <li class="list-body">
                           <div class="row">
                                <div class="col">
                                    <a href="#service">Best Hosted IVR (Interactive Voice Responce) Solution</a>
                                    <a href="#service">Cyber Security Solution</a>
                                    <a href="#portfolio">Multifactor Authentication</a>
                                    <a href="#testmonail">Virtual Firewall</a>
                                     <a href="#testmonail">Cloud Communication Platform & Solution</a>
                                </div>
                                
                            </div>
                        </li>
                    </ul>
                  
                    <ul class="list">
                        <li class="list-head">
                            <h6 class="font-weight-bold">Cotact Info</h6>
                        </li>
                        <li class="list-body">
                            <p>Contact us 8.00 AM to 5.00 PM</p>
                            <p><i class="ti-location-pin"></i>Pune</p>
                            <p><i class="ti-email"></i> contact@rainfosolution.in</p>
                            <div class="social-links">
                                <a href="javascript:void(0)" class="link"><i class="ti-facebook"></i></a>
                                <a href="javascript:void(0)" class="link"><i class="ti-twitter-alt"></i></a>
                                <a href="javascript:void(0)" class="link"><i class="ti-google"></i></a>
                                <a href="javascript:void(0)" class="link"><i class="ti-pinterest-alt"></i></a>
                                <a href="javascript:void(0)" class="link"><i class="ti-instagram"></i></a>
                                <!--<a href="javascript:void(0)" class="link"><i class="ti-rss"></i></a>-->
                            </div>
                        </li>
                    </ul>
                </div>
            </div>    
        </div>
    </section>

    