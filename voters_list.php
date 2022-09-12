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
?>

<html lang="en">
  <head>
  <style>
  
 @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap');

* {
    box-sizing: border-box;
}

body>div{
    min-height: 100vh;
    display: flex;
    font-family: 'Roboto', sans-serif;
}

.table_responsive {
   max-width: 900px;
    border: 1px solid #00bcd4;
    background-color: #efefef33;
    padding:10px;
    overflow: auto;
    margin: auto;
    border-radius:10px;
}

table {
    width:100%;
		overflow:hidden;
    font-size: 13px;
    color: #444;
    white-space: nowrap;
    border-collapse: collapse;
	align-items:center;
}

table>thead {
    background-color:green;
    color: #fff;
}

table>thead th {
   padding: 15px;
}

table th,
table td {
    border: 1px solid #00000017;
    padding:auto;
}

table>tbody>tr>td>img {
    display: inline-block;
    width: 50px;
    height: 50px;
    object-fit: cover;
    border-radius:30%;
    border: 2px solid #fff;
    box-shadow: 0 2px 6px #0003;
}

.deletebtn {
	font-family: Arial;
	color: #FFFFFF;
	font-size: 12px;
	text-decoration:none;
	border-radius: 5px;
	border: 1px #d83526 solid;
	background: linear-gradient(180deg, #fe1900 5%, #ce0000 100%);
	text-shadow: 1px 1px 1px #b23d35;
	box-shadow: inset 1px 1px 2px 0px #f29d93;
	cursor: pointer;
	display: inline-flex;
	align-items: center;
}
.deletebtn:hover {
		color: #FFFFFF;
	background: linear-gradient(180deg, #ce0000 5%, #fe1900 100%);
}
.deletebtn-icon {
	padding: 10px 0px;
}
.deletebtn-icon svg {
	vertical-align: middle;
	position: relative;
	top: -1px;
	left: 11px;
}
.deletebtn-text {
	padding: 10px 18px;
}

.editbtn {
	font-family: Arial;
	color: #FFFFFF;
	font-size: 12px;
	border-radius: 5px;
	text-decoration:none;
	border: 1px #3381ed solid;
	background: linear-gradient(180deg, #3d93f6 5%, #1e62d0 100%);
	text-shadow: 1px 1px 1px #1571cd;
	box-shadow: inset 1px 1px 2px 0px #97c4fe;
	cursor: pointer;
	display: inline-flex;
	align-items: center;
}
.editbtn:hover {
	background: linear-gradient(180deg, #1e62d0 5%, #3d93f6 100%);
	color: #FFFFFF;
}
.editbtn-icon {
	padding: 10px 7px;
}
.editbtn-icon svg {
	vertical-align: middle;
	position: relative;
	top: -1px;
	left: 11px;
}
.editbtn-text {
	padding: 10px 14px;
}


table>tbody>tr {
    background-color: #fff;
    transition: 0.3s ease-in-out;
}


table>tbody>tr:nth-child(even) {
    background-color: rgb(238, 238, 238);
}

table>tbody>tr:hover{
    filter: drop-shadow(0px 2px 6px #0002);
}


  input[type=text],input[type=email],input[type=number]select {
  width:30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width:20%;
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}


input[type=reset] {
  width:20%;
  background-color:red;
  color: white;
  padding: 10px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
margin-left:25%;
}

input[type=reset]:hover {
  background-color:#DC143C;
}

#div {
  border-radius: 5px;
  padding: 20px;
  width:34%;
  height:45 %;
  margin-left:35%;
 background-color:#F0FFFF;
  margin-top:8%;
}
#h1{
	
	margin-left:30%;
	font-size:32px;
	color:blue;
	  font-family: "Times New Roman", Times, serif;
}

.css-button {
	font-family: Arial;
	color: #ffffff;
	text-decoration: none;
	font-size: 12px;
	padding:1px 5px;
	border-radius: 5px;
	border: 1px #74b807 solid;
	background: linear-gradient(180deg, #8ac403 5%, #78a809 100%);
	text-shadow: 1px 1px 1px #528009;
	box-shadow: inset 1px 1px 2px 0px #a4e271;
	cursor: pointer;
	display: inline-flex;
	align-items: center;
}
.css-button:hover {
	background: linear-gradient(180deg, #78a809 5%, #8ac403 100%);
	  color:#FFFFFF;
}
.css-button-icon {
	padding: 10px 10px;
	border-right: 1px solid rgba(255, 255, 255, 0.16);
	box-shadow: rgba(0, 0, 0, 0.14) -1px 0px 0px inset;
}
.css-button-icon svg {
	vertical-align: middle;
	position: relative;
}
.css-button-text {
	padding: 10px 18px;
}



.css-button2 {
	font-family: Arial;
	color: #ffffff;
	font-size: 12px;
	text-decoration: none;
	padding:1px 5px;
	border-radius: 5px;
	border: 1px #3381ed solid;
	background: linear-gradient(180deg, #0000cd 5%, #14149e 100%);



	text-shadow: 1px 1px 1px #1571cd;
	box-shadow: inset 1px 1px 2px 0px #97c4fe;
	cursor: pointer;
	display: inline-flex;
	align-items: center;
}
.css-button2:hover {
  background: linear-gradient(180deg, #14149e 5%, #0000cd 100%);
  color:#FFFFFF;
}
.css-button2-icon {
	padding: 10px 10px;
	border-right: 1px solid rgba(255, 255, 255, 0.16);
	box-shadow: rgba(0, 0, 0, 0.14) -1px 0px 0px inset;
}
.css-button2-text {
	padding: 10px 18px;
}

.css-button3{
	font-family: Arial;
	color: #FFFFFF;
	font-size: 12px;
	text-decoration: none;
	font-size: 12px;
	padding:1px 5px;
	border-radius: 5px;
	border: 1px #d83526 solid;
	background: linear-gradient(180deg, #fe1900 5%, #ce0000 100%);
	text-shadow: 1px 1px 1px #b23d35;
	box-shadow: inset 1px 1px 2px 0px #f29d93;
	cursor: pointer;
	display: inline-flex;
	align-items: center;
}
.css-button3:hover {
	background: linear-gradient(180deg, #ce0000 5%, #fe1900 100%);
	color: #FFFFFF;
}
.css-button3-icon {
	padding: 10px 10px;
	border-right: 1px solid rgba(255, 255, 255, 0.16);
	box-shadow: rgba(0, 0, 0, 0.14) -1px 0px 0px inset;
}
.css-button3-text {
	padding: 10px 18px;
}
#btngrp{
	margin-left:14.5%;
}
  </style>
  
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"/>
  
    <link rel="stylesheet" href="css/style3.css" />
    <title>Admin Dashboard</title>
	<link rel="icon" type="image/png" href="favicons/favicon-16x16.png" sizes="16x16">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
  
    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#sidebar"
          aria-controls="offcanvasExample"
        >
          <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
        </button>
       
        <div class="collapse navbar-collapse" id="topNavBar">
          <form class="d-flex ms-auto my-3 my-lg-0">
            <div class="input-group">
              <input
                class="form-control"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <button class="btn btn-primary" type="submit">
                <i class="bi bi-search"></i>
              </button>
            </div>
          </form>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle ms-2"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="bi bi-person-fill"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">Settings</a></li>
               <li><a class="dropdown-item" href="logout.php?id=<?php echo $_SESSION['id'];?>">Log Out</a></li>
          
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- top navigation bar -->
    <!-- offcanvas -->
    <div
      class="offcanvas offcanvas-start sidebar-nav bg-dark"
      tabindex="-1"
      id="sidebar"
    >
      <div class="offcanvas-body p-0">
        <nav class="navbar-dark">
          <ul class="navbar-nav">
            <li>
              <a href="#" class="nav-link px-3 active">
                <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                <span>Admin Dashboard</span>
              </a>
            </li>
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
               Control Panel
              </div>
            </li>
            </li>
             <li>
              <a href="history.php" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-graph-up"></i></span>
                <span>History Log</span>
              </a>
            </li>
             <li>
              <a
                class="nav-link px-3 sidebar-link"
                data-bs-toggle="collapse"
                href="#layouts"
              >
                <span class="me-2"><i class="bi bi-layout-split"></i></span>
                <span>Election</span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
              </a>
              <div class="collapse" id="layouts">
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="#" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span>Previous Elections</span>
                    </a>
                  </li>
				   <li>
                    <a href="#" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span>New Election</span>
                    </a>
                  </li>
				  <li>
                    <a href="#" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span>Publish Result</span>
                    </a>
                  </li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- offcanvas -->
    <main class="mt-5 pt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h4>Welcome <?php  echo $_SESSION['name']; ?></h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <div class="card bg-primary text-white h-100">
              <div class="card-body py-5">Total users  <?php  echo $_SESSION['count']; ?></div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card bg-warning text-dark h-100">
              <div class="card-body py-5">Voter List</div>
              <div class="card-footer d-flex">
               <a href="voters_list.php" style="color:black"> View Details</a>
                <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card bg-success text-white h-100">
              <div class="card-body py-5">Candidate List</div>
              <div class="card-footer d-flex">
              <a href="candidate_list.php" style="color:white"> View Details</a>
                <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card bg-danger text-white h-100">
              <div class="card-body py-5">Total Voters</div>
              <div class="card-footer d-flex">
                View Details
                <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
              </div>
            </div>
          </div>
        </div>
       
        </div>
        <div class="row">
          <div class="col-md-12 mb-3">
            <div class="card">
               </div>
          </div>
		  <div id="btngrp">
<a class="css-button" id="myBtn">
	<span class="css-button-icon"><i class="fa fa-plus-square-o" aria-hidden="true"></i></span>
	<span class="css-button-text">ADD</span>
</a>&nbsp;&nbsp;

<a class="css-button3" href="inact_voters.php">
	<span class="css-button-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
	<span class="css-button-text">Inactive</span>
</a>&nbsp;&nbsp;

<a class="css-button2" href="voter_excel.php">
	<span class="css-button-icon"><i class="fa fa-file-excel-o" aria-hidden="true"></i></span>
	<span class="css-button-text">Download Excel</span>
</a>
</div>
<div class="table_responsive">
<table>
<thead>
<tr> <th>IMAGE</th>
    <th>NAME</th>
	<th>USERNAME</th>
	<th>AGE</th>
	<th>GENDER</th>
	<th>ADDRESS</th>
	<th>ACTION</th>
	
</tr>
</thead>
<tbody>
<div id="myModal" class="modal">

  <div class="modal-content" id="div">
    <form action="add_voter.php" method="POST" enctype="multipart/form-data"><h1 id="h1">ADD VOTER</h1>
	<div>
    <input type="text" id="fname" name="first_name" placeholder="First name..">
    <input type="text" id="lname" name="last_name" placeholder="Last name..">
     </div>
    <div>
    <input type="number" placeholder="Age" name="age" class="input"/ required>
	<label>Gender</label>
    <select id="country" name="gender">
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select>
    </div>
	  <div>
	<input type="address" placeholder="Address" name="address" class="input"/ required>
	    <input type="email" placeholder="E-mail" name="email" class="input"/ required>
     </div>
       <div>
	 <input type="number" placeholder="Contact" name="contact" class="input"/ required>
	 <input type="text" placeholder="Voter ID" name="username" class="input"/ required>
	 <input type="file" name="image"/>
	 </div>
	 <div>
	<input type="reset" id="bn" value="cancel" >
    <input type="submit" value="Save">
	</div>
  </form>
  </div>

</div>
  
  <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
var bn = document.getElementById("bn");
bn.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

</script>
  
 <?php
 $sql = "SELECT * from tbl_voters where status=1";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  ?>
  <tr>
    <td align="center"><img width="60" height="50" src="<?php echo $row['img'];?>"> </td>
    <td><?php echo $row['first name']." ". $row['lastname'] ?></td>
	<td><?php echo $row['username'] ?></td>
	<td><?php echo $row['Age'] ?></td>
	<td><?php echo $row['gender'] ?></td>
	<td><?php echo $row['address'] ?></td>
	 <td><a class="deletebtn" href="voter_delete.php?id=<?php echo $row['user_id'];?>">
	<span class="deletebtn-icon"><svg width="16" height="16" viewBox="2 2 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M7.5 7.5A.5.5 0 018 8v6a.5.5 0 01-1 0V8a.5.5 0 01.5-.5zm2.5 0a.5.5 0 01.5.5v6a.5.5 0 01-1 0V8a.5.5 0 01.5-.5zm3 .5a.5.5 0 00-1 0v6a.5.5 0 001 0V8z"/>
<path fill-rule="evenodd" d="M16.5 5a1 1 0 01-1 1H15v9a2 2 0 01-2 2H7a2 2 0 01-2-2V6h-.5a1 1 0 01-1-1V4a1 1 0 011-1H8a1 1 0 011-1h2a1 1 0 011 1h3.5a1 1 0 011 1v1zM6.118 6L6 6.059V15a1 1 0 001 1h6a1 1 0 001-1V6.059L13.882 6H6.118zM4.5 5V4h11v1h-11z" clip-rule="evenodd"/>
</svg></span>
	<span class="deletebtn-text">Remove</span>
</a>  <a class="editbtn">
	<span class="editbtn-icon"><svg width="16" height="16" viewBox="2 2 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16 5H4a1 1 0 00-1 1v8a1 1 0 001 1h12a1 1 0 001-1V6a1 1 0 00-1-1zM4 4a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2H4z" clip-rule="evenodd"/>
  <rect width="3" height="3" x="4" y="11" rx="1"/>
<path d="M3 7h14v2H3z"/>
</svg></span>
	<span class="editbtn-text">Edit</span>
</a></td>
  </tr>
  </tr>
 <?php
 }
 }
    ?> 
	 </tbody>
</table> 
 
  


<?php mysqli_close($conn);  // close connection ?>
        </div>

    </main>
    <script src="./js/bootstrap.bundle.min.js"></script>
  </body>
</html>
