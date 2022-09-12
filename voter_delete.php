<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ovs";
 
 // Create connection
$conn = new mysqli($servername, 
    $username, $password, $dbname);
	
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " 
        . $conn->connect_error);
}


$sql = "SELECT * from tbl_voters";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      $user =$row['username'];
               }
 }
 $login=mysqli_query($conn,"select * from tbl_login where username='$user'");
$row=mysqli_fetch_array($login);
$role=$row['role'];
$sql2="INSERT INTO tbl_history VALUES('','Admin','Admin','Removed Voter $user', NOW())";
 $result=$conn->query($sql2);
$id = $_GET['id']; // get id through query string
$delt= mysqli_query($conn,"delete from tbl_login where username='$user'");
$del = mysqli_query($conn,"UPDATE `tbl_voters` SET `Status`=0 where user_id = '$id'"); // delete query
if($del && $delt)
{
    mysqli_close($conn); // Close connection
    header("location:voters_list.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>