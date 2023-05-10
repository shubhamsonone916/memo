<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <?= link_tag("assets/img/favicon.png");?>
  <?= link_tag("assets/img/apple-touch-icon.png");?>

  <!-- Google Fonts -->
  <?= link_tag("https://fonts.gstatic.com");?>
 <?= link_tag("https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i");?>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
 <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

  <!-- Vendor CSS Files -->
  <?= link_tag("assets/vendor/bootstrap/css/bootstrap.min.css");?>
  <?= link_tag("assets/vendor/bootstrap-icons/bootstrap-icons.css");?> 
  <?= link_tag("assets/vendor/boxicons/css/boxicons.min.css");?> 
  <?= link_tag("assets/vendor/quill/quill.snow.css" );?>
  <?= link_tag("assets/vendor/quill/quill.bubble.css" );?>
  <?= link_tag("assets/vendor/remixicon/remixicon.css");?>
  <?= link_tag("assets/vendor/simple-datatables/style.css");?>

   <!-- Template Main CSS File -->
  <?= link_tag("assets/css/style.css");?>
  <?= link_tag("assets/css/ss.css");?>

  <style>

  .sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 17px;
  color: black;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
  padding: 15px;

}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: blue;
}

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: white;
  color: blue;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: white;
  
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.lo{
     margin-left: 350px;
}
.demo
{
  height: 800px;
  width: 80%;
  background-color: #B8B8B8;
  float: left;
  display: inline-table;
  margin-left: 300px;
  margin-top: 60px;
}
button:hover {
      background-color: #45a049;
    }
    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 70%;
   float:left;
   margin-left: 20px;
   
  }
  
  td, th {
    border: 1px solid black;
    text-align: left;
    padding: 1px;
    
  }
  
  tr:nth-child(even) {
    background-color: #dddddd;
  }
 .design
{
  border: 1px solid;
  padding: 8px;
}
.tab
{
  margin-left: 800px;
}

</style>

 

 
 <body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Admin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->
    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->
    <div>
      <a href="<?php echo base_url('Main/Admin_logout'); ?>" class="lo" >Logout</a>

    </div>

</header>
  <aside id="sidebar" class="sidebar">

<div class="sidenav">
  <a href="#about">Dashborad</a>
  <button class="dropdown-btn">Manger 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="<?php echo base_url("Main/fectchadmin");?>">Itemaster</a>
    <a href="<?php echo base_url("Main/trn");?>">trasnporator</a>
    <a href="#">Inventory</a>
    <a href="#">Inword</a>
   
  </div>
  <button class="dropdown-btn">Director 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">payroll</a>
    <a href="#">Accounting</a>
</div>
<button class="dropdown-btn">Supplier
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Directors</a>
    <a href="#">Reports</a>
    <a href="#">purchese</a>
    <a href="#"></a>
</div>
<button class="dropdown-btn">Register
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="<?php echo base_url("Main/mfetchdata");?>">manger</a>
    <a href="<?php echo base_url("Main/sfetchdata");?>">Supplier</a>
    <a href="#">Director</a>
    <a href="#"></a>
</div>
</div>






  
 
  
</aside>
<div class="demo">
    <div class="container">
<div class="card" style="width: 55rem;">
  <div class="card-header" align="center">
    <h2> Transport Detail </h2>
  </div>
  <div class="card-body">

<?php echo form_open('Main/admintrn');?>

   <div class="row">
    <div class="col-8">
      <div class="input-group mb-3">
        
            <span class="input-group-text" id="basic-addon1"><b>Name</b></span>
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

       <div class="container" align="center">
        <div class="form-group">
        <button type="submit" name="register" class="btn btn-primary btn-lg">Save</button>&nbsp &nbsp &nbsp &nbsp
         <button type="reset" class="btn btn-secondary btn-lg">Reset</button>
      </div>
      </div>
 



    </div>




    <div class="col-4">
      <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><b>Transport.Code</b></span>
            <input type="text" name="Trans_Code" class="form-control" placeholder="0000" aria-label="Username" aria-describedby="basic-addon1">
      </div>

      <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"> <b>Date</b></span>
            <input type="date" name="Date" class="form-control" placeholder="Date" aria-label="Username" aria-describedby="basic-addon1">
      </div>

      <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><b>Vehicle No</b></span>
            <input type="text" name="Vehicle_No" class="form-control" placeholder="MH-19 S 1416" aria-label="Username" aria-describedby="basic-addon1">
      </div>

      <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><b>Passing </b></span>
            <input type="text" name="Passing" class="form-control" placeholder="White Black Red Blue" aria-label="Username" aria-describedby="basic-addon1">
      </div>

      <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><b>Driving Lic No</b></span>
            <input type="text" name="Driving_Lic" class="form-control" placeholder="123456" aria-label="Username" aria-describedby="basic-addon1">
      </div>
        <?php echo form_close();?>
    






    </div>
  </div> 


  </div>
  

  </div>
  <div>   <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Email-Id</th>
      <th scope="col">Contact</th>
      <th scope="col">Tran.Code</th>
      <th scope="col">Date</th>
      <th scope="col">Vehicle No</th>
      <th scope="col">Passing </th>
      <th scope="col">Licence-No</th>
      <th scope="col">opertion</th>
    </tr>
  </thead>
  <tbody>
   <?php foreach ($fetch->result() as $value) {
        
  ?>
    <tr>
      <th scope="row"> <?php echo $value->id; ?></th>
      <td><?php echo $value->Name; ?></td>
      <td><?php echo $value->Address; ?></td>
      <td><?php echo $value->Email_Id; ?></td>
      <td><?php echo $value->Contact; ?></td>
      <td><?php echo $value->Trans_Code; ?></td>
      <td><?php echo $value->Date; ?></td>
      <td><?php echo $value->Vehicle_No; ?></td>
      <td><?php echo $value->Passing; ?></td>
      <td><?php echo $value->Driving_Lic; ?></td>
      <td><button class="btn btn-danger"><a href="<?php echo base_url('Main/trnsdelete/'. $value->id);?>" class="text-light">delete</button></td>

    </tr>
   <?php } ?>

  </div>

<!----midlle part ---->

 <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css"></script> 
 <script src="assets/js/aa.js"></script>

 
 <script>
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}

 </script>


<script
  src="https://code.jquery.com/jquery-3.6.4.js"
  integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
  crossorigin="anonymous"></script>
</body>
</html>