<?php  ob_start(); session_start(); require('../db/config.php'); require('../db/functions.php');
if(isset($_SESSION['admin_id'])){ $admin =  $_SESSION['admin_id']; } else{header('location:login.php');} 


$link = 6; error_reporting(0); ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <?php include('nav/head.php'); ?>
    <title>Edit Post - Spottable Services Admin Dashboard</title>
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
                        <h2 class="pageheader-title">Edit Post</h2>
                        <p class="pageheader-text"></p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="managePosts" class="breadcrumb-link">Manage Post</a></li>
                                    <li class="breadcrumb-item"><a href="" class="breadcrumb-link">Edit Post</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <?php if($_GET['editPost']){ $find_post = QueryDB("SELECT * FROM posts WHERE post_id ='".$_GET['editPost']."' "); 
            $querypost = $find_post->fetch(PDO::FETCH_ASSOC);  ?>
            <div class="ecommerce-widget"><div class="row"><div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12"><div class="card"><div class="card-body"><form action='' method='POST' role='form' enctype="multipart/form-data">
                <?php if(isset($_POST['editPost'])){$post_title = validate($_POST['post_title']); $q0 = str_replace('?', '', $post_title);

                $q1 = str_replace('-', '',$q0);
                $q2 = str_replace('.', '', $q1);
                $q3 = str_replace("'", "", $q2);
                $q7 = str_replace(' ', '-', $q3);
                $q9 = str_replace('!', '', $q7);
                $q10 = str_replace('(', '', $q9);
                $q11 = str_replace(')', '', $q10);

                $q5 = str_replace(":", "", $q11);
                $q4 = str_replace("&apos;", "", $q5);
                $que = strtolower(str_replace(",", "", $q4)); $where = validate($_POST['where']); $cat = validate($_POST['cat']); $cont = validate($_POST['cont']); $_SESSION['viewPost'] = $where;
                if(empty(basename($_FILES["image"]["name"]))){ $image ='No Image'; QueryDB("UPDATE posts SET post_title = '$post_title', post_link='$que', post_content='$cont', post_cat='$cat', post_date ='".time()."' where post_id= '$where'  ");
                print "<script>swal({text:'Post Updated without Image', type:'success', title:' Successful'}); </script>";
                header('location:viewPost?viewPost='.$where);
            } else{ $image = basename($_FILES["image"]["name"]); $path = "post/".$post_id."/"; $image_file = $path . $image; $uploadOk = 1; $imageFileType = pathinfo($image_file,PATHINFO_EXTENSION); if(!file_exists($path)){ mkdir($path, 0777, true); }
            if ($_FILES["image"]["size"] > 50000) { print "<script>swal({text:'Image Size too Large! Upload an image less than 500kb', type:'error', title:'Error'}, function(){window.location='';}); </script>"; $uploadOk = 0; }
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) { print "<script>swal({text:'Not an Image file! Sorry, only JPG, JPEG, PNG & GIF files are allowed.', type:'error', title:'Error'}, function(){window.location='';}); </script>";
            $uploadOk = 0; } if(move_uploaded_file($_FILES["image"]["tmp_name"], $image_file)){  if(QueryDB("UPDATE posts SET post_title = '$post_title', post_link='$que', post_content='$cont', post_cat='$cat', post_date ='".time()."', post_img='$image_file' where post_id= '$where'  ")){ print "<script>swal({text:'Post Updated with Image', type:'success', title:' Successful'}); </script>"; header('location:viewPost?viewPost='.$where);  }
            else{ print "<script>swal({text:'Image Not Uploaded', type:'error', title:'Error'}, function(){ window.location = ''}); </script>"; } } } } ?>
            <div class="row"><div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12 mb-2"> <label>Enter Post Title:</label><input type="text" name="post_title" value="<?php echo $querypost['post_title']; ?>" placeholder="Enter Post Title" required class="form-control"><input type="hidden" name="where" value="<?php echo $querypost['post_id']; ?>" class="form-control"></div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 mb-2"><label>Select Category</label><select name="cat" required="" class="form-control"><option>Selcet Category</option><?php foreach(get_cat() as $rows){extract($rows); ?><option value="<?php echo $cat_id; ?>" <?php if($querypost['post_cat'] == $cat_id){echo "selected"; } ?>><?php echo $cat_name ?></option><?php  } ?> </select>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2"><img src="<?php echo $querypost['post_img']; ?>" width="100%"></div>
            <div class="col-xl-6 col-lg-6 col-md-6"> <label>Insert Post Image: </label><input type="file" name="image" class="form-control">
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2"><label>Post Contents: </label><textarea name="cont" id="editor1" required placeholder="Write the post content here" class="form-control"><?php echo $querypost['post_content']; ?></textarea>
            </div></div><div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2"><input type="submit" name="editPost" class="form-control input-xs btn btn-primary input-xs input-sm" value="Edit Post"></div></form>
            <a href="managePosts?norm=1" class="btn btn-success">Back to Posts</a><a href="?viewPost=<?php echo $querypost['post_id']; ?>" class="btn btn-warning">View Post</a></div></div></div></div></div><?php  }  ?>

            <?php if($_GET['quote']){ $find_post = QueryDB("SELECT * FROM quotes WHERE quote_id ='".$_GET['quote']."' "); 
            $querypost = $find_post->fetch(PDO::FETCH_ASSOC);  ?>
            <div class="ecommerce-widget"><div class="row"><div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12"><div class="card"><div class="card-body"><form action='' method='POST' role='form'>
                <?php if(isset($_POST['editQuote'])){$quote_title = validate($_POST['quote_title']);         
                $q0 = str_replace('?', '', $quote_title);

                $q1 = str_replace('-', '',$q0);
                $q2 = str_replace('.', '', $q1);
                $q3 = str_replace("'", "", $q2);
                $q7 = str_replace(' ', '-', $q3);
                $q9 = str_replace('!', '', $q7);
                $q10 = str_replace('(', '', $q9);
                $q11 = str_replace(')', '', $q10);

                $q5 = str_replace(":", "", $q11);
                $q4 = str_replace("&apos;", "", $q5);
                $que = strtolower(str_replace(",", "", $q4));$cont = validate($_POST['cont']); $where = validate($_POST['where']);  $link = $_POST['link'];
                if(QueryDB("UPDATE quotes SET quote_title = '$quote_title', quote_link='$que', quote_content='$cont', quote_img='$link',  quote_date ='".time()."' where quote_id= '$where'  ")){
                    print "<script>swal({text:'Quotes & Anime Updated', type:'success', title:' Successful'}); </script>";
                    header('location:viewPost?quote='.$where);
                }  } ?>
                <div class="row"><div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12 mb-2"> <label>Edit Quotes & Anime Title:</label><input type="text" name="quote_title" value="<?php echo $querypost['quote_title']; ?>" placeholder="Edit Quotes & Anime Title" required class="form-control"><input type="text" name="where" value="<?php echo $querypost['quote_id']; ?>" class="form-control"></div>
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12 mb-2"> <label>Edit Link:</label><textarea name="link" rows="3" required class="form-control"><?php echo $querypost['quote_img']; ?></textarea></div> <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2"><label>Edit Quotes & Anime Contents: </label><textarea name="cont" id="editor1" required placeholder="Write the post content here" class="form-control"><?php echo $querypost['quote_content']; ?></textarea>
                </div>
            </div><div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2"><input type="submit" name="editQuote" class="form-control input-xs btn btn-primary input-xs input-sm" value="Edit Quote & Anime"></div></form>
            <a href="managePosts?norm=2" class="btn btn-success">Back to Posts</a><a href="viewPost?quote=<?php echo $querypost['quote_id']; ?>" class="btn btn-warning">View Quote </a></div></div></div></div></div><?php  }  ?>


            <?php if($_GET['pod']){ $find_post = QueryDB("SELECT * FROM pods WHERE pod_id ='".$_GET['pod']."' "); 
            $querypost = $find_post->fetch(PDO::FETCH_ASSOC);  ?>
            <div class="ecommerce-widget"><div class="row"><div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12"><div class="card"><div class="card-body"><form action='' method='POST' role='form'>
                <?php if(isset($_POST['editPod'])){$pod_title = validate($_POST['pod_title']);         $q0 = str_replace('?', '', $pod_title);

                $q1 = str_replace('-', '',$q0);
                $q2 = str_replace('.', '', $q1);
                $q3 = str_replace("'", "", $q2);
                $q7 = str_replace(' ', '-', $q3);
                $q9 = str_replace('!', '', $q7);
                $q10 = str_replace('(', '', $q9);
                $q11 = str_replace(')', '', $q10);
                $q5 = str_replace(":", "", $q11);
                $q4 = str_replace("&apos;", "", $q5);
                $que = strtolower(str_replace(",", "", $q4)); $cont = validate($_POST['cont']); $where = validate($_POST['where']);  $link = $_POST['link'];
                if(QueryDB("UPDATE pods SET pod_title = '$pod_title', pod_link='$que', pod_img='$link', pod_content='$cont',  pod_date ='".time()."' where pod_id= '$where'  ")){
                    print "<script>swal({text:'Podcast Updated', type:'success', title:' Successful'}); </script>";
                    header('location:viewPost?pod='.$where);
                }  } ?>
                <div class="row"><div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2"> <label>Edit Podcast  Title:</label><input type="text" name="pod_title" value="<?php echo $querypost['pod_title']; ?>" placeholder="Edit Quotes & Anime Title" required class="form-control"><input type="hidden" name="where" value="<?php echo $querypost['pod_id']; ?>" class="form-control"></div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2"> <label>Edit Podcast Link:</label><textarea name="link" rows="3" required class="form-control"><?php echo $querypost['pod_img']; ?></textarea></div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2"><label>Edit Podcast Contents: </label><textarea name="cont" id="editor1" required placeholder="Write the post content here" class="form-control"><?php echo $querypost['pod_content']; ?></textarea>
                </div>
            </div><div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2"><input type="submit" name="editPod" class="form-control input-xs btn btn-primary input-xs input-sm" value="Edit Podcast"></div></form>
            <a href="managePosts?norm=3" class="btn btn-success">Back to Podcasts</a><a href="viewPost?pod=<?php echo $querypost['pod_id']; ?>" class="btn btn-warning">View Podcast </a></div></div></div></div></div><?php  }  ?>
        </div>
    </div>
    <!-- ============================================================== -->
    <?php include('nav/footer.php'); include('nav/scripts.php'); include('modals.php'); ?>
</body>

</html>