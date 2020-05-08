<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title></title>
  <!-- MDB icon -->
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Robot:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="../css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/style2.css">
</head>
<body>
  <section>
    <nav class="navbar  navbar-expand-lg navbar-dark  peach-gradient  scrolling-navbar" style="height: 40px;">
      <a class="navbar-brand" href="#"><strong>TOP 10</strong></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" id="ul2">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">AboutUs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">DonateUs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">ContactUs</a>
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
  </section>
  <header>
      
    <style>
     .navbar .navbar-brand img {
      height: 20px;
    }

    .navbar .navbar-brand {
      padding-top: 0;
    }

    .navbar .nav-link {
      color: #444343!important;
    }

    .navbar .button-collapse {
      padding-top: 1px;
    }

    .card-intro .card-body {
      padding-top: 1.5rem;
      padding-bottom: 1.5rem;
      border-radius: 0 !important;
    }

    .card-intro .card-body h1 {
      margin-bottom: 0;
    }

    .card-intro {
      margin-top: 64px;
    }

    @media (max-width: 450px) {
      .card-intro {
        margin-top: 56px;
      }
    }

    @media (min-width: 1441px) {
      .card-intro {
        padding-left: 0 !important;
      }
    }
    </style>

    <!-- Navbar -->
    <nav class="navbar  navbar-expand-lg z-depth-0 navbar-light black scrolling-navbar">
      <div class="container">

        <!-- Brand -->
        <a class="navbar-brand waves-effect" href="" target="self">
          <img src="../../assets/images/logo.png" alt="Logo" style="height: 50px;width: 50px;">
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Left -->
          <ul class="navbar-nav" id="ul">
            <li class="nav-item">
              <a class="nav-link waves-effect"  routerLink="">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect"  routerLink="/wildlife">WILDLIFE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect"  routerLink="/science">SCIENCE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect"  routerLink="/countries">COUNTRIES</a>
            </li>
        
            <li class="nav-item">
              <a class="nav-link waves-effect"  routerLink="/crime">CRIME</a>
            </li>
          
            <li class="nav-item">
              <a class="nav-link waves-effect"  routerLink="/vehicles">AUTOMOBILE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" routerLink="/defence">DEFENCE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" routerLink="/">MONUMENTS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect"  routerLink="/people">PEOPLE</a>
            </li>
          
            <li class="nav-item">
              <a class="nav-link waves-effect"  routerLink="/politics">POLITICS</a>
            </li>
          </ul>
            <ul class="navbar-nav nav-flex-icons float-right">
              <li class="nav-item">
                <main>
                  <div class="search-wrapper">
                    <input type="text" name="query" autocomplete="off" placeholder="Search for&hellip;">
                    <button type="submit"></button>
                  </div>
                </main>
              </li>    
            </ul>
         
        
 
          <!-- Right -->
        

        </div>

      </div>
    </nav>
    <!-- Navbar -->

    <!-- Intro -->
    <!---->
  
   
    <!-- Intro -->

  </header>
    <section>
        <div class="container">
            <div class="row">
                <?php 
$con=mysqli_connect("localhost","writewing","9005314@Ad","greatten");
$id=$_REQUEST["id"];

$sel="SELECT * FROM topten where id='$id'";
$result=mysqli_query($con,$sel);
$row=mysqli_fetch_array($result);
       $id=$row["id"];
       $title=$row["title"];
       $desc1=$row["desc1"];
       $desc1_b=$row["desc1_b"];
       $desc1_c=$row["desc1_c"];
$category=$row["cateogry"];
       $desc2=$row["desc2"];
       $desc2_b=$row["desc2_b"];
       $desc2_c=$row["desc2_c"];
       $desc3=$row["desc3"];
       $desc3_b=$row["desc3_b"];
       $desc3_c=$row["desc3_c"];
       $desc4=$row["desc4"];
       $desc4_b=$row["desc4_b"];
       $desc4_c=$row["desc4_c"];
       $desc5=$row["desc5"];
       $desc5_b=$row["desc5_b"];
       $desc5_c=$row["desc5_c"];
       $desc6=$row["desc6"];
       $desc6_b=$row["desc6_b"];
       $desc6_c=$row["desc6_c"];
       $desc7=$row["desc7"];
       $desc7_b=$row["desc7_b"];
       $desc7_c=$row["desc7_c"];
       $desc8=$row["desc8"];
       $desc8_b=$row["desc8_b"];
       $desc8_c=$row["desc8_c"];
       $desc9=$row["desc9"];
       $desc9_b=$row["desc9_b"];
       $desc9_c=$row["desc9_c"];
       $desc10=$row["desc10"];
       $desc10_b=$row["desc10_b"];
       $desc10_c=$row["desc10_c"];
       $category=$row["category"];
       $img1=$row["img1"];
       $img2=$row["img2"];
       $img3=$row["img3"];
       $img4=$row["img4"];
       $img5=$row["img5"];
       $img6=$row["img6"];
       $img7=$row["img7"];
       $img8=$row["img8"];
       $img9=$row["img9"];
       $img10=$row["img10"];
       $name1=$row["name1"];
       $name2=$row["name2"];
       $name3=$row["name3"];
       $name4=$row["name4"];
       $name5=$row["name5"];
       $name6=$row["name6"];
       $name7=$row["name7"];
       $name8=$row["name8"];
       $name9=$row["name9"];
       $name10=$row["name10"];
        //$cr++;

   // echo json_encode($prods);



?>

                <div class="col-lg-9 col-sm-12 col-md-12 mt-5" *ngFor="let detail of fulldetail">
                    <div class="my-3">
                        <h6>
                            <span class="badge badge-success z-depth-0">Success</span>&nbsp;
                            <span class="badge badge-danger z-depth-0">Danger</span>&nbsp;
                            <span class="badge badge-warning z-depth-0">Warning</span>
                        </h6>
                    </div>
                    <div class="my-3">
                        <h1 style="font-family: -apple-system, BlinkMacSystemFont, 
                        'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue',
                         sans-serif;font-weight: bold;text-transform: uppercase;color: #00264d;"><?php echo $title; ?></h1>
                    </div>
                    <div class="my-5">
                        <div class="chip chip-sm danger-color white-text">
                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img(21).jpg" alt="Contact Person" 
                            id="img">SHASHI SHEKHAR PATHAK
                          </div>
                    </div>
                    <div class="row my-2" >
                          <div class="col-lg-3 col-md-6 col-sm-12 my-5">
                            <div
                            class="avatar w-100 white d-flex justify-content-center align-items-center"
                          >
                            <img
                              src="../images/<?php echo $img10; ?>"
                              class="img-fluid rounded-circle z-depth-1" style="height:250px;width:250px;"/>
                          </div>
                          </div><!--child 3-->
                          <div class="col-lg-9 col-md-6 col-sm-12 my-5">
                            <div class="row">
                                <div class="col-1 mr-3">
                                   <h1><span class="badge badge-warning z-depth-0">10</span>
                                &nbsp;&nbsp;</h1>
                                </div>
                                <div class="col-10 ml-3 mt-2">
                                    <H3 style="text-transform: capitalize;font-weight: bold;color:  #ff0000;">
                                        <?php echo $name10; ?></H3>
                                    <hr>
                                <p class="text-justify" style="font-weight: normal;text-transform: capitalize;
                                color:#001a33;font-family: 'Times New Roman', Times, serif;font-size: 18px;">
                                <sup>
                                    <i class="fa fa-quote-left" aria-hidden="true" style="font-size: large;
                                    color:#ff0066;"></i>
                                </sup>&nbsp;<?php echo $desc10 ?>&nbsp;
                                      <sup> <i class="fa fa-quote-right" aria-hidden="true" style="font-size: large;
                                        color:#ff0066;"></i></sup>
                                </p>
                                <p class="my-3 text-justify"  style="font-weight: normal;text-transform: capitalize;
                                color:#001a33;font-family: 'Times New Roman', Times, serif;font-size: 18px;"> 
                                  <sup>
                                    <i class="fa fa-quote-left" aria-hidden="true" style="font-size: large;
                                    color:#ff0066;"></i>
                                </sup>&nbsp;
                                   <?php echo $desc10_b ?>&nbsp;
                                     <sup>
                                        <i class="fa fa-quote-right" aria-hidden="true" style="font-size: large;
                                        color:#ff0066;"></i>
                                    </sup>
                                    </p>
                             <p class="my-2 text-justify"  style="font-weight: normal;text-transform: capitalize;
                             color:#001a33;font-family: 'Times New Roman', Times, serif;font-size: 18px;">
                               <sup>
                                <i class="fa fa-quote-left" aria-hidden="true" style="font-size: large;
                                color:#ff0066;"></i>
                            </sup>&nbsp;
                                <?php echo $desc10_c ?>&nbsp;
                              
                                    <sup>
                                        <i class="fa fa-quote-right" aria-hidden="true" style="font-size: large;
                                        color:#ff0066;"></i>
                                    </sup>
                             </p>         
 
                                <div class="my-4">
                                    <a href="#"><i class="fa fa-plus" aria-hidden="true" style="color: #cc0000;font-size: 20px;
                                        
                                        "></i>&nbsp;&nbsp;<span style="color: #003366;font-weight: bolder;font-family: 'Trebuchet MS', 
                                        'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">291&nbsp;Comments</span> </a>
                               &nbsp;&nbsp;&nbsp; 
                               <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true" style="color: #00b300;font-size: 20px;"></i>
                            &nbsp;&nbsp;<span style="color: #003366;font-weight: bolder;font-family: 'Trebuchet MS', 
                            'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">291&nbsp;Thumbs-Up</span>
                            
                        </a> &nbsp;&nbsp;&nbsp;  
                        <a href="#"><i class="fa fa-thumbs-o-down" aria-hidden="true" style="color: #cc0000;font-size: 20px;"></i>

                            &nbsp;&nbsp;<span style="color: #003366;font-weight: bolder;font-family: 'Trebuchet MS', 
                            'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">291&nbsp;Thumbs-Down</span>
                            
                        </a>      
                                </div>
                                </div>
                            </div>
                          </div><!--child 9-->
                          <div class="col-lg-3 col-md-6 col-sm-12 my-5">
                            <div
                            class="avatar w-100 white d-flex justify-content-center align-items-center"
                          >
                            <img
                              src="../images/<?php echo $img9 ?>"
                              class="img-fluid rounded-circle z-depth-1" style="height:250px;width:250px;"/>
                          </div>
                          </div><!--child 3-->
                          <div class="col-lg-9 col-md-6 col-sm-12 my-5">
                            <div class="row">
                                <div class="col-1 mr-3">
                                   <h1><span class="badge badge-warning z-depth-0">9</span></h1>
                                </div>
                                <div class="col-10 ml-3 mt-2">
                                    <H3 style="text-transform: capitalize;font-weight: bold;color:  #ff0000;">
                                     <?php echo $name9 ?></H3>
                                    <hr>
                                <p class="text-justify" style="font-weight: normal;text-transform: capitalize;
                                color:#001a33;font-family: 'Times New Roman', Times, serif;font-size: 18px;">
                                <sup>
                                    <i class="fa fa-quote-left" aria-hidden="true" style="font-size: large;
                                    color:#ff0066;"></i>
                                </sup>&nbsp; <?php echo $desc9 ?>&nbsp;
                                      <sup> <i class="fa fa-quote-right" aria-hidden="true" style="font-size: large;
                                        color:#ff0066;"></i></sup>
                                </p>
                                <p class="my-3 text-justify"  style="font-weight: normal;text-transform: capitalize;
                                color:#001a33;font-family: 'Times New Roman', Times, serif;font-size: 18px;"> 
                                  <sup>
                                    <i class="fa fa-quote-left" aria-hidden="true" style="font-size: large;
                                    color:#ff0066;"></i>
                                </sup>&nbsp;
                                    <?php echo $desc9_b ?>&nbsp;
                                     <sup>
                                        <i class="fa fa-quote-right" aria-hidden="true" style="font-size: large;
                                        color:#ff0066;"></i>
                                    </sup>
                                    </p>
                             <p class="my-2 text-justify"  style="font-weight: normal;text-transform: capitalize;
                             color:#001a33;font-family: 'Times New Roman', Times, serif;font-size: 18px;">
                               <sup>
                                <i class="fa fa-quote-left" aria-hidden="true" style="font-size: large;
                                color:#ff0066;"></i>
                            </sup>&nbsp;
                                <?php echo $desc9_c ?>&nbsp;
                              
                                    <sup>
                                        <i class="fa fa-quote-right" aria-hidden="true" style="font-size: large;
                                        color:#ff0066;"></i>
                                    </sup>
                             </p>         
 
                                <div class="my-4">
                                    <a href="#"><i class="fa fa-plus" aria-hidden="true" style="color: #cc0000;font-size: 20px;
                                        
                                        "></i>&nbsp;&nbsp;<span style="color: #003366;font-weight: bolder;font-family: 'Trebuchet MS', 
                                        'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">291&nbsp;Comments</span> </a>
                               &nbsp;&nbsp;&nbsp; 
                               <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true" style="color: #00b300;font-size: 20px;"></i>
                            &nbsp;&nbsp;<span style="color: #003366;font-weight: bolder;font-family: 'Trebuchet MS', 
                            'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">291&nbsp;Thumbs-Up</span>
                            
                        </a> &nbsp;&nbsp;&nbsp;  
                        <a href="#"><i class="fa fa-thumbs-o-down" aria-hidden="true" style="color: #cc0000;font-size: 20px;"></i>

                            &nbsp;&nbsp;<span style="color: #003366;font-weight: bolder;font-family: 'Trebuchet MS', 
                            'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">291&nbsp;Thumbs-Down</span>
                            
                        </a>      
                                </div>
                                </div>
                            </div>
                          </div><!--child 9-->
                          <div class="col-lg-3 col-md-6 col-sm-12 my-5">
                            <div
                            class="avatar w-100 white d-flex justify-content-center align-items-center"
                          >
                            <img
                              src="../images/<?php echo $img8 ?>"
                              class="img-fluid rounded-circle z-depth-1" style="height:250px;width:250px;"/>
                          </div>
                          </div><!--child 3-->
                          <div class="col-lg-9 col-md-6 col-sm-12 my-5">
                            <div class="row">
                                <div class="col-1 mr-3">
                                   <h1><span class="badge badge-warning z-depth-0">8</span></h1>
                                </div>
                                <div class="col-10 ml-3 mt-2">
                                    <H3 style="text-transform: capitalize;font-weight: bold;color:  #ff0000;"><?php echo $name8 ?></H3>
                                    <hr>
                                <p class="text-justify" style="font-weight: normal;text-transform: capitalize;
                                color:#001a33;font-family: 'Times New Roman', Times, serif;font-size: 18px;">
                                <sup>
                                    <i class="fa fa-quote-left" aria-hidden="true" style="font-size: large;
                                    color:#ff0066;"></i>
                                </sup>&nbsp; <?php echo $desc8 ?>&nbsp;
                                      <sup> <i class="fa fa-quote-right" aria-hidden="true" style="font-size: large;
                                        color:#ff0066;"></i></sup>
                                </p>
                                <p class="my-3 text-justify"  style="font-weight: normal;text-transform: capitalize;
                                color:#001a33;font-family: 'Times New Roman', Times, serif;font-size: 18px;"> 
                                  <sup>
                                    <i class="fa fa-quote-left" aria-hidden="true" style="font-size: large;
                                    color:#ff0066;"></i>
                                </sup>&nbsp;
                                    <?php echo $desc8_b ?>&nbsp;
                                     <sup>
                                        <i class="fa fa-quote-right" aria-hidden="true" style="font-size: large;
                                        color:#ff0066;"></i>
                                    </sup>
                                    </p>
                             <p class="my-2 text-justify"  style="font-weight: normal;text-transform: capitalize;
                             color:#001a33;font-family: 'Times New Roman', Times, serif;font-size: 18px;">
                               <sup>
                                <i class="fa fa-quote-left" aria-hidden="true" style="font-size: large;
                                color:#ff0066;"></i>
                            </sup>&nbsp;
                               <?php echo $desc8_c ?>&nbsp;
                              
                                    <sup>
                                        <i class="fa fa-quote-right" aria-hidden="true" style="font-size: large;
                                        color:#ff0066;"></i>
                                    </sup>
                             </p>         
 
                                <div class="my-4">
                                    <a href="#"><i class="fa fa-plus" aria-hidden="true" style="color: #cc0000;font-size: 20px;
                                        
                                        "></i>&nbsp;&nbsp;<span style="color: #003366;font-weight: bolder;font-family: 'Trebuchet MS', 
                                        'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">291&nbsp;Comments</span> </a>
                               &nbsp;&nbsp;&nbsp; 
                               <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true" style="color: #00b300;font-size: 20px;"></i>
                            &nbsp;&nbsp;<span style="color: #003366;font-weight: bolder;font-family: 'Trebuchet MS', 
                            'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">291&nbsp;Thumbs-Up</span>
                            
                        </a> &nbsp;&nbsp;&nbsp;  
                        <a href="#"><i class="fa fa-thumbs-o-down" aria-hidden="true" style="color: #cc0000;font-size: 20px;"></i>

                            &nbsp;&nbsp;<span style="color: #003366;font-weight: bolder;font-family: 'Trebuchet MS', 
                            'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">291&nbsp;Thumbs-Down</span>
                            
                        </a>      
                                </div>
                                </div>
                            </div>
                          </div><!--child 9-->
                          <div class="col-lg-3 col-md-6 col-sm-12 my-5">
                            <div
                            class="avatar w-100 white d-flex justify-content-center align-items-center"
                          >
                            <img
                              src="../images/<?php echo $img7 ?>"
                              class="img-fluid rounded-circle z-depth-1" style="height:250px;width:250px;"/>
                          </div>
                          </div><!--child 3-->
                          <div class="col-lg-9 col-md-6 col-sm-12 my-5">
                            <div class="row">
                                <div class="col-1 mr-3">
                                   <h1><span class="badge badge-warning z-depth-0">7</span></h1>
                                </div>
                                <div class="col-10 ml-3 mt-2">
                                    <H3 style="text-transform: capitalize;font-weight: bold;color:  #ff0000;"><?php echo $name7 ?></H3>
                                    <hr>
                                <p class="text-justify" style="font-weight: normal;text-transform: capitalize;
                                color:#001a33;font-family: 'Times New Roman', Times, serif;font-size: 18px;">
                                <sup>
                                    <i class="fa fa-quote-left" aria-hidden="true" style="font-size: large;
                                    color:#ff0066;"></i>
                                </sup>&nbsp; <?php echo $desc7 ?>&nbsp;
                                      <sup> <i class="fa fa-quote-right" aria-hidden="true" style="font-size: large;
                                        color:#ff0066;"></i></sup>
                                </p>
                                <p class="my-3 text-justify"  style="font-weight: normal;text-transform: capitalize;
                                color:#001a33;font-family: 'Times New Roman', Times, serif;font-size: 18px;"> 
                                  <sup>
                                    <i class="fa fa-quote-left" aria-hidden="true" style="font-size: large;
                                    color:#ff0066;"></i>
                                </sup>&nbsp;
                                    <?php echo $desc7_b ?>&nbsp;
                                     <sup>
                                        <i class="fa fa-quote-right" aria-hidden="true" style="font-size: large;
                                        color:#ff0066;"></i>
                                    </sup>
                                    </p>
                             <p class="my-2 text-justify"  style="font-weight: normal;text-transform: capitalize;
                             color:#001a33;font-family: 'Times New Roman', Times, serif;font-size: 18px;">
                               <sup>
                                <i class="fa fa-quote-left" aria-hidden="true" style="font-size: large;
                                color:#ff0066;"></i>
                            </sup>&nbsp;
                                <?php echo $desc7_c ?>&nbsp;
                              
                                    <sup>
                                        <i class="fa fa-quote-right" aria-hidden="true" style="font-size: large;
                                        color:#ff0066;"></i>
                                    </sup>
                             </p>         
 
                                <div class="my-4">
                                    <a href="#"><i class="fa fa-plus" aria-hidden="true" style="color: #cc0000;font-size: 20px;
                                        
                                        "></i>&nbsp;&nbsp;<span style="color: #003366;font-weight: bolder;font-family: 'Trebuchet MS', 
                                        'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">291&nbsp;Comments</span> </a>
                               &nbsp;&nbsp;&nbsp; 
                               <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true" style="color: #00b300;font-size: 20px;"></i>
                            &nbsp;&nbsp;<span style="color: #003366;font-weight: bolder;font-family: 'Trebuchet MS', 
                            'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">291&nbsp;Thumbs-Up</span>
                            
                        </a> &nbsp;&nbsp;&nbsp;  
                        <a href="#"><i class="fa fa-thumbs-o-down" aria-hidden="true" style="color: #cc0000;font-size: 20px;"></i>

                            &nbsp;&nbsp;<span style="color: #003366;font-weight: bolder;font-family: 'Trebuchet MS', 
                            'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">291&nbsp;Thumbs-Down</span>
                            
                        </a>      
                                </div>
                                </div>
                            </div>
                          </div><!--child 9-->
                          <div class="col-lg-3 col-md-6 col-sm-12 my-5">
                            <div
                            class="avatar w-100 white d-flex justify-content-center align-items-center"
                          >
                            <img
                              src="../images/<?php echo $img6 ?>"
                              class="img-fluid rounded-circle z-depth-1" style="height:250px;width:250px;"/>
                          </div>
                          </div><!--child 3-->
                          <div class="col-lg-9 col-md-6 col-sm-12 my-5">
                            <div class="row">
                                <div class="col-1 mr-3">
                                   <h1><span class="badge badge-warning z-depth-0">6</span></h1>
                                </div>
                                <div class="col-10 ml-3 mt-2">
                                    <H3 style="text-transform: capitalize;font-weight: bold;color:  #ff0000;"><?php echo $name6 ?></H3>
                                    <hr>
                                <p class="text-justify" style="font-weight: normal;text-transform: capitalize;
                                color:#001a33;font-family: 'Times New Roman', Times, serif;font-size: 18px;">
                                <sup>
                                    <i class="fa fa-quote-left" aria-hidden="true" style="font-size: large;
                                    color:#ff0066;"></i>
                                </sup>&nbsp; <?php echo $desc6 ?>&nbsp;
                                      <sup> <i class="fa fa-quote-right" aria-hidden="true" style="font-size: large;
                                        color:#ff0066;"></i></sup>
                                </p>
                                <p class="my-3 text-justify"  style="font-weight: normal;text-transform: capitalize;
                                color:#001a33;font-family: 'Times New Roman', Times, serif;font-size: 18px;"> 
                                  <sup>
                                    <i class="fa fa-quote-left" aria-hidden="true" style="font-size: large;
                                    color:#ff0066;"></i>
                                </sup>&nbsp;
                                  <?php echo $desc6_b ?>&nbsp;
                                     <sup>
                                        <i class="fa fa-quote-right" aria-hidden="true" style="font-size: large;
                                        color:#ff0066;"></i>
                                    </sup>
                                    </p>
                             <p class="my-2 text-justify"  style="font-weight: normal;text-transform: capitalize;
                             color:#001a33;font-family: 'Times New Roman', Times, serif;font-size: 18px;">
                               <sup>
                                <i class="fa fa-quote-left" aria-hidden="true" style="font-size: large;
                                color:#ff0066;"></i>
                            </sup>&nbsp;
                               <?php echo $desc6_c ?>&nbsp;
                              
                                    <sup>
                                        <i class="fa fa-quote-right" aria-hidden="true" style="font-size: large;
                                        color:#ff0066;"></i>
                                    </sup>
                             </p>         
 
                                <div class="my-4">
                                    <a href="#"><i class="fa fa-plus" aria-hidden="true" style="color: #cc0000;font-size: 20px;
                                        
                                        "></i>&nbsp;&nbsp;<span style="color: #003366;font-weight: bolder;font-family: 'Trebuchet MS', 
                                        'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">291&nbsp;Comments</span> </a>
                               &nbsp;&nbsp;&nbsp; 
                               <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true" style="color: #00b300;font-size: 20px;"></i>
                            &nbsp;&nbsp;<span style="color: #003366;font-weight: bolder;font-family: 'Trebuchet MS', 
                            'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">291&nbsp;Thumbs-Up</span>
                            
                        </a> &nbsp;&nbsp;&nbsp;  
                        <a href="#"><i class="fa fa-thumbs-o-down" aria-hidden="true" style="color: #cc0000;font-size: 20px;"></i>

                            &nbsp;&nbsp;<span style="color: #003366;font-weight: bolder;font-family: 'Trebuchet MS', 
                            'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">291&nbsp;Thumbs-Down</span>
                            
                        </a>      
                                </div>
                                </div>
                            </div>
                          </div><!--child 9-->
                          <div class="col-lg-3 col-md-6 col-sm-12 my-5">
                            <div
                            class="avatar w-100 white d-flex justify-content-center align-items-center"
                          >
                            <img
                              src="../images/<?php echo $img5 ?>"
                              class="img-fluid rounded-circle z-depth-1" style="height:250px;width:250px;"/>
                          </div>
                          </div><!--child 3-->
                          <div class="col-lg-9 col-md-6 col-sm-12 my-5">
                            <div class="row">
                                <div class="col-1 mr-3">
                                   <h1><span class="badge badge-warning z-depth-0">5</span></h1>
                                </div>
                                <div class="col-10 ml-3 mt-2">
                                    <H3 style="text-transform: capitalize;font-weight: bold;color:  #ff0000;"><?php echo $name5 ?></H3>
                                    <hr>
                                <p class="text-justify" style="font-weight: normal;text-transform: capitalize;
                                color:#001a33;font-family: 'Times New Roman', Times, serif;font-size: 18px;">
                                <sup>
                                    <i class="fa fa-quote-left" aria-hidden="true" style="font-size: large;
                                    color:#ff0066;"></i>
                                </sup>&nbsp; <?php echo $desc5 ?>&nbsp;
                                      <sup> <i class="fa fa-quote-right" aria-hidden="true" style="font-size: large;
                                        color:#ff0066;"></i></sup>
                                </p>
                                <p class="my-3 text-justify"  style="font-weight: normal;text-transform: capitalize;
                                color:#001a33;font-family: 'Times New Roman', Times, serif;font-size: 18px;"> 
                                  <sup>
                                    <i class="fa fa-quote-left" aria-hidden="true" style="font-size: large;
                                    color:#ff0066;"></i>
                                </sup>&nbsp;
                                     <?php echo $desc5_b ?>&nbsp;
                                     <sup>
                                        <i class="fa fa-quote-right" aria-hidden="true" style="font-size: large;
                                        color:#ff0066;"></i>
                                    </sup>
                                    </p>
                             <p class="my-2 text-justify"  style="font-weight: normal;text-transform: capitalize;
                             color:#001a33;font-family: 'Times New Roman', Times, serif;font-size: 18px;">
                               <sup>
                                <i class="fa fa-quote-left" aria-hidden="true" style="font-size: large;
                                color:#ff0066;"></i>
                            </sup>&nbsp;
                                <?php echo $desc5_c ?>&nbsp;
                              
                                    <sup>
                                        <i class="fa fa-quote-right" aria-hidden="true" style="font-size: large;
                                        color:#ff0066;"></i>
                                    </sup>
                             </p>         
 
                                <div class="my-4">
                                    <a href="#"><i class="fa fa-plus" aria-hidden="true" style="color: #cc0000;font-size: 20px;
                                        
                                        "></i>&nbsp;&nbsp;<span style="color: #003366;font-weight: bolder;font-family: 'Trebuchet MS', 
                                        'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">291&nbsp;Comments</span> </a>
                               &nbsp;&nbsp;&nbsp; 
                               <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true" style="color: #00b300;font-size: 20px;"></i>
                            &nbsp;&nbsp;<span style="color: #003366;font-weight: bolder;font-family: 'Trebuchet MS', 
                            'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">291&nbsp;Thumbs-Up</span>
                            
                        </a> &nbsp;&nbsp;&nbsp;  
                        <a href="#"><i class="fa fa-thumbs-o-down" aria-hidden="true" style="color: #cc0000;font-size: 20px;"></i>

                            &nbsp;&nbsp;<span style="color: #003366;font-weight: bolder;font-family: 'Trebuchet MS', 
                            'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">291&nbsp;Thumbs-Down</span>
                            
                        </a>      
                                </div>
                                </div>
                            </div>
                          </div><!--child 9-->
                          <div class="col-lg-3 col-md-6 col-sm-12 my-5">
                            <div
                            class="avatar w-100 white d-flex justify-content-center align-items-center"
                          >
                            <img
                              src="../images/<?php echo $img4 ?>"
                              class="img-fluid rounded-circle z-depth-1" style="height:250px;width:250px;"/>
                          </div>
                          </div><!--child 3-->
                          <div class="col-lg-9 col-md-6 col-sm-12 my-5">
                            <div class="row">
                                <div class="col-1 mr-3">
                                   <h1><span class="badge badge-warning z-depth-0">4</span></h1>
                                </div>
                                <div class="col-10 ml-3 mt-2">
                                    <H3 style="text-transform: capitalize;font-weight: bold;color:  #ff0000;"><?php echo $name4 ?></H3>
                                    <hr>
                                <p class="text-justify" style="font-weight: normal;text-transform: capitalize;
                                color:#001a33;font-family: 'Times New Roman', Times, serif;font-size: 18px;">
                                <sup>
                                    <i class="fa fa-quote-left" aria-hidden="true" style="font-size: large;
                                    color:#ff0066;"></i>
                                </sup>&nbsp; <?php echo $desc4 ?>&nbsp;
                                      <sup> <i class="fa fa-quote-right" aria-hidden="true" style="font-size: large;
                                        color:#ff0066;"></i></sup>
                                </p>
                                <p class="my-3 text-justify"  style="font-weight: normal;text-transform: capitalize;
                                color:#001a33;font-family: 'Times New Roman', Times, serif;font-size: 18px;"> 
                                  <sup>
                                    <i class="fa fa-quote-left" aria-hidden="true" style="font-size: large;
                                    color:#ff0066;"></i>
                                </sup>&nbsp;
                                    <?php echo $desc4_b ?>&nbsp;
                                     <sup>
                                        <i class="fa fa-quote-right" aria-hidden="true" style="font-size: large;
                                        color:#ff0066;"></i>
                                    </sup>
                                    </p>
                             <p class="my-2 text-justify"  style="font-weight: normal;text-transform: capitalize;
                             color:#001a33;font-family: 'Times New Roman', Times, serif;font-size: 18px;">
                               <sup>
                                <i class="fa fa-quote-left" aria-hidden="true" style="font-size: large;
                                color:#ff0066;"></i>
                            </sup>&nbsp;
                                 <?php echo $desc4_c ?>&nbsp;
                              
                                    <sup>
                                        <i class="fa fa-quote-right" aria-hidden="true" style="font-size: large;
                                        color:#ff0066;"></i>
                                    </sup>
                             </p>         
 
                                <div class="my-4">
                                    <a href="#"><i class="fa fa-plus" aria-hidden="true" style="color: #cc0000;font-size: 20px;
                                        
                                        "></i>&nbsp;&nbsp;<span style="color: #003366;font-weight: bolder;font-family: 'Trebuchet MS', 
                                        'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">291&nbsp;Comments</span> </a>
                               &nbsp;&nbsp;&nbsp; 
                               <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true" style="color: #00b300;font-size: 20px;"></i>
                            &nbsp;&nbsp;<span style="color: #003366;font-weight: bolder;font-family: 'Trebuchet MS', 
                            'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">291&nbsp;Thumbs-Up</span>
                            
                        </a> &nbsp;&nbsp;&nbsp;  
                        <a href="#"><i class="fa fa-thumbs-o-down" aria-hidden="true" style="color: #cc0000;font-size: 20px;"></i>

                            &nbsp;&nbsp;<span style="color: #003366;font-weight: bolder;font-family: 'Trebuchet MS', 
                            'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">291&nbsp;Thumbs-Down</span>
                            
                        </a>      
                                </div>
                                </div>
                            </div>
                          </div><!--child 9-->
                          <div class="col-lg-3 col-md-6 col-sm-12 my-5">
                            <div
                            class="avatar w-100 white d-flex justify-content-center align-items-center"
                          >
                            <img
                              src="../images/<?php echo $img3 ?>"
                              class="img-fluid rounded-circle z-depth-1" style="height:250px;width:250px;"/>
                          </div>
                          </div><!--child 3-->
                          <div class="col-lg-9 col-md-6 col-sm-12 my-5">
                            <div class="row">
                                <div class="col-1 mr-3">
                                   <h1><span class="badge badge-warning z-depth-0">3</span></h1>
                                </div>
                                <div class="col-10 ml-3 mt-2">
                                    <H3 style="text-transform: capitalize;font-weight: bold;color:  #ff0000;"><?php echo $name3 ?></H3>
                                    <hr>
                                <p class="text-justify" style="font-weight: normal;text-transform: capitalize;
                                color:#001a33;font-family: 'Times New Roman', Times, serif;font-size: 18px;">
                                <sup>
                                    <i class="fa fa-quote-left" aria-hidden="true" style="font-size: large;
                                    color:#ff0066;"></i>
                                </sup>&nbsp; <?php echo $desc3 ?>&nbsp;
                                      <sup> <i class="fa fa-quote-right" aria-hidden="true" style="font-size: large;
                                        color:#ff0066;"></i></sup>
                                </p>
                                <p class="my-3 text-justify"  style="font-weight: normal;text-transform: capitalize;
                                color:#001a33;font-family: 'Times New Roman', Times, serif;font-size: 18px;"> 
                                  <sup>
                                    <i class="fa fa-quote-left" aria-hidden="true" style="font-size: large;
                                    color:#ff0066;"></i>
                                </sup>&nbsp;
                                    <?php echo $desc3_b ?>&nbsp;
                                     <sup>
                                        <i class="fa fa-quote-right" aria-hidden="true" style="font-size: large;
                                        color:#ff0066;"></i>
                                    </sup>
                                    </p>
                             <p class="my-2 text-justify"  style="font-weight: normal;text-transform: capitalize;
                             color:#001a33;font-family: 'Times New Roman', Times, serif;font-size: 18px;">
                               <sup>
                                <i class="fa fa-quote-left" aria-hidden="true" style="font-size: large;
                                color:#ff0066;"></i>
                            </sup>&nbsp;
                                <?php echo $desc3_c ?>&nbsp;
                              
                                    <sup>
                                        <i class="fa fa-quote-right" aria-hidden="true" style="font-size: large;
                                        color:#ff0066;"></i>
                                    </sup>
                             </p>         
 
                                <div class="my-4">
                                    <a href="#"><i class="fa fa-plus" aria-hidden="true" style="color: #cc0000;font-size: 20px;
                                        
                                        "></i>&nbsp;&nbsp;<span style="color: #003366;font-weight: bolder;font-family: 'Trebuchet MS', 
                                        'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">291&nbsp;Comments</span> </a>
                               &nbsp;&nbsp;&nbsp; 
                               <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true" style="color: #00b300;font-size: 20px;"></i>
                            &nbsp;&nbsp;<span style="color: #003366;font-weight: bolder;font-family: 'Trebuchet MS', 
                            'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">291&nbsp;Thumbs-Up</span>
                            
                        </a> &nbsp;&nbsp;&nbsp;  
                        <a href="#"><i class="fa fa-thumbs-o-down" aria-hidden="true" style="color: #cc0000;font-size: 20px;"></i>

                            &nbsp;&nbsp;<span style="color: #003366;font-weight: bolder;font-family: 'Trebuchet MS', 
                            'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">291&nbsp;Thumbs-Down</span>
                            
                        </a>      
                                </div>
                                </div>
                            </div>
                          </div><!--child 9-->
                          <div class="col-lg-3 col-md-6 col-sm-12 my-5">
                            <div
                            class="avatar w-100 white d-flex justify-content-center align-items-center"
                          >
                            <img
                              src="../images/<?php echo $img2 ?>"
                              class="img-fluid rounded-circle z-depth-1" style="height:250px;width:250px;"/>
                          </div>
                          </div><!--child 3-->
                          <div class="col-lg-9 col-md-6 col-sm-12 my-5">
                            <div class="row">
                                <div class="col-1 mr-3">
                                   <h1><span class="badge badge-warning z-depth-0">2</span></h1>
                                </div>
                                <div class="col-10 ml-3 mt-2">
                                    <H3 style="text-transform: capitalize;font-weight: bold;color:  #ff0000;"><?php echo $name2 ?></H3>
                                    <hr>
                                <p class="text-justify" style="font-weight: normal;text-transform: capitalize;
                                color:#001a33;font-family: 'Times New Roman', Times, serif;font-size: 18px;">
                                <sup>
                                    <i class="fa fa-quote-left" aria-hidden="true" style="font-size: large;
                                    color:#ff0066;"></i>
                                </sup>&nbsp; <?php echo $desc2 ?>&nbsp;
                                      <sup> <i class="fa fa-quote-right" aria-hidden="true" style="font-size: large;
                                        color:#ff0066;"></i></sup>
                                </p>
                                <p class="my-3 text-justify"  style="font-weight: normal;text-transform: capitalize;
                                color:#001a33;font-family: 'Times New Roman', Times, serif;font-size: 18px;"> 
                                  <sup>
                                    <i class="fa fa-quote-left" aria-hidden="true" style="font-size: large;
                                    color:#ff0066;"></i>
                                </sup>&nbsp;
                                   <?php echo $desc2_b ?>&nbsp;
                                     <sup>
                                        <i class="fa fa-quote-right" aria-hidden="true" style="font-size: large;
                                        color:#ff0066;"></i>
                                    </sup>
                                    </p>
                             <p class="my-2 text-justify"  style="font-weight: normal;text-transform: capitalize;
                             color:#001a33;font-family: 'Times New Roman', Times, serif;font-size: 18px;">
                               <sup>
                                <i class="fa fa-quote-left" aria-hidden="true" style="font-size: large;
                                color:#ff0066;"></i>
                            </sup>&nbsp;
                                <?php echo $desc2_c ?>&nbsp;
                              
                                    <sup>
                                        <i class="fa fa-quote-right" aria-hidden="true" style="font-size: large;
                                        color:#ff0066;"></i>
                                    </sup>
                             </p>         
 
                                <div class="my-4">
                                    <a href="#"><i class="fa fa-plus" aria-hidden="true" style="color: #cc0000;font-size: 20px;
                                        
                                        "></i>&nbsp;&nbsp;<span style="color: #003366;font-weight: bolder;font-family: 'Trebuchet MS', 
                                        'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">291&nbsp;Comments</span> </a>
                               &nbsp;&nbsp;&nbsp; 
                               <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true" style="color: #00b300;font-size: 20px;"></i>
                            &nbsp;&nbsp;<span style="color: #003366;font-weight: bolder;font-family: 'Trebuchet MS', 
                            'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">291&nbsp;Thumbs-Up</span>
                            
                        </a> &nbsp;&nbsp;&nbsp;  
                        <a href="#"><i class="fa fa-thumbs-o-down" aria-hidden="true" style="color: #cc0000;font-size: 20px;"></i>

                            &nbsp;&nbsp;<span style="color: #003366;font-weight: bolder;font-family: 'Trebuchet MS', 
                            'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">291&nbsp;Thumbs-Down</span>
                            
                        </a>      
                                </div>
                                </div>
                            </div>
                          </div><!--child 9-->
                          <div class="col-lg-3 col-md-6 col-sm-12 my-5">
                            <div
                            class="avatar w-100 white d-flex justify-content-center align-items-center"
                          >
                            <img
                              src="../images/<?php echo $img1 ?>"
                              class="img-fluid rounded-circle z-depth-1" style="height:250px;width:250px;"/>
                          </div>
                          </div><!--child 3-->
                          <div class="col-lg-9 col-md-6 col-sm-12 my-5">
                            <div class="row">
                                <div class="col-1 mr-3">
                                   <h1><span class="badge badge-warning z-depth-0">1</span></h1>
                                </div>
                                <div class="col-10 ml-3 mt-2">
                                    <H3 style="text-transform: capitalize;font-weight: bold;color:  #ff0000;"><?php echo $name1 ?></H3>
                                    <hr>
                                <p class="text-justify" style="font-weight: normal;text-transform: capitalize;
                                color:#001a33;font-family: 'Times New Roman', Times, serif;font-size: 18px;">
                                <sup>
                                    <i class="fa fa-quote-left" aria-hidden="true" style="font-size: large;
                                    color:#ff0066;"></i>
                                </sup>&nbsp; <?php echo $desc1 ?>&nbsp;
                                      <sup> <i class="fa fa-quote-right" aria-hidden="true" style="font-size: large;
                                        color:#ff0066;"></i></sup>
                                </p>
                                <p class="my-3 text-justify"  style="font-weight: normal;text-transform: capitalize;
                                color:#001a33;font-family: 'Times New Roman', Times, serif;font-size: 18px;"> 
                                  <sup>
                                    <i class="fa fa-quote-left" aria-hidden="true" style="font-size: large;
                                    color:#ff0066;"></i>
                                </sup>&nbsp;
                                   <?php echo $desc1_b ?>&nbsp;
                                     <sup>
                                        <i class="fa fa-quote-right" aria-hidden="true" style="font-size: large;
                                        color:#ff0066;"></i>
                                    </sup>
                                    </p>
                             <p class="my-2 text-justify"  style="font-weight: normal;text-transform: capitalize;
                             color:#001a33;font-family: 'Times New Roman', Times, serif;font-size: 18px;">
                               <sup>
                                <i class="fa fa-quote-left" aria-hidden="true" style="font-size: large;
                                color:#ff0066;"></i>
                            </sup>&nbsp;
                               <?php echo $desc1_c ?>&nbsp;
                              
                                    <sup>
                                        <i class="fa fa-quote-right" aria-hidden="true" style="font-size: large;
                                        color:#ff0066;"></i>
                                    </sup>
                             </p>         
 
                                <div class="my-4">
                                    <a href="#"><i class="fa fa-plus" aria-hidden="true" style="color: #cc0000;font-size: 20px;
                                        
                                        "></i>&nbsp;&nbsp;<span style="color: #003366;font-weight: bolder;font-family: 'Trebuchet MS', 
                                        'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">291&nbsp;Comments</span> </a>
                               &nbsp;&nbsp;&nbsp; 
                               <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true" style="color: #00b300;font-size: 20px;"></i>
                            &nbsp;&nbsp;<span style="color: #003366;font-weight: bolder;font-family: 'Trebuchet MS', 
                            'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">291&nbsp;Thumbs-Up</span>
                            
                        </a> &nbsp;&nbsp;&nbsp;  
                        <a href="#"><i class="fa fa-thumbs-o-down" aria-hidden="true" style="color: #cc0000;font-size: 20px;"></i>

                            &nbsp;&nbsp;<span style="color: #003366;font-weight: bolder;font-family: 'Trebuchet MS', 
                            'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">291&nbsp;Thumbs-Down</span>
                            
                        </a>      
                                </div>
                                </div>
                            </div>
                          </div><!--child 9-->
                    </div><!--child row-->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 my-5">
                       <h4 class="mt-5" 
                       style="font-family: -apple-system, BlinkMacSystemFont, 
                        'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue',
                         sans-serif;font-weight: bold;text-transform: uppercase;color:  #1f1f14;">Featured Article</h4>
                          <!-- Grid column -->
                          <div class="my-5">

   <!-- Section: Block Content -->
   <section class="dark-grey-text text-center">
    <!-- Grid row -->
    <div class="row">
        <?php 
$con=mysqli_connect("localhost","writewing","9005314@Ad","greatten");
$category=$row["category"];
//echo $category;
$id=$_REQUEST["id"];
//echo $id;
$sel="SELECT * FROM topten where category='$category'&& id !='$id'";
if($result=mysqli_query($con,$sel)){
    
    while($row=mysqli_fetch_array($result)){
        $id=$row["id"];
        $title=$row["title"];
        $category=$row["category"];
        $img8=$row["img8"];
       
?>

      <!-- Grid column -->
      <div class="col-md-12 mb-4" *ngFor="let sidearticle of book">

        <!-- Card -->
        <div class="">
          <img src="../images/<?php echo $img8; ?>" class="img-bordered img-fluid z-depth-1">
          <div class="">
            <div>
              <h4 class="purple-text my-2 ">

                <strong  class="badge blue-gradient"><?php echo $category; ?></strong>
              </h4>
              <h5 class="py-3 font-weight-bold" id="h_3">
                <strong><a href="fulldetail.php?id=<?php echo $id; ?>" style="color:#e6005c;" 
                 >
                  <?php echo $title; ?></a></strong>
              </h5>
             
            
            </div>
          </div>
        </div>
        <!-- Card -->

      </div>
      <?php
    }
  //  echo json_encode($prods);
}
else{
    http_response_encode(404);
  //  echo mysqli_error($con);
}
      
      ?>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </section>
                         
                            <!-- Section: Block Content -->
                          
                          
                          </div>

                    </div>
            </div>

        </div>
    </section>
</body>
</html>