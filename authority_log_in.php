
<?php
include_once 'dbconnect.php';
if(isset($_POST['em'])){$em = $_POST['em']; echo $em;}
if(isset($_POST['ps'])){$ps = $_POST['ps']; echo $ps;}
if(isset($_POST['sb'])){$sb = $_POST['sb'];}

?>
<?php
			
			if(isset($_POST["sb"]) ) { // jkhn submit button a press korbo
			$query = "SELECT name,password FROM civilmember";   // ei operation ta chalabo  
			$result = mysqli_query($connection,$query);
			
				while ($row = mysqli_fetch_assoc($result)) {           // akta akta kore row porbe
					if($em == $row["name"] && $ps == $row["password"]) {  // jdi daoua name and password table er name ar password er shate match  
				         
						header("location:Book_rangamati.php"); // tahole ei page a jabo 
						
						exit; // o break korlam	
					}
				}
				
				$message = "Username and Password doesn't match!"; // jdi na kore akta meggase print korbo (niche function disi)
			}
			
?>
<?php
                if(isset($_POST["sb"]) && isset($message)) {
					
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
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript">

</script>
</head>

<body style="background:url(background-1134468_960_720.jpg) fixed;">
<div class="row jumbotron img-rounded" style=" margin:10%">
<h1 style="text-align:center; font-family:Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif">MEMBER LOGIN</h1>
<center><form action="" method="post" style="margin-left:2%">
  <div class="form-group">
    <label for="email">User name:</label>
    <input type="text" class="form-control" id="email" name="em" style="width:40%">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" name="ps"  style="width:40%">
  </div>
 
  <button type="submit" class="btn btn-default" name="sb">Submit</button>
</form></center>
  </div>
     

<script src="jquery-2.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>