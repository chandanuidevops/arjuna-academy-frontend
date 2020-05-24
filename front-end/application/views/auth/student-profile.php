<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $title;?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="target-densitydpi=device-dpi, initial-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/font/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/toastr.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/online.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/student.css">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url();?>assets/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url();?>assets/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url();?>assets/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>assets/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114"
        href="<?php echo base_url();?>assets/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120"
        href="<?php echo base_url();?>assets/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144"
        href="<?php echo base_url();?>assets/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152"
        href="<?php echo base_url();?>assets/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180"
        href="<?php echo base_url();?>assets/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"
        href="<?php echo base_url();?>assets/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url();?>assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url();?>assets/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo base_url();?>assets/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo base_url();?>assets/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>
<style>
i.error {

    color: red;
    font-size: 13px;
    font-style: italic;

}
.custom-file-label::after {
    padding: 4px 3px;
    border-radius:0;
}
.custom-file-label {
    padding: 7px 7px;
    border-radius:0;
    font-size: 12px;
}
</style>

<body>

    <!-- header -->
    <?php $this->load->view('includes/header');?>
    <!-- end header -->
    <?php $this->load->view('includes/pre-loader.php'); ?>

    <section class="student-detail sec-top" style="position:relative">

        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 ">
                    <div class="profile-list">

                        <?php $this->load->view('includes/left-nav');?>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
                    <div class="profile-form-detail">
                        <div class="title-pr">
                            <h5>Profile</h5>
                        </div>

                        <div class="pr-form">
                            <form action="<?php echo base_url().'authentication/insert_profile_setting';?>"
                                method="POST" id="register-form" enctype='multipart/form-data'>
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                    <p class="img-name">School Id</p>
                                        <div class="profile-edit">
                                            
                                            <img src="<?php echo base_url().$result['school_id'];?>" alt=""
                                                id="targetimg" class="responsive-img">
                                            <a class="btn-floating btn-flat ">
                                                <!-- <i class="far fa-image"> </i> -->
                                            </a>
                                        </div>
                                        <p class="img-name">Profile Image</p>
                                        <div class="profile-edit">
                                            <img src="<?php echo !empty($result['profile_img'])?base_url().$result['profile_img']:'https://dummyimage.com/180x180/c4c4c4/000000';?>" alt=""
                                                id="targetimg" class="responsive-img">
                                            <a class="btn-floating btn-flat ">
                                                <!-- <i class="far fa-image"> </i> -->
                                            </a>
                                        </div>
                                        
                                        <div class="form-group online-reg custom-file">
                                            <input type="file" class="form-control  online-input" id="customFile"
                                                name="profile_img"  accept="image/x-png,image/gif,image/jpeg">

                                            <label class="custom-file-label" for="customFile">Profile Image</label>
                                        </div>
                                       
                                    </div>
                                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
                                        <div class="row">
                                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-6 col-12">
                                                <div class="form-group online-reg">
                                                    <label for="" class="profile-pp">Name</label>
                                                    <input type="text" class="form-control online-input"
                                                        placeholder="Student Name *" name="name" id="name"
                                                        value="<?php echo (!empty($result['name']))?$result['name']:'' ?>"
                                                        required><i class="error" id="error"></i>
                                                </div>
                                            </div>
                                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-6 col-12">
                                                <div class="form-group online-reg">
                                                    <label for="" class="profile-pp">School Name</label>
                                                    <input type="text" class="form-control online-input"
                                                        placeholder="School Name *" name="school" id="school"
                                                        value="<?php echo (!empty($result['school']))?$result['school']:'' ?>"
                                                        required><i class="error" id="error"></i>
                                                </div>
                                            </div>
                                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-6 col-12">
                                                <div class="form-group online-reg">
                                                    <label for="" class="profile-pp">Father Name</label>
                                                    <input type="text" class="form-control online-input"
                                                        placeholder="Father Name *" name="father" id="father"
                                                        value="<?php echo (!empty($result['father']))?$result['father']:'' ?>"
                                                        required><i class="error" id="error"></i>
                                                </div>
                                            </div>
                                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-6 col-12">
                                                <div class="form-group online-reg">
                                                    <label for="" class="profile-pp">Mother Name</label>
                                                    <input type="text" class="form-control online-input"
                                                        placeholder="Mother Name *" name="mother" id="mother"
                                                        value="<?php echo (!empty($result['mother']))?$result['mother']:'' ?>"
                                                        required><i class="error" id="error"></i>
                                                </div>
                                            </div>
                                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-6 col-12">
                                                <div class="form-group online-reg">
                                                    <label for="" class="profile-pp">Father Mobile Number</label>
                                                    <input type="text" class="form-control online-input"
                                                        placeholder="Father Mobile Number*" name="father_mobile"
                                                        id="father_mobile"
                                                        value="<?php echo (!empty($result['father_mobile']))?$result['father_mobile']:'' ?>"
                                                        required> <i class="error" id="error"></i>
                                                </div>
                                            </div>

                                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-6 col-12">
                                                <div class="form-group online-reg">
                                                    <label for="" class="profile-pp">Mother Mobile Number</label>
                                                    <input type="text" class="form-control online-input"
                                                        placeholder="Mother Mobile Number*" name="mother_mobile"
                                                        id="mother_mobile"
                                                        value="<?php echo (!empty($result['mother_mobile']))?$result['mother_mobile']:'' ?>"
                                                        required> <i class="error" id="error"></i>
                                                </div>
                                            </div>
                                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-6 col-12">
                                                <div class="form-group online-reg">
                                                    <label for="" class="profile-pp">Email ID</label>
                                                    <input type="email" class="form-control online-input"
                                                        placeholder="Email ID*" name="email" id="email"
                                                        value="<?php echo (!empty($result['email']))?$result['email']:'' ?>"
                                                        readonly required>
                                                </div>
                                            </div>

                                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-6 col-12">
                                                <div class="form-group online-reg">
                                                    <label for="" class="profile-pp">Course</label>
                                                    <select class="form-control online-select" readonly id="course"
                                                        name="course">
                                                        <option
                                                            value="<?php echo (!empty($result['course']))?$result['course']:'' ?>">
                                                            <?php echo (!empty($result['course']))?$result['course']:'' ?>
                                                        </option>
                                                    </select>
                                                    <i class="error" id="error"></i>
                                                </div>
                                            </div>
                                            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-6 col-12">
                                                <div class="form-group online-reg">
                                                    <label for="" class="profile-pp">Address</label>
                                                    <textarea class="form-control online-textarea"
                                                        placeholder="Permanent Address" id="address" name="address"
                                                        value="<?php echo (!empty($result['address']))?$result['address']:'' ?>"><?php echo (!empty($result['address']))?$result['address']:'' ?></textarea>
                                                    <i class="error" id="error"></i>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 col-12">
                                                <button class="sub-btn pad-t" type="submit">Save</button>
                                                <button class="cancel-btn pad-t" type="reset">Cancel</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>










    <!-- footer -->
    <?php $this->load->view('includes/footer');?>
    <!-- footer -->

    <!-- script -->

    <!-- script -->
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.validation.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/toastr.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/preloader.js"></script>

</body>
<script>
            $('#customFile').on('change',function(){
                //get the file name
                var fileName = $(this).val();
               
                fileName = fileName.substring(fileName.lastIndexOf("\\") + 1, fileName.length);
            
                $('.custom-file-label').html(fileName);
            })
        </script>
<script>
$(document).ready(function() {
    $('#error').html(" ");
    $('#register-form').validate({
        rules: {
            father_mobile: {
                digits: true,
                minlength: 10,
                maxlength: 10,
            },
            mother_mobile: {

                digits: true,
                minlength: 10,
                maxlength: 10,
            },
            password: {
                minlength: 5,
                // alphanumeric: true
            },
            conf_password: {
                minlength: 5,
                equalTo: "#password"
            },
        },

        submitHandler: function(form) {
            loder(true)
            $.ajax({
                type: "POST",
                url: "<?php echo base_url().'authentication/insert_profile_setting';?>",
                data: new FormData(form),
                processData: false,
                contentType: false,
                cache: false,
                async: false,
                dataType: "json",
                success: function(response) {
                    loder(false)
                    if (response == true) {
                        toastr.success('Profile Updated successfully', 'Success ', {
                            timeOut: 5000
                        });
                    } else {

                        $.each(response, function(key, value) {

                            $('#' + key).parents('.form-group').find('#error')
                                .html(value);
                        });
                    }
                }
            });
        }
    });
    //page loader
    function loder(status) {
        if (status == true) {
            $('.preloader-verfy').css('display', 'block');
        } else {
            $('.preloader-verfy').css('display', 'none');
        }
    }


})
</script>







<script>
<?php $this->load->view('includes/message.php'); ?>
</script>

</html>