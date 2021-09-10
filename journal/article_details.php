<?php ob_start(); session_start(); require('../db/config.php'); require('../db/functions.php'); 

$get_title = $_REQUEST['link'];

$_SESSION['articles'] = $get_title;

//echo "this is the user_code: ". $_SESSION['usercode'];
$find_title = QueryDB("SELECT * FROM  articles WHERE j_id ='".$_SESSION['articles']."'  ");
//$find_title = QueryDB("SELECT * FROM  articles WHERE j_id ='$get_title'  ");
$q = $find_title->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>

  <title><?php echo $q['j_title']; ?> - Lokoja Journal Of Applied Sciences</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">

  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- site icons -->
  <link rel="icon" href="../../images/lojas.jpg" type="image/gif" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="../../css/bootstrap.min.css" />
  <!-- Site css -->
  <link rel="stylesheet" href="../../css/style.css" />
  <!-- responsive css -->
  <link rel="stylesheet" href="../../css/responsive.css" />
  <!-- colors css -->
  <link rel="stylesheet" href="../../css/colors1.css" />
  <!-- custom css -->
  <link rel="stylesheet" href="../../css/custom.css" />
  <!-- wow Animation css -->
  <link rel="stylesheet" href="../../css/animate.css" />
  <!-- revolution slider css -->
  <link rel="stylesheet" type="text/css" href="../../revolution/css/settings.css" />
  <link rel="stylesheet" type="text/css" href="../../revolution/css/layers.css" />
  <link rel="stylesheet" type="text/css" href="../../revolution/css/navigation.css" />
</head>
<body id="default_theme" class="it_shop_detail">
  <!-- loader -->
  <!--   <div class="bg_load"> <img class="loader_animation" src="../images/loaders/loader_1.png" alt="#" /> </div> -->
  <!-- end loader -->
  <?php include('header2.php'); ?>
  <!-- inner page banner -->
  <div id="inner_banner" class="section inner_banner_section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="full">
            <div class="title-holder">
              <div class="title-holder-cell text-left">
                <!-- <h1 class="page-title">Shop Detail</h1> -->
                <ol class="breadcrumb">
                  <li><a href="../../index">Home</a></li>
                  <li><a href="../../journals">Journals</a></li>
                  <li class="active"><?php echo $q['j_title']; ?></li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end inner page banner -->
  <!-- section -->
  <div class="section padding_layout_1 product_detail">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="row">
            <div class="col-xl-6 col-lg-12 col-md-12">
              <div class="product_detail_feature_img hizoom hi2">
                <div class='hizoom hi2'> <img src="../../master/<?php echo $q['j_img']; ?>" alt="#"  width="100%"> </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-12 col-md-12 product_detail_side detail_style1">
              <div class="product-heading">
                <h2><?php echo $q['j_title']; ?></h2>
              </div>
              <div class="product-detail-side"><p><b>Authors:</b> <?php  echo $q['j_author']; ?></p> </div>
              <div class="detail-contant">
                <a href="../../master/<?php echo $q['j_pdf']; ?>" download class="btn btn-success"><i class="fa fa-download"></i> pdf</a>
                <a href="../../master/<?php echo $q['j_pdf']; ?>" class="btn btn-secondary"><i class="fa fa-file"></i> read</a>

              </div>
              <div class="share-post"> <a href="#" class="share-text">Share</a>
                <ul class="social_icons">
                  <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="full">
                <div class="tab_bar_section">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#description">Abstract</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#reference">References</a> </li>
                    
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#reviews">Reviews</a> </li>
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div id="description" class="tab-pane active">
                      <div class="product_desc">
                        <?php echo htmlspecialchars_decode($q['j_abstract']); ?>
                      </div>
                    </div>

                    <div id="reference" class="tab-pane fade">
                      <div class="product_desc">
                        <?php echo htmlspecialchars_decode($q['j_ref']); ?>
                      </div>
                    </div>

                    <div id="reviews" class="tab-pane fade">
                      <div class="product_review">
                        <h3>Reviews (2)</h3>
                        
                        
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="full review_bt_section">
                              <div class="float-right"> <a class="btn sqaure_bt" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Leave a Review</a> </div>
                            </div>
                            <div class="full">
                              <div id="collapseExample" class="full collapse commant_box">
                                <form accept-charset="UTF-8" action="" method="post">
                                  <input id="ratings-hidden" name="rating" type="hidden">
                                  <textarea class="form-control animated" cols="50" id="new-review" name="comment" placeholder="Enter your review here..." required=""></textarea>
                                  <div class="full_bt center">
                                    <button class="btn sqaure_bt" type="submit">Save</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="full">
                <div class="main_heading text_align_left" style="margin-bottom: 35px;">
                  <h3>Related Articles</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <?php foreach(QueryDB("SELECT * FROM articles where j_cat ='".$_SESSION['code']."'  ") as $rows){extract($rows); ?>
              <div class="col-md-3 col-sm-6 col-xs-12 margin_bottom_30_all">
                <div class="product_list">
                  <div class="product_img"> <img class="img-responsive" src="../../master/<?php echo $j_img; ?>" alt=""> </div>
                  <div class="product_detail_btm">
                    <div class="center">
                      <h4><a href="../../journal/<?php echo $j_id;  ?>/<?php echo strtolower(str_replace(' ', '-', $j_link)); ?>"><?php echo $j_title; ?></a></h4>
                    </div>


                  </div>
                </div>
              </div>
            <?php  } ?>

          </div>
        </div>
        <div class="col-md-3">
          <div class="side_bar">
            <div class="side_bar_blog">
              <h4>SEARCH</h4>
              <div class="side_bar_search">
                <div class="input-group stylish-input-group">
                  <input class="form-control" placeholder="Search" type="text">
                  <span class="input-group-addon">
                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                  </span> </div>
                </div>
              </div>
              <div class="side_bar_blog">
                <h4>Submit Publication</h4>
                <p>You can add your publications with LOJAS.</p>
                <a class="btn sqaure_bt" href="#">Find Out</a> </div>
                <div class="side_bar_blog">
                  <h4>RECENT Articles</h4>
                  <div class="categary">
                    <ul>
                      <?php foreach(QueryDB("SELECT * FROM articles order by RAND() LIMIT 12 ") as $art){extract($art); ?>
                        <li>
                          <a href="../../journal/<?php echo strtolower(str_replace(' ','-',$j_link)); ?>"><i class="fa fa-caret-right"></i> <?php echo $j_title; ?> </a>

                        </li>
                      <?php } ?>

                    </ul>
                  </div>
                </div>
                <div class="side_bar_blog">
                  <h4>RECENT JOURNALS</h4>
                  <div class="recent_post">
                    <ul>
                     <?php foreach(QueryDB("SELECT * FROM journals  order by RAND() LIMIT 12") as $rows){extract($rows); ?>
                      <li>
                        <p class="post_head"><a href="../../journal/<?php echo strtolower(str_replace(' ','-',$jo_link)); ?>"><?php echo $jo_name; ?> <?php echo $jo_vol.' '.$jo_num; ?></a></p>
                        <p class="post_date"><i class="fa fa-calendar" aria-hidden="true"></i> <?php  echo substr($jo_pub,8)." ". _date(substr($jo_pub,5, 2)).' '. substr($jo_pub,0, 4); ?></p>
                      </li>
                    <?php } ?>

                  </ul>
                </div>
              </div>

              <div class="side_bar_blog">
                <h4>RECENT POST</h4>
                <div class="recent_post">
                  <ul>
                    <?php foreach(QueryDB("SELECT * FROM blog ORDER BY RAND() LIMIT 10 ") as $blg){
                      extract($blg);?>
                      <li><p class="post_head"><a href="../../post/<?php echo $id; ?>/<?php echo date('Y',$blog_date); ?>/<?php echo strtolower(str_replace(' ', '-', $blog_link)); ?>"><i class="fa fa-caret-right"></i> <?php echo $blog_title; ?></a></p>
                        <p class="post_date"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo date("M-d-Y", $blog_date); ?></p>
                      </li>
                    <?php  } ?>
                  </ul>
                </div>
              </div>


            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end section -->

    <!-- section -->
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="full">
              <div class="contact_us_section">
                <div class="call_icon"> <img src="../../images/it_service/phone_icon.png" alt="#" /> </div>
                <div class="inner_cont">
                  <h2>SUBMIT YOUR JOURNAL</h2>
                  <p>Get answers and advice from people you want it from.</p>
                </div>
                <div class="button_Section_cont"> <a class="btn dark_gray_bt" href="../../submit_publications">Submit</a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end section -->
    <!-- section -->
    <div class="section padding_layout_1" style="padding: 50px 0;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="full">
              <ul class="brand_list">
                <li><img src="../../images/isbn.jpg" alt="#" width="100%" /></li>

              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end section -->
    <?php include('footer.php'); ?>
    <?php include('scripts2.php'); ?>
  </body>
  </html>
