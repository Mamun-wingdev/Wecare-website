<?php session_start();  ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="Service pro 2/css/bootstrap.min.css" rel="stylesheet" type="text/css" >
<link href="Service pro 2/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">

</head>

<body style="background: #CDC3C3" >
<div class="container" style="margin-left:7%; background:#F1EAEA; height:auto">
 <header class="page-header img-responsive" style="background: url(online-shopping.jpg); height:auto">
<h1 style=" font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif, 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-size:60px; color: #F40408" id="h1id1"><center>প্রয়োজন বি ডি</center></h1>
<h2 style="color: #FD7803"><center>একটি নির্ভরযোগ্য অনলাইন সার্ভিস প্রোভাইডার </center></h2>
</header>
<h1 style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif; color:#3017D4"><center>কর্তৃপক্ষ প্যানেল</center></h1>
<?php if(!empty($_SESSION)) { ?>
<a class="btn btn-danger btn-md pull-right" href="out2.php">লগ আউট</a>


<?php } ?>
<div class="row">

<div class="col-lg-6">
<h2><center>গ্রাহক তথ্য</center></h2>
 <a class="btn btn-block btn-success" href="admin1.php" style="margin-bottom:10px; font-size:20px "><strong>নিবন্ধনকত গ্রাহক সমূহ</strong></a>
 <h2><center>সার্ভিস এর জন্য আবেদন সমূহ</center></h2>
  <a class="btn btn-block btn-primary" href="ad7.php" style="margin-bottom:10px; font-size:20px "><strong>কাজের বুয়া এর জন্য আবেদন</strong></a>
   <a class="btn btn-block btn-success" href="ad6.php" style="margin-bottom:10px; font-size:20px "><strong>ড্রাইভার এর জন্য আবেদন</strong></a>
    <a class="btn btn-block btn-success" href="admin2.php" style="margin-bottom:10px; font-size:20px "><strong>গার্ড এর জন্য আবেদন</strong></a>
     <a class="btn btn-block btn-success" href="ad8.php" style="margin-bottom:10px; font-size:20px "><strong>হোম ডেকোরেট 
     এর জন্য আবেদন</strong></a>
      <a class="btn btn-block btn-success" href="ad5.php" style="margin-bottom:10px; font-size:20px "><strong>ইন্টারনেট সেবা 
      এর জন্য আবেদন</strong></a>
       <a class="btn btn-block btn-success" href="ad4.php" style="margin-bottom:10px; font-size:20px "><strong>রঙ মিস্ত্রী  
       এর জন্য আবেদন</strong></a>
           <a class="btn btn-block btn-success" href="ad3.php" style="margin-bottom:10px; font-size:20px "><strong>ইলেক্ট্রেসান
           এর জন্য আবেদন</strong></a>

</div>


<div class="col-lg-6">
<h2><center>কর্মী তথ্য</center></h2>
  <a class="btn btn-block btn-info" href="infohw.php" style="margin-bottom:10px; font-size:20px "><strong>কাজের বুয়া কর্মী তথ্য</strong></a>
   <a class="btn btn-block btn-info" href="infodr.php" style="margin-bottom:10px; font-size:20px "><strong>ড্রাইভার কর্মী তথ্য </strong></a>
    <a class="btn btn-block btn-info" href="infogd.php" style="margin-bottom:10px; font-size:20px "><strong>গার্ড গ্রাহক
    কর্মী তথ্য</strong></a>
     <a class="btn btn-block btn-info" href="infodr.php" style="margin-bottom:10px; font-size:20px "><strong>হোম ডেকোরেট</strong></a>
      <a class="btn btn-block btn-info" href="infonet.php" style="margin-bottom:10px; font-size:20px "><strong>ইন্টারনেট সেবা কর্মী তথ্য
      </strong></a>
       <a class="btn btn-block btn-info" href="infopr.php" style="margin-bottom:10px; font-size:20px "><strong>রঙ মিস্ত্রী কর্মী তথ্য 
      </strong></a>
       <a class="btn btn-block btn-info" href="infoel.php" style="margin-bottom:10px; font-size:20px "><strong>ইলেক্ট্রেসিয়ান কর্মী তথ্য</strong></a>
</div>

</div>








</div>


<script src="Service pro 2/js/jquery-2.2.1.min.js"></script>
<script src="Service pro 2/js/bootstrap.min.js"></script>
</body>
</html>