
<html>
   
   <head>
      
         <title>Login Page</title>
      
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <style>
           
           .para1{
               text-align: center;
           }
           input{
           border-radius:35px;
           font-family: FontAwesome;
           padding-left: 18px;
           width: 75%;
           }
           input[type=submit]{
             padding-left: 5px;
             width:25%;
             background: #FDB750;
             font-weight: bold;
           }
       </style>
   
     <style type = "text/css">

        body {
           font-family:Arial, Helvetica, sans-serif;
           font-size:14px;
        }
     
        .ping {
  margin-left:auto;
  margin-right:auto;
  width: 45%;
 
}
.bon{
   border-style: double;
 width:50%;
 border-color: #333300;
}
.row1{
  margin-left:auto;
  margin-right:auto;
  width: 5%;
  
}
.fontuser { 
           position: relative; 
       } 
         
       .fontuser i{ 
           position: relative; 
           
           color: gray; 
       } 
         
       .fontpassword { 
           position: relative; 
       } 
         
       .fontpassword i{ 
           position: relative; 
           
           color: gray; 
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
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Login
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item active" href="voterlogin.php">Voter Login</a>
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
  
        <div class="container-fluid">
        <div class="col-md-12">
        <div class="text-center">
           <center>
        <div class="bon">
            <br>
            <div class="row row1">
               <span class="fa fa-user-circle fa-3x"></span>
               <h5>Login</h5></div><br>

            <div>
         
               
               <form method = "post" action="voterlog.php" class="ping" style="display: block;"
               >
               <div class="fontuser">
                  <i class="fa fa-user" style="position: absolute; padding-left: 5px; padding-top: 5px;"></i>
                  <input type = "text" name = "username" placeholder="Firstname"><br /><br /></div>
                  <div class="fontpassword">
               <i class="fa fa-key" style="position: absolute; padding-left: 5px; padding-top: 5px;"></i>
                  <input type = "password" name = "password" placeholder="Password"><br/><br /></div>
                  <input type = "submit" value = " Submit " name="submit"><br >
               </form>
               
      </center>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>


