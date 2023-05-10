<?php
require('db.php');
// include("auth_session.php");
?>
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
    <div class="content table-responsive style='color: white;'">


        <h3 class="h3 my-3 formate text-center">Items Table (Entry Items)</h3>

        <div class="container">
            <div class="col-lg-12">
                <!-- <br><br>
            <h1 class="text-warning text-center"> Display Content</h1>
            <br> -->
                <table id="tabledata" class=" table table-striped table-hover table-bordered">

                    <tr class="bg-dark text-white text-center">

                        <th style="color: white;">Unique Identifier for each item : </th>
                        <th style="color: white;">Unique Identifier of Level 2 : </th>
                        <th style="color: white;">Text of reported heading : </th>
                        <th style="color: white;">Side of each item (Debit/Credit) : </th>
                        <th style="color: white;">CID for client-specific ledgers : </th>
                        <th style="color: white;">Active Item (New Entry Allowed) : </th>

                    </tr>



                    <?php

                    $con = mysqli_connect('localhost', 'root');

                    mysqli_select_db($con, 'exel');
                    $q = "SELECT * FROM items_table";
                    $query = mysqli_query($con, $q);

                    while ($res = mysqli_fetch_array($query)) {
                    ?>
                        <tr class="text-center">
                            <td> <?php echo $res['IID'];  ?> </td>
                            <td> <?php echo $res['LID'];  ?> </td>
                            <td> <?php echo $res['INAME'];  ?> </td>
                            <td> <?php echo $res['ISIDE'];  ?> </td>
                            <td> <?php echo $res['CID'];  ?> </td>
                            <td> <?php echo $res['ACTIVE'];  ?> </td>


                            <!--<td> <button class="btn-primary btn"> <a href="update.php?id=<?php echo $res['id']; ?>" class="text-white"> Update </a> </button> </td>
                        <td> <button class="btn-success btn"> <a href="view.php?id=<?php echo $res['id']; ?>" class="text-white"> View </a> </button> </td> -->

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