
<?php
  session_start();
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

  $msg = "";

    if (isset($_GET['verification'])) {
        if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tbl_login WHERE code='{$_GET['verification']}'")) > 0) {
            $query = mysqli_query($conn, "UPDATE tbl_login SET code='' WHERE code='{$_GET['verification']}'");
            
            if ($query) {
                $msg = "<div class='alert alert-success'>Account verification has been successfully completed.</div>";
            }
        } else {
            header("Location: login.php");
        }
    }
	
	
	
	
	
	
if (isset($_POST['submit'])){

$UserName=$_POST['username'];
$Password= md5($_POST['password']);
$sql=mysqli_query($conn,"select * from tbl_login");
$cnt=mysqli_num_rows($sql);

$login=mysqli_query($conn,"select * from tbl_login where username='$UserName' and password='$Password'");
$count=mysqli_num_rows($login);
$row=mysqli_fetch_array($login);
if ($count > 0){
$_SESSION['id']=$row['id'];
$user=$row['username'];
$role=$row['role'];
	 if($row["role"]=="Candidate")
	    {

		  $_SESSION['name'] = $row["name"];
		   if (empty($row['code'])) {
              header('Location: Candidate_dashboard.php');
			  $sql2="INSERT INTO tbl_history VALUES('','$user','$role','Login', NOW())";
		  $result=$conn->query($sql2);
            } 
			else {
                $msg = "<div class='alert alert-info'>First verify your account and try again.</div>";
            }
		 
	    } 
	  else if($row["role"]=="Admin")
	    {
		
		  $_SESSION['name'] = $row["name"];
		   $_SESSION['count'] =$cnt;
		  header('Location: admin_dashboard.php');
	     
		  $sql2="INSERT INTO tbl_history VALUES('','$user','$role','Login', NOW())";
		  $result=$conn->query($sql2);
		}
	  else if($row["role"]=="Voter")
	     {
	
		  $_SESSION['name'] = $row["name"];
		  header('Location:voter_dashboard.php');
	     $sql2="INSERT INTO tbl_history VALUES('','$user','$role','Login', NOW())";
		  $result=$conn->query($sql2);
		 }
	  else
	     {
	      $msg = "<div class='alert alert-danger'>Email or password do not match.</div>";
	     }
   }
   else
    {
	echo"<script>alert('Incorrect username or password')</script>";
	}
}
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Login</title>
	<link rel="icon" type="image/png" href="favicons/favicon-16x16.png" sizes="16x16">
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"
        content="Login Form" />
    <!-- //Meta tag Keywords -->

    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!--/Style-CSS -->
    <link rel="stylesheet" href="css2/style.css" type="text/css" media="all" />
    <!--//Style-CSS -->

    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>

</head>

<body>

    <!-- form section start -->
    <section class="w3l-mockup-form">
        <div class="container">
            <!-- /form -->
            <div class="workinghny-form-grid">
                <div class="main-mockup">
                    
                    <div class="w3l_form align-self">
                        <div class="left_grid_info">
                            <img src="images/login.gif" alt="">
                        </div>
                    </div>
                    <div class="content-wthree">
                        <h2>Login Now</h2>
                        <?php echo $msg; ?>
                        <form action="" method="post">
                            <input type="text" class="email" name="username" placeholder="Enter Your Username" required>
                            <input type="password" class="password" name="password" placeholder="Enter Your Password" style="margin-bottom: 2px;" required>
                            <p><a href="forgotpass.php" style="margin-bottom: 15px; display: block; text-align: right;">Forgot Password?</a></p>
                            <button name="submit" name="submit" class="btn" type="submit">Login</button>
                        </form>
                        <div class="social-icons">
                            <p>Candidate Signup! <a href="register.php">Register</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //form -->
        </div>
    </section>
    <!-- //form section start -->

    <script src="js/jquery.min.js"></script>
    <script>
        $(document).ready(function (c) {
            $('.alert-close').on('click', function (c) {
                $('.main-mockup').fadeOut('slow', function (c) {
                    $('.main-mockup').remove();
                });
            });
        });
    </script>

</body>

</html>
