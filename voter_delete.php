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

$id = $_GET['id']; // get id through query string

$del = mysqli_query($conn,"delete from tbl_users where user_id = '$id'"); // delete query

if($del)
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