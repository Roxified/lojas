<?php  ob_start(); session_start(); require('../db/config.php'); require('../db/functions.php');
if(isset( $_SESSION['admin_id'])){ $admin =  $_SESSION['admin_id']; } else{header('location:login.php');}
$link = 5; //error_reporting(0); ?>
<!doctype html>
  <html lang="en">

  <head>
    <!-- Required meta tags -->
    <?php include('nav/head.php'); ?>
    <title>Manage Articles - LOJAS</title>
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
                  <h2 class="pageheader-title">Manage Articles</h2>
                  <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Manage Articles</li>
                      </ol>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <?php if(isset($_POST['addJournal'])){
                $jo_name = $_POST['jo_name'];
                $jo_id = $_POST['jo_id'];
                $jo_vol = $_POST['jo_vol'];
                $jo_num = $_POST['jo_num'];
                $jo_pub = $_POST['jo_pub'];


                if(QueryDB("SELECT COUNT(*) FROM journals WHERE jo_name='$jo_name' and jo_vol='$jo_vol' and jo_num='$jo_name' ")->fetchColumn()>0){
                  print "<script>swal({text:'Journal Already Exist', type:'warning', title:' Duplicate Found'}, function(){ window.location = 'manageJournals'}); </script>";
                } else{

                 $image = basename($_FILES["image"]["name"]);
                 $path = "journals/".$jo_id."/";
                 $image_file = $path . $image;
                 $uploadOk = 1;
                 $imageFileType = pathinfo($image_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
// Check if file already exists

                        //check if file directory exist
                 if(!file_exists($path)){
                  mkdir($path, 0777, true);
                }
                if($uploadOk ==0){
                 print "<script>swal({text:'Check The Journal Cover size and the Journal type you are trying to upload', type:'error', title:'Error'}, function(){window.location='';}); </script>";
               } else{
                 if(move_uploaded_file($_FILES["image"]["tmp_name"], $image_file)){
                  if(QueryDB("INSERT INTO journals (jo_name,jo_code,jo_date,jo_vol,jo_num,jo_pub,jo_img,jo_stat) VALUES('$jo_name','$jo_id','".time()."','$jo_vol','$jo_num','$jo_pub','{$image_file}',1) ")){
                    print "<script>swal({text:'Journal Uploaded', type:'success', title:' Successful'}, function(){ window.location = 'manageJournals'}); </script>";
                  }
                } else{
                  print "<script>swal({text:'An Error Occured', type:'danger', title:' Error'}, function(){ window.location = 'manageJournals'}); </script>";
                } 
              }
            }
          }



          ?>
          <?php if(isset($_GET['unlock'])){ $unlock = $_GET['unlock']; QueryDB("UPDATE Articles SET j_avail=1 where id='$unlock' "); print "<script>swal({text:'Article Unlocked', type:'success', title:' Successful'}, function(){ window.location = 'manageArticles'}); </script>";  }      ?>

          <?php if(isset($_GET['lock'])){ $lock = $_GET['lock']; QueryDB("UPDATE Articles SET j_avail=0 where id='$lock' ");
          print "<script>swal({text:'Article Locked', type:'success', title:' Successful'}, function(){ window.location = 'manageArticles'}); </script>"; } ?>

          <?php  if(isset($_GET['dismisslt'])){ $delete = $_GET['dismisslt']; QueryDB("DELETE FROM Articles where id='$delete' LIMIT 1 "); print "<script>swal({text:'Article Deleted', type:'warning', title:' Deleted'}, function(){ window.location = 'manageArticles'}); </script>"; } ?>

          <?php if(isset($_GET['viewArticle'])){ $id = $_GET['id']; $_SESSION['viewArticle'] = $_GET['viewArticle']; header('Location:viewArticle'); } ?>

          <?php if(isset($_GET['editArticle'])){ $_SESSION['editArticle'] = $_GET['editArticle']; header('Location:editArticle'); } ?>

          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
              <div class="card-body">
                <div class="table-responsive">
                  <table id="example" class="table table-striped table-bordered second" style="width:100%">
                    <thead>
                      <tr>
                        <th>S/N</th>
                        <th>Journal</th>
                        <th>Article ID</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Authors</th>
                        <th>Upload Date</th>
                        <th>Availability</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php $sn = 1; 
                      foreach( get_articles() as $row){
                        extract($row); 
                        ?>
                        <tr>
                          <td><?php echo $sn; ?></td>
                          <td><?php echo get_journa_name($j_cat); ?></td>
                          <td><?php echo $j_id; ?></td>
                          <td><img src="<?php echo $j_img; ?>" class="img img-thumbnail img-responsive img-rounded" width="100px"> </td>
                          <td><?php echo $j_title; ?></td>
                          <td><?php echo $j_author; ?></td>
                          <td><?php echo date("M-Y", $j_date).'<br>'.date("h:i:s A", $j_date); ?></td>
                          <td><?php if($j_stat == 1){echo 'Available'; }else{echo "Unavailable"; } ?></td>
                          <td>
                            <div class="hidden-sm hidden-xs action-buttons">
                              <?php if($j_stat == 0){  ?>
                                <a class="btn btn-primary" href="?unlock=<?php echo $id;  ?>&where=<?php echo md5(rand());  ?>" id="status" onclick="return confirm('Make Article Visible?');" data-toggle="tooltip" title="Click to Unblock Article">
                                  <i class="fas fa-lock"></i>
                                  </a><?php } else{  ?>
                                    <a class="btn btn-primary" href="?lock=<?php echo $id;  ?>&where=<?php echo md5(rand());  ?>" id="status" onclick="return confirm('Hide Article?');" data-toggle="tooltip" title="Click to Block Article">
                                      <i class="fas fa-lock-open"></i>
                                    </a>

                                  <?php   }  ?>

                                  <a class="btn btn-info" href="viewArticles?viewArticles=<?php echo $j_id; ?>" data-sfid="<?php echo $id; ?>" data-toggle="tooltip" title="View Article"><i class="fas fa-eye"></i>
                                  </a>
                                  <a class="btn btn-success" href="editArticles?editArticles=<?php echo $j_id; ?>" data-sfid="<?php echo $id; ?>" data-toggle="tooltip" title="Edit Article">
                                    <i class="fas fa-pencil-alt" data-toggle="tooltip" title="Edit Article"></i>
                                  </a>

                                  <a class="btn btn-danger" href="?dismisslt=<?php echo $id;  ?>&where=<?php echo md5(rand());  ?>" id="delLink" onclick="return confirm('Are you sure you want to delete?');" data-toggle="tooltip" title="Delete Article">
                                    <i class="fas fa-trash"></i>
                                  </a>
                                </div>
                              </td>
                            </tr>
                            <?php  $sn++; } ?>



                          </tbody>

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