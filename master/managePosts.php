<?php  ob_start(); session_start(); require('../db/config.php'); require('../db/functions.php');
if(isset( $_SESSION['admin_id'])){ $admin =  $_SESSION['admin_id']; } else{header('location:login.php');}
$link = 6; //error_reporting(0); ?>
<!doctype html>
  <html lang="en">

  <head>
    <title>Manage Post - Spottable Services</title>
    <?php include('nav/head.php'); ?>


    <style>
    .videoWrapper { position: relative; padding-bottom: 75.25%; height: 0; }
    .videoWrapper iframe { position:absolute; top: 0; left: 0; width: 100%; height: 100%; }
  </style>
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
                <h2 class="pageheader-title">Manage Post</h2>

                <div class="page-breadcrumb">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index" class="breadcrumb-link">Dashboard</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Manage Post</li>
                    </ol>
                  </nav>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <?php  if(isset($_GET['unlock'])){$unlock = $_GET['unlock']; QueryDB("UPDATE posts SET blog_status=1 where id='$unlock' ");
            print "<script>swal({text:'Post Unlocked', type:'success', title:' Successful'}, function(){ window.location = 'managePosts?norm=1'}); </script>"; } ?>

            <?php if(isset($_GET['lock'])){ $lock = $_GET['lock']; QueryDB("UPDATE posts SET blog_status=0 where id='$lock' "); print "<script>swal({text:'Post Locked', type:'success', title:'Successful'}, function(){ window.location = 'managePosts?norm=1'}); </script>"; } ?>

            <?php  if(isset($_GET['dismisslt'])){ $delete = $_GET['dismisslt']; QueryDB("DELETE FROM posts where id='$delete' LIMIT 1 "); print "<script>swal({text:'Post Deleted', type:'warning', title:' Deleted'}, function(){ window.location = 'managePosts?norm=1'}); </script>"; } ?>

            <?php  if(isset($_GET['disquote'])){ $delete = $_GET['disquote']; QueryDB("DELETE FROM quotes where id='$delete' LIMIT 1 "); print "<script>swal({text:'Quote & Anime Deleted', type:'warning', title:' Deleted'}, function(){ window.location = 'managePosts?norm=2'}); </script>"; } ?>

            <?php  if(isset($_GET['dispod'])){ $delete = $_GET['dispod']; QueryDB("DELETE FROM pods where id='$delete' LIMIT 1 "); print "<script>swal({text:'Post Deleted', type:'warning', title:' Deleted'}, function(){ window.location = 'managePosts?norm=3'}); </script>"; } ?>


            <div class="row"><div class="card"><div class="card-body"><div class="card-header"><h4>View All Posts</h4></div>
            <div class="">
              <table id="example" class="table table-striped table-bordered second table-responsive"><thead><tr><th>S/N</th><th>Title</th><th>Img</th><th>Content</th><th>Date</th><th>Actions</th></tr></thead>
                <tbody>
                  <?php $sn = 1;foreach(QueryDB("SELECT * FROM blog ORDER BY blog_date DESC ") as $row){
                    extract($row);?><tr>
                      <td><?php echo $sn; ?></td>
                      <td><?php echo $blog_title; ?></td>
                      <td><img src="<?php echo $blog_img; ?>" class="img img-thumbnail img-responsive" width="100px"></td>
                      <td><?php echo htmlspecialchars_decode((substr($blog_cont, 0,100))); ?></td>

                      <td><?php echo date("M-d-Y", $blog_date).'<br>'.date("h:i:s A", $blog_date); ?></td>
                      <td>
                        <div class="hidden-sm hidden-xs action-buttons">
                          <a class="btn btn-info" href="viewPost?viewPost=<?php echo $id; ?>" data-toggle="tooltip" title="View Post"><i class="fas fa-eye"></i></a>
                          <?php if($blog_status == 0){  ?>
                            <a class="btn btn-primary" href="?unlock=<?php echo $id;  ?>&where=<?php echo md5(rand());  ?>" id="status" onclick="return confirm('Make Post Visible?');" data-toggle="tooltip" title="Make Post Visible to Viewers"><i class="fas fa-lock-slash"></i></a>
                          <?php } else{  ?>
                            <a class="btn btn-primary" href="?lock=<?php echo $id;  ?>&where=<?php echo md5(rand());  ?>" id="status" onclick="return confirm('Hide Post?');" data-toggle="tooltip" title="Lock Post from Viewers"><i class="fas fa-lock"></i></a>
                          <?php } ?>
                          <a class="btn btn-success" href="editPost?editPost=<?php echo $id; ?>" data-toggle="tooltip" title="Edit Post"><i class="fas fa-pencil-alt"></i></a>
                          <a class="btn btn-danger" href="?dismisslt=<?php echo $id;  ?>&where=<?php echo md5(rand());  ?>" id="delLink" data-toggle="tooltip" title="Delete Post" onclick="return confirm('Are you sure you wante to Delete this post?');"><i class="fas fa-trash"></i></a>
                        </div>
                      </td>
                      </tr><?php  $sn++; } ?>
                    </tbody>

                  </table></div></div></div>
                </div>

              </div>
              <!-- ============================================================== -->
              <!-- end data table  -->
              <!-- ============================================================== -->
            </div>


          </div>
        </div>


        <!-- ============================================================== -->
        <?php include('nav/footer.php'); include('nav/scripts.php'); include('modals.php'); ?>
      </body>

      </html>