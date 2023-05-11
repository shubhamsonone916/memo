<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
{
	include("securityconfig.php");
   // header("location:securityindex.php");


   }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Member</title>
    <link rel="stylesheet" href="dashstyle.css">
    <style>
    	.content .Table_btn1{
    		font-size: 20px;
    		font: 50px;
    		padding: 20px;
    		font-weight: 100%;
    		
    	}
      .content h1{
        font-size: 70px;
        font-weight: 50px;
        color: darkred;
        padding: 50px;
        text-align: center;

      }

    </style>

    <script src="https://kit.fontawesome.com/2edfbc5391.js"crossorigin="anonymous"></script>
</head>
<body>
<input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>Society<span>HUB</span></h3>
      </div>
      <div class="right_area">
        <a href="logout.php" class="logout_btn">Logout</a>
      </div>
    </header>
    <!--header area end-->
    <!--sidebar start-->
    <div class="sidebar">
      <center>
        <img src="img/download.png" class="profile_image" alt="">
        <h4>Security</h4>
      </center>
      <a href="Visitors.php"class="active"><i class="fas fa-users"></i><span>Visitors</span></a>
      <a href=""><i class="fas fa-file"></i><span>Visitors Reports</span></a>
      <a href="noticebrd.php" ><i class="fas fa-bell"></i><span>View Notice</span></a>
      <a href="photo.php"><i class="fas fa-camera-retro"></i><span>Photo Gallery</span></a>
      
    </div>
    <!--sidebar end--> 
    <div class="content"><br><br><br><br><br><br>
    <a href="Visitors.php" class="Table_btn1">Visitors Details</a><br><br>
        <h1>Welcome to Security</h1>
    
    </body>
</html>

