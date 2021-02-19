<?php
include_once 'db.php';

$nameErr = $voteriderr = $genderErr = $dobErr = "";
$a = $b = $gender = $c = $d = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $nameErr = "Name is required";
  } 
  else {
   $a = test_input($_POST["username"]);
  
   if (!preg_match("/^[a-zA-Z-' ]*$/",$a)) {
     $nameErr = "Only letters and white space allowed";
   }
 }
 if (empty($_POST["gender"])) {
   $genderErr = "Gender is required";
 } else {
   $gender = test_input($_POST["gender"]);
 }
 if (empty($_POST["address"])) {
   $addrErr = "Missing";
}
else {
   $c = $_POST["address"];
}
}

function test_input($data) {
 $data = trim($data);
 $data = stripslashes($data);
 $data = htmlspecialchars($data);
 return $data;
}
 
    
    $s="INSERT INTO voter(Name,VoterID,Address,DOB,gender) VALUES('$a','$b','$c','$d','$gender')"; 
    
    if (mysqli_query($conn, $s)) { 
        echo "New record created successfully !";
     } else {
        echo "Error: ";
     }
    
     mysqli_close($conn);
    

    
 



?>