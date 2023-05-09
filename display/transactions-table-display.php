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
    <div class="sidebar">
        <a class="formate border active" href="display-index.php">Home</a>
        <a class="formate border" href="clients-table-display.php">Clients Table</a>
        <a class="formate border" href="active-clients-table-display.php">Active Clients Table</a>
        <a class="formate border" href="heads-table-display.php">Heads Table (Level 1 grouping)</a>
        <a class="formate border" href="ledgers-table-display.php">Ledgers Table (Level 2 grouping)</a>
        <a class="formate border" href="items-table-display.php">Items Table (Entry Items)</a>
        <a class="formate border" href="firms-table-display.php">Firms Table (Audit Firm Master)</a>
        <a class="formate border" href="signing-partner-table-display.php">Signing Partner (Auditor) Table</a>
            <a class="formate border" href="heads-sequence-table-display.php">Heads Sequence Table</a>
        <a class="formate border" href="transactions-table-display.php">Transactions Table (Entries)</a>
        <a class="formate border" href="schedule-note-numbers-table-display.php">Schedule Note Numbers Table</a>
        <a class="formate border" href="audit-report-table-display.php">Audit Report Table</a>
        <a class="formate border" href="report-information-table-display.php">Report Information Table</a>

    </div>

    <!-- Page content -->
    <div class="content ">
        <div class="fixed">

            <nav style="background-color:rgb(0, 255, 255) ;" class="navbar navbar-expand-lg bg-body-tertiary ">
                <div class="container-fluid">
                    <!-- <a class="navbar-brand"  href="#">#</a> -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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

        <div class="container">
            <div class="col-lg-12">
                <!-- <br><br>
            <h1 class="text-warning text-center"> Display Content</h1>
            <br> -->
                <table id="tabledata" class=" table table-striped table-hover table-bordered">

                    <tr class="bg-dark text-white text-center">

                        <th>Financial Year : </th>
                        <th>Unique Identifier for each Client : </th>
                        <th>Transaction type : </th>
                        <th>Entry item identifier : </th>
                        <th>Entry ledger group (common items) : </th>
                        <th>Intra-group transfer client code : </th>
                        <th>C (Credit) or D (Debit) : </th>
                        <th>Entry amount : </th>
                    </tr>



                    <?php

                    $con = mysqli_connect('localhost', 'root');

                    mysqli_select_db($con, 'exel');
                    $q = "SELECT * FROM transactions_table";
                    $query = mysqli_query($con, $q);

                    while ($res = mysqli_fetch_array($query)) {
                    ?>
                        <tr class="text-center">
                            <td> <?php echo $res['FY'];  ?> </td>
                            <td> <?php echo $res['CID'];  ?> </td>
                            <td> <?php echo $res['TTYPE'];  ?> </td>
                            <td> <?php echo $res['IID'];  ?> </td>
                            <td> <?php echo $res['LID'];  ?> </td>
                            <td> <?php echo $res['TID'];  ?> </td>
                            <td> <?php echo $res['TSIDE'];  ?> </td>
                            <td> <?php echo $res['TAMT'];  ?> </td>

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
        <button type="submit" name="done" class="btn btn-primary button text-center">submit</button>


    </div>


    </section>
    </div>

    <script src="script.js"></script>

</body>

</html>