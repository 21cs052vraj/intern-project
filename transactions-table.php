<?php

$con = mysqli_connect('localhost', 'root','','exel');

mysqli_select_db($con, 'exel');

if (isset($_POST['done'])) {

    
    $t91 = $_POST['t91'];
    $t92 = $_POST['t92'];
    $t93 = $_POST['t93'];
    $t94 = $_POST['t94'];
    $t95 = $_POST['t95'];
    $t96 = $_POST['t96'];
    $t97 = $_POST['t97'];
    $t98 = $_POST['t98'];
   

    $q = " INSERT INTO `transactions_table`(`FY`, `CID`, `TTYPE`, `IID`, `LID`, `TID`, `TSIDE`, `TAMT`) VALUES ('$t91','$t92','$t93','$t94','$t95','$t96','$t97','$t98')";

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

  
  <!-- Page content -->
   <div class="content ">

  
    <h3 class="h3 my-3 formate text-center">Transactions Table (Entries)</h3>
     <form form action="" class="formate my-3 " method="post" autocomplete="off">
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Financial Year  :  </label>
        <div class="col-sm-10 formate border">
          <input required type="text" name="t91"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 mx-2">
        <label for="inputPassword3" class="col-sm-2 col-form-label formate border">Unique Identifier for each Client  :  </label>
        <div class="col-sm-10 formate border">
          <input required type="text" name="t92"class="form-control my-3" id="inputPassword3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Transaction type  :  </label>
        <div class="col-sm-10 formate border">
          <input required type="text" name="t93"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Entry item identifier :  </label>
        <div class="col-sm-10 formate border">
          <input required type="text" name="t94"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Entry ledger group (common items)  :  </label>
        <div class="col-sm-10 formate border">
          <input required type="text" name="t95"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Intra-group transfer client code  :  </label>
        <div class="col-sm-10 formate border">
          <input required type="text" name="t96"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">C (Credit) or D (Debit)  :  </label>
        <div class="col-sm-10 formate border">
          <input required type="text" name="t97"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Entry amount  :  </label>
        <div class="col-sm-10 formate border">
          <input required type="text" name="t98"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      
     
      
      <div class="text-center">
     <button type="submit" name="done" class="btn btn-primary button text-center">submit</button>
     </div>
    </form>
  </section>
</div>

  <script src="script.js"></script>

</body>
</html>
