<?php
include_once 'db.php';
ini_set("display errors","1");
error_reporting(E_ALL);
ob_start();
if(isset($_POST['submit'])) 
{
$uid = $_POST['username'];
$pwd = $_POST['password'];
$sql = "SELECT * FROM voter WHERE Fname='$uid' AND VoterID='$pwd'";
$result = mysqli_query($conn, $sql);
if ($row = mysqli_fetch_assoc($result)) {
header('location: vote.php');
} else {
echo "Your username or Voter ID is incorrect!";
}
}
ob_end_flush();
?>