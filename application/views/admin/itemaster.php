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
    <a href="#">Outword</a>
    <a href="#">Expeses</a>
    <a href="#">bills</a>
    <a href="#">Atte ndance</a>
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
     <?php echo form_open('Main/adminitem');?>

  
    <div class="container">
<div class="card" style="width: 50rem;">
  <div class="card-header" align="center">
    <h2> Item Master </h2>
  </div>
  <div class="card-body">



   <div class="row">
    <div class="col-8">
      <div class="input-group mb-3">
        
            <span class="input-group-text" id="basic-addon1"><b>Item Number</b></span>
            <input type="int" name="item" class="form-control" placeholder=" Enter The Number" aria-label="Username" aria-describedby="basic-addon1">
      </div>

      <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><b>Item Name</b></span>
            <input type="varchar" name="itemname" class="form-control" placeholder=" Enter The Item Name" aria-label="Username" aria-describedby="basic-addon1">
      </div>

      <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><b>Item Type</b></span>
            <input type="varchar" name="itemt" class="form-control" placeholder="Enter The Item Type" aria-label="Username" aria-describedby="basic-addon1">
      </div>

       <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><b>Unit</b></span>
            
            <select id="unit type" name="typeunit" required>
            <option value="" name="typeunit">Select a Unit</option>
            <option value="number" name="typeunit">Number</option>
            <option value="KG"name="typeunit">KG</option>
            <option value=RFT name="typeunit">RFT</option>
            <option value="SqFT"name="typeunit">SqFT</option>
        </select>
      </div>
      <div class="tab">
       <div class="input-group mb-3">
            
        </div>

        <table id="emptbl">
    
        <tr>
            <th>Part Name</th>
            <th>Unit</th>
             
        </tr> 
        <tr> 
            <td id="col0"><input type="text" name="name" value="" /></td> 
            <td id="col1"><input type="text" name="unit" value="" /></td> 
            
        </tr>  
    </table> 
     
       
       
    

       </div>
 



    </div>




    <div class="col-4">

       <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"> <b>Date</b></span>
            <input type="date" name="date" class="form-control" placeholder="Date" aria-label="Username" aria-describedby="basic-addon1">
      </div>
      <div class="input-group mb-3">
          
      </div>
       <div class="input-group mb-3">
          
      </div>
        <div class="input-group mb-3">
          
      </div>
  <div class="input-group mb-3">
          
      </div>  <div class="input-group mb-3">
          
      </div>
  <div class="input-group mb-3">
          
      </div>  <div class="input-group mb-3">
          
      </div>

  



    

      <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><b>Price</b></span>
            <input type="int" name="price" class="form-control" placeholder="Enter The Price" aria-label="Username" aria-describedby="basic-addon1">
      </div>

        
    






    </div>
  </div> 


  </div>
  <div class="d-grid gap-2 d-md-block">
   <button class="btn btn-primary" onclick="addRows()">Addrow</button>
      <button class="btn btn-danger" onclick="deleteRows()">deleterow</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button class="btn btn-success">Save</button></td>
 
</div>

<!-- <div class="demo"> -->

  <table>
  <tr>
    <th>id</th>
    <th>Itemnumber</th>
    <th>Date</th>
    <th>Itemname</th>
    <th>Itemtype</th>
    <th>Unit</th>
    <th>Price</th>
    <th>name</th>
    <th>Unit</th>
    <th>opertion</th>
  </tr>
  <tr>
     <?php $i=1; foreach ($fetch->result() as  $value) 

    { ?>
      
        
    <td><?php echo $value->id;?></td>
    <td><?php echo $i++;?></td>
    <td><?php echo $value->Date;?></td>
    <td><?php echo $value->itemname;?></td>
    <td><?php echo $value->itemtype;?></td>
    <td><?php echo $value->unit;?></td>
    <td><?php echo $value->price;?></td>
    <td><?php echo $value->name;?></td>
    <td><?php echo $value->unt;?></td>
    <td><button  class="btn btn-danger"><a href="<?php echo base_url('Main/itemdelete/'.$value->id);?>" class="text-light">delete</a></button></td>
    
    
    
    
    
    
    

    

  </tr>
 <?php }  ?>
</table>
<!-- </div> -->

      
 <?php echo form_close();?>
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
<script type="text/javascript">
function addRows()
{ 
  var table = document.getElementById('emptbl');
  var rowCount = table.rows.length;
  var cellCount = table.rows[0].cells.length; 
  var row = table.insertRow(rowCount);
  for(var i =0; i <= cellCount; i++)
  {
    var cell = 'cell'+i;
    cell = row.insertCell(i);
    var copycel = document.getElementById('col'+i).innerHTML;
    cell.innerHTML=copycel;
    if(i == 3)
      { 
      var radioinput = document.getElementById('col3').getElementsByTagName('input'); 
      for(var j = 0; j <= radioinput.length; j++)
       { 
        if(radioinput[j].type == 'radio')
         { 
          var rownum = rowCount;
          radioinput[j].name = 'gender['+rownum+']';
        }
      }
    }
  }
}
function deleteRows(){
  var table = document.getElementById('emptbl');
  var rowCount = table.rows.length;
  if(rowCount > '2'){
    var row = table.deleteRow(rowCount-1);
    rowCount--;
  }
  else{
    alert('There should be atleast one row');
  }
}
</script>

<script
  src="https://code.jquery.com/jquery-3.6.4.js"
  integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
  crossorigin="anonymous"></script>
</body>
</html>