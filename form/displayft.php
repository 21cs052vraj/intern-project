
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
  
    <h3 class="h3 my-3 formate text-center">Firms Table (Audit Firm Master)</h3>
  
    <div class="container">
        <div class="col-lg-12">
            <!-- <br><br>
            <h1 class="text-warning text-center"> Display Content</h1>
            <br> -->
            <table id="tabledata" class=" table table-striped table-hover table-bordered">

                <tr class="bg-dark text-white text-center">

                    <th>Unique Identifier for each branch   : </th>
                    <th>Name of auditor firm   : </th>
                    <th>Address line 1 of the branch  :</th>
                    <th>Address line 2 of the branch  :</th>
                    <th>City of the branch  :</th>
                    <th>State of the branch  :  </th>
                    <th>Registration date of Trust  :</th>
                    <th>PIN of the branch  : </th>
                    <th>FRN of auditor firm  :</th>
                    <th>Phone No. of the branch  : </th>
                    <th>Address of other branches (1)  :</th>
                    <th>Address of other branches (2)  : </th>

  
                </tr>

                

<?php

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'exel');
$q = "select * from firms_table";
$query = mysqli_query($con, $q);

                while ($res = mysqli_fetch_array($query)) {
                ?>
                    <tr class="text-center">
                        <td> <?php echo $res['FID'];  ?> </td>
                        <td> <?php echo $res['FNAME'];  ?> </td>
                        <td> <?php echo $res['ADD1'];  ?> </td>
                        <td> <?php echo $res['ADD2'];  ?> </td>
                        <td> <?php echo $res['CITY'];  ?> </td>
                        <td> <?php echo $res['STATE'];  ?> </td>
                        <td> <?php echo $res['PINCODE'];  ?> </td>
                        <td> <?php echo $res['FRN'];  ?> </td>
                        <td> <?php echo $res['PHONE'];  ?> </td>
                        <td> <?php echo $res['EMAIL'];  ?> </td>
                        <td> <?php echo $res['BRANCH1'];  ?> </td>
                        <td> <?php echo $res['BRANCH2'];  ?> </td>
                       
                        <!--<td> <button class="btn-primary btn"> <a href="update.php?id=<?php echo $res['id']; ?>" class="text-white"> Update </a> </button> </td>
                        <td> <button class="btn-success btn"> <a href="view.php?id=<?php echo $res['id']; ?>" class="text-white"> View </a> </button> </td> -->

                    </tr>

                <?php
                }
                ?>

            </table>

        </div>
    </div>
    
    <div class="text-center">
    
     <button class="btn-danger btn"> <a href="updateact.php?id=<?php?>" class="text-white"> Update </a> </button> 
     </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#tabledata').DataTable();
        })
    </script>


  </section>
</div>

  <script src="script.js"></script>

</body>
</html>
