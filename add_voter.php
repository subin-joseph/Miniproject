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
 
 function generatePassword($_len) {

    $_alphaSmall = 'abcdefghijklmnopqrstuvwxyz';            // small letters
    $_alphaCaps  = strtoupper($_alphaSmall);                // CAPITAL LETTERS
    $_numerics   = '1234567890';                            // numerics
    $_specialChars = '`~!@#$%^&*()-_=+]}[{;:,<.>/?\'"\|';   // Special Characters

    $_container = $_alphaSmall.$_alphaCaps.$_numerics.$_specialChars;   // Contains all characters
    $password = '';         // will contain the desired pass

    for($i = 0; $i < $_len; $i++) {                                 // Loop till the length mentioned
        $_rand = rand(0, strlen($_container) - 1);                  // Get Randomized Length
        $password .= substr($_container, $_rand, 1);                // returns part of the string [ high tensile strength ;) ] 
    }

    return $password;       // Returns the generated Pass
}
 
 $hash = md5(generatePassword(10));
 $password=$hash;
 $image=$_FILES['image']["name"];
 $temp = explode(".", $_FILES["image"]["name"]);
  $newfilename = round(microtime(true)) . '.' . end($temp);
$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$image_size= getimagesize($_FILES['image']['tmp_name']);
	move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" .$newfilename);			
			$location="upload/" .$newfilename;
$sql = "INSERT INTO tbl_users VALUES (DEFAULT,'$first_name','$last_name','$email','$username','$password','Voter',$age,'$gender','$address','$location')";
$sql2="INSERT INTO tbl_login VALUES (DEFAULT,'$username','$password','Voter')";
 $result=$conn->query($sql2);
if ($conn->query($sql) === TRUE) {
    header('Location: reg_success.html');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>