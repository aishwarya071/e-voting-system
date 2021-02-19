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
            .para1{
                text-align: center;
            }
            input{
            border-radius:10px;
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
  
        <div class="container-fluid">
        <div class="col-md-12">
        <div class="text-center">
        <i class="fa fa-user-circle fa-3x"></i>
    
        <h1 class="para1"><i>Candidate Registration</i></h1>
        <form method="POST" onsubmit="return validate();">
            <table border="1" width="250px" class="center">
               
                <tr>
                    <td>Enter Name</td>
                    <td colspan="2">
                        <input type="text" name="username" id="username">
                    </td>
                </tr>
                <tr>
                    <td>Enter Registration-ID</td>
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
                    <td>Enter your party name</td>
                    <td colspan="2">
                    <select name="party" id="party">
                    <option value="0">(Please select a party)</option>
    <option value="Liberal">Liberal</option>
    <option value="Federal">Federal</option>
    <option value="Communist">Communist</option>
    
  </select>
                    </td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td colspan="2">
                        <input type="radio" name="gender" id="gender" value="male">Male
                        <input type="radio" name="gender" id="gender" value="female">Female
                    </td>
                </tr>
               
                <tr>
                    <td colspan="3">
                       
                        <input type="reset">
                    
                        <input type="submit" value="Submit" name="saved">
                    </td>
                </tr>
            </table>
        </form>
        </div>
        </div><p id="error_para" ></p>
        </div>

        <script>
  function validate(){
                
                var name = document.getElementById( "username" );
 if( name.value == "" )
 {
  alert(" You Have To Write Your Name. ");
  
  return false;
 }
 var password = document.getElementById( "pwd" );
 if( password.value == "")
 {
  alert(" Enter CID ");
  
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
    </body>
</html>


<?php
    include_once 'db.php';
    if(isset($_POST['saved'])) 
    {
        $a=$_POST['username'];  
        $b=$_POST['pwd'];  
        $c=$_POST['address'];  
        $d=$_POST['party']; 
        $e=$_POST['gender'];  
         
        
        $s="INSERT INTO candidate(Name,CID,Address,Party,gender) VALUES('$a','$b','$c','$d', '$e')"; 
        
        if (mysqli_query($conn, $s)) { 
            echo "New record created successfully !";
         } else {
            echo "Error: ";
         }
        
         mysqli_close($conn);
        
    }
   