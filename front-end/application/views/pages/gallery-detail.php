<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $title; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="target-densitydpi=device-dpi, initial-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/font/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/slick.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/lightbox.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/event.css">
    <script src="<?php echo base_url();?>assets/js/preloader.js"></script>
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
</head>

<body>

    <!-- header -->
    <?php $this->load->view('includes/header');?>
    <!-- end header -->
    <div class="content"></div>
    <section class="comon-back-ground ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="about-banner text-center">
                        <h5> <?php echo (!empty($featured->title))?$featured->title:''  ?></h5>
                        <p><a href="<?php echo base_url();?>">Home -</a> <?php echo (!empty($featured->title))?$featured->title:''  ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="event-detail">
                        <!-- <h5>
                            Event title with event process
                        </h5> -->
                        <!-- <h4><span><i class="far fa-calendar-alt"></i> 31-Mar-2020</span><span><i class="fas fa-map-marker-alt"></i> 881 7th Ave New York, NY</span></h4> -->
                        <p class="text-center"> <?php echo (!empty($featured->description))?$featured->description:'...'  ?>
                                               
                        </p>
                    </div>
                </div>
            </div>
            <div class="ImageContainer">
            <div class="row">
            <?php if(!empty($gallery)){ foreach($gallery as $key =>$value){ ?> 

                    <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="gallery-event">
                        <div class="gallery-gal">
                           
                            <a class="lightbox" href="javascript:void(0)">
                                <div class="img-gallery gallery-img">
                                    <img src="<?php echo (!empty($value->images_thumb))?base_url().$value->images_thumb:'---'  ?>"
                                        class="img-responsive img-fluide" alt="">
                                </div>
                                <div class="middle">
                                    <a class="example-image-link"
                                        href="<?php echo (!empty($value->images))?base_url().$value->images:'---'  ?>">
                                        <i class="fas fa-plus icon-t"></i></a>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
           
                <?php }}?>
            </div>
            </div>
        </div>
    </section>










    <div class="go-top active">
        <i class="fa fa-angle-double-up"></i>
        <i class="fa fa-angle-double-up"></i>
    </div>

    <!-- footer -->
    <?php $this->load->view('includes/footer');?>
    <!-- footer -->



    <!-- script -->
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/slick.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/lightbox-plus-jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/preloader.js"></script>
    <script>
        baguetteBox.run('.ImageContainer');
    </script>
    <script>
    // header-fixed
window.onscroll = function() {myFunction()};
var header = document.getElementById("navhead");
var sticky = header.offsetTop;
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("stick");
  } else {
    header.classList.remove("stick");
  }
}</script>
</body>

</html>