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
          <a href="payment?pay=1" class="btn btn-primary"> Conference Payments</a>
          <a href="payment?pay=2" class="btn btn-warning"> Assessment Payments</a>
          <a href="payment?pay=3" class="btn btn-danger"> Publications Payment</a>
          <?php  if($_GET['pay']==1){ ?>
            <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="card-header"><h3>Books Payments</h3></div>
                    <div class="table-responsive">
                      <table id="example" class="table table-striped second" style="font-size: 12px">
                        <thead>
                          <tr>
                            <th>S/N</th><th>Payment ID</th><th>Payer</th><th>Reference</th><th>Payment For</th>
                            <th>Amount</th>
                            <th>Payment Date</th>
                            <th>Confirmed Date</th>

                            <th>Status</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody><?php $sn = 1; foreach(QueryDB("SELECT * FROM payment ORDER BY pay_date DESC") as $row){ extract($row); ?>
                          <tr>
                            <td><?php echo $sn; ?></td>
                            <td><?php echo $pay_id; ?></td>
                            <td><?php echo $payer; ?></td>
                            <td><?php echo $pay_ref; ?></td>
                            <td><?php echo $pay_for; ?></td>
                            <td><?php echo $pay_amount; ?></td>
                            <td><?php echo date('d-M-Y h:i A', $pay_date); ?></td>
                            <td><i class="btn-success" style="padding: 5px"> <?php echo $pay_status; ?> </i></td>
                            <td><?php if($confirm_time==0){ echo "Not Paid"; }else{echo date("M-d-Y h:i A", $confirm_time);} ?></td>
                            <td><?php echo $item_name; ?></td>
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
          <?php }  ?>

          <?php  if($_GET['pay']==2){ ?>
            <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="card-header"><h3>Ads Payments</h3></div>
                    <div class="table-responsive">
                      <table id="example" class="table table-striped second" style="font-size: 10px;">
                        <thead>
                          <tr>
                           <th>S/N</th>
                           <th>User ID</th>
                           <th>TRX Code</th>
                           <th>Ads Name</th>
                           <th>Ads Type</th>
                           <th>Price</th>
                           <th>Apply Date/Time</th>
                           <th>Confirmed Date/Time</th>
                           <th>Account Name</th>
                           <th>Account Number</th>
                           <th>Bank Name</th>
                           <th>Paypal</th>
                           <th>Payment Status</th>
                           <th>Actions</th>
                         </tr>
                       </thead>
                       <tbody>

                        <?php $sn = 1; 
                        foreach(QueryDB("SELECT * FROM ad_apply ") as $row){
                          extract($row); 
                          ?>
                          <tr>
                            <td><?php echo $sn; ?></td>
                            <td><?php echo $user_id; ?></td>
                            <td><?php echo $trans_code; ?></td>
                            <td><?php echo $ad_name; ?></td>
                            <td><?php echo $ad_type; ?></td>
                            <td><del>N</del><?php echo $ad_amount; ?></td>
                            <td><?php echo date('d-M-Y h:i A', $apply_date); ?></td>
                            <td><?php if($confirm_time==0){ echo "Not Paid"; }else{echo date("M-d-Y h:i A", $confirm_time);} ?></td>
                            <td><?php echo $act_name; ?></td>
                            <td><?php echo $act_num; ?></td>
                            <td><?php echo $bank; ?></td>
                            <td><?php if($paypal==0){echo "Not Applied";}else{echo $paypal;} ?></td>
                            <td><?php echo $ad_status; ?></td>
                            <td><div class="hidden-sm hidden-xs action-buttons"><a class="btn btn-info" href="viewPay?viewAds=<?php echo $trans_code; ?>" data-toggle="tooltip" title="Payment Details"><i class="fas fa-file-alt"></i></a></div></td>
                          </tr>
                          <?php $sn++; } ?>
                        </tbody>
                        <tfoot>
                          <tr>
                            <th>S/N</th>
                            <th>User ID</th>
                            <th>TRX Code</th>
                            <th>Ads Name</th>
                            <th>Ads Type</th>
                            <th>Price</th>
                            <th>Apply Date/Time</th>
                            <th>Confirmed Date/Time</th>
                            <th>Account Name</th>
                            <th>Account Number</th>
                            <th>Bank Name</th>
                            <th>Paypal</th>
                            <th>Payment Status</th>
                            <th>Actions</th>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ============================================================== -->
              <!-- end data table  -->
              <!-- ============================================================== -->
            </div>
          <?php }  ?>

          <?php  if($_GET['pay']==3){ ?>
            <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="card-header"><h3>Service Payments</h3></div>

                    <div class="table-responsive">
                      <table id="example" class="table table-striped second" style="font-size: 12px;">
                        <thead>
                          <tr>
                           <th>S/N</th>
                           <th>TRX ID</th>
                           <th>Username</th>
                           <th>Description</th>
                           <th>Price</th>
                           <th>Apply Date/Time</th>
                           <th>Confirmed Date/Time</th>
                           <th>Payment Status</th>
                           <th>Actions</th>
                         </tr>
                       </thead>
                       <tbody>
                        <?php $sn = 1; foreach(QueryDB("SELECT * FROM service_pay ") as $row){extract($row); ?>
                          <tr>
                            <td><?php echo $sn; ?></td>
                            <td><?php echo $ser_id; ?></td>
                            <td><?php echo $ser_user; ?></td>
                            <td><?php echo $ser_desc; ?></td>
                            <td><del>N</del><?php echo $ser_amt; ?></td>
                            <td><?php echo date('d-M-Y h:i A', $ser_time); ?></td>
                            <td><?php if($confirm_time==0){ echo "Not Paid"; }else{echo date("M-d-Y h:i A", $confirm_time);} ?></td>
                            <td><?php echo $ser_status; ?></td>
                            <td><div class="hidden-sm hidden-xs action-buttons"><a class="btn btn-info" href="viewPay?serPay=<?php echo $ser_id; ?>" data-toggle="tooltip" title="Payment Details"><i class="fas fa-file-alt"></i></a></div></td>
                          </tr>
                          <?php $sn++; } ?>
                        </tbody>
                        <tfoot>
                          <tr>
                            <th>S/N</th>
                            <th>TRX ID</th>
                            <th>Username</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Apply Date/Time</th>
                            <th>Confirmed Date/Time</th>
                            <th>Payment Status</th>
                            <th>Actions</th>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ============================================================== -->
              <!-- end data table  -->
              <!-- ============================================================== -->
            </div>

          <?php  } ?>
        </div>
      </div>
      <?php include('nav/footer.php'); ?>
      <?php include('nav/scripts.php'); include('modals.php'); ?>
    </body>
    </html>