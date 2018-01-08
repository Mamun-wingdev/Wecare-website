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
	
		$insert= mysqli_query($connection,"INSERT INTO wants (name,address,date,time,contact,type) VALUES ('$name','$address','$date','$time','$no','painter')");
		header("location:confirm.php");
		//echo "<h1>আপনার রিকোয়েস্টটি গ্রহন করা হয়েছে ।<br>কিছুক্ষনের মধ্যে আপনি একটি কনর্ফামেশন মেসেজ পেয়ে যাবেন।</h1>";
	
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
      <h1 style="background:#9E9999; color:#F5EDED; font-size:60px"><center>রঙ মিস্ত্রী</center></h1>
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
         <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="bangladeshi-worker.jpg" alt="First slide"  style="height:500px; width:100%">
          <div class="container">
            <div class="carousel-caption">
              <h1 style="color: #E90B0F">টাইপ - ০১</h1>
           
            
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="durga-kurigram-2 (1).jpg" alt="Second slide"  style="height:500px; width:100%">
          <div class="container">
            <div class="carousel-caption">
              <h1 style="color:#E70A0E">টাইপ -০২</h1>
                         
            </div>
          </div>
        </div>
           <div class="item">
          <img class="second-slide" src="&NCS_modified=20131226201333&MaxW=640&imageVersion=default&AR-131229426.jpg" alt="Second slide"  style="height:500px; width:100%">
          <div class="container">
            <div class="carousel-caption">
              <h1 style="color:#E70A0E">টাইপ-০৩</h1>
             
           
            </div>
          </div>
        </div>
           <div class="item">
          <img class="second-slide" src="Migrants-rescued-in-Coxs-Bazar_01_newsnextbd.jpg" alt="Second slide"  style="height:500px; width:100%">
          <div class="container">
            <div class="carousel-caption">
              <h1 style="color:#E70A0E">টাইপ-০৪</h1>
            
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="mat-bangla.jpg" alt="Third slide" style="height:500px; width:100%">
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
<form action="z5.php" method="post" onSubmit="return check()">
  
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
                        <p>আপনার বাড়িতে পেশাগতভাবে আঁকা আছে . আপনার বাড়িতে বা অ্যাপার্টমেন্টের কোন অভ্যন্তর রুম আঁকা যাবে - রান্নাঘর , রুম, শয়নকক্ষ , পায়খানা জীবিত এবং রুম বসা . আমরা এমনকি ট্রিম , দরজা এবং সিলিং ও রং করি।
<br>
•	সম্পূর্ণ ঝামেলা মুক্ত বাড়িতে পেইন্টিং পরিষেবার সঙ্গে আপনার বাড়িতে রঙ .. <br>
•	
•	আপনি কত ঘন ঘন আপনার বাড়িতে কি পেন্ট? আমরা নিশ্চিত যে এটা খুব নিয়মিত না । আমরা  আপনাদের অপেশাদারী, হীন, ঐতিহ্যগত চিত্রশিল্পী সঙ্গে নিজেকে যুক্ত করা এড়াতে আমাদের নিজস্ব চিত্রশিল্পী নিয়ে এসেছি । সময় এসেছে আমাদের সাথে উদ্ভাবনী যান্ত্রিক এবং পেশাদারী অর্থনৈতিক পেইন্টিং সেবা অনুভব করার <br>
•	
•	আমাদের অভ্যন্তর পেইন্টিং, অঙ্গবিন্যাস, এবং ওয়ালপেপার সহ পণ্য বৃহৎ সরঞ্জাম আছে।বাহিরের পেইন্টিং, কাঠ ও ধাতু যত্ন আমাদের পেইন্টিং এ আমাদের ক্ষমতা প্রসারিত. আমরা সেবা, যা সঠিক পরিমাপ (উন্নত টুলস এর মাধ্যমে), পেশাদারী রং পরামর্শ, পেইন্টিং সেবা এবং সাইট ক্লিয়ারেন্স দিয়ে শুরু।  আমরা এক্সপ্রেস (যান্ত্রিক) পেইন্টিং সেবা যা উন্নত মানের এবং দক্ষতা বৃদ্ধি অফার চালু করেছে. এই পদ্ধতি সময় প্রায় 40% দ্বারা আপনার বাড়িতে পেইন্টিং ব্যয় হ্রাস করা হয়.<br>

•	তাই এই সময় যখন আপনি আপনার কল্পনা রঙ দিতে পরিকল্পনা আমাদের সাথে যোগাযোগ পরিবর্তন ধারনা আপনার হাতে তুলে বিভিন্ন আছে.<br>



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


 ক্রমাগত তার গ্রাহকদের স্বচ্ছ সেবা প্রদানের এবং একটি গ্যারান্টি হিসাবে গ্রাহক সন্তুষ্টি নিশ্চিত উপর দৃষ্টি নিবদ্ধ করা হয় .আপনার কাজ শুধু আপনার প্রয়োজনীয় সার্ভিস টি খুজে বের করে বুকিং পেজ এ নিজের পছন্দমত  তারিখ , সময় এবং ঠিকানা বাছাই করুন। বাকি কাজ আমাদের । আপান্র কাছে পোঁছে যাবে এই
কাজের জন্য সবচেয়ে যোগ্য ব্যক্তি । <br>
কাজের বিশিষ্টতা ঃ<br>


	Background ও পরিচয় চেক পেশাদার<br>
	100% টাকা ফেরত গ্যারান্টি<br>
	বন্ধুত্বপূর্ণ 24/7 গ্রাহক সেবা<br>
	সাশ্রয়ী মূল্য<br>





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
আমাদের সার্ভিস এর মূল্য সবেচেয়ে কম।মাঝে মাঝে আমরা কাস্টমার দের কিছু আকর্ষণীয় উপহার দিয়ে থাকি।আপনার বুকিং হয়ে গেছে।এবার আপনার কোন চিন্তা নেই। আপানার চিন্তা এবার আমাদের।কিভাবে আপনাকে সবচেয়ে ভাল সার্ভিস দেয়া যায় সেটি
চিন্তা করবো আমরা এবং খুব দ্রুত আপানার কাছে চলে যাবে আপনার পছন্দ সই অভিজ্ঞ লোকটি<br>

সার্ভিস চার্জ<br>
১। বাহিরের প্রতি স্কোয়ার ফিট ঃ ৬৫ টাকা<br>
২। পেইন্টার চার্জ প্রতি স্কোয়ার ফিট ঃ ২০০ টাকা<br>


</p></p>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

      
</div>

<div class="row" style="height:210px;  margin-right:-22px; margin-left:-13px; margin-top:30px " >

 <div class="col-lg-6 mok" style="height:240px;background: #746F6F; color:#FBF9F9 ">
<h2>আমাদের তথ্য</h2>
<p>
 যারা ঘরে বসে পরিবারের জন্য  সেবা খুঁজছেন ,সেই ব্যক্তিদের সাথে সংযোগ করার জন্য WE CARE  শীর্ষ মানের  নেতৃস্থানীয় প্ল্যাটফর্ম তৈরি করে। 60 সেকেন্ডের বুকিং প্রক্রিয়া , সুরক্ষিত পেমেন্ট , এবং একটি 100% টাকা ফেরত গ্যারান্টি দিয়ে , WE CARE   সবচেয়ে সুবিধাজনক বাড়িতে সেবা বুক উপায়।আমরা যত্ন সারমর্ম মানুষের সবচেয়ে প্রাকৃতিক অভিব্যক্তি - ভালবাসা থেকে. নারীর জীবন সহজ এবং সহজ করার সিদ্ধান্ত নিয়েছে WE CARE  . পুরুষদের সারাদিন ঘর থেকে বাহিরে থাকতে হয় , তাদের স্ত্রীদের সব তালিকা অনুসন্ধান করে সমস্যা সমাধান করতে হয় । বাংলাদেশে সক্ষম , দক্ষ ও খরচ কার্যকর তালিকা অনুসন্ধান পেয়ে কঠিন হয়না WE CARE  এর জন্য.


</div>
<div class="col-lg-6 mok" style="height:240px; background:#746F6F; color:#FBF9F9">
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
 
   
     

<script src="Service pro 2/js/jquery-2.2.1.min.js"></script>
<script src="Service pro 2/js/bootstrap.min.js"></script>
</div>
</body>
</html>
