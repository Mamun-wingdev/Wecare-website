<?php
session_start();

?>
<?php
include_once 'dbconnect.php';
if(isset($_POST['namecust'])){$name5 = $_POST['namecust'];}
if(isset($_POST['pass1'])){$pass5 = $_POST['pass1'];}
if(isset($_POST['sub2'])){$sub5 = $_POST['sub2'];}

?>
<?php
			
			if(isset($_POST["sub2"]) ) { // jkhn submit button a press korbo
			$query = "SELECT name,password FROM authority";   // ei operation ta chalabo  
			$result = mysqli_query($connection,$query);
			
				while ($row = mysqli_fetch_assoc($result)) {           // akta akta kore row porbe
					if($name5 == $row["name"] && $pass5 == $row["password"]) {  // jdi daoua name and password table er name ar password er shate match  
				          $_SESSION["name2"] = $name;
						header("location:authority.php"); // tahole ei page a jabo 
						
						exit; // o break korlam	
					}
				}
				
				$message = "Username and Password doesn't match!"; // jdi na kore akta meggase print korbo (niche function disi)
			}
			
?>
<?php
                if(isset($_POST["sub2"]) && isset($message)) {
					
					?>
                   <h2 style="color:#FC0339"><br><br><br><br> <?php
                    echo $message;	
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

<body style="background:#B8B3B3">
<div class="container" style="background:#E1D9DA">
<header class="page-header img-responsive" style="background: url(online-shopping.jpg); height:200px">
<h1 style=" font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif, 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-size:60px; color: #F40408" id="h1id1"><center>প্রয়োজন বি ডি</center></h1>
<h2 style="color: #FD7803"><center>একটি নির্ভরযোগ্য অনলাইন সার্ভিস প্রোভাইডার </center></h2>
</header>
<h1 style="color:#F8070B; font-size:50px"><center> এডমিন লগ ইন</center></h1>
<form class="form-horizontal" action="log3.php" method="post" style="margin-left:180px">
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

  
     
        		
</div>

<script src="Service pro 2/js/jquery-2.2.1.min.js"></script>
<script src="Service pro 2/js/bootstrap.min.js"></script>

</body>
</html>