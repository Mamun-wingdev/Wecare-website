<?php
session_start();
session_destroy();
?>
<?php
include_once 'dbconnect.php';
if(isset($_POST['namecust'])){$name5 = $_POST['namecust'];}
if(isset($_POST['pass1'])){$pass5 = $_POST['pass1'];}
if(isset($_POST['sub2'])){$sub5 = $_POST['sub2'];}

?>
<?php
			
			if(isset($_POST["sub2"]) ) { // jkhn submit button a press korbo
			$query = "SELECT name,password FROM customer";   // ei operation ta chalabo  
			$result = mysqli_query($connection,$query);
			
				while ($row = mysqli_fetch_assoc($result)) {           // akta akta kore row porbe
					if($name5 == $row["name"] && $pass5 == $row["password"]) {  // jdi daoua name and password table er name ar password er shate match  
				
						header("location: procedure.html"); // tahole ei page a jabo 
						
						exit; // o break korlam	
					}
				}
				
				$message = "Username and Password doesn't match!"; // jdi na kore akta meggase print korbo (niche function disi)
			}
			
?>
<?php
                if(isset($_POST["sub2"]) && isset($message)) {
                    echo $message;	
                }
        ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>form</title>
<link href="Service pro 2/css/bootstrap.min.css" rel="stylesheet" type="text/css" >
<link href="Service pro 2/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
<script type="text/javascript">

alert('LOG IN FIRST');

</script>
</head>

<body class="img-responsive" style=" margin-left:100px; margin-right:100px; margin-top:100px; background: url(LogoWeCareFinal.png); background-repeat:no-repeat; background-color: #C7C1C1">

<div class="container" >
<h3 style="color: #0E0767; font-family:Consolas, 'Andale Mono', 'Lucida Console', 'Lucida Sans Typewriter', Monaco, 'Courier New', monospace; font-size:60px"><center>Service provider.</center></h3>
<h3 style="color: #5E6EEF; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif"><center>Login first to get our services.<br>
If you don't have an account please register 1st.<br><br></center>

</h3>
<form class="form-horizontal" action="log2.php" method="post" style="margin-left:180px">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label"> <p style="color: #071E5E; font-size:16px"> Name: </p></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Customer name" name="namecust" style="width:400px">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label"> <p style="color: #08176F; font-size:16px"> Password</p></label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="pass1" style="width:400px">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" name="sub2">Sign in</button>
    </div>
  </div>
</form>

  
     
        		


<script src="Service pro 2/js/jquery-2.2.1.min.js"></script>
<script src="Service pro 2/js/bootstrap.min.js"></script>

</body>
</html>