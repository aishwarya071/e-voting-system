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
            input:focus {
            background-color: lightblue;
            }
            .ping{
               
                border-style: dashed;
                width:25%;
            }
            
            
    
            input{
            border-radius:10px;
            }
            body { padding-top: 50px; }
        </style>
         <script>
  function validate(){
    var password = document.getElementById( "cid" );
 if( password.value == "")
 {
  alert(" Enter CID ");
  
  return false;
 }
                var name = document.getElementById( "username" );
 if( name.value == "" )
 {
  alert(" You Have To Write Your Name. ");
  
  return false;
 }
 
 var party = document.getElementById( "party" );
 var optionSelIndex = party.options[party.selectedIndex].value;
  
  if (optionSelIndex == 0) {
  alert(" Enter Party Name ");
  
  return false;
 }  
 var gender = document.getElementsByName( "gender" );
 if (!(gender[0].checked || gender[1].checked))
 {
  alert(" Select a gender ");
  
  return false;
 }
 
 
 
       
  }
 </script>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
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
      <button class="btn btn-outline-blue my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav><br><br>
  
        <div class="container-fluid">
        <div class="col-md-12">
        <div class="text-center">
        <h1>Update candidate Records!</h1><center>
        <form method="post" name="myform" class="ping" onsubmit="return validate();">
        
                    
                        <br><input type="number" name="cid" id="cid" placeholder="CID"><br><br>
                    
                        <input type="text" name="username" id="username" placeholder="Name"><br><br>
                    
                        <textarea name="address" row="50" col="50" placeholder="Address"></textarea><br><br>
                        <select name="party" id="party">
                    <option value="0">(Please select a party)</option>
    <option value="Liberal">Liberal</option>
    <option value="Federal">Federal</option>
    <option value="Communist">Communist</option>
    
  </select>
                        <br><br>
                    
                        <input type="radio" name="gender" value="male">Male
                        <input type="radio" name="gender" value="female">Female
                        <br><br>
                       
                        <input type="reset">
                    
                        <input type="submit" value="Submit" name="submit"><br><br>
                   
</form></center>
</div></div></div>
</body>
</html>

<?php
include_once 'db.php';
error_reporting(0);
if(isset($_POST['submit'])) 
{
mysqli_select_db($conn,"myDB");
$cid = $_POST['cid'];
$name = $_POST['username'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$party= $_POST['party'];


$sql = "SELECT * FROM candidate WHERE CID='$cid'";
$result = mysqli_query($conn, $sql);
if ($row = mysqli_fetch_assoc($result)) {
  $upd="UPDATE candidate SET Name='$name', Address='$address', Party='$party', gender='$gender' WHERE CID='$cid'";
  if (mysqli_query($conn, $upd)) { 
    echo "Updated successfully !";
    
 }
} 
 else {
    echo "Could not find a candidate with the given CID";
 }


 mysqli_close($conn);
}