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
            <h6 class="subtitle">Small Team With Big Ideas</h6>
            <h1 class="title">RA Info Solution </h1>
            <h3>Innovation in Designing and Technology</h3></br>
            <div class="buttons text-center">
                <div class="d-grid gap-2">
   <p class="text-white bg-dark">                 
  <button class="btn btn-lg btn-primary" type="button"><a href="<?= base_url('Main/Services_2')?>"> <h3 class="text-light "> Our Services </h3> </button>

 

  <button class="btn btn-lg btn-primary" type="button"> <a href="<?= base_url('Main/Contact_7')?>"><h3 class="text-white"> Contact Us</h3></button>

</div>

                
             </a>  
             
            </div>              
        </div>      
    </header>

    <div class="box text-center ">

        <div class="box-item">
            
            <i class="ti-vector"></i>
            <h1 class="box-title">Web Design</h1>
            
            <p>RA Info Solution offers a complete package of affordable website design and development From the initial process of inputs from clients, planning on the basis of such inputs to final implementation and testing.</p>

        </div>
        <div class="box-item">
            <i class="ti-filter"></i>
            <h4 class="box-title">Web Development</h4>
            <p> RA Info Solution have dedicated and skilled human mind which will be doing Web development for you. Our aim is to give you, as customers, continuous support in developing</p>
        </div>
        <div class="box-item">
            <i class="ti-mobile"></i>
            <h4 class="box-title">Mobile Application</h4>
            <p>RA Info Solution provides Mobile Application Development Services. I presume you are interested in the latest kinds of techniques in mobile systems available in the market today.</p>
        </div>
    </div>
    <!-- End of Box -->

    <!-- About Section -->
   <!-- <section id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 col-lg-4">
                    <img src="assets/imgs/ss.jpeg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Creative studio Landing page" class="w-100 img-thumbnail mb-3">
                </div>
                <div class="col-md-7 col-lg-8">
                    <h6 class="section-subtitle mb-0"></h6> 
                    <center><h1 class="section-title mb-3">About Us</h1></center>
                    <p>RA Info Solution is a value driven company in Pune, India offering services like application development, website design, Desk Application. We put a special focus on meeting customer needs and expectations. Our key differentiator is in our ability to understand the customer requirements and delivering exactly as per the expectations. We are not afraid of being flexible in our approach, if the customer needs it. </p>
                    <center><h6 class="section-title mb-3">Vision</h6></center>
                    <p>To develop and deliver software services to the customers on shore and offshore With high quality, quick turnaround time and at low cost.
                    </p>
                    <center><h6 class="section-title mb-3">Mission</h6></center>
                    <p>To deliver the right business SOLUTION that integrate People,
                    Process and emerging Technology to help our clients to achieve the business benefits of a collaborative enterprise at very affordable prices.</p>
                </div>
            </div>
        </div>
    </section>-->

    <!-- End of About Section -->
<!-- About Section with bg -->
   <!-- <section class="has-bg-img py-md">
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
    </section>-->

    <!-- End Of About Sectoin -->
    <!-- Service Section -->
   <!-- <section id="service">
        <div class="container">
            <h1 class="section-subtitle text-center"></h1>
            <h5 class="section-title text-center mb-6">Services</h5>
            <h3 class="section-subtitle text-center"> </h3>
            <div class="row">
                <div class="col-sm-4 col-md-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h2 class="mb-4"><i class="ti-filter text-primary"></i></h2>
                            <h4 class="card-title">Cost Estimation</h4>
                            <p>RA Info Solution provides Cost Estimation Services. I presume you are interested in the latest kinds of techniques in Cost Estimation available in the market today. Cost estimating is one of the most important steps in project management.
.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h2 class="mb-4"><i class="ti-paint-roller text-primary"></i></h2>
                            <h4 class="card-title">SEO Services</h4>
                            <p>RA Info Solution have dedicated and skilled human mind which will be doing Web development for you. Our aim is to give you, as customers, continuous support in developing and maintaining dedicated website carefully craft for your business enhancement.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h2 class="mb-4"><i class="ti-ruler-pencil text-primary"></i></h2>
                            <h4 class="card-title">Desk Application</h4>
                            <p>RA Info Solution provide you desktop application development services with an efficient, user-friendly, and customized desktop application that can run offline.Our desktop applications help businesses meet their respective requirements and provide a competitive advantage in the growing market.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h2 class="mb-4"><i class="ti-layers text-primary"></i></h2>
                            <h4 class="card-title">Our Skill Set Development</h4>
                            <p>RA Info Solution is reputed web designing firm in Pune India, we offer high quality web development services to fulfill your entire requirement. Web site development is the finest high quality work. Our expertise uses the top notch quality for the creating the perfect address One World.</p>
                        </div>
                    </div>
                </div>-->

                <!--<div class="col-sm-4 col-md-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h2 class="mb-4"><i class="ti-bolt text-primary"></i></h2>
                           <h4 class="card-title">SEO Services</h4>
                            <p>RA Info Solution has expert SEO Analysts who help you in optimizing your business solutions aiming to provide the best services to the customers. SEO is most important for the website. SEO is the process of enhancing the visibility of a website or a web page in a search engine. We aim to deliver the projects right on time and also at one go.
RA Info Solution helps to achieve your goal and help to increase your sales by using our SEO service. We have planned strategy and protocol which will be followed to give our clients website top in the Search Engine. Our SEO team will work hard to give you this edges which makes maximized visibility of your Web site.
We make sure that your Website always positioned top in the Search related to your specific business domain. SEO Service requires careful application of Keyword algorithms and lot of tools and techniques.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h2 class="mb-4"><i class="ti-palette text-primary"></i></h2>
                            <h4 class="card-title">Cost Estimation</h4>
                            <p>RA Info Solution provides Cost Estimation Services. I presume you are interested in the latest kinds of techniques in Cost Estimation available in the market today. Cost estimating is one of the most important steps in project management.
A cost estimate establishes the base line of the project cost at different stages of development of the project. A cost estimate at a given stage of project development represents a prediction provided by the cost engineer or estimator on the basis of available data.
Cost engineering is defined as that area of engineering practice where engineering judgment and experience are utilized in the application of scientific principles and techniques to the problem of cost estimation, cost control and profitability
</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h2 class="mb-4"><i class="ti-stats-up text-primary"></i></h2>
                            <h4 class="card-title">Our Skill Set Development</h4>
                            <p>RA Info Solution is reputed web designing firm in Pune India, we offer high quality web development services to fulfill your entire requirement. Web site development is the finest high quality work. Our expertise uses the top notch quality for the creating the perfect address One World. That’s offering your business in perfect method.
RA Info Solution provides its customers a dedicated staff of industry-leading thinkers who offer a comprehensive, creative and ever-growing suite of Information Technology (IT) capabilities as well as proven SOLUTION - SOLUTION that continue to help commercial, meet today's complex and often global challenges.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h2 class="mb-4"><i class="ti-location-arrow text-primary"></i></h2>
                            <h4 class="card-title">Marketing Solutions </h4>
                            <p>1 Toll Free Service </p>
                            <p>2 Hosted IVR </p>
                            <p>3 Hosted OBD Services </p>
                            <p>4 SMS Solutions </p>
                            <p>5 Call Register Service </p>



                    </div>-->
                <!--</div>

            </div>  
        </div>
    </section>-->
    <!-- End of Service Section -->

    <!-- Portfolio section -->
    <!--<section id="portfolio">
        <div class="container text-center">
            <h6 class="section-subtitle">Our Awesome Works</h6>
            <h6 class="section-title mb-5">Our Portfolio</h6>
            <div class="row">
                <div class="col-sm-4">
                    <div class="img-wrapper">
                        <img src="assets/imgs/erp.png" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Creative studio Landing page">
                        <div class="overlay">
                            <div class="overlay-infos">
                                <h5>Project Title</h5>
                                <h4> School Management ERP </h4>
                                <a href="javascript:void(0)"><i class="ti-zoom-in"></i></a>
                                <a href="javascript:void(0)"><i class="ti-link"></i></a>
                            </div>  
                        </div>
                    </div>
                    <div class="img-wrapper">
                        <img src="assets/imgs/gst.png" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Creative studio Landing page">
                        <div class="overlay">
                            <div class="overlay-infos">
                                <h5>Project Title</h5>
                                <h4>GST Biling Software </h4>
                                <a href="javascript:void(0)"><i class="ti-zoom-in"></i></a>
                                <a href="javascript:void(0)"><i class="ti-link"></i></a>
                            </div>                              
                        </div>
                    </div>                  
                </div>
                <div class="col-sm-4">
                    <div class="img-wrapper">
                        <img src="assets/imgs/loan.png" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Creative studio Landing page">
                        <div class="overlay">
                            <div class="overlay-infos">
                                <h5>Project Title</h5>
                                <h4>Loan Management</h4>

                                <a href="javascript:void(0)"><i class="ti-zoom-in"></i></a>
                                <a href="javascript:void(0)"><i class="ti-link"></i></a>
                            </div>  
                        </div>
                    </div>
                    <div class="img-wrapper">
                        <img src="assets/imgs/pati.png" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Creative studio Landing page">
                        <div class="overlay">
                            <div class="overlay-infos">
                                <h5>Project Title</h5>
                                <h4>Pateint Management </h4>
                                <a href="javascript:void(0)"><i class="ti-zoom-in"></i></a>
                                <a href="javascript:void(0)"><i class="ti-link"></i></a>
                            </div>                              
                        </div>
                    </div>                  
                </div>
                <div class="col-sm-4">
                    <div class="img-wrapper">
                        <img src="assets/imgs/lead.png" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Creative studio Landing page">
                        <div class="overlay">
                            <div class="overlay-infos">
                                <h5>Project Title</h5>
                                <h4>lead management software (CRM</h4>
                                <a href="javascript:void(0)"><i class="ti-zoom-in"></i></a>
                                <a href="javascript:void(0)"><i class="ti-link"></i></a>
                            </div>  
                        </div>
                    </div>
                    <div class="img-wrapper">
                        <img src="assets/imgs/hrm.png" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Creative studio Landing page">
                        <div class="overlay">
                            <div class="overlay-infos">
                                <h5>Project Title</h5>
                                <h4>Human Resource HRM</h4>
                                <a href="javascript:void(0)"><i class="ti-zoom-in"></i></a>
                                <a href="javascript:void(0)"><i class="ti-link"></i></a>
                            </div>                              
                        </div>
                    </div>                  
                </div>
            </div>
        </div>
    </section>-->
    <!-- End of portfolio section -->

    <!-- Team Section -->
    <!--<section id="team">
        <div class="container">
            <h6 class="section-subtitle text-center"></h6>
            <h6 class="section-title mb-5 text-center">Team</h6>
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="card text-center mb-4">
                        <img class="card-img-top inset" src="assets/imgs/sir.png">
                        <div class="card-body">
                            <h6 class="small text-primary font-weight-bold">Founder</h6>
                            <h3 class="card-title">Rahul Pimpale </h3>
                            <p></p>
                            <div class="socials">
                                <a href="javascript:void(0)"><i class="ti-facebook"></i> </a>
                                <a href="javascript:void(0)"><i class="ti-dropbox"></i></a>
                                <a href="javascript:void(0)"><i class="ti-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card text-center mb-4">
                        <img class="card-img-top inset" src="assets/imgs/pru.jpeg">
                        <div class="card-body">
                            <h6 class="small text-primary font-weight-bold">Team Leader </h6>
                            <h3 class="card-title">Pruthviraj Karale</h3>
                            <p></p>
                            <div class="socials">
                                <a href="javascript:void(0)"><i class="ti-facebook"></i> </a>
                                <a href="javascript:void(0)"><i class="ti-dropbox"></i></a>
                                <a href="javascript:void(0)"><i class="ti-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card text-center mb-4">
                        <img class="card-img-top inset" src="assets/imgs/avi.jpeg">
                        <div class="card-body">
                            <h6 class="small text-primary font-weight-bold">Developer</h6>
                            <h3 class="card-title">Avinash Bavaskar</h3>
                            <p></p>
                            <div class="socials">
                                <a href="javascript:void(0)"><i class="ti-facebook"></i> </a>
                                <a href="javascript:void(0)"><i class="ti-dropbox"></i></a>
                                <a href="javascript:void(0)"><i class="ti-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card text-center mb-4">
                        <img class="card-img-top inset" src="assets/imgs/sus.jpeg">
                        <div class="card-body">
                            <h6 class="small text-primary font-weight-bold">PHP Developer</h6>
                            <h3 class="card-title">Sushil Aher</h3>
                            <p></p>
                            <div class="socials">
                                <a href="javascript:void(0)"><i class="ti-facebook"></i> </a>
                                <a href="javascript:void(0)"><i class="ti-dropbox"></i></a>
                                <a href="javascript:void(0)"><i class="ti-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card text-center mb-4">
                        <img class="card-img-top inset" src="assets/imgs/vis.jpeg">
                        <div class="card-body">
                            <h6 class="small text-primary font-weight-bold"> Developer</h6>
                            <h3 class="card-title">Vishal Mavalkar</h3>
                            <p></p>
                            <div class="socials">
                                <a href="javascript:void(0)"><i class="ti-facebook"></i> </a>
                                <a href="javascript:void(0)"><i class="ti-dropbox"></i></a>
                                <a href="javascript:void(0)"><i class="ti-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card text-center mb-4">
                        <img class="card-img-top inset" src="assets/imgs/shu.jpeg">
                        <div class="card-body">
                            <h6 class="small text-primary font-weight-bold">Cyber Security Analysis</h6>
                            <h3 class="card-title">Shubham Sonone</h3>
                            <p></p>
                            <div class="socials">
                                <a href="javascript:void(0)"><i class="ti-facebook"></i> </a>
                                <a href="javascript:void(0)"><i class="ti-dropbox"></i></a>
                                <a href="javascript:void(0)"><i class="ti-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>-->
    <!-- End of Team Sectoin -->

    <!-- Fatcs Section -->
   <!-- <section class="has-bg-img bg-img-2">
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
                        <h6 class="title">100+</h6>
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
    </section>-->

    <!-- Testimonial Section -->
    <!--<section id="testimonial">
        <div class="container">
            <h6 class="section-subtitle text-center">Testimonial</h6>
            <h6 class="section-title text-center mb-6">What Our Clients Says</h6>
            <div class="row">
                <div class="col-md-6">
                    <div class="testimonial-wrapper">
                        <div class="img-holder">
                            <img src="assets/imgs/company.png" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Creative studio Landing page">                     
                        </div>
                        <div class="body">
                            <p class="subtitle">Indian Herpetological Society(IHS) is instrumental in rescue and re-habilitation of wild animals,their scientific captive management and further rehabilitation. In 1989, IHS was recognized by Species Survival Commission for the International Union for Conservation of Nature (IUCN) and is also active on Declining Amphibian Task Force. </p> 
                            <h6 class="title">Indian Herpetological Society</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="testimonial-wrapper">
                        <div class="img-holder">
                            <img src="assets/imgs/pru..png" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Creative studio Landing page">                     
                        </div>
                        <div class="body">
                            <p class="subtitle">Amrutvahini Institute of Management and Business Administration offers Two Years Full Time MBA course which is affiliated to University of Pune and Approved by AICTE, New Delhi. It’s also NAAC Accredited ISO 9001:2015 Certified Management Institute Ph.D Research Centre in Management.</p>
                            <h4 class="title">Amrutvahini S & S.V.S.S.</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!-- End of Testimonial Section -->

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
   <!-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <iframe width="100%" height="475" src="https://www.youtube.com/embed/TP4THzsAa3M" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>-->
    <!-- end of modal -->

    <!-- Blog Section -->
    <!--<section id="blog">
        <div class="container">
            <h6 class="section-subtitle text-center">News Feeds</h6>
            <h6 class="section-title mb-6 text-center">Our Blog</h6>

            <div class="row">
                <div class="col-md-4">
                    <div class="card blog-post my-4 my-sm-5 my-md-0">
                        <img src="assets/imgs/dom.png" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Creative studio Landing page">
                        <div class="card-body">
                            <div class="details mb-3">-->

                               <!-- <a href="javascript:void(0)"><i class="ti-comments"></i> </a> -->
                                <!--<a href="javascript:void(0)"><i class="ti-eye"></i> </a> -->
                           <!-- </div>
                            <h5 class="card-title">Website Domain Hosting Service</h5>
                            <p>A web hosting service is a type of Internet hosting service that hosts websites for clients, Companies providing web hosting services are sometimes called web hosts.
</p>
                            <a href="javascript:void(0)" class="d-block mt-3"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card blog-post my-4 my-sm-5 my-md-0">
                        <img src="assets/imgs/lan.png" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Creative studio Landing page">
                        <div class="card-body">
                            <div class="details mb-3">-->
                                <!--<a href="javascript:void(0)"><i class="ti-comments"></i> 434</a>-->
                               <!-- <a href="javascript:void(0)"><i class="ti-eye"></i> 987</a> -->
                            <!--</div>
                            <h5 class="card-title"> Landing Page Designing</h5>
                            <p>Landing page design is the process of creating an enticing site page for your target audience and website visitors. </p>
                            <a href="javascript:void(0)" class="d-block mt-3"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card blog-post my-4 my-sm-5 my-md-0">
                        <img src="assets/imgs/mobb.png" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Creative studio Landing page">
                        <div class="card-body">
                            <div class="details mb-3">-->
                               <!-- <a href="javascript:void(0)"><i class="ti-comments"></i> 164</a> -->
                               <!-- <a href="javascript:void(0)"><i class="ti-eye"></i> 425</a> -->
                           <!-- </div>
                            <h5 class="card-title">Mobile User Experience Design</h5>
                            <p>Mobile UX designs Designers focus on accessibility and efficiency to optimize these on-the-go interactions.</p>
                            <a href="javascript:void(0)" class="d-block mt-3"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!-- End of Blog Section -->

    <!-- Contact Section -->
  <!--  <section id="contact">
        <div class="container">
            <div class="contact-card">
                <div class="infos">-->

                    <!--<h6 class="section-subtitle">Get Here</h6>-->
                   <!-- <h6 class="section-title mb-4">Contact Us</h6>

                    <div class="item">
                        <i class="ti-location-pin"></i>
                        <div class="">
                            <h5>Location</h5>
                            <p>Ambegaon BK, Pune-411047, Maharashtra, India</p>
                        </div>                          
                    </div>
                    <div class="item">
                        <i class="ti-mobile"></i>
                        <div>
                            <h5>Phone Number</h5>
                            <p>+8048250279</p>
                        </div>                          
                    </div>
                    <div class="item">
                        <i class="ti-email"></i>
                        <div class="mb-0">
                            <h5>Email Address</h5>
                            <p>contact@rainfosolution.in</p>
                        </div>
                    </div>
                    <div class="item">
                        <i class="ti-world"></i>
                        <div class="mb-0">
                            <h5>example.com</h5>
                            <p>info</p>
                        </div>
                    </div>
                </div>
                <div class="form">
                    <h6 class="section-subtitle"> </h6>
                    <h6 class="section-title mb-4">Available On 9.00 AM to 5.00 PM</h6>
                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <textarea name="contact-message" id="" cols="30" rows="7" class="form-control form-control-lg" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-lg mt-3">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>-->
    <!-- Contact Section -->



<hr>


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

    