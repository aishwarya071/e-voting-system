<?php
include_once 'db.php';


if(isset($_POST['submit'])) 
{
$vc= $_POST['party'];


$vid=$_POST['pwd'];
$em="SELECT CID FROM candidate WHERE Party='$vc'";

$result = mysqli_query($conn,$em);
$row = mysqli_fetch_assoc($result);
$emailid = $row['CID'];

$voted=voted;
$off="SELECT UID FROM officer";
$resy = mysqli_query($conn,$off);
$rowy = mysqli_fetch_assoc($resy);
$mailid = $rowy['UID'];

$si=mysqli_query($conn,"SELECT *FROM voter WHERE VoterID='$vid' AND status='$voted'");

if(mysqli_num_rows($si)>0){
   echo "Already voted";
}
else{
   $sq1=mysqli_query($conn,"UPDATE voter SET Status='$voted' WHERE VoterID='$vid'");
   $s="INSERT INTO votes(time_stamp, VoterID, CID, UID) VALUES(CURRENT_TIME(),'$vid','$emailid','$mailid')";
   $slq="UPDATE candidate SET Total_vote=Total_vote+1 WHERE party='$vc'"; 
   
}

if (mysqli_query($conn, $slq)) { 
    echo "Voted successfully !";
    
 } 

        if (mysqli_query($conn, $s)) { 
            echo "New record created successfully !";
         } 
}
 mysqli_close($conn);
?>