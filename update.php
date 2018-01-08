<?php session_start();  ?>
<?php 

include_once 'dbconnect.php';


if (mysqli_connect_errno()){
	die("Database connection failed: ".mysqli_connect_errno()."(".mysqli_connect_errno().")");
}
?>
<?php
	if(isset($_POST["submit"])) {
		$names=  $_SESSION["name1"]; 
		$pass = $_POST["pass"];
		$address = $_POST["address"];
		$email=$_POST["email"];
		
		$query = "UPDATE customer SET address='$address',password='$pass',email='$email' WHERE name='$names'";
		$result = mysqli_query($connection,$query);
		header("location:profile.php");
	}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="Service pro 2/css/bootstrap.min.css" rel="stylesheet" type="text/css" >
<link href="Service pro 2/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">

</head>

<body style="background:#D4CFCF">
<div class="container" style="margin-left:110px;  background:#F4F0F0; margin-right:100px">
<header class="page-header img-responsive" style="background: url(online-shopping.jpg); height:200px">
<h1 style=" font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif, 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-size:60px; color: #F40408" id="h1id1"><center>প্রয়োজন বি ডি</center></h1>
<h2 style="color: #FD7803"><center>একটি নির্ভরযোগ্য অনলাইন সার্ভিস প্রোভাইডার </center></h2>
</header>

<form action="update.php" method="post" >
  
   <h2 style="margin-left:150px; margin-bottom:30px; color:#08036F; font-family: Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif; font-size:36px">আপনার তথ্য আপডেট করুন</h2>
   <hr>
  <div class="form-group">
     <label  class="col-sm-2">Address:</label>
    <div class="col-sm-10">
      <textarea class="form-control" rows="2" style="width:400px" id="c" name="address"></textarea>
       <p id="346" style="display:none; color:#F81216">HINTS: Your present address.</p>
    </div>
  </div> 
   <div class="form-group">
     <label class="col-sm-2">Your Email id:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" placeholder="Your name" style="width:400px" id="l" name="email">
    </div>
  </div> 
  <div class="form-group">
    <label  class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control"  placeholder="Password" style="width:400px" id="m" name="pass">
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
