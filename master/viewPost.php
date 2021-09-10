<?php  ob_start(); session_start(); require('../db/config.php'); require('../db/functions.php');
if(isset($_SESSION['admin_id'])){ $admin =  $_SESSION['admin_id']; } else{header('location:login');} 


$link = 4; error_reporting(0); ?>
<!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <?php include('nav/head.php'); ?>
        <title>View Post - LOJAS</title>
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
                                <h2 class="pageheader-title">View Post</h2>
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
                        <?php if($_GET['viewPost']){ $find_post = QueryDB("SELECT * FROM  blog WHERE id ='".$_GET['viewPost']."' "); $querypost = $find_post->fetch(PDO::FETCH_ASSOC); ?>
                        <div class="row">
                            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card card-header">
                                            <h3 class="text-muted">Title : <?php echo $querypost['blog_title'];  ?></h3>
                                        </div>
                                        <div class="container">
                                            <img src="<?php echo $querypost['blog_img'];  ?>"  width="100%">
                                            <p><?php echo htmlspecialchars_decode($querypost['blog_cont']);  ?></p>
                                        </div>
                                        <a href="managePosts" class="btn btn-success">Back to Posts</a>
                                        <a href="editPost?editPost=<?php echo $querypost['id']; ?>" class="btn btn-warning">Edit Post</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>


                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <?php include('nav/footer.php'); include('nav/scripts.php'); include('modals.php'); ?>
    </body>

    </html>