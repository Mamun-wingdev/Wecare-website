<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<title>We care </title>
<link href="Service pro 2/css/bootstrap.min.css" rel="stylesheet" type="text/css" >
<link href="Service pro 2/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">

<link href="b.css" rel="stylesheet">


</head>

<body>


<div class="container img-responsive" style=" margin-top:-10px">
 
 
 <header class="page-header img-responsive" style="background: url(online-shopping.jpg);height:200px">
 <div class="container">
<h1 style=" margin-left:50px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif, 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-size:60px; color: #F8EBEC" id="h1id1"><center>প্রয়োজন</center></h1>
<h2 style="color: #FD7803"><center>একটি নির্ভরযোগ্য অনলাইন সার্ভিস প্রোভাইডার </center></h2>
</div>
</header>

<?php if(empty($_SESSION)) { ?>
<div class="container">
<div class="row pull-right" style="margin-top:-15px; margin-bottom:5px; margin-right:0px">
<div class="btn-group">
    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" style="margin-right:0px; font-size:20px">
    রেজিস্ট্রেশন<span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="test.php">গ্রাহক রেজিস্ট্রেশন</a></li>
      <li><a href="workerreg.php">কর্মী রেজিস্ট্রেশন</a></li>
    </ul>
  </div>
<div class="btn-group">
  <a class="btn btn-danger btn-md pull-right" style="margin-right:5px; font-size:20px" href="custlog.php">গ্রাহক লগ ইন</a>
  </div>
<div class="btn-group">
  <a class="btn btn-danger btn-md pull-right" style="margin-right:5px; font-size:20px" href="log3.php">আডমিন প্যানেল</a>
  </div>
</div>
</div>

<?php } ?>

<?php if(!empty($_SESSION)) { ?>
<a class="btn btn-danger btn-md pull-right" href="logout.php">লগ আউট</a>
<a class="btn btn-danger btn-md pull-right" href="profile.php" style="margin-right:20px; margin-bottom:20px">প্রোফাইল</a>

<?php } ?>
<div class="container">
<div class="row" style="height:500px">

<div class=" table-bordered col-lg-3 col-sm-3 col-md-3 col-xs-3" >

     <h1 style="font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; color:#6E0709" ><center>আমাদের সেবাসমূহ</center></h1> 
    <a class="btn btn-block btn-warning" href="z1.php" style="margin-bottom:10px; font-size:20px "><strong>কাজের বুয়া</strong></a>
    <a class="btn btn-block  btn-warning" href="z2.php" style="margin-bottom:10px ;font-size:20px"><strong>ড্রাইভার</strong></a>
    <a class="btn btn-block  btn-warning" href="z4.php" style="margin-bottom:10px ;font-size:20px"><strong>সিকিঊরিটী গার্ড</strong></a>
    <a class="btn btn-block btn-warning" href="homedec.php" style="margin-bottom:10px ;font-size:20px"><strong>হোম ডেকোরেটর</strong></a>
    <a class="btn btn-block  btn-warning" href="z3.php" style="margin-bottom:10px ;font-size:20px"><strong>ইন্টারনেট সেবা</strong></a>
     <a class="btn btn-block  btn-warning" href="z5.php" style="margin-bottom:10px ;font-size:20px"><strong>রঙ মিস্ত্রী</strong></a>
      <a class="btn btn-block  btn-warning" href="z6.php" style="margin-bottom:10px ;font-size:20px"><strong>ইলেক্ট্রেসিয়ান</strong></a>
      
</div>

<div class="col-lg-9 col-sm-9 col-md-9 col-xs-9"  >




<!-- Carousel
   -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel" style=" margin-left:60px; margin-top:50px; margin-right:0px">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
         <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide img-responsive" src="4370909100_68db542ff7.jpg" alt="First slide" style="height:400px; width:100%">
          <div class="container">
            <div class="carousel-caption">
              <h1 style="color: #E90B0F">সর্বশেষ খবর</h1>
              <p>শীঘ্রই আমাদের আরো কিছু নতুন সেবা আসছে ... বিস্তারিত জানতে</p>
              <p><a class="btn btn-danger" href="#" role="button"> ক্লিক করুন</a></p>
            </div>
          </div>
        </div>
        
        
        <div class="item">
          <img class="second-slide img-responsive" src="belal-hossain-rana-4.jpg" alt="Second slide" style="height:400px; width:100%">
          <div class="container">
            <div class="carousel-caption">
              <h1 style="color:#E70A0E">আপডেট</h1>
              <p>আমরা আমাদের নিরাপত্তা বিষয়ে সচেনতা বাডিয়েছি। এখন আমাদের সেবা আরো বেশি নির্ভরযোগ্য</p>
    
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide img-responsive"
           src="bangladesh-worker3.jpg" alt="Third slide" style="height:400px; width:100%">
          <div class="container">
            <div class="carousel-caption">
              <h1 style="color:#F4080C">অফার এন্ড ডিস্কাঊন্ট</h1>
              <p>এখন আপনারা পাচ্ছেন ১০% ডিস্কাউন্ট সকল সার্ভিসে।</p>
            
            </div>
          </div>
        </div>
        
        
         <div class="item">
          <img class="third-slide img-responsive"
           src="&NCS_modified=20131226201333&MaxW=640&imageVersion=default&AR-131229426.jpg" alt="4th slide" style="height:400px; width:100%">
          <div class="container">
            <div class="carousel-caption">
              <h1 style="color:#F4080C">অধিক নির্ভরযোগ্য কর্মী।</h1>
             
            </div>
          </div>
        </div>
        
        
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-- /.carousel --> 

</div>

</div>
</div>

<div class=" container-fluid">
<div class="row" style="height:300px; margin-right:25px; margin-left:25px">

 <div class="col-sm-12 col-lg-4 col-md-12 col-xs-12" >
 
 <h3>সহজে ব্যবহার যোগ্য</h3>
 <p> একটি ব্যবহারকারী বন্ধুত্বপূর্ণ মোবাইল অ্যাপ্লিকেশন যে বাড়িতে দাস পরিচ্ছন্নতার পরিষেবা , ড্রাইভারের সেবা , কাজের বুয়া , নেটওয়ার্ক প্রদানকারী সেবা ইত্যাদি গ্রাহক মত বাড়িতে সেবা বিস্তৃত প্রদান করে। কাস্টমার এর বাড়িতে সেবা বুক করার জন্য তাদের নিজস্ব পছন্দমত
লোক বেছে । বিক্রেতাদের সঙ্গে কথা বলার প্রয়োজন হয় না 
</p>
 
 
 
 </div>
  

  
 <div class="col-sm-12 col-lg-4 col-md-12 col-xs-12" >
  <?php if(empty($_SESSION)) { ?> 
 
  
  <h3>আডমিন প্যানেল</h3>
<p> এই অপশনটি শুধু মাত্র এডমিন এর জন্য।<br>গ্রাহক এর প্রবেশ অনুমতি নাই। </p>
 <p><a class="btn btn-danger" href="log3.php" role="button">বিস্তারিত</a></p>
 <?php  }  ?>  
 </div>

  
 
 <div class="col-sm-12 col-lg-4 col-md-12 col-xs-12">
 

  <h3>নির্ভরযোগ্য ও স্বচ্ছ</h3>
 <p>

 ক্রমাগত তার গ্রাহকদের স্বচ্ছ সেবা প্রদানের এবং একটি গ্যারান্টি হিসাবে গ্রাহক সন্তুষ্টি নিশ্চিত উপর দৃষ্টি নিবদ্ধ করা হয় .
</p>
<h3>স্ট্যান্ডার্ড সার্ভিস চার্জ</h3>
<p>
আমাদের সার্ভিস এর মূল্য সবেচেয়ে কম।মাঝে মাঝে আমরা কাস্টমার দের কিছু আকর্ষণীয় উপহার দিয়ে থাকি।
</p>
 
 </div>


</div>
</div>

<div class="container">
<div class="row" style="height:210px;  margin-right:10px; margin-left:10px;  margin-top:30px " >

 <div class="col-sm-12 col-lg-6 col-md-12 col-xs-12 mok" style="height:250px; overflow:scroll ">
<h2>আমাদের তথ্য</h2>
<p>
 যারা ঘরে বসে পরিবারের জন্য  সেবা খুঁজছেন ,সেই ব্যক্তিদের সাথে সংযোগ করার জন্য WE CARE  শীর্ষ মানের  নেতৃস্থানীয় প্ল্যাটফর্ম তৈরি করে। 60 সেকেন্ডের বুকিং প্রক্রিয়া , সুরক্ষিত পেমেন্ট , এবং একটি 100% টাকা ফেরত গ্যারান্টি দিয়ে , WE CARE   সবচেয়ে সুবিধাজনক বাড়িতে সেবা বুক উপায়।আমরা যত্ন সারমর্ম মানুষের সবচেয়ে প্রাকৃতিক অভিব্যক্তি - ভালবাসা থেকে. নারীর জীবন সহজ এবং সহজ করার সিদ্ধান্ত নিয়েছে WE CARE  . পুরুষদের সারাদিন ঘর থেকে বাহিরে থাকতে হয় , তাদের স্ত্রীদের সব তালিকা অনুসন্ধান করে সমস্যা সমাধান করতে হয় । বাংলাদেশে সক্ষম , দক্ষ ও খরচ কার্যকর তালিকা অনুসন্ধান পেয়ে কঠিন হয়না WE CARE  এর জন্য.


</div>
<div class="col-sm-12 col-lg-6 col-md-12 col-xs-12 mok" style="height:250px; overflow:scroll">
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
</p>

<div class="container">
<div class="row" style="height:50px;margin-right:10px; margin-left:20px ">
	
			<div class="footer-copyright">
				<center>2016 &copy; Msquare&amp;J&oplus;</center>
			</div>
		
	</div>

</div>


 </div>
<script src="Service pro 2/js/jquery-2.2.1.min.js"></script>
<script src="Service pro 2/js/wecare1.js" ></script>
<script src="Service pro 2/js/bootstrap.min.js"></script>

</body>
</html>
