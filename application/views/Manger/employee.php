<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Manger</title>
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
 <!--  <?= link_tag("assets/css/aa.css");?> -->

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
     margin-left: 430px;
}
.demo
{
  height: 800px
  width: 100%
  background-color: #B8B8B8;
  float: left;
  display: inline-table;
  margin-left: 300px;
  margin-top: 60px;
}
button:hover {
      background-color: #45a049;
    }
    .man
{
    width: 100%;
    height: 500px;
    margin-left: 50spx;
    background-color:white;
}
.shu
{
    width: 70%;
    height: 100%;
    margin-left: 50spx;
    table-layout: auto;
     table-border: ;

}   
.h
{

    text-align: center;
}         
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 80%;
   float: right;
   
   margin-left: 150px;
  }
  
  td, th {
    border: 1px solid black;
    text-align: left;
    padding: 2px;
    
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
        <span class="d-none d-lg-block">Manager</span>
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
      <a href="<?= base_url('Main/Admin_logout') ?>" class="lo"  >Logout</a>

    </div>

</header>

 <aside id="sidebar" class="sidebar">

<div class="sidenav">
  <a href="#about">Manger</a>
  <button class="dropdown-btn">Mastercatlog 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="<?php echo base_url("Main/fetchitem");?>">Itemaster</a>
    <a href="<?php echo base_url("Main/trnfetch");?>">trasnporator</a>
    <a href="<?php echo base_url("Main/fetchemp");?>">Employee register</a>
    <a href="<?php echo base_url("Main/Attendance");?>">Attendance</a>
    <a href="<?php echo base_url("Main/Expenses");?>">Expenses</a>

    <a href="#">Outword</a>
   
  </div>
  <button class="dropdown-btn">Director 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">payroll</a>
    <a href="#">Accounting</a>
    <a href="#">Attendance</a>
    <a href="#">Bill genration</a>
</div>
<button class="dropdown-btn">Register
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="<?php echo base_url("Main/sregister");?>">Supplier</a>
    <a href="<?php echo base_url("Main/vregister");?>">Vendor</a>
    
</div>

</div>






  
 
</aside>
<div class="demo">

  <?php echo form_open('Main/employee');?>


    
    <div class="container">

  <div class="card" style="width: 55rem;">
  <div class="card-header" align="center">
    <h4>Employee Master</h4>
  </div>
  <div class="card-body">



   <div class="row">
    <div class="col-8">
      <div class="input-group mb-4">
            <span class="input-group-text" id="basic-addon1"><b>Name</b></span>
            <input type="text" name="Name" class="form-control" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1">
      </div>

      <div class="input-group mb-4">
            <span class="input-group-text" id="basic-addon1"><b>Address</b></span>
            <input type="text" name="Address" class="form-control" placeholder="Address" aria-label="Username" aria-describedby="basic-addon1">
      </div>

       <div class="input-group mb-4">
            <span class="input-group-text" id="basic-addon1"><b>Mobile No</b></span>
            <input type="text" name="Mobile_No" class="form-control" placeholder="Mobile no" aria-label="Username" aria-describedby="basic-addon1">
      </div>

      <div class="input-group mb-4">
            <span class="input-group-text" id="basic-addon1"><b>Aadhar No</b></span>
            <input type="text" name="Aadhar_No" class="form-control" placeholder="0000-0000-0000" aria-label="Username" aria-describedby="basic-addon1">
      </div>
      <div class="container" align="center">
       <button type="submit" name="register" class="btn btn-primary btn-lg">Register</button>&nbsp &nbsp &nbsp &nbsp
         <button type="reset"class="btn btn-secondary btn-lg">Cancel</button>
     </div>
    </div>




    <div class="col-4">
      <div class="input-group mb-4">
            <span class="input-group-text" id="basic-addon1"><b>Age</b></span>
            <input type="text" name="Age" class="form-control" placeholder="Age" aria-label="Username" aria-describedby="basic-addon1">
      </div>

    <div class="input-group mb-4">
            <span class="input-group-text" id="basic-addon1"><b>Gender</b></span>
            <select id="Gender" name="Gender" required>
              <option value=""></option>
              <option value="Male" name="Male" >Male</option>
              <option value="Female" name="Female">Female</option> 
            </select>
            
    </div>


      <div class="input-group mb-4">
            <span class="input-group-text" id="basic-addon1"> <b>Date of Birth</b></span>
            <input type="date" name="Date_of_Birth"  class="form-control" placeholder="Date" aria-label="Username" aria-describedby="basic-addon1">
      </div>

      <div class="input-group mb-4">
            <span class="input-group-text" id="basic-addon1"> <b>Date of Joining</b></span>
            <input type="date" name="Date_of_Joining"  class="form-control" placeholder="Date" aria-label="Username" aria-describedby="basic-addon1">
      </div>

     <div class="input-group mb-4">
            <span class="input-group-text" id="basic-addon1"><b>Pan Card No</b></span>
            <input type="text" name="Pan_Card_No"  class="form-control" placeholder=" A12F25" aria-label="Username" aria-describedby="basic-addon1">
      </div>  
<div>
  
</div>

    </div>
    
  </div> 
  <?php echo form_close();?>
    

  



  <div class="container" align="center">
    <h2>Employee Details</h2><br>
  </div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Sr.No</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Mobile No</th>
      <th scope="col">Aadhar No</th>
      <th scope="col">Age</th>
      <th scope="col">Gender</th>
      <th scope="col">Date Of Birth</th>
      <th scope="col">Date Of Joining</th>
      <th scope="col">Pan No </th>
      
    </tr>
  </thead>
  <tbody>
   <?php foreach ($fetch->result() as $value) {
        
  ?>
    <tr>
      <th scope="row"> <?php echo $value->Id; ?></th>
      <td><?php echo $value->Name; ?></td>
      <td><?php echo $value->Address; ?></td>
      <td><?php echo $value->Mobile_No; ?></td>
      <td><?php echo $value->Aadhar_No ?></td>
      <td><?php echo $value->Age; ?></td>
      <td><?php echo $value->Gender; ?></td>
      <td><?php echo $value->D_O_B; ?></td>
      <td><?php echo $value->joining_date; ?></td>
      <td><?php echo $value->Pan_No; ?></td>
    


    </tr>
   <?php } ?>

  </tbody>
</table>


  </div>
</div>







  
</div>


  </div>
  </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <div>
        

</div>

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