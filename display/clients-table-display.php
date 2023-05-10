<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/c/CodingLabYT-->
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title> Responsive Sidebar Menu | CodingLab </title>
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
  .formate {
    border-style: groove;


    border-collapse: collapse;
  }
</style>

<body>

  <!-- The sidebar -->
 

  <!-- Page content -->
  <div class="content ">
   

    <h3 class="h3 my-3 formate text-center">Clients Table</h3>

    <div class="container table-responsive">
      <div class="col-lg-12 ">
        <!-- <br><br>
            <h1 class="text-warning text-center"> Display Content</h1>
            <br> -->
        <table id="tabledata" class=" table  table-hover table-bordered ">

          <tr class="bg-dark text-white text-center">

            <th style="color: white;">unique identifier for each client : </th>
            <th style="color: white;">Physical File No.of each client : </th>
            <th style="color: white;">Client Name :</th>
            <th style="color: white;">Client type :</th>
            <th style="color: white;">ID of immediate Parent :</th>
            <th style="color: white;">Registration no. of Trust : </th>
            <th style="color: white;">Registration date of Trust :</th>
            <th style="color: white;">PAN of Trust : </th>
            <th style="color: white;">Check digit for Educational Object : </th>
            <th style="color: white;">Check digit for Medical Object : </th>
            <th style="color: white;">Address of client : </th>
            <th style="color: white;">City of client : </th>
            <th style="color: white;">District of client : </th>
            <th style="color: white;">PIN of client : </th>
            <th style="color: white;">State of client : </th>
            <th style="color: white;">Primary Bank of the institution : </th>
            <th style="color: white;">Primary Bank Branch : </th>
            <th style="color: white;">Primary Bank Branch Address : </th>
            <th style="color: white;">FCRA Registration Number : </th>
            <th style="color: white;">FCRA Registration Date : </th>
            <th style="color: white;">FCRA Bank : </th>
            <th style="color: white;">FCRA Bank Account Type : </th>
            <th style="color: white;">FCRA Bank Account Number : </th>

          </tr>



          <?php

          $con = mysqli_connect('localhost', 'root');

          mysqli_select_db($con, 'exel');
          $q = "select * from clients_table ";
          $query = mysqli_query($con, $q);

          while ($res = mysqli_fetch_array($query)) {
          ?>
            <tr class="text-center">
              <td> <?php echo $res['CID'];  ?> </td>
              <td> <?php echo $res['FILENO'];  ?> </td>
              <td> <?php echo $res['CNAME'];  ?> </td>
              <td> <?php echo $res['CTYPE'];  ?> </td>
              <td> <?php echo $res['PID'];  ?> </td>
              <td> <?php echo $res['TRGNO'];  ?> </td>
              <td> <?php echo $res['TRGDT'];  ?> </td>
              <td> <?php echo $res['TPAN'];  ?> </td>
              <td> <?php echo $res['OEDU'];  ?> </td>
              <td> <?php echo $res['OMED'];  ?> </td>
              <td> <?php echo $res['CADDRESS'];  ?> </td>
              <td> <?php echo $res['CITY'];  ?> </td>
              <td> <?php echo $res['DISTRICT'];  ?> </td>
              <td> <?php echo $res['PINCODE'];  ?> </td>
              <td> <?php echo $res['STATE'];  ?> </td>
              <td> <?php echo $res['BANK'];  ?> </td>
              <td> <?php echo $res['BRANCH'];  ?> </td>
              <td> <?php echo $res['BADDRESS'];  ?> </td>
              <td> <?php echo $res['FCRGNO'];  ?> </td>
              <td> <?php echo $res['FCRGDT'];  ?> </td>
              <td> <?php echo $res['FCBANK'];  ?> </td>
              <td> <?php echo $res['FCACTYPE'];  ?> </td>
              <td> <?php echo $res['FCACNO'];  ?> </td>

              

            </tr>

          <?php
          }
          ?>

        </table>

      </div>
    </div>

    <script type="text/javascript">
      $(document).ready(function() {
        $('#tabledata').DataTable();
      })
    </script>
  


  </div>


  </section>
  </div>

  <script src="script.js"></script>

</body>

</html>