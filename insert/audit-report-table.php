<?php
require('db.php');
// include("auth_session.php");
?>

<?php

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'exel');

if (isset($_POST['done'])) {

    
    $t111 = $_POST['t111'];
    $t112 = $_POST['t112'];
    $t113 = $_POST['t113'];
    $t114 = $_POST['t114'];
    $t115 = $_POST['t115'];
    $t116 = $_POST['t116'];
    $t117 = $_POST['t117'];
    $t118 = $_POST['t118'];


    $q = "INSERT INTO `audit_report_table`(`FY`, `CID`, `ACBASE`, `FAI`, `OPN`, `QLF`, `EOM`, `AOM`) VALUES ('$t111','$t112','$t113','$t114','$t115','$t116','$t117','$t118')";

    if ($con->query($q) === TRUE) {
      echo '<script>alert("Submitted Successfully!!");
      window.location.assign("insert_dashbord.php?page=art");
      </script>';
      
    } else {
      echo '<script>alert("Error!!");
      window.location.assign("insert_dashbord.php?page=art");
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

  
    <h3 class="h3 my-3 formate text-center">audit-report-table</h3>
     <form form action="" class="formate my-3 " method="post" autocomplete="off">
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Financial Year  :  </label>
        <div class="col-sm-10 formate border">
          <input required type="text" name="t111"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 mx-2">
        <label for="inputPassword3" class="col-sm-2 col-form-label formate border">Client identifier  :  </label>
        <div class="col-sm-10 formate border">
          <input required type="text" name="t112"class="form-control my-3" id="inputPassword3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Accounting Method (Mercantile/Cash Basis)  :  </label>
        <div class="col-sm-10 formate border">
          <input required type="text" name="t113"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Fixed Assets Inventory (Not Prepared/Prepared)  :  </label>
        <div class="col-sm-10 formate border">
          <input required type="text" name="t114"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Qualified Opinion (No/Yes)  :  </label>
        <div class="col-sm-10 formate border">
          <input required type="text" name="t115"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Qualification paragraph  :  </label>
        <div class="col-sm-10 formate border">
          <input required type="text" name="t116"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Emphasis of Matter paragraph :  </label>
        <div class="col-sm-10 formate border">
          <input required type="text" name="t117"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Other Matters paragraph  :  </label>
        <div class="col-sm-10 formate border">
          <input required type="text" name="t118"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      
     
      
      <div class="text-center">
     <button type="submit" name="done" class="btn btn-primary button text-center">Submit</button>
     <button type="submit" name="done" class="btn btn-primary button text-center">Clear</button>
   
     </div>
    </form>
  </section>
</div>

  <script src="script.js"></script>

</body>
</html>
