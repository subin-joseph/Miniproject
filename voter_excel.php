<?php
  include('session.php');
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

header("Content-type: application/vnd.ms-excel");
  header("Content-Disposition: attachment; filename=Voter_List.xls" );
  header("Expires: 0");
  header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
  header("Pragma: public");
?>
<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>UserName</th>
      <th>Age</th>
      <th>Gender</th>
	   <th>Address</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $qryreport = mysqli_query($conn,"SELECT * from tbl_voters where status=1") or die(mysqli_error());
	
    $sqlrows=mysqli_num_rows($qryreport);
    WHILE ($reportdisp=mysqli_fetch_array($qryreport)) {
    ?>
    <tr>
      <td><?php echo $reportdisp['first name']." ".$reportdisp['lastname'] ?></td>
      <td><?php echo $reportdisp['email'] ?></td>
      <td><?php echo $reportdisp['username'] ?></td>
      <td><?php echo $reportdisp['Age'] ?></td>
      <td><?php echo $reportdisp['gender'] ?></td>
      <td><?php echo $reportdisp['address'] ?></td>
    <?php } ?>
  </tbody>
</table>