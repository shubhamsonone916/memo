<?php include(visitorsconect.php); ?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="visitors_style.css" >
  <title>Visitors Details</title>
</head>

<body>
  <form action="#" method="POST">
    <div class="content">
          <div class="title">Visitors Details</div>

          <div class="form">
       
          <div class="input_field">
          <lable>Date</lable>
          <input type="date" class="input" name="date">
          </div>

          <div class="input_field">
          <lable>Full Name</lable>
          <input type="text" class="input" name="fname">
          </div>

          <div class="input_field">
          <lable>Entry Members</lable>
          <input type="text" class="input" name="emembers">
          </div>

          <div class="input_field">
          <lable>Mobile No</lable>
          <input type="text" class="input" name="mo_no">
           </div>

          <div class="input_field">
           <lable>Aadhaar No</lable>
            <input type="text" class="input" name="aadhar">
          </div>

      Gender:
  <input type="radio" name="male" class="gender"> <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
   <input type="radio" name="female" class="gender"><?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="other" class="gender"><?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">*</span><br>
 

          <div class="input_field">
          <lable>Address</lable>
          <textarea class="textarea" name="address"></textarea>
          </div>

          <div class="input_field">
          <lable>Reason For Meet</lable>
          <textarea class="textarea" name="reason"></textarea>
          </div>

          <div class="input_field terms">
          <lable class="check">
            <input type="checkbox" name="check">
          <span class="checkmark"></span>
          </lable>
          <p>Agree to All terms and conditions</p>
          </div>  

          <div class="input_field">
          <input type="submit" value="Register" class="btn" name="submit">
          </div>  
  </div>
</div>

</div>
</form>
</body>

</html>

<?php
if ($_POST['submit']) {

$date = $_POST['date'];
$fname = $_POST['fname'];
$emembers = $_POST['emembers'];
$mobileno = $_POST['mo_no'];
$aadhaarno = $_POST['aadhar'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$reason = $_POST['reason'];


$query="INSERT INTO FROM visitors values('$date','$fname','$emembers','$mobileno','$aadhaarno','$gender','$address','$reason')";
$data = mysqli_query($connection,$query);

if ($data) 
{
  echo "data Successfully submited";
}
else{
  echo "data can not submited";
}
}
?>