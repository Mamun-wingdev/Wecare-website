<?php
// Start the session
session_start();
?>
<?php 

include_once 'dbconnect.php';


if (mysqli_connect_errno()){
	die("Database connection failed: ".mysqli_connect_errno()."(".mysqli_connect_errno().")");
}
?>
<?php
$query= "select * from customer";             
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

<body style=" background:#D3CECF">


<center><div class="container" style="margin-left:100px">
<header class="page-header img-responsive" style="background: url(online-shopping.jpg); height:200px">
<h1 style=" font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif, 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-size:60px; color: #F40408" id="h1id1"><center>প্রয়োজন বি ডি</center></h1>
<h2 style="color: #FD7803"><center>একটি নির্ভরযোগ্য অনলাইন সার্ভিস প্রোভাইডার </center></h2>
</header>
<h1 style="font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif"><center>গ্রাহক প্রোফাইল</center></h1>
<a class="btn btn-danger pull-right" href="update.php">পরিবর্তন করুন</a><br>
<div class="row">
<div class="col-lg-3">
<?php
  $name=  $_SESSION["name1"];  
		$query= mysqli_query($connection,"select * from customer");
		while($row=mysqli_fetch_object($query)){ 
		
		 if( $row->name==$name){
		?>
        
        
        <img class=" img-rounded" style="width:300px; height:300px" src="<?php echo 'upload/'.$row->image_name; ?>">
        
<?php
		 }
		}
?>
</div>
<div class="col-lg-9 pull-left">

<?php
       // custlog page er variable ta ei page onno akta variable a nilam 
  
while($subject=mysqli_fetch_assoc($result)){ 

      if( $subject["name"]==$name){         // jdi row theke je name ta paisi r jeta form a disi aki hoy
?>


<div class="row">
<div class="col-lg-6" >
<h2 style="color: #230894">CUSTOMER NAME:</h2>
</div>
<div class="col-lg-6">
<h2><?php	 echo $subject["name"];?><br></h2>
</div>
</div>

<div class="row">
<div class="col-lg-6">
<h2 style="color: #230894">NATIONAL ID:</h2>
</div>
<div class="col-lg-6">
<h2><?php	 echo $subject["nid"];?></h2><br>
</div>
</div>


<div class="row">
<div class="col-lg-6">
<h2 style="color: #230894">ADDRESS:</h2>
</div>
<div class="col-lg-6">
<h2><?php	 echo $subject["address"];?></h2><br>
</div>
</div>


<div class="row">
<div class="col-lg-6">
<h2 style="color: #230894">EMAIL:</h2>
</div>
<div class="col-lg-6">
<h2><?php	 echo $subject["email"];?></h2><br>
</div>
</div>


<?php
//session_destroy();
	  }
};                                            

?>
</div>
</div>
<div class="row" style="height:210px;  margin-right:10px; margin-left:10px;  margin-top:30px; background: #8F8889; color:#F8F2F2 " >

 <div class="col-lg-6 mok" style="height:240px ">
<h2>আমাদের তথ্য</h2>
<p>
 যারা ঘরে বসে পরিবারের জন্য  সেবা খুঁজছেন ,সেই ব্যক্তিদের সাথে সংযোগ করার জন্য WE CARE  শীর্ষ মানের  নেতৃস্থানীয় প্ল্যাটফর্ম তৈরি করে। 60 সেকেন্ডের বুকিং প্রক্রিয়া , সুরক্ষিত পেমেন্ট , এবং একটি 100% টাকা ফেরত গ্যারান্টি দিয়ে , WE CARE   সবচেয়ে সুবিধাজনক বাড়িতে সেবা বুক উপায়।আমরা যত্ন সারমর্ম মানুষের সবচেয়ে প্রাকৃতিক অভিব্যক্তি - ভালবাসা থেকে. নারীর জীবন সহজ এবং সহজ করার সিদ্ধান্ত নিয়েছে WE CARE  . পুরুষদের সারাদিন ঘর থেকে বাহিরে থাকতে হয় , তাদের স্ত্রীদের সব তালিকা অনুসন্ধান করে সমস্যা সমাধান করতে হয় । বাংলাদেশে সক্ষম , দক্ষ ও খরচ কার্যকর তালিকা অনুসন্ধান পেয়ে কঠিন হয়না WE CARE  এর জন্য.


</div>
<div class="col-lg-6 mok" style="height:240px">
 <h2>কেন প্রয়োজন বিডি সেরা?</h2>
 <p>ব্যকগ্রাঊন্ড চেক্ট <br>
আমাদের সবাই নিজ নিজ কাজে দক্ষ এবং অবিজ্ঞ ,যাদের প্রেক্ষাপট অত্যন্ত সতরকতার সাথে বাচাই করা হয় আমাদের কাস্টমারের <br>
 অভিজ্ঞ ব্যক্তি<br>
আমাদের লোকজন অত্যন্ত দক্ষতা এবং সতর্কতার সহিত কাজ করে<br>
মানি ব্যাক গ্যারান্টি <br>
আমরা সবসময় কাস্টমার সার্ভিস নিয়ে সচেতন এবং চেষ্টা করি যেন দ্রুত সবচেয়ে ভাল সার্ভিস দিতে পারি। আমরা সবসময় আমাদের কাস্টমার এর সাথে সকল ধরনের লেনদেনের ক্ষেত্রে স্বচ্ছ


</p>

</div>



</div>
</div>


</body>
</html>