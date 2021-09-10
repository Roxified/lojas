<?php  ob_start(); session_start(); require('../db/config.php'); require('../db/functions.php');
if(isset( $_SESSION['admin_id'])){ $admin =  $_SESSION['admin_id']; } else{header('location:login.php');}
$link = 5; //error_reporting(0); ?>
<!doctype html>
  <html lang="en">

  <head>
    <!-- Required meta tags -->
    <?php include('nav/head.php'); ?>
    <title>Add Article - LOJAS</title>
  </head>

  <body>
   <div class="dashboard-main-wrapper">
    <?php include('nav/header.php'); ?>
    <?php include('nav/left_sidebar.php'); ?>
    <div class="dashboard-wrapper">
      <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
         <div class="row">
          <div class="col-md-6 col-sm-12 col-12">
            <div class="page-header">
              <h2 class="pageheader-title">Upload new Article</h2>

              <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index" class="breadcrumb-link">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Article</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="card-body border-top">
            <h2>Upload Article To Journal</h2>
          </div>
        </div>
        <div class="row">
          <?php if(isset($_POST['addJournal'])){

            $j_title  = validate($_POST['j_title']); $q0 = str_replace('?', '', $j_title);  $q1 = str_replace('-', '',$q0);  $q2 = str_replace('.', '', $q1);  $q3 = str_replace("'", "", $q2);  $q7 = str_replace(' ', '-', $q3); $q9 = str_replace('!', '', $q7);  $q10 = str_replace('(', '', $q9); $q11 = str_replace(')','', $q10);   $q5 = str_replace(":","",$q11);   $q4 = str_replace("&apos;", "", $q5); $j_link = strtolower(str_replace(",", "", $q4));
            $j_id    = validate($_POST['j_id']);
            $author   = ($_POST['author']);
            
            $j_vol    = $_POST['j_vol'];
            $j_abs    = ($_POST['j_abs']);
            $j_ref    = ($_POST['j_ref']);
            $j_abs    = ($_POST['j_abs']);
                           // echo  $author     = validate($_POST['author']);

            $image = basename($_FILES["image"]["name"]);
            $path = "journals/".$j_vol."/";
            $image_file = $path . $image;
            $uploadOk = 1;
            $imageFileType = pathinfo($image_file,PATHINFO_EXTENSION);

            $file = basename($_FILES['file']['name']);
            $targetfolder = $path . $file ;
            $file_type=$_FILES['file']['type'];
            $fileType = strtolower(pathinfo($targetfolder,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
// Check if file already exists

                        //check if file directory exist
            if(!file_exists($path)){
              mkdir($path, 0777, true);
            }
            if($uploadOk ==0){
             print "<script>swal({text:'Check The Journal Cover size and the Journal type you are trying to upload', type:'error', title:'Error'}, function(){window.location='';}); </script>";
           } else{
             if(move_uploaded_file($_FILES["image"]["tmp_name"], $image_file) && move_uploaded_file($_FILES["file"]["tmp_name"], $targetfolder)){
              if(QueryDB("INSERT INTO `articles` (j_id, j_title,j_link,j_img,j_abstract,j_ref,j_pdf,j_author,j_cat,j_date,j_stat) VALUES('{$j_id}','{$j_title}','{$j_link}','{$image_file}','{$j_abs}','{$j_ref}','{$targetfolder}','{$author}','{$j_vol}','".time()."',1) ")){
                print "<script>swal({text:'Journal Uploaded Successfully', type:'success', title:' Successful'}, function(){ window.location = 'manageArticles'}); </script>";
              }
              else{
                print "<script>swal({text:'Journal Not Uploaded', type:'error', title:'Error'}, function(){ window.location = ''}); </script>";
              }
            }
            else{
              echo "Image was not moved";
            }
          }   

        }
        // Journal
        ?>

        <div class="col-md-12">
         <div class="card">
           <div class="card-body">

            <!-- Add Post  -->

            <form action='' method='POST' role='form' enctype="multipart/form-data">
              <div class="row">
                <div class="form-group col-xl-12 col-lg-12 col-md-6">
                  <label>Enter Article Title: </label>
                  <input type="text" name="j_title" placeholder="Enter Article Title" required class="form-control">
                  <input type="hidden" name="j_id"  value="<?php echo d_code(); ?>" class="form-control">
                </div>
                <div class="col-xl-12 col-lg-12 col-md-6">
                  <label>Article Author: </label>
                  <input type="text" name="author" placeholder="Enter Authors name" required="" class="form-control">
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4">
                  <label>Select Journal: </label>
                  <select name="j_vol"  class="form-control">
                    <option value="">Select Journal Volume</option><?php foreach(QueryDB("SELECT * FROM journals ") as $rows){extract($rows); ?>
                      <option value="<?php echo $jo_code; ?>"><?php echo $jo_name ?></option>
                    <?php  } ?>
                  </select>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                  <label>Insert Article Cover: </label>
                  <input type="file" name="image" required placeholder="Enter Article Author" class="form-control">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                  <label>Insert Article: </label>
                  <input type="file" name="file" required placeholder="Enter Article Author" class="form-control">
                </div>
                <div class="col-12">
                  <label>Article Abstract: </label>
                  <textarea name="j_abs" required placeholder="Write a Brief Discription about the Article" id="editor1" class="form-control"></textarea>
                </div>
                <div class="col-12">
                  <label>Article Reference: </label>
                  <textarea name="j_ref" required placeholder="Write a Brief Discription about the Article" id="editor2" class="form-control"></textarea>
                </div>

              </div>
              <div class="col-xl-6 col-lg-6 col-md-6">
                <input type="submit" name="addJournal" class="form-control input-xs btn btn-primary input-xs input-sm" value="Add Article">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- ============================================================== -->
<?php include('nav/footer.php'); include('nav/scripts.php'); include('modals.php'); ?>
</body>

</html>