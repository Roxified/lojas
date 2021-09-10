<?php  ob_start(); session_start(); require('../db/config.php'); require('../db/functions.php');
if(isset( $_SESSION['admin_id'])){ $admin =  $_SESSION['admin_id']; } else{header('location:login.php');}
$link = 3; //error_reporting(0); ?>
<!doctype html>
  <html lang="en">

  <head>
    <!-- Required meta tags -->
    <?php include('nav/head.php'); ?>
    <title>Transaction History - LOJAS</title>
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
                <h2 class="pageheader-title">Transaction History</h2>
                <div class="page-breadcrumb">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index" class="breadcrumb-link">Dashboard</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Transaction History</li>
                    </ol>
                  </nav>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="card">
                <div class="card-body">
                  <div class="card-header"><h3>Books Payments</h3></div>
                  <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered second" style="font-size: 12px">
                      <thead>
                        <tr>
                          <th>S/N</th><th>Code</th><th>Name</th><th>Amount</th>
                          <th>Created</th>
                          

                          <th>Status</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody><?php $sn = 1; foreach(QueryDB("SELECT * FROM pay_cat ") as $row){ extract($row); ?>
                        <tr>
                          <td><?php echo $sn; ?></td>

                          <td><?php echo $pay_code; ?></td>
                          <td><?php echo $pay_name; ?></td>
                          <td><?php echo $pay_amt; ?></td>
                          <td><?php echo date('d-M-Y h:i A', $pay_date); ?></td>
                          <td><?php if($pay_stat==0){ echo "Inactive"; }else{echo "Active" ;} ?></td>

                          <td><div class="hidden-sm hidden-xs action-buttons"><a class="btn btn-info" href="viewPay?viewPay=<?php echo $pay_id; ?>" data-toggle="tooltip" title="Payment Details"><i class="fas fa-file-alt"></i></a></div>
                          </td>
                        </tr> 
                        <?php $sn++; } ?>
                      </tbody>

                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
      <?php include('nav/footer.php'); ?>
      <?php include('nav/scripts.php'); include('modals.php'); ?>
    </body>
    </html>