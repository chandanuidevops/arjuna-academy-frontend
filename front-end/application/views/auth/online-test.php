<!-- <?php  echo $question['uniq'];?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $title;?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="target-densitydpi=device-dpi, initial-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/font/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/slick.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/lightbox.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/online.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/test.css">
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
<style>

</style>

<body oncopy="return false" oncut="return false" onpaste="return false"  onload="JavaScript:document.body.focus();" onkeydown="return showKeyCode(event)">

    <!-- header -->
    <?php $this->load->view('includes/header');?>

    <!-- end header -->
    <div class="content"></div>
    <?php if($first_id == $question['id']){?>
    <section class="comon-back-ground">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="about-banner">
                        <h5>Online Test</h5>
                        <p>Richard McClintock, a Latin scholar from Hampden-Sydney College, is credited with discovering
                            the source behind the ubiquitous Richard McClintock, a Latin scholar from Hampden-Sydney
                            College, is credited with discovering the source behind the ubiquitous Richard McClintock, a
                            Latin scholar from filler text.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php }?>
    <section class="sec-top">
        <div class="container">
           
           
            <form action="<?php //echo base_url('test/submit_test');?>" id="ansform">
                <div class="row">
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
                        <div class="questin-steps">
                            <div class="questions-ans">
                                <div class="quiz-container">
                                    <div id="quiz">
                                        <div class="slide active-slide">


                                            <div class="question"> <p class="qsino"><?php echo $question['sino'];?>. </p> 
                                                <?php echo $question['question'] ;?> </div>
                                                
                                                <img class="q-img" src="<?php echo base_url().$question['question_img'] ;?>" alt="" class="img-fluid" alt="image-alt">
                                            <div class="answers"> <label>
                                                    <input type="hidden" value="<?php echo $question['q_id'] ;?>"
                                                        id="q_id">
                                                    <input type="hidden" value="<?php echo $question['user_id'] ;?>"
                                                        id="user_id">
                                                    <input type="hidden" value="<?php echo $question['id'] ;?>" id="id">
                                                    <input type="hidden" value="<?php echo $question['q_row_id'] ;?>"
                                                        id="q_row_id">
                                                    <input type="hidden" value="<?php echo $question['sub_id'] ;?>"
                                                        id="sub_id">
                                                    <input type="hidden" value="<?php echo $question['subject'] ;?>"
                                                        id="subject">
                                                    <input type="hidden" value="<?php echo $question['test_id'] ;?>" id="test_id">
                                                    <input type="hidden" id="time">
                                                    <!-- <div id='seconds-counter'> </div> -->
                                                    <input type="radio" name="answer" value="1">
                                                   (a). 
                                                    <?php echo (!empty($question['choice1']))?$question['choice1']:' ' ;?>
                                                    <?php if(!empty($question['choice_img1'])){;?>
                                                    <img src="<?php echo (!empty($question['choice_img1']))?base_url().$question['choice_img1']:' ' ;?>" alt=" ">
                                                    <?php };?>
                                                </label> <label>

                                                    <input type="radio" name="answer" value="2">
                                                    (b). <?php echo (!empty($question['choice2']))?$question['choice2']:' ' ;?>
                                                    <?php if(!empty($question['choice_img2'])){;?>
                                                    <img src="<?php echo (!empty($question['choice_img2']))?base_url().$question['choice_img2']:' ' ;?>" alt=" ">
                                                    <?php };?>
                                                </label> <label>

                                                    <input type="radio" name="answer" value="3">
                                                    (c). <?php echo (!empty($question['choice3']))?$question['choice3']:' ' ;?>
                                                    <?php if(!empty($question['choice_img3'])){;?>
                                                    <img src="<?php echo (!empty($question['choice_img3']))?base_url().$question['choice_img3']:' ' ;?>" alt=" ">
                                                    <?php };?>
                                                </label> <label>

                                                    <input type="radio" name="answer" value="4">
                                                    (d). <?php  echo (!empty($question['choice4']))?$question['choice4']:' ' ;?>
                                                    <?php if(!empty($question['choice_img4'])){;?>
                                                    <img src="<?php echo (!empty($question['choice_img4']))?base_url().$question['choice_img4']:' ' ;?>" alt=" ">
                                                    <?php };?>
                                                </label> </div>
                                        </div>


                                    </div>
                                </div>
                               
                                <div id="next-submit">
                                    <button type="submit" id="nextbtn"
                                        class="action-button "><?php if($last_id == $question['id'] ){echo 'Submit Quiz';}else{ echo 'Next Question ';}; ?></button>

                                   
                                </div>


                                
                            </div>


                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                    <div class="timer">
                        <canvas id="mycanvas" width="250" height="250"></canvas>
                    </div>
                    </div>
                </div>
            </form>
            <div class="hr-line"></div>

            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12">
                    <div class="time-slot">

                    </div>
                    <div class="solve-p">
                        <div class="inst-solve">
                            <h5>Instructon To Solve</h5>
                            <p>Richard McClintock, a Latin scholar from Hampden-Sydney College, is credited with
                                discovering the source behind the ubiquitous Richard McClintock, a Latin scholar from
                                Hampden-Sydney College, is credited with discovering the source behind the ubiquitous
                                Richard McClintock, a Latin scholar from filler text.</p>
                        </div>
                        <div class="note-inst">
                            <h5>Note :</h5>
                            <p><span class="num-pp">(1)</span>Richard McClintock, a Latin scholar from Hampden-Sydney
                                College </p>
                            <p><span class="num-pp">(2)</span>Is credited with discovering the source behind the
                                ubiquitous Richard McClintock, </p>
                            <p><span class="num-pp">(2)</span>a Latin scholar from Hampden-Sydney College, is credited
                                with discovering the source behind the ubiquitous Richard McClintock, a Latin scholar
                                from filler text.</p>
                        </div>
                    </div>

                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    
                </div>
            </div>
        </div>
    </section>
    

    <!-- footer -->
    <?php $this->load->view('includes/footer');?>
    <!-- footer -->
    <div class="go-top active">
        <i class="fa fa-angle-double-up"></i>
        <i class="fa fa-angle-double-up"></i>
    </div>
    <!-- script -->
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3.0.1/es5/tex-mml-chtml.js">
    </script>
    <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/slick.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/script.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
    <script src="<?php echo base_url();?>assets/js/preloader.js"></script>


    <script>
//////////////
//
//////////////////////load next question after time limit//////////////////////////////////////
//
/////////////////
    var delay = <?php $time_seconds = '';
                        $str_time = $duration;
                        sscanf($str_time, "%d:%d", $minutes, $seconds);
                        echo($time_seconds = (int) $time_seconds + (int)($minutes * 60 + $seconds)) * 1000; ?> ;

    setTimeout(function() {
        <?php 
        if ($last_id != $question['id']) {
            ; ?>

            var answer = $("input[name='answer']:checked").val();
            var question = $("#q_id").val();
            var user_id = $("#user_id").val();
            var q_row_id = $("#q_row_id").val();
            var sub_id = $("#sub_id").val();
            var subject = $("#subject").val();
            var time = $("#time").val();
            var test_id = $("#test_id").val();
            var q_row_id = "<?php echo $question['q_row_id'];?>";

            var correct = "<?php echo $question['correct'];?>";
            $.ajax({
                url: '<?php echo base_url() ?>test/insert_answer',
                type: "POST",
                data: {
                    answer: answer,
                    question: question,
                    user_id: user_id,
                    correct: correct,
                    q_row_id: q_row_id,
                    sub_id: sub_id,
                    subject: subject,
                    time: time,
                    test_id:test_id
                },
                dataType: 'json',

                success: function(data) {
                    if (data == true) {
                        window.location =  "<?php echo base_url().'online-test/'.$testUbiqId.'/'.$uniqid.'/'.(($question['id']) +1);?>";
                       
                    }
                },
            });

            <?php }else{  ; ?>

            updateCompletedStatus();

            <?php }; ?>
    }, delay);

    $(document).ready(function() {
//////////////
//
//////////////////////insert answer in quiz table database//////////////////////////////////////
//
/////////////////

        $('#ansform').submit(function(e) {
            e.preventDefault();
            var answer = $("input[name='answer']:checked").val();
            var question = $("#q_id").val();
            var user_id = $("#user_id").val();
            var q_row_id = $("#q_row_id").val();
            var sub_id = $("#sub_id").val();
            var subject = $("#subject").val();
            var time = $("#time").val();
            var test_id = $("#test_id").val();
            var q_row_id = "<?php echo $question['q_row_id'];?>";

            var correct = "<?php echo $question['correct'];?>";
            $.ajax({
                url: '<?php echo base_url() ?>test/insert_answer',
                type: "POST",
                data: {
                    answer: answer,
                    question: question,
                    user_id: user_id,
                    correct: correct,
                    q_row_id: q_row_id,
                    sub_id: sub_id,
                    subject: subject,
                    time: time,
                    test_id:test_id

                },
                dataType: 'json',

                success: function(data) {
                    if (data == true) {

                        <?php    if ($last_id != $question['id']){ ; ?>
                            window.location = "<?php echo base_url().'online-test/'.$testUbiqId.'/'.$uniqid.'/'.(($question['id']) +1);?>"; 
                                <?php }else{; ?>
                           
                          updateCompletedStatus();
                          sendResultEmail(); 
                            <?php }; ?>

                    }
                },
            });
        });
//////////////
//
//////////////////////update test_payment table status = 2 for test completed when last question submitted//////////////////////////////////////
//
/////////////////

        function updateCompletedStatus() {
            var test_id = $("#test_id").val();
            loder(false)
            $.ajax({
                type: "POST",
                url: "<?php echo base_url() ?>test/update_test_status",
                data: {
                    test_id: test_id
                },
                dataType: "json",
                success: function(response) {
                    loder(response)
                    if (response == true) {
                       window.location = "<?php echo base_url().'online-result/'.$question['test_id'];?>";
                    }
                }
            });
        }
        function loder(status) {
            if (status == true) {
                $('#status').fadeOut(); // will first fade out the loading animation 
                $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
                $('body').delay(350).css({'overflow':'visible'});
                $('body').delay(350).css({'overflow-x':'hidden'});
            } else {
                $('#status').fadeIn(); 
                $('#preloader').delay(350).fadeIn('slow'); // wi
            }
        }



        function sendResultEmail() {
            var test_id = $("#test_id").val();

            $.ajax({
                type: "POST",
                url: "<?php echo base_url().'test/insertResult' ;?>",
                data: {
                    test_id: test_id
                },
                dataType: "json",
                success: function(response) {
                   alert('ok');
                    }
                });
            };
        

    });
    </script>

</body>

<script>
//////////////
//
////////////////////question time counter//////////////////////////////////////
//
/////////////////
(function drawCanvas() {
    var canvas = document.getElementById('mycanvas');
    var ctx = canvas.getContext('2d');
    var cWidth = canvas.width;
    var cHeight = canvas.height;

   


    var countTo = <?php   $time_seconds = '';
    $str_time = $duration;
    sscanf($str_time, "%d:%d", $minutes, $seconds);
    echo($time_seconds = (int) $time_seconds + (int)($minutes * 60 + $seconds)); ?> ;





    var min = Math.floor(countTo / 60);
    var sec = countTo - (min * 60);
    var counter = 0;
    var angle = 270;
    var inc = 360 / countTo;

    function drawScreen() {
        //======= reset canvas

        ctx.fillStyle = "white";
        ctx.fillRect(0, 0, cWidth, cHeight);

        //========== base arc

        ctx.beginPath();
        ctx.strokeStyle = "#eaeaea";
        ctx.lineWidth = 14;
        ctx.arc(cWidth / 2, cHeight / 2, 100, (Math.PI / 180) * 0, (Math.PI / 180) * 360, false);
        ctx.stroke();
        ctx.closePath();

        //========== dynamic arc

        ctx.beginPath();
        ctx.strokeStyle = "green";
        ctx.lineWidth = 14;
        ctx.arc(cWidth / 2, cHeight / 2, 100, (Math.PI / 180) * 270, (Math.PI / 180) * angle, false);
        ctx.stroke();
        ctx.closePath();

        //======== inner shadow arc

        grad = ctx.createRadialGradient(cWidth / 2, cHeight / 2, 80, cWidth / 2, cHeight / 2, 115);
        grad.addColorStop(0.0, 'rgba(0,0,0,.4)');
        grad.addColorStop(0.5, 'rgba(0,0,0,0)');
        grad.addColorStop(1.0, 'rgba(0,0,0,0.4)');

        ctx.beginPath();
        ctx.strokeStyle = grad;
        ctx.lineWidth = 14;
        ctx.arc(cWidth / 2, cHeight / 2, 100, (Math.PI / 180) * 0, (Math.PI / 180) * 360, false);
        ctx.stroke();
        ctx.closePath();

        //======== bevel arc

        grad = ctx.createLinearGradient(cWidth / 2, 0, cWidth / 2, cHeight);
        grad.addColorStop(0.0, '#eaeaea');
        grad.addColorStop(0.5, '#eaeaea');

        ctx.beginPath();
        ctx.strokeStyle = grad;
        ctx.lineWidth = 1;
        ctx.arc(cWidth / 2, cHeight / 2, 93, (Math.PI / 180) * 0, (Math.PI / 180) * 360, true);
        ctx.stroke();
        ctx.closePath();

        //====== emboss arc

        grad = ctx.createLinearGradient(cWidth / 2, 0, cWidth / 2, cHeight);
        grad.addColorStop(0.0, 'transparent');
        grad.addColorStop(0.98, '#6c6f72');

        ctx.beginPath();
        ctx.strokeStyle = grad;
        ctx.lineWidth = 1;
        ctx.arc(cWidth / 2, cHeight / 2, 107, (Math.PI / 180) * 0, (Math.PI / 180) * 360, true);
        ctx.stroke();
        ctx.closePath();

        //====== Labels

        var textColor = '#646464';
        var textSize = "12";
        var fontFace = "helvetica, arial, sans-serif";

        ctx.fillStyle = textColor;
        ctx.font = textSize + "px " + fontFace;
        ctx.fillText('MIN', cWidth / 2 - 55, cHeight / 2 - 15);
        ctx.fillText('SEC', cWidth / 2 + 25, cHeight / 2 - 15);

        //====== Values



        ctx.fillStyle = 'black';

        if (min > 9) {
            ctx.font = '84px ' + fontFace;
            ctx.fillText('9', cWidth / 2 - 10, cHeight / 2 + 35);

            ctx.font = '24px ' + fontFace;
            ctx.fillText('+', cWidth / 2 - 10, cHeight / 2 - 5);
        } else {
            ctx.font = '50px ' + fontFace;
            ctx.fillText(min, cWidth / 2 - 60, cHeight / 2 + 35);
        }

        ctx.font = '50px ' + fontFace;
        if (sec < 10) {
            ctx.fillText('0' + sec, cWidth / 2 + 10, cHeight / 2 + 35);
        } else {
            ctx.fillText(sec, cWidth / 2 + 10, cHeight / 2 + 35);
        }


        if (sec <= 0 && counter < countTo) {
            angle += inc;
            counter++;
            min--;
            sec = 59;
        } else
        if (counter >= countTo) {
            sec = 0;
            min = 0;
        } else {
            angle += inc;
            counter++;
            sec--;
        }
    }
    setInterval(drawScreen, 1000);

})()
</script>

<script>
//spent time counter

//////////////
//
////////////////////set refresh time//////////////////////////////////////
//
/////////////////


var seconds = '<?php echo (int)$secs; ?>';
var inputF = document.getElementById("time");

function incrementSeconds() {

    seconds = seconds % 360 + 1;

    inputF.value = seconds;

    var id = '<?php echo $this->uri->segment(4); ?>';


    if (id !='') {
        var ids = id;
    }else{
        var ids = '<?php echo $first_id ?>';
    }



    $.ajax({
        type: "GET",
        url: "<?php echo base_url() ?>authentication/test",
        data: {
            seconds: seconds,id:ids
        },
        dataType: "json",
        success: function(response) {
            if (response == true) {
                window.location = "<?php echo base_url().'online-result/'.$question['test_id'];?>";
            }
        }
    });
}
var cancel = setInterval(incrementSeconds, 1000);
</script>

<script>

</script>





<script type="text/javascript">
//////////////
//
////////////////////disable back button on browser//////////////////////////////////////
//
/////////////////
//
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



//////////////
//
////////////////////disable right click//////////////////////////////////////
//
/////////////////



document.addEventListener("contextmenu", function(e){
    e.preventDefault();
}, false);




//////////////
//
////////////////////// disable copy paste//////////////////////////////////////
//
/////////////////

$(document).ready(function() {
    $('#Selector').bind('copy paste', function(e) {
        e.preventDefault();
    });
});


//////////////
//
////////////////////disable print screen//////////////////////////////////////
//
/////////////////





function copyToClipboard() {
    $('body').css('background','black');
    $('body').css('opacity',1);
    $('body').css('z-index',99999999999999);

var aux = document.createElement("input");
aux.setAttribute("value", "print screen disabled!");      
document.body.appendChild(aux);
aux.select();
document.execCommand("copy");
// Remove it from the body
document.body.removeChild(aux);
alert("Print screen disabled!");
}

$(window).keyup(function(e){
if(e.keyCode == 44){
  copyToClipboard();
}
});
</script>




</html>