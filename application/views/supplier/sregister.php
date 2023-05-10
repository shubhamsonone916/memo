<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Register</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
   <?= link_tag("assets/img/favicon.png");?>
   <?= link_tag("assets/img/apple-touch-icon.png");?>

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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

<body>
  <div class="container">



<div class="row justify-content-center">
<div class="col-md-7">
<div class="card" style="width: 40rem;">
<header class="card-header">
  <a href="<?= base_url('Main/supplier');?>" class="float-right btn btn-outline-primary mt-1">Log in</a>
  <h4 class="card-title mt-2">Register</h4>
</header>
<article class="card-body">
<?php echo form_open('Main/registers');?>
  <div class="row">
    <div class="col-8">
      <div class="input-group mb-3">
        
            <span class="input-group-text" id="basic-addon1"><b> Name</b></span>
            <input type="text" name="Name" class="form-control" placeholder=" Enter The Name" aria-label="Username" aria-describedby="basic-addon1">
      </div>

      <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><b>Address</b></span>
            <input type="text" name="Address" class="form-control" placeholder=" Enter The Address" aria-label="Username" aria-describedby="basic-addon1">
      </div>

      <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><b>Email-Id</b></span>
            <input type="text" name="Email_Id" class="form-control" placeholder="Enter The Email-Id" aria-label="Username" aria-describedby="basic-addon1">
      </div>

       <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><b>Contact</b></span>
            <input type="text" name="Contact" class="form-control" placeholder=" Enter The Number" aria-label="Username" aria-describedby="basic-addon1">
      </div>

      <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><b>Website</b></span>
            <input type="text" name="website" class="form-control" placeholder=" Enter The Website" aria-label="Username" aria-describedby="basic-addon1">
      </div>

     <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><b>Director</b></span>
            <input type="text" name="director" class="form-control" placeholder=" Enter The Director Of Company" aria-label="Username" aria-describedby="basic-addon1">
      </div>

      <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><b> Trasportar Name</b></span>
            <input type="text" name="trasportar" class="form-control" placeholder=" Enter The Transportar Name" aria-label="Username" aria-describedby="basic-addon1">
      </div>

       <div class="container" align="center">
        <div class="form-group">
        <button type="submit" name="register" class="btn btn-primary btn-lg">Save</button>&nbsp &nbsp &nbsp &nbsp
         <button type="reset" class="btn btn-secondary btn-lg">Reset</button>
      </div>
      </div>
 



    </div>




    <div class="col-4">
      <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><b>Vendor Code No.</b></span>
            <input type="int" name="Code_no" class="form-control" placeholder="0000" aria-label="Username" aria-describedby="basic-addon1">
      </div>

      <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"> <b>GST</b></span>
            <input type="varchar" name="gst" class="form-control" placeholder="GST No" aria-label="Username" aria-describedby="basic-addon1">
      </div>

      <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><b>PAN No</b></span>
            <input type="int" name="pan_No" class="form-control" placeholder="000" aria-label="Username" aria-describedby="basic-addon1">
      </div>
      
      <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><b>TAN No</b></span>
            <input type="int" name="tan_No" class="form-control" placeholder="000" aria-label="Username" aria-describedby="basic-addon1">
      </div>

      <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><b>Username</b></span>
            <input type="text" name="username" class="form-control" placeholder="Enter Username" aria-label="Username" aria-describedby="basic-addon1">
      </div>

      <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><b>Password </b></span>
            <input type="text" name="password" class="form-control" placeholder="Enter Password" aria-label="Username" aria-describedby="basic-addon1">
      </div>
     
      <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><b> Trasportar Contact</b></span>
            <input type="text" name="tContact" class="form-control" placeholder=" Enter The Number" aria-label="Username" aria-describedby="basic-addon1">
      </div>
    






    </div>
  </div> 


  </div>
  </form>


</article>


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>