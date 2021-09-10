<?php  ob_start(); session_start(); require('../db/config.php'); require('../db/functions.php'); 
if(isset( $_SESSION['admin_id'])){ $admin =  $_SESSION['admin_id']; } else{header('location:login.php');} ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Forgot Password</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
        }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a href="../index"><img class="logo-img" src="../images/logos/it_logo.png" alt="logo" width="100%"></a><span class="splash-description">Reset Your password</span></div>
            <div class="card-body">
                <form action="" method="POST">
                    <?php if(isset($_POST['reset'])){
                        $email = validate($_POST['email']);


    //check if student exists
                        if(QueryDB("SELECT COUNT(*) FROM admin where `admin_email`='$email' and `admin_id`='$admin' ")->fetchColumn()>0){
        //print"<script>alert('Student Exists'); window.location='form'; </script>"; //
                            QueryDB("UPDATE admin SET admin_pass='".rand()."' where admin_email='$email' ");


      // QueryDB("INSERT INTO `details` VALUES('',".$_SESSION['stud_code'].", ) ")
       //echo $_SESSION['stud_code'];
                            echo  '<div class="alert alert-success alert-dismissible col-md-12 text-center" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button> <strong class="text-italic" style="color:black;">
                            Resetting.. Please Wait! <i class="fa fa-spinner fa-spin"></i>
                            </div>';
                            header("refresh:2; url=password_reset");
//        print "<script>swal({text:'Login Successful',type:'success',title:'Successful'},
// function(){ window.location = 'login'});</script>"; 
                            die();

                        }else{
//               print "<script>swal({text:'Login Credentials Mismatch',type:'warning',title:'Error'},
// function(){ window.location = 'login'});</script>"; 
                          $message = '<div class="alert alert-danger alert-dismissible col-md-12 text-center" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button> <strong class="text-italic" style="color:black;">
                          Email Not Found.
                          </div>'; 
                      }
                  }



                  ?>
                  <div class="form-group">
                    <div class="col-md-12"><?php echo @$message; ?></div>
                    <label class="control-label" for="lastname">Enter Your Email:</label><span class="required"> *</span>
                    <input type="text" name="email" required="" placeholder="Enter Email" class="form-control"> 
                </div>                                

                <button type="submit" name="reset" class="btn btn-primary btn-lg btn-block">Reset Password</button>
            </form>
        </div>
    </div>
</div>

<!-- ============================================================== -->
<!-- end login page  -->
<!-- ============================================================== -->
<!-- Optional JavaScript -->
<script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>