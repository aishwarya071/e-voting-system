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
        .ster {
  border-radius: 25px;
  background-color: #f2f2f2;
  padding: 20px; 
  border-height: 50%;
}
.agf {
  border-radius: 25px;
  background-color: #f2f2f2;
  padding: 20px;
}
body { padding-top: 50px; }
</style>
    </head>
    <body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-danger">
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
      <button class="btn btn-outline-blue my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav><br>
<div style="background: orange;">
<div class="col-md-12">
   <center> <h1>Welcome!</h1><marquee behavior="scroll" direction="left"><h5>Voting Lines are now open. Cast your vote now</h5></marquee>
</center></div></div><br>
<div class="row">
  <div class="col-md-8">
  <div class="ster">
    <h2 style="text-align: center;">Participate and Elect</h2><br>
    <p style="text-align: justify;"><b>Our fathers believed that if this noble view of the rights of man was to flourish, it must be rooted in democracy. The most basic right of all was the right to choose your own leaders. The history of this country, in large measure, is the history of the expansion of that right to all of our people.
</b></p>
  <p style="text-align: justify;"><b>Voting is both a privilege and a responsibility, and is a task that we should take seriously. Voting has real power, and many elections have been decided by a handful of votes. If we don’t seriously consider who we vote for, or if we decide to throw away our vote by voting informally (marking our ballot paper incorrectly), then we’re throwing away our opportunity to speak up and choose a candidate who speaks on our behalf in Parliament. Voting is important, and these activities will walk you through what you may want to consider as you vote in either elections at your school or in a Local, State, or Federal election.
The Constitution says that no person shall be kept from voting because of his race or his color. We have all sworn an oath before God to support and to defend that Constitution. We must now act in obedience to that oath.
</b></p>
</div></div>
<div class="col-md-4">
    <div class="agf">
<h3 style="text-align: center;">Improtant points to remember:</h3><br>
<ul>
<li>You have to first register before casting your vote.</li><br>
<li>On successful registration, go to the Login page and login using your voterID and Name.</li><br>
<li>Then, go to the voting page and vote for your favourite candidate.</li><br>
<li>Kindly fill the feedback form after casting your vote.</li></ul></div></div></div><br>
<div class="col-md-12">
       <center>
   <div class="w3-content w3-section" style="max-width:900px">
    <p class="mySlides"><b><i>"Voting is the expression of our commitment to ourselves, one another, this country, and this world."</i></b></p>
    <p class="mySlides"><b><i>"Talk is cheap, voting is free; take it to the polls."</i></b></p>
    <p class="mySlides"><b><i>"Democracy is about voting and it’s about a majority vote. And it’s time that we started exercising the Democratic process."</i></b></p>
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