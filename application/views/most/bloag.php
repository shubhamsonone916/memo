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
 <section id="blog">
        <div class="container">
            <h6 class="section-subtitle text-center">News Feeds</h6>
            <h6 class="section-title mb-6 text-center">Our Blog</h6>

            <div class="row">
                <div class="col-md-4">
                    <div class="card blog-post my-4 my-sm-5 my-md-0">
                        <img src="<?php echo base_url('assets/imgs/dom.png'); ?>">  
                        <div class="card-body">
                            <div class="details mb-3">
                               <!-- <a href="javascript:void(0)"><i class="ti-comments"></i> </a> -->
                                <!--<a href="javascript:void(0)"><i class="ti-eye"></i> </a> -->
                            </div>
                            <h5 class="card-title">Website Domain Hosting Service</h5>
                            <p>A web hosting service is a type of Internet hosting service that hosts websites for clients, Companies providing web hosting services are sometimes called web hosts.
</p>
                            <a href="javascript:void(0)" class="d-block mt-3"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card blog-post my-4 my-sm-5 my-md-0">
                        <img src="<?php echo base_url('assets/imgs/lan.png'); ?>"> 
                        <div class="card-body">
                            <div class="details mb-3">
                                <!--<a href="javascript:void(0)"><i class="ti-comments"></i> 434</a>-->
                               <!-- <a href="javascript:void(0)"><i class="ti-eye"></i> 987</a> -->
                            </div>
                            <h5 class="card-title"> Landing Page Designing</h5>
                            <p>Landing page design is the process of creating an enticing site page for your target audience and website visitors. </p>
                            <a href="javascript:void(0)" class="d-block mt-3"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card blog-post my-4 my-sm-5 my-md-0">
                        <img src="<?php echo base_url('assets/imgs/mobb.png'); ?>"> 
                            <div class="details mb-3">
                               <!-- <a href="javascript:void(0)"><i class="ti-comments"></i> 164</a> -->
                               <!-- <a href="javascript:void(0)"><i class="ti-eye"></i> 425</a> -->
                            </div>
                            <h5 class="card-title">Mobile User Experience Design</h5>
                            <p>Mobile UX designs Designers focus on accessibility and efficiency to optimize these on-the-go interactions.</p>
                            <a href="javascript:void(0)" class="d-block mt-3"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
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
                                    <a href="#about">Best Hosted IVR (Interactive Voice Responce) Solution</a>
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

    