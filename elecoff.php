
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
                background-color: #D3D3D3;
                margin-left: auto;
                margin-right: auto;
            }
    
            input{
            border-radius:40px;
            }
            

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
  align= center;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 30px;
  cursor: pointer;
  align: center;
  margin-left:35%;
   margin-right:40px;
   width: 35%;
}
body { padding-top: 50px; }

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: center;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float:center;
  width: 75%;
  margin-top: 6px;
}
.ping {
   margin-left:auto;
   margin-right:auto;
   width: 45%;
   
}


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
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Registration
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="registrationforvoter.php">Voter Registration</a>
          <a class="dropdown-item active" href="elecoff.php">Officer Registration</a>
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
  
        <div class="container">
          
            <form class="ping" method="POST" onsubmit="return validate();">
            <div class="row">
              <div class="col-25">
            <label for="username" class="col-form-label">Username:</label></div>
                     <div class="col-75">
                        <input type="text" name="username" id="username" placeholder="Name">
          </div>
          </div>
         
          <div class="row">
            <div class="col-25">
            <label for="uid" class="col-form-label">Registration-ID:</label></div>
            <div class="col-75">
                        <input type="number" name="uid" id="uid" placeholder="Registration-ID"></div>
          
          </div>
          <div class="row">
            <div class="col-25">
            <label for="uid" class="col-form-label">Password:</label></div>
                <div class="col-75">
                    <input type="password" name="pwd" id="pwd" placeholder="Password"></div>
          </div>
          <div class="row">
            <div class="col-75">
                    <input type="submit" name="submit" value="Submit"></div>
</div>

<br>Already Registered? <a href="officerlogin.php">Login here</a>

</form>
</div><p id="error_para" ></p>
<script>
  function validate(){
                
                var name = document.getElementById( "username" );
 if( name.value == "" )
 {
  alert(" You Have To Write Your UserName. ");
  
  return false;
 }
 var password = document.getElementById( "uid" );
 if( password.value == "")
 {
  alert(" Enter UID ");
  
  return false;
 }
 
    
 var passy = document.getElementById( "pwd" );
 if( passy.value == "")
 {
  alert(" Enter Password ");
  
  return false;
 }
       
  }
 </script>
</body>
</html>




<?php
include_once 'db.php';
if(isset($_POST['submit'])) 
    {
        $a=$_POST['username'];  
        $c=$_POST['uid']; 
        $b=$_POST['pwd'];  
         
        
        $s="INSERT INTO officer(Name,UID,Password) VALUES('$a','$c','$b')"; 
        
        if (mysqli_query($conn, $s)) { 
            echo "New record created successfully !";
         } else {
            echo "Error: ";
         }
        
         mysqli_close($conn);
        
    }
  ?>