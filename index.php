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
<style>


.navbar-nav.navbar-right li a {

	font-family: 'Roboto',sans-serif;
	font-size: 15px;
	padding: 0;
	text-transform: uppercase;
	
	transition: all .9s ease 0s;
	padding: 15px 15px;
}
.navbar-nav.navbar-right li a:hover {
	color: #fff; /* text color*/
	background-color: #3B91C1;
}
/*       carousel       */

.fade-carousel {
    position: relative;
    height: 80vh;
}
.fade-carousel .carousel-inner .item {
    height: 80vh;
}
.fade-carousel .carousel-indicators > li {
    margin: 0 2px;
    background-color: hsla(0,47%,94%,1.00);
    border-color: #f39c12;
    opacity: .9;
}
.fade-carousel .carousel-indicators > li.active {
  width: 20px;
  height: 20px;
  opacity: 1;
}


.hero {
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: 3;
    color: #fff;
    text-align: center;
    text-transform: uppercase;
    text-shadow: 1px 1px 0 rgba(0,0,0,.75);
      -webkit-transform: translate3d(-50%,-50%,0);
         -moz-transform: translate3d(-50%,-50%,0);
          -ms-transform: translate3d(-50%,-50%,0);
           -o-transform: translate3d(-50%,-50%,0);
              transform: translate3d(-50%,-50%,0);
}
.hero h1 {
    font-size: 6em;    
    font-weight: bold;
    margin: 0;
    padding: 0;
}

.fade-carousel .carousel-inner .item .hero {
    opacity: 0;
    -webkit-transition: 2s all ease-in-out .1s;
       -moz-transition: 2s all ease-in-out .1s; 
        -ms-transition: 2s all ease-in-out .1s; 
         -o-transition: 2s all ease-in-out .1s; 
            transition: 2s all ease-in-out .1s; 
}
.fade-carousel .carousel-inner .item.active .hero {
    opacity: 1;
    -webkit-transition: 2s all ease-in-out .1s;
       -moz-transition: 2s all ease-in-out .1s; 
        -ms-transition: 2s all ease-in-out .1s; 
         -o-transition: 2s all ease-in-out .1s; 
            transition: 2s all ease-in-out .1s;    
}


.overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    z-index: 2;
    background-color: #080d15;
    opacity: .7;
}


.btn.btn-lg {padding: 10px 40px;}
.btn.btn-hero,
.btn.btn-hero:hover,
.btn.btn-hero:focus {
    color: #f5f5f5;
    background-color: hsla(0,3%,34%,1.00);
    border-color: hsla(351,23%,94%,1.00);
    outline: none;
    margin: 20px auto;
}


.fade-carousel .slides .slide-1, 
.fade-carousel .slides .slide-2,
.fade-carousel .slides .slide-3 {
  height: 100vh;
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
}
.fade-carousel .slides .slide-1 {
  background-image: url(bangladesh-worker3.jpg);
}
.fade-carousel .slides .slide-2 {
  background-image: url(belal-hossain-rana-4.jpg);
}
.fade-carousel .slides .slide-3 {
  background-image: url(bangladesh-factory-safety.jpg) ;
}


/*          Media Queries       */

@media screen and (min-width: 980px){
    .hero { width: 980px; }    
}
@media screen and (max-width: 640px){
    .hero h1 { font-size: 4em; }    
}


</style>


</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top container " style="background: hsla(0,2%,26%,1.00) ; margin-bottom:0px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
       
      </button>
   
     <!--  <img class="img-responsive" src="Picture1.png" width="60">-->
         </div>
          <ul class="nav navbar-nav" style="margin-top:8px;">
        <li><a href="index.php" style="font-size:24px"><b>প্রয়োজন ডট কম</b></a></li>
      
   
      </ul>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right" style="margin-top:20px;">
        <li class="active"><a href="index.php">হোমপেইজ</a></li>
      
        <li><a href="#notice" style="color:hsla(0,7%,97%,1.00)">সর্বশেষ খবর</a></li> 
        <li><a href="#cont" style="color:hsla(0,7%,97%,1.00)">আপনার জিজ্ঞাসা</a></li> 
      </ul>
    
    </div>
  </div>
</nav>
<div class=" container" style="position:relative; top:32px;">


<header class="page-header img-responsive" style="background: url(online-shopping.jpg) ;height: auto" >
 <div class="container">
<h1 style=" margin-left:50px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif, 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-size:60px; color: #F8EBEC" id="h1id1"><center>প্রয়োজন</center></h1>
<h2 style="color: #FD7803"><center>একটি নির্ভরযোগ্য অনলাইন সার্ভিস প্রোভাইডার </center></h2>
</div>
</header>
<?php if(empty($_SESSION)) { ?>
<div class="container" id="fixme">
<div class="row pull-right" style="margin-top:-15px; margin-bottom:5px; margin-right:0px">
<div class="btn-group">
    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" style="margin-right:0px; font-size:20px">
    রেজিস্ট্রেশন<span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="custreg.php">গ্রাহক রেজিস্ট্রেশন</a></li>
      <li><a href="workerreg.php">কর্মী রেজিস্ট্রেশন</a></li>
    </ul>
  </div>
<div class="btn-group">
  <a class="btn btn-danger btn-md pull-right" style="margin-right:5px; font-size:20px" href="custlog.php">গ্রাহক লগ ইন</a>
  </div>

</div>
</div>

<?php } ?>

<?php if(!empty($_SESSION)) { ?>
<a class="btn btn-danger btn-md pull-right" href="logout.php">লগ আউট</a>
<a class="btn btn-danger btn-md pull-right" href="profile.php" style="margin-right:20px; margin-bottom:20px">প্রোফাইল</a>

<?php } ?>



<div class="row" >
<div class="col-lg-4" style="height:auto">

  <h1 style="font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; color:#6E0709" ><center>আমাদের সেবাসমূহ</center></h1> 
    <a class="btn btn-block btn-warning" href="z1.php" style="margin-bottom:10px; font-size:20px "><strong>কাজের বুয়া</strong></a>
    <a class="btn btn-block  btn-warning" href="z2.php" style="margin-bottom:10px ;font-size:20px"><strong>ড্রাইভার</strong></a>
    <a class="btn btn-block  btn-warning" href="z4.php" style="margin-bottom:10px ;font-size:20px"><strong>সিকিঊরিটী গার্ড</strong></a>
    <a class="btn btn-block btn-warning" href="homedec.php" style="margin-bottom:10px ;font-size:20px"><strong>হোম ডেকোরেটর</strong></a>
    <a class="btn btn-block  btn-warning" href="z3.php" style="margin-bottom:10px ;font-size:20px"><strong>ইন্টারনেট সেবা</strong></a>
     <a class="btn btn-block  btn-warning" href="z5.php" style="margin-bottom:10px ;font-size:20px"><strong>রঙ মিস্ত্রী</strong></a>
      <a class="btn btn-block  btn-warning" href="z6.php" style="margin-bottom:10px ;font-size:20px"><strong>ইলেক্ট্রেসিয়ান</strong></a>
      
      

                 
  
      
      
 </div>



<div class="col-lg-8" style="height:auto">

<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
  <!-- Overlay -->
  

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
    <li data-target="#bs-carousel" data-slide-to="2"></li>
  </ol>
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item slides active">
      <div class="slide-1"></div>
      <div class="hero">
        <hgroup>
            <h2>সর্বশেষ খবর</h2>        
            <h3>শীঘ্রই আমাদের আরো কিছু নতুন সেবা আসছে ..</h3>
        </hgroup>
        <button class="btn btn-hero btn-lg" role="button"> ক্লিক করুন</button>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-2"></div>
      <div class="hero">        
        <hgroup>
            <h2>আপডেট</h2>        
            <h3>আমরা আমাদের নিরাপত্তা বিষয়ে সচেনতা বাডিয়েছি।<br> এখন আমাদের সেবা আরো বেশি নির্ভরযোগ্য</h3>
        </hgroup>       
        <button class="btn btn-hero btn-lg" role="button"> ক্লিক করুন</button>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-3"></div>
      <div class="hero">        
        <hgroup>
            <h2>অফার <br>এন্ড ডিস্কাঊন্ট</h2>        
            <h3>এখন আপনারা পাচ্ছেন ১০% ডিস্কাউন্ট সকল সার্ভিসে।</h3>
        </hgroup>
        <button class="btn btn-hero btn-lg" role="button"> ক্লিক করুন</button>
      </div>
    </div>
  </div> 
</div>
</div>
</div>




<div class=" container-fluid" id="notice">
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
<div class="row" style="height:210px;  margin-top:1%" >

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



 </div>


<div class="row mcon" style="height:auto; background: hsla(0,5%,68%,1.00); margin-top:2%; margin-left:.5%" id="cont">
 
 
		
								<div class="row">
									
										<div style="text-align:center">
											<h1 style="font-family:Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif;  text-align:center">আমাদের সাথে যোগাযোগ করুন</h1>
											<h3>প্রয়োজন ডট কম এ যেকোন সমস্যা সমপর্কে আমাদের জানান।</h3>
										</div>
									
								
							</div>
							
								
									
									<div class="row ">
										<div class="col-lg-4 col-sm-4 col-md-4 jumbotron" style="margin-left:2%">
											<div style="margin-left:2%">
                                            <address><p style="font-family:Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif; font-size:24px"><span style="font-family:Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif; font-size:36px; color:hsla(35,98%,49%,1.00)">প্রয়োজন</span>ডট কম</p>
                                            <strong>মিরপুর, ঢাকা-১২১৬<br> 
                                            বাংলাদেশ</strong><br>
                                            <h4 style="font-family:Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif; color:hsla(237,84%,39%,1.00)">একটি Msquare&amp;J এর প্রতিষ্ঠান </h4>
                                            </address>
                                            </div>
										</div>
										<div class="col-lg-7 col-sm-7 col-md-7" style="margin-left:2%"> 
										
												
												<form id="contact-form" class="contact" name="contact-form" method="post" action="send-mail.php">
													<div class="form-group">
														<input type="text" name="name" class="form-control name-field" required="required" placeholder="Your Name"></div>
														<div class="form-group">
															<input type="email" name="email" class="form-control mail-field" required="required" placeholder="Your Email">
														</div> 
														<div class="form-group">
															<textarea name="message" id="message" required class="form-control" rows="8" placeholder="Message"></textarea>
														</div> 
														<div class="form-group">
															<button type="submit" class="btn btn-primary">Send</button>
														</div>
													</form> 
												
											</div>
								
								</div> 
							<!--/#contact-->








</div>




<div class="container">
<div class="row" style="height:50px;margin-right:10px; margin-left:20px ">
	
			<div class="footer-copyright">
				<center>2016 &copy; Msquare&amp;J</center>
			</div>
		
	</div>

</div>













</div>









<script src="Service pro 2/js/jquery-2.2.1.min.js"></script>
<script>



</script>
<script src="Service pro 2/js/wecare1.js" ></script>
<script src="Service pro 2/js/bootstrap.min.js"></script>
</body>
</html>