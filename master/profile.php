<?php  ob_start(); session_start(); require('../db/config.php'); require('../db/functions.php');
if(isset($_SESSION['admin_id'])){ $admin =  extract(get_admin_info($_SESSION['admin_id'])); } else{header('location:login.php');} ?>

<!doctype html>
<html lang="en">
<head>
    <?php  include('nav/head.php'); ?>
    <title>Profile - Spottable Services Admin</title>
</head>
<body><div class="dashboard-main-wrapper">
 <?php include('nav/header.php'); ?>
 <?php include('nav/left_sidebar.php'); ?>
 <div class="dashboard-wrapper">
    <div class="influence-profile">
        <div class="container-fluid dashboard-content ">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h3 class="mb-2">Admin Profile </h3>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Admin Profile</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card-body">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Ensure to Verify your Profile to ensure your details are correctly entered.
                        <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="user-avatar text-center d-block">
                                <img src="users/user.jpg" alt="User Avatar" class="rounded-circle user-avatar-xxl">
                            </div>
                            <div class="text-center">
                                <h2 class="font-24 mb-0"><?php echo $admin_name; ?></h2>
                                <p>Admin ID: <?php echo $admin_id;  ?></p>
                            </div>
                        </div>
                        <div class="card-body border-top">
                            <h3 class="font-16">Contact Information</h3>
                            <div class="">
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><i class="fas fa-fw fa-envelope mr-2"></i><?php echo $admin_email; ?></li>
                                    <li class="mb-2"><i class="fas fa-fw fa-phone mr-2"></i><?php echo $admin_phone; ?></li>
                                    <li class="mb-2"><i class="fas fa-fw fa-heart mr-2"></i><?php echo $admin_status; ?></li>
                                    <li class="mb-2"><i class="fas fa-fw fa-male mr-2"></i><?php echo $admin_sex; ?></li>
                                    <li class="mb-2"><i class="fas fa-fw fa-calendar-alt mr-2"></i><?php echo date('d-M-Y',$admin_date); ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#edit">Update Profile</a>

                </div>
                <!-- Modal -->
                <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Update Profile</h5>
                                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </a>
                            </div>
                            <form action="" method="POST"> 
                                <?php if(isset($_POST['update'])){
                                    $name = validate($_POST['name']);
                                    $phone = validate($_POST['phone']);
                                    $status = validate($_POST['status']);

                                    QueryDB("UPDATE admin SET admin_name='$name', admin_status='$status', admin_phone='$admin_phone' where admin_id='".$_SESSION['admin_id']."' ");print "<script>swal({text:'Profile Updated', type:'success', title:' Successful'}, function(){ window.location = 'profile'}); </script>";


                                } ?>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Name:</label>
                                        <input type="text" name="name" class="form-control" value="<?php echo $admin_name; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Phone:</label>
                                        <input type="text" name="phone" class="form-control" value="<?php echo $admin_phone; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Marital Status:</label>
                                        <select name="status"  class="form-control"><option value="">[Marital Status]</option><option value="Single" <?php if($admin_status=='Single'){echo 'selected'; } ?>>Single</option><option value="Engaged" <?php if($admin_status=='Engaged'){echo 'selected'; } ?>>Engaged</option><option value="Married" <?php if($admin_status=='Married'){echo 'selected'; } ?>>Married</option></select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="#" class="btn btn-secondary" data-dismiss="modal">Close</a>
                                    <input type="submit" name="update" class="btn btn-primary" value="Update">
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <?php include('nav/footer.php'); include 'nav/scripts.php'; include 'modals.php';  ?>

    </body>

    </html>