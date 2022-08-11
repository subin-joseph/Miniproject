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

 $first_name = $_REQUEST['first_name'];
 $last_name = $_REQUEST['last_name'];
 $address = $_REQUEST['address'];
 $age = $_REQUEST['age'];
 $gender = $_REQUEST['gender'];
 $email = $_REQUEST['email'];
 $username = $_REQUEST['username'];
 $hash = md5($_REQUEST['password']);
 $password=$hash;
  
$sql = "INSERT INTO tbl_users VALUES (DEFAULT,'$first_name','$last_name','$email','$username','$password','Candidate',$age,'$gender','$address')";
  
if ($conn->query($sql) === TRUE) {
    header('Location: reg_success.html');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>