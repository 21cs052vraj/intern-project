<?php

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'exel');

if (isset($_POST['done'])) {

    
    $t81 = $_POST['t81'];
    $t82 = $_POST['t82'];
    $t83 = $_POST['t83'];
    $t84 = $_POST['t84'];
    $t85 = $_POST['t85'];
   

    $q = " INSERT INTO `heads_sequence_table`(`CTYPE`, `RTYPE`, `SIDE`, `SRN`, `HID`) VALUES ('$t81','$t82','$t83','$t84','$t85')";

    $query = mysqli_query($con, $q);
   
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
  <!-- <div class="sidebar">
  
      
       <a href="#">
         <i class='bx ' ></i>
         <span class="links_name"></span>
       </a>
       <span class="tooltip">Ledgers Table (Level 2 grouping)</span>
     </li>
     <li>
       <a href="#">
         <i class='bx ' ></i>
         <span class="links_name">Items Table (Entry Items)</span>
       </a>
       <span class="tooltip">Items Table (Entry Items)</span>
     </li>
     <li>
       <a href="#">
         <i class='bx ' ></i>
         <span class="links_name">Firms Table (Audit Firm Master)</span>
       </a>
       <span class="tooltip">Firms Table (Audit Firm Master)</span>
     </li>
     <li>
       <a href="#">
         <i class='bx ' ></i>
         <span class="links_name">Signing Partner (Auditor) Table</span>
       </a>
       <span class="tooltip">Signing Partner (Auditor) Table</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Heads Sequence Table</span>
       </a>
       <span class="tooltip">Heads Sequence Table</span>
     </li>
     <li>
      <a href="#">
        <i class='bx ' ></i>
        <span class="links_name">Transactions Table (Entries)</span>
      </a>
      <span class="tooltip">Transactions Table (Entries)</span>
    </li>
    <li>
      <a href="#">
        <i class='bx ' ></i>
        <span class="links_name">Schedule Note Numbers Table</span>
      </a>
      <span class="tooltip">Schedule Note Numbers Table</span>
    </li>
    <li>
      <a href="#">
        <i class='bx ' ></i>
        <span class="links_name">Audit Report Table</span>
      </a>
      <span class="tooltip">Audit Report Table</span>
    </li>
    <li>
      <a href="#">
        <i class='bx ' ></i>
        <span class="links_name">Report Information Table</span>
      </a>
      <span class="tooltip">Report Information Table</span>
    </li>
    
     
    </ul>
  </div>
  <section class="home-section"> -->
    <!-- The sidebar -->
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
  
    <h3 class="h3 my-3 formate text-center">heads-sequence</h3>
    <form form action="" class="formate my-3" method="post">
        <div class="row mb-3 mx-2">
        <label for="inputPassword3" class="col-sm-2 col-form-label formate border">unique identifier for each clientClient Type  :  </label>
        <div class="col-sm-10 formate border">
          <input type="text" name="t81"class="form-control my-3" id="inputPassword3">
        </div>
      </div>
      <div class="row mb-3 mx-2">
        <label for="inputPassword3" class="col-sm-2 col-form-label formate border">Report Type  :  </label>
        <div class="col-sm-10 formate border">
          <input type="text" name="t82"class="form-control my-3" id="inputPassword3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Side (Debit/Credit)  :  </label>
        <div class="col-sm-10 formate border">
          <input type="text" name="t83"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Sequence Sr. No.  :  </label>
        <div class="col-sm-10 formate border">
          <input type="text" name="t84"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Unique Identifier for each heading  :  </label>
        <div class="col-sm-10 formate border">
          <input type="text" name="t85"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      
    
     
      
      <div class="text-center">
     <button type="submit" name="done" class="btn btn-primary button text-center">submit</button>
     <button class="btn-danger btn"> <a href="displayahst.php?id=<?php?>" class="text-white"> Display </a> </button>  
    </div>
    </form>
  </section>
</div>

  <script src="script.js"></script>

</body>
</html>
