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
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
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
</head>

<body>

    <!-- header -->
    <?php $this->load->view('includes/header');?>
    <!-- end header -->


    <section class="student-detail sec-top">
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
                            <h5>Payment Detail</h5>
                        </div>
                        <div class="table-payment-list">
                            <!-- shorting -->
                            <table id="dynamic" class="striped">
                                <thead class="di-table">
                                    <tr class="tt">
                                        <th id="a" class="h5-para-p2" width="130px">SI No.</th>
                                        <th id="b" class="h5-para-p2" width="120px">Date</th>
                                        <th id="c" class="h5-para-p2" width="120px">Course</th>
                                        <th id="d" class="h5-para-p2" width="120px">Online test</th>
                                        <th id="d" class="h5-para-p2" width="120px">Score</th>
                                        <th id="d" class="h5-para-p2" width="120px">Amount</th>
                                       
                                        <th id="e" class="h5-para-p2" width="62px">Status</th>
                                    </tr>
                                </thead>
                                <tbody class="tb-table">
                                <?php

                                    if (!empty($result)) {
                                    $count= 0;
                                    foreach ($result as $key => $value) { $count += 1;
                                    ?>
                                    <tr>
                                        <td><?php echo (!empty($result))?$count:'---'  ?></td>
                                        <td><?php echo (!empty($value['purchase_date']))?date("M d, Y ", strtotime($value['purchase_date'])):'---'; ?></td>
                                        <td><?php echo (!empty($value['course']))?$value['course']:'---'  ?></td>
                                        <td class="dt-buttons"> 
                                        <?php if($value['status'] ==1){?>
                                        <a href="<?php echo base_url().'online-test/'.$value['uniq'] ?>" class="dt-button delete-btn">Start</a>
                                        <?php }else{?>
                                       <a href="<?php echo base_url().'online-result/'.$value['id'] ?>" class="dt-button delete-btn"> Completed </a>
                                        <?php }?>
                                         </td>

                                         <?php 
                                                    $this->db->where('qz.user_id',$value['user_id']);
                                                    $this->db->where('qz.test_id',$value['id']);
                                                    $this->db->select('qz.id,qz.test_id, qz.question,qz.status,qz.correct,qz.answer,qz.time,qz.sub_id,qz.subject, qr.percent,qr.sub_id,qr.duration');
                                                    $this->db->from('quiz qz');

                                                    $this->db->join('question_row qr', 'qr.id   = qz.q_row_id','left');

                                                    $query= $this->db->order_by('qz.id', 'desc')->get()->result_array();

                                               $totalPercent=0;
                                                
                                                    $attemptPercent =0;

                                                foreach($query as $keys=>$values){
                                                $totalPercent =  (int)$totalPercent +   (int)$values['percent'];
                                               
                                                if($values['test_id'] == $value['id']){
                                                    if($values['correct'] == $values['answer'] ){
                                                   
                                                        $attemptPercent = (int)$attemptPercent+   (int)$values['percent'];
                                                    }
                                                }
                                                }
                                           
                                            
                                        ?>



                                <td><?php echo (!empty($attemptPercent))?round(($attemptPercent/$totalPercent)*100,2):'0';?>%</td>
                                       
                                        <td><?php echo (!empty($value['amount']))?$value['amount']:'---'  ?>/-</td>
                                        <td class="action-btn  center-align">
                                            <a class="blue hoverable delete-btn">Paid</a>
                                        </td>
                                    </tr>
                                    <?php } } ?>
                                </tbody>
                            </table>
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
    <script>
    $(document).ready(function() {
        $('table').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'csv', 'excel', 'pdf'
            ],
        });
        $('select').formSelect();
    });
    </script>

</body>

</html>