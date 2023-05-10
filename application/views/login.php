<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
<style>

</style>
  <!-- Favicons -->
  <?= link_tag("assets/img/favicon.png");?>
  <?= link_tag("assets/img/apple-touch-icon.png");?>

  <!-- Google Fonts -->
  <?= link_tag("https://fonts.gstatic.com");?>
 <?= link_tag("https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i");?>


  <!-- Vendor CSS Files -->
  <?= link_tag("assets/vendor/bootstrap/css/bootstrap.min.css");?>
  <?= link_tag("assets/vendor/bootstrap-icons/bootstrap-icons.css");?> 
  <?= link_tag("assets/vendor/boxicons/css/boxicons.min.css");?> 
  <?= link_tag("assets/vendor/quill/quill.snow.css" );?>
  <?= link_tag("assets/vendor/quill/quill.bubble.css" );?>
  <?= link_tag("assets/vendor/remixicon/remixicon.css");?>
  <?= link_tag("assets/vendor/simple-datatables/style.css");?>

  <!-- Template Main CSS File -->
  <?= link_tag("assets/css/style.css")?>


  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>
*{
  box-sizing: border-box;
}
 html body
 {
  overflow-x: hidden;
  height: 100%;
  font-family: arial, sans-serif;
  background: ;
  padding: 0;
  margin:0;
 }
 .header
 {
   background: ;
   width: 100%;
   height: 60px;
   position: fixed;
   z-index: 10;
 }
 .head
 {
  text-align:center;
  color: #fff;
  background-color:black; 
  margin-left: 50px;
   font-family: Arial, Helvetica, sans-serif;
   animation-name: example ;
   animation-duration: 2s ;
   padding-top: 1px;
   display: inline-table;

    }
.head a:hover
{
    color: white;
    background:white;
}
.head a:split{
   float: right;
  background-color: #04AA6D;
  color: white;
}
@keyframes example
{
   0%   {color: red;}
  25%  {color: yellow;}
  50%  {color: blue;}
  100% {color: green;}
}
 #sidemenu
 {
  height: 100%;
  position: fixed;
  left: 0;
  top: 0;
  width: 250px;
  margin-top: 60px;
   background:blue ;
   background-image: url('assets/img/ss1.jpg');
    background-origin: border-box;
    transform: translateX(-250px);
   transition: transform 250ms ease-in-out;

 }
  #opensidebarmenu:checked ~ #sidemenu
 {
     transform: translateX(0px);
} 
 .menu{
      list-style:none;
      padding: 0;
      margin: 0;
 }
 .menu li{
     color:black;
     border-bottom: 2px solid rgba(25, 22,255,0.244);
 }
 .menu li a
 {
      color:black;
      display: block;
      text-decoration: none;]
      text-transform: uppercase;
      padding: 10px;
      font-family: Arial, Helvetica, sans-serif;
 }

.fa
 {
  width: 100px;
  height: 100px;
  position: absolute;
  z-index: 100px;
  top: 100px;
  left:15px;
  cursor: pointer;
 }
 .checkbox
 {
     display: none;
 }
 .main
  {
     background-image: url('assets/img/back.jpg');
      background-size: 90% 100%;
     float: left;
     margin-left:px;
     margin-right:100px;
     width: 100%;
     height: 1000px;
     border: 2px solid white;

    
  }
  .d1
  {
     width:30%;
     background-color:#00FF85;
     height:300px;
     margin-left: 260px;
     border-radius: 20px;
     margin-top: 100px;
     background-image: url('assets/img/m1.jpg');
      position: absolute;
      transform: translate(-50% -30%);
      background-size: 100% 100%;
      box-shadow: 1px 2px 1px 5px #EBEBEB;
      animation: slider 15s infinite linear;
      outline-style: solid;
      outline-width: thick;
  }
  @keyframes slider
  {
   0%{ background-image: url('assets/img/m1.jpg');}
   25%{ background-image: url('assets/img/m2.jpg');}
   75%{ background-image: url('assets/img/m3.jpg');}



  }
  .d2
  {
     width:450px;
     background-color:#BBBBBB;
     height:300px;
     margin-left: px;

     border-radius: 20px;
     margin-top: 340px;

  }
 /* div .d2
  {
    overflow: scroll;
  }*/
   .d3
  {
     width:40%;
     background-color:#696969;
     height:80%;
     margin-left: 730px;
     margin-right: 30px;
     border-radius: 10px;
     margin-top: 90px;
     color: white;
     padding: 30px;
     font-family: Arial, Helvetica, sans-serif;

  }
   div .d3
   {
    overflow: scroll;
   }
.footer
{
    background-color:#FFFFFF;
     float: left;
     margin-left:px;
     margin-right:100px;
     width: 100%;
     height: 200px;
     border: 2px solid black;
     padding-top: 40px;
     padding-right: 20px;
     padding-block: 35px;

}

</style>

<body>
  <div class="header">
    <?php echo img (array('src'=>'assets/img/icon1.png','width'=>'60px','margin-top'=>'10px'))?>
       <div class="head"><a href=""><marquee><h1>AbhyudayaTechonology</h1></marquee></a></div>
     <input type="checkbox" id="opensidebarmenu" class="checkbox"></i>
    <label for="opensidebarmenu" class="fas fa-bars" style="font-size: 30px; margin-top: 10px;margin-left: 10px;"></label>

    <div id="sidemenu">
      <ul class="menu">
        <li><a href="<?=base_url('Main/Admin');?>">Admin</a></li>
         <li><a href="<?=base_url('Main/manger');?>">Manger</a></li>
          <li><a href="<?=base_url('Main/director');?>">Directors</a></li>
           <li><a href="<?=base_url('Main/supplier');?>">Supplier</a></li>
           <li><a href="<?=base_url('Main/vendor');?>">Vendor</a></li>
            
      </ul>
    </div>
</div>
<div class="main">

   
  <div class="d1">
<div class="d2">
    <video  width="450px" controls="" >
        <source src="assets/img/ss.mp4"type="video/mp4">
    </video>

     </div>

     </div>


<div class="d3">
<p>&nbsp;&nbsp;&nbsp; Common cross-linkers are solid epoxy resins in so-called hybrid powders in mixing ratios of 50/50, 60/40 and 70/30 (polyester resin/ epoxy resin) for indoor applications and triglycidyl isocyanurate (TGIC) in a ratio of 93/7 and β-hydroxy alkylamide (HAA) hardener in 95/5 ratio for outdoor applications. When the powder is baked, it reacts with other chemical groups in the powder to polymerize, improving the performance properties. </p><p>&nbsp;&nbsp;&nbsp;&nbsp;The chemical cross-linking for hybrids and TGIC powders—representing the major part of the global powder coating market—is based on the reaction of organic acid groups with an epoxy functionality; this carboxy–epoxy reaction is thoroughly investigated and well understood, by addition of catalysts the conversion can be accelerated and curing schedule can be triggered in time and/or temperature. </p><p>&nbsp;&nbsp;&nbsp;&nbsp;In the powder coating industry it is common to use catalyst masterbatches where 10–15% of the active ingredient is introduced into a polyester carrier resin as matrix. This approach provides the best possible even dispersion of a small amount of a catalyst over the bulk of the powder.</p>

Concerning the cross-linking of the TGIC-free alternative based on HAA hardeners there is no known catalyst available.

<p>&nbsp;&nbsp;&nbsp;&nbsp;For special applications like coil coatings or clear coats it is common to use glycidylesters as hardener component, their cross-linking is based on the carboxy–epoxy chemistry too. A different chemical reaction is used in so-called polyurethane powders, where the binder resin carries hydroxyl functional groups that react with isocyanate groups of the hardener component.</p><p> The isocyanate group is usually introduced into the powder in blocked form where the isocyanate functionality is pre-reacted with ε-caprolactame as blocking agent or in form of uretdiones, at elevated temperatures (deblocking temperature) the free isocyanate groups are released and available for the cross-linking reaction with hydroxyl functionality.</p>


  
 
</div>
<div class="footer">

  </div>

 

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
   <script src="assets/js/ma.js"></script>
  
  <script>
 
</script>

</body>

</html>