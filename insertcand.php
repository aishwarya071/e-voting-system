<?php
    include_once 'db.php';
    if(isset($_POST['saved'])) 
    {
        $a=$_POST['username'];  
        $b=$_POST['pwd'];  
        $c=$_POST['address'];  
        $d=$_POST['party']; 
        $e=$_POST['gender'];  
        $q=$_POST['state']; 
        
        $s="INSERT INTO candidate(Name,CID,Address,State,Party,gender) VALUES('$a','$b','$c','$q','$d', '$e')"; 
        
        if (mysqli_query($conn, $s)) { 
            echo "New record created successfully !";
         } else {
            echo "Error: ";
         }
        
         mysqli_close($conn);
        
    }
   