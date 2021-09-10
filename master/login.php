<?php  ob_start(); session_start(); require('../db/config.php'); require('../db/functions.php');  ?>
<!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Login - LOJAS</title>
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
            <div class="card-header text-center"><img class="logo-img img-responsive" src="../images/lojas.jpg" alt="logo" width="50px"><h2>LOJAS Admin Login</h2><span class="splash-description">Please enter your admin information to Login.</span></div>
            <div class="card-body">
                <form action="" method="POST">
                    <?php if(isset($_POST['login'])){
                        $admin_id = validate($_POST['admin_id']);
                        $pass = validate($_POST['pass']);

    //check if student exists
                        if(QueryDB("SELECT COUNT(*) FROM `admin` where `admin_id`='$admin_id' and `admin_pass`= '$pass' ")->fetchColumn()>0){
        //print"<script>alert('Student Exists'); window.location='form'; </script>"; //
                            $_SESSION['admin_id'] = $admin_id;

      // QueryDB("INSERT INTO `details` VALUES('',".$_SESSION['stud_code'].", ) ")
       //echo $_SESSION['stud_code'];
                            echo  '<div class="alert alert-success alert-dismissible col-md-12 text-center" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button> <strong class="text-italic" style="color:black;">
                            Logging in-Please Wait.. <i class="fa fa-spinner fa-spin"></i>
                            </div>';
                            header("refresh:2; url=index");
//        print "<script>swal({text:'Login Successful',type:'success',title:'Successful'},
// function(){ window.location = 'login'});</script>"; 
                            die();

                        }else{
//               print "<script>swal({text:'Login Credentials Mismatch',type:'warning',title:'Error'},
// function(){ window.location = 'login'});</script>"; 
                          $message = '<div class="alert alert-danger alert-dismissible col-md-12 text-center" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button> <strong class="text-italic" style="color:black;">
                          Invalid Login Credentials.
                          </div>'; 
                      }
                  }



                  ?>
                  <div class="form-group">
                    <div class="col-md-12"><?php echo @$message; ?></div>
                    <label class="control-label" for="lastname">Enter Username:</label><span class="required"> *</span>
                    <input type="text" name="admin_id" required="" placeholder="Enter Admin ID" class="form-control"> 
                </div>
                <div class="form-group ">
                    <label class="control-label" for="othername">Enter Password </label><span class="required"> *</span>
                    <input type="password" name="pass" placeholder="Enter password" required="" class="form-control"> 
                </div>

                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
                    </label>
                </div>
                <button type="submit" name="login" class="btn btn-primary btn-lg btn-block">Sign in</button>
            </form>
        </div>
        <div class="card-footer bg-white p-0  ">
            <div class="card-footer-item card-footer-item-bordered">
                <a href="sign-up" class="footer-link">Create An Account</a></div>
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="forgot_password" class="footer-link">Forgot Password</a>
                </div>
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