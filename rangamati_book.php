<?php
$connection=mysqli_connect("localhost","root","mamun","militravel");
if(isset($_POST['name'])){$name = $_POST['name'];}
if(isset($_POST['email'])){$email = $_POST['email'];}
if(isset($_POST['address'])){$address = $_POST['address'];}
if(isset($_POST['avr'])){$avr = $_POST['avr'];}
if(isset($_POST['br'])){$br = $_POST['br'];}
if(isset($_POST['gvr'])){$gvr = $_POST['gvr'];}
if(isset($_POST['sr'])){$sr = $_POST['sr'];}
if(isset($_POST['cin'])){$cin = $_POST['cin'];}
if(isset($_POST['cout'])){$cout = $_POST['cout'];}
if(isset($_POST['submit'])){$submit=$_POST['submit'];}

if(isset($_POST['submit']) & isset($_POST['avr'] )){
	
		$insert= mysqli_query($connection,"INSERT INTO r_rangamati_aronnok (name,address,email,room_type,ch_in,ch_out) VALUES ('$name','$address','$email','$sr','$cin','$cout')");
		
		
		echo "<h1>Successfully Registered</h1>";
	
}










?>