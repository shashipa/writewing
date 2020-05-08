<?php 
session_start();
//$response = array();

$upload_dir = 'images/';
//$server_url = 'http://localhost/';
$con=mysqli_connect("localhost","writewing","9005314@Ad","greatten");

//$names=mysqli_real_escape_string($con,$request->names);
//$descs=mysqli_real_escape_string($con,$request->descs);

//$names=$_POST["names"];
//$descs=$_POST["descs"];
//if($_FILES['img1'] || $_FILES["img2"] || $_FILES["img3"] || $_FILES["img4"] || $_FILES["img5"] || $_FILES["img6"] || $_FILES["img7"]
//|| $_FILES["img8"] || $_FILES["img9"] || $_FILES["img10"])
//{
 //   if(!isset($_COOKIE["shashi"])){
  //  header("location:https://thegreat10.com/include/login.php");
   // }
if(!isset($_COOKIE["shashi"])){
header("location:https://thegreat10.com/include/login.php");
    
}
else {

   //   $title="";
if(isset($_POST["submit"])){
    $category=$_POST["category"];
   
  //  $category=$_SESSION["category"];
  $title=mysqli_real_escape_string($con,$_POST["title"]);
  // $title=$_SESSION["title"];
   $name1=  mysqli_real_escape_string($con,$_POST["name1"]);  
$_SESSION["title"]=$title;
// $_SESSION["name1"]=$name1;

   $name2=mysqli_real_escape_string($con,$_POST["name2"]); 
    $name3=mysqli_real_escape_string($con,$_POST["name3"]); 
     $name4=mysqli_real_escape_string($con,$_POST["name4"]); 
      $name5=mysqli_real_escape_string($con,$_POST["name5"]);
   $name6=mysqli_real_escape_string($con,$_POST["name6"]);
   $name7=mysqli_real_escape_string($con,$_POST["name7"]); 
   $name8=mysqli_real_escape_string($con,$_POST["name8"]);
     $name9=mysqli_real_escape_string($con,$_POST["name9"]);
   $name10=mysqli_real_escape_string($con,$_POST["name10"]);
   
    
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   $desc1=mysqli_real_escape_string($con,$_POST["desc1"]); 
   $desc1_c=mysqli_real_escape_string($con,$_POST["desc1c"]); 
   $desc1_b=mysqli_real_escape_string($con,$_POST["desc1b"]); 
    $desc2=mysqli_real_escape_string($con,$_POST["desc2"]);  
    $desc2_b=mysqli_real_escape_string($con,$_POST["desc2b"]);  
   $desc2_c= mysqli_real_escape_string($con,$_POST["desc2c"]); 
     $desc3=mysqli_real_escape_string($con,$_POST["desc3"]);
    $desc3_b= mysqli_real_escape_string($con,$_POST["desc3b"]);
     $desc3_c=mysqli_real_escape_string($con,$_POST["desc3c"]);  
     $desc4=mysqli_real_escape_string($con,$_POST["desc4"]); 
     $desc4_b=mysqli_real_escape_string($con,$_POST["desc4b"]);
      $desc4_c=mysqli_real_escape_string($con,$_POST["desc4c"]);
       $desc5=mysqli_real_escape_string($con,$_POST["desc5"]); 
       $desc5_b=mysqli_real_escape_string($con,$_POST["desc5b"]); 
       $desc5_c=mysqli_real_escape_string($con,$_POST["desc5c"]);
   $desc6=mysqli_real_escape_string($con,$_POST["desc6"]);
     $desc6_b=mysqli_real_escape_string($con,$_POST["desc6b"]);
       $desc6_c=mysqli_real_escape_string($con,$_POST["desc6c"]);
     $desc7=mysqli_real_escape_string($con,$_POST["desc7"]);
      $desc7_b=mysqli_real_escape_string($con,$_POST["desc7b"]); 
      $desc7_c=mysqli_real_escape_string($con,$_POST["desc7c"]);
     $desc8=mysqli_real_escape_string($con,$_POST["desc8"]);
     $desc8_b=mysqli_real_escape_string($con,$_POST["desc8b"]);
     $desc8_c=mysqli_real_escape_string($con,$_POST["desc8c"]);
     $desc9=mysqli_real_escape_string($con,$_POST["desc9"]);
       $desc9_b=mysqli_real_escape_string($con,$_POST["desc9b"]); 
      $desc9_c=mysqli_real_escape_string($con,$_POST["desc9c"]); 
     $desc10=mysqli_real_escape_string($con,$_POST["desc10"]);
      $desc10_c=mysqli_real_escape_string($con,$_POST["desc10c"]);
       $desc10_b=mysqli_real_escape_string($con,$_POST["desc10b"]);
       
       $_SESSION["desc1"]=$desc1;  $_SESSION["desc2"]=$desc2;  $_SESSION["desc3"]=$desc3;  $_SESSION["desc4"]=$desc4;  $_SESSION["desc5"]=$desc5;
        $_SESSION["desc6"]=$desc6;  $_SESSION["desc7"]=$desc7;  $_SESSION["desc8"]=$desc8;  $_SESSION["desc9"]=$desc9;  $_SESSION["desc10"]=$desc10;
        $_SESSION["desc1b"]=$desc1b; $_SESSION["desc2b"]=$desc2b; $_SESSION["desc3b"]=$desc3b; $_SESSION["desc4b"]=$desc4b; $_SESSION["desc5b"]=$desc5b;
        $_SESSION["desc6b"]=$desc6b; $_SESSION["desc7b"]=$desc7b; $_SESSION["desc8b"]=$desc8b; $_SESSION["desc9b"]=$desc9b; $_SESSION["desc10b"]=$desc10b;
        $_SESSION["desc1c"]=$desc1c;  $_SESSION["desc2c"]=$desc2c;  $_SESSION["desc3c"]=$desc3c;  $_SESSION["desc4c"]=$desc4c;  $_SESSION["desc5c"]=$desc5c;
         $_SESSION["desc6c"]=$desc6c;  $_SESSION["desc7c"]=$desc7c;  $_SESSION["desc8c"]=$desc8c;  $_SESSION["desc9c"]=$desc9c;  $_SESSION["desc10c"]=$desc10c;
       
       
    $img1_name = $_FILES["img1"]["name"];  $img1_tmp_name = $_FILES["img1"]["tmp_name"];
    $img2_name = $_FILES["img2"]["name"]; $img2_tmp_name = $_FILES["img2"]["tmp_name"];
    $img3_name = $_FILES["img3"]["name"]; $img3_tmp_name = $_FILES["img3"]["tmp_name"];
    $img4_name = $_FILES["img4"]["name"];   $img4_tmp_name = $_FILES["img4"]["tmp_name"];
    $img5_name = $_FILES["img5"]["name"];  $img5_tmp_name = $_FILES["img5"]["tmp_name"];
    $img6_name = $_FILES["img6"]["name"];   $img6_tmp_name = $_FILES["img6"]["tmp_name"];
    $img7_name = $_FILES["img7"]["name"];$img7_tmp_name = $_FILES["img7"]["tmp_name"];
    $img8_name = $_FILES["img8"]["name"];   $img8_tmp_name = $_FILES["img8"]["tmp_name"];
    $img9_name = $_FILES["img9"]["name"];   $img9_tmp_name = $_FILES["img9"]["tmp_name"];
    $img10_name = $_FILES["img10"]["name"];   $img10_tmp_name = $_FILES["img10"]["tmp_name"];
  //  $name3=$_SESSION["name3"]; $name4=$_SESSION["name4"]; $name5=$_SESSION["name5"]; $name6=$_SESSION["name6"]; 

  //  $error = $_FILES["img1"]["error"];
  //  $avatar2_name = $_FILES["avatar2"]["name"];
   // $avatar2_tmp_name = $_FILES["avatar2"]["tmp_name"];
   // $error = $_FILES["avatar"]["error"];
 
    $ins="INSERT INTO topten(title,category,name1,name2,name3,name4,name5,name6,name7,name8,name9,name10,
    desc1,desc1_b,desc1_c
    ,desc2,desc2_b,desc2_c,
    desc3,desc3_b,desc3_c,
    desc4,desc4_b,desc4_c,
    desc5,desc5_b,desc5_c,
    desc6,desc6_b,desc6_c,
    desc7,desc7_b,desc7_c,
    desc8,desc8_b,desc8_c,
    desc9,desc9_b,desc9_c,
    desc10,desc10_b,desc10_c,
    img1,img2,img3,img4,img5,img6,img7,img8,img9,img10)
    values('$title','$category','$name1','$name2','$name3','$name4','$name5','$name6','$name7',
    '$name8','$name9','$name10',
    '$desc1','$desc1_b','$desc1_c',
     '$desc2', '$desc2_b', '$desc2_c',
     '$desc3','$desc3_b','$desc3_c',
    '$desc4', '$desc4_b', '$desc4_c',
    '$desc5','$desc5_b','$desc5_c',

    '$desc6', '$desc6_b', '$desc6_c', 
     '$desc7', '$desc7_b', '$desc7_c',
     '$desc8','$desc8_b','$desc8_c',
     '$desc9', '$desc9_b', '$desc9_c',
     '$desc10', '$desc10_b', '$desc10_c',
     '$img1_name','$img2_name','$img3_name'
    ,'$img4_name','$img5_name','$img6_name','$img7_name','$img8_name','$img9_name','$img10_name')";
    $insert=mysqli_query($con,$ins);
        move_uploaded_file( $img1_tmp_name ,  $upload_dir );
        move_uploaded_file( $img2_tmp_name ,  $upload_dir );
        move_uploaded_file( $img3_tmp_name ,  $upload_dir );
        move_uploaded_file( $img4_tmp_name ,  $upload_dir);
        move_uploaded_file( $img5_tmp_name ,  $upload_dir );
        move_uploaded_file( $img6_tmp_name ,  $upload_dir);
        move_uploaded_file( $img7_tmp_name ,  $upload_dir);
        move_uploaded_file( $img8_tmp_name ,  $upload_dir);
        move_uploaded_file( $img9_tmp_name ,  $upload_dir);
        move_uploaded_file( $img10_tmp_name ,  $upload_dir);
           
     if($insert){
         echo "inserted";
         
     }
     else {
         echo mysqli_error($con);
     }
        
    



    


//echo json_encode($response);
}}

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title></title>
  <!-- MDB icon -->
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
  integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" 
integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Robot:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="../../css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="../../css/style2.css">
</head>
<body>
   <section>
       <div class="container">
           <div class="row">
               <div class="col-12">
                   <form action="https://thegreat10.com/include/add_file_to_upload_data.php" method="POST" name="addpost" enctype="multipart/form-data">
                       <div class="form-group">
                           <label for="title">ENTER YOUR TITLE</label>
                           <textarea class="form-control" id="title"  name="title" value="<?php echo $title; ?>">
                           </textarea>
                        </div>
                        <div class="form-group">
                            <select class="browser-default custom-select form-control"  name="category">
                                <option selected>Open this select menu</option>
                                <option value="WILDLIFE">ANIMAL AND WILDLIFE </option>
                                <option value="AUTO">AUTO</option>
                                <option value="EDUCATION">EDUCATION</option>
                                <option value="PEOPLE">PEOPLE</option>
                                <option value="TECHNOLOGY">TECHNOLOGY</option>
                                <option value="POLITICS">POLITICS</option>
                                <option value="SPORTS">SPORTS</option>
                                <option value="TRAVELS">TRAVELS</option>
                                <option value="DEFENCE">DEFENCE</option>
                                <option value="COUNTRIES">COUNTRIES</option>
                                <option value="MONUMENTS">MONUMENTS</option>
                                <option value="HISTORICAL">HISTORICAL</option>
                                <option value="SCIENCE">SCIENCE</option>
                                <option value="CORPORATE">CORPORATE</option>
                                <option value="ESPORTS">ESPORTS</option>
                                <option value="ADVENTURE">ADVENTURE</option>
                                <option value="GADGETS">GADGETS</option>
                                <option value="CSE">CSE</option>
                                <option value="JOBS">JOBS</option>
                              </select>
                        </div>
                        <div class="form-group">
                            <label for="name1">ENTER YOUR FIRST NAME</label>
                          <input type="text" placeholder="first name" id="name1" class="form-control"
                          name="name1" value="<?php echo $name1; ?>">
                         </div>
                     
                           
                           <div class="">
                             
                             <input type="file" class="form-control" 
                              name="img1">
                           
                           </div>
                         
                         <div class="form-group">
                            <label for="desc1">ENTER YOUR FIRST DESCRIPTION</label>
                            <textarea class="form-control" id="desc1" placeholder="ENTER FIRST DESCRIPTION" rows="12"
                             formControlName="desc1" name="desc1" value="<?php echo $desc1; ?>">
                            </textarea></div>
                            <div class="form-group">
                              <label for="desc1b">ENTER YOUR  FIRST B DESCRIPTION</label>
                              <textarea class="form-control" id="desc1b" placeholder="ENTER FIRST DESCRIPTION"
                              formControlName="desc1b" name="desc1b" rows="12" value="<?php echo $desc1b; ?>">
                             </textarea>
                            </div>
                          <div class="form-group">
                            <label for="desc1c">ENTER YOUR FIRST C  DESCRIPTION</label>

                            <textarea class="form-control" id="desc1C" placeholder="ENTER FIRST DESCRIPTION"
                            formControlName="desc1c" name="desc1c" rows="12" value="<?php echo $desc1c; ?>">
                           </textarea>
                          </div>
                         
                         
                         <div class="form-group">
                            <label for="name2">ENTER YOUR SECOND NAME</label>
                          <input type="text" placeholder="second name" id="name2"
                           class="form-control" formControlName="name2" name="name2" value="<?php echo $name2; ?>">
                         </div>
                       
                           <div class="">
                             <input type="file" class="form-control" id=""
                                name="img2"
                        >
                            
                           </div>
                        
                         <div class="form-group">
                            <label for="desc2">ENTER YOUR SECOND DESCRIPTION</label>
                            <textarea class="form-control" id="desc2" placeholder="ENTER FIRST DESCRIPTION"
                             formControlName="desc2" name="desc2" rows="12"  value="<?php echo $desc2; ?>" >
                            </textarea>
                            <textarea class="form-control" id="desc2" placeholder="ENTER FIRST DESCRIPTION"
                            formControlName="desc2b" name="desc2b" rows="12" value="<?php echo $desc2b; ?>"  >
                           </textarea>
                           <textarea class="form-control" id="desc2" placeholder="ENTER FIRST DESCRIPTION"
                           formControlName="desc2c" name="desc2c" rows="12" value="<?php echo $desc2c; ?>"  > 
                          </textarea>
                         </div>
                         <div class="form-group">
                            <label for="name3">ENTER YOUR THIRD NAME</label>
                          <input type="text" placeholder="third name" id="name3" class="form-control"
                           formControlName="name3" name="name3"  value="<?php echo $name3; ?>" >
                         </div>
                      
                           <div class="">
                             <input type="file" class="form-control" id=""
                           name="img3">
                            
                           </div>
                        
                         <div class="form-group">
                            <label for="desc3">ENTER YOUR THIRD DESCRIPTION</label>
                            <textarea class="form-control" id="desc3" placeholder="ENTER FIRST DESCRIPTION" 
                            formControlName="desc3" name="desc3" rows="12"  value="<?php echo $desc3; ?>"  >
                            </textarea>
                            
                            <textarea class="form-control" id="desc3" placeholder="ENTER FIRST DESCRIPTION" 
                            formControlName="desc3b" name="desc3b" rows="12" value="<?php echo $desc3b; ?>" >
                            </textarea>
                            <textarea class="form-control" id="desc3" placeholder="ENTER FIRST DESCRIPTION" 
                            formControlName="desc3c" name="desc3c" rows="12" value="<?php echo $desc3c; ?>">
                            </textarea>
                         </div>
                         <div class="form-group">
                            <label for="name4">ENTER YOUR FOURTH NAME</label>
                          <input type="text" placeholder="fourth name" id="name4"
                           class="form-control" formControlName="name4" name="name4" value="<?php echo $name4; ?>">
                         </div>
                        
                           <div class="">
                             <input type="file" class="form-control" id=""
                             name="img4">
                           
                           </div>
                         
                         <div class="form-group">
                            <label for="desc4">ENTER YOUR FOURTH DESCRIPTION</label>
                            <textarea class="form-control" id="desc4" placeholder="ENTER FIRST DESCRIPTION" 
                            formControlName="desc4" name="desc4" rows="12" value="<?php echo $desc4; ?> " >
                            </textarea>
                            <textarea class="form-control" id="desc4" placeholder="ENTER FIRST DESCRIPTION" 
                            formControlName="desc4b" name="desc4b" rows="12" value="<?php echo $desc4b; ?> ">
                            </textarea>
                            <textarea class="form-control" id="desc4" placeholder="ENTER FIRST DESCRIPTION" 
                            formControlName="desc4c" name="desc4c" rows="12" value="<?php echo $desc4c; ?>">
                            </textarea>
                         </div>
                         <div class="form-group">
                            <label for="name5">ENTER YOUR FIFTH NAME</label>
                          <input type="text" placeholder="fifth name" id="name5"
                           class="form-control" formControlName="name5" name="name5"  value="<?php echo $name5; ?>">
                         </div>
                        
                           <div class="">
                             <input type="file" class="form-control"
                               name="img5">
                            
                           </div>
                      
                         <div class="form-group">
                            <label for="desc5">ENTER YOUR FIFTH DESCRIPTION</label>
                            <textarea class="form-control" id="desc5" placeholder="ENTER FIRST DESCRIPTION"
                             formControlName="desc5" name="desc5" rows="12" value="<?php echo $desc5; ?>" >
                            </textarea>
                            <textarea class="form-control" id="desc5" placeholder="ENTER FIRST DESCRIPTION"
                            formControlName="desc5b" name="desc5b" rows="12" value="<?php echo $desc5b; ?> ">
                           </textarea>
                           <textarea class="form-control" id="desc5" placeholder="ENTER FIRST DESCRIPTION"
                           formControlName="desc5c" name="desc5c" rows="12" value="<?php echo $desc5c; ?>" >
                          </textarea>
                         </div>
                         <div class="form-group">
                            <label for="name6">ENTER YOUR SIXTH NAME</label>
                          <input type="text" placeholder="sixth name" 
                          id="name6" class="form-control" formControlName="name6" name="name6" value="<?php echo $name6; ?>"  >
                         </div>
                        
                           <div class="">
                             <input type="file" class="form-control" id="inputGroupFile01"
                                name="img6">
                            
                           </div>
                         
                         <div class="form-group">
                            <label for="desc6">ENTER YOUR SIXTH DESCRIPTION</label>
                            <textarea class="form-control" id="desc6" placeholder="ENTER FIRST DESCRIPTION"
                             formControlName="desc6" name="desc6" rows="12" value="<?php echo $desc6; ?>"  >
                            </textarea>
                            <textarea class="form-control" id="desc6" placeholder="ENTER FIRST DESCRIPTION"
                            formControlName="desc6b" name="desc6b" rows="12" value="<?php echo $desc6b; ?> ">
                           </textarea>
                           <textarea class="form-control" id="desc6" placeholder="ENTER FIRST DESCRIPTION"
                           formControlName="desc6c" name="desc6c" rows="12"  value="<?php echo $desc6c; ?>">
                          </textarea>
                         </div>
                         <div class="form-group">
                            <label for="name7">ENTER YOUR SEVENTH NAME</label>
                          <input type="text" placeholder="seventh name" id="name7" 
                          class="form-control" formControlName="name7" name="name7" value="<?php echo $name7; ?>  ">
                         </div>
                       
                           <div class="">
                             <input type="file" class="form-control" 
                                 name="img7">
                           
                           </div>
                      
                         <div class="form-group">
                            <label for="desc7">ENTER YOUR SEVENTH DESCRIPTION</label>
                            <textarea class="form-control" id="desc7" placeholder="ENTER FIRST DESCRIPTION"
                             formControlName="desc7" name="desc7" rows="12" value="<?php echo $desc7; ?>"  >
                            </textarea>
                            <textarea class="form-control" id="desc7" placeholder="ENTER FIRST DESCRIPTION"
                             formControlName="desc7b" name="desc7b" rows="12" value="<?php echo $desc7b; ?> ">
                            
                            </textarea>
                            <textarea class="form-control" id="desc7" placeholder="ENTER FIRST DESCRIPTION"
                             formControlName="desc7c" name="desc7c" rows="12" value="<?php echo $desc7c; ?>" >
                            </textarea>
                         </div>
                         <div class="form-group">
                            <label for="name8">ENTER YOUR EIGHT NAME</label>
                          <input type="text" placeholder="eighth name" id="name8" class="form-control"
                           formControlName="name8" name="name8"  >
                         </div>
                       
                           <div class="custom-file">
                             <input type="file" class="form-control" name="img8"
                              value=<?php echo $name8; ?> >
                           
                           </div>
                        
                         <div class="form-group">
                            <label for="desc8">ENTER YOUR EIGHT DESCRIPTION</label>
                            <textarea class="form-control" id="desc8" placeholder="ENTER FIRST DESCRIPTION"
                             formControlName="desc8" name="desc8" rows="12" value="<?php echo $desc8; ?>">
                            </textarea>
                            <textarea  class="form-control" id="desc8" placeholder="ENTER FIRST DESCRIPTION"
                             name="desc8b" rows="12" value="<?php echo $desc8b; ?>" >
                           </textarea>
                           <textarea class="form-control" id="desc8" placeholder="ENTER FIRST DESCRIPTION"
                           formControlName="desc8c" name="desc8c" rows="12" value="<?php echo $desc8c; ?>">
                          </textarea>
                         </div>
                         <div class="form-group">
                            <label for="name9">ENTER YOUR NINTH NAME</label>
                          <input type="text" placeholder="ninth name" id="name9"
                           class="form-control" formControlName="name9" name="name9" value="<?php echo $name9; ?>  ">
                         </div>
                       
                           <div class="custom-file">
                             <input type="file" class="form-control" 
                                name="img9">
                         
                           </div>
                        
                         <div class="form-group">
                            <label for="desc9">ENTER YOUR NINTH DESCRIPTION</label>
                            <textarea class="form-control" id="desc9" placeholder="ENTER FIRST DESCRIPTION" 
                            formControlName="desc9" name="desc9" rows="12" value="<?php echo $desc9; ?> " >
                            </textarea>
                            <textarea class="form-control" id="desc9" placeholder="ENTER FIRST DESCRIPTION" 
                            formControlName="desc9b" name="desc9b" rows="12"  value="<?php echo $desc9b; ?>"  >
                            </textarea>
                            <textarea class="form-control" id="desc9" placeholder="ENTER FIRST DESCRIPTION" 
                            formControlName="desc9c" name="desc9c" rows="12"  value="<?php echo $desc9c; ?> " >
                            </textarea>
                         </div>
                         <div class="form-group">
                            <label for="name10">ENTER YOUR TENTH NAME</label>
                          <input type="text" placeholder="tenth name" id="name10"
                           class="form-control" formControlName="name10" name="name10" value="<?php echo $name10; ?>" >
                         </div>
                      
                           <div class="">
                             <input type="file" class="form-control" id="inputGroupFile01"
                              name="img10">
                            
                           </div>
                         
                         <div class="form-group">
                            <label for="desc10">ENTER YOUR TENTH DESCRIPTION</label>
                            <textarea class="form-control" id="desc10" placeholder="ENTER FIRST DESCRIPTION"
                             formControlName="desc10" name="desc10" rows="12"  value="<?php echo $desc10; ?> " >
                            </textarea>
                            <textarea class="form-control" id="desc10" placeholder="ENTER FIRST DESCRIPTION"
                            formControlName="desc10b" name="desc10b" rows="12"   value="<?php echo $desc10b; ?>" >
                           </textarea>
                           <textarea class="form-control" id="desc10" placeholder="ENTER FIRST DESCRIPTION"
                           formControlName="desc10c" name="desc10c" rows="12"   value="<?php echo $desc10c; ?>" >
                          </textarea>
                         </div>
                        <input type="submit" name="submit" value="submit" class="btn btn-info">
                   </form>
               </div>
           </div>
       </div>
   </section> 
</body>