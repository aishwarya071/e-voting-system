<!DOCTYPE html>
<html>
    <head>
        <title>cast vote</title>
        
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
       
        <style>
            td,th{
                text-align: left;
                font-weight: bold;
            }
            .center{
                margin-left: auto;
                margin-right: auto;
                height: 250px;
            }
            input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 30px;
  cursor: pointer;
  align: center;
  
   width: 25%;
}
body { padding-top: 50px; }
        </style>
        <script>
        
        function formvalidate(){
                
                var pass = document.getElementById( "pwd" );
               if( pass.value == "" )
               {
                alert(" You Have To Write Your VoterID. ");
                
                return false;
               }
               var vote= document.getElementsByName( "party" );
               if (!(vote[0].checked || vote[1].checked || vote[2].checked || vote[3].checked))
 {
   alert(" Kindly vote for a candidate ");
  
  return false;
 }}
  </script>
    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">E-VOTING</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="indexpro.php">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          About
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="Rules.php">Know the rules</a>
          <a class="dropdown-item" href="candidatepg2.php">About our candidates</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Registration
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="registrationforvoter.php">Voter Registration</a>
          <a class="dropdown-item" href="elecoff.php">Officer Registration</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Login
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="voterlogin.php">Voter Login</a>
          <a class="dropdown-item" href="officerlogin.php">Officer Login</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="finalres.php">Polls <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="feedback.php">Feedback <span class="sr-only"></span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav><br>


<div class="row">
<div class="col-md-8">
        <h2 style="text-align: center;">Cast your Vote </h2>
        
        <form method="POST" onsubmit="return formvalidate();">
            <table border="1" class="center">
                <tr>
                    <td colspan="1">Enter your Voter_ID</td>
                    <td colspan="2">
                    <input type="number" name="pwd" id="pwd"></td>
                </tr>
                <tr>
                    <td colspan="1">Cast your vote </td><br>
                    <td colspan="2">
                    <input type="radio" name="party" value="LIBERAL">  LIBERAL<br>
                    <input type="radio" name="party" value="COMMUNIST">COMMUNIST<br>
                    <input type="radio" name="party" value="FEDERAL">   FEDERAL<br>
                    <input type="radio" name="party" value="NONE OF THE ABOVE">  NOTA<br>
                    </td>
                </tr>
           
                <tr>
                    <td colspan="3" style="text-align: center;">
                    <input type="submit" value="Submit Vote" name="submit" style="height:50px; width:200px"></td>
                </tr>
            </table>
        </form>
        <p id="error_para"></p>
        </div>
        <div class="col-md-4">
        <img src="giffy1.gif" height="90%" width="90%"></div></div>
    </body>
    
</html>


<?php
include_once 'db.php';

error_reporting(0);
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