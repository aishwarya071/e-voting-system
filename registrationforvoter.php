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
            th,td{
                text-align: center;
                font-weight: bold;
            }
            table{
               
                margin-left: auto;
                margin-right: auto;
                width: 300px;
            }
            .para1{
                text-align: center;
            }
            input{
            border-radius:10px;
            }
            .container {
  border-radius: 45px;
  background-color: #f2f2f2;
  padding: 20px;
}
body { padding-top: 50px; }
        </style>
       <script>
        function formvalidate(){
                
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
               var password = document.getElementById( "pwd" );
               if( password.value == "")
               {
                alert(" Enter VoterID ");
                
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
  var genders = document.getElementsByName( "genders" );
 if (!(genders[0].checked || genders[1].checked))
 {
  alert(" Select a gender ");
  
  return false;
 }
        }
               </script>
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
      <li class="nav-item dropdown acive">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Registration
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item active" href="registrationforvoter.php">Voter Registration</a>
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
</nav><br>
<div class="col-md-12">
       <center>
   <div class="w3-content w3-section" style="max-width:900px">
    <p class="mySlides"><b><i>"Voting is the expression of our commitment to ourselves, one another, this country, and this world."</i></b></p>
    <p class="mySlides"><b><i>"Talk is cheap, voting is free; take it to the polls."</i></b></p>
    <p class="mySlides"><b><i>"Voting is as much an emotional act as it is an intellectual one."</i></b></p>
</center>
</div></div>



<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 3000); 
}

</script>
        <div class="container">
        <div class="col-md-12">
        <div class="text-center">
        <i class="fa fa-user-circle fa-3x"></i>
        <h1 class="para1"><i>Voter's Registration</i></h1>
        <form method="POST" onsubmit="return formvalidate();">
            <table border="1" width="250px" class="center">
                <tr>
                    <td>Enter First Name</td>
                    <td colspan="2">
                        <input type="text" name="fname" id="fname">
                       
                    </td>
                </tr>
                <tr>
                    <td>Enter Middle Name</td>
                    <td colspan="2">
                        <input type="text" name="mname" id="mname">
                       
                    </td>
                </tr>
                <tr>
                    <td>Enter Last Name</td>
                    <td colspan="2">
                        <input type="text" name="lname" id="lname">
                       
                    </td>
                </tr>
                <tr>
                    <td>Enter Voter-ID</td>
                    <td colspan="2">
                        <input type="number" name="pwd" id="pwd">
                        
                    </td>
                </tr>
                <tr>
                    <td>Enter Address</td>
                    <td colspan="2">
                        <textarea name="address" row="50" col="50"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Enter your date of birth (YYYY-MM-DD)</td>
                    <td colspan="2">
                        <input type="text" name="dob" id="dob">
                    </td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td colspan="2">
                        <input type="radio" name="genders" value="male">Male
                        <input type="radio" name="genders" value="female">Female
                          
                    </td>
                </tr>
               
                <tr>
                    <td colspan="3">
                       
                        <input type="reset">
                    
                        <input type="submit" value="Submit" name="save">
                    </td>
                </tr>
                <tr>
                    <td colspan="3">Already Registered? <a href="voterlogin.php">Login here</a></td>
        </tr>
            </table>

        </form>
  

        </div>
        </div><p id="error_para"></p>
        </div>
        
</body>


</html>


<?php
include_once 'db.php';

    if(isset($_POST['save'])) 
    {
 
 $a = $_POST['fname'];
 $x = $_POST['mname'];
 $y = $_POST['lname'];
 $b =$_POST['pwd'];
        
        $c=$_POST['address'];  
        $d=$_POST['dob']; 
        $e=$_POST['genders'];  
       
    $s="INSERT INTO voter(Fname,Mname,Lname,VoterID,Address,DOB,gender) VALUES('$a','$x','$y','$b','$c','$d','$e')"; 
    
    if (mysqli_query($conn, $s)) { 
        echo "New record created successfully !";
     } else {
        echo "Error: ";
     }
    
     mysqli_close($conn);
    }

    
?>