<?php

session_start();

if (!isset($_SESSION['username'])) {

    header('Location: login.php');

    exit;

}



$username = $_SESSION['username'];



// Create connection
require_once 'config.php';

//$conn = new mysqli("localhost", "root", "", "bugema2");



// Check connection

//if ($conn->connect_error) {

//    die("Connection failed: " . $conn->connect_error);

//}



// Get total number of courses

$sql = "SELECT COUNT(*) FROM course";

$result = $conn->query($sql);

$row = $result->fetch_assoc();

$total_courses = $row["COUNT(*)"];



$sql1 = "SELECT COUNT(*) FROM application_form";

$result1 = $conn->query($sql1);

$row1 = $result1->fetch_assoc();

$total_applicants = $row1["COUNT(*)"];



// count the number of successful applicants

$sql2 = "SELECT COUNT(*) AS total FROM application_form WHERE status = 1";

$result2 = mysqli_query($conn, $sql2);



if (mysqli_num_rows($result2) > 0) {

    $row2 = mysqli_fetch_assoc($result2);

    $total_success_applicants = $row2["total"];

} else {

    $total_success_applicants = 0;

}



$sql3 = "SELECT COUNT(*) AS total FROM application_form WHERE status = 0";

$result3 = mysqli_query($conn, $sql3);



if (mysqli_num_rows($result3) > 0) {

    $row3 = mysqli_fetch_assoc($result3);

    $pending_applicants = $row3["total"];

} else {

    $total_success_applicants = 0;

}



$sql4 = "SELECT COUNT(*) AS total FROM application_form WHERE status = 2";

$result4 = mysqli_query($conn, $sql4);



if (mysqli_num_rows($result4) > 0) {

    $row4 = mysqli_fetch_assoc($result4);

    $provisionally_applicants = $row4["total"];

} else {

    $total_Provisionally_applicants = 0;

}



$conn->close();

?>

<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>BU Admin | Dashboard</title>

  <link rel="icon" href="logo.png" type="image/png">

  <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />

  <!-- Google Font: Source Sans Pro -->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <!-- Font Awesome -->

  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

  <!-- Ionicons -->

  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- Tempusdominus Bootstrap 4 -->

  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

  <!-- iCheck -->

  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">

  <!-- JQVMap -->

  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">

  <!-- Theme style -->

  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <!-- overlayScrollbars -->

  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

  <!-- Daterange picker -->

  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">

  <!-- summernote -->

  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">



  <!-- Navbar -->

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <!-- Left navbar links -->

    <ul class="navbar-nav">

      <li class="nav-item">

        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>      </li>

      <li class="nav-item d-none d-sm-inline-block">

        <a href="#" class="nav-link">Home</a>      </li>

      

    </ul>



    <!-- Right navbar links -->

    <ul class="navbar-nav ml-auto">

 

      

    </ul>

  </nav>

  <!-- /.navbar -->



  <!-- Main Sidebar Container -->

  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Brand Logo -->

  <a href="#" class="brand-link">

      <img src="logo.png" alt=" Logo" width="167" height="149" style="opacity: .8">

      <span class="brand-text font-weight-light">      &nbsp;&nbsp;&nbsp;&nbsp;   </span>    </a>



    <!-- Sidebar -->

    <div class="sidebar">

      <!-- Sidebar user panel (optional) -->

      <div class="user-panel mt-3 pb-3 mb-3 d-flex">

        <div class="info">

          <a href="#" class="d-block"><?php echo $username ?></a>

        </div>

      </div>



      <!-- Sidebar Menu -->

      <nav class="mt-2">

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <!-- Add icons to the links using the .nav-icon class

               with font-awesome or any other icon font library -->

         

		 <?php

			   include('sidebar.php');

			   

			   ?>

		 

		 

        </ul>

      </nav>

      <!-- /.sidebar-menu -->

    </div>

    <!-- /.sidebar -->

</aside>



  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <div class="content-header">

      <div class="container-fluid">

        <div class="row mb-2">

          <div class="col-sm-6">

            <h1 class="m-0 text-dark">Dashboard</h1>

          </div><!-- /.col -->

          <div class="col-sm-6">

            <ol class="breadcrumb float-sm-right">

              <li class="breadcrumb-item"><a href="#">Home</a></li>

              <li class="breadcrumb-item active">Dashboard </li>

            </ol>

          </div><!-- /.col -->

        </div><!-- /.row -->

      </div><!-- /.container-fluid -->

    </div>

    <!-- /.content-header -->





    <!-- Main content -->

    <section class="content">

      <div class="container-fluid">

        <!-- Small boxes (Stat box) -->

        <div class="row">

          <div class="col-lg-3 col-6">

            <!-- small box -->

            <div class="small-box bg-info">

              <div class="inner">

                <h4><strong><?php echo $total_applicants; ?></strong></h4>



                <h5><strong>Applicants </strong></h5>

              </div>

              <div class="icon">

              <i class="fa fa-users"></i>

              </div>

              <a href="app_table.php" class="small-box-footer"></a>            </div>

          </div>

          <!-- ./col -->

          <div class="col-lg-3 col-6">

            <!-- small box -->

            <div class="small-box bg-info">

              <div class="inner">

                <h4><?php echo $pending_applicants; ?></h4>



                <h5><strong>Pending Applicants</strong></h5>

              </div>

              <div class="icon">

                <i class="far fa-clock"></i>

              </div>

              <a href="app_table.php" class="small-box-footer" target="_blank"></a>            

            </div>

          </div>



          <div class="col-lg-3 col-6">

            <!-- small box -->

            <div class="small-box bg-success">

              <div class="inner">

                <h4><?php echo $total_success_applicants; ?></h4>



                <h5><strong>Successful Applicants </strong></h5>

              </div>

              <div class="icon">

               

              <i class="fas fa-check"></i>

              </div>

              <a href="acc_table.php" class="small-box-footer" target="_blank"></a> 

               </div>

            </div>

            <div class="col-lg-3 col-6">

            <!-- small box -->

            <div class="small-box bg-success">

              <div class="inner">

                <h4><?php echo $provisionally_applicants; ?></h4>



                <h5><strong>Successful Prov Applicants</strong></h5>

              </div>

              <div class="icon">

               

              <i class="fas fa-check"></i>

              </div>

                <a href="acc_prov_table.php" class="small-box-footer" target="_blank"></a> 

               </div>

            </div>

          <!-- ./col -->

          <div class="col-lg-3 col-6">

            <!-- small box -->

            <div class="small-box bg-warning">

              <div class="inner">

                <h4><?php echo $total_courses; ?></h4>



                <h5><strong>Courses</strong></h5>

              </div>

              <div class="icon">

              <i class="fas fa-book"></i>



              </div>

              <a href="course_table.php" class="small-box-footer" target="_blank"></a>            </div>

            </div>

          </div>

          

        <!-- /.row -->

      </div><!-- /.container-fluid -->

    </section>

    <!-- /.content -->

  </div>

  <!-- /.content-wrapper -->

  <footer class="main-footer">

    <?php include('footer.php');  ?>

    <div class="float-right d-none d-sm-inline-block">

      

    </div>

  </footer>



  <!-- Control Sidebar -->

  <aside class="control-sidebar control-sidebar-dark">

    <!-- Control sidebar content goes here -->

  </aside>

  <!-- /.control-sidebar -->

</div>

<!-- ./wrapper -->



<!-- jQuery -->

<script src="plugins/jquery/jquery.min.js"></script>

<!-- jQuery UI 1.11.4 -->

<script src="plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<script>

  $.widget.bridge('uibutton', $.ui.button)

</script>

<!-- Bootstrap 4 -->

<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- ChartJS -->

<script src="plugins/chart.js/Chart.min.js"></script>

<!-- Sparkline -->

<script src="plugins/sparklines/sparkline.js"></script>

<!-- JQVMap -->

<script src="plugins/jqvmap/jquery.vmap.min.js"></script>

<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

<!-- jQuery Knob Chart -->

<script src="plugins/jquery-knob/jquery.knob.min.js"></script>

<!-- daterangepicker -->

<script src="plugins/moment/moment.min.js"></script>

<script src="plugins/daterangepicker/daterangepicker.js"></script>

<!-- Tempusdominus Bootstrap 4 -->

<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Summernote -->

<script src="plugins/summernote/summernote-bs4.min.js"></script>

<!-- overlayScrollbars -->

<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

<!-- AdminLTE App -->

<script src="dist/js/adminlte.js"></script>

<!-- AdminLTE for demo purposes -->

<script src="dist/js/demo.js"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

<script src="dist/js/pages/dashboard.js"></script>

</body>

</html>

