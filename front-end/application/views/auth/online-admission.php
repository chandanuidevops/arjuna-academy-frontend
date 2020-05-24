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
    <style>
    label.error {
        float: left;
    }
    </style>
</head>

<body style="background: #f7f7f7">

    <!-- header -->
    <?php $this->load->view('includes/header');?>
    <!-- end header -->


    <section class="online-start-back" style="position:relative">

        <div class="container-fluide">
            <div class="row">
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12 mx-auto">
                    <div class="online-start">
                        <div class="admission-back">
                            <div class="make-payment">
                                <h5>Online Admission Form for Class 8, 9 & 10</h5>
                                <p>Richard McClintock, a discovering the source behind the ubiquitous Richard
                                    McClintock, a Latin scholar </P>
                            </div>
                            <div class="admission-form">
                                <form action="<?php echo base_url('authentication/admission');?>" method="POST"
                                    id="admission-form" enctype=multipart/form-data>
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group online-reg">
                                                <input type="text" class="form-control online-input"
                                                    placeholder="Your Name *" name="name"    value="<?php echo set_value('name');?>" required>
                                                    <?php echo form_error('name');?>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group online-reg">
                                                <input type="text" class="form-control online-input"
                                                    placeholder="School Name *" name="school" value="<?php echo set_value('school');?>" required>
                                                    <?php echo form_error('school');?>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group online-reg">
                                                <input type="text" class="form-control online-input"
                                                    placeholder="Class*" name="class" value="<?php echo set_value('class');?>" required>
                                                    <?php echo form_error('class');?>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group online-reg">
                                                <input type="text" class="form-control online-input"
                                                    placeholder="Father's Name *" name="father" value="<?php echo set_value('father');?>" required>
                                                    <?php echo form_error('father');?>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group online-reg">
                                                <input type="text" class="form-control online-input"
                                                    placeholder="Father Mobile Number *" name="father_mobile" value="<?php echo set_value('father_mobile');?>" required>
                                                    <?php echo form_error('father_mobile');?>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group online-reg">
                                                <input type="text" class="form-control online-input"
                                                    placeholder="Father Occupation *" name="father_occupation" value="<?php echo set_value('father_occupation');?>" required>
                                                    <?php echo form_error('father_occupation');?>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group online-reg">
                                                <input type="text" class="form-control online-input"
                                                    placeholder="Mother Name *" name="mother" value="<?php echo set_value('mother');?>" required>
                                                    <?php echo form_error('mother');?>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group online-reg">
                                                <input type="text" class="form-control online-input"
                                                    placeholder="Mother Mobile Number *" name="mother_mobile" value="<?php echo set_value('mother_mobile');?>" required>
                                                    <?php echo form_error('mother_mobile');?>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group online-reg">
                                                <input type="text" class="form-control online-input"
                                                    placeholder="Mother Occupation *" name="mother_occupation" value="<?php echo set_value('mother_occupation');?>" required>
                                                    <?php echo form_error('mother_occupation');?>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group online-reg">
                                                <select class="form-control online-select" id="ad_batch" name="center"
                                                    required>
                                                    <option selected disabled  >Choose Your Center</option>
                                                    <option value="HEBBAL (PU)" <?php echo set_select('center','HEBBAL (PU)', ( !empty($list) && $list == "HEBBAL (PU)" ? TRUE : FALSE )); ?>>HEBBAL (PU)</option>
                                                    <option value="VIJAYANAGAR (PU)" <?php echo set_select('center','VIJAYANAGAR (PU)', ( !empty($list) && $list == "VIJAYANAGAR (PU)" ? TRUE : FALSE )); ?>>VIJAYANAGAR (PU)</option>
                                                    <option value="LIVE online Classes" <?php echo set_select('center','LIVE online Classes', ( !empty($list) && $list == "LIVE online Classes" ? TRUE : FALSE )); ?>>LIVE online Classes</option>
                                                
                                                   
                                                </select>
                                                <?php echo form_error('center');?>
                                            </div>

                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group online-reg">
                                                <textarea class="form-control online-textarea" rows="1"
                                                    placeholder="Permanent Address" id="school-id" name="address"
                                                    required><?php echo set_value('address');?></textarea>
                                                    <?php echo form_error('address');?>
                                                    <?php echo form_error('address');?>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group online-reg">
                                                <textarea class="form-control online-textarea" rows="1"
                                                    placeholder="Students' Aadhar Card Details" id="studentl-aadhar"
                                                    name="adhar" required><?php echo set_value('adhar');?></textarea>
                                                    <?php echo form_error('adhar');?>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group online-reg">
                                                <select class="form-control online-select" id="ad_batch" name="batch"
                                                    required>
                                                    <option selected disabled >Select Your Batch</option>
                                                    
                                                    <option value="Board Batch----> CBSE / ICSE/ STATE" <?php echo set_select('batch','Board Batch----> CBSE / ICSE/ STATE', ( !empty($batch_list) && $batch_list == "Board Batch----> CBSE / ICSE/ STATE" ? TRUE : FALSE )); ?>>Board Batch----> CBSE / ICSE/ STATE</option>
                                                    <option value="Foundation Program" <?php echo set_select('batch','Foundation Program', ( !empty($batch_list) && $batch_list == "Foundation Program" ? TRUE : FALSE )); ?>>Foundation Program</option>
                                                    <option value="Board + Foundation Program" <?php echo set_select('batch','Board + Foundation Program', ( !empty($batch_list) && $batch_list == "Board + Foundation Program" ? TRUE : FALSE )); ?>>Board + Foundation
                                                        Program
                                                    </option>
                                                </select>
                                                <?php echo form_error('batch');?>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group online-reg">
                                                <input type="text" class="form-control online-input"
                                                    placeholder="% in the Previous Year *" name="prev_percent" value="<?php echo set_value('prev_percent');?>" required>
                                                    <?php echo form_error('prev_percent');?>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group online-reg">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input online-input" accept=" .png,.jpg,jpeg,.pdf"
                                                        id="customFile" name="marksheet" value="<?php echo set_value('marksheet');?>" accept="image/jpeg,image/gif,image/png, application/pdf" >
                                                        <?php echo form_error('marksheet');?>
                                                    <label class="custom-file-label online-input file-p"
                                                        for="customFile">Choose Marksheet</label>
                                                    <p class="notes">Only PDF | JPG | PNG files are allowed. Max-size  512kb*</p>
                                                       
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hr-lin"></div>
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-12">
                                            <div class="form-group online-reg">
                                                <input type="text" class="form-control online-input"
                                                    placeholder="Number of siblings *" name="siblings" value="<?php echo set_value('siblings');?>" required>
                                                    <?php echo form_error('siblings');?>
                                            </div>
                                        </div>
                                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-9 col-12">
                                            <div class="form-group online-radio">
                                                <label class="log-gg">What are they doing ?</label>
                                            </div>
                                            <div class="select-ration">
                                                <div class="form-check-inline form-left">
                                                    <label class="form-check-label studing">
                                                        <input type="radio"
                                                            class="form-check-input form-check-work online-input "
                                                            name="working_status"  value="Studying" required>
                                                        Studying
                                                    </label>
                                                </div>
                                                <div class="form-check-inline form-left">
                                                    <label class="form-check-label working">
                                                        <input type="radio"
                                                            class="form-check-input form-check-work online-input "
                                                            name="working_status" value="Working" required>Working
                                                    </label>
                                                </div>
                                                <?php echo form_error('working_status');?>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="sibling-show">
                                                <div class="row">
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                        <div class="form-group online-reg">
                                                            <textarea class="form-control online-textarea" rows="1"
                                                                placeholder="If Studying, which grade are they studying in?"
                                                                id="studentl-aadhar" name="studdying_grade"><?php echo set_value('studdying_grade');?></textarea>
                                                                <?php echo form_error('studdying_grade');?>
                                                        </div>

                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                        <div class="form-group online-reg">
                                                            <textarea class="form-control online-textarea" rows="1"
                                                                placeholder="Your Siblings School Name"
                                                                id="studentl-aadhar" name="sibling_school"><?php echo set_value('sibling_school');?></textarea>
                                                                <?php echo form_error('sibling_school');?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="row">

                                                <div class="col-sm-6 fg"> <input type="text" class="form-control"
                                                        placeholder="Enter captcha" name="captcha" id="captcha1"
                                                        required> <i style="font-size:13px;color:red"
                                                        class="text-danger" id="errorCaptcha1"></i></div>
                                                <div class="col-sm-6"> <span class="image"><?php echo $captcha;?>
                                                    </span> <a class="refresh" href="javascript:void(0)"><i
                                                            class="fas btn fa-sync-alt"></i> </a></div>
                                                <input type="hidden" id="recaptchaCode1"
                                                    value="<?php echo$this->session->userdata('captchaCode');?>">
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 col-12">
                                            <button class="sub-btn pad-t" type="submit" name="submit-pay" id="submit-pay">Submit</button>
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
if(isset($_POST['submit-pay']) && $this->session->userdata('ssc')=='ssc')
{ 
    $name 		= $_POST['name'];
   
    $father_mobile 		= $_POST['father_mobile'];
    
   ?>

                        <form action="<?php echo base_url('authentication/insert_admission');?>" method="post">
                        <input name="name" type="hidden" value=" <?php echo  (!empty($name))?$name:''; ?>">
                        <input name="father_mobile" type="hidden" value=" <?php echo  (!empty($father_mobile))?$father_mobile:''; ?>">
                        <input name="amount" type="hidden" value=" <?php echo  (!empty($amount->ssc_amount))?$amount->ssc_amount:''; ?>">
                        <input name="id" type="hidden" value=" <?php echo  (!empty($insert_id))?$insert_id:''; ?>">
                            <script src="https://checkout.razorpay.com/v1/checkout.js"
                                data-key="rzp_test_0oWFBWQeAuLNFu" data-buttontext="Submit"
                                data-name=" www.aaaedu.in" data-description="Where personel attention is culture..."
                                data-image="<?php echo base_url('assets/img/logo1.jpg');?>"
                                data-amount="<?php echo  ((int)($amount->ssc_amount))*100; ?>"
                                data-prefill.contact=" <?php echo  (!empty($father_mobile))?$father_mobile:''; ?>"
                                 data-prefill.name="  <?php echo  (!empty($name))?$name:''; ?>"
                                data-prefill.email=" "
                                 data-theme.color="#393186">
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
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/toastr.min.js"></script>

    <script src="<?php echo base_url();?>assets/js/jquery.validation.js"></script>
    <script src="<?php echo base_url();?>assets/js/preloader.js"></script>
    <script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
    </script>
    <script>
    $(document).ready(function() {
        $(".studing").click(function() {
            $(".sibling-show").css("display", "block");
        });
        $(".working").click(function() {
            $(".sibling-show").css("display", "none");
        });
    });
    </script>

</body>
<script>
$(document).ready(function() {

    $('#admission-form').validate({

        rules: {

            father_mobile: {
                required: true,
                digits: true,
                minlength: 10,
                maxlength: 10,
            },
            mother_mobile: {
                required: true,
                digits: true,
                minlength: 10,
                maxlength: 10,
            },
            adhar: {
                required: true,
                digits: true,
                minlength: 12,
                maxlength: 12,
            },

        },

    });
});
</script>
<script>
$("#admission-form").submit(function(e) {
    var recaptchaCode = $('#recaptchaCode1').val();

    var enterCaptchaCode = $('#captcha1').val();
    if (recaptchaCode != enterCaptchaCode) {
        e.preventDefault();
        $('#errorCaptcha1').html('Invalid Captcha');
    } else {

        $('#errorCaptcha1').html('');
    }
});
$(function() {
    $('.refresh').click(function() {
        $.ajax({
            type: 'POST',

            url: '<?php echo base_url()?>authentication/refresh_captcha',
            dataType: 'json',
            success: function(data) {

                if (data) {
                    $('.image').html(data.captcha);
                    $('#recaptchaCode1').val(data.code);
                }
            }
        });
    });
});
</script>
<script>
<?php $this->load->view('includes/message.php'); ?>
</script>

</html>