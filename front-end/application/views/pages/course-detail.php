<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $result->title;?> | Arjuna Academy</title>
    <meta charset="UTF-8">
    <meta name="description" content="<?php echo $result->metadesc;?>">
  <meta name="keywords" content="<?php echo $result->metakey;?>">
    <meta name="viewport" content="target-densitydpi=device-dpi, initial-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/font/css/all.min.css">
    <link href="<?php echo base_url();?>assets/css/toastr.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/slick.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/lightbox.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/course-detail.css">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url();?>assets/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url();?>assets/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url();?>assets/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>assets/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url();?>assets/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url();?>assets/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url();?>assets/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url();?>assets/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url();?>assets/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo base_url();?>assets/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url();?>assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url();?>assets/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo base_url();?>assets/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo base_url();?>assets/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
   <style>
        .cont{
        position:relative;
    }
   </style>
</head>

<body>

    <!-- header -->
    <?php $this->load->view('includes/header');?>
    <!-- end header -->
<div class="content">
<section class="course-back-ground cont ">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7 col-12">
                    <div class="course-banner">
                        <h5><?php echo   (!empty($result->course))?$result->course:'' ;  ?></h5>
                        <p><?php echo (!empty($result->description))?$result->description:'' ; ?></p>
                        <!-- <ul>
                            <li>350 hours on-demand video</li>
                            <li>weekly tests and assignments</li>
                            <li>14 downloadable resources</li>
                            <li>314 downloadable resources</li>
                            <li>314 downloadable resources</li>
                            <li>weekly tests and assignments</li>
                            <li>14 downloadable resources</li>
                            <li>314 downloadable resources</li>
                        </ul> -->
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-7 col-12">
                    <div class="video-popup">
                        <img src="<?php echo base_url().$result->video_background;?>" class="img-responsive img-fluide"
                            alt="">
                        <i class="fas fa-play play video-btn" data-toggle="modal"
                            data-src="<?php echo $result->video; ?>" data-target="#myModal"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="mess">
            <?php if(!empty($success=  $this->session->flashdata('msg'))){ ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i><?php echo $success; ?></i>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php }?>
            <?php  
                
                if(!empty($error=  $this->session->flashdata('error'))){ ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i><?php echo $error; ?></i>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php }?>
        </div> -->
    </section>
</div>
    

    <section>
        <div class="container">
            <div class="row">
                <div class=" col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="enroll-now">


                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="price">
                                    <span class="orig-price">Rs
                                        <?php
                                            $amount = $result->amount ;
                                            $discount = $result->discount ;
                                            $actual = $amount - (($amount*$discount)*0.01);
                                            echo round($actual);
                                            
                                        ?>



                                        /-</span>
                                    <span class="old-price"> (<?php echo $result->amount ?>)</span>
                                    <span class="old-price"><?php echo $result->discount ?>% Off</span>
                                </h4>
                            </div>
                            <div class="col-md-6">

                                <a href="<?php echo base_url().'enroll/'.$result->slug;?>" class="eoc">
                                    Enroll Now

                                </a>





                                <a href="tel:+ 123456789" class="call-btn">Request Call back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <section class="sec-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="description">

                    <?php echo $result->detail ;?>
                        
                </div>
            </div>
          
        </div>
    </section>


    <section class="sec-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12  col-12">
                    <div class="title-heading">
                        <h5>What our achivers Say</h5>
                        <p><b><i>Testimonials describe what has been, & are a promise of what is to come</i></b></p>
                    </div>
                </div>
            </div>
            <div class="achiver-testi">
            <?php 
            
             if(!empty($testimonial)){foreach($testimonial as $key=>$value){  
           
             ;?>
             

                <div class="achiver-list">
                    <center><img src="<?php echo base_url().$value->testimonial_thumb;?>" class="img-responsive" alt="">
                    </center>
                    <h5><?php echo (!empty($value->name))?$value->name:'' ;?>  <span><?php echo (!empty($value->course))?$value->course:'' ;?>,<?php echo (!empty($value->rank))?$value->rank:'' ;?></span></h5>
                    <h2><?php echo (!empty($value->college))?$value->college:'' ;?></h2>
                    <p><?php echo (!empty($value->description))?$value->description:'' ;?></p>
                </div>
            <?php }}?>
               
            </div>
        </div>
    </section>







    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog md" role="document">
            <div class="modal-content">
                <div class="modal-body mb">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="go-top active">
        <i class="fa fa-angle-double-up"></i>
        <i class="fa fa-angle-double-up"></i>
    </div>



    <!-- footer -->
    <?php $this->load->view('includes/footer');?>
    <!-- footer -->



    <!-- script -->
    <link rel="stylesheet" href="assets/font/js/all.min.js">
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/slick.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/script.js"></script>
    <script src="<?php echo base_url();?>assets/js/lightbox-plus-jquery.min.js"></script>
    <script src='https://cdn.rawgit.com/JacobLett/bootstrap4-latest/master/bootstrap-4-latest.min.js'></script>
    <script src="<?php echo base_url();?>assets/js/landing.js"></script>
    <script src="<?php echo base_url();?>assets/js/preloader.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/toastr.min.js"></script>
    <script>
    var vid = document.getElementById("gossVideo");

    function playVid() {
        vid.play();
    }

    function pauseVid() {
        vid.pause();
    }
    </script>
<script>
      <?php $this->load->view('includes/message.php'); ?>
</script>
</body>

</html>