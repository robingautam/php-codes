<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>welcome</title>
    <link rel="stylesheet" href="empstyle.css" >
    <style>
    
    
    </style>
</head>
<body>
    <div id="header">
    
    </div>
    <div class="wrapper"  >
<header class="clearfix" id="header">
    <div class="logo left">
    <h2>Cuts &amp; Curves </h2>
    </div>
        </header>
        <?php 
        if (isset($_SESSION['email'])){
            echo "<p ><a href='logout.php'>logout</a></p>";
        }
        else {
            echo "";
        }
        ?>
                

        <h1><?php if (isset($_SESSION['email'])){ echo "welcome ";  echo $_SESSION['name'];} else {
      echo "you need to login"; 
}    ?></h1>
    <br>
        <h2>Total Trainers in gym<h2/>
        <br><br>
        <?php  getemployee();  ?>
            <?php
            if (isset($_SESSION['email'])){
            echo "<h1>Enter the trainer name </h1><br>" ;
            
        echo "<form method='POST' action=''>
        <input type='hidden' name='user' value='".$_SESSION['email']."'>
		<input style='margin-left:30%;' type= 'text' width='300px' height='100px' placeholder='Trainer Name' name='text'><br><br>
		<input style='margin-left:30%; padding:10px 20px 10px 20px ' type='submit' name='post' value='Chose Trainer'>
	</form><br><br>";
            }
            else {
                
            }
        
        ?>
        
    </div>
        
    
    
    </body>
</html>