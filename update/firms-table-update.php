
<?php

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'exel');

if (isset($_POST['done'])) {

    
    $t61 = $_POST['t61'];
    $t62 = $_POST['t62'];
    $t63 = $_POST['t63'];
    $t64 = $_POST['t64'];
    $t65 = $_POST['t65'];
    $t66 = $_POST['t66'];
    $t67 = $_POST['t67'];
    $t68 = $_POST['t68'];
    $t69 = $_POST['t69'];
    $t610 = $_POST['t610'];
    $t611 = $_POST['t611'];
    $t612 = $_POST['t612'];
  

    $q = "UPDATE `firms_table` SET `FID`='$t61',`FNAME`='$t62',`ADD1`='$t63',`ADD2`='$t64',`CITY`='$t65',`STATE`='$t66',`PINCODE`='$t67',`FRN`='$t68',`PHONE`='$t69',`EMAIL`='$t610',`BRANCH1`='$t611',`BRANCH2`='$t612' WHERE  `FID`=$t61 ";

    $query = mysqli_query($con, $q);
    if(! $q ) {
      die('<script>alert("Could not update data !!")</script>' . mysql_error());
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
  
    <h3 class="h3 my-3 formate text-center">firms-table</h3>
    <form form action="" class="formate my-3" method="post">
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Unique Identifier for each branch   :  </label>
        <div class="col-sm-10 formate border">
          <input type="text" name="t61"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 mx-2">
        <label for="inputPassword3" class="col-sm-2 col-form-label formate border">Name of auditor firm   :  </label>
        <div class="col-sm-10 formate border">
          <input type="text" name="t62"class="form-control my-3" id="inputPassword3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Address line 1 of the branch  :  </label>
        <div class="col-sm-10 formate border">
          <input type="text" name="t63"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Address line 2 of the branch  :  </label>
        <div class="col-sm-10 formate border">
          <input type="text" name="t64"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">City of the branch  :  </label>
        <div class="col-sm-10 formate border">
          <input type="text" name="t65"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">State of the branch  :  </label>
        <div class="col-sm-10 formate border">
          <input type="text" name="t66"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Registration date of Trust  :  </label>
        <div class="col-sm-10 formate border">
          <input type="text" name="t67"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">PIN of the branch  :  </label>
        <div class="col-sm-10 formate border">
          <input type="text" name="t68"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">FRN of auditor firm  :  </label>
        <div class="col-sm-10 formate border">
          <input type="text" name="t69"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Phone No. of the branch  :  </label>
        <div class="col-sm-10 formate border">
          <input type="text" name="t610"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Address of other branches (1)  :  </label>
        <div class="col-sm-10 formate border">
          <input type="text" name="t611"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Address of other branches (2)  :  </label>
        <div class="col-sm-10 formate border">
          <input type="text" name="t612"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      
    
     
      
      <div class="text-center">
     <button type="submit" name="done" ondblclick="myalert()" class="btn btn-primary button text-center">submit</button>
     <button class="btn-danger btn"> <a href="displayft.php?id=<?php?>" class="text-white"> Display </a> </button> 
     <!-- <button class="btn-danger btn"> <a href="updateact.php?id=<?php?>" class="text-white"> Update </a> </button>  -->
     </div> 
    </form>
  </section>
</div>

  <script src="script.js">
    function myalert(){
      alert("submitted!!");
    }
  </script>

</body>
</html>
