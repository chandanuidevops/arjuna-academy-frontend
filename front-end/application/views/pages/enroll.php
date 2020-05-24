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
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/contact-us.css">
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
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
    .cont {
        position: relative;
    }

    .razorpay-payment-buttons {
        border: 1px solid #393186;
        padding: 6px 35px;
        font-size: 14px;
        color: white;
        background: #393186;
        display: inline-block;
        margin-top: 10px;
        font-weight: 700;
        cursor: pointer;
    }
    </style>
</head>

<body style="background: #f9f9f9;">

    <!-- header -->
    <?php $this->load->view('includes/header');?>
    <!-- end header -->
    <div class="content"></div>
    <section class="comon-back-ground ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="about-banner enroll">
                        <h5>Enroll Now</h5>
                        <p>Richard McClintock, a Latin scholar from Hampden-Sydney College, is credited with discovering
                            the source behind the ubiquitous Richard McClintock, a Latin scholar from Hampden-Sydney
                            College, is credited with discovering the source behind the ubiquitous filler text</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cont">

        <div class="mess">
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
        </div>
    </section>



    <section class="enroll-od">
        <div class="container-get">
            <div class="row">
                <?php    $amount = $result->amount ;
                           $discount = $result->discount ;
                           $actual = $amount - (($amount*$discount)*0.01);
                              
                           ?>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="bg-cnt-color">
                        <form action="<?php echo base_url().'enroll/'.$result->slug; ?>" method="post" id="contact-form">
                            <!-- <h6>Course : <?php echo $result->course;?></h6> -->
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group pay-enroll">
                                        <lable class="heading-pay">Name<span style="color:red">*</span></lable>
                                        <input type="text" class="form-control ff-new" placeholder="Enter Your Name"
                                            name="name" required>
                                        <i class="text-danger"><?php echo form_error('name')?></i>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group pay-enroll">
                                        <lable class="heading-pay">Email<span style="color:red">*</span></lable>
                                        <input type="email" class="form-control ff-new" placeholder="Enter Your Email"
                                            name="email" required>
                                        <i class="text-danger"><?php echo form_error('email')?></i>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group pay-enroll">
                                        <lable class="heading-pay">Mobile Number<span style="color:red">*</span></lable>
                                        <input type="text" class="form-control ff-new" placeholder="Eneter your number"
                                            name="phone" required minlength="10" maxlength="10">
                                        <i class="text-danger"><?php echo form_error('phone')?></i>

                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group pay-enroll">
                                        <lable class="heading-pay">Course<span style="color:red">*</span></lable>
                                        <input type="text" class="form-control ff-new" readonly required
                                            value="<?php echo $result->course;?>">
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group pay-enroll">
                                        <lable class="heading-pay">Amount<span style="color:red">*</span></lable>
                                        <input type="text" class="form-control ff-new" readonly required
                                            value="<?php echo $actual;?>">
                                        <i class="text-danger"><?php echo form_error('subject')?></i>
                                    </div>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2" >
                                    <span class="image">
                                        <?php echo $captcha;?>
                                    </span> <a class="refresh" href="javascript:void(0)"><i
                                            class="fas btn fa-sync-alt"></i> </a>
                                    <div class="form-group pay-enroll">

                                        <input type="text" class="form-control ff-new" placeholder="Enter captcha"
                                            name="captcha" id="captcha"  style="margin-top:5px">
                                        <i style="font-size:13px;color:red" class="text-danger" id="errorCaptcha"></i>
                                    </div>
                                </div>
                                <input type="hidden" id="recaptchaCode"
                                    value="<?php echo$this->session->userdata('captchaCode');?>">
                                <!-- <input type="hidden" value="<?php echo $result->uniq;?>" name="uniq">
                            <input type="hidden" value="<?php echo $result->id;?>" name="course_id">
                            <input type="hidden" value="<?php echo $result->course;?>" name="course">
                            <input type="hidden" value="<?php echo $result->slug;?>" name="slug"> -->

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-12">



                                    <span class="error text-danger"></span>

                                </div>
                            </div>

                            <input type="hidden" value="<?php echo round($actual);?>" name="amount">

                            <input type="submit" name="submit-pay" id="submit-pay" value="Submit"
                                class="razorpay-payment-buttons">


                        </form>

                        <?php

if(isset($_POST['submit-pay']))

{ 



    $name 		= $_POST['name'];

    $email 		= $_POST['email'];

    $phone 	=  $_POST['phone'];

    $amount 	=  $_POST['amount'];

  

   ?>



                        <form action="<?php echo base_url('home/payment');?>" method="post">

                            <input name="name" type="hidden" value=" <?php echo $name?>">

                            <input name="email" type="hidden" value=" <?php echo $email?>">

                            <input name="amount" type="hidden" value=" <?php echo $amount?>">

                            <input name="phone" type="hidden" value=" <?php echo $phone?>">

                            <input type="hidden" value="<?php echo $result->uniq;?>" name="uniq">
                            <input type="hidden" value="<?php echo $result->id;?>" name="course_id">
                            <input type="hidden" value="<?php echo $result->course;?>" name="course">
                            <input type="hidden" value="<?php echo $result->slug;?>" name="slug">

                            <!--   rzp_test_V8wTCHMWOy9hfl -->

                            <!--   rzp_live_gzxNI1eiSwtWSH -->

                            <script src="https://checkout.razorpay.com/v1/checkout.js"
                                data-key="rzp_test_0oWFBWQeAuLNFu" data-buttontext="Submit"
                                data-name="www.aaaedu.in" data-description="Where personel attention is culture..."
                                data-image="<?php echo base_url('assets/img/logo1.png');?>"
                                data-amount="<?php echo round($amount*100);?>"
                                data-prefill.contact=" <?php echo $phone ?>" data-prefill.name=" <?php echo $name ?>"
                                data-prefill.email=" <?php echo $email ?>" data-theme.color="#393186"></script>

                            <input type="hidden" value="Hidden Element" name="hidden">



                        </form>

                       <script type="text/javascript">
                            $(document).ready(function() {
                                $('.razorpay-payment-button').click();
                            })

                       

                        </script>

                        <?php 	} ?>

                    </div>
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
    <link rel="stylesheet" href="assets/font/js/all.min.js">

    <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/slick.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/script.js"></script>
    <script src="<?php echo base_url();?>assets/js/lightbox-plus-jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.validation.js"></script>
    <script src="<?php echo base_url();?>assets/js/preloader.js"></script>
    <script>
    $("#contact-form").validate();
    </script>
    <script>
    // header-fixed
    window.onscroll = function() {
        myFunction()
    };
    var header = document.getElementById("navhead");
    var sticky = header.offsetTop;

    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("stick");
        } else {
            header.classList.remove("stick");
        }
    }
    </script>
    <script>
    $("#contact-form").submit(function(e) {
        var recaptchaCode = $('#recaptchaCode').val();
      
        var enterCaptchaCode = $('#captcha').val();
        if (recaptchaCode != enterCaptchaCode) {
            e.preventDefault();

            $('#errorCaptcha').html('Invalid Captcha');
        } else {
            $('#errorCaptcha').html('');

        }
    });
    $(function() {
        $('.refresh').click(function() {
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url()?>home/refresh_captcha',
                dataType: 'json',
                success: function(data) {
                    if (data) {
                        $('.image').html(data.captcha);
                        $('#recaptchaCode').val(data.code);
                    }
                }
            });
        });
    });
    </script>
</body>

</html>