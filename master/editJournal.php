<?php  ob_start(); session_start(); require('../db/config.php'); require('../db/functions.php');
if(isset($_SESSION['admin_id'])){ $admin =  $_SESSION['admin_id']; } else{header('location:login.php');} 


$link = 4; //error_reporting(0); ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <?php include('nav/head.php'); ?>
    <title>Edit Book - Spottable Services</title>
</head>

<body>
   <div class="dashboard-main-wrapper">
     <?php include('nav/header.php'); ?>
     <?php include('nav/left_sidebar.php'); ?>
     <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <?php if(isset($_SESSION['editBook'])){ $find_post = QueryDB("SELECT * FROM books WHERE book_id ='".$_SESSION['editBook']."' "); $querypost = $find_post->fetch(PDO::FETCH_ASSOC);    ?>
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
                <?php if(isset($_GET['viewBook'])){ $_SESSION['viewBook'] = $_GET['viewBook']; header('location:viewBook'); die(); } ?>
                <div class="ecommerce-widget">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                   <form action='editBook' method='POST' role='form' enctype="multipart/form-data">
                                    <?php 
                                    if(isset($_POST['edit'])){
                                      $where = validate($_POST['where']); 
                                      $title = validate($_POST['title']);  
                                      $author = validate($_POST['author']);   
                                      $desc = validate($_POST['desc']);  
                                      $name = validate($_POST['name']);
                                      $name2     = validate(get_author_name_from_code($_POST['name']));
                                      $price = validate($_POST['price']); 
                                      $cat = validate($_POST['cat']); 
              //if change of image and pdf
                                      if(empty(basename($_FILES["image"]["name"])) && empty(basename($_FILES["file"]["name"]))){
                                        $image ='No Image';

                                        QueryDB("UPDATE books SET book_name='$title', about_author='$author', book_price='$price', book_author ='$name2', author_id='$name', book_desc='$desc', book_cat='$cat' where book_id='$where' ");
                                        print "<script>swal({text:'Book Modified Without Image and PDF Successfully', type:'success', title:' Successful'}, function(){ window.location = 'manageBooks'}); </script>";
                                    } 
              //if not changing pdf and image
                                    elseif(empty(basename($_FILES["image"]["name"])) && !empty(basename($_FILES["file"]["name"]))) {

                                        $file = basename($_FILES['file']['name']);
                                        $path = 'books/'.$book_id.'/';
                                        $targetfolder = $path . $file ;
                                        $file_type=$_FILES['file']['type'];
                                        $fileType = strtolower(pathinfo($targetfolder,PATHINFO_EXTENSION));

                                        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetfolder)){
                                            if(QueryDB("UPDATE books SET  book_path='$targetfolder',book_name='$title', about_author='$author', book_price='$price', book_author ='$name2', author_id='$name', book_desc='$desc', book_cat='$cat'  where book_id='$where' ")){
                                                print "<script>swal({text:'Book Modified Without Image Successfully', type:'success', title:' Successful'}, function(){ window.location = 'manageBooks'}); </script>";
                                            }
                                            else{
                                                print "<script>swal({text:'Image Not Uploaded', type:'error', title:'Error'}, function(){ window.location = ''}); </script>";
                                            }
                                        }
                                    }
              //if changing image and not pdf
                                    else{
                                        $image = basename($_FILES["image"]["name"]);
                                        $path = "books/".$book_id."/";
                                        $image_file = $path . $image;
                                        $uploadOk = 1;
                                        $imageFileType = pathinfo($image_file,PATHINFO_EXTENSION);
                        //check if file directory exist
                                        if(!file_exists($path)){
                                          mkdir($path, 0777, true);
                                      }
                        //check file size
                                      if ($_FILES["image"]["size"] > 50000) {
                                          print "<script>swal({text:'Image Size too Large! Upload an image less than 500kb', type:'error', title:'Error'}, function(){window.location='';}); </script>";
                                          $uploadOk = 0;
                                      }
                                      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                                          print "<script>swal({text:'Not an Image file! Sorry, only JPG, JPEG, PNG & GIF files are allowed.', type:'error', title:'Error'}, function(){window.location='';}); </script>";
                                          $uploadOk = 0;
                                      } 
                                      if(move_uploaded_file($_FILES["image"]["tmp_name"], $image_file)){
                                        if(QueryDB("UPDATE books SET book_img='$image_file',book_name='$title', about_author='$author', book_price='$price', book_author ='$name2', author_id='$name', book_desc='$desc', book_cat='$cat' where book_id='$where' ")){
                                            print "<script>swal({text:'Book Modified Without PDF Successfully', type:'success', title:' Successful'}, function(){ window.location = 'manageBooks'}); </script>";
                                        }
                                        else{
                                            print "<script>swal({text:'Image Not Uploaded', type:'error', title:'Error'}, function(){ window.location = ''}); </script>";
                                        }
                                    }
                                }
                            } 
                            ?>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <label>Edit Book Title: </label>
                                    <input type="text" name="title" value="<?php echo $querypost['book_name']; ?>" placeholder="Edit Book Title" required class="form-control">
                                    <input type="hidden" name="where" value="<?php echo $_SESSION['editBook']; ?>">
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                  <label>Select Book Author: </label>
                                  <select name="name" required="" class="form-control">
                                    <option>Select Author</option><?php foreach(QueryDB("SELECT * FROM author ") as $rows){extract($rows); ?>
                                        <option value="<?php echo $author_id; ?>" <?php if($querypost['book_author'] == $author_name){echo "selected"; } ?>><?php echo $author_name ?></option>
                                    <?php  } ?>
                                </select>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                              <label>Select Book Category: </label>
                              <select name="cat" required="" class="form-control">
                                <option>Select Book Category</option><?php foreach(QueryDB("SELECT * FROM book_cat ") as $rows){extract($rows); ?>
                                    <option value="<?php echo $buk_code; ?>" <?php if($querypost['book_cat'] == $buk_code){echo "selected"; } ?>><?php echo $buk_cat ?></option>
                                <?php  } ?>
                            </select>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <label>Edit Book Price: </label>
                            <input type="number" name="price" value="<?php echo $querypost['book_price']; ?>" required class="form-control">
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <img src="<?php echo str_replace('../master/','',$querypost['book_img']); ?>" width="200px">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <label>Edit Book Cover: </label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <label>Attached Book:</label>
                            <input type="text" readonly="" value="<?php echo  substr(str_replace('../master/','',$querypost['book_path']), 14); ?>" class="form-control" >
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <label>Edit Book: </label>
                            <input type="file" name="file" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label>Edit Book Description: </label>
                            <textarea name="desc" id="editor1" required placeholder="Write the post content here" class="form-control"><?php echo $querypost['book_desc']; ?></textarea>
                        </div>
                        <div class="col-md-12">
                            <label>Edit About Author: </label>
                            <textarea name="author" id="editor2" required placeholder="Write the post content here" class="form-control"><?php echo $querypost['about_author']; ?></textarea>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
                        <input type="submit" name="edit" class="form-control input-xs btn btn-primary input-xs input-sm" value="Edit Book">
                    </div>
                </form>
                <a href="manageBooks" class="btn btn-success">Manage Book</a>
                <a href="?viewBook=<?php echo $querypost['book_id']; ?>" class="btn btn-warning">View Book</a>

                <!-- <a href="managePosts" class="btn btn-primary">Edit</a> -->
            </div>
        </div>
    </div>

</div>
</div>

<?php  }  ?>
</div>
</div>
<!-- ============================================================== -->
<?php include('nav/footer.php'); include('nav/scripts.php'); include('modals.php'); ?>
</body>

</html>