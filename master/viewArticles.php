<?php  ob_start(); session_start(); require('../db/config.php'); require('../db/functions.php');
if(isset($_SESSION['admin_id'])){ $admin =  $_SESSION['admin_id']; } else{header('location:login.php');} 
$link = 5; //error_reporting(0); ?>
<!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <?php include('nav/head.php'); ?>
        <title>View Articles - LOJAS</title>
    </head>
    <body>
        <div class="dashboard-main-wrapper">
            <?php include('nav/header.php'); ?>
            <?php include('nav/left_sidebar.php'); ?>
            <div class="dashboard-wrapper">
                <div class="dashboard-ecommerce">
                    <div class="container-fluid dashboard-content ">



                        <?php if($_GET['viewArticles']){ $find_post = QueryDB("SELECT * FROM  articles WHERE j_id ='".$_GET['viewArticles']."' "); $q = $find_post->fetch(PDO::FETCH_ASSOC); ?>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="page-header">
                                    <h2 class="pageheader-title">View Article</h2>
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
                                                <h3 class="text-muted">Journal : <?php echo get_journa_name($q['j_cat']);  ?></h3>
                                                <h3 class="text-muted">Article Title : <?php echo $q['j_title'];  ?></h3>
                                                <h4 class="text-muted">Authors : <?php echo $q['j_author'];  ?></h4>
                                            </div>
                                            <div class="container">
                                                <!-- <img src="<?php //echo $q['jo_img'];  ?>"  width="100%"> -->
                                                <h2>Abstract</h2>
                                                <p><?php echo htmlspecialchars_decode($q['j_abstract']);  ?></p>

                                                <h2>References</h2>
                                                <p><?php echo htmlspecialchars_decode($q['j_abstract']);  ?></p>
                                                <div class="col-md-12 col-sm-12 col-12">
                                                    <iframe src="<?php echo $q['j_pdf'];  ?>" width="100%" height="400px"></iframe>
                                                </div>
                                            </div>
                                            <a href="viewJournal?viewJournal=<?php echo $q['j_cat']; ?>" class="btn btn-primary"><i class="fa fa-reply"></i> Back to Journals</a>

                                            <a href="manageArticles" class="btn btn-success"><i class="fa fa-reply"></i> Back to Articles</a>
                                            <a href="<?php  echo $q['j_pdf']; ?>" class="btn btn-warning"><i class="fa fa-file"></i> View PDF Post</a> 
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