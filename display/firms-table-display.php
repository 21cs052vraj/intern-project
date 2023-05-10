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
  <div class="content table-responsive">
    

    <h3 class="h3 my-3 formate text-center">Firms Table (Audit Firm Master)</h3>

    <div class="container table-responsive">
      <div class="col-lg-12">
        <!-- <br><br>
            <h1 class="text-warning text-center"> Display Content</h1>
            <br> -->
        <table id="tabledata" class=" table table-striped table-hover table-bordered">

          <tr class="bg-dark text-white text-center">

            <th style="color: white;">Unique Identifier for each branch : </th>
            <th style="color: white;">Name of auditor firm : </th>
            <th style="color: white;">Address line 1 of the branch :</th>
            <th style="color: white;">Address line 2 of the branch :</th>
            <th style="color: white;">City of the branch :</th>
            <th style="color: white;">State of the branch : </th>
            <th style="color: white;">Registration date of Trust :</th>
            <th style="color: white;">PIN of the branch : </th>
            <th style="color: white;">FRN of auditor firm :</th>
            <th style="color: white;">Phone No. of the branch : </th>
            <th style="color: white;">Address of other branches (1) :</th>
            <th style="color: white;">Address of other branches (2) : </th>


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