<?php  ob_start(); session_start(); require('../db/config.php'); require('../db/functions.php');
if(isset($_SESSION['admin_id'])){ $admin =  $_SESSION['admin_id']; } else{header('location:login.php');} 


$link = 3; error_reporting(0); ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <?php include('nav/head.php'); ?>
    <title>Transaction Details - Spottables Services</title>
</head>

<body>
 <div class="dashboard-main-wrapper">
    <?php include('nav/header.php'); ?>
    <?php include('nav/left_sidebar.php'); ?>
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
              <?php   if($_GET['viewPay']){ $find_post = QueryDB("SELECT * FROM  payment WHERE pay_id ='".$_GET['viewPay']."'  ");
              $pay = $find_post->fetch(PDO::FETCH_ASSOC); ?>
              <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Transaction Details</h2>
                        <p class="pageheader-text"></p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="payment" class="breadcrumb-link">Books Boughts</a></li>
                                    <li class="breadcrumb-item"><a class="active">Payment Details</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ecommerce-widget">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                      <div class="card">
                        <div class="card-header">
                          <h5 class="mb-0">Transaction Details</h5>
                          <a href="payment?pay=1" class="btn btn-success"> <i class="fa fa-angle-double-left"></i> Back</a>
                          <button class="btn btn-info"> <i class="fa fa-print"></i> Print</button>
                      </div>
                      <div class="card-body">
                          <div class="table-responsive">
                            <table id="example" class="table second">
                                <tbody>
                                    <tr style="font-size: 20px; font-weight: bolder;"><td>Amount: </td><td><?php if($pay['price']==0){echo 'Free';}else{echo 'NGN '.$pay['price'];} ?></td></tr>
                                    <tr><td>Payment ID: </td><td><?php echo $pay['pay_id']; ?></td></tr>
                                    <tr><td>Reference Number: </td><td><?php echo $pay['pay_ref']; ?></td></tr>
                                    <tr><td>Purchase Time: </td><td><?php echo date('d-M-Y h:i A',$pay['pay_time']); ?></td></tr>
                                    <tr><td>Users: </td><td><?php echo $pay['pay_user']; ?></td></tr>
                                    <tr><td>Transaction Status: </td><td><i class="btn-success" style="padding: 5px"><?php echo $pay['pay_status']; ?></i></td></tr>
                                    <tr><td>Item Name: </td><td><?php echo $pay['item_name']; ?></td></tr>
                                    <tr><td>Payment Type: </td><td>Transfer</td></tr>
                                    <tr><td>Paid Time: </td><td><?php if($pay['confirm_time']==0){ echo "--/--/--"; } else{echo date("M-d-Y h:i A", $pay['confirm_time']);} ?></td></tr>
                                    <tr><td>Book Sent: </td><td><?php if($pay['pay_status']=='pending'){ echo 'No'; ?> <i class="fa fa-check-circle"></i><?php 
                                } else{ echo 'Yes'; ?> <i class="fa fa-check-circle"></i><?php } ?></td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div></div></div><?php  } ?>


            <?php  if($_GET['viewAds']){ $find_post = QueryDB("SELECT * FROM  ad_apply WHERE trans_code ='".$_GET['viewAds']."'  ");
            $pay = $find_post->fetch(PDO::FETCH_ASSOC); ?>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Transaction Details</h2>
                        <p class="pageheader-text"></p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="payment?pay=2" class="breadcrumb-link">Ads Boughts</a></li>
                                    <li class="breadcrumb-item"><a class="active">Payment Details</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ecommerce-widget">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                      <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Transaction Details</h5><a href="payment?pay=2" class="btn btn-success"> <i class="fa fa-angle-double-left"></i> Back</a> <button class="btn btn-info"> <i class="fa fa-print"></i> Print</button>
                        </div>
                        <div class="card-body">
                          <div class="table-responsive">
                            <table id="example" class="table second">
                                <tbody>
                                    <tr style="font-size: 20px; font-weight: bolder;"><td>Amount: </td><td><?php if($pay['ad_amount']==0){echo 'Free';}else{echo 'NGN '.$pay['ad_amount'];} ?></td></tr>
                                    <tr><td>Transaction Code: </td><td><?php echo $pay['trans_code']; ?></td></tr>
                                    <tr><td>Purchase Time: </td><td><?php echo date('d-M-Y h:i A',$pay['apply_date']); ?></td></tr>
                                    <tr><td>User: </td><td><?php echo $pay['user_id']; ?></td></tr>
                                    <tr><td>Transaction Status: </td><td><i class="btn-success" style="padding: 5px"><?php echo $pay['ad_status']; ?></i></td></tr>
                                    <tr><td>Ad Name: </td><td><?php echo $pay['ad_name'].' ('.$pay['ad_type'].')'; ?></td></tr>
                                    <tr><td>Payment Type: </td><td>Paystack</td></tr>
                                    <tr><td>Paid Time: </td><td><?php if($pay['confirm_time']==0){ echo "--/--/--"; } else{echo date("M-d-Y h:i A", $pay['confirm_time']);} ?></td></tr>
                                    <tr><td>Ads Application: </td><td><?php if($pay['ad_status']=='pending'){ echo 'No'; ?> <i class="fa fa-check-circle"></i><?php } else{ echo 'Yes'; ?> <i class="fa fa-check-circle"></i><?php } ?></td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div></div>
            </div><?php  } ?>


            <?php if($_GET['serPay']){ $find_post = QueryDB("SELECT * FROM  service_pay WHERE ser_id ='".$_GET['serPay']."'  "); $pay = $find_post->fetch(PDO::FETCH_ASSOC); ?>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Payments For Services</h2>
                        <p class="pageheader-text"></p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="payment?pay=3" class="breadcrumb-link">Service Payments</a></li>
                                    <li class="breadcrumb-item"><a class="active">Payment Details</a></li>

                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ecommerce-widget">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                      <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Transaction Details</h5><a href="payment?pay=3" class="btn btn-success"> <i class="fa fa-angle-double-left"></i> Back</a> <button class="btn btn-info"> <i class="fa fa-print"></i> Print</button>
                        </div>
                        <div class="card-body">
                          <div class="table-responsive">
                            <table id="example" class="table second">
                                <tbody>
                                    <tr style="font-size: 20px; font-weight: bolder;"><td>Amount: </td><td><?php if($pay['ser_amt']==0){echo 'Free';}else{echo 'NGN '.$pay['ser_amt'];} ?></td></tr>
                                    <tr><td>Services Payment ID: </td><td><?php echo $pay['ser_id']; ?></td></tr>
                                    <tr><td>Purchase Time: </td><td><?php echo date('d-M-Y h:i A',$pay['ser_time']); ?></td></tr>
                                    <tr><td>Users: </td><td><?php echo $pay['ser_user']; ?></td></tr>
                                    <tr><td>Payment Status: </td><td><i class="btn-success" style="padding: 5px"><?php echo $pay['ser_status']; ?></i></td></tr>
                                    <tr><td>Service Paid For: </td><td><?php echo $pay['ser_desc']; ?></td></tr>
                                    <tr><td>Payment Type: </td><td>Transfer</td></tr>
                                    <tr><td>Paid Time: </td><td><?php if($pay['confirm_time']==0){ echo "--/--/--"; }else{echo date("M-d-Y h:i A", $pay['confirm_time']);} ?></td></tr>
                                    <tr><td>Success Status: </td><td>Yes <i class="fa fa-check-circle"></i></td></tr>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div> <?php  }  ?>

        <?php if($_GET['authorPay']){ $find_post = QueryDB("SELECT * FROM  author_pay WHERE trans_id ='".$_GET['authorPay']."'  "); $pay = $find_post->fetch(PDO::FETCH_ASSOC); ?>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Author Books Purchased</h2>
                    <p class="pageheader-text"></p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="author_pay" class="breadcrumb-link">Author Pay</a></li>
                                <li class="breadcrumb-item"><a class="active">Payment Details</a></li>

                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="ecommerce-widget">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Transaction Details</h5><a href="author_pay" class="btn btn-success"> <i class="fa fa-angle-double-left"></i> Back</a> <button class="btn btn-info"> <i class="fa fa-print"></i> Print</button>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table id="example" class="table second">
                            <tbody>
                                <tr style="font-weight: bolder;"><td>Amount: </td><td><?php if($pay['amt']==0){echo 'Free';}else{echo 'NGN '.$pay['amt'];} ?></td></tr>
                                <tr style="font-weight: bolder;"><td>Commission: </td><td><?php echo 'NGN '.$pay['author_com'];?></td></tr>
                                <tr><td>Transaction ID: </td><td><?php echo $pay['trans_id']; ?></td></tr>
                                <tr><td>Book Bought: </td><td><?php echo $pay['author_item']; ?></td></tr>
                                <tr><td>Buyers Email: </td><td><?php echo $pay['author_payer']; ?></td></tr>
                                <tr><td>Purchase Time: </td><td><?php echo date('d-M-Y h:i A',$pay['author_time']); ?></td></tr>
                                <tr><td>Payment Status: </td><td><i class="btn-success" style="padding: 5px"><?php echo $pay['author_status']; ?></i></td></tr>
                                <tr><td>Payment Type: </td><td>Transfer</td></tr>
                                <tr><td>Success Status: </td><td><?php if($pay['author_status']=='Approved'){echo 'Yes'; }else{echo 'No';}  ?> <i class="fa fa-check-circle"></i></td></tr>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div> <?php  }  ?>

    <?php if($_GET['affPay']){ $find_post = QueryDB("SELECT * FROM  aff_pay WHERE trans_id ='".$_GET['affPay']."'  "); $pay = $find_post->fetch(PDO::FETCH_ASSOC); ?>
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Author Books Purchased</h2>
                <p class="pageheader-text"></p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="affiliator_pay" class="breadcrumb-link">Affiliator Pay</a></li>
                            <li class="breadcrumb-item"><a class="active">Payment Details</a></li>

                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="ecommerce-widget">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
              <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Transaction Details</h5><a href="affiliator_pay" class="btn btn-success"> <i class="fa fa-angle-double-left"></i> Back</a> <button class="btn btn-info"> <i class="fa fa-print"></i> Print</button>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="example" class="table second">
                        <thead><tr><th></th><th></th></tr></thead>
                        <tbody>
                            <tr><td>Amount:</td><td><?php if($pay['aff_amt']==0){echo 'Free';}else{echo 'NGN '.$pay['aff_amt'];} ?></td></tr>
                            <tr><td>Commission:</td><td><?php echo 'NGN '.$pay['aff_com'];?></td></tr>
                            <tr><td>Transaction ID:</td><td><?php echo $pay['trans_id']; ?></td></tr>
                            <tr><td>Item Purchased:</td><td><?php echo $pay['aff_item']; ?></td></tr>
                            <tr><td>Buyers Email:</td><td><?php echo $pay['aff_payer']; ?></td></tr>
                            <tr><td>Purchase Time: </td><td><?php echo date('d-M-Y h:i A',$pay['aff_time']); ?></td></tr>
                            <tr><td>Payment Status:</td><td><i class="btn-success" style="padding: 5px"><?php echo $pay['aff_status']; ?></i></td></tr>
                            <tr><td>Payment Type:</td><td>Transfer</td></tr>
                            <tr><td>Success Status:</td><td><?php if($pay['aff_status']=='Approved'){echo 'Yes'; }else{echo 'No';}  ?> <i class="fa fa-check-circle"></i></td></tr>
                        </tbody>
                        <tfoot><tr><th></th><th></th></tr></tfoot>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div> <?php  }  ?>
</div></div>
<!-- ============================================================== -->
<?php include('nav/footer.php'); include('nav/scripts.php'); include('modals.php'); ?>
</body>

</html>