<?php
require('db.php');
// include("auth_session.php");
?>
<?php

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'exel');

if (isset($_POST['done'])) {

    
    $t121 = $_POST['t121'];
    $t122 = $_POST['t122'];
    $t123 = $_POST['t123'];
    $t124 = $_POST['t124'];
    $t125 = $_POST['t125'];
    $t126 = $_POST['t126'];
    $t127 = $_POST['t127'];
    $t128 = $_POST['t128'];
   

    $q = " INSERT INTO `report_information_table`(`FY`, `CID`, `RPDT`, `RPLACE`, `TRUSTEE`, `UDIN`, `MID`, `FID`) VALUES ('$t121','$t122','$t123','$t124','$t125','$t126','$t127','$t128')";

    if ($con->query($q) === TRUE) {
      echo '<script>alert("Submitted Successfully!!");
      window.location.assign("insert_dashbord.php?page=rit");
      </script>';
      
    } else {
      echo '<script>alert("Error!!");
      window.location.assign("insert_dashbord.php?page=rit");
      </script>" . $q . "<br>' . $con->error;
    }
   
}
?>
<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/c/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Sidebar Menu  | CodingLab </title>
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title></title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   </head>

   <style>
   .formate{
    border-style: groove;
    
    
    border-collapse: collapse;
  }
  </style>
<body>
 
    
   
  
  <!-- Page content -->
   <div class="content ">

  
    <h3 class="h3 my-3 formate text-center">Report Information Table</h3>
     <form form action="" class="formate my-3 " method="post" autocomplete="off">
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Financial Year  :  </label>
        <div class="col-sm-10 formate border">
          <input required type="text" name="t121"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 mx-2">
        <label for="inputPassword3" class="col-sm-2 col-form-label formate border">Client identifier  :  </label>
        <div class="col-sm-10 formate border">
          <input required type="text" name="t122"class="form-control my-3" id="inputPassword3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Report date (DD-MM-YYYY)  :  </label>
        <div class="col-sm-10 formate border">
          <input required type="text" name="t123"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Report signing place  :  </label>
        <div class="col-sm-10 formate border">
          <input ttype="text" name="t124"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Signing trustee  :  </label>
        <div class="col-sm-10 formate border">
          <input required type="text" name="t125"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Report UDIN  :  </label>
        <div class="col-sm-10 formate border">
          <input required type="text" name="t126"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Membership ID of signing partner :  </label>
        <div class="col-sm-10 formate border">
          <input required type="text" name="t127"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Unique Identifier for each branch  :  </label>
        <div class="col-sm-10 formate border">
          <input required type="text" name="t128"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      
     
      
      <div class="text-center">
     <button type="submit" name="done" class="btn btn-primary button text-center my--2">submit</button>
     </div>
    </form>
  </section>
</div>

  <script src="script.js"></script>

</body>
</html>
