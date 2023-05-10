<?php
require('db.php');
// include("auth_session.php");
?>

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

    $q = " INSERT INTO `clients_table`(`CID`, `FILENO`, `CNAME`, `CTYPE`, `PID`, `TRGNO`, `TRGDT`, `TPAN`, `OEDU`, `OMED`, `CADDRESS`, `CITY`, `DISTRICT`, `PINCODE`, `STATE`, `BANK`, `BRANCH`, `BADDRESS`, `FCRGNO`, `FCRGDT`, `FCBANK`, `FCACTYPE`, `FCACNO`) VALUES ('$t11','$t12','$t13','$t14','$t15','$t16','$t17','$t18','$t19','$t110','$t111','$t112','$t113','$t114','$t115','$t116','$t117','$t118','$t119','$t120','$t121','$t122','$t123')";


    if ($con->query($q) === TRUE) {
      echo '<script>alert("Submitted Successfully!!");
      window.location.assign("insert_dashbord.php?page=clientstable");
      </script>';
      
    } else {
      echo '<script>alert("Error!!");
      window.location.assign("insert_dashbord.php?page=clientstable");
      </script>" . $q . "<br>' . $con->error;
    }
   
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
 

  
  <!-- Page content -->
  <div class="content ">

   
    
    <h3 class="h3 my-3 formate text-center">Clients Table</h3>
    <form form action="" class="formate my-3" method="post" autocomplete="off">
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">unique identifier for each client  :  </label>
        <div class="col-sm-10 formate  ">
          <input required type="text" name="t11" class="form-control my-3" id="inputEmail3" >
        </div>
      </div>
      <div class="row mb-3 mx-2">
        <label for="inputPassword3" class="col-sm-2 col-form-label formate border">Physical File No.of each client  :  </label>
        <div class="col-sm-10 formate border">
          <input required type="text" name="t12"class="form-control my-3" id="inputPassword3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Client Name  :  </label>
        <div class="col-sm-10 formate border">
          <input required type="text" name="t13"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Client type  :  </label>
        <div class="col-sm-10 formate border">
          <input required type="text" name="t14"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">ID of immediate Parent  :  </label>
        <div class="col-sm-10 formate border">
          <input required type="text" name="t15"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Registration no. of Trust  :  </label>
        <div class="col-sm-10 formate border">
          <input required type="text" name="t16"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Registration date of Trust  :  </label>
        <div class="col-sm-10 formate border">
          <input required type="text" name="t17"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">PAN of Trust  :  </label>
        <div class="col-sm-10 formate border">
          <input required type="text" name="t18"class="form-control my-3" id="inputEmail3">
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
          <input required type="text" name="t110"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Address of client  :  </label>
        <div class="col-sm-10 formate border">
          <input required type="text" name="t111"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">City of client  :  </label>
        <div class="col-sm-10 formate border">
          <input required type="text" name="t112"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">District of client  :  </label>
        <div class="col-sm-10 formate border">
          <input required type="text" name="t113"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">PIN of client  :  </label>
        <div class="col-sm-10 formate border">
          <input required type="text" name="t114"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">State of client  :  </label>
        <div class="col-sm-10 formate border">
          <input required type="text" name="t115"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Primary Bank of the institution  :  </label>
        <div class="col-sm-10 formate border">
          <input required type="text" name="t116"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Primary Bank Branch  :  </label>
        <div class="col-sm-10 formate border">
          <input required type="text" name="t117"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Primary Bank Branch Address  :  </label>
        <div class="col-sm-10 formate border">
          <input required type="text" name="t118"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">FCRA Registration Number  :  </label>
        <div class="col-sm-10 formate border">
          <input required type="text" name="t119"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">FCRA Registration Date  :  </label>
        <div class="col-sm-10 formate border">
          <input required type="text" name="t120"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">FCRA Bank  :  </label>
        <div class="col-sm-10 formate border">
          <input required type="text" name="t121"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">FCRA Bank Account Type  :  </label>
        <div class="col-sm-10 formate border">
          <input required type="text" name="t122"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">FCRA Bank Account Number  :  </label>
        <div class="col-sm-10 formate border">
          <input required type="text" name="t123"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
    


      <div class="text-center">
     <button type="submit" name="done" class="btn btn-primary button text-center">Submit</button>
     <button type="reset" name="done" class="btn btn-primary button text-center">Clear</button>
 
     </div>
    </form>
            </section>
        </div>

        <script src="script.js"></script>

</body>

</html>