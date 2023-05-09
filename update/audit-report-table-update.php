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


    $q =" UPDATE `audit_report_table` SET `FY`='$t111',`CID`='$t112',`ACBASE`='$t113',`FAI`='$t114',`OPN`='$t115',`QLF`='$t116',`EOM`='$t117',`AOM`='$t118' WHERE `FY`=$t111 ";

    $query = mysqli_query($con, $q);
    if(! $q ) {
        die('Could not update data: ' . mysql_error());
     }
     echo '<script>alert("Updated Sucessfully!!")</script>';
  
   
}
?>

<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/c/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Sidebar Menu  | CodingLab </title>
    <link rel="stylesheet" href="../style.css">
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
 
    <div class="sidebar">
    <a class="formate border active" href="home.php">Home</a>
         <a class="formate border" href="clients-table-update.php">Clients Table</a>
         <a class="formate border" href="active-clients-table-update.php">Active Clients Table</a>
         <a class="formate border"  href="head-table-update.php">Heads Table (Level 1 grouping)</a>
         <a class="formate border" href="ledgers-table-update.php">Ledgers Table (Level 2 grouping)</a>
         <a class="formate border" href="items-table-update.php">Items Table (Entry Items)</a>
         <a class="formate border" href="firms-table-update.php">Firms Table (Audit Firm Master)</a>
         <a class="formate border" href="signing-partner-table-update.php">Signing Partner (Auditor) Table</a>
         <a class="formate border" href="heads-sequence-table-update.php">Heads Sequence Table</a>
         <a class="formate border" href="transactions-table-update.php">Transactions Table (Entries)</a>
         <a class="formate border" href="schedule-note-numbers-table-update.php">Schedule Note Numbers Table</a>
         <a class="formate border" href="audit-report-table-update.php">Audit Report Table</a>
         <a class="formate border" href="report-information-table-update.php">Report Information Table</a>
        </div>
  
  <!-- Page content -->
   <div class="content ">
  <div class="fixed">

<nav style="background-color:rgb(0, 255, 255) ;"  class="navbar navbar-expand-lg bg-body-tertiary ">
  <div class="container-fluid">
    <!-- <a class="navbar-brand"  href="#">#</a> -->
    <button  class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-dark " aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>
  
    <h3 class="h3 my-3 formate text-center">audit-report-table</h3>
    <form form action="" class="formate my-3" method="post">
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Financial Year  :  </label>
        <div class="col-sm-10 formate border">
          <input type="text" name="t111"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 mx-2">
        <label for="inputPassword3" class="col-sm-2 col-form-label formate border">Client identifier  :  </label>
        <div class="col-sm-10 formate border">
          <input type="text" name="t112"class="form-control my-3" id="inputPassword3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Accounting Method (Mercantile/Cash Basis)  :  </label>
        <div class="col-sm-10 formate border">
          <input type="text" name="t113"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Fixed Assets Inventory (Not Prepared/Prepared)  :  </label>
        <div class="col-sm-10 formate border">
          <input type="text" name="t114"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Qualified Opinion (No/Yes)  :  </label>
        <div class="col-sm-10 formate border">
          <input type="text" name="t115"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Qualification paragraph  :  </label>
        <div class="col-sm-10 formate border">
          <input type="text" name="t116"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Emphasis of Matter paragraph :  </label>
        <div class="col-sm-10 formate border">
          <input type="text" name="t117"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Other Matters paragraph  :  </label>
        <div class="col-sm-10 formate border">
          <input type="text" name="t118"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      
     
      
      <div class="text-center">
     <button type="submit" name="done" class="btn btn-primary button text-center">submit</button>
     <button class="btn-danger btn"> <a href="displayart.php?id=<?php?>" class="text-white"> Display </a> </button> 
     </div>
    </form>
  </section>
</div>

  <script src="script.js"></script>

</body>
</html>
