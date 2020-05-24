<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $title;?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="target-densitydpi=device-dpi, initial-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/font/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/dataTable/datatables.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/dataTable/button/css/buttons.dataTables.css">
    
    <link href="<?php echo base_url();?>assets/css/toastr.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/student.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/online.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/student.css">
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
.dataTables_wrapper {
    /* overflow-x: scroll; */
}
.shedule{
    position:relative;
}
#alert {
	height: 27px;
	
	width: 50%;
	margin: auto;
	margin-top: -16px;
    margin-bottom: -17px;
    position: relative;
}
.alert-msg {
	position: absolute;
	left: 0;
	right: 0;
	padding: 2px;
}
.alert-dismissible .close {

	padding: 0;
}
.btn-hl {
	
	padding-left: 5px;
	background: #3b80da;
	padding: 7px 30px;
	color: white !important;
	
	border-radius: 25px;
	font-size: 13px;

	display: inline-block;

}
.btn-hl:hover{
    background: #000;
    color: white !important;
}
.btn-m{
    margin-top:20px;
    
}

.tbl-select{
    padding:0px 20px;
}


/* The container */
.container-checkbox {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default checkbox */
.container-checkbox input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom checkbox */
.container-checkbox .checkmark {
	position: absolute;
	top: 0;
	left: 0;
	height: 25px;
	width: 25px;
	background-color: #e3e3e3;
	border: 1px solid #00000036;
}

/* On mouse-over, add a grey background color */
.container-checkbox:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container-checkbox input:checked ~ .checkmark {
    background-color: #15114F;
}

/* Create the checkmark/indicator (hidden when not checked) */
.container-checkbox .checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the checkmark when checked */
.container-checkbox input:checked ~ .checkmark:after {
    display: block;
}

/* Style the checkmark/indicator */
.container-checkbox .checkmark:after {
    left: 9px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}


/* The container */
.container-radio {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default radio button */
.container-radio input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom radio button */
.container-radio .checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
    border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container-radio:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container-radio input:checked ~ .checkmark {
    background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.container-radio .checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the indicator (dot/circle) when checked */
.container-radio input:checked ~ .checkmark:after {
    display: block;
}

/* Style the indicator (dot/circle) */
.container-radio .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}
#a{
    width:30px;
}
#b{
    width:50px;
}
#c{
    width:50px;
}
.mb-online {
	padding: 0px 50px;
}
@media (max-width:600px){
    #alert{
        width:90%;
    }
    table.dataTable tbody td {
        font-size: 14px;
padding: 2px 14px;

}
.dataTables_wrapper {

overflow-x: scroll;

}
}
</style>
</head>

<body style="background: #f7f7f7">

    <!-- header -->
    <?php $this->load->view('includes/header');?>
    <!-- end header -->
    <?php $this->load->view('includes/pre-loader.php'); ?>

    <section class="online-result-back">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12 mx-auto">
                    <div class="online-starts">
                        <div class="online-result-title">
                            <div class="online-res-title">
                                <h5><i class="fas fa-poll"></i> <b>Online Test Result | </b>You've done it! Congratulations on your great achievement!</h5> <a href="<?php echo  base_url().$pdfResult;?>">Download Result</a>
                            </div>
                        </div>
                        <div class="online-results-detail">
                        <h4 class="text-center result-user-name"> Name : <?php echo !empty($cand_name)?$cand_name:'';?>  </h4>
                            <div class="row m0">
                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12 mx-auto">
                                    <div class="time-result">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="counter-box">
<?php 
        
        $totalPercent=0;
        $totalSecond=0;
        $attemptPercent =0;
        $correct = 0;
        foreach($q_detail as $key=>$value){
        $totalPercent =  (int)$totalPercent +   (int)$value['percent'];
        $totalSecond =  (int)$totalSecond +   (int)$value['time'];
        if($value['correct'] == $value['answer']){
            $correct++;
            $attemptPercent = (int)$attemptPercent+   (int)$value['percent'];
        }
        }

?>


                                                     <a class="totla-mark"><?php echo (!empty($attemptPercent))?round(($attemptPercent/$totalPercent)*100,2):'0';?>%</a>
                                                     <h5>Total Number for Score</h5>
                                                     <p>You have attempted</p>
                                                     <p><b>( <?php echo $attempt;?> Out of <?php echo $total;?> )</b></p>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="counter-box">
                                                     <center><div class="totla-marks">
                                                         <p>(1:00:00)</p>
                                                         <p>Time Spent</p>
                                                         <p><?php echo  gmdate("H:i:s", $totalSecond); ?> </p>
                                                     </div>
                                                    <p class="mb-0 pb-0 text-success">Correct Answers : <b class="text-black"><?php echo (!empty($correct))?$correct:'0';?></b></p>
                                                    <p class="mb-0 pb-0 text-danger">Wrong Answers : <b class="text-black"><?php if(!empty($attempt) || !empty($correct)){echo  $attempt -$correct; };?></b></p>
                                                    <p class="mb-0 pb-0 text-info">Not Attempt : <b class="text-black"><?php if(!empty($attempt) || !empty($correct)){echo  $total -$attempt; };?></b></p>
                                                     <h5>Share Your Score With your Friends</h5>
                                                     <p>
                                                    
                                                     <a href="javascript:void(0)" onclick="javascript:genericSocialShare('http://www.facebook.com/sharer.php?u=<?php echo base_url().'online-result/'.$this->uri->segment(2);?>#!')" ><i class="fab fa-facebook-f fb"></i></a>
                                                     <a href="javascript:void(0)" onclick="javascript:genericSocialShare('http://www.linkedin.com/shareArticle?mini=true&url=<?php echo base_url().'online-result/'.$this->uri->segment(2);?>#!')"> <i class="fab fa-instagram insta"></i></a>
                                                    
                                                     
                                                     </p>
                                                    
                                                </div>
                                            </center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="online-subject">
                            <div class="sub-title">
                                <h5>Your Strength</h5>
                                <p>Congratulations for appearing exam! Your patience and persistence has finally paid off. Now you are now one step closer to your dream.</p>
                                <div id="alert"></div>
                            </div>
                            <div class="counter-list">
                                <div class="container-count">
                                <?php if(!empty($uniq_subject)){
                                    foreach($uniq_subject as $subkey=>$subval){

                                        $totalPercent=0;
                                        $attemptPercent =0;
                                        foreach($q_detail as $key=>$value){

                                        $totalPercent =  (int)$totalPercent  +   (int)$value['percent'];
                                        if($subval->subject === $value['subject']){
                                            if($value['correct'] == $value['answer'] ){
                                                $attemptPercent = (int)$attemptPercent+   (int)$value['percent'];
                                                }
                                            }    
                                        }
                                ?>
                                    <div class="chart easy-pie-chart-1" data-percent="<?php echo round(($attemptPercent/$totalPercent)*100,2) ?>">
                                        <span class="percent1"></span>
                                        <p><?php echo $subval->subject;?></p>
                                    </div>
                                <?php }}?>
                                   
                                </div>
                            </div>
                            <div class="shedule text-center">
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                <p class="h-login btn-m"><a href="" class="btn-hl " data-toggle="modal"
                                                data-target="#exampleModalCenter">Schedule Interview</a></p>
                                               
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content mc">
                <div class="modal-header mh">
                    <div class="form-login">
                        <h5>Please select your interview date</h5>
                        
                    </div>
                    <a class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="close-g">&times;</span>
                    </a>
                </div>
                <div class="modal-body mb-online">
                    <div class="form-lo">
                        <form  id="schform" >
                            <div class="row">
                               <div class="col-md-12">
                                  
                                 

                        <!-- shorting -->
                            <table id="dynamic" class="striped table table-stripped ">
                                <thead class="">
                                    <tr class="tt">
                                        <th id="a" class="h5-para-p2" width="130px">SI No.</th>
                                        <th id="b" class="h5-para-p2" width="120px">Date</th>
                                        <th id="c" class="h5-para-p2" width="120px">Time</th>
                                    </tr>
                                </thead>
                                <tbody class="">
                                    <?php  if(!empty($schedule)){ foreach($schedule as $key=>$value){;?>
                                    <tr>
                                        <td>
                                            <label class="container-checkbox">
                                            <input type="radio" name="schedule_id"  value="<?php echo $value->id;?>" required>
                                            <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td><?php echo $value->date;?></td>
                                        <td><?php echo $value->time;?></td>
                                    </tr>
                                   
                                    <?php }}?>
                                </tbody>
                            </table>
                            <input type="hidden" value="<?php echo $test_id;?>" id="test_id" name="test_id">
                            <input type="hidden" value="<?php echo !empty($this->session->userdata('aa_uid'))?$this->session->userdata('aa_uid'):'0';?>" id="user_id" name="user_id">
                               </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <button class="sub-btn" type="submit">Submit</button>
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
    <!-- <script src="<?php echo base_url();?>assets/js/script.js"></script> -->
    <script src="<?php echo base_url();?>assets/js/online-result.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js'></script>
    <script src="<?php echo base_url();?>assets/js/preloader.js"></script>
    <!-- data table -->
    <script type="text/javascript" src="<?php echo base_url()?>assets/dataTable/datatables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/dataTable/button/js/dataTables.buttons.min.js">
    </script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/dataTable/button/js/buttons.flash.min.js">
    </script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/dataTable/button/js/buttons.html5.min.js">
    </script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/dataTable/button/js/pdfmake.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/dataTable/button/js/vfs_fonts.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/toastr.min.js"></script>
    
    <script type="text/javascript">
function genericSocialShare(url){
    window.open(url,'sharer','toolbar=0,status=0,width=648,height=395');
    return true;
}
</script>
    <script>
 
    
    
//disable back button on browser
(function(global) {

if (typeof(global) === "undefined") {
    throw new Error("window is undefined");
}

var _hash = "!";
var noBackPlease = function() {
    global.location.href += "#";

    // making sure we have the fruit available for juice (^__^)
    global.setTimeout(function() {
        global.location.href += "!";
    }, 50);
};

global.onhashchange = function() {
    if (global.location.hash !== _hash) {
        global.location.hash = _hash;
    }
};

global.onload = function() {
    noBackPlease();

    // disables backspace on page except on input fields and textarea..
    document.body.onkeydown = function(e) {
        var elm = e.target.nodeName.toLowerCase();
        if (e.which === 8 && (elm !== 'input' && elm !== 'textarea')) {
            e.preventDefault();
        }
        // stopping event bubbling up the DOM tree..
        e.stopPropagation();
    };
}

})(window);

$(document).ready(function() {
    $("input[name='schedule_id']").change(function(){
        $("input[name='schedule_id']").closest('tr').css({'background-color':'transparent','color':'black'});
        var thisClosest = $("input[name='schedule_id']:checked").closest('tr').css({'background-color':'#0080003d','color':'#170000'});
    })
    $('#schform').submit(function(e) {
e.preventDefault();
var schedule_id = $("input[name='schedule_id']:checked").val();

var test_id = $("#test_id").val();
var user_id = $("#user_id").val();

if(schedule_id !=''){
    loder(true)
    $.ajax({
    url: '<?php echo base_url() ?>test/insert_schedule',
    type: "POST",
    data: {
        schedule_id: schedule_id,
        test_id:test_id,
        user_id:user_id,
    },
    dataType: 'json',

    success: function(data) {
        loder(false)
        if (data == true) {
            $("#test_id").val('');
           $('.modal').hide();
           $('.modal-backdrop').css('position','relative');
           
           toastr.success('Your interview scheduled successfully', 'Success ', {timeOut: 5000});
        }else{
            toastr.error('Failed to add your schedule', 'Error', {timeOut: 5000});
        }
    },
    error: function(error){
                toastr.error('There is internal server issue!', 'Error', {timeOut: 5000});
            }
});
}
});

        $('table').DataTable({
            dom: 'Bfrtip',
            buttons: [
                
            ],
        });
         //page loader
         function loder(status) {
            if (status == true) {
                $('.preloader-verfy').css('display', 'block');
            } else {
                $('.preloader-verfy').css('display', 'none');
            }
        }
    });
    </script>
</body>
</html>
