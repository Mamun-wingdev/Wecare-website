<?php session_start(); ?>
<?php
include_once 'dbconnect.php';
if(isset($_POST['name'])){$name = $_POST['name'];}

if(isset($_POST['address'])){$address = $_POST['address'];}
if(isset($_POST['date'])){$date = $_POST['date'];}
if(isset($_POST['time'])){$time = $_POST['time'];}
if(isset($_POST['no'])){$no = $_POST['no'];}
if(isset($_POST['submit'])){$submit=$_POST['submit'];}



if(isset($_POST['submit'])){      
	
		$insert= mysqli_query($connection,"INSERT INTO wants (name,address,date,time,contact,type) VALUES ('$name','$address','$date','$time','$no','homedecorator')");
		
		echo "<h1>আপনার রিকোয়েস্টটি গ্রহন করা হয়েছে ।<br>কিছুক্ষনের মধ্যে আপনি একটি কনর্ফামেশন মেসেজ পেয়ে যাবেন।</h1>";
	
}

 



?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="Service pro 2/css/bootstrap.min.css" rel="stylesheet" type="text/css" >
<link href="Service pro 2/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
</head>

<body>

 

 <div class="container">
 
 <div class="row" >
 
 <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <h1><center>হোম ডেকোরেশন</center></h1>
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
         <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="teen-bedroom-paint-ideas.jpeg" alt="First slide"  style="height:500px; width:100%">
          <div class="container">
            <div class="carousel-caption">
              <h1 style="color: #E90B0F">টাইপ - ০১</h1>
           
            
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="small-bedroom-paint-ideas1.jpg" alt="Second slide"  style="height:500px; width:100%">
          <div class="container">
            <div class="carousel-caption">
              <h1 style="color:#E70A0E">টাইপ -০২</h1>
                         
            </div>
          </div>
        </div>
           <div class="item">
          <img class="second-slide" src="painting-bedroom-ideas.jpg" alt="Second slide"  style="height:500px; width:100%">
          <div class="container">
            <div class="carousel-caption">
              <h1 style="color:#E70A0E">টাইপ-০৩</h1>
             
           
            </div>
          </div>
        </div>
           <div class="item">
          <img class="second-slide" src="paint-bedroom-ideas.jpg" alt="Second slide"  style="height:500px; width:100%">
          <div class="container">
            <div class="carousel-caption">
              <h1 style="color:#E70A0E">টাইপ-০৪</h1>
            
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="painting-ideas-for-bedrooms1.jpg" alt="Third slide" style="height:500px; width:100%">
          <div class="container">
            <div class="carousel-caption">
              <h1 style="color:#F4080C">টাইপ-০৫</h1>
            
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
    </div><!-- /.carousel --> 
 </div>
  <div class="container">
   <?php if(!empty($_SESSION)) { ?>
<div class="row">
<form action="homedec.php" method="post" onSubmit="return check()">
  
   <h2 style="margin-left:150px; margin-bottom:30px; color:#08036F; font-family: Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif; font-size:36px">সার্ভিস নিতে নিচের ফর্মটি পূরণ করুন</h2>
  <div class="form-group">
     <label class="col-sm-2">Your Name :</label>
     
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Your name" style="width:400px" id="a" name="name" >
      <p id="345" style="display:none; color:#F81216">HINTS: You must put your National ID Name.</p>
    </div>
    
  </div>
  
 
  
  <div class="form-group">
     <label  class="col-sm-2">Address:</label>
    <div class="col-sm-10">
      <textarea class="form-control" rows="2" style="width:400px" id="c" name="address"></textarea>
       <p id="346" style="display:none; color:#F81216">HINTS: Your present address.</p>
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2" >Select Date:</label>
    
    <div class="col-sm-10" >
      <input type="date" class="form-control"  style="width:400px" id="d" name="date">
    </div>
   </div>
   
   
   
   
   
   
  
 <div class="form-group">
     <label class="col-sm-2">Select Time:</label>
    <div class="col-sm-10">
      <input type="time" class="form-control" placeholder="Your name" style="width:400px" id="l" name="time">
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-2 control-label">Contact no</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  placeholder="Password" style="width:400px" id="m" name="no">
    </div>
  </div>

   <input type="submit" class="btn btn-group-lg" value="Submit" name="submit" style="margin-left:300px; margin-top:20px" />
 
 </form>





</div>
<?php } ?>  
  

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                   <?php if(empty($_SESSION)) { ?>
 <div class="row">
 <marquee behavior="alternate"><h2>সার্ভিস এর জন্য নিবন্ধ করতে আপনাকে অবশ্যই লগ ইন করতে হবে।</h2></marquee>
 <?php  }  ?>
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i>সুবিধা সমূহ</h4>
                    </div>
                    <div class="panel-body">
                        <p>আপনার কাজ শুধু আপনার প্রয়োজনীয় সার্ভিস টি খুজে বের করে বুকিং পেজ এ নিজের পছন্দমত  তারিখ , সময় এবং ঠিকানা বাছাই করুন। বাকি কাজ আমাদের । আপান্র কাছে পোঁছে যাবে এই
কাজের জন্য সবচেয়ে যোগ্য ব্যক্তি । 
</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i>নির্ভরযোগ্য ও স্বচ্ছ</h4>
                    </div>
                    <div class="panel-body">
                        
 <p>

 ক্রমাগত তার গ্রাহকদের স্বচ্ছ সেবা প্রদানের এবং একটি গ্যারান্টি হিসাবে গ্রাহক সন্তুষ্টি নিশ্চিত উপর দৃষ্টি নিবদ্ধ করা হয় .
</p>
</p>
                       
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-compass"></i>স্ট্যান্ডার্ড সার্ভিস চার্জ</h4>
                    </div>
                    <div class="panel-body">
                        <p>
<p>
আমাদের সার্ভিস এর মূল্য সবেচেয়ে কম।মাঝে মাঝে আমরা কাস্টমার দের কিছু আকর্ষণীয় উপহার দিয়ে থাকি।
</p></p>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

      
</div>

<!-- Portfolio Section -->
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="paint-bedroom-ideas.jpg" alt="">
                </a>
            </div>
            
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="painting-bedroom-ideas.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="painting-bedroom-ideas.jpg" alt="">
                </a>
            </div>
           
        </div>
        <!-- /.row -->
  

 </div>
 
   
     

<script src="Service pro 2/js/jquery-2.2.1.min.js"></script>
<script src="Service pro 2/js/bootstrap.min.js"></script>
</div>
</body>
</html>
