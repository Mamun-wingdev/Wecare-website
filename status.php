<?php
include_once 'dbconnect.php';
if(isset($_POST['p3'])){$p3 = $_POST['p3'];}

if(isset($_POST['p2'])){$p2 = $_POST['p2'];}
if(isset($_POST['p1'])){$p1 = $_POST['p1'];}

if(isset($_POST['p1'])){      
	// "UPDATE wants SET status='$p2' WHERE id='$p3'"
		$insert= mysqli_query($connection,"UPDATE wants SET status='$p2' WHERE id='$p3'");
		
		echo "<h1>SUCCESSFUL</h1>";
	
}

 



?>