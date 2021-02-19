<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <style>
            th,td{
                text-align: center;
                font-weight: bold;
            }
            table{
                background-color: #8FBC8F	;
                margin-left: auto;
                margin-right: auto;
            }
            body { padding-top: 50px; }
            input{
            border-radius:10px;
            }
            input:focus {
            background-color: lightblue;
            }
            .ping{
               
                border-style: dashed;
                width:25%;
            }
            
            
        </style>
        <script>
        function formvalidate(){
          var password = document.getElementById( "vid" );
               if( password.value == "")
               {
                alert(" Enter VoterID ");
                
                return false;
               }
                var name = document.getElementById( "fname" );
               if( name.value == "" )
               {
                alert(" You Have To Write Your First Name. ");
                
                return false;
               }
               var name = document.getElementById( "lname" );
               if( name.value == "" )
               {
                alert(" You Have To Write Your Last Name. ");
                
                return false;
               }
               

               var dob = document.getElementById('dob').value;
               var today = new Date();
    var birthDate = new Date(dob);
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age = age - 1;
    }
    if (age<18){
      alert(" Your age must be 18 or above to vote ");
                
                return false;
    }
  var genders = document.getElementsByName( "gender" );
 if (!(genders[0].checked || genders[1].checked))
 {
  alert(" Select a gender ");
  
  return false;
 }
        }
               </script>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
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
        <h1>Update Voter Records!</h1>
        <center>
        <form method="post" name="myform" class="ping" onsubmit="return formvalidate();">
        
                    <br>
                    
                        <input type="number" name="vid" id="vid" placeholder="Voter ID"><br><br><br>
                    
                        <input type="text" name="fname" id="fname" placeholder="First Name"><br><br><br>
                        <input type="text" name="mname" id="mname" placeholder="Middle Name"><br><br><br>
                        <input type="text" name="lname" id="lname" placeholder="Last Name"><br><br><br>
                    
                        <textarea name="address" row="50" col="50" placeholder="Address"></textarea><br><br><br>
                    
                        <input type="text" name="dob" id="dob" placeholder="DOB (YYYY-MM-DD)"><br><br><br>
                   
                   
                        <input type="radio" name="gender" value="male">Male
                        <input type="radio" name="gender" value="female">Female<br><br><br>
                    
                       
                        <input type="reset" style="background: #B0E0E6">
                    
                        <input type="submit" value="Submit" name="submit" style="background: #B0E0E6"><br><br>
                   
</form>
<center>
        </div>
        </div>
        </div>
</body>
</html>

<?php
include_once 'db.php';
if(isset($_POST['submit'])) 
{
mysqli_select_db($conn,"myDB");
$cid = $_POST['vid'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];

$sql = "SELECT * FROM voter WHERE VoterID='$cid'";
$result = mysqli_query($conn, $sql);
if ($row = mysqli_fetch_assoc($result)) {
$upd="UPDATE voter SET Fname='$fname', Mname='$mname', Lname='$lname', Address='$address', DOB='$dob', gender='$gender' WHERE VoterID='$cid'";
if (mysqli_query($conn, $upd)) { 
    echo "Updated successfully !";
    
 } 
}else {
    echo "Could not find a voter with the given Voter_ID";
 }

 mysqli_close($conn);
}
?>