<?php  ob_start(); session_start(); require('../db/config.php'); require('../db/functions.php');
if(isset( $_SESSION['admin_id'])){ $admin =  $_SESSION['admin_id']; } else{header('location:login.php');}
$link = 1; //error_reporting(0); ?>
<!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <?php include('nav/head.php'); ?>
        <title>Dashboard - LOJAS Admin</title>
    </head>
    <body>
        <div class="dashboard-main-wrapper">
            <?php include('nav/header.php'); ?>
            <?php include('nav/left_sidebar.php'); ?>
            <div class="dashboard-wrapper">
                <div class="dashboard-ecommerce">
                    <div class="container-fluid dashboard-content ">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="page-header">
                                    <h2 class="pageheader-title">Dashboard</h2>
                                    <p class="pageheader-text"></p>
                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="" class="breadcrumb-link">Dashboard</a></li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <?php if(isset($_POST['addSubCat'])){

                            $title=$_POST['title'];

                            $cat_id = $_POST['cat_id'];

                            if(QueryDB("INSERT INTO subm_cat (subm_name,     subm_code  ) VALUES('$title', '$cat_id') ")){
                                print "<script>swal({text:'Publication Category Created', type:'success', title:' Successful'}, function(){ window.location = ''}); </script>";
                            }

                        } ?>

                        <?php  if(isset($_POST['addPay'])){
                            $pay_name = $_POST['pay_name'];
                            $pay_code = $_POST['pay_code'];
                            $pay_amt = $_POST['pay_amt'];

                            if(QueryDB("SELECT COUNT(*) FROM pay_cat where pay_name='$pay_name' ")->fetchColumn()>0){
                                print "<script>swal({text:'Payment Already exist', type:'error', title:' Duplicate'}, function(){ window.location = ''}); </script>";
                            }else{
                                if(QueryDB("INSERT INTO pay_cat (pay_code, pay_name,  pay_amt, pay_date, pay_stat) VALUES('$pay_code','$pay_name','$pay_amt','".time()."',1) ")){
                                    print "<script>swal({text:'Payment Inserted', type:'success', title:' Successful'}, function(){ window.location = 'payType'}); </script>";
                                }
                            }
                        }





                        ?>

                        <?php 
                        if(isset($_POST['setCall'])){

                            $call_vol = $_POST['call_vol'];
                            $call_num = $_POST['call_num'];

                            if(QueryDB("INSERT INTO call_ (call_vol, call_num, call_status) VALUES('$call_vol', '$call_num', 1) ")){
                                print "<script>swal({text:'Call for Paper is Set', type:'success', title:' Successful'}, function(){ window.location = 'payType'}); </script>";
                            }

                        }
                        ?>
                        <div class="ecommerce-widget">
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-inline-block">
                                                <h5 class="text-muted">Total Journals Uploaded</h5>
                                                <h2 class="mb-0"><?php echo get_journal_count(); ?></h2>
                                            </div>
                                            <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                                                <i class="fa fa-file fa-fw fa-sm text-info"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-inline-block">
                                                <h5 class="text-muted">Total Articles Uploaded</h5>
                                                <h2 class="mb-0"><?php echo get_article_count(); ?></h2>
                                            </div>
                                            <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                                                <i class="fa fa-file fa-fw fa-sm text-info"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-inline-block">
                                                <h5 class="text-muted">Total Blog Post</h5>
                                                <h2 class="mb-0"><?php echo get_all_post(); ?></h2>
                                            </div>
                                            <div class="float-right icon-circle-medium  icon-box-lg  bg-secondary-light mt-1">
                                                <i class="fa fa-graduation-cap fa-fw fa-sm text-secondary"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <?php include('nav/footer.php');
                include('nav/scripts.php'); include('modals.php'); ?>
            </body>
            </html>