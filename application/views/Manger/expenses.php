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
    .man
{
    width: 100%;
    height: 500px;
    margin-left: 50spx;
    background-color:white;
}
.shu
{
    width: 90%;
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
    width: 90%;
  }
  
  td, th {
    border: 1px solid black;
    text-align: left;
    padding: 4px;
    
  }
  
  tr:nth-child(even) {
    background-color: #dddddd;
  }
  
  form {
  max-width: 500px;
  margin: 0 auto;
  padding: 20px;
  background-color: #f2f2f2;
  border-radius: 5px;
  box-shadow: 0px 0px 5px #ccc;
}

h2 {
  text-align: center;
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"], input[type="date"], select {
  padding: 10px;
  margin-bottom: 10px;
  width: 100%;
  border-radius: 5px;
  border: none;
  box-shadow: 0px 0px 5px #ccc;
}

button[type="submit"] {
  background-color: #4CAF50;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

button[type="submit"]:hover {
  background-color: #3e8e41;
}

form {
  max-width: 500px;
  margin: 0 auto;
  padding: 20px;
  background-color: #f2f2f2;
  border-radius: 5px;
  box-shadow: 0px 0px 5px #ccc;
}

h2 {
  text-align: center;
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"], input[type="number"], input[type="date"], select {
  padding: 10px;
  margin-bottom: 10px;
  width: 100%;
  border-radius: 5px;
  border: none;
  box-shadow: 0px 0px 5px #ccc;
}

button[type="submit"] {
  background-color: #4CAF50;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

button[type="submit"]:hover
 {  

  background-color: #3e8e41;
}


</style>

 

 
 <body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Manger</span>
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
      <a href="<?= base_url('Main/Admin_logout') ?>" class="lo" >Logout</a>

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
<button class="dropdown-btn">Supplier
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Directors</a>
    <a href="#">Reports</a>
    <a href="#">purchese</a>
    <a href="#"></a>
</div>

</div>
</aside>
<div class="demo">
 
      <h2>Expenses </h2>
    <label for="category">Item</label><br>
    <select id="category" name="category" required>
      <option value="">Select Item</option>
      <option value="food">Electricity </option>
      <option value="entertainment">tea</option>
      <option value="transportation">patis</option>
      <option value="housing">Water</option>
      <option value="miscellaneous">Gas</option>
    </select><br><br>

    <label for="category">Time</label><br>
    <select id="category" name="category" required>
      <option value="">Select Time</option>
      <option value="food">Morning</option>
      <option value="entertainment">Afternoon</option>
      <option value="transportation">Evening</option>
      <option value="housing">Night</option>
      
    </select><br><br>
    <label for="amount">Amount</label><br>
    <input type="text" name="amount"> <br> <br>
    <label for="date">Date</label><br>
    <div class="container" align="center">
    <input type="date" id="date" name="date" required><br><br>
    <button type="submit">Submit</button>
  </div>
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