<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $title; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="target-densitydpi=device-dpi, initial-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font/css/all.min.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/lightbox.min.css">
    <link rel="stylesheet" href="assets/css/event.css">
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
                        <h5>Photo Gallery</h5>
                        <p><a href="<?php echo base_url();?>">Home -</a><b>Photo Gallery</b></p>
                        <p class="m-0"><i>"Photographs open doors into the past & also allow a look into the future."</i></p>
                        <p class="m-0"><i>"Reliving some of the happiest & memorable moments here"</i></p>
                    </div>
                </div>
                <!-- <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="event-sel">
                        <div class="form-group">
                            <label for="sel1"></label>
                            <select class="form-control" id="sel1">
                              <option selected disabled>2020</option>
                              <option value="2020">2020</option>
                              <option value="2019">2019</option>
                              <option value="2018">2018</option>
                            </select>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>


    <section class="sec-top">
        <div class="container-fluide">
            <div class="row">
            <?php if(!empty($result)){ foreach($result as $key =>$value){ ?>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="event-gallery">
                        <img src="<?php echo (!empty($value->feat_thumb))? base_url().$value->feat_thumb:'---'  ?>" class="img-responsive img-fluide" alt="">
                        <h5><?php echo (!empty($value->date))?$value->date:'---'  ?></h5>
                        <div class="content-gallery">
                            <h6><?php echo (!empty($value->title))?$value->title:'---'  ?></h6>
                            
                            <p class="eclipse"><?php echo (!empty($value->description))?$value->description:'---'  ?></p>
                            <a href="<?php echo base_url().'gallery-detail/'.$value->id ?>" class="btn-event">Read More</a>
                        </div>
                    </div>
                </div>
                <?php }}?>
              
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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/lightbox-plus-jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/preloader.js"></script>
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