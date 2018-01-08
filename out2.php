<?php 
 session_start();
  $_SESSION["name2"] = NULL;
 
if(!$_SESSION["name2"]){
	
	
header("location:index.php");	
	
	
	
}

session_destroy();


?>