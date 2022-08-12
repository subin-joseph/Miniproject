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

<!DOCTYPE html>
<html lang="en">
  <head>
  <style>
  
  
  
  
    .btnn {
  background: #1b76b3;
  background-image: -webkit-linear-gradient(top, #1b76b3, #2980b9);
  background-image: -moz-linear-gradient(top, #1b76b3, #2980b9);
  background-image: -ms-linear-gradient(top, #1b76b3, #2980b9);
  background-image: -o-linear-gradient(top, #1b76b3, #2980b9);
  background-image: linear-gradient(to bottom, #1b76b3, #2980b9);
  -webkit-border-radius: 8;
  -moz-border-radius: 8;

  font-family: Arial;
  color: #ffffff;
  font-size:10px;
  padding: 10px 20px 10px 20px;
  border: solid #020c12 1px;
  border-radius:5px;
  text-decoration: none;
  text-color:white;
}

.btnn:hover {
  text-decoration: none;
}
  
  
  
  
  table{
	  
	  margin-left:10px;  
     }
  table.paleBlueRows {
  font-family: "Times New Roman", Times, serif;
  border: 2px solid #FFFFFF;
  width: 100%;
  height:150%;
  text-align: center;
  border-collapse: collapse;
}
table.paleBlueRows td, table.paleBlueRows th {
  border: 1px solid #FFFFFF;
  padding: 3px 2px;
}
table.paleBlueRows tbody td {
  font-size: 13px;
}
table.paleBlueRows tr:nth-child(even) {
  background: #D0E4F5;
}
table.paleBlueRows thead {
  background: #0B6FA4;
  border-bottom: 5px solid #FFFFFF;
}
table.paleBlueRows thead th {
  font-size: 17px;
  font-weight: bold;
  color: #FFFFFF;
  text-align: center;
  border-left: 2px solid #FFFFFF;
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
  padding: 14px 20px;
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
  padding: 14px 20px;
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
  background-color: #f2f2f2;
  padding: 20px;
  width:34%;
  height:40%;
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
  
  </style>
  
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"/>
  
    <link rel="stylesheet" href="css/style3.css" />
    <title>Admin Dashboard</title>
	<link rel="icon" type="image/png" href="favicons/favicon-16x16.png" sizes="16x16">
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
                <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
          
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
                Results
              </div>
            </li>
            </li>
            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-graph-up"></i></span>
                <span>Charts</span>
              </a>
            </li>
            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-table"></i></span>
                <span>Tables</span>
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
            <h4>Welcome <?php  echo $_SESSION['firstname']; ?></h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <div class="card bg-primary text-white h-100">
              <div class="card-body py-5">Total users List</div>
              <div class="card-footer d-flex">
               <a href="users_list.php" style="color:white"> View Details</a>
                <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
              </div>
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
		  
		  
<table class="paleBlueRows">
<thead>
<tr> <th>IMAGE</th>
    <th>NAME</th>
    <th>EMAIL</th>
	<th>USERNAME</th>
	<th>AGE</th>
	<th>GENDER</th>
	<th>ADDRESS</th>
	<th>Actions</th>
</tr>
</thead>
<tbody>
<a><button id="myBtn" class="btnn">ADD+</button></a>


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
	 <input type="number" placeholder="Contact" name="username" class="input"/ required>
	 <input type="text" placeholder="Voter ID" name="username" class="input"/ required>
	 <input type="file" name="image"/>
	 </div>
	 <div>
	<input type="reset" id="bn" value="cancel" >
    <input type="submit" value="Submit">
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

 $sql = "SELECT * from tbl_users where role='Voter'";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  ?>
  <tr>
    <td align="center"><img width="60" height="50" src="<?php echo $row['img'];?>"> </td>
    <td><?php echo $row['first name']." ". $row['lastname'] ?></td>
	<td><?php echo $row['email'] ?></td>
	<td><?php echo $row['username'] ?></td>
	<td><?php echo $row['Age'] ?></td>
	<td><?php echo $row['gender'] ?></td>
	<td><?php echo $row['address'] ?></td>
  <td><a href="voter_delete.php?id=<?php echo $row['user_id']; ?>"><button>Delete</button></a></td>
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
