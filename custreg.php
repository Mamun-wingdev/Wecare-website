<?php
include_once 'dbconnect.php';
if(isset($_POST['name'])){$name = $_POST['name'];}

if(isset($_POST['address'])){$address = $_POST['address'];}
if(isset($_POST['nid'])){$nid = $_POST['nid'];}
if(isset($_POST['email'])){$email = $_POST['email'];}
if(isset($_POST['pass'])){$pass = $_POST['pass'];}
if(isset($_POST['submit'])){$submit=$_POST['submit'];}



// ekhn a operation gula hbe 
// jemon $a = $nid +2; 
//  tkhn insert query te $nid er jay gay $a dibi



if(isset($_POST['submit'])){      
	
		$insert= mysqli_query($connection,"INSERT INTO customer (name,address,nid,email,password) VALUES ('$name','$address','$nid','$email','$pass')");
		
		echo "<h1>SUCCESSFULLY REGISTERED</h1>";
	
}

 



?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="Service pro 2/css/bootstrap.min.css" rel="stylesheet" type="text/css" >
<link href="Service pro 2/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
//............... Javascript function to varify that all the option in the form is filled properly......................
 function check(){
	 var z= document.getElementById('a');
	  var y= document.getElementById('b');
	   var x= document.getElementById('c');
	    var w= document.getElementById('d');
		 var v= document.getElementById('e');
		  var u= document.getElementById('f');
		   var t= document.getElementById('g');
		    var s= document.getElementById('h');
			 var r= document.getElementById('i');
			  var q= document.getElementById('j');
			   var p= document.getElementById('k');
			    var o= document.getElementById('l');
				 var n= document.getElementById('m');
		
		if( z.value== "" || x.value=="" || w.value== ""||o.value==""||n.value==""){
			
			alert('Please fill al the form');
			return false;
		 	}
			else{
			return true;	
			}
 }
 
  function checkEmail(){
	 
    var email = document.getElementById('l');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(email.value)) {
    alert('Please provide a valid email address');
    email.focus;
    return false;
 }
	 
 }
 //....................................................................................................................
</script>
</head>

<body style="background:#D4CFCF">
<div class="container" style="margin-left:7%; margin-top:2%;">
 
<header class="page-header img-responsive" style="background: url(online-shopping.jpg); height:auto">
<h1 style=" font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif, 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-size:60px; color: #F40408" id="h1id1"><center>প্রয়োজন বি ডি</center></h1>
<h2 style="color: #FD7803"><center>একটি নির্ভরযোগ্য অনলাইন সার্ভিস প্রোভাইডার </center></h2>
</header>

<form action="custreg.php" method="post" onsubmit="return (check() && checkEmail())">
  
   <h2 style="margin-left:150px; margin-bottom:30px; color:#08036F; font-family: Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif; font-size:36px">গ্রাহক রেজিস্ট্রেশন</h2>
  <div class="form-group">
     <label class="col-sm-2">Your Name :</label>
     
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Your name" style="width:40%" id="a" name="name" >
      <p id="345" style="display:none; color:#F81216">HINTS: You must put your National ID Name.</p>
    </div>
    
  </div>
  
 
  
  <div class="form-group">
     <label  class="col-sm-2">Address:</label>
    <div class="col-sm-10">
      <textarea class="form-control" rows="2" style="width:40%" id="c" name="address"></textarea>
       <p id="346" style="display:none; color:#F81216">HINTS: Your present address.</p>
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2" >National ID</label>
    
    <div class="col-sm-10" >
      <input type="text" class="form-control"  style="width:40%" id="d" name="nid">
    </div>
   </div>
   
   
   
   
   
   
  
 <div class="form-group">
     <label class="col-sm-2">Your Email id:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" placeholder="Your name" style="width:40%" id="l" name="email">
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control"  placeholder="Password" style="width:40%" id="m" name="pass">
    </div>
  </div>

   <input type="submit" class="btn btn-group-lg" value="Submit" name="submit" style="margin-left:300px; margin-top:20px" />
  
 </form>
 
 
 
</div> <!--................................................................................>>>>>>>>>> container-->



<script src="Service pro 2/js/jquery-2.2.1.min.js"></script>
<script src="Service pro 2/js/f2script.js"></script>
<script src="Service pro 2/js/bootstrap.min.js"></script>
</body>
</html>
