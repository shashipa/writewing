<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=big5">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title></title>
  <!-- MDB icon -->
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Robot:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style2.css">
  <script data-ad-client="ca-pub-2638310588326821" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>
<body>
<style>
   
#ul li {
 
}
#ul li a{
  color:white !important;
  font-family: 'Times New Roman', Times, serif;
  font-weight: italic;
 
 
 
}
#ul li a:hover{
 
  font-family: 'Times New Roman', Times, serif;
  font-weight: bold;
  border-bottom: 2px solid white;
}
#ul2 li a{
  color:white !important;
  font-family: 'Times New Roman', Times, serif;
  font-weight: italic;
 
}
</style>
  <!-- Start your project here-->  
 <section>
     <?php include("include/navigation.php") ?>
 </section>
  
 
  
  
  
  
  
    <section class="d-sm-block d-md-none d-lg-none container-fluid"><!---------wild ---------------mobile------------------------>
       <div class=" text-center mx-auto z-depth-1 d-sm-block d-md-none d-lg-none"
       style="border-top:5px solid white;color:white;background-color:#cc0000 !important;height:60px;">
            <h6 class="text-center font-weight-bold mx-auto"  style="line-height:60px;font-size:20px;">COUNTRIES&nbsp;
            <i class="fas fa-arrow-circle-right"></i>
              </h6> 
          </div>
          <section class="container-fluid">
              <div class="row">
                    <?php 
                    $con=mysqli_connect("localhost","writewing","9005314@Ad","greatten");
                    
                    $sel="SELECT * FROM topten where category='COUNTRIES' limit 0,12";
                    if($result=mysqli_query($con,$sel)){
                       
                        while($row=mysqli_fetch_assoc($result)){
                           
                           $title=$row["title"];
                           $category=$row["category"];
                           $img8=$row["img8"];
                           $id=$row["id"];
                        //   $id2=md5($id);
                      
                    ?>
             
                 <div class="col-sm-12 d-block d-md-none d-lg-none my-1">
            
                  <div class="row">
                    <div class="col-5">
                        <!-- Featured image -->
                        <div class="view overlay my-auto" style="margin-top:10px !important;">
                          <img class="img-fluid my-auto" src="images/<?php echo $img8; ?>" alt="Sample image" style="height:120px;width:100%;border-left:5px solid white;border-style:outset;">
                          <a>
                            <div class="mask rgba-white-slight"></div>
                          </a>
                        </div>
                
                      </div>
                      <!-- Grid column -->
                
                      <!-- Grid column -->
                      <div class="col-7 mt-2">
                        <!-- Post title -->
                        <span class="badge badge-danger z-depth-0" style="background-color:#cc2900 !important; color:white;"><?php echo $category; ?></span>
                        <h6 class="font-weight-bold"><strong><a href="include/fulldetail.php?id=<?php echo $id; ?>" 
                            style="color:#001a33 !important;">
                            <?php echo $title; ?>
                        </a></strong></h6>
                        <!-- Excerpt -->
                        <!-- Read more button -->
                        <p class="text-muted my-0">Admin | 22/April/2020</p>
                         <a class="btn btn-sm mx-0 z-depth-0" style="background-color:#00264d !important;color:white;" href="include/fulldetail.php?id=<?php echo $id; ?>" 
                       > more &nbsp;<i class="far fa-arrow-alt-circle-right"></i></a>
                
                      </div>
                  </div>
              
       
            </div><!--mobile verson -->
              <?php
            
                        }
                        
                    }
                    else{
                       
                        echo mysqli_error($con);
                    }
            
            ?>
             </div>
          </section>
   
  </section>
  <!---countries mobile=-->
  <section>
      
  </section>
  <section>
    <!-----countries --laptop -->
    
<section class="d-none d-lg-block">
    <div class="container-fluid">
      <div class="text-center">
        
      
               
                
              </div>
  <div class="row">
    <div class="col-12 mx-auto text-center" style="margin-left: 550px !important;">
      <div class="box arrow-bottom  mx-auto z-depth-4" style="border-top: 5px solid white;margin-left: 300px;">
        <h3 class="text-center font-weight-bold mx-auto"  style="margin-left:300px;line-height:20px;">COUNTRIES&nbsp;
          </h3> 
      </div> 
     </div>
    <div class="col-8">
      <div class="">
  
  
        <!--Section: Content-->
        <section class="">
      
          <!-- Section heading -->
        
      
          <div class="row">
      
          <?php 
$con=mysqli_connect("localhost","writewing","9005314@Ad","greatten");

$sel="SELECT * FROM topten where category='COUNTRIES' limit 0,1";
$result=mysqli_query($con,$sel);
    $row=mysqli_fetch_array($result);
        $id=$row["id"];
        $title=$row["title"];
        $category=$row["category"];
        $img8=$row["img8"];
        
   


?>

            <!--Grid column-->
            <div class="col-md-12">
      
              <div class="card z-depth-0 text-center">
                <div class="card-body px-5 pt-5 pb-4">
      
                  <!--Grid row-->
                  <div class="row"><!---first sec-->
      
                    <!--Grid column-->
                    <div class="col-md-5 mb-md-4">
      
                      <!--Featured image-->
                      <div class="view overlay z-depth-1 mb-4">
                        <img src="images/<?php echo $img8; ?>" class="img-fluid rounded-0"
                          alt="Sample image" style="width:100%;height:250px;">
                        <a>
                          <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                      </div>
      
                    </div>
                    <!--Grid column-->
      
                    <!--Grid column-->
                    <div class="col-md-6 text-left mb-md-5 mb-4">
      
                      <h4 class="mb-3" ><strong>
                        <a href="include/fulldetail.php?id=<?php echo $id; ?>" style="color:#00264d;" ><?php echo $title; ?></a></strong></h4>
                      <p class="dark-grey-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        accusantium doloremque,
                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis...</p>
                      <p>by <a><strong style="color:red;">Admin</strong></a>, 25/04/2020</p>
                      <a class="btn btn-indigo btn-sm" href="include/fulldetail.php?id=<?php echo $id; ?>" >Read more</a>
      
                    </div>
                    <!--Grid column-->
      
                  </div>
                  <!--Grid row-->
      
                  <!--Grid row-->
                  <div class="row">
                      <?php 
$con=mysqli_connect("localhost","writewing","9005314@Ad","greatten");
$sel="SELECT * FROM topten where category='COUNTRIES' limit 1,3";
if($result=mysqli_query($con,$sel)){
    $cr=0;
    while($row=mysqli_fetch_assoc($result)){
        $id=$row["id"];
        $title=$row["title"];
        $category=$row["category"];
        $img8=$row["img8"];
       // $cr++;
   

?>

      
                    <!--Grid column-->
                    <div class="col-md-6"><!--second sec-->
      
                      <!--Small news-->
                      <div class="row mb-3">
                      <div class="col-12">
                        <div class="row">
                          <div class="col-md-4">
                            <!--Image-->
                            <div class="view overlay rgba-white-slight z-depth-1 mb-3">
                              <img src="images/<?php echo $img8; ?>"
                                class="img-fluid rounded-0" alt="Minor sample post image" style="height: 80px;width: 100%;">
                              <a>
                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                              </a>
                            </div>
                          </div>
      
                          <!--Excerpt-->
                          <div class="col-md-8">
                            <p class="font-small text-left mb-2"><strong class="text-danger">25/04/2020</strong></p>
                            <p class="text-left font-weight-italic"><a href="include/fulldetail.php?id=<?php echo $id; ?>" style="color:#00264d !important;
                              font-family: 'Times New Roman', Times, serif;"
                              ><?php echo $title; ?>
                               
                              </a>
                           
                            </p>
                          
                      
      
                        </div>
      
                        </div>
                      </div>
      
                         
                      </div>
                      <!--/Small news-->
      
                      <!--Small news-->
                     
                      <!--/Small news-->
      
                      <!--Small news-->
                     
                      <!--/Small news-->
      
                    </div>
                    <?php
                    
    }
  //  echo json_encode($prods);
}
else{
    http_response_encode(404);
    echo mysqli_error($con);
}

                    
                    
                    ?>
                    <!--Grid column-->
      
                    <!--Grid column-->
                    <?php 
$con=mysqli_connect("localhost","writewing","9005314@Ad","greatten");

$sel="SELECT * FROM topten where category='COUNTRIES' limit 4,3";
if($result=mysqli_query($con,$sel)){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row["id"];
        $title=$row["title"];
        $category=$row["category"];
        $img8=$row["img8"];
  


?>

                    
                    
                    <div class="col-md-6"><!--second sec-->
      
                      <!--Small news-->
                      <div class="row mb-3">
      
                      <div class="col-12">
                        <div class="row">
                          <div class="col-md-4">
                            <!--Image-->
                            <div class="view overlay rgba-white-slight z-depth-1 mb-3">
                              <img src="images/<?php echo $img8; ?>"
                                class="img-fluid rounded-0" alt="Minor sample post image" style="height: 80px;width: 100%;">
                              <a>
                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                              </a>
                            </div>
                          </div>
      
                          <!--Excerpt-->
                          <div class="col-md-8">
                            <p class="font-small text-left mb-2"><strong class="text-danger">25/04/2020</strong></p>
                            <p class="text-left font-weight-italic"><a href="include/fulldetail.php?id=<?php echo $id; ?>" style="color:#00264d !important;
                              font-family: 'Times New Roman', Times, serif;" 
                              ><?php echo $title; ?>
                               
                              </a>
                           
                            </p>
                          
                      
      
                        </div>
      
                        </div>
                      </div>
      
                         
                      </div>
                      <!--/Small news-->
      
                      <!--Small news-->
                     
                      <!--/Small news-->
      
                      <!--Small news-->
                     
                      <!--/Small news-->
      
                    </div>
                    <?php
                    
                          //$cr++;
    }
    //echo json_encode($prods);
}
else{
    http_response_encode(404);
    echo mysqli_error($con);
}
                    
                    
                    ?>
                    <!--Grid column-->
      
                  </div>
                  <!--Grid row-->
      
                </div>
              </div>
      
            </div>
            <!--Grid column-->
      
          </div>
      
        </section>
        <!--Section: Content-->
      
      
      </div>
    </div><!--col-6-->
   

    
    <div class="col-4 mt-2">
      <div class="container">
  
  
        <!--Section: Content-->
        <section class="dark-grey-text">
      
          <!-- Section heading -->
          <!-- Grid row -->
           <?php 
$con=mysqli_connect("localhost","writewing","9005314@Ad","greatten");
//$prods=[];
$sel="SELECT * FROM topten where category='COUNTRIES' limit 7,6";
if($result=mysqli_query($con,$sel)){
    $cr=0;
    while($row=mysqli_fetch_assoc($result)){
        $id=$row["id"];
        $title=$row["title"];
        $category=$row["category"];
        $img8=$row["img6"];
        //$cr++;
  
?>
          <div class="row align-items-center" >
      
            <!-- Grid column -->
            <div class="col-lg-5">
      
              <!-- Featured image -->
              <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
                <img class="img-fluid" src="images/<?php echo $img8; ?>" alt="Sample image">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
      
            </div>
            <!-- Grid column -->
      
            <!-- Grid column -->
            <div class="col-lg-7">
      
              <!-- Category -->
              <a href="#!" class="green-text">
                <h6 class="font-weight-bold mb-3 badge badge-warning"><span><?php echo $category; ?></span></h6>
              </a>
              <!-- Post title -->
              <h6 class="font-weight-bold mb-3"><strong><a href="include/fulldetail.php?id=<?php echo $id; ?>" style="color:#00264d !important;
              font-family: 'Times New Roman', Times, serif;">
                <?php echo $title; ?></a></strong></h6>
              <!-- Excerpt -->
           
              <!-- Post data -->
              <p>by <a><strong class="text-danger">Admin</strong></a>, 26/04/2020</p>
              <!-- Read more button -->
             
      
            </div>
            <!-- Grid column -->
      
          </div>
             <?php
            }
   // echo json_encode($prods);
}
else{
    http_response_encode(404);
    echo mysqli_error($con);
}
    
    
    ?>
          <!-- Grid row -->
      
         
          
        </section>
        <!--Section: Content-->
      
        <!--Section: Content-->
      
      
      </div>
    </div>
 
    
  
  </div>
    </div>
  </section>

      
  </section>
  <!---- wild laptop -->
  <section><!--wild laptop------------------------------------------------------->
        
    <div class="container-fluid d-none d-lg-block" style="height:1400px;width:100%;">
        
      <div class="row text-center">
        <div class="box arrow-bottom text-center mx-auto z-depth-4 " style="border-top: 5px solid white;">
          <h3 class="text-center font-weight-bold mx-auto"  style="margin-left:300px;line-height:20px;">ANIMALS&nbsp;
          </h3></div>
          
         <div class="col-12">
         
         
          <div class="container-fluid">
          <div class="row">
              <?php 
              $con=mysqli_connect("localhost","writewing","9005314@Ad","greatten");
              $sel="SELECT *  FROM topten where CATEGORY= 'WILDLIFE' limit 0,12";
              $select=mysqli_query($con,$sel);
              while($data=mysqli_fetch_array($select)){
                  
                  $title=$data["title"];
                  $category=$data["category"];
                  $id=$data["id"];
                  $img8=$data["img8"];
             
              
              ?>
            <div class="col-3">
              <div class="container my-2">
  
  
                <!-- Section: Block Content -->
                <section class="text-center">
            
                  <!-- Grid row -->
                  <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-12 mb-4" style="height: 400px;">
           
                      <!-- Card -->
                      
                      <div class="card card-image z-depth-0" id="h_3" >
                      <img src="images/<?php echo $img8; ?>" alt="img" 
                      class="img-responsive img-fluid"
                      style="height:350px;width: 100%;">
                        <div class="text-white text-center">
                         
                          <div>
                          <p style="position: absolute;color: yellow;bottom:90px;font-weight: bold;left: 10PX;">
                         <?php echo $category; ?>   
                         </p>
                            <h5 class="py-3 font-weight-bold" style="position: absolute;bottom:5px;" id="">
                             <a href="include/fulldetail.php?id=<?php echo $id; ?>" class="text-white"
                             ><?php echo $title; ?></a>
                            </h5>
                            
                          
                          </div>
                        </div>
                      </div>
                      <!-- Card -->
              
                    </div>
                    <!-- Grid column -->
              
                  </div>
                  <!-- Grid row -->
              
                </section>
                <!-- Section: Block Content -->
              
              
              </div>
            </div>
            <?php } ?>
            
         
          </div></div>
        </div>
          
          
          
          </div>
          
          
          </div>
          
          
          
          </section>
        
        
        <!---wild mobile -->
        
         <section class="d-sm-block d-md-none d-lg-none container-fluid"><!---------wild ---------------mobile------------------------>
       <div class=" text-center mx-auto z-depth-1 d-sm-block d-md-none d-lg-none"
       style="border-top:5px solid white;color:white;background-color:#cc0000 !important;height:60px;">
            <h6 class="text-center font-weight-bold mx-auto"  style="line-height:60px;font-size:20px;">WILDLIFE&nbsp;
            <i class="fas fa-arrow-circle-right"></i>
              </h6> 
          </div>
          <section class="container-fluid">
              <div class="row">
                    <?php 
                    $con=mysqli_connect("localhost","writewing","9005314@Ad","greatten");
                    
                    $sel="SELECT * FROM topten where category='WILDLIFE' limit 0,12";
                    if($result=mysqli_query($con,$sel)){
                       
                        while($row=mysqli_fetch_assoc($result)){
                           
                           $title=$row["title"];
                           $category=$row["category"];
                           $img8=$row["img8"];
                           $id=$row["id"];
                        //   $id2=md5($id);
                      
                    ?>
             
                 <div class="col-sm-12 d-block d-md-none d-lg-none my-1">
            
                  <div class="row">
                    <div class="col-5">
                        <!-- Featured image -->
                        <div class="view overlay my-auto" style="margin-top:10px !important;">
                          <img class="img-fluid my-auto" src="images/<?php echo $img8; ?>" alt="Sample image" style="height:120px;width:100%;border-left:5px solid white;border-style:outset;">
                          <a>
                            <div class="mask rgba-white-slight"></div>
                          </a>
                        </div>
                
                      </div>
                      <!-- Grid column -->
                
                      <!-- Grid column -->
                      <div class="col-7 mt-2">
                        <!-- Post title -->
                        <span class="badge badge-danger z-depth-0" style="background-color:#cc2900 !important; color:white;"><?php echo $category; ?></span>
                        <h6 class="font-weight-bold"><strong><a href="include/fulldetail.php?id=<?php echo $id; ?>" 
                            style="color:#001a33 !important;">
                            <?php echo $title; ?>
                        </a></strong></h6>
                        <!-- Excerpt -->
                        <!-- Read more button -->
                        <p class="text-muted my-0">Admin | 22/April/2020</p>
                         <a class="btn btn-sm mx-0 z-depth-0" style="background-color:#00264d !important;color:white;" href="include/fulldetail.php?id=<?php echo $id; ?>" 
                       > more &nbsp;<i class="far fa-arrow-alt-circle-right"></i></a>
                
                      </div>
                  </div>
              
       
            </div><!--mobile verson -->
              <?php
            
                        }
                        
                    }
                    else{
                       
                        echo mysqli_error($con);
                    }
            
            ?>
             </div>
          </section>
   
  </section>
  
  
  <!---science laptop --->
  <section class="d-none d-lg-block">
      
      <section class="mt-3">
    <div class="container-fluid" id="third">
      <div class="text-center">
                              
              </div>
            
      <div class="row">
        <div class="col-12 mx-auto text-center" style="margin-left: 550px !important;">
          <div class="bx arrow-bottom  mx-auto z-depth-4" style="border-top: 5px solid white;margin-left: 300px;">
            <h3 class="text-center font-weight-bold mx-auto"  style="margin-left:300px;">SCIENCE&nbsp;
              ðŸ”­</h3> 
          </div> 
        </div>
      
      <div class="col-4">
        <div class="">
  
  
          <!--Section: Content-->
          <section class="dark-grey-text">
        
            <!-- Section heading -->
           
        
            <!-- Grid row -->
              <?php 
              $con=mysqli_connect("localhost","writewing","9005314@Ad","greatten");
              $sel="SELECT *  FROM topten where CATEGORY= 'SCIENCE' limit 0,4";
              $select=mysqli_query($con,$sel);
              while($data=mysqli_fetch_array($select)){
                  
                  $title=$data["title"];
                  $category=$data["category"];
                  $id=$data["id"];
                  $img8=$data["img8"];
             
              
              ?>
            <div class="row align-items-center" id="sc_one">
       
        
              <!-- Grid column -->
              <div class="col-lg-5 col-xl-4">
        
                <!-- Featured image -->
                <div class="view overlay z-depth-1">
                  <img class="img-fluid z-depth-5" src="images/<?php echo $img8; ?>" 
                  alt="Sample image" style="width: 100%;height: 100px;border-left:2px solid white !important;border-style:outset;border-radius:5px"  style="">
                
                </div>
        
              </div>
              <!-- Grid column -->
        
              <!-- Grid column -->
              <div class="col-lg-7 col-xl-8">
        
                <!-- Post title -->
                <p  style=""><span class="badge  mt-4 z-depth-0"  style="background-color:#19334d !important;"
                 ><?Php echo category; ?></span></p>
                <a class="font-weight-normal" style="font-size: 17px;color:#19334d;font-family:
                 'Times New Roman', Times, serif;" href="fulldetail.php?id=<?php echo $id; ?>" id="sc_a"
                >
                  <?php echo $title; ?></a>
                <!-- Excerpt -->
                <!-- Post data -->
                <p><a class=" text-muted" style="font-size: 15px;">Admin</a>
                <!-- Read more button -->
               
              </div>
              <!-- Grid column -->
        
            </div>
            <?php } ?>
            <!-- Grid row -->
        
           
        
          </section>
          <!--Section: Content-->
          <!--Section: Content-->
     
          <!--Section: Content-->
        
        
        </div>
      </div><!--col-3-->
    
      <div class="col-4">
        <div class="">
  
  
          <!--Section: Content-->
          <section class="dark-grey-text">
        
            <!-- Section heading -->
           
        
            <!-- Grid row -->
              <?php 
              $con=mysqli_connect("localhost","writewing","9005314@Ad","greatten");
              $sel="SELECT *  FROM topten where CATEGORY= 'SCIENCE' limit 4,4";
              $select=mysqli_query($con,$sel);
              while($data=mysqli_fetch_array($select)){
                  
                  $title=$data["title"];
                  $category=$data["category"];
                  $id=$data["id"];
                  $img8=$data["img8"];
             
              
              ?>
            <div class="row align-items-center" id="sc_one">
       
        
              <!-- Grid column -->
              <div class="col-lg-5 col-xl-4">
        
                <!-- Featured image -->
                <div class="view overlay z-depth-1">
                  <img class="img-fluid" src="images/<?php echo $img8; ?>" 
                  alt="Sample image" style="width: 100%;height: 100px;border-left:2px solid white !important;border-style:outset;border-radius:5px"  style="">
                
                </div>
        
              </div>
              <!-- Grid column -->
        
              <!-- Grid column -->
              <div class="col-lg-7 col-xl-8">
        
                <!-- Post title -->
                <p  style=""><span class="badge  mt-4 z-depth-0"  style="background-color:#19334d !important;"
                 ><?Php echo category; ?></span></p>
                <a class="font-weight-normal" style="font-size: 17px;color:#19334d;font-family:
                 'Times New Roman', Times, serif;" href="fulldetail.php?id=<?php echo $id; ?>" id="sc_a"
                >
                  <?php echo $title; ?></a>
                <!-- Excerpt -->
                <!-- Post data -->
                <p><a class=" text-muted" style="font-size: 15px;">Admin</a>
                <!-- Read more button -->
               
              </div>
              <!-- Grid column -->
        
            </div>
            <?php } ?>
            <!-- Grid row -->
        
           
        
          </section>
          <!--Section: Content-->
          <!--Section: Content-->
     
          <!--Section: Content-->
        
        
        </div>
      </div><!--col-6-->
     <div class="col-4">
        <div class="">
  
  
          <!--Section: Content-->
          <section class="dark-grey-text">
        
            <!-- Section heading -->
           
        
            <!-- Grid row -->
              <?php 
              $con=mysqli_connect("localhost","writewing","9005314@Ad","greatten");
              $sel="SELECT *  FROM topten where CATEGORY= 'SCIENCE' limit 8,4";
              $select=mysqli_query($con,$sel);
              while($data=mysqli_fetch_array($select)){
                  
                  $title=$data["title"];
                  $category=$data["category"];
                  $id=$data["id"];
                  $img8=$data["img8"];
             
              
              ?>
            <div class="row align-items-center" id="sc_one">
       
        
              <!-- Grid column -->
              <div class="col-lg-5 col-xl-4">
        
                <!-- Featured image -->
                <div class="view overlay z-depth-1">
                  <img class="img-fluid z-depth-5" src="images/<?php echo $img8; ?>" 
                  alt="Sample image" style="width: 100%;height: 100px;border-left:2px solid white !important;border-style:outset;border-radius:5px"  style="">
                
                </div>
        
              </div>
              <!-- Grid column -->
        
              <!-- Grid column -->
              <div class="col-lg-7 col-xl-8">
        
                <!-- Post title -->
                <p  style=""><span class="badge  mt-4 z-depth-0"  style="background-color:#19334d !important;"
                 ><?Php echo category; ?></span></p>
                <a class="font-weight-normal" style="font-size: 17px;color:#19334d;font-family:
                 'Times New Roman', Times, serif;" href="fulldetail.php?id=<?php echo $id; ?>" id="sc_a"
                >
                  <?php echo $title; ?></a>
                <!-- Excerpt -->
                <!-- Post data -->
                <p><a class=" text-muted" style="font-size: 15px;">Admin</a>
                <!-- Read more button -->
               
              </div>
              <!-- Grid column -->
        
            </div>
            <?php } ?>
            <!-- Grid row -->
        
           
        
          </section>
          <!--Section: Content-->
          <!--Section: Content-->
     
          <!--Section: Content-->
        
        
        </div>
      </div>
    </div>
    </div>
  </section>
  </section>
  <!--SICENCE LAPTOP-->
 <section class="d-sm-block d-md-none d-lg-none container-fluid"><!---------wild ---------------mobile------------------------>
       <div class=" text-center mx-auto z-depth-1 d-sm-block d-md-none d-lg-none"
       style="border-top:5px solid white;color:white;background-color:#cc0000 !important;height:60px;">
            <h6 class="text-center font-weight-bold mx-auto"  style="line-height:60px;font-size:20px;">SCIENCE&nbsp;
            <i class="fas fa-arrow-circle-right"></i>
              </h6> 
          </div>
          <section class="container-fluid">
              <div class="row">
                    <?php 
                    $con=mysqli_connect("localhost","writewing","9005314@Ad","greatten");
                    
                    $sel="SELECT * FROM topten where category='SCIENCE' limit 0,12";
                    if($result=mysqli_query($con,$sel)){
                       
                        while($row=mysqli_fetch_assoc($result)){
                           
                           $title=$row["title"];
                           $category=$row["category"];
                           $img8=$row["img8"];
                           $id=$row["id"];
                        //   $id2=md5($id);
                      
                    ?>
             
                 <div class="col-sm-12 d-block d-md-none d-lg-none my-1">
            
                  <div class="row">
                    <div class="col-5">
                        <!-- Featured image -->
                        <div class="view overlay my-auto" style="margin-top:10px !important;">
                          <img class="img-fluid my-auto" src="images/<?php echo $img8; ?>" alt="Sample image" style="height:120px;width:100%;border-left:5px solid white;border-style:outset;">
                          <a>
                            <div class="mask rgba-white-slight"></div>
                          </a>
                        </div>
                
                      </div>
                      <!-- Grid column -->
                
                      <!-- Grid column -->
                      <div class="col-7 mt-2">
                        <!-- Post title -->
                        <span class="badge badge-danger z-depth-0" style="background-color:#cc2900 !important; color:white;"><?php echo $category; ?></span>
                        <h6 class="font-weight-bold"><strong><a href="include/fulldetail.php?id=<?php echo $id; ?>" 
                            style="color:#001a33 !important;">
                            <?php echo $title; ?>
                        </a></strong></h6>
                        <!-- Excerpt -->
                        <!-- Read more button -->
                        <p class="text-muted my-0">Admin | 22/April/2020</p>
                         <a class="btn btn-sm mx-0 z-depth-0" style="background-color:#00264d !important;color:white;" href="include/fulldetail.php?id=<?php echo $id; ?>" 
                       > more &nbsp;<i class="far fa-arrow-alt-circle-right"></i></a>
                
                      </div>
                  </div>
              
       
            </div><!--mobile verson -->
              <?php
            
                        }
                        
                    }
                    else{
                       
                        echo mysqli_error($con);
                    }
            
            ?>
             </div>
          </section>
   
  </section>
  
  
  
  
  
  
  
  
  
  <!---TECHNOLOGY LAPTOP -->
   <section  class="d-none d-lg-block">
    <div class="container-fluid ">

      <div class="row">
        <div class="col-12 mx-auto text-center" style="margin-left: 550px !important;">
          <div class="bx arrow-bottom  mx-auto z-depth-4" style="border-top: 5px solid white;margin-left: 300px;">
            <h3 class="text-center font-weight-bold mx-auto"  style="margin-left:300px;">TECHNOLOGY&nbsp;
              ðŸ¤–</h3> 
          </div> 
         </div>
  <div class="col-6">
    <div class="container">
  
  
      <!--Section: Content-->
      <section class="dark-grey-text">
    
        <!-- Section heading -->
       
        <!-- Grid row -->
            <?php 
              $con=mysqli_connect("localhost","writewing","9005314@Ad","greatten");
              $sel="SELECT *  FROM topten where CATEGORY= 'TECHNOLOGY' limit 0,4";
              $select=mysqli_query($con,$sel);
              while($data=mysqli_fetch_array($select)){
                  
                  $title=$data["title"];
                  $category=$data["category"];
                  $id=$data["id"];
                  $img8=$data["img7"];
             
              
              ?>
        <div class="row align-items-center">
    
          <!-- Grid column -->
          <div class="col-lg-5">
    
            <!-- Featured image -->
            <div class="view overlay rounded z-depth-1 mb-lg-0 mb-4">
              <img class="img-fluid" src="images/<?php echo $img8; ?>" alt="Sample image" style="height:200px;width:100%;border-radius:5px;">
              <a>
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
    
          </div>
          <!-- Grid column -->
    
          <!-- Grid column -->
          <div class="col-lg-7">
    
            <!-- Category -->
            <p><h6><strong class="badge badge-danger mt-5"><?php echo $category; ?></strong></h6></p>
           
            <!-- Post title -->
            <h5 class="font-weight-bold mb-3"><strong><a href="include/fulldetail.php?id=<?php echo $id; ?>" style="color:#00264d;"><?php echo $title; ?></a></strong></h5>
            <!-- Excerpt -->
            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
              placeat facere.</p>
            <!-- Post data -->
          
            <!-- Read more button -->
             <!-- Read more button -->
        <a class="btn btn-sm z-depth-1" href="include/fulldetail.php?id=<?php echo $id; ?>" style="background-color:#00264d;color:white;">Read More &nbsp;
            <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
    
          </div>
          <!-- Grid column -->
    
        </div>
        <?php } ?>
   
        
          
        <!-- Grid row -->
    
        <hr class="my-5">
        
      </section>
      <!--Section: Content-->
    
    
    </div>
  </div><!--first 5 col-->
   <div class="col-6">
    <div class="container">
  
  
      <!--Section: Content-->
      <section class="dark-grey-text">
    
        <!-- Section heading -->
       
        <!-- Grid row -->
            <?php 
              $con=mysqli_connect("localhost","writewing","9005314@Ad","greatten");
              $sel="SELECT *  FROM topten where CATEGORY= 'TECHNOLOGY' limit 4,4";
              $select=mysqli_query($con,$sel);
              while($data=mysqli_fetch_array($select)){
                  
                  $title=$data["title"];
                  $category=$data["category"];
                  $id=$data["id"];
                  $img8=$data["img7"];
             
              
              ?>
        <div class="row align-items-center">
    
          <!-- Grid column -->
          <div class="col-lg-5">
    
            <!-- Featured image -->
            <div class="view overlay rounded z-depth-1 mb-lg-0 mb-4">
              <img class="img-fluid" src="images/<?php echo $img8; ?>" alt="Sample image" style="height:200px;width:100%;border-radius:5px;">
              <a>
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
    
          </div>
          <!-- Grid column -->
    
          <!-- Grid column -->
          <div class="col-lg-7">
    
            <!-- Category -->
            <p><h6><strong class="badge badge-danger mt-5"><?php echo $category; ?></strong></h6></p>
           
            <!-- Post title -->
            <h5 class="font-weight-bold mb-3"><strong><a href="include/fulldetail.php?id=<?php echo $id; ?>" style="color:#00264d;"><?php echo $title; ?></a></strong></h5>
            <!-- Excerpt -->
            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
              placeat facere.</p>
            <!-- Post data -->
          
            <!-- Read more button -->
             <!-- Read more button -->
        <a class="btn btn-sm z-depth-1" href="include/fulldetail.php?id=<?php echo $id; ?>" style="background-color:#00264d;color:white;">Read More &nbsp;
            <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
    
          </div>
          <!-- Grid column -->
    
        </div>
        <?php } ?>
   
        
          
        <!-- Grid row -->
    
        <hr class="my-5">
        
      </section>
      <!--Section: Content-->
    
    
    </div>
  </div><!--first 5 col-->
  
      </div><!--row-->
    </div>
  </section>
  <!--MOBILE TECH -->
  
 <section class="d-sm-block d-md-none d-lg-none container-fluid"><!---------wild ---------------mobile------------------------>
       <div class=" text-center mx-auto z-depth-1 d-sm-block d-md-none d-lg-none"
       style="border-top:5px solid white;color:white;background-color:#cc0000 !important;height:60px;">
            <h6 class="text-center font-weight-bold mx-auto"  style="line-height:60px;font-size:20px;">TECHNOLOGY&nbsp;
            <i class="fas fa-arrow-circle-right"></i>
              </h6> 
          </div>
          <section class="container-fluid">
              <div class="row">
                    <?php 
                    $con=mysqli_connect("localhost","writewing","9005314@Ad","greatten");
                    
                    $sel="SELECT * FROM topten where category='TECHNOLOGY' limit 0,12";
                    if($result=mysqli_query($con,$sel)){
                       
                        while($row=mysqli_fetch_assoc($result)){
                           
                           $title=$row["title"];
                           $category=$row["category"];
                           $img8=$row["img8"];
                           $id=$row["id"];
                        //   $id2=md5($id);
                      
                    ?>
             
                 <div class="col-sm-12 d-block d-md-none d-lg-none my-1">
            
                  <div class="row">
                    <div class="col-5">
                        <!-- Featured image -->
                        <div class="view overlay my-auto" style="margin-top:10px !important;">
                          <img class="img-fluid my-auto" src="images/<?php echo $img8; ?>" alt="Sample image" style="height:120px;width:100%;border-left:5px solid white;border-style:outset;">
                          <a>
                            <div class="mask rgba-white-slight"></div>
                          </a>
                        </div>
                
                      </div>
                      <!-- Grid column -->
                
                      <!-- Grid column -->
                      <div class="col-7 mt-2">
                        <!-- Post title -->
                        <span class="badge badge-danger z-depth-0" style="background-color:#cc2900 !important; color:white;"><?php echo $category; ?></span>
                        <h6 class="font-weight-bold"><strong><a href="include/fulldetail.php?id=<?php echo $id; ?>" 
                            style="color:#001a33 !important;">
                            <?php echo $title; ?>
                        </a></strong></h6>
                        <!-- Excerpt -->
                        <!-- Read more button -->
                        <p class="text-muted my-0">Admin | 22/April/2020</p>
                         <a class="btn btn-sm mx-0 z-depth-0" style="background-color:#00264d !important;color:white;" href="include/fulldetail.php?id=<?php echo $id; ?>" 
                       > more &nbsp;<i class="far fa-arrow-alt-circle-right"></i></a>
                
                      </div>
                  </div>
              
       
            </div><!--mobile verson -->
              <?php
            
                        }
                        
                    }
                    else{
                       
                        echo mysqli_error($con);
                    }
            
            ?>
             </div>
          </section>
   
  </section>
  
  <!---PEOPLE ---LAPTOP -->
  <section class="d-none d-lg-block">
      <div class=" my-5 ml-2">


  <!--Section: Content-->
  <section class="">

    <!-- Section heading -->
   

    <div class="row">
<div class="col-12 mx-auto text-center" style="margin-left: 550px !important;">
          <div class="bx arrow-bottom  mx-auto z-depth-4" style="border-top: 5px solid white;margin-left: 300px;">
            <h3 class="text-center font-weight-bold mx-auto"  style="margin-left:300px;">PEOPLE&nbsp;
              ðŸ¤–</h3> 
          </div> 
         </div>
      <!--Grid column-->
      <div class="col-md-12">

        <div class="card text-center z-depth-0">
          <div class="">

            <!--Grid row-->
            <div class="row">
                 <?php 
              $con=mysqli_connect("localhost","writewing","9005314@Ad","greatten");
              $sel="SELECT *  FROM topten where CATEGORY= 'PEOPLE' limit 0,2";
              $select=mysqli_query($con,$sel);
              while($data=mysqli_fetch_array($select)){
                  
                  $title=$data["title"];
                  $category=$data["category"];
                  $id=$data["id"];
                  $img8=$data["img8"];
             
              
              ?>
<div class="col-6">
     
    
    
    <div class="row">
           <div class="col-md-5 mb-md-4">

                <!--Featured image-->
                <div class="view overlay z-depth-1 mb-4">
                  <img src="images/<?php echo $img8; ?>" class="img-fluid rounded-0"
                    alt="Sample image" style="width:100%;height:280px;">
                  <a>
                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                  </a>
                </div>

              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-md-7 text-left">

                <h4 class="mb-3"><strong><a href="include/fulldetail.php?id=<?php echo $id; ?>" style="color:#00264d !important;"><?php echo $title ?></a></strong></h4>
                <p class="dark-grey-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                  accusantium doloremque,
                  totam rem aperiam, eaque ipsa quae ab illo inventore veritatis...</p>
                <h6><span class="badge badge-danger mb-3"><?php echo $category; ?></span></h6>
                <a class="btn btn-sm" href="include/fulldetail.php?id=<?php echo $id; ?>" style="background-color:#00264d !important;color:white;">Read more</a>

              </div>
    </div>
   
</div>
<?php } ?>
              <!--Grid column-->
           
              <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">

              <!--Grid column-->
              <div class="col-4">

                <!--Small news-->
                <div class="single-news">
                     <?php 
              $con=mysqli_connect("localhost","writewing","9005314@Ad","greatten");
              $sel="SELECT *  FROM topten where CATEGORY= 'PEOPLE' limit 2,3";
              $select=mysqli_query($con,$sel);
              while($data=mysqli_fetch_array($select)){
                  
                  $title=$data["title"];
                  $category=$data["category"];
                  $id=$data["id"];
                  $img8=$data["img8"];
             
              
              ?>

                  <div class="row mb-3">

                    <div class="col-md-5">
                      <!--Image-->
                      <div class="view overlay rgba-white-slight z-depth-1 mb-3">
                        <img src="images/<?php echo $img8; ?>"
                          class="img-fluid rounded-0" alt="Minor sample post image" style="height:150px;width:100%;">
                        <a>
                          <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                      </div>
                    </div>

                    <!--Excerpt-->
                    <div class="col-md-7 text-left ">
                        <h6><span class="badge badge-danger"><?php echo $category; ?></span></h6>
                        <h5 class="mb-3"><strong><a href="include/fulldetail.php?id=<?php echo $id; ?>" style="color:#00264d !important;"><?php echo $title ?></a></strong></h5>
                <p class="dark-grey-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                 
                </p>
                
                <a class="btn btn-sm" href="include/fulldetail.php?id=<?php echo $id; ?>" style="background-color:#00264d !important;color:white;">Read more</a>

                    </div>

                  </div>
                  <?php } ?>

                </div>
                <!--/Small news-->

                <!--Small news-->
                
                <!--/Small news-->

              </div>
              <!--Grid column-->
<div class="col-4">

                <!--Small news-->
                <div class="single-news">
                     <?php 
              $con=mysqli_connect("localhost","writewing","9005314@Ad","greatten");
              $sel="SELECT *  FROM topten where CATEGORY= 'PEOPLE' limit 5,3";
              $select=mysqli_query($con,$sel);
              while($data=mysqli_fetch_array($select)){
                  
                  $title=$data["title"];
                  $category=$data["category"];
                  $id=$data["id"];
                  $img8=$data["img8"];
             
              
              ?>

                  <div class="row mb-3">

                    <div class="col-md-5">
                      <!--Image-->
                      <div class="view overlay rgba-white-slight z-depth-1 mb-3">
                        <img src="images/<?php echo $img8; ?>"
                          class="img-fluid rounded-0" alt="Minor sample post image" style="height:150px;width:100%;">
                        <a>
                          <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                      </div>
                    </div>

                    <!--Excerpt-->
                    <div class="col-md-7 text-left ">
                        <h6><span class="badge badge-danger"><?php echo $category; ?></span></h6>
                        <h5 class="mb-3"><strong><a href="include/fulldetail.php?id=<?php echo $id; ?>" style="color:#00264d !important;"><?php echo $title ?></a></strong></h5>
                <p class="dark-grey-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                 
                </p>
                
                <a class="btn btn-sm" href="include/fulldetail.php?id=<?php echo $id; ?>" style="background-color:#00264d !important;color:white;">Read more</a>

                    </div>

                  </div>
                  <?php } ?>

                </div>
                <!--/Small news-->

                <!--Small news-->
                
                <!--/Small news-->

              </div>
              <!--Grid column-->
              <div class="col-4">

                <!--Small news-->
                <div class="single-news">
                     <?php 
              $con=mysqli_connect("localhost","writewing","9005314@Ad","greatten");
              $sel="SELECT *  FROM topten where CATEGORY= 'PEOPLE' limit 8,3";
              $select=mysqli_query($con,$sel);
              while($data=mysqli_fetch_array($select)){
                  
                  $title=$data["title"];
                  $category=$data["category"];
                  $id=$data["id"];
                  $img8=$data["img8"];
             
              
              ?>

                  <div class="row mb-3">

                    <div class="col-md-5">
                      <!--Image-->
                      <div class="view overlay rgba-white-slight z-depth-1 mb-3">
                        <img src="images/<?php echo $img8; ?>"
                          class="img-fluid rounded-0" alt="Minor sample post image" style="height:150px;width:100%;">
                        <a>
                          <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                      </div>
                    </div>

                    <!--Excerpt-->
                    <div class="col-md-7 text-left ">
                        <h6><span class="badge badge-danger"><?php echo $category; ?></span></h6>
                        <h5 class="mb-3"><strong><a href="include/fulldetail.php?id=<?php echo $id; ?>" style="color:#00264d !important;"><?php echo $title ?></a></strong></h5>
                <p class="dark-grey-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                 
                </p>
                
                <a class="btn btn-sm" href="include/fulldetail.php?id=<?php echo $id; ?>" style="background-color:#00264d !important;color:white;">Read more</a>

                    </div>

                  </div>
                  <?php } ?>

                </div>
                <!--/Small news-->

                <!--Small news-->
                
                <!--/Small news-->

              </div>
              <!--Grid column-->

            </div>
            <!--Grid row-->

          </div>
        </div>

      </div>
      <!--Grid column-->

    </div>

  </section>
  <!--Section: Content-->


</div>
  </section>
  
  <!---MOBILE PEOPLE -->
  
   <section class="d-sm-block d-md-none d-lg-none container-fluid"><!---------wild ---------------mobile------------------------>
       <div class=" text-center mx-auto z-depth-1 d-sm-block d-md-none d-lg-none"
       style="border-top:5px solid white;color:white;background-color:#cc0000 !important;height:60px;">
            <h6 class="text-center font-weight-bold mx-auto"  style="line-height:60px;font-size:20px;">PEOPLE&nbsp;
            <i class="fas fa-arrow-circle-right"></i>
              </h6> 
          </div>
          <section class="container-fluid">
              <div class="row">
                    <?php 
                    $con=mysqli_connect("localhost","writewing","9005314@Ad","greatten");
                    
                    $sel="SELECT * FROM topten where category='PEOPLE' limit 0,12";
                    if($result=mysqli_query($con,$sel)){
                       
                        while($row=mysqli_fetch_assoc($result)){
                           
                           $title=$row["title"];
                           $category=$row["category"];
                           $img8=$row["img8"];
                           $id=$row["id"];
                        //   $id2=md5($id);
                      
                    ?>
             
                 <div class="col-sm-12 d-block d-md-none d-lg-none my-1">
            
                  <div class="row">
                    <div class="col-5">
                        <!-- Featured image -->
                        <div class="view overlay my-auto" style="margin-top:10px !important;">
                          <img class="img-fluid my-auto" src="images/<?php echo $img8; ?>" alt="Sample image" style="height:120px;width:100%;border-left:5px solid white;border-style:outset;">
                          <a>
                            <div class="mask rgba-white-slight"></div>
                          </a>
                        </div>
                
                      </div>
                      <!-- Grid column -->
                
                      <!-- Grid column -->
                      <div class="col-7 mt-2">
                        <!-- Post title -->
                        <span class="badge badge-danger z-depth-0" style="background-color:#cc2900 !important; color:white;"><?php echo $category; ?></span>
                        <h6 class="font-weight-bold"><strong><a href="include/fulldetail.php?id=<?php echo $id; ?>" 
                            style="color:#001a33 !important;">
                            <?php echo $title; ?>
                        </a></strong></h6>
                        <!-- Excerpt -->
                        <!-- Read more button -->
                        <p class="text-muted my-0">Admin | 22/April/2020</p>
                         <a class="btn btn-sm mx-0 z-depth-0" style="background-color:#00264d !important;color:white;" href="include/fulldetail.php?id=<?php echo $id; ?>" 
                       > more &nbsp;<i class="far fa-arrow-alt-circle-right"></i></a>
                
                      </div>
                  </div>
              
       
            </div><!--mobile verson -->
              <?php
            
                        }
                        
                    }
                    else{
                       
                        echo mysqli_error($con);
                    }
            
            ?>
             </div>
          </section>
   
  </section>
  
      
<section class="d-none d-lg-block">
    <div class="container-fluid" id="second">
      <div class="text-center">
        
        <h1 class="mt-4" style="margin-top: 20px;position: relative;">
          <span class="badge badge-dark" style="background-color:white;color:black;margin-top: 30px;">DEFENCE
        &nbsp;&nbsp;
        </span>
        <hr style="height:1px;background-color: black;width: 500px;">
         </h1>
                
              </div>
      <div class="row">
             <?php 
                    $con=mysqli_connect("localhost","writewing","9005314@Ad","greatten");
                    
                    $sel="SELECT * FROM topten where category='DEFENCE' limit 0,4";
                    if($result=mysqli_query($con,$sel)){
                       
                        while($row=mysqli_fetch_assoc($result)){
                           
                           $title=$row["title"];
                           $category=$row["category"];
                           $img8=$row["img8"];
                           $id=$row["id"];
                        //   $id2=md5($id);
                      
                    ?>
       <div class="col-lg-3 col-md-12 mt-4">
   
         <!--News tile -->
         <div class="news-tile view zoom z-depth-1 rounded mb-4">
           <a href="#!" class="text-white">
             <img src="images/<?php echo $img8 ?>"
               class="img-fluid rounded-bottom" alt="sample image" style="height:200px;width:100%;">
             <div class="mask rgba-stylish-strong">
               <div class="text-white text-center py-lg-5 py-0 my-0">
                 <div>
                   <h6 class="badge badge-danger" >
                     TECHNOLOGY<span></span></h6>
                   <h5 class="card-title pt-2" id="third_head">
                  <a href="include/fulldetail.php?id=<?php echo $id; ?>" style="color:white;"><?PHP echo $title; ?></a> 
                   </h5>
   
                   <p class="mx-5 clearfix d-none d-md-block"></p>
                 </div>
               </div>
             </div>
           </a>
   
         </div>
         <!--News tile -->
   
       </div>
       <?php }} ?>
       <!--col-4-->
     
       <!--col-4-->
     
       
       
       <!--col-4-->
     
       <!--col-4-->
       <div class="col-4">
         <div class="single-news mb-4">
           <?php 
                    $con=mysqli_connect("localhost","writewing","9005314@Ad","greatten");
                    
                    $sel="SELECT * FROM topten where category='DEFENCE' limit 4,4";
                    if($result=mysqli_query($con,$sel)){
                       
                        while($row=mysqli_fetch_assoc($result)){
                           
                           $title=$row["title"];
                           $category=$row["category"];
                           $img8=$row["img8"];
                           $id=$row["id"];
                        //   $id2=md5($id);
                      
                    ?>
           <!-- Grid row -->
           <div class="row">
   
             <!-- Grid column -->
             <div class="col-md-3">
   
               <!--Image-->
               <div class="view overlay rounded z-depth-1 mb-4">
                 <img class="img-fluid" src="images/<?php echo $img8; ?>" alt="Sample image" style="height:100px;width:100%;">
                 <a>
                   <div class="mask rgba-white-slight"></div>
                 </a>
               </div>
   
             </div>
             <!-- Grid column -->
   
             <!-- Grid column -->
             <div class="col-md-9">
   
               <!-- Excerpt -->
               <p class="badge badge-danger"><?php echo $category; ?></p>
               <div class="d-flex justify-content-between">
                 <div class="col-12 pl-0 mb-3">
                   <a href="include/fulldetail.php?id=<?php echo $id; ?>" style="color:#00264d !important;font-weight:normal;"><?php echo $title; ?></a>
                 </div>
                 
               </div>
   
             </div>
             <!-- Grid column -->
   
           </div>
           <?php }} ?>
           <!-- Grid row -->
   <hr style="background: white;">
         </div><!--single news-->
         
       </div><!--child col-3-->
       <div class="col-8">
         <div class="container">
   
   
           <!--Section: Content-->
           <section class="magazine-section dark-grey-text">
         
         
         
             <!-- Grid row -->
             <div class="row">
           <?php 
                    $con=mysqli_connect("localhost","writewing","9005314@Ad","greatten");
                    
                    $sel="SELECT * FROM topten where category='DEFENCE' limit 8,1";
                    if($result=mysqli_query($con,$sel)){
                       
                        while($row=mysqli_fetch_assoc($result)){
                           
                           $title=$row["title"];
                           $category=$row["category"];
                           $img8=$row["img8"];
                           $id=$row["id"];
                        //   $id2=md5($id);
                        }}
                      
                    ?>
               <!-- Grid column -->
               <div class="col-lg-6 col-md-12 mb-4 text-white">
         
                 <!-- Featured news -->
                 <div class="single-news">
         
                   <!-- Image -->
                   <div class="view overlay rounded z-depth-1-half mb-4">
                     <img class="img-fluid" src="images/<?php  echo $img8 ?>" alt="Sample image" style="width:100%;height:300px;">
                     <a>
                       <div class="mask rgba-white-slight"></div>
                     </a>
                   </div>
         
                   <!-- Data -->
                   <div class="news-data d-flex justify-content-between">
                     <a href="#!" class="deep-orange-text">
                       <h2 class="font-weight-bold"><span class="badge badge-danger"><?php echo $category; ?></span></h2>
                     </a>
                   
                   </div>
         
                   <!-- Excerpt -->
                   <h3 class=""><a style="color:#00264d !important;font-weight:normal;" href="include/fulldetail.php?id=<?php $id; ?>">
                       <?php echo $title; ?>
                   </a></h3>
                     <a style="background-color:#00264d !important;font-weight:normal;color:white;" href="include/fulldetail.php?id=<?php echo $id; ?>" class="btn btn-sm">
                       Read More
                   </a>
         
                 </div>
                 <!-- Featured news -->
         
               </div>
               <!-- Grid column -->
         
               <!-- Grid column -->
               <div class="col-lg-6 col-md-12 mb-4">
         
                   <div class="">
         <div class="single-news mb-4">
           <?php 
                    $con=mysqli_connect("localhost","writewing","9005314@Ad","greatten");
                    
                    $sel="SELECT * FROM topten where category='DEFENCE' limit 9,4";
                    if($result=mysqli_query($con,$sel)){
                       
                        while($row=mysqli_fetch_assoc($result)){
                           
                           $title=$row["title"];
                           $category=$row["category"];
                           $img8=$row["img8"];
                           $id=$row["id"];
                        //   $id2=md5($id);
                      
                    ?>
           <!-- Grid row -->
           <div class="row">
   
             <!-- Grid column -->
             <div class="col-md-3">
   
               <!--Image-->
               <div class="view overlay rounded z-depth-1 mb-4">
                 <img class="img-fluid" src="images/<?php echo $img8; ?>" alt="Sample image" style="height:100px;width:100%;">
                 <a>
                   <div class="mask rgba-white-slight"></div>
                 </a>
               </div>
   
             </div>
             <!-- Grid column -->
   
             <!-- Grid column -->
             <div class="col-md-9">
   
               <!-- Excerpt -->
               <p class="badge badge-danger"><?php echo $category; ?></p>
               <div class="d-flex justify-content-between">
                 <div class="col-12 pl-0 mb-3">
                   <a href="include/fulldetail.php?id=<?php echo $id; ?>" style="color:#00264d !important;font-weight:normal;"><?php echo $title; ?></a>
                 </div>
                 
               </div>
   
             </div>
             <!-- Grid column -->
   
           </div>
           <?php }} ?>
           <!-- Grid row -->
   <hr style="background: white;">
         </div><!--single news-->
         
       </div>
                 <!-- Small news -->
         
               </div>
               <!--Grid column-->
         
             </div>
             <!-- Grid row -->
         
           </section>
           <!--Section: Content-->
         
         
         </div>
       </div><!--child col-6-->
     
      </div><!--row end-->
    </div>
   </section>
   <section class="d-sm-block d-md-none d-lg-none container-fluid"><!---------wild ---------------mobile------------------------>
       <div class=" text-center mx-auto z-depth-1 d-sm-block d-md-none d-lg-none"
       style="border-top:5px solid white;color:white;background-color:#cc0000 !important;height:60px;">
            <h6 class="text-center font-weight-bold mx-auto"  style="line-height:60px;font-size:20px;">DEFENCE&nbsp;
            <i class="fas fa-arrow-circle-right"></i>
              </h6> 
          </div>
          <section class="container-fluid">
              <div class="row">
                    <?php 
                    $con=mysqli_connect("localhost","writewing","9005314@Ad","greatten");
                    
                    $sel="SELECT * FROM topten where category='DEFENCE' limit 0,16";
                    if($result=mysqli_query($con,$sel)){
                       
                        while($row=mysqli_fetch_assoc($result)){
                           
                           $title=$row["title"];
                           $category=$row["category"];
                           $img8=$row["img8"];
                           $id=$row["id"];
                        //   $id2=md5($id);
                      
                    ?>
             
                 <div class="col-sm-12 d-block d-md-none d-lg-none my-1">
            
                  <div class="row">
                    <div class="col-5">
                        <!-- Featured image -->
                        <div class="view overlay my-auto" style="margin-top:10px !important;">
                          <img class="img-fluid my-auto" src="images/<?php echo $img8; ?>" alt="Sample image" style="height:120px;width:100%;border-left:5px solid white;border-style:outset;">
                          <a>
                            <div class="mask rgba-white-slight"></div>
                          </a>
                        </div>
                
                      </div>
                      <!-- Grid column -->
                
                      <!-- Grid column -->
                      <div class="col-7 mt-2">
                        <!-- Post title -->
                        <span class="badge badge-danger z-depth-0" style="background-color:#cc2900 !important; color:white;"><?php echo $category; ?></span>
                        <h6 class="font-weight-bold"><strong><a href="include/fulldetail.php?id=<?php echo $id; ?>" 
                            style="color:#001a33 !important;">
                            <?php echo $title; ?>
                        </a></strong></h6>
                        <!-- Excerpt -->
                        <!-- Read more button -->
                        <p class="text-muted my-0">Admin | 22/April/2020</p>
                         <a class="btn btn-sm mx-0 z-depth-0" style="background-color:#00264d !important;color:white;" href="include/fulldetail.php?id=<?php echo $id; ?>" 
                       > more &nbsp;<i class="far fa-arrow-alt-circle-right"></i></a>
                
                      </div>
                  </div>
              
       
            </div><!--mobile verson -->
              <?php
            
                        }
                        
                    }
                    else{
                       
                        echo mysqli_error($con);
                    }
            
            ?>
             </div>
          </section>
   
  </section>
  
     <section>
        <?php include("include/footer.php"); ?>
    </section>
  </body>
  
  
  
  
  
