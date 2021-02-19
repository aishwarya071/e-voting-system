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
           
    
            input{
            border-radius:40px;
            }
            

label {
  
  display: inline-block;
  align: center;
  font-weight: bold;
margin-left: 5%;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 50px;
  cursor: pointer;
  align: center;
  margin-left:37%;
   margin-right:50%;
   width: 25%;
}

.col-75 {
  float:center;
  width: 55%;
  margin-top: 6px;
  margin-left: 150px;
}
input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 25px;
  background-color: #f2f2f2;
  padding: 20px;
}


.ping{
    margin-left:auto;
   margin-right:auto;
   width: 45%;
   
}
.row1{
    text-align: center;
    margin-left: 35%;
}
body { padding-top: 50px; }


        </style>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
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
</nav><br><br>
            <div class="text-center">
            <div class="row row1">
               <span class="fa fa-trash fa-2x"></span>
               <h3>
                   Delete Candidate Records</h3></div></div><br>
        <div class="container">
        
        <form method="post" name="form" class="ping" onsubmit="return formvalidate();">
        <div class="row">
             
            <label for="id">Enter CID of the candidate whose records have to be deleted</label></div>
            <br>
            <div class="col-75">
            <input type="number" name="cid" id="cid" placeholder="Candidate-ID"></div><br>
            
            <input type="submit" value="Submit" name="submit"></div>
        </form>
</div>
<script>
        function formvalidate(){
                
var password = document.getElementById( "cid" );
               if( password.value == "")
               {
                alert(" Enter CID ");
                
                return false;
               }}
               </script>
    </body>
</html>
<?php
include_once 'db.php';
if(isset($_POST['submit'])) 
{
    
$cid = $_POST['cid'];
$sql = "SELECT * FROM candidate WHERE CID='$cid'";
$result = mysqli_query($conn, $sql);
if ($row = mysqli_fetch_assoc($result)) {
$del = "DELETE FROM candidate WHERE cid = '$cid'";
            
if (mysqli_query($conn, $del)) { 
                echo "Deleted successfully !";
                
             } 
            }
            else {
                echo "Could not find a candidate with the given CID";
             }
            
             mysqli_close($conn);
            }
?>