<?php
include_once 'dbconnect.php';
if(isset($_POST['name'])){$name = $_POST['name'];}
if(isset($_POST['fname'])){$fname = $_POST['fname'];}
if(isset($_POST['address'])){$address = $_POST['address'];}
if(isset($_POST['nid'])){$nid = $_POST['nid'];}
if(isset($_POST['no'])){$no = $_POST['no'];}
if(isset($_POST['exp'])){$exp = $_POST['exp'];}
if(isset($_POST['submit'])){$submit=$_POST['submit'];}
if(isset($_POST['elect'])){$elect = $_POST['elect'];}
if(isset($_POST['pan'])){$pan = $_POST['pan'];}
if(isset($_POST['bua'])){$bua = $_POST['bua'];}
if(isset($_POST['dvr'])){$dvr = $_POST['dvr'];}
if(isset($_POST['gurd'])){$gurd = $_POST['gurd'];}
if(isset($_POST['hdec'])){$hdec = $_POST['hdec'];}
if(isset($_POST['net'])){$net = $_POST['net'];}

if(isset($_POST['submit']) & isset($_POST['elect'] )){
	
		$insert= mysqli_query($connection,"INSERT INTO electician (name,fname,address,nid,no,exp) VALUES ('$name','$fname','$address','$nid','$no','$exp')");
		
		
		echo "<h1>Successfully Registered</h1>";
	
}
if(isset($_POST['submit']) & isset($_POST['pan'] )){
	
		$insert= mysqli_query($connection,"INSERT INTO painter (name,fname,address,nid,no,exp) VALUES ('$name','$fname','$address','$nid','$no','$exp')");
		echo "<h1>Successfully Registered</h1>";
	
}

if(isset($_POST['submit']) & isset($_POST['bua'] )){
	
		$insert= mysqli_query($connection,"INSERT INTO hwork (name,fname,address,nid,no,exp) VALUES ('$name','$fname','$address','$nid','$no','$exp')");
		echo "<h1>Successfully Registered</h1>";
	
}
if(isset($_POST['submit']) & isset($_POST['dvr'] )){
	
		$insert= mysqli_query($connection,"INSERT INTO driver (name,fname,address,nid,no,exp) VALUES ('$name','$fname','$address','$nid','$no','$exp')");
		echo "<h1>Successfully Registered</h1>";
	
}
if(isset($_POST['submit']) & isset($_POST['gurd'] )){
	
		$insert= mysqli_query($connection,"INSERT INTO gurd (name,fname,address,nid,no,exp) VALUES ('$name','$fname','$address','$nid','$no','$exp')");
		echo "<h1>Successfully Registered</h1>";
	
}
if(isset($_POST['submit']) & isset($_POST['hdec'] )){
	
		$insert= mysqli_query($connection,"INSERT INTO decorator (name,fname,address,nid,no,exp) VALUES ('$name','$fname','$address','$nid','$no','$exp')");
		echo "<h1>Successfully Registered</h1>";
	
}
if(isset($_POST['submit']) & isset($_POST['net'] )){
	
		$insert= mysqli_query($connection,"INSERT INTO network (name,fname,address,nid,no,exp) VALUES ('$name','$fname','$address','$nid','$no','$exp')");
		echo "<h1>Successfully Registered</h1>";
	
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
		
		if( (z.value== "" || y.value== "" || x.value=="" || w.value== ""||o.value==""||n.value=="")|| (v.checked==false&& u.checked==false &&t.checked== false&& s.checked==false&& r.checked==false&& q.checked==false&& p.checked==false)){
			
			alert('Please fill al the form');
			return false;
		 	}
			else{
			return true;	
			}
 }
 //....................................................................................................................
</script>
</head>

<body style="background:#C4BBBB">
<div class="container" style="margin-left:8%; margin-top:1%">
<header class="page-header img-responsive" style="background: url(online-shopping.jpg); height:auto">
<h1 style=" font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif, 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-size:60px; color: #F40408" id="h1id1"><center>প্রয়োজন বি ডি</center></h1>
<h2 style="color: #FD7803"><center>একটি নির্ভরযোগ্য অনলাইন সার্ভিস প্রোভাইডার </center></h2>
</header>

<form action="workerreg.php" method="post" onSubmit="return check()">
  
   <h2 style="margin-left:150px; margin-bottom:30px; color:#08036F; font-family: Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif; font-size:36px"><center>কর্মী রেজিস্ট্রেশন</center></h2>
  <div class="form-group">
     <label class="col-sm-2">Your Name :</label>
     
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Your name" style="width:40%" id="a" name="name" >
      <p id="345" style="display:none; color:#F81216">HINTS: You must put your National ID Name.</p>
    </div>
    
  </div>
  
    <div class="form-group">
     <label  class="col-sm-2">Father's Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  placeholder="Father's name" style="width:40%" id="b" name="fname">
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
   
   
   
   
   
   
   <h3>Qualification :</h3>
<div class="checkbox">
  <label>
    <input type="checkbox" value="" id="e" name="elect">
   Electrician
  </label>
</div>
<div class="checkbox">
  <label>
    <input type="checkbox" value="" id="f" name="pan" >
    Painter
  </label>
</div>

<div class="checkbox">
  <label>
    <input type="checkbox" value="" id="g" name="bua">
  Home assistance
  </label>
</div>
<div class="checkbox">
  <label>
    <input type="checkbox" value="" id="h" name="dvr">
  Driver
  </label>
</div>
<div class="checkbox">
  <label>
    <input type="checkbox" value="" id="i" name="gurd">
   Security guard
  </label>
</div>
<div class="checkbox">
  <label>
    <input type="checkbox" value="" id="j" name="hdec">
   Home decorator
  </label>
</div>
<div class="checkbox">
  <label>
    <input type="checkbox" value="" id="k" name="net">
  Network
  </label>
</div>
 
 <div class="form-group">
     <label class="col-sm-2">Contact no:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Mobile No" style="width:40%" id="l" name="no">
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-2 control-label">Do you want to go to abroad ?</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  placeholder="Yes/No" style="width:40%" id="m" name="exp">
    </div>
  </div>

   <input type="submit" class="btn btn-group-lg" value="Submit" name="submit" style="margin-left:20%; margin-top:2%" />
   <hr>
  
 </form>
</div> <!--................................................................................>>>>>>>>>> container-->



<script src="Service pro 2/js/jquery-2.2.1.min.js"></script>
<script src="Service pro 2/js/f2script.js"></script>
<script src="Service pro 2/js/bootstrap.min.js"></script>
</body>
</html>
