<?php  ob_start(); session_start(); require('../db/config.php'); require('../db/functions.php');
if(isset( $_SESSION['admin_id'])){ $admin =  $_SESSION['admin_id']; } else{header('location:login.php');}
$link = 9; error_reporting(0);
$suber = 0; ?>
<!doctype html>
  <html lang="en">

  <head>
    <!-- Required meta tags -->
    <?php include('nav/head.php'); ?>
    <title>Submitted Publications - LOJAS</title>
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
                  <h2 class="pageheader-title">Submitted Publications</h2>
                  <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Submitted Publications</li>
                      </ol>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <?php if(isset($_POST['addJournal'])){
                $subm_name = $_POST['subm_name'];
                $subm_id = $_POST['subm_id'];
                $subm_vol = $_POST['subm_vol'];
                $subm_num = $_POST['subm_num'];
                $subm_pub = $_POST['subm_pub'];


                if(QueryDB("SELECT COUNT(*) FROM journals WHERE subm_name='$subm_name' and subm_vol='$subm_vol' and subm_num='$subm_name' ")->fetchColumn()>0){
                  print "<script>swal({text:'Journal Already Exist', type:'warning', title:' Duplicate Found'}, function(){ window.location = 'manageJournals'}); </script>";
                } else{

                 $image = basename($_FILES["image"]["name"]);
                 $path = "journals/".$subm_id."/";
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
                  if(QueryDB("INSERT INTO journals (subm_name,subm_code,subm_date,subm_vol,subm_num,subm_pub,subm_img,subm_stat) VALUES('$subm_name','$subm_id','".time()."','$subm_vol','$subm_num','$subm_pub','{$image_file}',1) ")){
                    print "<script>swal({text:'Journal Uploaded', type:'success', title:' Successful'}, function(){ window.location = 'manageJournals'}); </script>";
                  }
                } else{
                  print "<script>swal({text:'An Error Occured', type:'danger', title:' Error'}, function(){ window.location = 'manageJournals'}); </script>";
                } 
              }
            }
          }



          ?>
          <?php if(isset($_GET['approval'])){ $unlock = $_GET['approval']; QueryDB("UPDATE submission SET subm_stat=1 where id='$unlock' "); print "<script>swal({text:'Journal Approved', type:'success', title:' Successful'}, function(){ window.location = 'submittedPub?suber=0'}); </script>";  }      ?>

          <?php if(isset($_GET['disapproval'])){ $lock = $_GET['disapproval']; QueryDB("UPDATE submission SET subm_stat=0 where id='$lock' ");
          print "<script>swal({text:'Journal disapproved', type:'success', title:' Successful'}, function(){ window.location = 'submittedPub?suber=0'}); </script>"; } ?>

          <?php  if(isset($_GET['dismisslt'])){ $delete = $_GET['dismisslt']; QueryDB("DELETE FROM Journals where id='$delete' LIMIT 1 "); print "<script>swal({text:'Journal Deleted', type:'warning', title:' Deleted'}, function(){ window.location = 'manageJournals'}); </script>"; } ?>

          <?php if(isset($_GET['viewJournal'])){ $id = $_GET['id']; $_SESSION['viewJournal'] = $_GET['viewJournal']; header('Location:viewJournal'); } ?>


          <?php foreach(QueryDB("SELECT * FROM subm_cat ") as $ct){extract($ct); ?>

            <a href="submittedPub?suber=<?php echo $subm_code; ?>" class="btn btn-primary"> <?php echo $subm_name;  ?> </a>
          <?php } ?>

          <?php  if(isset($_GET['suber'])){ //echo $subm_code;  ?>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="card">
                <div class="card-header"><h3>All Submitted <?php echo get_subm_name($_GET['suber']); ?></h3> </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered second" style="width:100%">
                      <thead>
                        <tr>
                          <th>S/N</th>
                          <th> ID</th>
                          <th>Title</th>
                          <th>Email</th>
                          <th>Author</th>
                          <th>Phone</th>
                          <th>Category</th>
                          <th>Description</th>
                          <th>Submisison Date</th>
                          <th>Status</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php $sn = 1; 
                        foreach( QueryDB("SELECT * FROM submission where subm_cat ='".$_GET['suber']."' ") as $row){
                          extract($row); 
                          ?>
                          <tr>
                            <td><?php echo $sn; ?></td>
                            <td><?php echo $subm_id; ?></td>

                            <td><?php echo $subm_title; ?></td>
                            <td><?php echo $subm_email; ?></td>
                            <td><?php echo $subm_author; ?></td>
                            <td><?php echo $subm_phone; ?></td>
                            <td><?php echo get_subm_name($subm_cat); ?></td>
                            <td><?php echo $subm_note; ?></td>

                            <td><?php echo date("M-Y", $subm_date).'<br>'.date("h:i:s A", $subm_date); ?></td>
                            <td><?php if($subm_stat == 1){echo 'Approved'; }else{echo "Disapproved"; } ?></td>
                            <td>
                              <div class="hidden-sm hidden-xs action-buttons">
                                <?php if($subm_stat == 0){  ?>
                                  <a class="btn btn-primary" href="?approval=<?php echo $id;  ?>&where=<?php echo md5(rand());  ?>" id="status" onclick="return confirm('Make Journal Visible?');" data-toggle="tooltip" title="Approve Journal">
                                    <i class="fas fa-check"></i>
                                    </a><?php } else{  ?>
                                      <a class="btn btn-danger" href="?disapproval=<?php echo $id;  ?>&where=<?php echo md5(rand());  ?>" id="status" onclick="return confirm('Disapprove Journal?');" data-toggle="tooltip" title="Disapprove Journal"><i class="fas fa-ban"></i></a>

                                    <?php   }  ?>

                                    <a class="btn btn-info" href="viewJournal?viewSubmission=<?php echo $subm_id; ?>" data-sfid="<?php echo $id; ?>" data-toggle="tooltip" title="View Journal"><i class="fas fa-eye"></i>
                                    </a>

                                <!--   <a class="btn btn-success" href="?editJournal=<?php //echo $subm_code; ?>" data-sfid="<?php //echo $id; ?>" data-toggle="tooltip" title="Edit Journal">
                                    <i class="fas fa-pencil-alt" data-toggle="tooltip" title="Edit Journal"></i>
                                  </a>

                                  <a class="btn btn-danger" href="?dismisslt=<?php //echo $id;  ?>&where=<?php //echo md5(rand());  ?>" id="delLink" onclick="return confirm('Are you sure you want to delete?');" data-toggle="tooltip" title="Delete Journal">
                                    <i class="fas fa-trash"></i>
                                  </a> -->
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
              <?php  }// } ?>
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