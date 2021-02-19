<html>
<head>
        <title>voter registration</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
       
        <style>
        .button {
          background-color: #FF6347;
          border: none;
          color: white;
          padding: 20px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 4px 2px;
          cursor: pointer;
          
        }
        
        .button1 {border-radius: 50%;}

        .ster {
  border-radius: 25px;
  background-color: #f2f2f2;
  padding: 20px; 
  background: #ffffbf;

}
body { padding-top: 50px; }
        </style>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
  <a class="navbar-brand" href="#">E-VOTING</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
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
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav><br><br><br>










<?php
include_once 'db.php';

$ed= "SELECT MAX(Total_vote) AS maximum FROM candidate";
$result = mysqli_query($conn,$ed);
$row = mysqli_fetch_assoc($result); 
$maximum = $row['maximum'];

$em= "SELECT CID FROM candidate where Total_vote='$maximum'";
$res = mysqli_query($conn,$em);
$rows = mysqli_fetch_assoc($res); 
$cid = $rows['CID'];

$bee= "SELECT Party FROM candidate where Total_vote='$maximum'";
$re = mysqli_query($conn,$bee);
$ro = mysqli_fetch_assoc($re); 
$party = $ro['Party'];

$el= "SELECT Name FROM candidate where Total_vote='$maximum'";
$resu = mysqli_query($conn,$el);
$rowi = mysqli_fetch_assoc($resu); 
$name = $rowi['Name'];

$off="SELECT UID FROM officer";
$resy = mysqli_query($conn,$off);
$rowy = mysqli_fetch_assoc($resy);
$mailid = $rowy['UID'];

$s=mysqli_query($conn,"INSERT INTO final_result(time_stamp, CID, Party, NAME, UID) VALUES(CURRENT_TIME(),'$cid','$party','$name','$mailid')"); 

$result = mysqli_query($conn,"SELECT result_id, time_stamp, CID, Party, Name FROM final_result");

echo "<center><table border='1'>
<tr>
<th>Result_id</th>
<th>Time_stamp</th>
<th>CID</th>
<th>Party</th>
<th>Name</th>
</tr></center>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['result_id'] . "</td>";
echo "<td>" . $row['time_stamp'] . "</td>";
echo "<td>" . $row['CID'] . "</td>";
echo "<td>" . $row['Party'] . "</td>";
echo "<td>" . $row['Name'] . "</td>";
echo "</tr>";
}
echo "</table>";
 
mysqli_close($conn);

?>