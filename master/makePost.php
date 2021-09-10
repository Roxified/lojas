<?php  ob_start(); session_start(); require('../db/config.php'); require('../db/functions.php');
if(isset( $_SESSION['admin_id'])){ $admin =  $_SESSION['admin_id']; } else{header('location:login.php');}
$link = 6;  //error_reporting(0); ?>
<!doctype html>
  <html lang="en">

  <head>
    <!-- Required meta tags -->
    <?php include('nav/head.php'); ?>
    <title>Add Post - LOJAS</title>
  </head>

  <body><div class="dashboard-main-wrapper">
   <?php include('nav/header.php'); ?>
   <?php include('nav/left_sidebar.php'); ?>
   <div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
      <div class="container-fluid dashboard-content ">
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
              <h2 class="pageheader-title">Add New Post </h2>
              <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index" class="breadcrumb-link">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Post</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <?php

        if(isset($_POST['addPost'])){

          $blog_title  = validate($_POST['blog_title']);
          $q0 = str_replace('?', '', $blog_title);

          $q1 = str_replace('-', '',$q0);
          $q2 = str_replace('.', '', $q1);
          $q3 = str_replace("'", "", $q2);
          $q7 = str_replace(' ', '-', $q3);
          $q9 = str_replace('!', '', $q7);
          $q10 = str_replace('(', '', $q9);
          $q11 = str_replace(')', '', $q10);

          $q5 = str_replace(":", "", $q11);
          $q4 = str_replace("&apos;", "", $q5);
          $que = strtolower(str_replace(",", "", $q4));



          $cont     = validate($_POST['cont']);



          $image = basename($_FILES["image"]["name"]);
          $path = "post/";
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
          } if(move_uploaded_file($_FILES["image"]["tmp_name"], $image_file)){

            if(QueryDB("INSERT INTO `blog` (blog_title, blog_link, blog_img,  blog_cont, blog_date, blog_status) VALUES('{$blog_title}','{$que}','{$image_file}','{$cont}','".time()."',1) ")){
              print "<script>swal({text:'Post Uploaded Successfully', type:'success', title:' Successful'}, function(){ window.location = 'managePosts'}); </script>";
            }
            else{
              print "<script>swal({text:'Post Not Uploaded', type:'error', title:'Error'}, function(){ window.location = ''}); </script>";
            }
          }

        }



                            // book
        ?>


        <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="card">
              <div class="card-body">
                <form action='' method='POST' role='form' enctype="multipart/form-data">
                  <div class="form-group">
                    <label>Enter Post Title: </label>
                    <input type="text" name="blog_title" placeholder="Enter Post Title" required class="form-control">

                  </div>

                  <div class="form-group">
                    <label>Insert Post Image: </label>
                    <input type="file" name="image" class="form-control">
                  </div>


                  <div class="form-group">
                    <label>Post Contents: </label>
                    <textarea name="cont" id="editor1" required placeholder="Write the post content here" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" name="addPost" class="form-control input-xs btn btn-primary input-xs input-sm" value="Add Post">
                  </div>
                </form>

                <!--end of Books-->

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
    <?php include('nav/footer.php'); include('nav/scripts.php'); include('modals.php'); ?>
  </body>

  </html>