<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $title;?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="target-densitydpi=device-dpi, initial-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/font/css/all.min.css">
    <link href="<?php echo base_url();?>assets/css/toastr.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/online.css">
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

</head>

<body style="background: #f7f7f7">

    <!-- header -->
    <?php $this->load->view('includes/header');?>
    <!-- end header -->


    <section class="online-start-back"  style="position:relative">
    
        <div class="container-fluide">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mx-auto">
                    <div class="online-start">
                        <div class="col-back">
                            <div class="make-payment">
                                <h5>MAKE YOUR PAYMNET</h5>
                                <p>Richard McClintock, a discovering the source behind the ubiquitous Richard
                                    McClintock, a Latin scholar </P>
                            </div>
                            <div class="form-paymnet">
                                <form action="" method="POST" id="payment">
                                    <div class="row">
                                        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-12 mx-auto">
                                            <div class="form-group online-reg">
                                                <label for="course" class="make-pay">Course<span style="color: red;">*</span></label>
                                                <select class="form-control online-select" id="online_course" name="course"  required>
                                                    <!-- <option selected disabled>Select Your Course</option> -->
                                                    <option value="PCMB">PCMB</option>
                                                    <!-- <option value="PCB">PCB</option> -->
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-10 col-lg-10 col-md-10  col-sm-10 col-12 mx-auto">
                                            <div class="form-group online-reg">
                                                <label for="course" class="make-pay">Amount<span style="color: red;">*</span></label>
                                                <input type="text" class="form-control online-input" name="amt"
                                                    placeholder="500" readonly required>
                                            </div>
                                        </div>
                                        <div class="col-xl-10 col-lg-10 col-md-10  col-sm-10 col-12 mx-auto">
                                            <div class="form-group form-check check-payment">
                                                <input type="checkbox" class="form-check-input online-input" id="exampleCheck1">
                                                <label class="form-check-label check-pay" for="exampleCheck1">I agree the Terms & Conditions</label>
                                               
                                              </div>
                                              <i class="text-danger check-payment" id="agree"></i>
                                        </div>

                                       

                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <button class="sub-btn" type="submit" type="submit"  name="submit-pay" id="submit-pay">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
if(isset($_POST['submit-pay']))
{ 
    $course 		= $_POST['course'];
   ?>

                        <form action="<?php echo base_url('payment/insert_payment');?>" method="post">

                            <input name="user_id" type="hidden" value=" <?php echo  (!empty($user['id']))?$user['id']:''; ?>">
                            <input name="name" type="hidden" value=" <?php echo  (!empty($user['name']))?$user['name']:''; ?>">

                            <input name="email" type="hidden" value=" <?php echo (!empty($user['email']))?$user['email']:'';?>">

                            <input name="father_mobile" type="hidden" value=" <?php echo (!empty($user['father_mobile']))?$user['father_mobile']:'';?>">

                            <input name="mother_mobile" type="hidden" value=" <?php echo (!empty($user['mother_mobile']))?$user['father_mobile']:'';?>">

                            <input name="course" type="hidden" value=" <?php echo $course?>">
                            <input name="amount" type="hidden" value=" <?php echo '500'?>">
                            <!--   rzp_test_V8wTCHMWOy9hfl -->

                            <!--   rzp_live_gzxNI1eiSwtWSH -->

                            <script src="https://checkout.razorpay.com/v1/checkout.js"
                                data-key="rzp_test_0oWFBWQeAuLNFu" data-buttontext="Submit"
                                data-name=" www.aaaedu.in" data-description="Where personel attention is culture..."
                                data-image="<?php echo base_url('assets/img/logo1.jpg');?>"
                                data-amount="50000"
                                data-prefill.contact=" <?php echo (!empty($user['father_mobile']))?$user['father_mobile']:'';?>"
                                 data-prefill.name=" <?php echo  (!empty($user['name']))?$user['name']:''; ?>"
                                data-prefill.email=" <?php echo (!empty($user['email']))?$user['email']:'';?>"
                                 data-theme.color="#393186 ">
                                 </script>

                            <input type="hidden" value="Hidden Element" name="hidden">



                        </form>

                       <script type="text/javascript">
                            $(document).ready(function() {
                                $('.razorpay-payment-button').click();
                                $('.razorpay-payment-button').hide();
                            })

                       

                        </script>

                        <?php 	} ?>














    <!-- footer -->
    <?php $this->load->view('includes/footer');?>
    <!-- footer -->

    <!-- script -->

    <!-- script -->
 
    <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <!-- <script src="<?php echo base_url();?>assets/js/script.js"></script> -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/toastr.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/preloader.js"></script>

<script>
$(document).ready(function(){

    $("#checkbox1").on('change', function(){
        if ($(this).is(':checked')) {
          var a=   $(this).attr('value', 'true');
          alert(a);
        } else {
            $(this).attr('value', 'false');
        }
    });

    $('#payment').submit(function(e){
        if($('#exampleCheck1').is(':checked')){
            $('#agree').html('');
           return true;
        }else{
            e.preventDefault();
            $('#agree').html('Please agree with terms and conditions');
        }
    });

    // $('#exampleCheck1').is(':checked'){
    //     $('#agree').html('');
    // }
    
})
</script>
<script>
      <?php $this->load->view('includes/message.php'); ?>
</script>
</body>

</html>