<?php

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'exel');

if (isset($_POST['done'])) {

    
    $t31 = $_POST['t31'];
    $t32 = $_POST['t32'];
    $t33 = $_POST['t33'];
    $t34 = $_POST['t34'];
   
    

    $q = " INSERT INTO `heads_table`(`HID`, `HNAME`, `HTYPE`, `HSIDE`) VALUES('$t31','$t32','$t33','$t34')";

    if ($con->query($q) === TRUE) {
      echo '<script>alert("Submitted Successfully!!");
      window.location.assign("insert_dashbord.php?page=headstable");
      </script>';
      
    } else {
      echo '<script>alert("Error!!");
      window.location.assign("insert_dashbord.php?page=headstable");
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
 
  
  <!-- Page content -->
   <div class="content ">

  
    <h3 class="h3 my-3 formate text-center">head-table</h3>
     <form form action="" class="formate my-3 " method="post" autocomplete="off">
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Unique Identifier for each heading  :  </label>
        <div class="col-sm-10 formate border">
          <input required type="text" name="t31"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 mx-2">
        <label for="inputPassword3" class="col-sm-2 col-form-label formate border">Text of reported heading   :  </label>
        <div class="col-sm-10 formate border">
          <input required type="text" name="t32"class="form-control my-3" id="inputPassword3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Location (Balance carried forward?)  :  </label>
        <div class="col-sm-10 formate border">
          <input required type="text" name="t33"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Side of each heading (Debit/Credit)  :  </label>
        <div class="col-sm-10 formate border">
          <input required type="text" name="t34"class="form-control my-3" id="inputEmail3">
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
