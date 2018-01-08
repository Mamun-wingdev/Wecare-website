<?php session_start(); ?>
<?php
include_once 'dbconnect.php';
if (mysqli_connect_errno()){
	die("Database connection failed: ".mysqli_connect_errno()."(".mysqli_connect_errno().")");
}


if(isset($_POST['done'])){$done = $_POST['done'];}
  $nam=  $_SESSION["name5"];
  echo "$nam";
  
if(isset($_POST["done"]) ) { 
$query="DELETE FROM wants WHERE name='$nam'";
$result= mysqli_query($connection,$query);   
if(!$result){die("Database query failed");}  

}


?>