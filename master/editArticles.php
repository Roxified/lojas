<?php  ob_start(); session_start(); require('../db/config.php'); require('../db/functions.php');
if(isset($_SESSION['admin_id'])){ $admin =  $_SESSION['admin_id']; } else{header('location:login.php');} 


$link = 5; //error_reporting(0); ?>
<!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <?php include('nav/head.php'); ?>
        <title>Edit Article - Spottable Services Admin Dashboard</title>
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
                            <h2 class="pageheader-title">Edit Article</h2>
                            <p class="pageheader-text"></p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="manageArticles" class="breadcrumb-link">Manage Articles</a></li>
                                        <li class="breadcrumb-item"><a href="" class="breadcrumb-link">Edit Article</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <?php if($_GET['editArticles']){ $find_j = QueryDB("SELECT * FROM articles WHERE j_id ='".$_GET['editArticles']."' "); 
                $q = $find_j->fetch(PDO::FETCH_ASSOC);  ?>
                <div class="ecommerce-widget">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-12"><div class="card"><div class="card-body">
                            <form action='' method='POST' role='form' enctype="multipart/form-data">
                                <?php 
                                if(isset($_POST['editj'])){
                                  $where = validate($_POST['where']); 
                                  $j_title = validate($_POST['j_title']); $q0 = str_replace('?', '', $j_title);  $q1 = str_replace('-', '',$q0);  $q2 = str_replace('.', '', $q1);  $q3 = str_replace("'", "", $q2);  $q7 = str_replace(' ', '-', $q3); $q9 = str_replace('!', '', $q7);  $q10 = str_replace('(', '', $q9); $q11 = str_replace(')','', $q10);   $q5 = str_replace(":","",$q11);   $q4 = str_replace("&apos;", "", $q5); $j_link = strtolower(str_replace(",", "", $q4)); 
                                  $j_author = validate($_POST['j_author']);   
                                  $j_abs = validate($_POST['j_abs']);  
                                  $j_ref = validate($_POST['j_ref']);  

                                  $cat = validate($_POST['cat']); 

                                  $path = "journals/".$cat."/";
              //if change of image and pdf
                                  if(empty(basename($_FILES["image"]["name"])) && empty(basename($_FILES["file"]["name"]))){
                                    $image ='No Image';

                                    QueryDB("UPDATE articles SET j_title='$j_title', j_link='$j_link', j_author='$j_author', j_abstract='$j_abs', j_ref='$j_ref', j_cat='$cat'   where j_id='$where' ");
                                    print "<script>swal({text:'Article Modified Without Image and PDF Successfully', type:'success', title:' Successful'}, function(){ window.location = 'manageArticles'}); </script>";
                                } 
              //if not changing pdf and image
                                elseif(empty(basename($_FILES["image"]["name"])) && !empty(basename($_FILES["file"]["name"]))) {

                                    $file = basename($_FILES['file']['name']);
                                    $targetfolder = $path . $file ;
                                    $file_type=$_FILES['file']['type'];
                                    $fileType = strtolower(pathinfo($targetfolder,PATHINFO_EXTENSION));
                                    if($fileType != "doc" && $fileType != "docx" && $fileType != "pdf" && $fileType != "ppt" ) {
                                        print "<script>swal({text:'Not a readable file! Sorry, only DOC, DOCX, PDF & PPT files are allowed.', type:'error', title:'Error'}, function(){window.location='';}); </script>";
                                        $uploadOk = 0;
                                    }
                                    if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetfolder)){
                                        if(QueryDB("UPDATE articles SET j_title='$j_title', j_link='$j_link', j_author='$j_author', j_abstract='$j_abs', j_ref='$j_ref', j_cat='$cat', j_pdf='$targetfolder'   where j_id='$where' ")){
                                            print "<script>swal({text:'Article Modified Without Image Successfully', type:'success', title:' Successful'}, function(){ window.location = 'manageArticles'}); </script>";
                                        }
                                        else{
                                            print "<script>swal({text:'Image Not Uploaded', type:'error', title:'Error'}, function(){ window.location = ''}); </script>";
                                        }
                                    }
                                }
              //if changing image and not pdf
                                else{
                                    $image = basename($_FILES["image"]["name"]);

                                    $image_file = $path . $image;
                                    $uploadOk = 1;
                                    $imageFileType = pathinfo($image_file,PATHINFO_EXTENSION);
                        //check if file directory exist
                                    if(!file_exists($path)){
                                      mkdir($path, 0777, true);
                                  }
                        //check file size

                                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                                      print "<script>swal({text:'Not an Image file! Sorry, only JPG, JPEG, PNG & GIF files are allowed.', type:'error', title:'Error'}, function(){window.location='';}); </script>";
                                      $uploadOk = 0;
                                  } 
                                  if(move_uploaded_file($_FILES["image"]["tmp_name"], $image_file)){
                                    if(QueryDB("UPDATE articles SET j_title='$j_title', j_link='$j_link', j_author='$j_author', j_abstract='$j_abs', j_ref='$j_ref', j_cat='$cat', j_img='$image_file'   where j_id='$where' ")){
                                        print "<script>swal({text:'Article Modified Without PDF Successfully', type:'success', title:' Successful'}, function(){ window.location = 'manageArticles'}); </script>";
                                    }
                                    else{
                                        print "<script>swal({text:'Image Not Uploaded', type:'error', title:'Error'}, function(){ window.location = ''}); </script>";
                                    }
                                }
                            }
                        } 

                        ?>

                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2">
                                <label>Article Title:</label>
                                <input type="text" name="j_title" value="<?php echo $q['j_title']; ?>" placeholder="Article Title" required class="form-control">
                                <input type="hidden" name="where" value="<?php echo $q['j_id']; ?>" class="form-control">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2">
                                <label>Authors:</label>
                                <input type="text" name="j_author" value="<?php echo $q['j_author']; ?>" placeholder="Article Title" required class="form-control">

                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-2">
                                <label>Edit Journal</label>
                                <select name="cat" required="" class="form-control">
                                    <option>Edit Journal</option><?php foreach(get_journal() as $rows){extract($rows); ?><option value="<?php echo $jo_code; ?>" <?php if($q['j_cat'] == $jo_code){echo "selected"; } ?>><?php echo get_journa_name($jo_code); ?></option><?php  } ?> 
                                </select>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2">
                                <img src="<?php echo $q['j_img']; ?>" width="50%">

                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <label>Attached Article:</label>
                                <input type="text" readonly="" value="<?php echo  substr(str_replace('../journals/$jo_cat/','',$q['j_pdf']), 17); ?>" class="form-control" >
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <label>Change Article: </label>
                                <input type="file" name="file" class="form-control">
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2">
                                <label>Abstract: </label>
                                <textarea name="j_abs" id="editor1" required placeholder="Write the j content here" class="form-control"><?php echo $q['j_abstract']; ?></textarea>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2">
                                <label>Reference: </label>
                                <textarea name="j_ref" id="editor2" required class="form-control"><?php echo $q['j_ref']; ?></textarea>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2"><input type="submit" name="editj" class="form-control input-xs btn btn-primary input-xs input-sm" value="Edit Articles"></div></form>
                        <a href="viewArticles?norm=1" class="btn btn-success"> Back to Articles</a>
                        <a href="viewArticles?viewArticles=<?php echo $q['j_id']; ?>" class="btn btn-warning">View Articles</a></div></div></div></div></div><?php  }  ?>

                    </div>
                </div>
                <!-- ============================================================== -->
                <?php include('nav/footer.php'); include('nav/scripts.php'); include('modals.php'); ?>
            </body>

            </html>