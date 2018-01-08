<?php 
include_once 'dbconnect.php';


if (mysqli_connect_errno()){
	die("Database connection failed: ".mysqli_connect_errno()."(".mysqli_connect_errno().")");
}
?>
<?php
$query= "select * from electician";             
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

<body style="background:#D8D1D2" >

<div class="container" style="background:#EDE6E6">
 
<hr>
<header class="page-header img-responsive" style="background: url(online-shopping.jpg); height:200px">
<h1 style=" font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif, 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-size:60px; color: #F40408" id="h1id1"><center>প্রয়োজন বি ডি</center></h1>
<h2 style="color: #FD7803"><center>একটি নির্ভরযোগ্য অনলাইন সার্ভিস প্রোভাইডার </center></h2>
</header>
<h1 ><center> ইলেক্ট্রিসিয়ান ইনফরমেশন</center></h1>
<?php
        // custlog page er variable ta ei page onno akta variable a nilam 
 $a=1;
while($subject=mysqli_fetch_assoc($result)){ 

               // jdi row theke je name ta paisi r jeta form a disi aki hoy
?>
 
 <h4 >
 <br>
 <center> Serial no: <?php echo $a; ?><br><br></center>
  NAME:     <?php	echo $subject["name"];?> <br>  <br> 
  FATHER's NAME:      <?php	 echo $subject["fname"];?> <br><br> 
  ADDRESS:      <?php echo $subject["address"];?><br> <br>  
  NATIONAL ID:     <?php	 echo $subject["nid"];?><br>  <br> 
  CONTACT NO:     <?php	 echo $subject["no"];?><br> <br>  
  EXPERIENCE:     <?php	 echo $subject["exp"];?><br> <br>  
   <hr> 
 </h4>   
          	
<?php
$a++;
	  
};                                            

?>
<hr>
</div>


</body>
</html>