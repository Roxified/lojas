<?php  ob_start(); session_start(); require('../db/config.php'); require('../db/functions.php');
if(isset($_SESSION['admin_id'])){ $admin =  $_SESSION['admin_id']; } else{header('location:login.php');} 
$link = 5; //error_reporting(0); ?>
<!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <?php include('nav/head.php'); ?>
        <title>View Journals - LOJAS</title>
    </head>
    <body>
        <div class="dashboard-main-wrapper">
            <?php include('nav/header.php'); ?>
            <?php include('nav/left_sidebar.php'); ?>
            <div class="dashboard-wrapper">
                <div class="dashboard-ecommerce">
                    <div class="container-fluid dashboard-content ">



                        <?php if(isset($_GET['viewJournal'])){ $find_post = QueryDB("SELECT * FROM  journals WHERE jo_code ='".$_GET['viewJournal']."' "); $q = $find_post->fetch(PDO::FETCH_ASSOC); ?>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="page-header">
                                    <h2 class="pageheader-title">View Journal</h2>
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
                        <div class="ecommerce-widget">
                            <?php if(isset($_GET['editBook'])){
                                $_SESSION['editBook'] = $_GET['editBook'];
                                header('location:editBook'); die();
                            } ?>
                            <div class="row">
                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card card-header">
                                                <h3 class="text-muted">Journal Title : <?php echo $q['jo_name'].' '.$q['jo_vol'].' '.$q['jo_num'];  ?></h3>
                                            </div>
                                            <div class="container">
                                                <!-- <img src="<?php //echo $q['jo_img'];  ?>"  width="100%"> -->
                                                <h3>List of Articles</h3>
                                                <ol>
                                                    <?php foreach (QueryDB("SELECT * FROM articles where j_cat='".$q['jo_code']."' ") as $rows){
                                                        extract($rows);
                                                        ?>
                                                        <li><a href="viewArticles?viewArticles=<?php echo $j_id; ?>"><?php echo $j_title;  ?></a></li>
                                                    <?php  } ?>
                                                </ol>
                                            </div>
                                            <a href="manageJournals" class="btn btn-success">Back to Journals</a>
                                            <!-- <a href="editPost?editPost=<?php // echo $q['jo_code']; ?>" class="btn btn-warning">Edit Post</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php  }  ?>


                    <?php if(isset($_GET['viewSubmission'])){ $find_post = QueryDB("SELECT * FROM  submission WHERE subm_id ='".$_GET['viewSubmission']."' "); $q = $find_post->fetch(PDO::FETCH_ASSOC); ?>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">View Submitted <?php echo get_subm_name($q['subm_cat']); ?></h2>
                                <p class="pageheader-text"></p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item"><a href="submittedPub?0" class="breadcrumb-link">Submitted publications</a></li>
                                            <li class="breadcrumb-item">View Submitted <?php echo get_subm_name($q['subm_cat']); ?></li>

                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ecommerce-widget">
                        <?php if(isset($_GET['editBook'])){
                            $_SESSION['editBook'] = $_GET['editBook'];
                            header('location:editBook'); die();
                        } ?>
                        <div class="row">
                            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card card-header">
                                            <h3 class="text-muted"><?php echo get_subm_name($q['subm_cat']); ?> Title : <?php echo $q['subm_title'];  ?></h3>
                                            <h4 class="text-muted">Submitted By : <?php echo $q['subm_author'];  ?></h4>
                                            <h4 class="text-muted">Email : <?php echo $q['subm_email'];  ?></h4>
                                            <h4 class="text-muted">Phone: <?php echo $q['subm_phone'];  ?></h4>
                                        </div>
                                        <div class="container">
                                            <!-- <img src="<?php //echo $q['subm_img'];  ?>"  width="100%"> -->
                                            
                                            <p><?php echo htmlspecialchars_decode($q['subm_note']);  ?></p>
                                            <div class="col-md-12 col-sm-12 col-12">
                                                <iframe src="<?php echo str_replace('master/','',$q['subm_pdf']);  ?>" width="100%" height="400px"></iframe>
                                            </div>
                                        </div>
                                        <a href="manageJournals" class="btn btn-success"><i class="fa fa-reply"></i> Submitted Papers</a>
                                        <!-- <a href="editPost?editPost=<?php // echo $q['jo_code']; ?>" class="btn btn-warning">Edit Post</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php  }  ?>

            </div>
        </div>
        <!-- ============================================================== -->
        <?php include('nav/footer.php'); include('nav/scripts.php'); include('modals.php'); ?>
    </body>

    </html>