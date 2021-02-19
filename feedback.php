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
        
.agf {
  border-radius: 25px;
  background-color: #f2f2f2;
  padding: 20px;
}



            input:focus {
            background-color: lightblue;
            }
            table{
              width:300px;
              height:400px;
            }
input[type=number]{
    width: 67%;
    border-radius:30px;
}
input[type=submit]{
    width: 37%;
    border-radius:30px;
}
input[type=reset]{
    width: 37%;
    border-radius:30px;
}
th,td{
  text-align: center;
  border: 1.5px solid black;
}
textarea{
  width: 300px;
  height: 100px;
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
      <li class="nav-item active">
        <a class="nav-link" href="feedback.php">Feedback <span class="sr-only"></span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-blue my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav><br><br>

<div class="row">
        <div class="col-md-8">
        <div class="agf">
        
            <center>
            <i class="fa fa-comments fa-4x"></i>
        <h1>Feedback Form</h1>
        
        
        <form method="post" name="myform" class="ping" onsubmit="return validate();">
        
                    <table border="1">
                    <tr>
                       <td colspan="3"> <input type="number" name="vid" id="vid" placeholder="Voter ID"></td>
                    </tr>
                       <tr> 
                     <td colspan="3"> How did you find our website?<br>
                      
                     <select name="feedback" id="feedback">
                    <option value="0">(Please give your rating)</option>
    <option value="Excellent">Excellent</option>
    <option value="Very Good">Very Good</option>
    <option value="Good">Good</option>
    <option value="Bad">Bad</option>
    <option value="Very Bad">Very Bad</option>
  </select></td></tr>
                        <tr>
                        <td colspan="3"><textarea name="address" row="50" col="50" placeholder="Feedback"></textarea></td>
                        </tr>
                    
                        <tr>
                        <td colspan="3"><input type="reset" style="background: #FFD700; font-weight:bold;">
                    
                        <input type="submit" value="Submit" name="submit" style="background: #FFD700; font-weight:bold;"></td></tr>
      </table>             
</form>
</center>
        </div></div>
        

        <div class="col-md-4">
        <div style="text-align:center;">
            <h3>

Thank You for your vote. You have made a difference!</h3></div><br>
<center>
<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides" src="susan.jpg" style=" width:50%; height:80%;">
  <img class="mySlides" src="george.jpg" style=" width:70%; height:80%;">
  <img class="mySlides" src="licoln.jpg" style="width:70%; height:80%;">
</div></center>
  

</div>
</div>
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
<script>
  function validate(){
    var password = document.getElementById( "vid" );
 if( password.value == "")
 {
  alert(" Enter VoterID ");
  
  return false;
 }
 var party = document.getElementById( "feedback" );
 var optionSelIndex = party.options[party.selectedIndex].value;
  
  if (optionSelIndex == 0) {
  alert(" Kindly select an option from the drop down menu ");
  
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
mysqli_select_db($conn,"myDB");
$cid = $_POST['vid'];
$rating=$_POST['feedback'];
$address = $_POST['address'];
$s="INSERT INTO feedback(VoterID, Feedback, Rating) VALUES('$cid','$address','$rating')"; 
    
    if (mysqli_query($conn, $s)) { 
        echo "Feedback recorded successfully !";
     } else {
        echo "Error: ";
     }
    
     mysqli_close($conn);
    }

    
?>