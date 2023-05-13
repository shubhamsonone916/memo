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
    <!-- End Of Page Navigation -->
    <!-- Page Header -->
    <header class="header">
        <div class="overlay">
                 <div class='main'>
                 <marquee><h1 class="demo">RA Info Solution </h1>
                 </marquee><marquee><h6  class="demo">Small Team With Big Ideas</h6></marquee>
         
                  
            </div> 
        </div>   
        </header>   
    
    <!-- Testimonial Section -->
    <section id="testimonial">
      
        <div class="container">
            <h6 class="section-subtitle text-center">Testimonial</h6>
            <h6 class="section-title text-center mb-6">What Our Clients Says</h6>
            <hr>
            
            <div class="row">
                   
                <div class="col-md-6">
                    <div class="testimonial-wrapper">
                        <div class="img-holder">
                            <img src="<?php echo base_url('assets/imgs/company.png'); ?>">                     
                        </div>
                        
                        <div class="body">
                         
                            <p class="subtitle">Indian Herpetological Society(IHS) is instrumental in rescue and re-habilitation of wild animals,their scientific captive management and further rehabilitation. In 1989, IHS was recognized by Species Survival Commission for the International Union for Conservation of Nature (IUCN) and is also active on Declining Amphibian Task Force. </p> 
                            <h6 class="title">Indian Herpetological Society</h6>
                        </div>
                    </div>
                </div>
                
                
            </br>
            
                <div class="col-md-6">

                    <div class="testimonial-wrapper">
                        <div class="img-holder">
                             <img src="<?php echo base_url('assets/imgs/pru..png'); ?>">                     
                        </div>
                        <div class="body">
                            <p class="subtitle">Amrutvahini Institute of Management and Business Administration offers Two Years Full Time MBA course which is affiliated to University of Pune and Approved by AICTE, New Delhi. It’s also NAAC Accredited ISO 9001:2015 Certified Management Institute Ph.D Research Centre in Management.</p>
                            <h4 class="title">Amrutvahini S & S.V.S.S.</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
    </section>
    <!-- End of Testimonial Section -->
    <section class="has-bg-img bg-img-2">
        <div class="container text-center">
            <h6 class="section-subtitle">We Are Awesome</h6>
            <h6 class="section-title mb-6">Some Fun Fucts</h6>
                <div class="widget-2">
                    <div class="widget-item">
                        <i class="ti-cup"></i>
                        <h6 class="title">1</h6>
                        <div class="subtitle">Awards Won</div>
                    </div>
                    <div class="widget-item">
                        <i class="ti-face-smile"></i>
                        <h6 class="title">50+</h6>
                        <div class="subtitle">Happy Clients</div>
                    </div>
                    <div class="widget-item">
                        <i class="ti-blackboard"></i>
                        <h6 class="title">1000+</h6>
                        <div class="subtitle">Project Completed</div>
                    </div>
                    <div class="widget-item">
                        <i class="ti-comments-smiley"></i>
                        <h6 class="title">100+</h6>
                        <div class="subtitle">Comments</div>
                    </div>
                </div>
        </div>
    </section>

    <!-- Video Section -->
   <!-- <section class="has-bg-img py-lg">
       
        <div class="container text-center">-->

            <!-- Button trigger modal -->
           <!-- <button type="button" class="btn btn-outline-primary play-control" data-toggle="modal" data-target="#exampleModalCenter">
              <i class="ti-control-play" ></i>

              
  

            </button>
            <h6 class="section-title mt-4">See Our Intro Video</h6>

        </div>
    </section>-->
    <!-- End of Video Section -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <iframe width="100%" height="475" src="https://www.youtube.com/embed/TP4THzsAa3M" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <!-- end of modal -->

   
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
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

    
    <!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Creative Studio js -->
    <script src="assets/js/creative-studio.js"></script> 

</body>
</html>
 