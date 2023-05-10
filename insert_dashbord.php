<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
    .sidebar-nav .nav-link {
    display: flex;
    align-items: center;
    font-size: 15px;
    font-weight: 600;
    color: #4154f1;
    transition: 0.3;
    background: #f6f9ff;
    padding: 6px 15px !important;!
    /* imprt */
    border-radius: 4px;
}
    </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="dashboard.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Admin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

 

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">


        

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">USER</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
           
            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul>
        </li>

      </ul>
    </nav>

  </header>


  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

    
      <li class="nav-item">
        <a class="nav-link " href="dashboard.php">
          <i class="bi bi-grid"></i>
          <span style="font-size: small;">Home</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="?page=clientstable">
          
          <span style="font-size: small;">Clients Table</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="?page=activeclientstable">
          
          <span style="font-size: small;">Active Clients Table</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="?page=headstable">
          
          <span style="font-size: small;">Heads Table (Level 1 grouping)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="?page=ledgerstable">
          
          <span style="font-size: small;">Ledgers Table (Level 2 grouping)</span>
        </a>
      </li>
    
      <li class="nav-item">
        <a class="nav-link collapsed" href="?page=intemstable">
          
          <span style="font-size: small;">Items Table (Entry Items)</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="?page=firmstable">
          
          <span style="font-size: small;">Firms Table (Audit Firm Master)</span>
        </a>
      </li>
    
      <li class="nav-item">
        <a class="nav-link collapsed" href="?page=signingtable">
          
          <span style="font-size: small;">Signing Partner (Auditor) Table</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="?page=headsseqtable">
          
          <span style="font-size: small;">Heads Sequence Table</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="?page=transactiontable">
          
          <span style="font-size: small;">Transactions Table (Entries)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="?page=scheduletable">
          
          <span style="font-size: small;">Schedule Note Numbers Table</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="?page=art">
          
          <span style="font-size: small;">Audit Report Table</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="?page=rit">
          
          <span style="font-size: small;">Report Information Table</span>
        </a>
      </li>

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Insert data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
    <?php
            
     
            if (!isset($_GET['page'])) {
                // include "student/home.php";
            } else {
            switch ($_GET['page']) {
                case "clientstable":
                     include "insert/clients-table.php";
                break;

                case "activeclientstable":
                    include "insert/active-clients-table.php";
               break;
                
               case "headstable":
                include "insert/head-table.php";
           break;
           case "ledgerstable":
            include "insert/ledgers-table.php";
       break;

           
       case "intemstable":
        include "insert/items-table.php";
   break;

   case "firmstable":
    include "insert/firms-table.php";
break;

case "signingtable":
    include "insert/signing-partner-table.php";
break;

case "headsseqtable":
    include "insert/heads-sequence.php";
break;

case "transactiontable":
    include "insert/transactions-table.php";
break;

case "scheduletable":
    include "insert/schedule-note-numbers-table.php";
break;

case "art":
    include "insert/audit-report-table.php";
break;

case "rit":
    include "insert/report-information-table.php";
break;


                default:
                    //  include "student/home.php";
                    header("Location : clients-table.php");
                };
            }
            
            ?>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>POOJAINFOTEACH</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
     
      Designed by <a href="#">POOJAINFOTEACH</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>