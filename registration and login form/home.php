<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:index.php');
    
}





    ?>


<html>
<head>
<title> Home Page </title> 
    

      <link rel="stylesheet" href="css/style.css">
    
    
</head>
<body>
    
    
    <div class="container">
       
    <a href="logout.php"> LOGOUT </a>
<h1> WELCOME <?php echo $_SESSION['username']; ?> </h1>
        
        
        </div>
</body>
      
      
      
      
      
      
</html>