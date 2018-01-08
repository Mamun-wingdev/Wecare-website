<?php session_start(); ?>
<?php 

include_once 'dbconnect.php';


if (mysqli_connect_errno()){
	die("Database connection failed: ".mysqli_connect_errno()."(".mysqli_connect_errno().")");
}
?>
<?php
$query= "select * from wants where type='guard'";             
$result= mysqli_query($connection,$query);   
if(!$result){die("Database query failed");}  



?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="Service pro 2/css/bootstrap.min.css" rel="stylesheet" type="text/css">

</head>

<body style="background: #A7A3A4">

<div class="container" style=" background:#EBE7E7;margin-left:100px;">
<header class="page-header img-responsive" style="background: url(online-shopping.jpg); height:200px">
<h1 style=" font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif, 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-size:60px; color: #F40408" id="h1id1"><center>প্রয়োজন বি ডি</center></h1>
<h2 style="color: #FD7803"><center>একটি নির্ভরযোগ্য অনলাইন সার্ভিস প্রোভাইডার </center></h2>
</header>
<h1 style="text-decoration:underline"><center>সিকিঊরিটি গার্ড এর গ্রাহক সমূহঃ</center></h1>
<?php
        // custlog page er variable ta ei page onno akta variable a nilam 
 $a=1;
while($subject=mysqli_fetch_assoc($result)){ 

               // jdi row theke je name ta paisi r jeta form a disi aki hoy
?>
 
 <h4 style=" margin:20px;">
 <br>
 <center> Serial no: <?php echo $a; ?><br><br></center>
  NAME:     <?php	echo $subject["name"];?> <br>  <br> 
  CONTACT NO:      <?php	 echo $subject["contact"];?> <br><br> 
  ADDRESS:      <?php echo $subject["address"];?><br> <br>  
  SERVICE DATE:     <?php	 echo $subject["date"];?><br>  <br> 
  SERVICE TIME:     <?php	 echo $subject["time"];?><br> <br> 
  <form action="del.php" method="post">
 
  <input class="pull-right" type="submit" value="Done" name="done">
 
  </form>
   <hr> 
 </h4>   
<hr>          	
<?php
$a++;
	  
};                                            

?>

</div>


</body>
</html>