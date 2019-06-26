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
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="header_style.css">
  <!-- Material Design Bootstrap -->
  <link href="../css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="../css/style.css" rel="stylesheet">
</head>
<style type="text/css">
  #nav{
    height:80px;
    //background: #ff9900 !important;
    margin-top:80px !important;
  }
  #nav_2{
    background:transparent;
    border-style:inset;
    color:black;
    border:none;
  }
  #brand{
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
               0 20px 20px rgba(0,0,0,.15);
               color:#004d4d;
               font-size: 60px;
               font-family:Lucida Calligraphy;
  }
  #nav_ul li{
    padding: 20px;
    font-size: 20px;
    font-weight: bold;
    text-transform: uppercase;
    color:red;
      font-family:Lucida Calligraphy;
  }
  #nav_ul li a{
    color: red;
             color:#004d4d;

  }
  #nav_ul li a:hover{
    color:red;
  }
  #search{
     color: red;
     font-size: 40px;
     text-shadow: 0px 4px 3px rgba(0,0,0,0.4),
             0px 8px 13px rgba(0,0,0,0.1),
             0px 18px 23px rgba(0,0,0,0.1);
             
  }
  #sec_ul li{
    font-weight: bold;
    padding-right: 20px;
    color:#004d4d;
  }
  #sec_ul li a{
    color:#004d4d;
  }
  active{
     text-shadow: 0px 4px 3px rgba(0,0,0,0.4),
             0px 8px 13px rgba(0,0,0,0.1),
             0px 18px 23px rgba(0,0,0,0.1);
             color:#004d4d;
             border-top:2px solid green;
             border-bottom: 2px solid red;
            border-bottom-right-radius: 10px;
            border-bottom-left-radius: 10px;
            border-style: inset;
            border-top-right-radius: 10px;
            border-top-left-radius: 10px;
  }
 
  #sec_ul li a:hover{
    text-shadow: 0px 4px 3px rgba(0,0,0,0.4),
             0px 8px 13px rgba(0,0,0,0.1),
             0px 18px 23px rgba(0,0,0,0.1);
             color:#004d4d;
             border-top:2px solid green;
             border-bottom: 2px solid red;
            border-bottom-right-radius: 10px;
            border-bottom-left-radius: 10px;
            border-style: inset;
            border-top-right-radius: 10px;
            border-top-left-radius: 10px;
  }
  #sec_ul{
  }
  #nav_2{
   // border-bottom: 2px solid green;
  }
  .chip.chip-md {
  height: 42px;
  line-height: 42px;
  border-radius: 21px;
}
.chip.chip-md img {
  height: 42px;
  width: 42px;
}
.chip.chip-md .close {
  height: 42px;
  line-height: 42px;
  border-radius: 21px;
}
.chip.chip-lg {
  height: 52px;
  line-height: 52px;
  border-radius: 26px;
}
.chip.chip-lg img {
  height: 52px;
  width: 52px;
}
.chip.chip-lg .close {
  height: 52px;
  line-height: 52px;
  border-radius: 26px;
}
#nav_2{
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
  border-bottom-left-radius: 5px;
  border-bottom-right-radius: 5px;
}
#navigate ul li {
margin-right:20px;
//text-transform: uppercase;
border-radius:5px;

}
#navigate ul li:hover {
  background: white;
 // box-shadow: 2px 6px 4px #330000;
  text-shadow: 0px 4px 3px rgba(0,0,0,0.4),
             0px 8px 13px rgba(0,0,0,0.1),
             0px 18px 23px rgba(0,0,0,0.1);
             border-bottom:2px solid red;
               color:green !important;
              // font-size:px;
               font-family:Aharoni;
}
#navigate ul li:hover a{
  color:green;
}
#navigate ul li a{
  color:#004d4d;
  font-weight: bold;;
}
#col:hover{
  background: black;
  color: #004d4d;
}
.archived{
  opacity:1 !important;
}

</style>
<body>
<section>
  <!--Main Navigation-->
<header>

  <nav class="navbar navbar-expand-lg z-depth-0 navbar-dark orange mx-auto" style="height: 20px;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Donate</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Write With us</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#">Queries</a>
        </li>
      </ul>
      <ul class="navbar-nav nav-flex-icons">
        <li class="nav-item">
          <a class="nav-link"><i class="fab fa-facebook-f"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link"><i class="fab fa-twitter"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link"><i class="fab fa-instagram"></i></a>
        </li>
      </ul>
    </div>
  </nav>

</header>
<!--Main Navigation-->
</section>
<section class="text-left">
<div class="row">
<div class="col-md-6 col-sm-10 col-lg-6">
<p id="icon" style="text-shadow: rgb(179, 179, 179) 0px 0px 0px, rgb(187, 187, 187) 1px 1px 0px, rgb(195, 195, 195) 2px 2px 0px, rgb(204, 204, 204) 3px 3px 0px, rgb(212, 212, 212) 4px 4px 0px, rgb(221, 221, 221) 5px 5px 0px, rgb(230, 230, 230) 6px 6px 0px, rgb(238, 238, 238) 7px 7px 0px, rgb(247, 247, 247) 8px 8px 0px; font-size: 70px; color: rgb(255, 108, 23);font-family:Castellar;font-weight: bold; border-radius: 0%;background-color: rgb(255, 255, 255);color:#004d4d;"> W<span style="font-family:;color:orange;">R<span style="font-family:; ">i<span>t<span style="font-family:;">e</span></span> <span style="font-family: ;">W</span><span style="color:orange;">in<span style="color:#004d4d;">g</span>
  
 <i id="icon" class="fa fa-cogs" style="text-shadow: rgb(179, 179, 179) 0px 0px 0px, rgb(181, 181, 181) 1px 1px 0px, rgb(183, 183, 183) 2px 2px 0px, rgb(185, 185, 185) 3px 3px 0px, rgb(187, 187, 187) 4px 4px 0px, rgb(189, 189, 189) 5px 5px 0px, rgb(192, 192, 192) 6px 6px 0px, rgb(194, 194, 194) 7px 7px 0px, rgb(196, 196, 196) 8px 8px 0px, rgb(198, 198, 198) 9px 9px 0px, rgb(200, 200, 200) 10px 10px 0px, rgb(203, 203, 203) 11px 11px 0px, rgb(205, 205, 205) 12px 12px 0px, rgb(207, 207, 207) 13px 13px 0px, rgb(209, 209, 209) 14px 14px 0px, rgb(211, 211, 211) 15px 15px 0px, rgb(213, 213, 213) 16px 16px 0px, rgb(216, 216, 216) 17px 17px 0px, rgb(218, 218, 218) 18px 18px 0px, rgb(220, 220, 220) 19px 19px 0px, rgb(222, 222, 222) 20px 20px 0px, rgb(224, 224, 224) 21px 21px 0px, rgb(227, 227, 227) 22px 22px 0px, rgb(229, 229, 229) 23px 23px 0px, rgb(231, 231, 231) 24px 24px 0px, rgb(233, 233, 233) 25px 25px 0px, rgb(235, 235, 235) 26px 26px 0px, rgb(238, 238, 238) 27px 27px 0px, rgb(240, 240, 240) 28px 28px 0px, rgb(242, 242, 242) 29px 29px 0px, rgb(244, 244, 244) 30px 30px 0px, rgb(246, 246, 246) 31px 31px 0px, rgb(248, 248, 248) 32px 32px 0px, rgb(251, 251, 251) 33px 33px 0px, rgb(253, 253, 253) 34px 34px 0px; font-size:32px; color: rgb(255, 18, 42); height: 30px; width: 30px; line-height: 30px; border-radius: 0%; text-align: center; background-color: rgb(255, 255, 255);color:#00ff99
;"></i>  
</p> </div>
<div class="col-sm-10 col-lg-6 col-md-6">
  <a href="colleges.php" class="btn btn-outline-danger btn-rounded mt-5 z-depth-2  btn-block" style="border-radius: 10px;
  font-size:20px;width:90%;" id="col">Top Colleges In India &nbsp;<i class="fas fa-graduation-cap"></i></a> 
</div></div>

</section>
<section>
  <!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark white z-depth-0 lighten-1" id="navigate">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
    aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">Home&nbsp;
        <i class="fas fa-home" style=""></i>
          
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Technology &nbsp;<i class="fas fa-microchip"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sports &nbsp;<i class="fas fa-volleyball-ball"></i></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">Politics&nbsp;<i class="fas fa-fist-raised"></i></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">Education&nbsp;<i class="fas fa-school"></i></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">Entertainment&nbsp;<i class="fas fa-film"></i></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">Top 10</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">History&nbsp;<i class="fas fa-history"></i></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">Breaking&nbsp;<i class="fas fa-newspaper"></i></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">Latest</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">Fact Check</a>
      </li>
    </ul>
  </div>
</nav>
<!--/.Navbar -->
</section>
<section>
  <div class="container">
    <div class="row">
    <?php
    $con=mysqli_connect("localhost","root","","writewing");
    if(isset($_GET["id"])){
$id=$_GET["id"];
$sel="SELECT * FROM english_1_img where  id='$id'";
  $select=mysqli_query($con,$sel);
  $three=mysqli_fetch_array($select);
$p_desc1=$three["p_desc"];
$p_desc2=$three["p_desc_2"];
$p_desc3=$three["p_desc_3"];
$id=$three["id"];
$p_category=$three["category"];
$title=$three["title"];
$date=$three["p_date"];
$id=$three["id"];
$p_img=$three["p_img"];

}
   ?>
      <div class="col-lg-8 col-sm-10 col-md-10 mx-auto">
        <h1><span class="badge badge-danger"><?php echo $p_category; ?></span></h1>
        <h3 style="text-transform: uppercase;font-weight: bold;font-family:Californian FB;"><?php echo $title; ?></h3>
        <div class="my-3">
        <img src="img_1/<?php echo $p_img; ?>" alt="thumbnail" class="img-thumbnail"
  style="width:100%;">
</div>
<p class="badge badge-danger">DEFENCE</p>
<p class="badge badge-info">BREAKING NEWS</p>
<div>
  <img src="img_3/cb.jpg" class="rounded-circle img-fluid " style="width:70px;height: 70px;">
  <a class="btn-floating btn-md btn-fb" type="button" role="button"><i class="fab fa-facebook-f"></i></a>
<!--Twitter-->
<a class="btn-floating btn-md btn-tw" type="button" role="button"><i class="fab fa-twitter"></i></a>
<!--Google +-->
<a class="btn-floating btn-md btn-gplus" type="button" role="button"><i class="fab fa-google-plus-g"></i></a>
<!--Linkedin-->
<a class="btn-floating btn-md btn-li" type="button" role="button"><i class="fab fa-linkedin-in"></i></a>
<!--Instagram-->
</div>

<div>
  <p class="my-4" style="letter-spacing: 1px;">
    <?php
        if(strlen($p_desc1)>20){
          echo $p_desc1."<br><br><br>";
        }
     ?>
  </p>
  <div class="card">
  <div class="card-header text-center">
    <p style="font-weight: bold;text-transform: uppercase;color: red;">You can also look into this</p>
  </div>
    <div class="card-body text-center">
    
      <div class="row">
       <?php 

     $sel="SELECT * FROM english_1_img order by id desc limit 0,3 ";
     $select=mysqli_query($con,$sel);
     while($data=mysqli_fetch_array($select)){
      $img_1=$data["p_img"];
      $title=$data["title"];
      ?>
      <div class="col-lg-4 col-sm-10 col-md-10">
      <img src="img_3/<?php echo $img_1; ?>" class="img-thumbnail" style="width:100px;height: 100px;">
      <p class="font-weight-bold z-depth-1"><?php if(strlen($title)>25) { echo (substr($title, 0,70))."........"; }?></p>
      <a href="#" class="btn btn-danger btn-sm btn-rounded"> Read More</a>
      </div>
<?php } ?>
      </div>
    </div>
  </div>
</div>
<div>
  <p class="my-4" style="letter-spacing: 1px;">
    <?php echo $p_desc2; ?>
  </p>
  <div class="card">
  <div class="card-header text-center">
    <p style="font-weight: bold;text-transform: uppercase;color: red;">You can also look into this</p>
  </div>
    <div class="card-body text-center">
    
      <div class="row">
       <?php 

     $sel="SELECT * FROM english_1_img order by id desc limit 0,3 ";
     $select=mysqli_query($con,$sel);
     while($data=mysqli_fetch_array($select)){
      $img_1=$data["p_img"];
      $title=$data["title"];
      ?>
      <div class="col-lg-4 col-sm-10 col-md-10">
      <img src="img_1/<?php echo $img_1; ?>" class="img-thumbnail" style="width:100px;height: 100px;">
      <p class="font-weight-bold z-depth-1"><?php if(strlen($title)>25) { echo (substr($title, 0,70))."........"; }?></p>
      <a href="#" class="btn btn-success btn-rounded btn-sm">Read More</a>
      </div>
<?php } ?>
      </div>
    </div>
  </div>
</div>
<div>
  <p class="my-4" style="letter-spacing: 1px;">
    <?php echo $p_desc3; ?>
  </p>
  <div class="card">
<div class="card-header" style="background: white">
  <h5 class="text-center" style="font-weight: bold;font-size: 30px;text-transform: uppercase;"> Support the:
  <strong  style="font-weight: bold;font-size: 30px;color:#ff9900;text-transform: uppercase;">Write Wing</strong></h5>
</div>
  <div class="card-body text-center" style="border:1px solid #f5f5f0;">
     <a href="#" class="btn btn-danger btn-rounded btn-md" style="font-weight: bold;"> <i class="fas fa-rupee-sign"></i> &nbsp;50</a>
      <a href="#" class="btn btn-danger btn-md btn-rounded" style="font-weight: bold;"> <i class="fas fa-rupee-sign"></i> &nbsp;100</a>
       <a href="#" class="btn btn-warning btn-md btn-rounded" style="font-weight: bold;"> 
       <i class="fas fa-rupee-sign"></i> &nbsp;200</a>
        <a href="#" class="btn btn-primary btn-md btn-rounded" style="font-weight: bold;"> <i class="fas fa-rupee-sign"></i> &nbsp;500</a>
         <a href="#" class="btn btn-success btn-md btn-rounded" style="font-weight: bold;"> <i class="fas fa-rupee-sign"></i> &nbsp;1000</a>
  </div>
</div>
<hr>
<h4 class="text-danger" style="text-transform: uppercase;font-weight: bold;">Share Our Stuff</h4>
<hr>
  <a class="btn-floating btn-md btn-fb" type="button" role="button"><i class="fab fa-facebook-f"></i></a>
<!--Twitter-->
<a class="btn-floating btn-md btn-tw" type="button" role="button"><i class="fab fa-twitter"></i></a>
<!--Google +-->
<a class="btn-floating btn-md btn-gplus" type="button" role="button"><i class="fab fa-google-plus-g"></i></a>
<!--Linkedin-->
</div>

<!--Section: Comments-->
<section class="my-5">

  <!-- Card header -->>
  <div class="card-header border-0 font-weight-bold">4 comments</div>

  <div class="media d-block d-md-flex mt-4">
    <img class="card-img-64 d-flex mx-auto mb-3" src="https://mdbootstrap.com/img/Photos/Avatars/img (20).jpg"
      alt="Generic placeholder image">
    <div class="media-body text-center text-md-left ml-md-3 ml-0">
      <h5 class="font-weight-bold mt-0">
        <a href="">Miley Steward</a>
        <a href="" class="pull-right">
          <i class="fas fa-reply"></i>
        </a>
      </h5>
      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
      Excepteur sint occaecat
      cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      <div class="media d-block d-md-flex mt-4">
        <img class="card-img-64 d-flex mx-auto mb-3" src="https://mdbootstrap.com/img/Photos/Avatars/img (27).jpg"
          alt="Generic placeholder image">
        <div class="media-body text-center text-md-left ml-md-3 ml-0">
          <h5 class="font-weight-bold mt-0">
            <a href="">Tommy Smith</a>
            <a href="" class="pull-right">
              <i class="fas fa-reply"></i>
            </a>
          </h5>
          Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
          totam rem aperiam, eaque
          ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
        </div>
      </div>

      <!-- Quick Reply -->
      <div class="form-group mt-4">
        <label for="quickReplyFormComment">Your comment</label>
        <textarea class="form-control" id="quickReplyFormComment" rows="5"></textarea>

        <div class="text-center my-4">
          <button class="btn btn-primary btn-sm" type="submit">Post</button>
        </div>
      </div>

      <div class="media d-block d-md-flex mt-3">
        <img class="card-img-64 d-flex mx-auto mb-3" src="https://mdbootstrap.com/img/Photos/Avatars/img (21).jpg"
          alt="Generic placeholder image">
        <div class="media-body text-center text-md-left ml-md-3 ml-0">
          <h5 class="font-weight-bold mt-0">
            <a href="">Sylvester the Cat</a>
            <a href="" class="pull-right">
              <i class="fas fa-reply"></i>
            </a>
          </h5>
          Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed
          quia non numquam eius modi
          tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
        </div>
      </div>
    </div>
  </div>
  <div class="media d-block d-md-flex mt-3">
    <img class="card-img-64 d-flex mx-auto mb-3" src="https://mdbootstrap.com/img/Photos/Avatars/img (30).jpg"
      alt="Generic placeholder image">
    <div class="media-body text-center text-md-left ml-md-3 ml-0">
      <h5 class="font-weight-bold mt-0">
        <a href="">Caroline Horwitz</a>
        <a href="" class="pull-right">
          <i class="fas fa-reply"></i>
        </a>
      </h5>
      At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti
      atque corrupti
      quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa
      officia deserunt mollitia animi, id est laborum et dolorum fuga.
    </div>
  </div>

 
</section>
</div>

 <div class="col-lg-4 col-md-6 col-sm-10 mx-auto mt-5 text-center ">
 <h3 class="text-danger font-weight-bold mt-3" style="text-transform: uppercase;font-family:Copperplate Gothic Bold;border-left: 10px solid green;">Related Articles</h3>
 <?php
 $sel="SELECT * FROM english_3_img  order by rand()  limit 0,5";
 $fetch=mysqli_query($con,$sel);
 while ($extract=mysqli_fetch_array($fetch)){
   $p_img1=$extract["p_img1"];
   $p_category=$extract["p_category"];
   $p_title=$extract["p_title"];
   $p_desc1=$extract["p_desc1"];
   $id=$extract["id"];
 ?>

      <div class="card card-image mt-5" 
      style="background-image: url(img_3/<?php echo $p_img1;?>);">
        <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4 rounded">
          <div>
            <h6 class="green-text">
              <i class="fas fa-eye"></i>
              <strong><?php echo $p_category; ?></strong>
            </h6>
            <h3 class="py-3 font-weight-bold">
              <strong><?php echo $p_title; ?></strong>
            </h3>
            <a class="btn btn-success btn-rounded btn-md" href="img_3_post.php?id=<?php echo $id; ?>"><i class="fas fa-clone left"></i> View project</a>
          </div>
        </div>
      </div>
        <?php } ?> 
    </div>
  
    <!-- Grid column -->
      </div>
      </div><!--first grid-->
    </div>
  </div>
</section>
<footer>
  <?php include("footer.php"); ?>
</footer>
</body>
  <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../js/mdb.js"></script>
  <script type="text/javascript">
    // MDB Lightbox Init
$(function () {
$("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
});
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
      $("#ar_btn").click(function(){
        $("#archive").toggleClass("archived");
      });
    })
  </script>