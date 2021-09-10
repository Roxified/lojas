<?php  ob_start(); session_start(); require('../db/config.php'); require('../db/functions.php');
if(isset( $_SESSION['admin_id'])){ $admin =  $_SESSION['admin_id']; } else{header('location:login.php');}
$link = 10; //error_reporting(0); ?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <?php include('nav/head.php'); ?>
  <title>Manager Users - Spottable Servivces</title>
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
            <h2 class="pageheader-title">Manage Users </h2>
            <div class="page-breadcrumb">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index" class="breadcrumb-link">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Users Manager</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <?php if(isset($_GET['editBook'])){ $id = $_GET['id']; $_SESSION['editBook'] = $_GET['editBook']; header('Location:editBook'); } ?>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered second" style="width:100%; font-size: 12px">
                  <thead>
                    <tr>
                      <th>S/N</th>
                      <th>User Code</th>
                      <th>Email</th>
                      <th>Name</th>
                      <th>Mobile</th>
                      <th>DOB</th>
                      <th>Country</th>
                      <th>State</th>
                      <th>LGA</th>
                      <th>Address</th>
                      <th>Reg Date</th>
                      <th>Status</th>
                      <th>Active</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php $sn = 1; foreach( get_f_users() as $row){ extract($row); ?>
                      <tr>
                        <td><?php echo $sn; ?></td>
                        <td><?php echo $ucode; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $fname; ?></td>
                        <td><?php echo $phone; ?></td>
                        <td><?php echo $dob; ?></td>
                        <td><?php echo $country; ?></td>
                        <td><?php echo $state; ?></td>
                        <td><?php echo $lga; ?></td>
                        <td><?php echo $addr; ?></td>
                        <td><?php echo date('d-M-Y h:i A',$reg_date); ?></td>
                        <td><?php if($status == 0){echo 'Active'; }else{echo "Suspended"; } ?></td>
                        <td>
                          <div class="hidden-sm hidden-xs action-buttons">
                            <a class="btn btn-danger" href="?view=<?php echo $id;  ?>&where=<?php echo md5(rand());  ?>" id="delLink" data-toggle="tooltip" title="View User">
                              <i class="fas fa-trash"></i>
                            </a>
                          </div>
                        </td>
                      </tr>
                      <?php  $sn++; } ?>
                    </tbody>
                    <tfoot>
                      <tr>
                       <th>S/N</th>
                       <th>User Code</th>
                       <th>Email</th>
                       <th>Name</th>
                       <th>Mobile</th>
                       <th>DOB</th>
                       <th>Country</th>
                       <th>State</th>
                       <th>LGA</th>
                       <th>Address</th>
                       <th>Reg Date</th>
                       <th>Status</th>
                       <th>Active</th>
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


     </div>
   </div>


   <!-- ============================================================== -->
   <?php include('nav/footer.php'); ?>
   <?php include('nav/scripts.php'); include('modals.php'); ?>
 </body>

 </html>