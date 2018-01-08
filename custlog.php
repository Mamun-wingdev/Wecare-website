<?php
session_start();

?>
<?php
include_once 'dbconnect.php';
if(isset($_POST['name'])){$name = $_POST['name'];}
if(isset($_POST['pass'])){$pass = $_POST['pass'];}
if(isset($_POST['sub'])){$sub = $_POST['sub'];}

?>
<?php
			
			if(isset($_POST["sub"]) ) { // jkhn submit button a press korbo
			$query = "SELECT name,password FROM customer";   // ei operation ta chalabo  
			$result = mysqli_query($connection,$query);
			
				while ($row = mysqli_fetch_assoc($result)) {           // akta akta kore row porbe
					if($name == $row["name"] && $pass == $row["password"]) {  // jdi daoua name and password table er name ar password er shate match  
					
				        $_SESSION["name1"] = $name;
						header("location:index.php"); // tahole ei page a jabo 
						
					    exit; // o break korlam	
					}
				}
				
				$message = "Username and Password doesn't match!"; // jdi na kore akta meggase print korbo (niche function disi)
			}
			
?>
<?php
                if(isset($_POST["sub"]) && isset($message)) {
					?>
                  <h2 style="color:#FD0509"> <?php  echo $message;	
                }
        ?></h2>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>form</title>
<link href="Service pro 2/css/bootstrap.min.css" rel="stylesheet" type="text/css" >
<link href="Service pro 2/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
<script type="text/javascript">



</script>
</head>

<body class="img-responsive" style=" margin-left:100px; margin-right:100px; margin-top:100px; background: #C7C2C2;">

<div class="container" style="background: url(Security-Central-Care-Web-Photos1.png); background-repeat: no-repeat; background-size:contain" >
<h2 style="color: #0E0767; font-family:Consolas, 'Andale Mono', 'Lucida Console', 'Lucida Sans Typewriter', Monaco, 'Courier New', monospace; font-size:60px"><center>প্রয়োজন বি ডি<br>গ্রাহক প্রোফাইল</center></h2>
<h3 style="color:#DD3F41; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif"><center>আপনার প্রোফাইল দেখতে লগ ইন করুন।<br>
</center>

</h3>
<form class="form-horizontal" action="custlog.php" method="post" style="margin-left:180px">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label"> <p style="color: #071E5E; font-size:16px"> নামঃ</p></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Customer name" name="name" style="width:400px">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label"> <p style="color: #08176F; font-size:16px">পাসওয়ার্ডঃ</p></label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="pass" style="width:400px">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" name="sub">Sign in</button>
    </div>
  </div>
</form>

  
     
        		


<script src="Service pro 2/js/jquery-2.2.1.min.js"></script>
<script src="Service pro 2/js/bootstrap.min.js"></script>

</body>
</html>