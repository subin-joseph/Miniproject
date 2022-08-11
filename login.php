<?php session_start(); ?>
<?php
  
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ovs";
 
 // Create connection
$conn = new mysqli($servername,$username,$password,$dbname);
	
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " 
        . $conn->connect_error);
}
?>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>
  	<link rel="icon" type="image/png" href="favicons/favicon-16x16.png" sizes="16x16">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                  </div>
                  <form class="user" method="POST">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="username" placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
					 <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">
                      Login
					  </button>
                    
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="reg.php">Candidate Sign Up</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>
<?php

if (isset($_POST['submit'])){

$UserName=$_POST['username'];
$Password= md5($_POST['password']);

$login_query=mysqli_query($conn,"select * from tbl_users where username='$UserName' and password='$Password'");
$count=mysqli_num_rows($login_query);
$row=mysqli_fetch_array($login_query);

if ($count > 0){
$_SESSION['id']=$row['user_id'];
	 if($row["role"]=="Candidate")
	    {
		  session_start();
		   $_SESSION['firstname'] = $row["first name"];
		  $_SESSION['lastname'] = $row["lastname"];
		  $_SESSION['role'] = $row["id"];
		  header('Location: Candidate_dashboard.php');
	    } 
	  else if($row["role"]=="Admin")
	    {
		  session_start();
		  $_SESSION['firstname'] = $row["first name"];
		  $_SESSION['lastname'] = $row["lastname"];
		  header('Location: admin_dashboard.php');
	     }
	  else if($row["role"]=="voter")
	     {
		  session_start();
		   $_SESSION['firstname'] = $row["first name"];
		  $_SESSION['lastname'] = $row["lastname"];
		  header('Location:voter_dashboard.php');
	     }
	  else
	     {
	      echo"<script>alert('Incorrect username or password')</script>";
	     }
   }
   else
    {
	echo"<script>alert('Incorrect username or password')</script>";
	}
}
?>