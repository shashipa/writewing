<?php
session_start();
 ?>
 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="include/header_style.css">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body style=""  style="box-sizing: border-box;">
<style>
#card{
  width:113px;
  height:135px;
  background: black;
  border-radius: 0px;
}
#card h3{
  color: white;
  font-weight: bold;
}
#card span{
  color:white;
  font-weight: bold;
}
.active{
  color:red !important;
}
#card_2{
  height:65px;
}
</style>
<section class="">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5" style="height:20px;max-height:200px;">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav>
</section>

<section class="container-fluid my-5 mx-auto">
    <div id="slide-out" class="side-nav  fixed" style="background: red !important;">
      <ul class="custom-scrollbar">
        <!-- Logo -->
        <li>
          <div class="" style="background: white;color: red;">
            <a href="#">
            Write Wing
            </a>
          </div>
        </li>
        <!--/. Logo -->
        <!--Social-->
        <li>
          <ul class="social">
            <li><a href="#" class="icons-sm fb-ic"><i class="fab fa-facebook-f"> </i></a></li>
            <li><a href="#" class="icons-sm pin-ic"><i class="fab fa-pinterest"> </i></a></li>
            <li><a href="#" class="icons-sm gplus-ic"><i class="fab fa-google-plus-g"> </i></a></li>
            <li><a href="#" class="icons-sm tw-ic"><i class="fab fa-twitter"> </i></a></li>
          </ul>
        </li>
        <li>
          <ul class="collapsible collapsible-accordion">
            <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-chevron-right"></i> Submit
                blog<i class="fas fa-angle-down rotate-icon"></i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="#" class="waves-effect">Submit listing</a>
                  </li>
                  <li><a href="#" class="waves-effect">Registration form</a>
                  </li>
                </ul>
              </div>
            </li>
            <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-hand-pointer-o"></i>
                Instruction<i class="fas fa-angle-down rotate-icon"></i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="#" class="waves-effect">For bloggers</a>
                  </li>
                  <li><a href="#" class="waves-effect">For authors</a>
                  </li>
                </ul>
              </div>
            </li>
            <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-eye"></i> About<i class="fas fa-angle-down rotate-icon"></i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="#" class="waves-effect">Introduction</a>
                  </li>
                  <li><a href="#" class="waves-effect">Monthly meetings</a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </li>
        <style type="text/css">
          #ul li a{
            font-weight: bold;
            font-size: 20px;
            text-transform: uppercase;
            color:white;
          }
          #ul li:hover a{
            border-bottom: 2px solid black;
            transition: transform all 2s ease;

          }
        </style>
        <!--/. Side navigation links -->
      </ul>
      <div class=""></div>
    </div>
    <!--/. Sidebar navigation -->
    <!-- Navbar -->
    <nav class="navbar navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav" style="background: red;">
      <!-- SideNav slide-out button -->
      <div class="float-left">
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars"></i></a>
      </div>
      <!-- Breadcrumb-->
     
      <ul class="nav navbar-nav nav-flex-icons ml-auto" id="ul">
        <li class="nav-item">
          <a class="nav-link"><span class="clearfix d-none d-sm-inline-block">
          Home</span></a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="include/technology.php"><span class="clearfix d-none d-sm-inline-block">Technology</span></a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="include/sports.php"><span class="clearfix d-none d-sm-inline-block">Sports</span></a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="include/politics.php"><span class="clearfix d-none d-sm-inline-block">Politics</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="include/defence.php"><span class="clearfix d-none d-sm-inline-block">Defence</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="include/education.php"><span class="clearfix d-none d-sm-inline-block">
          Education</span></a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="include/entertainment.php"><span class="clearfix d-none d-sm-inline-block">
          Entertainment</span></a>
        </li>
       
      </ul>
    </nav>
</section>
<section class="container">
<div class="row">
  <div class="col-lg-10 col-md-6 col-sm-10 mx-auto" style="">
  <div class="mt-3">
  <div class="chip chip-md aqua-gradient darken-2 white-text z-depth-1">
  <img src="nc.jpg" alt="Contact Person"> <a href="include/nc.php" class="white-text" target="blank">National Capital</a>
</div>
<div class="chip chip-md peach-gradient darken-2 white-text z-depth-1">
  <img src="east.jpg" alt="Contact Person"> <a href="include/es.php" class="white-text">Eastern States</a>
</div>
<div class="chip chip-md dusty-grass-gradient danger-2 white-text z-depth-1">
  <img src="west.jpg" alt="Contact Person"><a href="include/western.php" class="white-text">Western States</a>
</div>

<div class="chip chip-md young-passion-gradient darken-2 white-text z-depth-1">
  <img src="north.jpg" alt="Contact Person"><a href="include/northern.php" class="white-text">Northern States</a>
</div>

<div class="chip chip-md near-moon-gradient darken-2 white-text z-depth-1">
  <img src="south.jpg" alt="Contact Person"><a href="include/southern.php" class="white-text">Southern States</a>
</div>
  </div>
    </div></div>
<!--/.Navbar-->
<!--/.Navbar -->
</section>
<section>
  
</section>

  <!-- Start your project here-->
 <!--Main Navigation-->
  

<style type="text/css">
div a:hover{
  color:red;
}
  #a_title:hover{
    color:red !important;
  }
  #a_2{
    font-weight: bold;
    text-transform: uppercase;
  }
  #a_2:hover{
    text-shadow: 0px 4px 3px rgba(0,0,0,0.4),
             0px 8px 13px rgba(0,0,0,0.1),
             0px 18px 23px rgba(0,0,0,0.1);
             color:red;
  }
  #a2:hover{
    color:red !important;
  }
  #editor{
    color:#004d4d;;
    text-shadow: 0px 4px 3px rgba(0,0,0,0.4),
             0px 8px 13px rgba(0,0,0,0.1),
             0px 18px 23px rgba(0,0,0,0.1);
             color:#004d4d;
  }
  #title {
    font-family:Segoe Print !important;
    color:#004d4d;
    font-weight: normal;
    text-transform: uppercase;
    font-size: 15px;
    text-shadow: 0px 4px 3px rgba(0,0,0,0.4),
             0px 8px 13px rgba(0,0,0,0.1),
             0px 18px 23px rgba(0,0,0,0.1);
          
  }
  #title a{
     color:#004d4d;
  }
  #title:hover a{
    color:red;
    text-shadow:0px 0px 0px;
  }
.b_title{
  text-shadow: 0px 4px 3px rgba(0,0,0,0.4),
             0px 8px 13px rgba(0,0,0,0.1),
             0px 18px 23px rgba(0,0,0,0.1);
             color:#004d4d;
}
</style>

<main>
<section id="top_10">
 <h1 class=" text-center my-1" style="font-weight: bold;
               color:#ff3300;
               font-size:40px;
              
               ">
         <span class="badge badge-danger">TOP 10 </span>
         </h1>
  <div class="container" style="background:#f9ffe6;">


    <div class="row">
    
    <?php
  $con=mysqli_connect("localhost","root","","writewing");
  $sel="SELECT * FROM english_top_10";
  $select=mysqli_query($con,$sel);
  while($data=mysqli_fetch_array($select)){
$img_1=$data["p_img1"];
$p_desc=$data["p_desc1"];
$id=$data["id"];
$title=$data["title"];
$date=$data["date"];
   ?>
      

      <div class="col-lg-4 col-md-6 col-sm-5 mt-2 mb-2 mx-auto">
      
       
     <div class="card promoting-card"  style="max-height: 400px;">

  <!-- Card content -->
  <div class="card-body d-flex flex-row">

    <!-- Avatar -->
    <img src="include/top10/<?php echo $img_1; ?>" class="rounded-circle mr-3" height="50px" width="50px" alt="avatar">

    <!-- Content -->
    <div>

      <!-- Title -->
      <h5 class="card-title font-weight-bold mb-2" id="" style="
             color:#334d4d;
             text-transform: uppercase;

      "><a><?php echo $title; ?></a></h5>
      <!-- Subtitle -->
      <p class="card-text"><i class="far fa-clock pr-2"></i>07/24/2018</p>

    </div>

  </div>

  <!-- Card image -->
  <div class="view overlay">
    <img class="card-img-top rounded-0" src="include/top10/<?php echo $img_1; ?>" alt="Card image cap" style="height:200px;">
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Card content -->
  <div class="card-body">

    <div class="">

      <!-- Text -->
      <p class="card-text">
      <?php if(strlen($p_desc)>25) { echo (substr($p_desc, 0,70))."........"; ?></p>
      <!-- Button -->
      <a class="btn btn-danger btn-lg p-1 my-1 mr-0 " href="include/top_10_full.php?id=<?php echo $id; ?>">
        Read More&nbsp;<i class="fas fa-arrow-right"></i>
      </a>
      <?php } ?>
      <i class="fas fa-share-alt text-muted float-right p-1 my-1" data-toggle="tooltip" data-placement="top" title="Share this post"></i>
      <i class="fas fa-heart text-muted float-right p-1 my-1 mr-3" data-toggle="tooltip" data-placement="top" title="I like it"></i>

    </div>

  </div>

</div>
  
    </div>
 <?php } ?> 
  </div>
 
      
  <!-- Grid row -->
</div>
</section>
<!-- Section: Blog v.2 -->
      </div>
     
    </div><!--- -->
    
  </div><!--container -->
</section>
<section class="mt-5">

<h3 class="text-center text-danger font-weight-bold" style="">
<span class="badge badge-danger">BREAKING NEWS</span>

</h3>
  <div class="container" style="background:#fff2e6;">
    <div class="row">
     <?php 
        $con=mysqli_connect("localhost","root","","writewing");
        $find="SELECT * FROM english_3_img where p_category='CRIRCKET' order by rand() limit 0,1";
        $finding=mysqli_query($con,$find);
         $data=mysqli_fetch_array($finding);
              $titlen=$data["p_title"];
              $category=$data["p_category"];
              $desc=$data["p_desc1"];
              $image=$data["p_img1"];
              $id=$data["id"];
              $date=$data["p_date"];
              $date_time_now=date("Y-m-d H:i:s");
              $start_date= new DateTime($data["p_date"]);
              $end_date= new DateTime($date_time_now);
              $interval=$start_date->diff($end_date);
              if($interval->y >=1){
                if($interval->y==1)
                  $time_message=$interval->y."year ago";
                
                else 
                  $time_message=$interval->y."years ago";
              }
              else if($interval->m >=1){
                if($interval->d ==0){
                  $days=" ago";
                }
                else if($interval->d ==1){
                  $days=$interval->d."day ago";
                }
                else {
                  $days=$interval->d."days ago";
                }
              
              if($interval->m==1){
                $time_message=$interval->m."month".$days;
              }
              else {
                $time_message=$interval->m."months".$days;
              }
               }
             else if($interval->d >=1){

                if($interval->d==1){
                $time_message="yesterday";
              }
              else {
                $time_message=$interval->d."days ago";
              }}
            
           else if($interval->h>=1){
            if($interval->h==1){
              $time_message=$interval->h."hour ago";
            }
            
            else {
              $time_message=$interval->h."hours ago";
            }
}
           else if($interval->i>=1){
            if($interval->i==1){
              $time_message=$interval->i."minute ago";
            }
            
            else {
              $time_message=$interval->i."minutes ago";
            }}
            else {
            if($interval->s<30){
              $time_message="just now";
            }
            else {
              $time_message=$interval->s."seconds ago";
            }
}


      ?>
      <div class="col-lg-5 col-md-10 col-sm-10 my-2 mx-auto card">
        <!-- Section: Blog v.1 -->
     <section class="my-5">
  <!-- Section heading -->
  <!-- Grid row -->
  <div class="row">
    <!-- Grid column -->
    <div class="col-lg-6">
      <!-- Featured image -->
      <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
        <img class="img-fluid img-responsive img-thumbnail" src="include/img_3/<?php echo $image; ?>" alt="Sample image">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
    </div>
    <!-- Grid column -->
    <!-- Grid column -->
    <div class="col-lg-6">
      <!-- Category -->
      <a href="#!" class="green-text">
        <h4 class="font-weight-bold mb-3"><span class="badge badge-danger">BREAKING</span></h4>
      </a>
      <!-- Post title -->
      <a href="include/img_3_post.php?id=<?php echo $id; ?>" style="color:#004d4d;text-transform: uppercase;"><?php echo $titlen; ?></a>
      <!-- Excerpt -->
      <!-- Post data -->
      <p>by <a><strong>Carine Fox</strong></a>&nbsp;&nbsp;
      <span><?php echo $time_message; ?></span>
       <a href="include/img_3_post.php?id=<?php echo $id; ?>" class="">
              <h2><i class="fas fa-angle-double-right"></i></h2></a>

      </p>
      <!-- Read more button -->
    

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

  <hr class="my-5">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <?php
        $con=mysqli_connect("localhost","root","","writewing");
        $find="SELECT * FROM english_3_img where p_category='OTHERS' order by rand() limit 0,2";
        $finding=mysqli_query($con,$find);
         $data=mysqli_fetch_array($finding);
              $titlen=$data["p_title"];
              $category=$data["p_category"];
              $desc1=$data["p_desc1"];
              $image=$data["p_img1"];
              $id=$data["id"];
              $date=$data["p_date"];
              $date_time_now=date("Y-m-d H:i:s");
              $start_date=new DateTime($date);
              $end_date=new DateTime($date_time_now);
              $interval=$start_date->diff($end_date);
              if($interval->y >=1){
                if($interval->y==1)
                  $time_message=$interval->y."year ago";
                else 
                  $time_message=$interval->y."years ago";
              }
              else if($interval->m >=1){
                if($interval->d==0){
                  $days=" ago";
                }
                else if($interval->d==1){
                  $days=$interval->d."day ago";
                }
                else {
                  $days=$interval->d."days ago";
                }
                if($interval->m==1){
                  $time_message=$interval->m."month".$days;
                }
                else {
                  $time_message=$interval->m."month".$days;
                }
              }
              else if($interval->d >=1){
                if($interval->d==1){
                  $time_message="yesterday";
                }
                else {
                  $time_message=$interval->d."days ago";
                }
              }
              else if($interval->h >=1){
                if($interval->h==1){
                  $time_message=$interval->h."hour ago";
                }
                else {
                  $time_message=$interval->h."hours ago";
                }
              }
              else if($interval->m >=1){
                if($interval->m==1){
                  $time_message=$interval->m."minute ago";
                }
                else {
                  $time_message=$interval->m."minutes ago";
                }
              }
              else {

                if($interval->s<30){
                $time_message=$interval->s."just now";
              }
              else {
                $time_message=$interval->s."seconds ago";
              }

            }

      ?>
    <div class="col-lg-6">

      <!-- Category -->
      <a href="#!" class="pink-text">
        <h5 class="font-weight-bold mb-3">
        <span class="badge badge-danger">BREAKING</span></h5>
      </a>
      <!-- Post title -->
      <a style="color:#004d4d;text-transform: uppercase;" href="
      include/img_3_post.php?id=<?php echo $id; ?>"><?php echo $titlen; ?></a>
      <!-- Excerpt -->
      <!-- Post data -->
      <p>by <a><strong>Carine Fox</strong></a>&nbsp;&nbsp;<?php echo $time_message; ?></p>
      <!-- Read more button -->
        <a href="include/img_3_post.php?id=<?php echo $id; ?>" class="">
              <h2><i class="fas fa-angle-double-right"></i></h2></a>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    
    <div class="col-lg-6">

      <!-- Featured image -->
      <div class="view overlay rounded z-depth-2">
        <img class="img-fluid img-responsive img-thumbnail" src="include/img_3/<?php echo $image; ?>" alt="Sample image">
        <a>
        </a>
      </div>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

  <hr class="my-5">

  <!-- Grid row -->
  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <?php
        $con=mysqli_connect("localhost","root","","writewing");
        $find="SELECT * FROM english_3_img where p_category='FOOTBALL' order by rand() limit 0,2";
        $finding=mysqli_query($con,$find);
         $data=mysqli_fetch_array($finding);
              $titlen=$data["p_title"];
              $category=$data["p_category"];
              $desc1=$data["p_desc1"];
              $image=$data["p_img1"];
              $id=$data["id"];
              $date=$data["p_date"];
              $date_time_now=date("Y-m-d H:i:s");
              $start_date=new DateTime($date);
              $end_date=new DateTime($date_time_now);
              $interval=$start_date->diff($end_date);

              if($interval->y >=1){
               if($interval->y==1)
                $time_message=$interval->y."year ago";
              else 
                $time_message=$interval->y."years ago";
               
              }
              else if($interval->m >=1) {
                  if($interval->d==0){
                    $days=" ago";
                  }
                  else if($interval->d ==1){
                    $days=$interval->d."day ago";
                  }
                  else {
                    $days=$interval->d."days ago";
                  }
                  if($interval->m==1){
                    $time_message=$interval->m."month".$days;
                  }
                  else {
                    $time_message=$interval->m."month".$days;
                  }
              }
              else if($interval->d>=1){
                if($interval->d==1){
                $time_message=$interval->d."day ago";
              }
              else {
                $time_message=$interval->d."days ago";
              }
              }
              else if($interval->h >=1){
                if($interval->h==1){
                  $time_message=$interval->h."hour ago";
                }
                else {
                  $time_message=$interval->h."hours ago";
                }
              }
              else if($interval->m>=1){
                if($interval->m==1){
                  $time_message=$interval->m."minute ago";
                }
                else {
                  $time_message=$interval->m."minutes ago";
                }
              }
              else{
               if($interval->s<30){
                $time_message="just now";
              }
              else {
                $time_message=$interval->s."second ago";
              }}
      ?>
    <div class="col-lg-6">

      <!-- Category -->
      <a href="#!" class="pink-text">
        <h5 class="font-weight-bold mb-3">
        <span class="badge badge-danger">BREAKING</span></h5>
      </a>
      <!-- Post title -->
     <a style="color:#004d4d;text-transform: uppercase;" href="include/img_3_post.php?id=<?php echo $id; ?>"><?php echo $titlen; ?></a>
      <!-- Excerpt -->
      <!-- Post data -->
      <p>by <a><strong>Carine Fox</strong></a> &nbsp; &nbsp; <?php echo $time_message; ?></p>
      <!-- Read more button -->
      <a href="include/img_3_post.php?id=<?php echo $id; ?>" class="">
              <h2><i class="fas fa-angle-double-right"></i></h2></a>


    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    
    <div class="col-lg-6">

      <!-- Featured image -->
      <div class="view overlay rounded z-depth-2">
        <img class="img-fluid img-responsive img-thumbnail" src="include/img_3/<?php echo $image; ?>" alt="Sample image">
        <a>
        </a>
      </div>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</section>
<!-- Section: Blog v.1 -->
      </div><!--first grid-->
      <div class="col-lg-7 col-md-6 col-sm-10 mx-auto mt-5">
        <div class="row">
<?php
        $con=mysqli_connect("localhost","root","","writewing");
        $find="SELECT * FROM english_3_img where p_category='DEFENCE' order by rand() limit 0,6";
        $finding=mysqli_query($con,$find);
         while($data=mysqli_fetch_array($finding)){
              $titlen=$data["p_title"];
              $category=$data["p_category"];
              $desc1=$data["p_desc1"];
              $image=$data["p_img1"];
              $id=$data["id"];
              $date=$data["p_date"];
               $date_time_now=date("Y-m-d H:i:s");
              $start_date=new DateTime($date);
              $end_date=new DateTime($date_time_now);
              $interval=$start_date->diff($end_date);

              if($interval->y >=1){
               if($interval->y==1)
                $time_message=$interval->y."year ago";
              else 
                $time_message=$interval->y."years ago";
               
              }
              else if($interval->m >=1) {
                  if($interval->d==0){
                    $days=" ago";
                  }
                  else if($interval->d ==1){
                    $days=$interval->d."day ago";
                  }
                  else {
                    $days=$interval->d."days ago";
                  }
                  if($interval->m==1){
                    $time_message=$interval->m."month".$days;
                  }
                  else {
                    $time_message=$interval->m."month".$days;
                  }
              }
              else if($interval->d>=1){
                if($interval->d==1){
                $time_message=$interval->d."day ago";
              }
              else {
                $time_message=$interval->d."days ago";
              }
              }
              else if($interval->h >=1){
                if($interval->h==1){
                  $time_message=$interval->h."hour ago";
                }
                else {
                  $time_message=$interval->h."hours ago";
                }
              }
              else if($interval->m>=1){
                if($interval->m==1){
                  $time_message=$interval->m."minute ago";
                }
                else {
                  $time_message=$interval->m."minutes ago";
                }
              }
              else{
               if($interval->s<30){
                $time_message="just now";
              }
              else {
                $time_message=$interval->s."second ago";
              }}
      ?>

          <div class="col-lg-6 col-md-6 col-sm-10 mx-auto">
           
    <div class="view overlay rounded z-depth-2">
      <img src="include/img_3/<?php  echo $image; ?>" class="img-fluid img-responsive img-thumbnail" alt="Sample project image" style="height: 200px;width: 100%;">
      <a>
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>
    <!--Excerpt-->
    <div class="card-body">
      <a href="" class="green-text">
        <h3 class="font-weight-bold mt-2 mb-3"><span class="badge badge-danger">BREAKING &nbsp;&nbsp;</span>
        </h3>
    

      </a>
     <a href="include/img_3_post.php?id=<?php echo $id; ?>" style="color: #004d4d;"><?php echo $titlen ?></a>
     <br>
      <a class="" href="include/img_3_post.php?id=<?php echo $id; ?>" class="btn btn-flat btn-lg"> View more</a>
    </div>
  </div>
  <?php } ?>
  <!-- Grid column -->
<!--small grid-->
           
     
   
        </div>
      </div>
    </div>
   
</section>
 <div class="text-center my-5">
    <a href="breaking.php" class="btn btn-outline-danger" style="border-radius: 8px;">View More</a></div>
  </div>
<section>
<h3 class="text-center">
<span class="badge badge-danger">TECHNOLOGY</span></h3>
  <div class="container">
    <div class="row">
      <div class="col-lg-11 col-md-11 col-sm-11 mx-auto">
      <div class="card">
        <div class="row">
          <div class="col-lg-6 col-md-10 col-sm-10 mx-auto">
      <div class="card" style="background: url(include/media/bsr.jpg);height:400px;border-radius: 0px;">
        <div class="card-body">
          <h3><span class="badge badge-danger" style="float: bottom;position: absolute;bottom:150px;">Technology</span></h3>
          <h4 style="position: absolute;bottom:50px;font-weight: bold;color:white;">This is just an example of our technology post</h4>
          <span style="position: absolute;bottom: 20px;font-weight: bold;">Shashi shekhar pathak</span>
        </div>
      </div>
    </div>
     <div class="col-lg-6 col-md-10 col-sm-10 mx-auto my-2">
      <div class="card" style="background: url(include/media/nba.jpg);height:400px;border-radius: 0px;background-repeat: no-repeat;background-size: cover;">
        <div class="card-body">
          <h3><span class="badge badge-danger" style="float: bottom;position: absolute;bottom:150px;">Technology</span></h3>
          <h4 style="position: absolute;bottom:50px;font-weight: bold;color:white;">This is just an example of our technology post</h4>
          <span style="position: absolute;bottom: 20px;font-weight: bold;">Shashi shekhar pathak</span>
        </div>
      </div>
      </div>
          </div><!--half grid-->
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 mx-auto my-2">
              <div class="card" style="background: url(include/media/ip.jpg);height:300px;border-radius: 0px;background-repeat: no-repeat;background-size: cover;">
        <div class="card-body">
          <h5><span class="badge badge-danger" style="float: bottom;position: absolute;bottom:150px;">Technology</span></h5>
          <h4 style="position: absolute;bottom:50px;font-weight: bold;color:white;">This is just an example of our technology post</h4>
          <span style="position: absolute;bottom: 20px;font-weight: bold;">Shashi shekhar pathak</span>
        </div>
      </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mx-auto my-2">
              <div class="card" style="background: url(include/media/ip2.jpg);height:300px;border-radius: 0px;background-repeat: no-repeat;background-size: cover;">
        <div class="card-body">
          <h5><span class="badge badge-danger" style="float: bottom;position: absolute;bottom:150px;">Technology</span></h5>
          <h4 style="position: absolute;bottom:50px;font-weight: bold;color:white;">This is just an example of our technology post</h4>
          <span style="position: absolute;bottom: 20px;font-weight: bold;">Shashi shekhar pathak</span>
        </div>
      </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mx-auto my-2">
              <div class="card" style="background: url(include/media/ip3.jpg);height:300px;border-radius: 0px;background-repeat: no-repeat;background-size: cover;">
        <div class="card-body">
          <h5><span class="badge badge-danger" style="float: bottom;position: absolute;bottom:150px;">Technology</span></h5>
          <h4 style="position: absolute;bottom:50px;font-weight: bold;color:white;">This is just an example of our technology post</h4>
          <span style="position: absolute;bottom: 20px;font-weight: bold;">Shashi shekhar pathak</span>
        </div>
      </div>
            </div>

          </div>
        </div>
      </div><!--first grid-->
      </div>
    </div>
  </div>
</section>
<div class="text-center">
<a href="include/technology.php" class="btn btn-outline-danger" style="border-radius: 8px;"> View More</a></div>
<section class="mt-5" style="background:;">
  <h3 class="text-center text-danger font-weight-bold">
   <span class="badge badge-danger">DEFENCE</span>
   </h3>
  <div class="container">
    <div class="row">
    <?php
  $con=mysqli_connect("localhost","root","","writewing");
  $sel="SELECT * FROM english_3_img where p_category='DEFENCE' order by id desc limit 0,2";
  $select=mysqli_query($con,$sel);
  while($three=mysqli_fetch_array($select)){
$img_1=$three["p_img1"];
$p_desc=$three["p_desc1"];
$id=$three["id"];
$p_category=$three["p_category"];
$title=$three["p_title"];
$date=$three["p_date"];
$id=$three["id"];
   $date_time_now=date("Y-m-d H:i:s");
              $start_date=new DateTime($date);
              $end_date=new DateTime($date_time_now);
              $interval=$start_date->diff($end_date);

              if($interval->y >=1){
               if($interval->y==1)
                $time_message=$interval->y."year ago";
              else 
                $time_message=$interval->y."years ago";
               
              }
              else if($interval->m >=1) {
                  if($interval->d==0){
                    $days=" ago";
                  }
                  else if($interval->d ==1){
                    $days=$interval->d."day ago";
                  }
                  else {
                    $days=$interval->d."days ago";
                  }
                  if($interval->m==1){
                    $time_message=$interval->m."month".$days;
                  }
                  else {
                    $time_message=$interval->m."month".$days;
                  }
              }
              else if($interval->d>=1){
                if($interval->d==1){
                $time_message=$interval->d."day ago";
              }
              else {
                $time_message=$interval->d."days ago";
              }
              }
              else if($interval->h >=1){
                if($interval->h==1){
                  $time_message=$interval->h."hour ago";
                }
                else {
                  $time_message=$interval->h."hours ago";
                }
              }
              else if($interval->m>=1){
                if($interval->m==1){
                  $time_message=$interval->m."minute ago";
                }
                else {
                  $time_message=$interval->m."minutes ago";
                }
              }
              else{
               if($interval->s<30){
                $time_message="just now";
              }
              else {
                $time_message=$interval->s."second ago";
              }}

   ?>
  
      <div class="col-sm-6 col-lg-6 col-md-6 mx-auto my-2">
        <div class="view overlay rounded ">
      <img src="include/img_3/<?php echo $img_1; ?>" class="img-fluid img-thumbnail img-responsive" alt="Sample project image" style="height:350px;width:100%;">
      <a>
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>
    <!--Excerpt-->
    <div class="card-body">
      <a href="" class="">
        <h5><span class="font-weight-bold mt-2 mb-3 badge badge-success"><i class="fas fa-shield-alt"></i>&nbsp;&nbsp;Defence</span></h5>
        <span><?php echo $time_message; ?></span>
      </a>
     <h4 class=" mb-3"  style="font-size:20px;
             color:#004d4d;text-transform: uppercase;" id=""><a href="include/img_3_post.php?id=<?php echo $id; ?>" style="color:#004d4d;"><?php echo $title; ?></a></h4>
      <p> <?php if(strlen($p_desc)>25) { echo (substr($p_desc, 0,100))."........"; }?>
        
        <a href="include/img_3_post.php?id=<?php echo $id; ?>" class="">
              <h2><i class="fas fa-angle-double-right"></i></h2></a>
      </p>
      
    </div>
      </div><!--first grid-->
      <?php } ?>
         <?php 
       $sel="SELECT * FROM english_1_img where category='DEFENCE' order by id desc limit 0,3 ";
       $select=mysqli_query($con,$sel);
       while($data=mysqli_fetch_array($select)){
        $title=$data["title"];
        $desc=$data["p_desc"];
        $category=$data["category"];
        $img=$data["p_img"];
        $desc2=$data["p_desc_2"];
        $desc3=$data["p_desc_3"];
        $id=$data["id"];
        $date=$data["p_date"];
           $date_time_now=date("Y-m-d H:i:s");
              $start_date=new DateTime($date);
              $end_date=new DateTime($date_time_now);
              $interval=$start_date->diff($end_date);

              if($interval->y >=1){
               if($interval->y==1)
                $time_message=$interval->y."year ago";
              else 
                $time_message=$interval->y."years ago";
               
              }
              else if($interval->m >=1) {
                  if($interval->d==0){
                    $days=" ago";
                  }
                  else if($interval->d ==1){
                    $days=$interval->d."day ago";
                  }
                  else {
                    $days=$interval->d."days ago";
                  }
                  if($interval->m==1){
                    $time_message=$interval->m."month".$days;
                  }
                  else {
                    $time_message=$interval->m."month".$days;
                  }
              }
              else if($interval->d>=1){
                if($interval->d==1){
                $time_message=$interval->d."day ago";
              }
              else {
                $time_message=$interval->d."days ago";
              }
              }
              else if($interval->h >=1){
                if($interval->h==1){
                  $time_message=$interval->h."hour ago";
                }
                else {
                  $time_message=$interval->h."hours ago";
                }
              }
              else if($interval->m>=1){
                if($interval->m==1){
                  $time_message=$interval->m."minute ago";
                }
                else {
                  $time_message=$interval->m."minutes ago";
                }
              }
              else{
               if($interval->s<30){
                $time_message="just now";
              }
              else {
                $time_message=$interval->s."second ago";
              }}
          ?>
          <div class="col-sm-6 col-lg-4 col-md-6 mx-auto mx-1 my-2">
        <div class="view overlay rounded z-depth-0">
      <img src="include/img_1/<?php echo $img; ?>" class="img-fluid img-thumbnail img-responsive"  alt="Sample project image" style="height:250px;">
      <a>
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>
    <!--Excerpt-->
    <div class="card-body">
      <a href="" class="">
        <h4><span class="font-weight-bold mt-2 mb-3 badge badge-success"><i class="fas fa-shield-alt"></i>&nbsp;&nbsp;Defence</span></h4>
        <p><?php echo $time_message; ?></p>
      </a>
     <a href="include/img_1_post.php?id=<?php echo $id; ?>" style="color:#004d4d;text-transform: uppercase;"><?php echo $title; ?></a>
      <p><?php if(strlen($desc)>25) { echo (substr($desc, 0,120))."........"; }?>
         <a href="include/img_1_post.php?id=<?php echo $id; ?>" class="">
              <h2><i class="fas fa-angle-double-right"></i></h2></a>
      </p>
     
     
    </div>
    
      </div>
<?php } ?>
      <!--third grid-->
       <?php 
       $selt="SELECT * FROM english_3_img where p_category='DEFENCE' order by id desc limit 0,4";
       $selet=mysqli_query($con,$selt);
       while($data=mysqli_fetch_array($selet)){
        $title=$data["p_title"];
        $desc=$data["p_desc1"];
        $category=$data["p_category"];
        $img=$data["p_img1"];
        $desc2=$data["p_desc2"];
        $desc3=$data["p_desc3"];
        $id=$data["id"];
          ?>
        <div class="col-sm-6 col-lg-3 col-md-6 mx-auto my-2 mx-1">
          <div class="card" style="height:300px;">
        <img src="include/img_3/<?php echo $img; ?>" class="img-fluid" alt="Sample project image" 
      style="height: 200px;">
       <a href="" class="">
       <h5><span class="font-weight-bold mx-2 my-1 badge badge-danger"><i class="fas fa-shield-alt"></i>&nbsp;&nbsp;Defence</span></h5>
      </a>
    <p style="color:#004d4d;"><a href="include/img_3_post.php?id=<?php echo $id; ?>" style="color:#004d4d;"><?php if(strlen($title)>25) { echo (substr($title, 0,120))."........"; }?></a>
    </p>
   
          </div>
       <!-- <div class="view overlay rounded z-depth-0" style="height:300px;">
     
    </div>
    
     

     
    </div>
     
      <!third grid-->
        
       <!-- -->
      
    </div>
    <?php } ?>
    
  </div>
  <div class="text-center">
     <a href="defence.php" class="btn btn-outline-danger" style="border-radius:8px; ">View More</a>
     </div>
</section>

<section style="" class="my-5" >
  <div class="container-fluid">
   <h3 class="text-center my-2" style="font-size: 35px;"><span class="badge badge-danger">POLITICS</span></h3>
    <div class="row">
   
    <div class="col-sm-12 col-lg-12 col-md-12 mx-auto" id="thirteen_animate">
    <div class="card">
      <div class="row">
        <div class="col-lg-4 col-sm-10 col-md-10 mt-3 mx-auto" id="seventeen_animate">
         <?php 
        $con=mysqli_connect("localhost","root","","writewing");
        $find="SELECT * FROM english_3_img order by rand() limit 0,1";
        $finding=mysqli_query($con,$find);
         $data=mysqli_fetch_array($finding);
              $title=$data["p_title"];
              $category=$data["p_category"];
              $desc=$data["p_desc1"];
              $image=$data["p_img1"];  
              $id=$data["id"];
              $date=$data["p_date"];
                 $date_time_now=date("Y-m-d H:i:s");
              $start_date=new DateTime($date);
              $end_date=new DateTime($date_time_now);
              $interval=$start_date->diff($end_date);

              if($interval->y >=1){
               if($interval->y==1)
                $time_message=$interval->y."year ago";
              else 
                $time_message=$interval->y."years ago";
               
              }
              else if($interval->m >=1) {
                  if($interval->d==0){
                    $days=" ago";
                  }
                  else if($interval->d ==1){
                    $days=$interval->d."day ago";
                  }
                  else {
                    $days=$interval->d."days ago";
                  }
                  if($interval->m==1){
                    $time_message=$interval->m."month".$days;
                  }
                  else {
                    $time_message=$interval->m."month".$days;
                  }
              }
              else if($interval->d>=1){
                if($interval->d==1){
                $time_message=$interval->d."day ago";
              }
              else {
                $time_message=$interval->d."days ago";
              }
              }
              else if($interval->h >=1){
                if($interval->h==1){
                  $time_message=$interval->h."hour ago";
                }
                else {
                  $time_message=$interval->h."hours ago";
                }
              }
              else if($interval->m>=1){
                if($interval->m==1){
                  $time_message=$interval->m."minute ago";
                }
                else {
                  $time_message=$interval->m."minutes ago";
                }
              }
              else{
               if($interval->s<30){
                $time_message="just now";
              }
              else {
                $time_message=$interval->s."second ago";
              }}
            
      ?>
      <!-- Card group -->
<div class="card-group z-depth-0">
 <!-- Card -->
  <div class="card mb-4 z-depth-0">
    <!-- Card image -->
    <div class="view overlay">
      <img class="img-thumbnail img-responsive ml-2" 
      src="include/img_3/<?php echo $image; ?>" alt="Card image cap" style="height: 280px;">
      <a href="#!">
       
      </a>
    </div>
    <!-- Card content -->
    <div class="card-body">
      <!-- Title -->
      <span class="badge badge-danger"><?php echo $category; ?></span>&nbsp;&nbsp;
       <span><?php echo $time_message; ?></span><br>
     <a href="include/img_3_post.php?id=<?php echo $id; ?>" class="mx-auto" style="color:#004d4d;"><?php echo $title; ?></a>


      <!-- Text -->
      <a href="include/img_3_post.php?id=<?php echo $id; ?>" class="ml-2">More
      &nbsp;&nbsp;
<i class="fas fa-angle-double-right"></i>
      </a>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
    </div>
    <!-- Card content -->
  </div>
  <!-- Card --> 
</div>
<div class="row mt-2">
 <?php 
        $con=mysqli_connect("localhost","root","","writewing");
        $find="SELECT * FROM english_3_img order by rand() limit 0,4";
        $finding=mysqli_query($con,$find);
         while($data=mysqli_fetch_array($finding)){
              $title=$data["p_title"];
              $category=$data["p_category"];
              $desc=$data["p_desc1"];
              $image=$data["p_img1"]; 
              $id=$data["id"];       
              $date=$data["p_date"];
                      $date_time_now=date("Y-m-d H:i:s");
              $start_date=new DateTime($date);
              $end_date=new DateTime($date_time_now);
              $interval=$start_date->diff($end_date);

              if($interval->y >=1){
               if($interval->y==1)
                $time_message=$interval->y."year ago";
              else 
                $time_message=$interval->y."years ago";
               
              }
              else if($interval->m >=1) {
                  if($interval->d==0){
                    $days=" ago";
                  }
                  else if($interval->d ==1){
                    $days=$interval->d."day ago";
                  }
                  else {
                    $days=$interval->d."days ago";
                  }
                  if($interval->m==1){
                    $time_message=$interval->m."month".$days;
                  }
                  else {
                    $time_message=$interval->m."month".$days;
                  }
              }
              else if($interval->d>=1){
                if($interval->d==1){
                $time_message=$interval->d."day ago";
              }
              else {
                $time_message=$interval->d."days ago";
              }
              }
              else if($interval->h >=1){
                if($interval->h==1){
                  $time_message=$interval->h."hour ago";
                }
                else {
                  $time_message=$interval->h."hours ago";
                }
              }
              else if($interval->m>=1){
                if($interval->m==1){
                  $time_message=$interval->m."minute ago";
                }
                else {
                  $time_message=$interval->m."minutes ago";
                }
              }
              else{
               if($interval->s<30){
                $time_message="just now";
              }
              else {
                $time_message=$interval->s."second ago";
              }}

      ?>
    <!-- Grid column -->

    <div class="col-lg-5 my-2">
      <!-- Featured image -->
      <div class="view overlay rounded z-depth-0 mb-lg-0 mb-4">
        <img class="img-fluid img-thumbnail img-responsive" src="include/img_3/<?php  echo $image; ?>" alt="Sample image" style="height:100px;width:100%;">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
    </div>
    <div class="col-lg-7  my-2">
      <a href="include/img_3_post.php?id=<?php echo $id; ?>" class="mx-auto" style="color:#004d4d;text-transform: uppercase;">
      <?php echo $title; ?></a>
      <p style="color:grey;" class="ml-2"><?php echo $time_message; ?></p>
      <a href="include/img_3_post.php?id=<?php echo $id; ?>" class="">More
       &nbsp;&nbsp;
<i class="fas fa-angle-double-right"></i></a>
      <!-- Post data -->
    </div>
   
    <!-- Grid column -->
    <?php } ?>
  </div>
    </div>
    <!-- Grid column -->
 
<!-- Card group -->

  <?php 
        $con=mysqli_connect("localhost","root","","writewing");
        $find="SELECT * FROM english_1_img order by rand() limit 0,1";
        $finding=mysqli_query($con,$find);
         $data=mysqli_fetch_array($finding);
            $title=$data["title"];
            $skill=$data["skill"];
            $img=$data["p_img"];
            $desc=$data["p_desc"];
            $id=$data["id"];
            $category=$data["category"];
            $date=$data["p_date"];
                    $date_time_now=date("Y-m-d H:i:s");
              $start_date=new DateTime($date);
              $end_date=new DateTime($date_time_now);
              $interval=$start_date->diff($end_date);

              if($interval->y >=1){
               if($interval->y==1)
                $time_message=$interval->y."year ago";
              else 
                $time_message=$interval->y."years ago";
               
              }
              else if($interval->m >=1) {
                  if($interval->d==0){
                    $days=" ago";
                  }
                  else if($interval->d ==1){
                    $days=$interval->d."day ago";
                  }
                  else {
                    $days=$interval->d."days ago";
                  }
                  if($interval->m==1){
                    $time_message=$interval->m."month".$days;
                  }
                  else {
                    $time_message=$interval->m."month".$days;
                  }
              }
              else if($interval->d>=1){
                if($interval->d==1){
                $time_message=$interval->d."day ago";
              }
              else {
                $time_message=$interval->d."days ago";
              }
              }
              else if($interval->h >=1){
                if($interval->h==1){
                  $time_message=$interval->h."hour ago";
                }
                else {
                  $time_message=$interval->h."hours ago";
                }
              }
              else if($interval->m>=1){
                if($interval->m==1){
                  $time_message=$interval->m."minute ago";
                }
                else {
                  $time_message=$interval->m."minutes ago";
                }
              }
              else{
               if($interval->s<30){
                $time_message="just now";
              }
              else {
                $time_message=$interval->s."second ago";
              }}
      ?>
        <div class="col-lg-4 col-sm-10 col-md-10 mx-auto my-3" id="fourteen_animate">
      <!-- Card group -->
<div class="card-group z-depth-0">
 <!-- Card -->
  <div class="card mb-4 z-depth-0">
    <!-- Card image -->
    <div class="view overlay">
      <img class="img-thumbnail img-responsive " src="
      include/img_1/<?php echo $img; ?>" alt="Card image cap" style="height:280px;">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>
    <!-- Card content -->
    <div class="card-body">
      <!-- Title -->
      <span class="badge badge-success"><?php echo $category; ?></span>&nbsp;&nbsp;
          <span><?php echo $time_message; ?></span><br>
      <a href="include/img_1_post.php?id=<?php echo $id ?>" style="color:#004d4d;text-transform: uppercase;">
      <?php echo $title; ?></a>
      <!-- Text -->
      <a href="include/img_1_post.php?id=<?php echo $id ?>" class="ml-2">More
 &nbsp;&nbsp;
<i class="fas fa-angle-double-right"></i>
      </a>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
    </div>
    <!-- Card content -->
  </div>
  <!-- Card --> 
</div>
<div class="row mt-2">
 <?php 
        $con=mysqli_connect("localhost","root","","writewing");
        $find="SELECT * FROM english_1_img order by rand() limit 0,4";
        $finding=mysqli_query($con,$find);
         while($data=mysqli_fetch_array($finding)){
            $title=$data["title"];
            $skill=$data["skill"];
            $img=$data["p_img"];
            $desc=$data["p_desc"];
            $id=$data["id"];
            $category=$data["category"];
            $date=$data["p_date"];
                    $date_time_now=date("Y-m-d H:i:s");
              $start_date=new DateTime($date);
              $end_date=new DateTime($date_time_now);
              $interval=$start_date->diff($end_date);

              if($interval->y >=1){
               if($interval->y==1)
                $time_message=$interval->y."year ago";
              else 
                $time_message=$interval->y."years ago";
               
              }
              else if($interval->m >=1) {
                  if($interval->d==0){
                    $days=" ago";
                  }
                  else if($interval->d ==1){
                    $days=$interval->d."day ago";
                  }
                  else {
                    $days=$interval->d."days ago";
                  }
                  if($interval->m==1){
                    $time_message=$interval->m."month".$days;
                  }
                  else {
                    $time_message=$interval->m."month".$days;
                  }
              }
              else if($interval->d>=1){
                if($interval->d==1){
                $time_message=$interval->d."day ago";
              }
              else {
                $time_message=$interval->d."days ago";
              }
              }
              else if($interval->h >=1){
                if($interval->h==1){
                  $time_message=$interval->h."hour ago";
                }
                else {
                  $time_message=$interval->h."hours ago";
                }
              }
              else if($interval->m>=1){
                if($interval->m==1){
                  $time_message=$interval->m."minute ago";
                }
                else {
                  $time_message=$interval->m."minutes ago";
                }
              }
              else{
               if($interval->s<30){
                $time_message="just now";
              }
              else {
                $time_message=$interval->s."second ago";
              }}
      ?>
    <!-- Grid column -->
    <div class="col-lg-5">
      <!-- Featured image -->
      <div class="view overlay rounded z-depth-0 mb-lg-0 mb-4 ml-2">
        <img class="img-fluid img-thumbnail img-responsive" src="include/img_1/<?php echo $img; ?>" alt="Sample image" style="height:100px;width:100%;">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
    </div>
    <!-- Grid column -->
    <!-- Grid column -->
    <div class="col-lg-7">
      <a href="include/img_1_post.php?id=<?php echo $id; ?>"  class="mx-auto " style="color:#004d4d;text-transform: uppercase;">
      <?php echo $title; ?></a>
      <p style="color:grey" class="ml-2"><?php echo $time_message; ?></p>
      <!-- Post data -->
      <a href="include/img_1_post.php?id=<?php echo $id; ?>" class="">More &nbsp;&nbsp;
<i class="fas fa-angle-double-right"></i></a>
    </div>
    <?php } ?>
    <!-- Grid column -->
  </div>

  
<!-- Card group -->

      </div>  
       <?php 
        $con=mysqli_connect("localhost","root","","writewing");
        $find="SELECT * FROM english_3_img order by rand() limit 0,1";
        $finding=mysqli_query($con,$find);
         $data=mysqli_fetch_array($finding);
              $title=$data["p_title"];
              $category=$data["p_category"];
              $desc=$data["p_desc1"];
              $image=$data["p_img1"];
              $id=$data["id"];    
              $date=$data["p_date"];
                      $date_time_now=date("Y-m-d H:i:s");
              $start_date=new DateTime($date);
              $end_date=new DateTime($date_time_now);
              $interval=$start_date->diff($end_date);

              if($interval->y >=1){
               if($interval->y==1)
                $time_message=$interval->y."year ago";
              else 
                $time_message=$interval->y."years ago";
               
              }
              else if($interval->m >=1) {
                  if($interval->d==0){
                    $days=" ago";
                  }
                  else if($interval->d ==1){
                    $days=$interval->d."day ago";
                  }
                  else {
                    $days=$interval->d."days ago";
                  }
                  if($interval->m==1){
                    $time_message=$interval->m."month".$days;
                  }
                  else {
                    $time_message=$interval->m."month".$days;
                  }
              }
              else if($interval->d>=1){
                if($interval->d==1){
                $time_message=$interval->d."day ago";
              }
              else {
                $time_message=$interval->d."days ago";
              }
              }
              else if($interval->h >=1){
                if($interval->h==1){
                  $time_message=$interval->h."hour ago";
                }
                else {
                  $time_message=$interval->h."hours ago";
                }
              }
              else if($interval->m>=1){
                if($interval->m==1){
                  $time_message=$interval->m."minute ago";
                }
                else {
                  $time_message=$interval->m."minutes ago";
                }
              }
              else{
               if($interval->s<30){
                $time_message="just now";
              }
              else {
                $time_message=$interval->s."second ago";
              }}

                
      ?>

        <div class="col-lg-4 col-sm-10 col-md-10 my-3 mx-auto " id="sixteen_animate">
      <!-- Card group -->
<div class="card-group z-depth-0">
 <!-- Card -->
  <div class="card mb-4 z-depth-0">
    <!-- Card image -->
    <div class="view overlay">
      <img class="img-thumbnail img-responsive img-fluid" src="include/img_3/<?php echo $image; ?>" alt="Card image cap" style="height:280px;">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>
    <!-- Card content -->
    <div class="card-body">
      <!-- Title -->
      <span class="badge badge-warning"><?php echo $category; ?></span>&nbsp;&nbsp;
      <span><?php echo $time_message; ?></span><br>
    <a href="include/img_3_post.php?id=<?php echo $id; ?>" class="mx-auto" style="color:#004d4d;"><?php echo $title; ?></a>
      <!-- Text -->
      <a href="include/img_3_post.php?id=<?php echo $id; ?>" class="ml-2">More

 &nbsp;&nbsp;
<i class="fas fa-angle-double-right"></i>
      </a>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
    </div>
    <!-- Card content -->
  </div>
  <!-- Card --> 
</div>
<div class="row mt-2">
 <?php 
        $con=mysqli_connect("localhost","root","","writewing");
        $find="SELECT * FROM english_3_img order by rand() limit 0,4";
        $finding=mysqli_query($con,$find);
         while($data=mysqli_fetch_array($finding)){
              $title=$data["p_title"];
              $category=$data["p_category"];
              $desc=$data["p_desc1"];
              $id=$data["id"];
              $image=$data["p_img1"];    
              $date=$data["p_date"];
                      $date_time_now=date("Y-m-d H:i:s");
              $start_date=new DateTime($date);
              $end_date=new DateTime($date_time_now);
              $interval=$start_date->diff($end_date);

              if($interval->y >=1){
               if($interval->y==1)
                $time_message=$interval->y."year ago";
              else 
                $time_message=$interval->y."years ago";
               
              }
              else if($interval->m >=1) {
                  if($interval->d==0){
                    $days=" ago";
                  }
                  else if($interval->d ==1){
                    $days=$interval->d."day ago";
                  }
                  else {
                    $days=$interval->d."days ago";
                  }
                  if($interval->m==1){
                    $time_message=$interval->m."month".$days;
                  }
                  else {
                    $time_message=$interval->m."month".$days;
                  }
              }
              else if($interval->d>=1){
                if($interval->d==1){
                $time_message=$interval->d."day ago";
              }
              else {
                $time_message=$interval->d."days ago";
              }
              }
              else if($interval->h >=1){
                if($interval->h==1){
                  $time_message=$interval->h."hour ago";
                }
                else {
                  $time_message=$interval->h."hours ago";
                }
              }
              else if($interval->m>=1){
                if($interval->m==1){
                  $time_message=$interval->m."minute ago";
                }
                else {
                  $time_message=$interval->m."minutes ago";
                }
              }
              else{
               if($interval->s<30){
                $time_message="just now";
              }
              else {
                $time_message=$interval->s."second ago";
              }}

                
      ?>
    <!-- Grid column -->
    <div class="col-lg-5 my-2">

      <!-- Featured image -->
      <div class="view overlay rounded z-depth-0 mb-lg-0 mb-4 ml-2">
        <img class="img-fluid img-thumbnail img-responsive" src="include/img_3/<?php echo $image; ?>" alt="Sample image" style="height:100px;width:100%;">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

    </div>
    <!-- Grid column -->
    <!-- Grid column -->
    <div class="col-lg-7 my-2 mx-auto">
      <a href="include/img_3_post.php?id=<?php echo $id; ?>" class="mx-auto" style="color:#004d4d;text-transform: uppercase;
          
          
      "><?php echo $title; ?></a>
      <p style="color:grey" class="ml-2"><?php echo $time_message; ?></p>
      <a href="include/img_3_post.php?id=<?php echo $id; ?>" class="">More
&nbsp;&nbsp;
<i class="fas fa-angle-double-right"></i>
      </a>
      <!-- Post data -->
    </div>
    <hr>
    <!-- Grid column -->
    <?php } ?>
  </div>

  </div>
<!-- Card group -->

      </div>  
      <!--child row-->
       <a href="politics.php" class="btn font-weight-bold btn-outline-danger " style="width:150px;border-radius: 5px;">more</a>
      </div>

      </div>

    </div><!--parent col-->
    </div>
  </div>
</section>
</section>
<h3 class="text-center text-danger font-weight-bold" style="text-transform: uppercase;">
<span class="badge badge-danger"> Sports</span>
<hr class="purple-gradient" style="height: 2px;width: 200px;">
</h3>

  <div class="container">
    <div class="row" style="">

    <h3 class="text-center text-success pl-1 mb-4 font-weight-bold mt-5" style="text-transform:uppercase;
    border-left: 10px solid #ff0066;">Cricket</h3>
      <div class="col-lg-11 col-md-11 col-sm-10 mx-auto " style="background: #e6e6ff;">
<!-- Section: Magazine v.2 -->
<section class="magazine-section my-5">
  <!-- Section heading -->
  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <?php 
 $con=mysqli_connect("localhost","root","","writewing");
 $sel="SELECT * FROM english_1_img where category='CRIRCKET' order by id desc limit 0,1";
 $select=mysqli_query($con,$sel);
 $get=mysqli_fetch_array($select);
 $img1=$get["p_img"];
 $p_category=$get["category"];
 $title=$get["title"];
 $p_desc1=$get["p_desc"];
 $id=$get["id"];
 $date=$get["p_date"];
         $date_time_now=date("Y-m-d H:i:s");
              $start_date=new DateTime($date);
              $end_date=new DateTime($date_time_now);
              $interval=$start_date->diff($end_date);

              if($interval->y >=1){
               if($interval->y==1)
                $time_message=$interval->y."year ago";
              else 
                $time_message=$interval->y."years ago";
               
              }
              else if($interval->m >=1) {
                  if($interval->d==0){
                    $days=" ago";
                  }
                  else if($interval->d ==1){
                    $days=$interval->d."day ago";
                  }
                  else {
                    $days=$interval->d."days ago";
                  }
                  if($interval->m==1){
                    $time_message=$interval->m."month".$days;
                  }
                  else {
                    $time_message=$interval->m."month".$days;
                  }
              }
              else if($interval->d>=1){
                if($interval->d==1){
                $time_message=$interval->d."day ago";
              }
              else {
                $time_message=$interval->d."days ago";
              }
              }
              else if($interval->h >=1){
                if($interval->h==1){
                  $time_message=$interval->h."hour ago";
                }
                else {
                  $time_message=$interval->h."hours ago";
                }
              }
              else if($interval->m>=1){
                if($interval->m==1){
                  $time_message=$interval->m."minute ago";
                }
                else {
                  $time_message=$interval->m."minutes ago";
                }
              }
              else{
               if($interval->s<30){
                $time_message="just now";
              }
              else {
                $time_message=$interval->s."second ago";
              }}

     ?>
    <div class="col-lg-6 col-md-12">
      <!-- Featured news -->
      <div class="single-news mb-lg-0 mb-4">

        <!-- Image -->
        <div class="view overlay rounded z-depth-1-half mb-4">
          <img class="img-fluid img-responsive img-thumbnail" src="include/img_1/<?php echo $img1; ?>" alt="Sample image" style="width: 100%;height:300px;">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        <!-- Data -->
        <div class="news-data d-flex justify-content-between">
          <a href="#!" class="deep-orange-text">
            <h3 class="font-weight-bold">
            <span  class="badge badge-danger"><i class="fas fa-baseball-ball"></i>&nbsp;&nbsp;<?php echo $p_category; ?></span></h3>
          </a>
          <p class="font-weight-bold dark-grey-text"><i class="fas fa-clock-o pr-2"></i><?php echo $time_message; ?></p>
        </div>
        <!-- Excerpt -->
        <h3 class="  mb-3 " id="" style="color:#004d4d;font-size: 20px;"><a href="include/img_1_post.php?id=<?php echo $id; ?>" style="color:#004d4d;"><?php echo $title; ?></a></h3>
        <p class="dark-grey-text mb-lg-0 mb-md-5 mb-4">
        <p><?php if(strlen($p_desc1)>25) { echo (substr($p_desc1, 0,150))."........"; }?></p></p>
      </div>
      <!-- Featured news -->
      <a href="include/img_1_post.php?id=<?php echo $id; ?>" class="">
              <h3><i class="fas fa-angle-double-right"></i></h3></a>
       </a>
    </div>
    <!-- Grid column -->
    <!-- Grid column -->
    <div class="col-lg-6 col-md-6 col-sm-6 mx-auto">
      <!-- Small news -->
      <?php 
   $get="SELECT *FROM english_3_img where p_category='CRIRCKET' order by id desc limit 0,6";
   $fetch=mysqli_query($con,$get);
   while($data=mysqli_fetch_array($fetch)){
$titled=$data["p_title"];
$p_desc=$data["p_desc1"];
$img=$data["p_img1"];
$id=$data["id"];
$date=$data["p_date"];
        $date_time_now=date("Y-m-d H:i:s");
              $start_date=new DateTime($date);
              $end_date=new DateTime($date_time_now);
              $interval=$start_date->diff($end_date);

              if($interval->y >=1){
               if($interval->y==1)
                $time_message=$interval->y."year ago";
              else 
                $time_message=$interval->y."years ago";
               
              }
              else if($interval->m >=1) {
                  if($interval->d==0){
                    $days=" ago";
                  }
                  else if($interval->d ==1){
                    $days=$interval->d."day ago";
                  }
                  else {
                    $days=$interval->d."days ago";
                  }
                  if($interval->m==1){
                    $time_message=$interval->m."month".$days;
                  }
                  else {
                    $time_message=$interval->m."month".$days;
                  }
              }
              else if($interval->d>=1){
                if($interval->d==1){
                $time_message=$interval->d."day ago";
              }
              else {
                $time_message=$interval->d."days ago";
              }
              }
              else if($interval->h >=1){
                if($interval->h==1){
                  $time_message=$interval->h."hour ago";
                }
                else {
                  $time_message=$interval->h."hours ago";
                }
              }
              else if($interval->m>=1){
                if($interval->m==1){
                  $time_message=$interval->m."minute ago";
                }
                else {
                  $time_message=$interval->m."minutes ago";
                }
              }
              else{
               if($interval->s<30){
                $time_message="just now";
              }
              else {
                $time_message=$interval->s."second ago";
              }}

      ?>
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-3">
            <!--Image-->
            <div class="view overlay rounded z-depth-1 mb-4">
              <img class="img-fluid img-responsive img-thumbnail" src="include/img_3/<?php echo $img; ?>" alt="Sample image">
              <a>
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
          </div>
          <!-- Grid column -->
          <!-- Grid column -->
          <div class="col-md-9">
            <!-- Excerpt -->
            <p class="font-weight-bold dark-grey-text"><?php echo $time_message; ?></p>
             <a href="#!" class="deep-orange-text">
            <h5 class="font-weight-bold">
            <span  class="badge badge-danger"><i class="fas fa-baseball-ball"></i>&nbsp;&nbsp;<?php echo $p_category; ?></span></h5>
          </a>
            <div class="d-flex justify-content-between">
              <div class="col-11 text-truncate pl-0 mb-3">
                <a href="include/img_3_post.php?id=<?php echo $id; ?>" class="" style="color:#004d4d;">
               <?php echo $titled; ?></a>
              </div>
              <a href="include/img_3_post.php?id=<?php echo $id; ?>" class="">
              <h3><i class="fas fa-angle-double-right"></i></h3></a>
            </div>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
<?php } ?>
      </div>
     
      <!-- Small news -->
     
    </div>
    <!--Grid column-->

  </div>
  <!-- Grid row -->

</section>
<!-- Section: Magazine v.2 -->
  </div>
      <!--grid -->
     
    </div>
      <h1 class="text-center text-success pl-1 mb-4 font-weight-bold mt-5" style="text-transform:uppercase;">
    <span class="badge badge-danger">Football</span>
    </h1>
    <div class="row mt-5" style="">
   
      <div class="col-lg-11 col-md-11 col-sm-10 mx-auto card">
        <!-- Section: Magazine v.2 -->
<section class="magazine-section my-5">
  <!-- Section heading -->
  <!-- Grid row -->
  <div class="row">
    <!-- Grid column -->
   <?php 
 $con=mysqli_connect("localhost","root","","writewing");
 $sel="SELECT * FROM english_1_img where category='FOOTBALL' order by id desc limit 0,1";
 $select=mysqli_query($con,$sel);
 $get=mysqli_fetch_array($select);
 $img1=$get["p_img"];
 $p_category=$get["category"];
 $title=$get["title"];
 $p_desc1=$get["p_desc"];
 $id=$get["id"];
 $date=$get["p_date"];
         $date_time_now=date("Y-m-d H:i:s");
              $start_date=new DateTime($date);
              $end_date=new DateTime($date_time_now);
              $interval=$start_date->diff($end_date);

              if($interval->y >=1){
               if($interval->y==1)
                $time_message=$interval->y."year ago";
              else 
                $time_message=$interval->y."years ago";
               
              }
              else if($interval->m >=1) {
                  if($interval->d==0){
                    $days=" ago";
                  }
                  else if($interval->d ==1){
                    $days=$interval->d."day ago";
                  }
                  else {
                    $days=$interval->d."days ago";
                  }
                  if($interval->m==1){
                    $time_message=$interval->m."month".$days;
                  }
                  else {
                    $time_message=$interval->m."month".$days;
                  }
              }
              else if($interval->d>=1){
                if($interval->d==1){
                $time_message=$interval->d."day ago";
              }
              else {
                $time_message=$interval->d."days ago";
              }
              }
              else if($interval->h >=1){
                if($interval->h==1){
                  $time_message=$interval->h."hour ago";
                }
                else {
                  $time_message=$interval->h."hours ago";
                }
              }
              else if($interval->m>=1){
                if($interval->m==1){
                  $time_message=$interval->m."minute ago";
                }
                else {
                  $time_message=$interval->m."minutes ago";
                }
              }
              else{
               if($interval->s<30){
                $time_message="just now";
              }
              else {
                $time_message=$interval->s."second ago";
              }}

     ?>
    <div class="col-lg-6 col-md-6 col-sm-6">
      <!-- Featured news -->
      <div class="single-news mb-lg-0 mb-4">
        <!-- Image -->
        <div class="view overlay rounded z-depth-1-half mb-4">
          <img class="img-fluid img-responsive img-thumbnail" src="include/img_1/<?php echo $img1; ?>" alt="Sample image">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        <!-- Data -->
        <div class="news-data d-flex justify-content-between">
          <a href="#!" class="deep-orange-text">
            <h3 class="font-weight-bold"><i class="fas fa-futbol"></i>&nbsp;&nbsp;<span class="badge badge-danger"><?php echo $p_category; ?></span></h3>
          </a>
          <p class="font-weight-bold dark-grey-text"><i class="fas fa-clock-o pr-2"></i><?php echo $time_message; ?></p>
        </div>
        <!-- Excerpt -->
        <h3 class="font-weight-bold  mb-3 " id="" style="font-size:20px;color:#004d4d;"><a><?php echo $title; ?></a></h3>
        <p><?php if(strlen($p_desc1)>25) { echo (substr($p_desc1, 0,250))."........"; }?></p>
         <a href="include/img_1_post.php?id=<?php echo $id; ?>" class="btn btn-info btn-rounded btn-lg float-right"><i class="far fa-hand-point-right"></i>&nbsp;View</a>
      </div>
      <!-- Featured news -->
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-6 col-md-6 col-sm-6">

      <!-- Small news -->
      <div class="single-news mb-4">
 <?php 
   $get="SELECT *FROM english_3_img where p_category='FOOTBALL' order by id desc limit 0,4";
   $fetch=mysqli_query($con,$get);
   while($data=mysqli_fetch_array($fetch)){
$titl=$data["p_title"];
$p_desc=$data["p_desc1"];
$category=$data["p_category"];
$img=$data["p_img1"];
$id=$data["id"];
$date=$data["p_date"];
        $date_time_now=date("Y-m-d H:i:s");
              $start_date=new DateTime($date);
              $end_date=new DateTime($date_time_now);
              $interval=$start_date->diff($end_date);

              if($interval->y >=1){
               if($interval->y==1)
                $time_message=$interval->y."year ago";
              else 
                $time_message=$interval->y."years ago";
               
              }
              else if($interval->m >=1) {
                  if($interval->d==0){
                    $days=" ago";
                  }
                  else if($interval->d ==1){
                    $days=$interval->d."day ago";
                  }
                  else {
                    $days=$interval->d."days ago";
                  }
                  if($interval->m==1){
                    $time_message=$interval->m."month".$days;
                  }
                  else {
                    $time_message=$interval->m."month".$days;
                  }
              }
              else if($interval->d>=1){
                if($interval->d==1){
                $time_message=$interval->d."day ago";
              }
              else {
                $time_message=$interval->d."days ago";
              }
              }
              else if($interval->h >=1){
                if($interval->h==1){
                  $time_message=$interval->h."hour ago";
                }
                else {
                  $time_message=$interval->h."hours ago";
                }
              }
              else if($interval->m>=1){
                if($interval->m==1){
                  $time_message=$interval->m."minute ago";
                }
                else {
                  $time_message=$interval->m."minutes ago";
                }
              }
              else{
               if($interval->s<30){
                $time_message="just now";
              }
              else {
                $time_message=$interval->s."second ago";
              }}

      ?>
        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-md-3">

            <!--Image-->
            <div class="view overlay rounded z-depth-1 mb-4">
              <img class="img-fluid img-responsive img-thumbnail" src="include/img_3/<?php echo $img; ?>" alt="Sample image">
              <a>
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-9">

            <!-- Excerpt -->
            <p class="font-weight-bold dark-grey-text"><?php echo $time_message; ?></p>
            <h5><i class="fas fa-futbol orange-text"></i>&nbsp;&nbsp;<span class="badge badge-danger"><?php  echo $category; ?></span></h5>
            <div class="d-flex justify-content-between">
              <div class="col-11  pl-0 mb-3">
                <a href="#!" class="" style="color:#004d4d;font-size: 20px;">
                <?php echo $titl; ?></a>
              </div>
              <a href="include/img_3_post.php?id=<?php echo $id; ?>" style="font-size: 20px;"><i class="fas fa-angle-double-right"></i></a>
            </div>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </div>
      <!-- Small news -->
<?php } ?>
    </div>
    <!--Grid column-->

  </div>
  <!-- Grid row -->

</section>
<!-- Section: Magazine v.2 -->
      </div><!---grid -->
    </div><!--row -->
    </div>
    <div class="container-fluid">
     <h1 class="text-center font-weight-bold pl-2  ml-4" style="text-transform:uppercase;"><span class="badge badge-danger">Others</span></h1>
    <div class="row" style="">
      <div class="col-lg-11 col-md-11 col-sm-10 mx-auto mt-5 card" style="background:#f9ffe6;">
      <div class="row">
       <?php 
 $con=mysqli_connect("localhost","root","","writewing");
 $sel="SELECT * FROM english_1_img where category='OTHERS' order by id desc limit 0,2";
 $select=mysqli_query($con,$sel);
 while($get=mysqli_fetch_array($select)){
 $img1=$get["p_img"];
 $p_category=$get["category"];
 $title=$get["title"];
 $p_desc1=$get["p_desc"];
 $id=$get["id"];
 $date=$get["p_date"];
  $date_time_now=date("Y-m-d H:i:s");
              $start_date=new DateTime($date);
              $end_date=new DateTime($date_time_now);
              $interval=$start_date->diff($end_date);

              if($interval->y >=1){
               if($interval->y==1)
                $time_message=$interval->y."year ago";
              else 
                $time_message=$interval->y."years ago";
               
              }
              else if($interval->m >=1) {
                  if($interval->d==0){
                    $days=" ago";
                  }
                  else if($interval->d ==1){
                    $days=$interval->d."day ago";
                  }
                  else {
                    $days=$interval->d."days ago";
                  }
                  if($interval->m==1){
                    $time_message=$interval->m."month".$days;
                  }
                  else {
                    $time_message=$interval->m."month".$days;
                  }
              }
              else if($interval->d>=1){
                if($interval->d==1){
                $time_message=$interval->d."day ago";
              }
              else {
                $time_message=$interval->d."days ago";
              }
              }
              else if($interval->h >=1){
                if($interval->h==1){
                  $time_message=$interval->h."hour ago";
                }
                else {
                  $time_message=$interval->h."hours ago";
                }
              }
              else if($interval->m>=1){
                if($interval->m==1){
                  $time_message=$interval->m."minute ago";
                }
                else {
                  $time_message=$interval->m."minutes ago";
                }
              }
              else{
               if($interval->s<30){
                $time_message="just now";
              }
              else {
                $time_message=$interval->s."second ago";
              }}


     ?>

      <div class="col-lg-6 col-md-6 col-sm-10
       mb-4">
    <!--Featured image-->
    <div class="view overlay rounded z-depth-0">
      <img src="include/img_1/<?php echo $img1; ?>" class="z-depth-0 img-fluid img-responsive img-thumbnail" alt="Sample project image"><br>
      <a>
        <div class="mask rgba-white-slight"></div>
        <?php echo $time_message; ?>      </a>
    </div>
    <!--Excerpt-->
    <div class="card-body">
      <a href="" class="green-text">
        <h3 class=""><i class="fas fa-running orange-text"></i>&nbsp;&nbsp;<span class="badge badge-danger">Sports</span></h3>
      </a>
      <p class="font-weight-bold" style="color:#004d4d;" 
      ><?php echo $title; ?></p>
      <a class="btn btn-success btn-sm btn-rounded" href="include/img_1_post.php?id=<?php echo $id; ?>">
       &nbsp;&nbsp; <i class="far fa-hand-point-right"></i></a>
    </div>
  </div>
  <?php } ?>
  </div>
  <div class="row">
   <?php 
   $get="SELECT *FROM english_3_img where p_category='OTHERS' order by id desc limit 0,3";
   $fetch=mysqli_query($con,$get);
   while($data=mysqli_fetch_array($fetch)){
$titl=$data["p_title"];
$p_desc=$data["p_desc1"];
$category=$data["p_category"];
$img=$data["p_img1"];
$id=$data["id"];
$date=$data["p_date"];
        $date_time_now=date("Y-m-d H:i:s");
              $start_date=new DateTime($date);
              $end_date=new DateTime($date_time_now);
              $interval=$start_date->diff($end_date);

              if($interval->y >=1){
               if($interval->y==1)
                $time_message=$interval->y."year ago";
              else 
                $time_message=$interval->y."years ago";
               
              }
              else if($interval->m >=1) {
                  if($interval->d==0){
                    $days=" ago";
                  }
                  else if($interval->d ==1){
                    $days=$interval->d."day ago";
                  }
                  else {
                    $days=$interval->d."days ago";
                  }
                  if($interval->m==1){
                    $time_message=$interval->m."month".$days;
                  }
                  else {
                    $time_message=$interval->m."month".$days;
                  }
              }
              else if($interval->d>=1){
                if($interval->d==1){
                $time_message=$interval->d."day ago";
              }
              else {
                $time_message=$interval->d."days ago";
              }
              }
              else if($interval->h >=1){
                if($interval->h==1){
                  $time_message=$interval->h."hour ago";
                }
                else {
                  $time_message=$interval->h."hours ago";
                }
              }
              else if($interval->m>=1){
                if($interval->m==1){
                  $time_message=$interval->m."minute ago";
                }
                else {
                  $time_message=$interval->m."minutes ago";
                }
              }
              else{
               if($interval->s<30){
                $time_message="just now";
              }
              else {
                $time_message=$interval->s."second ago";
              }}

      ?>
    <div class="col-lg-4 col-sm-6 col-md-6 mx-auto">
      <div class="view overlay rounded z-depth-2">
      <img src="include/img_3/<?php echo $img; ?>" class="img-fluid img-responsive img-thumbnail" alt="Sample project image" style="height:250px;width: 100%;">
      <a>
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>
    <!--Excerpt-->
    <div class="card-body">
      <a href="" class="green-text">
        <h3 class="font-weight-bold mt-2 mb-3"><span class="badge badge-danger"><i class="fas fa-running"></i>&nbsp;&nbsp;Sports</span></h3>
         </a>
        <span class="text-muted;"><?php echo $time_message; ?></span>
     
      <p class="font-weight-bold"
      style="color:#004d4d;"><?php echo $titl; ?></p>
      <a class="btn btn-warning btn-rounded btn-sm" href="include/img_3_post.php?id=<?php echo $id; ?>">
       &nbsp;&nbsp;<i class="far fa-hand-point-right"></i></a>
    </div>
    </div>
    <?php } ?>
  </div>
  <!-- Grid column -->
      </div><!--grid -->
      <div class="col-lg-4 col-md-6 col-sm-6 mx-auto">
        <div class="row">
          
        </div>
      </div>
    </div><!--row-->
    
    </div>
    <!-- Grid row -->
</section>



<h3 class="text-center text-danger font-weight-bold" style="">
<span  class="badge badge-danger">SPOTLIGHT</span>

</h3>
  <div class="container-fluid">
 
    <div class="row">
      <?php $con=mysqli_connect("localhost","root","","writewing");
            $select="SELECT * FROM english_1_img order by rand()  limit 0,1";
            $selected=mysqli_query($con,$select);
            $data=mysqli_fetch_array($selected);
            $title=$data["title"];
            $skill=$data["skill"];
            $img=$data["p_img"];
            $desc=$data["p_desc"];
            $id=$data["id"];
            $category=$data["category"];


       ?>

      <div class="col-sm-10 col-lg-3 col-md-3 mx-auto my-2" style="" id="third_animate">
        <!-- Card -->
<div class="card card-image mb-3" style="
background-image: url('include/img_1/<?php echo $img; ?>');">
    <div class="text-white text-center d-flex align-items-center img-gradient-overlay py-5 px-4">
        <div>
            <h5 class="badge badge-danger"><i class="fas fa-desktop"></i>&nbsp;<?php echo $category; ?></h5>
            <h5 class="card-title pt-2" style="background: white;color:black;"><strong>
            <a href="#"><?php echo $title; ?></a></strong></h5>

            <a class="btn btn-outline-white waves-effect waves-light"
                href="include/single_post.php?id=<?php echo $id; ?>" 

            ><i class="far fa-clone left"></i> View</a>
        </div>
    </div>
</div>
<!-- Card -->
      </div><!-- col-3-->
      <div class="col-sm-10 col-lg-6 col-md-6 mx-auto my-2" id="fourth_animate">
       <?php 
        $con=mysqli_connect("localhost","root","","writewing");
        $find="SELECT * FROM english_3_img order by rand() limit 0,1";
        $finding=mysqli_query($con,$find);
         $data=mysqli_fetch_array($finding);
              $title=$data["p_title"];
              $category=$data["p_category"];
              $desc=$data["p_desc1"];
              $image=$data["p_img1"];
              $id=$data["id"];
      ?>
        <div class="card card-image mb-3" 
        style="background-image: url('include/img_3/<?php echo $image; ?>');">
    <div class="text-white text-center d-flex align-items-center img-gradient-overlay py-5 px-4">
        <div>
            <h5 class="orange-text"><i class="fas fa-desktop"></i>&nbsp;<?php echo $category; ?></h5>
            <h5 class="card-title pt-2"><strong><?php echo $title; ?></strong></h5>
             <?php if(strlen($desc)>25) { echo (substr($desc, 0,140))."........"; } ?></p>
            <a class="btn btn-outline-white waves-effect waves-light" href="img_3_post.php?id=<?php echo $id; ?>"><i class="far fa-clone left"></i> View</a>
        </div>
    </div>
</div>
<!-- Card -->
      </div><!--col-6-->
        <div class="col-sm-10 col-lg-3 col-md-3 mx-auto my-2" id="fifth_animate">
        <!-- Card -->
         <?php 
        $con=mysqli_connect("localhost","root","","writewing");
        $find="SELECT * FROM english_1_img order by rand() limit 0,1";
        $finding=mysqli_query($con,$find);
         $data=mysqli_fetch_array($finding);
            $title=$data["title"];
            $skill=$data["skill"];
            $img=$data["p_img"];
            $desc=$data["p_desc"];
            $id=$data["id"];
      ?>
        <div>
<div class="card card-image mb-3" style="background-image: url('include/img_1/<?php echo $img; ?>');">
    <div class="text-white text-center d-flex align-items-center img-gradient-overlay py-5 px-4">
        <div>
            <h5 class="orange-text"><i class="fas fa-desktop"></i>&nbsp;<?php echo $skill; ?></h5>
            <h5 class="card-title pt-2"><strong>
            <?php if(strlen($title)>55) { echo (substr($desc, 0,45))."........"; } ?></strong></h5>
             <?php if(strlen($desc)>25) { echo (substr($desc, 0,140))."........"; } ?></p>
            <a class="btn btn-outline-white waves-effect waves-light" href="single_post.php?id=<?php echo $id; ?>"><i class="far fa-clone left"></i> View</a>
        </div>
    </div>
</div>

</div>
<!-- Card -->
      </div>
      <!-- col-3-->
    </div><!--row Layout-->
  </div><!--container Layout-->
</main>  <!--Main Layout-->
<hr class="py-4">
<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 col-lg-12 col-md-12 mx-auto">
        <div class="row">
          <div class="col-sm-6 col-lg-6 col-md-6 mx-auto my-2 " id="sixth_animate">
            <div class="card z-depth-0">
              <div class="card-header" style="background: white;">
                <h2 class="font-weight-bold"
                ><span class="badge badge-danger">EDUCATION</span>
                <div class="mt-1 dusty-grass-gradient color-block" style="height:4px;width:300px;background-color:red;"></div>
                </h2>
              </div>
              <div class="card-body">
                <div class="row">
                 <?php 
        $con=mysqli_connect("localhost","root","","writewing");
        $find="SELECT * FROM english_3_img order by rand() limit 0,4";
        $finding=mysqli_query($con,$find);
         while($data=mysqli_fetch_array($finding)){
              $title=$data["p_title"];
              $category=$data["p_category"];
              $desc=$data["p_desc1"];
              $image=$data["p_img1"]; 
              $id=$data["id"];
              $date=$data["p_date"];
               $date_time_now=date("Y-m-d H:i:s");
              $start_date=new DateTime($date);
              $end_date=new DateTime($date_time_now);
              $interval=$start_date->diff($end_date);

              if($interval->y >=1){
               if($interval->y==1)
                $time_message=$interval->y."year ago";
              else 
                $time_message=$interval->y."years ago";
               
              }
              else if($interval->m >=1) {
                  if($interval->d==0){
                    $days=" ago";
                  }
                  else if($interval->d ==1){
                    $days=$interval->d."day ago";
                  }
                  else {
                    $days=$interval->d."days ago";
                  }
                  if($interval->m==1){
                    $time_message=$interval->m."month".$days;
                  }
                  else {
                    $time_message=$interval->m."month".$days;
                  }
              }
              else if($interval->d>=1){
                if($interval->d==1){
                $time_message=$interval->d."day ago";
              }
              else {
                $time_message=$interval->d."days ago";
              }
              }
              else if($interval->h >=1){
                if($interval->h==1){
                  $time_message=$interval->h."hour ago";
                }
                else {
                  $time_message=$interval->h."hours ago";
                }
              }
              else if($interval->m>=1){
                if($interval->m==1){
                  $time_message=$interval->m."minute ago";
                }
                else {
                  $time_message=$interval->m."minutes ago";
                }
              }
              else{
               if($interval->s<30){
                $time_message="just now";
              }
              else {
                $time_message=$interval->s."second ago";
              }}

      ?>
    <!-- Grid column -->
    <div class="col-lg-5">
      <!-- Featured image -->
      <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
        <img class="img-fluid" src="include/img_3/<?php echo $image; ?>" alt="Sample image" 
        style="height:200px;width: 100%;">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
    </div>
    <div class="col-lg-7">
      <!-- Category -->
      <a href="#!" class="indigo-text">
        <h6 class="font-weight-bold mb-3 badge badge-success"><?php echo $category; ?></h6>
      </a><br>
      <!-- Post title -->
      <a href="include/img_3_post.php?id=<?php echo $id; ?>"  style="color:#004d4d;text-transform: uppercase;"><?php echo $title; ?></a></strong>
      <!-- Excerpt -->
      <!-- Post data -->
      <p>by <a><strong>Carine Fox</strong></a>&nbsp;&nbsp;<?php echo $time_message; ?></p>
      <!-- Read more button -->
     <a href="include/img_3_post.php?id=<?php echo $id; ?>" class="">
      <i class="fas fa-angle-double-right"></i></a>

    </div>
    <hr>
    <!-- Grid column -->
      <?php } ?>
  </div>
 
              </div>

            </div>
          </div><!--child col-->
          <div class="col-lg-6 col-sm-6 col-md-6 mx-auto my-2" id="seventh_animate">
             <div class="card z-depth-0" >
               <div class="card-header text-danger" style="background: white;">
                 <h2 style=""
                 ><span class="badge badge-danger">EDUCATION</span>

               <div class="mt-1 dusty-grass-gradient color-block" style="height:4px;width:300px;background-color:red;"></div></h2>
               </div>
               <div class="card-body">
    <div class="row">
 <?php 
        $con=mysqli_connect("localhost","root","","writewing");
        $find="SELECT * FROM english_1_img order by rand() limit 0,6";
        $finding=mysqli_query($con,$find);
         while($data=mysqli_fetch_array($finding)){
            $title=$data["title"];
            $skill=$data["skill"];
            $img=$data["p_img"];
            $desc=$data["p_desc"];
            $id=$data["id"];
      ?>
    <div class="col-lg-6 col-md-6 col-sm-10 mx-auto my-2" >
               <div class="card z-depth-0">
<div class="card booking-card mb-3" style="height: 300px;">
  <!-- Card image -->
 
    <img class="card-img-top" src="
   include/img_1/<?php echo $img; ?>" alt="Card image cap" style="height:50%;">
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  
  <!-- Card content -->
  <div class="card-body">

    <!-- Title -->
   <a href="include/img_1_post.php?id=<?php echo $id; ?>" style="color:#004d4d;text-transform: uppercase;"><?php echo $title; ?></a>
    <!-- Data -->
    <!-- Text -->
    </div>
    </div>
  </div>

</div>
<?php } ?>

<!-- xhildd -->

</div>

<!-- Card -->
               </div>
             </div>
          </div>
        </div><!--child row-->
      </div><!--large grid-->
    </div>
  </div>
</section>
 <h2 class="text-center">
      <span class="badge badge-danger">Our Gallery</span> 
</h2>
<section class="mt-5" style="background:#1f2e2e;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-10 col-lg-10 col-md-10 mx-auto my-2">
        <div class="row">
  <div class="col-md-12" id="eighth_animate">

    <div id="mdb-lightbox-ui"></div>

    <div class="mdb-lightbox">

      <figure class="col-md-4">
        <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(145).jpg" data-size="1600x1067">
          <img alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(145).jpg" class="img-fluid">
        </a>
      </figure>

      <figure class="col-md-4">
        <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(150).jpg" data-size="1600x1067">
          <img alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(150).jpg" class="img-fluid" />
        </a>
      </figure>

      <figure class="col-md-4">
        <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(152).jpg" data-size="1600x1067">
          <img alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(152).jpg" class="img-fluid" />
        </a>
      </figure>

      <figure class="col-md-4">
        <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(42).jpg" data-size="1600x1067">
          <img alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(42).jpg" class="img-fluid" />
        </a>
      </figure>

      <figure class="col-md-4">
        <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(151).jpg" data-size="1600x1067">
          <img alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(151).jpg" class="img-fluid" />
        </a>
      </figure>

      <figure class="col-md-4">
        <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(40).jpg" data-size="1600x1067">
          <img alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(40).jpg" class="img-fluid" />
        </a>
      </figure>

      <figure class="col-md-4">
        <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(148).jpg" data-size="1600x1067">
          <img alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(148).jpg" class="img-fluid" />
        </a>
      </figure>

      <figure class="col-md-4">
        <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(147).jpg" data-size="1600x1067">
          <img alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(147).jpg" class="img-fluid" />
        </a>
      </figure>

      <figure class="col-md-4">
        <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(149).jpg" data-size="1600x1067">
          <img alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(149).jpg" class="img-fluid" />
        </a>
      </figure>

    </div>

  </div>
</div>
      </div>
    </div><!---row -->
  </div><!--container-->
</section>
<hr class="py-1">
<section  style="background:#800033;">
 <div class="container-fluid">
   <div class="row">
     <div class="col-sm-10 col-lg-10 col-md-10 mx-auto" id="ninth_animate">
       <!--Projects section v.4-->
<section>

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold white-text my-5 " id=""
              
                style="font-family:Castellar;" >EDITOR'S PICK &nbsp;
    <i class="fas fa-pencil-alt text-success" style="
   color:#004d4d !important;
    text-shadow: 0 1px 0 #ccc, 
               0 2px 0 #c9c9c9,
               0 3px 0 #bbb,
               0 4px 0 #b9b9b9,
               0 5px 0 #aaa,
               0 6px 1px rgba(0,0,0,.1),
               0 0 5px rgba(0,0,0,.1),
               0 1px 3px rgba(0,0,0,.3),
               0 3px 5px rgba(0,0,0,.2),
               0 5px 10px rgba(0,0,0,.25),
               0 10px 10px rgba(0,0,0,.2),
               0 20px 20px rgba(0,0,0,.15) !important"></i>
                <div class="mt-1 dusty-grass-gradient text-center color-block" style="height:4px;width:300px;background-color:red;"></div>
               </h2>
    <!-- Section description -->

    <!--Grid row-->
    <div class="row mx-1">
  <?php 
        $con=mysqli_connect("localhost","root","","writewing");
        $find="SELECT * FROM english_3_img order by rand() limit 0,1";
        $finding=mysqli_query($con,$find);
         $data=mysqli_fetch_array($finding);
              $title=$data["p_title"];
              $category=$data["p_category"];
              $desc=$data["p_desc1"];
              $image=$data["p_img1"]; 
      ?>
        <!--Grid column-->
        <div class="col-md-12 col-lg-12 col-sm-12 mb-4" id="tenth_animate">

            <div class="card card-image" style="background-image: 
            url(include/img_3/<?php echo $image; ?>);">
                <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                    <div>
                        <h6 class="purple-text badge badge-success"><strong><?php echo $category; ?></strong></h6>
                        <h3 class="card-title py-3 font-weight-bold"><strong><?php echo $title; ?></strong></h3>                       <a class="btn btn-secondary btn-rounded"><i class="far fa-clone left"></i>Take a Look</a>
                    </div>
                </div>
            </div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
         <?php 
        $con=mysqli_connect("localhost","root","","writewing");
        $find="SELECT * FROM english_3_img order by rand() limit 0,1";
        $finding=mysqli_query($con,$find);
         $data=mysqli_fetch_array($finding);
              $title=$data["p_title"];
              $category=$data["p_category"];
              $desc=$data["p_desc1"];
              $image=$data["p_img1"]; 
      ?>
        <div class="col-md-6 mb-4" id="eleventh_animate">
            <div class="card card-image" style="background-image: 
            url(include/img_3/<?php echo $image; ?>);">
                <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                    <div>
                        <h6 class="pink-text badge badge-danger" ><strong><?php echo $category; ?></strong></h6>
                        <h3 class="card-title py-3 font-weight-bold"><strong><?php echo $title; ?></strong></h3>
                       
                        <a class="btn btn-pink btn-rounded"><i class="far fa-clone left"></i> View Inside</a>
                    </div>
                </div>
            </div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
         <?php 
        $con=mysqli_connect("localhost","root","","writewing");
        $find="SELECT * FROM english_1_img order by rand() limit 0,1";
        $finding=mysqli_query($con,$find);
         $data=mysqli_fetch_array($finding);
            $title=$data["title"];
            $skill=$data["skill"];
            $img=$data["p_img"];
            $desc=$data["p_desc"];
            $id=$data["id"];
            $category=$data["category"];
      ?>
        <div class="col-md-6 mb-4">
            <div class="card card-image" style="background-image: 
            url(include/img_1/<?php echo $img; ?>);">
                <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                    <div>
                        <h6 class="green-text badge badge-warning"><strong><?php echo $category; ?></strong></h6>
                        <h3 class="card-title py-3 font-weight-bold"><strong><?php echo $title; ?></strong></h3>
                       
                        <a class="btn btn-success btn-rounded"><i class="far fa-clone left"></i> View Inside</a>
                    </div>
                </div>
            </div>
        </div>
        <!--Grid column-->

    </div>
    <!--Grid row-->

</section>
<!--Projects section v.4-->
     </div>
   </div>
 </div>
</section>


<section class="mt-2 text-center pb-2" style="background:#ebebe0;">
 <h1 href="#" class="text-center" style="font-weight: bold;font-size: 30px;">
 <span class="badge badge-danger">OPINIONS </span>
 </h1>  
   <div class="container">
     <div class="row">
       <div class="col-sm-12 col-lg-12 col-md-12 mx-auto mt-3 ">
         
           <div class="row">
             <div class="col-sm-10 col-lg-4 col-md-6">
               <div class="card">
               <div class="card-header" style="background: white;">
                 <h2 ><span class="badge badge-success">Technology</span></h2>
               </div>
                <div class="card-body">
                 
                 <div class="row mt-2">
                 <?php 
        $con=mysqli_connect("localhost","root","","writewing");
        $find="SELECT * FROM english_3_img order by rand() limit 0,4";
        $finding=mysqli_query($con,$find);
         while($data=mysqli_fetch_array($finding)){
              $title=$data["p_title"];
              $category=$data["p_category"];
              $desc=$data["p_desc1"];
              $image=$data["p_img1"];    
              $id=$data["id"];
              $date=$data["p_date"];
               $date_time_now=date("Y-m-d H:i:s");
              $start_date=new DateTime($date);
              $end_date=new DateTime($date_time_now);
              $interval=$start_date->diff($end_date);

              if($interval->y >=1){
               if($interval->y==1)
                $time_message=$interval->y."year ago";
              else 
                $time_message=$interval->y."years ago";
               
              }
              else if($interval->m >=1) {
                  if($interval->d==0){
                    $days=" ago";
                  }
                  else if($interval->d ==1){
                    $days=$interval->d."day ago";
                  }
                  else {
                    $days=$interval->d."days ago";
                  }
                  if($interval->m==1){
                    $time_message=$interval->m."month".$days;
                  }
                  else {
                    $time_message=$interval->m."month".$days;
                  }
              }
              else if($interval->d>=1){
                if($interval->d==1){
                $time_message=$interval->d."day ago";
              }
              else {
                $time_message=$interval->d."days ago";
              }
              }
              else if($interval->h >=1){
                if($interval->h==1){
                  $time_message=$interval->h."hour ago";
                }
                else {
                  $time_message=$interval->h."hours ago";
                }
              }
              else if($interval->m>=1){
                if($interval->m==1){
                  $time_message=$interval->m."minute ago";
                }
                else {
                  $time_message=$interval->m."minutes ago";
                }
              }
              else{
               if($interval->s<30){
                $time_message="just now";
              }
              else {
                $time_message=$interval->s."second ago";
              }}

                
      ?>
    <!-- Grid column -->
    <div class="col-lg-5">

      <!-- Featured image -->
      <div class="view overlay rounded z-depth-0  mb-3 ml-1">
        <img class="img-fluid img-thumbnail img-responsive" src="
       include/img_3/<?php echo $image; ?>" alt="Sample image" style="height:100px;width:100%;">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

    </div>
    <!-- Grid column -->
    <!-- Grid column -->
    <div class="col-lg-7">
     
       <a href="include/img_3_post.php?id=<?php echo $id; ?>" class="text-justify" style="
       color:#004d4d;
       text-transform: uppercase;
      "><?php echo $title; ?></a><br>
      <span style="color:grey"><?php echo $time_message;  ?></span><br>
      <a href="include/img_3_post.php?id=<?php echo $id; ?>" class="">More
      &nbsp;&nbsp;
<i class="fas fa-angle-double-right"></i></a>
      <!-- Post data -->
    </div>
    <!-- Grid column -->
    <?php } ?>
  </div>
   </div><!--card-body-->
             </div>
           </div>

             <div class="col-sm-10 col-lg-4 col-md-6">
               <div class="card">
            <div class="card-header" style="background: white;">
                 <h3 ><span class="badge badge-success">History</span></h3>
               </div>
               <div class="card-body">
                 
                 <div class="row mt-2">
                 <?php 
        $con=mysqli_connect("localhost","root","","writewing");
        $find="SELECT * FROM english_1_img order by rand() limit 0,4";
        $finding=mysqli_query($con,$find);
         while($data=mysqli_fetch_array($finding)){
            $title=$data["title"];
            $skill=$data["skill"];
            $img=$data["p_img"];
            $desc=$data["p_desc"];
            $id=$data["id"];
            $category=$data["category"];
            $date=$data["p_date"];
             $date_time_now=date("Y-m-d H:i:s");
              $start_date=new DateTime($date);
              $end_date=new DateTime($date_time_now);
              $interval=$start_date->diff($end_date);

              if($interval->y >=1){
               if($interval->y==1)
                $time_message=$interval->y."year ago";
              else 
                $time_message=$interval->y."years ago";
               
              }
              else if($interval->m >=1) {
                  if($interval->d==0){
                    $days=" ago";
                  }
                  else if($interval->d ==1){
                    $days=$interval->d."day ago";
                  }
                  else {
                    $days=$interval->d."days ago";
                  }
                  if($interval->m==1){
                    $time_message=$interval->m."month".$days;
                  }
                  else {
                    $time_message=$interval->m."month".$days;
                  }
              }
              else if($interval->d>=1){
                if($interval->d==1){
                $time_message=$interval->d."day ago";
              }
              else {
                $time_message=$interval->d."days ago";
              }
              }
              else if($interval->h >=1){
                if($interval->h==1){
                  $time_message=$interval->h."hour ago";
                }
                else {
                  $time_message=$interval->h."hours ago";
                }
              }
              else if($interval->m>=1){
                if($interval->m==1){
                  $time_message=$interval->m."minute ago";
                }
                else {
                  $time_message=$interval->m."minutes ago";
                }
              }
              else{
               if($interval->s<30){
                $time_message="just now";
              }
              else {
                $time_message=$interval->s."second ago";
              }}

      ?>
    <!-- Grid column -->
    <div class="col-lg-5">

      <!-- Featured image -->
      <div class="view overlay rounded z-depth-0  mb-1 ml-1">
        <img class="img-fluid img-responsive img-thumbnail" src="
       include/img_1/<?php echo $img; ?>" alt="Sample image" style="height:100px;width: 100%;">
      </div>

    </div>
    <!-- Grid column -->
    <!-- Grid column -->
    <div class="col-lg-7">
     <a href="include/img_1_post.php?id=<?php echo $id; ?>" class="text-justify" style="
     color:#004d4d;text-transform: uppercase;
          
          
      "><?php echo $title; ?></a>
      <span style="color:grey"><?php echo $time_message; ?></span><br>
      <a href="include/img_1_post.php?id=<?php echo $id; ?>" class=""> More
 &nbsp;&nbsp;
<i class="fas fa-angle-double-right"></i>
      </a>
      <!-- Post data -->
    </div>
    <!-- Grid column -->
    <?php } ?>
  </div>

               </div><!--card-body-->
             </div>
           </div>

             <div class="col-sm-10 col-lg-4 col-md-6">
               <div class="card">
                <div class="card-header" style="background: white;">
                 <h3>
               <span class="badge badge-success">Sports</span></h3>
               </div>
                <div class="card-body">
                
                 <div class="row mt-2">
                   <?php 
        $con=mysqli_connect("localhost","root","","writewing");
        $find="SELECT * FROM english_1_img order by rand() limit 0,4";
        $finding=mysqli_query($con,$find);
         while($data=mysqli_fetch_array($finding)){
            $title=$data["title"];
            $skill=$data["skill"];
            $img=$data["p_img"];
            $desc=$data["p_desc"];
            $id=$data["id"];
            $category=$data["category"];
            $date=$data["p_date"];
             $date_time_now=date("Y-m-d H:i:s");
              $start_date=new DateTime($date);
              $end_date=new DateTime($date_time_now);
              $interval=$start_date->diff($end_date);

              if($interval->y >=1){
               if($interval->y==1)
                $time_message=$interval->y."year ago";
              else 
                $time_message=$interval->y."years ago";
               
              }
              else if($interval->m >=1) {
                  if($interval->d==0){
                    $days=" ago";
                  }
                  else if($interval->d ==1){
                    $days=$interval->d."day ago";
                  }
                  else {
                    $days=$interval->d."days ago";
                  }
                  if($interval->m==1){
                    $time_message=$interval->m."month".$days;
                  }
                  else {
                    $time_message=$interval->m."month".$days;
                  }
              }
              else if($interval->d>=1){
                if($interval->d==1){
                $time_message=$interval->d."day ago";
              }
              else {
                $time_message=$interval->d."days ago";
              }
              }
              else if($interval->h >=1){
                if($interval->h==1){
                  $time_message=$interval->h."hour ago";
                }
                else {
                  $time_message=$interval->h."hours ago";
                }
              }
              else if($interval->m>=1){
                if($interval->m==1){
                  $time_message=$interval->m."minute ago";
                }
                else {
                  $time_message=$interval->m."minutes ago";
                }
              }
              else{
               if($interval->s<30){
                $time_message="just now";
              }
              else {
                $time_message=$interval->s."second ago";
              }}

      ?>
    <!-- Grid column -->
    <div class="col-lg-5">

      <!-- Featured image -->
      <div class="view overlay rounded z-depth-0  mb-3 ml-1">
        <img class="img-fluid img-thumbnail img-responsive" src="
        include/img_1/<?php echo $img; ?>" alt="Sample image" style="height: 100px;width: 100%:">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

    </div>
    <!-- Grid column -->
    <!-- Grid column -->
    <div class="col-lg-7">
     
    <a href="include/img_1_post.php?id=<?php echo $id; ?>" class="text-justify mt-1" style="
     color:#004d4d;text-transform: uppercase;
          
          
      "><?php echo $title; ?></a></h6>
      <span style="color:grey"><?php echo $time_message; ?></span>
      <a href="include/img_1_post.php?id=<?php echo $id; ?>" class="">More
        &nbsp;&nbsp;
       <i class="fas fa-angle-double-right"></i>
      </a>
      <!-- Post data -->
    </div>
    <!-- Grid column -->
    <?php } ?>
  </div>

               </div><!--card-body-->
             </div>
           </div>

         </div><!--child row-->
       </div>
     </div><!---row -->
   </div>
</section>

<section class="mt-5 mb-3">
  <div class="container ">
    <div class="row">
      <div class="col-sm-10 col-lg-12 col-md-10 mx-auto mt-5">
      <div class="card">
    <div class="row">

      <div class="col-md-6 mt-3">

        <div class="d-flex flex-column justify-content-center align-items-center h-100">
          <h1 class="heading display-3"  id="brand" style="font-weight: bold;">
          Write Wing</h1>
          <p class="font-weight-bold text-center" style=" 
          text-shadow: 0px 4px 3px rgba(0,0,0,0.4),
             0px 8px 13px rgba(0,0,0,0.1),
             0px 18px 23px rgba(0,0,0,0.1);
             color:#1a000a;">
          Hii this is Write wing on Online News Portal website 
          We are providing some good social stuffs Which
           can definitely help you to get some knowledge
         </p>
         <h3 class="font-weight-bold" style="text-transform: uppercase;">Support Us</h3>
          <div class="mr-auto  text-center mx-auto">
            <button type="button" class="btn btn-danger btn-sm  btn-rounded"> 
            <i class="fas fa-rupee-sign"></i>&nbsp; 50</button>
             <button type="button" class="btn btn-danger btn-sm btn-rounded"> <i class="fas fa-rupee-sign"></i>&nbsp;100</button>
              <button type="button" class="btn btn-info btn-sm btn-rounded"> <i class="fas fa-rupee-sign"></i>&nbsp;200</button>
               <button type="button" class="btn btn-success btn-sm btn-rounded"> <i class="fas fa-rupee-sign"></i>&nbsp;500</button>
                <button type="button" class="btn btn-success btn-sm btn-rounded"> <i class="fas fa-rupee-sign"></i>&nbsp;1000</button>
                 <button type="button" class="btn btn-success btn-sm btn-rounded"> <i class="fas fa-rupee-sign"></i>&nbsp;2000</button>
          </div>
        </div>

      </div>

      <div class="col-md-6">

        <div class="view">
          <img src="
          include/media/p1.jpg" class="img-fluid" alt="smaple image">
          <div class="mask flex-center hm-gradient">
          </div>
        </div>

      </div>

    </div>

  </section>
  <!-- Intro -->


<!-- Main navigation -->
      </div>
    </div><!--row -->
  </div><!--container -->
</section>

</body>
  <!--/.Double navigation-->

  <!--Main Layout-->
  
  <!--Main Layout-->
<footer>
  <?php //include("include/footer.php"); ?>
</footer>
</body>
  <!--Main Layout-->


<!--Main Navigation-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.js"></script>
  <script type="text/javascript">
    // MDB Lightbox Init
$(function () {
$("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
});
  </script>
  <script>
function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML =
  h + ":" + m + ":" + s;
  var t = setTimeout(startTime, 500);
}
function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
</script>
  <script type="text/javascript">
  /*
    $(document).ready(function(){
      $(window).scroll(function(){
        var positiontop=$(document).scrollTop();
        console.log(positiontop);
         if((positiontop>0) && (positiontop<240)){
          $("#top_10").addClass("animated fadeInLeft");

        }
        if((positiontop>240) && (positiontop<400)){
          $("#first_animate").addClass("animated fadeInLeft");

        }
         if((positiontop>400) && (positiontop<700)){
          $("#animate_second").addClass("animated fadeInRightBig");

        }
         if((positiontop>900) && (positiontop<1300)){
          $("#third_animate").addClass("animated rotateInUpLeft");

        }
        if((positiontop>900) && (positiontop<1300)){
          $("#fourth_animate").addClass("animated rotateInDownRight");

        }
        if((positiontop>900) && (positiontop<1300)){
          $("#fifth_animate").addClass("animated rotateInDownLeft");

        }
        if((positiontop>1400) && (positiontop<2100)){
          $("#sixth_animate").addClass("animated flipInX");

        }
        if((positiontop>1400) && (positiontop<2100)){
          $("#seventh_animate").addClass("animated lightSpeedIn");

        }
        if((positiontop>2500) && (positiontop<3300)){
          $("#eighth_animate").addClass("animated flipInX");

        }
        if((positiontop>4000) && (positiontop<4500)){
          $("#ninth_animate").addClass("animated swing");

        }
         if((positiontop>4200) && (positiontop<4600)){
          $("#tenth_animate").addClass("animated jackInTheBox");

        }
         if((positiontop>4200) && (positiontop<4600)){
          $("#eleventh_animate").addClass("animated heartBeat");

        }
        if((positiontop>4900) && (positiontop<5500)){
          $("#thirteen_animate").addClass("animated fadeInDownBig");

        }
        if((positiontop>4900) && (positiontop<5500)){
          $("#thirteen_animate").addClass("animated fadeInDownBig");

        }
        if((positiontop>5500) && (positiontop<6000)){
          $("#fourteen_animate").addClass("animated zoomInDown");

        }
        if((positiontop>5500) && (positiontop<6000)){
          $("#sixteen_animate").addClass("animated zoomInDown");

        }
         if((positiontop>5500) && (positiontop<6000)){
          $("#seventeen_animate").addClass("animated slideInDown");

        }
      })
    })*/

  </script>
  <script type="text/javascript">
    // SideNav Button Initialization
$(".button-collapse").sideNav();
// SideNav Scrollbar Initialization
var sideNavScrollbar = document.querySelector('.custom-scrollbar');
var ps = new PerfectScrollbar(sideNavScrollbar);
  </script>
  <script type="text/javascript">
var d = new Date();
var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
document.getElementById("demo").innerHTML = months[d.getMonth()];
</script>
<script>
var d = new Date();
document.getElementById("demo2").innerHTML = d.getDate();
</script>
<script>
var d = new Date();
if(d.getDay()==1){
document.getElementById("demo3").innerHTML = "MONDAY";  
}
if(d.getDay()==2){
document.getElementById("demo3").innerHTML = "TUESDAY";  
}
if(d.getDay()==3){
document.getElementById("demo3").innerHTML = "WEDNESDAY";  
}
if(d.getDay()==4){
document.getElementById("demo3").innerHTML = "THRUSDAY";  
}
if(d.getDay()==5){
document.getElementById("demo3").innerHTML = "FRIDAY";  
}
if(d.getDay()==6){
document.getElementById("demo3").innerHTML = "SATURDAY";  
}
if(d.getDay()==7){
document.getElementById("demo3").innerHTML = "SUNDAY";  
}


</script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d188396362e24b5"></script>
</body>

</html>
