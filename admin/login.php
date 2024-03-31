<?php

// Start session

session_start();



// Set database connection details
require_once 'config.php';

//$servername = "localhost";

//$username = "root";

//$password = "";

//$dbname = "bugema2";



// Create connection

//$conn = new mysqli($servername, $username, $password, $dbname);



// Check connection

//if ($conn->connect_error) {

//    die("Connection failed: " . $conn->connect_error);

//}



// Check if form has been submitted

if ($_SERVER["REQUEST_METHOD"] == "POST") {



  // Retrieve username and password from form

  $username = $_POST['username'];

  $password = $_POST['password'];



  // Prepare SQL query to retrieve admin details

  $stmt = $conn->prepare("SELECT * FROM admin WHERE username = ? AND password = ?");

  $stmt->bind_param("ss", $username, $password);



  // Execute query

  $stmt->execute();



  // Bind the result variables

  $stmt->bind_result($id, $dbUsername, $dbPassword);



  // Fetch the results

  if ($stmt->fetch()) {

    // Login successful, set session variable and redirect to index.php

    $_SESSION["username"] = $dbUsername;

    header("Location: ./index.php");

    exit;

  } else {

    // Login failed, do something here

  }

}



// Close database connection

$conn->close();

?>






<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Admin login | Student Admission system</title>



    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />

  <!-- Google Font: Source Sans Pro -->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <!-- Font Awesome -->

  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

  <!-- icheck bootstrap -->

  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">

  <!-- Theme style -->

  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  

</head>

<body class="hold-transition login-page">

<div class="login-box">

  <div class="login-logo">

    <a href="#"><b><img src="logo.png" width="81" height="93"></b></a>  </div>

  <!-- /.login-logo -->

  <div class="card">

    <div class="card-body login-card-body">

      <p class="login-box-msg style2">ADMIN LOGIN FORM </p>



      <form action="" method="post">

        <div class="input-group mb-3">

          <input type="text" class="form-control" name="username" placeholder="Enter Username">

          <div class="input-group-append">

            <div class="input-group-text">

              <span class="fas fa-user"></span>

            </div>

          </div>

        </div>

        <div class="input-group mb-3">

          <input type="password" class="form-control" name="password" placeholder="Enter Password">

          <div class="input-group-append">

            <div class="input-group-text">

              <span class="fas fa-lock"></span>

            </div>

          </div>

        </div>

        <div class="row">

          <div class="col-8">

            <div class="icheck-primary">

              <input type="checkbox" id="remember">

              <label for="remember">

                Remember Me

              </label>

            </div>

          </div>

          <!-- /.col -->

          <div class="col-4">

            <button type="submit" name="btnlogin" class="btn btn-primary btn-block">Sign In</button>

          </div>

          <!-- /.col -->

        </div>

      </form>



      <!-- /.social-auth-links -->

<p class="mb-1">&nbsp;</p>

    </div>

    <!-- /.login-card-body -->

  </div>

  <p>&nbsp;</p>

  <p>&nbsp;</p>

  <p>&nbsp;</p>

</div>

<!-- /.login-box -->

 

  

<!-- jQuery -->

<script src="plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap 4 -->

<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- AdminLTE App -->

<script src="dist/js/adminlte.min.js"></script>



<link rel="stylesheet" href="popup_style.css">

<?php if(!empty($_SESSION['success'])) {  ?>

<div class="popup popup--icon -success js_success-popup popup--visible">

  <div class="popup__background"></div>

  <div class="popup__content">

    <h3 class="popup__content__title">

      <strong>Success</strong> 

    </h1>

    <p><?php echo $_SESSION['success']; ?></p>

    <p>

      <button class="button button--success" data-for="js_success-popup">Close</button>

    </p>

  </div>

</div>

<?php unset($_SESSION["success"]);  

} ?>

<?php if(!empty($_SESSION['error'])) {  ?>

<div class="popup popup--icon -error js_error-popup popup--visible">

  <div class="popup__background"></div>

  <div class="popup__content">

    <h3 class="popup__content__title">

      <strong>Error</strong> 

    </h1>

    <p><?php echo $_SESSION['error']; ?></p>

    <p>

      <button class="button button--error" data-for="js_error-popup">Close</button>

    </p>

  </div>

</div>

<?php unset($_SESSION["error"]);  } ?>

    <script>

      var addButtonTrigger = function addButtonTrigger(el) {

  el.addEventListener('click', function () {

    var popupEl = document.querySelector('.' + el.dataset.for);

    popupEl.classList.toggle('popup--visible');

  });

};



Array.from(document.querySelectorAll('button[data-for]')).

forEach(addButtonTrigger);

    </script>

</body>

</html>

