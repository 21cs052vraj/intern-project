<?php

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'exel');

if (isset($_POST['done'])) {

    
    $t11 = $_POST['t11'];
    $t12 = $_POST['t12'];
    $t13 = $_POST['t13'];
    $t14 = $_POST['t14'];
    $t15 = $_POST['t15'];
    $t16 = $_POST['t16'];
    $t17 = $_POST['t17'];
    $t18 = $_POST['t18'];
    $t19 = $_POST['t19'];
    $t110 = $_POST['t110'];
    $t111 = $_POST['t111'];
    $t112 = $_POST['t112'];
    $t113 = $_POST['t113'];
    $t114 = $_POST['t114'];
    $t115 = $_POST['t115'];
    $t116 = $_POST['t116'];
    $t117 = $_POST['t117'];
    $t118 = $_POST['t118'];
    $t119 = $_POST['t119'];
    $t120 = $_POST['t120'];
    $t121 = $_POST['t121'];
    $t122 = $_POST['t122'];
    $t123 = $_POST['t123'];

    $q = " UPDATE `clients_table` SET `CID`='$t11',`FILENO`='$t12',`CNAME`='$t13',`CTYPE`='$t14',`PID`='$t15',`TRGNO`='$t16',`TRGDT`='$t17',`TPAN`='$t18',`OEDU`='$t19',`OMED`='$t110',`CADDRESS`='$t111',`CITY`='$t112',`DISTRICT`='$t113',`PINCODE`='$t114',`STATE`='$t115',`BANK`='$t116',`BRANCH`='$t117',`BADDRESS`='$t118,`FCRGNO`='$t119',`FCRGDT`='$t120',`FCBANK`='$t121',`FCACTYPE`='$t122',`FCACNO`='$t123' WHERE `CID`= $t11";

   
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
    <title> Responsive Sidebar Menu | CodingLab </title>
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
 
    <div class="sidebar">
      <a class="formate border active" href="index.php">Home</a>
         <a class="formate border" href="clients-table.php">Clients Table</a>
         <a class="formate border" href="active-clients-table.php">Active Clients Table</a>
         <a class="formate border"  href="head-table.php">Heads Table (Level 1 grouping)</a>
         <a class="formate border" href="ledgers-table.php">Ledgers Table (Level 2 grouping)</a>
         <a class="formate border" href="items-table.php">Items Table (Entry Items)</a>
         <a class="formate border" href="firms-table.php">Firms Table (Audit Firm Master)</a>
         <a class="formate border" href="signing-partner-table.php">Signing Partner (Auditor) Table</a>
         <a class="formate border" href="heads-sequence.php">Heads Sequence Table</a>
         <a class="formate border" href="transactions-table.php">Transactions Table (Entries)</a>
         <a class="formate border" href="schedule-note-numbers-table.php">Schedule Note Numbers Table</a>
         <a class="formate border" href="audit-report-table.php">Audit Report Table</a>
         <a class="formate border" href="report-information-table.php">Report Information Table</a>

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
   
    
    <h3 class="h3 my-3 formate text-center">Clients Table</h3>
    <form form action="" class="formate my-3" method="post">
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">unique identifier for each client  :  </label>
        <div class="col-sm-10 formate  ">
          <input type="text" name="t11" class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 mx-2">
        <label for="inputPassword3" class="col-sm-2 col-form-label formate border">Physical File No.of each client  :  </label>
        <div class="col-sm-10 formate border">
          <input type="text" name="t12"class="form-control my-3" id="inputPassword3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Client Name  :  </label>
        <div class="col-sm-10 formate border">
          <input type="text" name="t13"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Client type  :  </label>
        <div class="col-sm-10 formate border">
          <input type="text" name="t14"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">ID of immediate Parent  :  </label>
        <div class="col-sm-10 formate border">
          <input type="text" name="t15"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Registration no. of Trust  :  </label>
        <div class="col-sm-10 formate border">
          <input type="text" name="t16"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Registration date of Trust  :  </label>
        <div class="col-sm-10 formate border">
          <input type="text" name="t17"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">PAN of Trust  :  </label>
        <div class="col-sm-10 formate border">
          <input type="text" name="t18"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Check digit for Educational Object  :  </label>
        <div class="col-sm-10 formate border">
          <input ttype="text" name="t19"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Check digit for Medical Object  :  </label>
        <div class="col-sm-10 formate border">
          <input type="text" name="t110"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Address of client  :  </label>
        <div class="col-sm-10 formate border">
          <input type="text" name="t111"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">City of client  :  </label>
        <div class="col-sm-10 formate border">
          <input type="text" name="t112"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">District of client  :  </label>
        <div class="col-sm-10 formate border">
          <input type="text" name="t113"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">PIN of client  :  </label>
        <div class="col-sm-10 formate border">
          <input type="text" name="t114"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">State of client  :  </label>
        <div class="col-sm-10 formate border">
          <input type="text" name="t115"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Primary Bank of the institution  :  </label>
        <div class="col-sm-10 formate border">
          <input type="text" name="t116"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Primary Bank Branch  :  </label>
        <div class="col-sm-10 formate border">
          <input type="text" name="t117"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Primary Bank Branch Address  :  </label>
        <div class="col-sm-10 formate border">
          <input type="text" name="t118"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">FCRA Registration Number  :  </label>
        <div class="col-sm-10 formate border">
          <input type="text" name="t119"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">FCRA Registration Date  :  </label>
        <div class="col-sm-10 formate border">
          <input type="text" name="t120"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">FCRA Bank  :  </label>
        <div class="col-sm-10 formate border">
          <input type="text" name="t121"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">FCRA Bank Account Type  :  </label>
        <div class="col-sm-10 formate border">
          <input type="text" name="t122"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">FCRA Bank Account Number  :  </label>
        <div class="col-sm-10 formate border">
          <input type="text" name="t123"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
    


      <div class="text-center">
     <button type="submit" name="done" class="btn btn-primary button text-center">submit</button>
     <button class="btn-danger btn"> <a href="displayct.php?id=<?php?>" class="text-white"> Display </a> </button> 
     </div>
    </form>
            </section>
        </div>

        <script src="script.js"></script>

</body>

</html>