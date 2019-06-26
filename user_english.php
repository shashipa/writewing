<?php session_start(); ?>
<?php
if(!isset($_COOKIE["user_email"])){

header("location:user_login.php");
}
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
  <link rel="stylesheet" type="text/css" href="header_style.css">
  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="../css/style.css" rel="stylesheet">
</head>

<body>
<style type="text/css">
  label{
    font-weight: bold;
  }
  #ul li a{
    transition: all 1s ease;
  }
  #ul li a:hover {
 background: black !important;
 color:white !important;
 border-radius: 5%;
 border:1px solid transparent;
  }
  #ul li{
    padding:10px;
   
  }
  #top_10{
    display: none;
   
  }

  #img_3{
    display: none;
   
  }
  #img_1{
    display: none;
    
  }
</style>
<!--Navbar -->
<!--Navbar -->

<!--/.Navbar -->
<!--/.Navbar -->
<?php
$con=mysqli_connect("localhost","root","","writewing");
$user_email=$_SESSION["user_email"];
echo $user_email;
if(isset($_POST["top_post"])){
  $error_array=array();
  $post_title=$_POST["title"];
  $post_type=$_POST["type"];
  $name_1=$_POST["name_1"];
  $desc_1=mysqli_real_escape_string($con,$_POST["desc_1"]);
  $img_1=$_FILES["img_1"]["name"];
  $temp_1=$_FILES["img_1"]["tmp_name"];
 $target_1="top10/".$img_1;

$name_2=$_POST["name_2"];
  $img_2=$_FILES["img_2"]["name"];
  $temp_2=$_FILES["img_2"]["tmp_name"];
  $desc_2=mysqli_real_escape_string($con,$_POST["desc_2"]);
  $target_2="top10/".$img_2;

$name_3=$_POST["name_3"];
  $img_3=$_FILES["img_3"]["name"];
  $temp_3=$_FILES["img_3"]["tmp_name"];
  $desc_3=mysqli_real_escape_string($con,$_POST["desc_3"]);
  $target_3="top10/".$img_3;

$name_4=$_POST["name_4"];
  $img_4=$_FILES["img_4"]["name"];
  $temp_4=$_FILES["img_4"]["tmp_name"];
  $desc_4=mysqli_real_escape_string($con,$_POST["desc_4"]);
  $target_4="top10/".$img_4;

$name_5=$_POST["name_5"];
 $img_5=$_FILES["img_5"]["name"];
  $temp_5=$_FILES["img_5"]["tmp_name"];
  $desc_5=mysqli_real_escape_string($con,$_POST["desc_5"]);
  $target_5="top10/".$img_5;


$name_6=$_POST["name_6"];
  $img_6=$_FILES["img_6"]["name"];
  $temp_6=$_FILES["img_6"]["tmp_name"];
  $desc_6=mysqli_real_escape_string($con,$_POST["desc_6"]);
  $target_6="top10/".$img_6;

$type=$_POST["type"];
$name_7=$_POST["name_7"];
  $img_7=$_FILES["img_7"]["name"];
  $temp_7=$_FILES["img_7"]["tmp_name"];
  $desc_7=mysqli_real_escape_string($con,$_POST["desc_7"]);
  $target_7="top10/".$img_7;

$name_8=$_POST["name_8"];
  $img_8=$_FILES["img_8"]["name"];
  $temp_8=$_FILES["img_8"]["tmp_name"];
  $desc_8=mysqli_real_escape_string($con,$_POST["desc_8"]);
  $target_8="top10/".$img_8;


 $img_9=$_FILES["img_9"]["name"];
  $temp_9=$_FILES["img_9"]["tmp_name"];
  $desc_9=mysqli_real_escape_string($con,$_POST["desc_9"]);
  $target_9="top10/".$img_9;


 $img_10=$_FILES["img_10"]["name"];
  $temp_10=$_FILES["img_10"]["tmp_name"];
  $desc_10=mysqli_real_escape_string($con,$_POST["desc_10"]);
  $target_10="top10/".$img_10;
  $date=$_POST["date"];
$user_email=$_SESSION["user_email"];
  $ins="INSERT INTO english_top_10(
  name_1,name_2,name_3,name_4,name_5,name_6,name_7,name_8,p_type,p_img1,p_img2,p_img3,p_img4,p_img5,p_img6,p_img7,p_img8,p_img9,p_img10,p_desc1,p_desc2,p_desc3,p_desc4,p_desc5,p_desc6,p_desc7,p_desc8,p_desc9,p_desc10,
  added_by) values(
  '$name_1','$name_2','$name_3','$name_4','$name_5','$name_6','$name_7','$name_8'
  ,'$type','$img_1','$img_2','$img_3','$img_4','$img_5','$img_6','$img_7','$img_8','$img_9','$img_10','$desc_1','$desc_2','$desc_3','$desc_4','$desc_5','$desc_6','$desc_7','$desc_8','$desc_9','$desc_10','$user_email')";
  $insert=mysqli_query($con,$ins);
  if($insert){
    move_uploaded_file($temp_1,$target_1);
    move_uploaded_file($temp_2,$target_2);
    move_uploaded_file($temp_3,$target_3);
    move_uploaded_file($temp_4,$target_4);
    move_uploaded_file($temp_5,$target_5); 
    move_uploaded_file($temp_6,$target_6);
    move_uploaded_file($temp_7,$target_7);
    move_uploaded_file($temp_8,$target_8);
    move_uploaded_file($temp_9,$target_9);
    move_uploaded_file($temp_10,$target_10);
  }
  else {
    echo mysqli_error($con);
  }
}

 ?>
    </div>
      <div class="col-sm-12 col-lg-12 col-md-12 mx-auto mt-3">

        <div class="card">
          <div class="card-header my-auto white-text aqua-gradient color-block" style="height: 150px;">
            <h5 class="text-center my-auto" style="line-height: 140px;font-weight: bold;">
          Please Post Your Journal Here</h5>
          </div>
          <div class="card-body">
          <div class="form-check">
          <span style="font-weight: bold;">Choose Your Post type</span><br>
             <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" id="materialInline1" name="inlineMaterialRadiosExample">
            <label class="form-check-label text-danger" for="materialInline1">Top 10</label>
            <input type="radio" class="form-check-input" id="materialInline2" name="inlineMaterialRadiosExample">
            <label class="form-check-label text-success" for="materialInline2">3 Image</label>
            <input type="radio" class="form-check-input" id="materialInline3" name="inlineMaterialRadiosExample">
            <label class="form-check-label text-info" for="materialInline3">Single Image</label>
</div>
            </div>
            <form action="user_english.php" method="POST" enctype="multipart/form-data">
            <div id="top_10" class="form-group">
            <div class="form-group mt-2">
            <label for="title" style="font-weight: bold;">Your Post Title&nbsp;&nbsp; <i class="far fa-edit text-danger"></i>
            </label>
              <input class="form-control" type="text" name="title" placeholder="
            Please Add your post title">
            </div>
            <div class="form-group">
              <label for="type" style="font-weight: bold;">Post Type &nbsp;&nbsp; <i class="fab fa-typo3 text-danger"></i> 
              </label>
               <select class="mdb-select md-form colorful-select dropdown-success" style="font-weight: bold;" name="type">
                <option value="IMAGE" style="font-weight: bold;">Image</option>
                <option value="VIDEO" style="font-weight: bold;">Video</option>
              </select>
            </div>
            <div class="form-group">
              <label> First Name</label>
              <input type="text" name="name_1" class="form-control">
            </div>
            <div class="form-group">
              <label for="image">
Post Image &nbsp;1&nbsp;<i class="fas fa-images text-danger"></i></label>
              <div class="file-field big">
                <a class="btn-floating btn-lg pink lighten-1 mt-0 float-left">
                  <i class="fas fa-paperclip" aria-hidden="true"></i>
                  <input type="file" multiple name="img_1">
                </a>
                <div class="file-path-wrapper">
                  <input class="file-path validate form-control" type="text" placeholder="
                 Add one or more file" name="img_1">
                </div>
                 </div>
            </div>
            <div class="form-group">
              <label for="image">Post Video &nbsp;&nbsp;<i class="fas fa-video text-danger"></i></label>
             <div class="file-field big">
                  <a class="btn-floating btn-lg amber darken-2 mt-0 float-left">
                    <i class="fas fa-cloud-upload-alt" aria-hidden="true"></i>
                    <input type="file" multiple name="video_1">
                  </a>
                  <div class="file-path-wrapper">
                    <input class="file-path validate form-control" type="text" placeholder="
                    Upload one or more file" name="video_1">
                  </div>
                </div>
            </div>
           
            <div class="form-group">
              <label for="post">
Please write the description &nbsp;&nbsp;<i class="fas fa-pen-nib text-danger"></i></label>
              <textarea class="form-control" placeholder="PLEASE WRITE ABOUT POST" rows="15" cols="50" name="desc_1"></textarea>
            </div> 

            <!--first image -->
 <div class="form-group">
              <label> Second Name</label>
              <input type="text" name="name_2" class="form-control">
            </div>
            <div class="form-group">
              <label for="image">
Post Image &nbsp;2&nbsp;<i class="fas fa-images text-danger"></i></label>
              <div class="file-field big">
                <a class="btn-floating btn-lg pink lighten-1 mt-0 float-left">
                  <i class="fas fa-paperclip" aria-hidden="true"></i>
                  <input type="file" multiplea name="img_2">
                </a>
                <div class="file-path-wrapper">
                  <input class="file-path validate form-control" type="text" placeholder="
                 Add one or more file" name="img_2">
                </div>
                 </div>
            </div>
            <div class="form-group">
              <label for="image">Post Video &nbsp;&nbsp;<i class="fas fa-video text-danger"></i></label>
             <div class="file-field big">
                  <a class="btn-floating btn-lg amber darken-2 mt-0 float-left">
                    <i class="fas fa-cloud-upload-alt" aria-hidden="true"></i>
                    <input type="file" multiple name="video_2">
                  </a>
                  <div class="file-path-wrapper">
                    <input class="file-path validate form-control" type="text" placeholder="
                    Upload one or more file" name="video_2">
                  </div>
                </div>
            </div>
           
            <div class="form-group">
              <label for="post">
Please write the description &nbsp;&nbsp;<i class="fas fa-pen-nib text-danger"></i></label>
              <textarea class="form-control" placeholder="PLEASE WRITE ABOUT POST" rows="15" cols="50" name="desc_2"></textarea>
            </div>


             <!--second image -->
 <div class="form-group">
              <label> Third Name</label>
              <input type="text" name="name_3" class="form-control">
            </div>
          
            <div class="form-group">
              <label for="image">
Post Image &nbsp;3&nbsp;<i class="fas fa-images text-danger"></i></label>
              <div class="file-field big">
                <a class="btn-floating btn-lg pink lighten-1 mt-0 float-left">
                  <i class="fas fa-paperclip" aria-hidden="true"></i>
                  <input type="file" multiple name="img_3">
                </a>
                <div class="file-path-wrapper">
                  <input class="file-path validate form-control" type="text" placeholder="
                 Add one or more file" name="img_3">
                </div>
                 </div>
            </div>
            <div class="form-group">
              <label for="image">Post Video &nbsp;&nbsp;<i class="fas fa-video text-danger"></i></label>
             <div class="file-field big">
                  <a class="btn-floating btn-lg amber darken-2 mt-0 float-left">
                    <i class="fas fa-cloud-upload-alt" aria-hidden="true"></i>
                    <input type="file" multiple name="video_3">
                  </a>
                  <div class="file-path-wrapper">
                    <input class="file-path validate form-control" type="text" placeholder="
                    Upload one or more file" name="video_3">
                  </div>
                </div>
            </div>
           
            <div class="form-group">
              <label for="post">
Please write the description &nbsp;&nbsp;<i class="fas fa-pen-nib text-danger"></i></label>
              <textarea class="form-control" placeholder="PLEASE WRITE ABOUT POST" rows="15" cols="50" name="desc_3"></textarea>
            </div>

             <!--second image -->


               <div class="form-group">
              <label> Fourth Name</label>
              <input type="text" name="name_4" class="form-control">
            </div>
          
            <div class="form-group">
              <label for="image">
Post Image &nbsp;4&nbsp;<i class="fas fa-images text-danger"></i></label>
              <div class="file-field big">
                <a class="btn-floating btn-lg pink lighten-1 mt-0 float-left">
                  <i class="fas fa-paperclip" aria-hidden="true"></i>
                  <input type="file" multiple name="img_4">
                </a>
                <div class="file-path-wrapper">
                  <input class="file-path validate form-control" type="text" placeholder="
                 Add one or more file" name="img_4">
                </div>
                 </div>
            </div>
            <div class="form-group">
              <label for="image">Post Video &nbsp;&nbsp;<i class="fas fa-video text-danger"></i></label>
             <div class="file-field big">
                  <a class="btn-floating btn-lg amber darken-2 mt-0 float-left">
                    <i class="fas fa-cloud-upload-alt" aria-hidden="true"></i>
                    <input type="file" multiple name="video_4">
                  </a>
                  <div class="file-path-wrapper">
                    <input class="file-path validate form-control" type="text" placeholder="
                    Upload one or more file" name="video_4">
                  </div>
                </div>
            </div>
           
            <div class="form-group">
              <label for="post">
Please write the description &nbsp;&nbsp;<i class="fas fa-pen-nib text-danger"></i></label>
              <textarea class="form-control" placeholder="PLEASE WRITE ABOUT POST" rows="15" cols="50" name="desc_4"></textarea>
            </div>


             <!--second image -->


              <div class="form-group">
              <label> Fith Name</label>
              <input type="text" name="name_5" class="form-control">
            </div>
            <div class="form-group">
              <label for="image">
Post Image &nbsp;5&nbsp;<i class="fas fa-images text-danger"></i></label>
              <div class="file-field big">
                <a class="btn-floating btn-lg pink lighten-1 mt-0 float-left">
                  <i class="fas fa-paperclip" aria-hidden="true"></i>
                  <input type="file" multiple name="img_5">
                </a>
                <div class="file-path-wrapper">
                  <input class="file-path validate form-control" type="text" placeholder="
                 Add one or more file" name="img_5">
                </div>
                 </div>
            </div>
                     <div class="form-group">
              <label for="image">Post Video &nbsp;&nbsp;<i class="fas fa-video text-danger"></i></label>
             <div class="file-field big">
                  <a class="btn-floating btn-lg amber darken-2 mt-0 float-left">
                    <i class="fas fa-cloud-upload-alt" aria-hidden="true"></i>
                    <input type="file" multiple name="video_5">
                  </a>
                  <div class="file-path-wrapper">
                    <input class="file-path validate form-control" type="text" placeholder="
                    Upload one or more file " name="video_5">
                  </div>
                </div>
            </div>
           
            <div class="form-group">
              <label for="post">
Please write the description &nbsp;&nbsp;<i class="fas fa-pen-nib text-danger"></i></label>
              <textarea class="form-control" placeholder="PLEASE WRITE ABOUT POST" rows="15" cols="50" name="desc_5"></textarea>
            </div> <!--second image -->
          <div class="form-group">
              <label> Sixth Name</label>
              <input type="text" name="name_6" class="form-control">
            </div>
            <div class="form-group">
              <label for="image">
Post Image &nbsp;6&nbsp;<i class="fas fa-images text-danger"></i></label>
              <div class="file-field big">
                <a class="btn-floating btn-lg pink lighten-1 mt-0 float-left">
                  <i class="fas fa-paperclip" aria-hidden="true"></i>
                  <input type="file" multiple name="img_6">
                </a>
                <div class="file-path-wrapper">
                  <input class="file-path validate form-control" type="text" placeholder="
                 Add one or more file" name="img_6">
                </div>
                 </div>
            </div>
            <div class="form-group">
              <label for="image">Post Video &nbsp;&nbsp;<i class="fas fa-video text-danger"></i></label>
             <div class="file-field big">
                  <a class="btn-floating btn-lg amber darken-2 mt-0 float-left">
                    <i class="fas fa-cloud-upload-alt" aria-hidden="true"></i>
                    <input type="file" multiple name="video_6">
                  </a>
                  <div class="file-path-wrapper">
                    <input class="file-path validate form-control" type="text" placeholder="
                    Upload one or more file " name="video_6">
                  </div>
                </div>
            </div>
           
            <div class="form-group">
              <label for="post">
Please write the description &nbsp;&nbsp;<i class="fas fa-pen-nib text-danger"></i></label>
              <textarea class="form-control" placeholder="PLEASE WRITE ABOUT POST" rows="15" cols="50" name="desc_6"></textarea>
            </div>


             <!--second image -->
<div class="form-group">
              <label> Seventh Name</label>
              <input type="text" name="name_7" class="form-control">
            </div>

           
            <div class="form-group">
              <label for="image">
Post Image &nbsp;7&nbsp;<i class="fas fa-images text-danger"></i></label>
              <div class="file-field big">
                <a class="btn-floating btn-lg pink lighten-1 mt-0 float-left">
                  <i class="fas fa-paperclip" aria-hidden="true"></i>
                  <input type="file" multiple name="img_7">
                </a>
                <div class="file-path-wrapper">
                  <input class="file-path validate form-control" type="text" placeholder="
                 Add one or more file" name="img_7">
                </div>
                 </div>
            </div>
            <div class="form-group">
              <label for="image">Post Video &nbsp;&nbsp;<i class="fas fa-video text-danger"></i></label>
             <div class="file-field big">
                  <a class="btn-floating btn-lg amber darken-2 mt-0 float-left">
                    <i class="fas fa-cloud-upload-alt" aria-hidden="true"></i>
                    <input type="file" multiple name="video_7">
                  </a>
                  <div class="file-path-wrapper">
                    <input class="file-path validate form-control" type="text" placeholder="
                    Upload one or more file" name="video_7">
                  </div>
                </div>
            </div>
           
            <div class="form-group">
              <label for="post">
Please write the description &nbsp;&nbsp;<i class="fas fa-pen-nib text-danger"></i></label>
              <textarea class="form-control" placeholder="PLEASE WRITE ABOUT POST" rows="15" cols="50" name="desc_7"></textarea>
            </div> 


            <!--second image -->
<div class="form-group">
              <label> Eighth Name</label>
              <input type="text" name="name_8" class="form-control">
            </div>

          
            <div class="form-group">
              <label for="image">
Post Image &nbsp;8&nbsp;<i class="fas fa-images text-danger"></i></label>
              <div class="file-field big">
                <a class="btn-floating btn-lg pink lighten-1 mt-0 float-left">
                  <i class="fas fa-paperclip" aria-hidden="true"></i>
                  <input type="file" multiple name="img_8">
                </a>
                <div class="file-path-wrapper">
                  <input class="file-path validate form-control" type="text" placeholder="
                 Add one or more file" name="img_8">
                </div>
                 </div>
            </div>
            <div class="form-group">
              <label for="image">Post Video &nbsp;&nbsp;<i class="fas fa-video text-danger"></i></label>
             <div class="file-field big">
                  <a class="btn-floating btn-lg amber darken-2 mt-0 float-left">
                    <i class="fas fa-cloud-upload-alt" aria-hidden="true"></i>
                    <input type="file" multiple name="video_8">
                  </a>
                  <div class="file-path-wrapper">
                    <input class="file-path validate form-control" type="text" placeholder="
                    Upload one or more file" name="video_8">
                  </div>
                </div>
            </div>
           
            <div class="form-group">
              <label for="post">
Please write the description &nbsp;&nbsp;<i class="fas fa-pen-nib text-danger"></i></label>
              <textarea class="form-control" placeholder="PLEASE WRITE ABOUT POST" rows="15" cols="50" name="desc_8"></textarea>
            </div>


             <!--second image -->
<div class="form-group">
              <label> Eighth Name</label>
              <input type="text" name="name_8" class="form-control">
            </div>

           
            <div class="form-group">
              <label for="image">
Post Image &nbsp;9&nbsp;<i class="fas fa-images text-danger"></i></label>
              <div class="file-field big">
                <a class="btn-floating btn-lg pink lighten-1 mt-0 float-left">
                  <i class="fas fa-paperclip" aria-hidden="true"></i>
                  <input type="file" multiple name="img_9">
                </a>
                <div class="file-path-wrapper">
                  <input class="file-path validate form-control" type="text" placeholder="
                 Add one or more file" name="img_9">
                </div>
                 </div>
            </div>
            <div class="form-group">
              <label for="image">Post Video &nbsp;&nbsp;<i class="fas fa-video text-danger"></i></label>
             <div class="file-field big">
                  <a class="btn-floating btn-lg amber darken-2 mt-0 float-left">
                    <i class="fas fa-cloud-upload-alt" aria-hidden="true"></i>
                    <input type="file" multiple name="video_9">
                  </a>
                  <div class="file-path-wrapper">
                    <input class="file-path validate form-control" type="text" placeholder="
                    Upload one or more file" name="video_9">
                  </div>
                </div>
            </div>
           
            <div class="form-group">
              <label for="post">
Please write the description &nbsp;&nbsp;<i class="fas fa-pen-nib text-danger"></i></label>
              <textarea class="form-control" placeholder="PLEASE WRITE ABOUT POST" rows="15" cols="50"
              name="desc_9"></textarea>
            </div>


             <!--second image -->



           
            <div class="form-group">
              <label for="image">
Post Image &nbsp;10&nbsp;<i class="fas fa-images text-danger"></i></label>
              <div class="file-field big">
                <a class="btn-floating btn-lg pink lighten-1 mt-0 float-left">
                  <i class="fas fa-paperclip" aria-hidden="true"></i>
                  <input type="file" multiple name="img_10">
                </a>
                <div class="file-path-wrapper">
                  <input class="file-path validate form-control" type="text" placeholder="
                 Add one or more file" name="img_10">
                </div>
                 </div>
            </div>
            <div class="form-group">
              <label for="image">Post Video &nbsp;&nbsp;<i class="fas fa-video text-danger"></i></label>
             <div class="file-field big">
                  <a class="btn-floating btn-lg amber darken-2 mt-0 float-left">
                    <i class="fas fa-cloud-upload-alt" aria-hidden="true"></i>
                    <input type="file" multiple name="video_10">
                  </a>
                  <div class="file-path-wrapper">
                    <input class="file-path validate form-control" type="text" placeholder="
                    Upload one or more file" name="video_10">
                  </div>
                </div>
            </div>
           
            <div class="form-group">
              <label for="post">
Please write the description &nbsp;&nbsp;<i class="fas fa-pen-nib text-danger"></i></label>
              <textarea class="form-control" placeholder="PLEASE WRITE ABOUT POST" rows="15" cols="50" name="desc_10"></textarea>
            </div>


             <!--second image -->


            <div class="form-group">
             
               <label for="date-picker-example">Select Date &nbsp;&nbsp;<i class="fas fa-calendar-alt text-danger"></i></label>
                <input placeholder="Selected date" type="date" id="date-picker-example" class="form-control datepicker" name="date">

            </div>    
<button class="btn btn-ins btn-lg" name="top_post" type="submit">Post</button>
</div>
          </div>
        </form>
            <?php
             $con=mysqli_connect("localhost","root","","writewing");
             if(isset($_POST["sec_post"])){
                 $sec_title=$_POST["sec_title"];
                 $sec_category=$_POST["sec_category"];
                 $sec_type=$_POST["sec_type"];
                 $sec_img_1=$_FILES["sec_img_1"]["name"];
                 $sec_tmp_1=$_FILES["sec_img_1"]["tmp_name"];
                 $sec_target_1="img_3/".$sec_img_1;
                 $sec_desc_1=mysqli_real_escape_string($con,$_POST["sec_desc_1"]);

                 $sec_img_2=$_FILES["sec_img_2"]["name"];
                 $sec_tmp_2=$_FILES["sec_img_2"]["tmp_name"];
                 $sec_target_2="img_3/".$sec_img_2;
                 $sec_desc_2=mysqli_real_escape_string($con,$_POST["sec_desc_2"]);


                 $sec_img_3=$_FILES["sec_img_3"]["name"];
                 $sec_tmp_3=$_FILES["sec_img_3"]["tmp_name"];
                 $sec_target_3="img_3/".$sec_img_3;
                 $sec_desc_3=mysqli_real_escape_string($con,$_POST["sec_desc_3"]);

                 $tag=$_POST["tag"];
                 $tags=implode(',', $tag);
                 $sec_date=$_POST["sec_date"];
                 $insert="INSERT INTO english_3_img(p_title,p_category,p_type,p_img1,p_img2,p_img3,p_desc1,p_desc2,p_desc3,p_tag,p_date,added_by)
                 values('$sec_title','$sec_category','$sec_type','$sec_img_1','$sec_img_2','$sec_img_3','$sec_desc_1','$sec_desc_2','$sec_desc_3','$tags','$sec_date','$user_email')";
                 $inserted=mysqli_query($con,$insert);
                 if($inserted){
                  move_uploaded_file($sec_tmp_1, $sec_target_1);
                   move_uploaded_file($sec_tmp_2, $sec_target_2);
                    move_uploaded_file($sec_tmp_3, $sec_target_3);
                 }
                 else {
                  echo mysqli_error($con);
                 }
             }            

             ?>
           
      
          <div class="card-body">
          <form action="user_english.php" method="POST" enctype="multipart/form-data">
           


            <div id="img_3" class="form-group">
            <div class="form-group mt-2">
            <label for="title" style="font-weight: bold;">Your Post Title&nbsp;&nbsp; <i class="far fa-edit text-danger"></i>
            </label>
              <input class="form-control" type="text" name="sec_title" placeholder="
            Please Add your post title">
            </div>
            <div class="form-group">
              <label for="cat" style="font-weight: bold;">Please Choose the Category Of your Post &nbsp;&nbsp;
              <i class="fas fa-tags text-danger"></i></label>
              <select class="mdb-select md-form colorful-select dropdown-ins" style="font-weight: bold;" name="sec_category">
                <option value="BREAKING NEWS" style="font-weight: bold;">Breaking News</option>
                <option value="POLITICS" style="font-weight: bold;">Politics</option>
                <option value="TOP 10" style="font-weight: bold;">Top 10</option>
                <option value="SCIENCE" style="font-weight: bold;">Science</option>
                <option value="TECHNOLOGY" style="font-weight: bold;">Technology</option>
                <option value="EDUCATION" style="font-weight: bold;">Education</option>
                <option value="CRIRCKET" style="font-weight: bold;">cricket</option>
                <option value="FOOTBALL" style="font-weight: bold;">Football</option>
                <option value="OTHERS" style="font-weight: bold;">Others</option>
                <option value="TREDING" style="font-weight: bold;">Trending</option>
                <option value="EDITOR PIC" style="font-weight: bold;">Editor's Pick</option>
                <option value="GAME" style="font-weight: bold;">Education</option>
                <option value="SOCIAL" style="font-weight: bold;">Social</option>
                <option value="DEFENCE" style="font-weight: bold;">Defence</option>
              </select>
            </div>
            <div class="form-group">
              <label for="type" style="font-weight: bold;">Post Type &nbsp;&nbsp; <i class="fab fa-typo3 text-danger"></i> 
              </label>
               <select class="mdb-select md-form colorful-select dropdown-success" style="font-weight: bold;" name="sec_type">
                <option value="IMAGE" style="font-weight: bold;">Image</option>
                <option value="VIDEO" style="font-weight: bold;">Video</option>
              </select>
            </div>
            <div class="form-group">
              <label for="image">
Post Image &nbsp;&nbsp;<i class="fas fa-images text-danger"></i></label>
              <div class="file-field big">
                <a class="btn-floating btn-lg pink lighten-1 mt-0 float-left">
                  <i class="fas fa-paperclip" aria-hidden="true"></i>
                  <input type="file" multiple name="sec_img_1">
                </a>
                <div class="file-path-wrapper">
                  <input class="file-path validate form-control" type="text" placeholder="
                 Add one or more file-path" name="sec_img_1">
                </div>
                 </div>
            </div>
            <div class="form-group">
              <label for="image">Post Video &nbsp;&nbsp;<i class="fas fa-video text-danger"></i></label>
             <div class="file-field big">
                  <a class="btn-floating btn-lg amber darken-2 mt-0 float-left">
                    <i class="fas fa-cloud-upload-alt" aria-hidden="true"></i>
                    <input type="file" multiple name="sec_video_1">
                  </a>
                  <div class="file-path-wrapper">
                    <input class="file-path validate form-control" type="text" placeholder="
                    Upload one or more file" name="sec_video_1">
                  </div>
                </div>
            </div>

 <div class="form-group">
              <label for="post">
Please write the description(limit 400 words) &nbsp;&nbsp;<i class="fas fa-pen-nib text-danger"></i></label>
              <textarea class="form-control" placeholder="PLEASE WRITE ABOUT POST" rows="15" cols="50" name="sec_desc_1"></textarea>
            </div> 
            <!-- first image -->

             <div class="form-group">
              <label for="image">
Post Image &nbsp;&nbsp;<i class="fas fa-images text-danger"></i></label>
              <div class="file-field big">
                <a class="btn-floating btn-lg pink lighten-1 mt-0 float-left">
                  <i class="fas fa-paperclip" aria-hidden="true"></i>
                  <input type="file" multiple name="sec_img_2">
                </a>
                <div class="file-path-wrapper">
                  <input class="file-path validate form-control" type="text" placeholder="
                 Add one or more file" name="sec_img_2">
                </div>
                 </div>
            </div>
            <div class="form-group">
              <label for="image">Post Video &nbsp;&nbsp;<i class="fas fa-video text-danger"></i></label>
             <div class="file-field big">
                  <a class="btn-floating btn-lg amber darken-2 mt-0 float-left">
                    <i class="fas fa-cloud-upload-alt" aria-hidden="true"></i>
                    <input type="file" multiple name="sec_video_2">
                  </a>
                  <div class="file-path-wrapper">
                    <input class="file-path validate form-control" type="text" placeholder="
                    Upload one or more file" name="sec_video_2">
                  </div>
                </div>
            </div>

 <div class="form-group">
              <label for="post">
Please write the description(limit 400 words) &nbsp;&nbsp;<i class="fas fa-pen-nib text-danger"></i></label>
              <textarea class="form-control" placeholder="PLEASE WRITE ABOUT POST" rows="15" cols="50" name="sec_desc_2"></textarea>
            </div> 
            <!-- first image -->

             <div class="form-group">
              <label for="image">
Post Image &nbsp;&nbsp;<i class="fas fa-images text-danger"></i></label>
              <div class="file-field big">
                <a class="btn-floating btn-lg pink lighten-1 mt-0 float-left">
                  <i class="fas fa-paperclip" aria-hidden="true"></i>
                  <input type="file" multiple name="sec_img_3">
                </a>
                <div class="file-path-wrapper">
                  <input class="file-path validate form-control" type="text" placeholder="
                 Add one or more file" name="sec_img_3">
                </div>
                 </div>
            </div>
            <div class="form-group">
              <label for="image">Post Video &nbsp;&nbsp;<i class="fas fa-video text-danger"></i></label>
             <div class="file-field big">
                  <a class="btn-floating btn-lg amber darken-2 mt-0 float-left">
                    <i class="fas fa-cloud-upload-alt" aria-hidden="true"></i>
                    <input type="file" multiple name="sec_video_3">
                  </a>
                  <div class="file-path-wrapper">
                    <input class="file-path validate form-control" type="text" placeholder="
                    Upload one or more file" name="sec_video_3">
                  </div>
                </div>
            </div>

 <div class="form-group">
              <label for="post">
Please write the description(limit 400 words) &nbsp;&nbsp;<i class="fas fa-pen-nib text-danger"></i></label>
              <textarea class="form-control" placeholder="PLEASE WRITE ABOUT POST" rows="15" cols="50" name="sec_desc_3"></textarea>
            </div> 
            <!-- first image -->

            <div class="form-group">
             
            <label for="tag">Choose Your Tag&nbsp;&nbsp;<i class="fas fa-hashtag text-danger"></i></label>
 <div class="form-check ">




          <input type="checkbox" name="tag[]" value="Breaking News" class="form-check-input" id="one">
          <label class="form-check-label text-danger" for="one">Breaking News</label>

           <input type="checkbox" name="tag[]" value="Politics" class="form-check-input" id="two">
          <label class="form-check-label text-success" for="two">Politics</label>

           <input type="checkbox" name="tag[]" value="Top 10" class="form-check-input" id="three">
          <label class="form-check-label text-primary" for="three">Top 10</label>


           <input type="checkbox" name="tag[]" value="Science" class="form-check-input" id="four">
          <label class="form-check-label text-warning" for="four">Science</label>


           <input type="checkbox" name="tag[]" value="Technology" class="form-check-input" id="five">
          <label class="form-check-label text-dark" for="five">Technology</label>


           <input type="checkbox" name="tag[]" value="Education" class="form-check-input" id="six">
          <label class="form-check-label text-success" for="six">Education</label>


           <input type="checkbox" name="tag[]" value="Trending" class="form-check-input" id="seven">
          <label class="form-check-label text-info" for="seven">Trending</label>


           <input type="checkbox" name="tag[]" value="Editor Pick" class="form-check-input" id="eight">
          <label class="form-check-label text-danger" for="eight">Editor Pick</label>



           <input type="checkbox" name="tag[]" value="cricket" class="form-check-input" id="ni">
          <label class="form-check-label text-success" for="ni">Cricket</label>


          <input type="checkbox" name="tag[]" value="Football" class="form-check-input" id="ten">
          <label class="form-check-label text-success" for="ten">Football</label>


          <input type="checkbox" name="tag[]" value="Others" class="form-check-input" id="eleven">
          <label class="form-check-label text-success" for="eleven">Others</label>


           <input type="checkbox" name="tag[]" value="Social" class="form-check-input" id="twelve">
          <label class="form-check-label text-primary" for="twelve">Social</label>


           <input type="checkbox" name="tag[]" value="Defence" class="form-check-input" id="thirteen">
          <label class="form-check-label text-info" for="thirteen">Defence</label>
          </div>
            </div>   
           
            <div class="form-group">
             
               <label for="date-picker-example">Select Date &nbsp;&nbsp;<i class="fas fa-calendar-alt text-danger"></i></label>
                <input placeholder="Selected date" type="date" id="" class="form-control" name="sec_date">

            </div>    
<button class="btn btn-ins btn-lg" name="sec_post" type="submit">Post</button>
</div>

         

<?php
 $connection=mysqli_connect("localhost","root","","writewing");
 if(isset($_POST["post_three"])){
  $title=$_POST["title"];
  $category=$_POST["cat"];
  $type=$_POST["type"];
   //$desc_1=$_POST["third_desc"];
  $img=$_FILES["third_img"]["name"];
  $temp=$_FILES["third_img"]["tmp_name"];
 $target_1="img_1/".$img;
$third_desc_1=mysqli_real_escape_string($con,$_POST["third_desc_1"]);
$third_desc_2=mysqli_real_escape_string($con,$_POST["third_desc_2"]);
$third_desc_3=mysqli_real_escape_string($con,$_POST["third_desc_3"]);
$skill=$_POST["skill"];
$skills=implode(',', $skill);
$date=$_POST["sec_date"];
$put="INSERT into english_1_img(title,category,type,p_img,p_desc,p_date,skill,p_desc_2,p_desc_3,added_by)
 values (
 '$title',
 '$category',
 '$type',
 '$img',
 '$third_desc_1',
 '$date',
 '$skills',
 '$third_desc_2',
 '$third_desc_3',
 '$user_email'
 )
";
$puted=mysqli_query($con,$put);
if($puted){
  move_uploaded_file($temp, $target_1);
    //header("location:preview.php");
}
else {
  echo mysqli_error($con);
}

 }

 ?>

<!-- -img -2 -->
 <div id="img_1" class="form-group">
            <div class="form-group mt-2">
            <form action="user_english.php" method="POST" enctype="multipart/form-data">
            <label for="title" style="font-weight: bold;">Your Post Title&nbsp;&nbsp; <i class="far fa-edit text-danger"></i>
            </label>
              <input class="form-control" type="text" name="title" placeholder="
            Please Add your post title">
            </div>

            <div class="form-group">
              <label for="cat" style="font-weight: bold;">Please Choose the Category Of your Post &nbsp;&nbsp;
              <i class="fas fa-tags text-danger"></i></label>
              <select class="mdb-select md-form colorful-select dropdown-ins" style="font-weight: bold;" 
              name="cat">
                <option value="BREAKING NEWS" style="font-weight: bold;">Breaking News</option>
                <option value="POLITICS" style="font-weight: bold;">Politics</option>
                <option value="TOP 10" style="font-weight: bold;">Top 10</option>
                <option value="SCIENCE" style="font-weight: bold;">Science</option>
                <option value="TECHNOLOGY" style="font-weight: bold;">Technology</option>
                <option value="EDUCATION" style="font-weight: bold;">Education</option>
                <option value="TREDING" style="font-weight: bold;">Trending</option>
                 <option value="CRIRCKET" style="font-weight: bold;">cricket</option>
                <option value="FOOTBALL" style="font-weight: bold;">Football</option>
                <option value="OTHERS" style="font-weight: bold;">Others</option>
                <option value="EDITOR PIC" style="font-weight: bold;">Editor's Pick</option>
                <option value="GAME" style="font-weight: bold;">Education</option>
                <option value="SOCIAL" style="font-weight: bold;">Social</option>
                <option value="DEFENCE" style="font-weight: bold;">Defence</option>
              </select>
            </div>
            <div class="form-group">
              <label for="type" style="font-weight: bold;">Post Type &nbsp;&nbsp; <i class="fab fa-typo3 text-danger"></i> 
              </label>
               <select class="mdb-select md-form colorful-select dropdown-success" style="font-weight: bold;"
                name="type">
                <option value="IMAGE" style="font-weight: bold;">Image</option>
                <option value="VIDEO" style="font-weight: bold;">Video</option>
              </select>
            </div>
            <div class="form-group">
              <label for="image">
Post Image &nbsp;&nbsp;<i class="fas fa-images text-danger"></i></label>
              <div class="file-field big">
                <a class="btn-floating btn-lg pink lighten-1 mt-0 float-left">
                  <i class="fas fa-paperclip" aria-hidden="true"></i>
                  <input type="file" multiple name="third_img">
                </a>
                <div class="file-path-wrapper">
                  <input class="file-path validate form-control" type="text" placeholder="
                 Add one or more file" name="third_img">
                </div>
                 </div>
            </div>
            <div class="form-group">
              <label for="image">Post Video &nbsp;&nbsp;<i class="fas fa-video text-danger"></i></label>
             <div class="file-field big">
                  <a class="btn-floating btn-lg amber darken-2 mt-0 float-left">
                    <i class="fas fa-cloud-upload-alt" aria-hidden="true"></i>
                    <input type="file" multiple name="third_video">
                  </a>
                  <div class="file-path-wrapper">
                    <input class="file-path validate form-control" type="text" placeholder="
                    Upload one or more file" name="third_video">
                  </div>
                </div>
            </div>
            <div class="form-group">
            <label for="tag">Choose Your Tag&nbsp;&nbsp;<i class="fas fa-hashtag text-danger"></i></label>
                <div class="form-check ">
          <input type="checkbox" name="skill[]" value="Breaking News" class="form-check-input" id="materialInline11">
          <label class="form-check-label text-danger" for="materialInline11">Breaking News</label>

           <input type="checkbox" name="skill[]" value="Politics" class="form-check-input" id="materialInline12">
          <label class="form-check-label text-success" for="materialInline12">Politics</label>

           <input type="checkbox" name="skill[]" value="Top 10" class="form-check-input" id="materialInline13">
          <label class="form-check-label text-primary" for="materialInline13">Top 10</label>

           <input type="checkbox" name="skill[]" value="Science" class="form-check-input" id="materialInline14">
          <label class="form-check-label text-warning" for="materialInline14">Science</label>

           <input type="checkbox" name="skill[]" value="Technology" class="form-check-input" id="materialInline15">
          <label class="form-check-label text-dark" for="materialInline15">Technology</label>

           <input type="checkbox" name="skill[]" value="Education" class="form-check-input" id="materialInline16">
          <label class="form-check-label text-success" for="materialInline16">Education</label>

           <input type="checkbox" name="skill[]" value="Trending" class="form-check-input" id="materialInline17">
          <label class="form-check-label text-info" for="materialInline17">Trending</label>

           <input type="checkbox" name="skill[]" value="Editor Pick" class="form-check-input" id="materialInline18">
          <label class="form-check-label text-danger" for="materialInline18">Editor Pick</label>

           <input type="checkbox" name="skill[]" value="Cricket" class="form-check-input" id="materialInline190">
          <label class="form-check-label text-success" for="materialInline190">Cricket</label>

          <input type="checkbox" name="skill[]" value="Football" class="form-check-input" id="materialInline191">
          <label class="form-check-label text-success" for="materialInline191">Football</label>

          <input type="checkbox" name="skill[]" value="Others" class="form-check-input" id="materialInline192">
          <label class="form-check-label text-success" for="materialInline192">Others</label>

           <input type="checkbox" name="skill[]" value="Social" class="form-check-input" id="materialInline201">
          <label class="form-check-label text-primary" for="materialInline201">Social</label>

           <input type="checkbox" name="skill[]" value="Defence" class="form-check-input" id="materialInline21">
          <label class="form-check-label text-info" for="materialInline21">Defence</label>

           
          </div>
            </div>   
            <div class="form-group">
              <label for="post">
Please write the first description (limit 400 words) &nbsp;&nbsp;<i class="fas fa-pen-nib text-danger"></i></label>
              <textarea class="form-control" placeholder="PLEASE WRITE ABOUT POST" rows="15" cols="50" 
              name="third_desc_1"></textarea>
            </div> 
  <div class="form-group">
              <label for="post">
Please write the second description (limit 400 words) &nbsp;&nbsp;<i class="fas fa-pen-nib text-danger"></i></label>
              <textarea class="form-control" placeholder="PLEASE WRITE ABOUT POST" rows="15" cols="50" 
              name="third_desc_2"></textarea>
            </div> 

              <div class="form-group">
              <label for="post">
Please write the third description (limit 400 words) &nbsp;&nbsp;<i class="fas fa-pen-nib text-danger"></i></label>
              <textarea class="form-control" placeholder="PLEASE WRITE ABOUT POST" rows="15" cols="50" 
              name="third_desc_3"></textarea>
            </div> 
            <div class="form-group">
             
               <label for="date-picker-example">Select Date &nbsp;&nbsp;<i class="fas fa-calendar-alt text-danger"></i></label>
                <input placeholder="Selected date" type="date" id="" class="form-control" name="date">

            </div>    
<button class="btn btn-ins btn-lg" name="post_three" type="submit">Post</button>
</div>
          </div>


      </div>

      </div>
      </form>
    </div>


    <!--row layout -->
  </div>
</main>
<footer>
 
</footer>
</body>
<!--Main Navigation-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../js/mdb.js"></script>
  <script type="text/javascript">
    // SideNav Button Initialization
$(".button-collapse").sideNav();
// SideNav Scrollbar Initialization
var sideNavScrollbar = document.querySelector('.custom-scrollbar');
Ps.initialize(sideNavScrollbar);
  </script>
  <script type="text/javascript">
    // Material Select Initialization
$(document).ready(function() {
$('.mdb-select').materialSelect();
});
  </script>
  <script type="text/javascript">
    // Data Picker Initialization
$('.datepicker').pickadate();
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
      $("#materialInline1").click(function(){
        $("#top_10").toggle();
        $("#img_3").hide();
        $("#img_1").hide();
      })

      $("#materialInline2").click(function(){
        $("#img_3").toggle();
        $("#top_10").hide();
        $("#img_1").hide();
      })
       $("#materialInline3").click(function(){
        $("#img_1").toggle();
        $("#top_10").hide();
        $("#img_3").hide();
      })

    })
  </script>
</body>

</html>
