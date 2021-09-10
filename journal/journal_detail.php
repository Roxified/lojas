<?php ob_start(); session_start();  require('../db/config.php'); require('../db/functions.php'); 

$get_titles = $_REQUEST['link'];

$_SESSION['journal'] = $get_titles;

//echo "this is the user_code: ". $_SESSION['usercode'];
//$find_title = QueryDB("SELECT * FROM  journals WHERE jo_link ='$get_title'  ");
$find_title = QueryDB("SELECT * FROM  journals WHERE jo_link ='".$_SESSION['journal']."'  ");
$q = $find_title->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>

  <title><?php echo $q['jo_name']; ?> - Lokoja Journal Of Applied Sciences</title>
  <?php include('head.php'); ?>
</head>
<body id="default_theme" class="it_shop_detail">
  <!-- loader -->
  <!--   <div class="bg_load"> <img class="loader_animation" src="../images/loaders/loader_1.png" alt="#" /> </div> -->
  <!-- end loader -->
  <?php include('header.php'); ?>
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
                  <li><a href="../index">Home</a></li>
                  <li class="active"><?php echo $q['jo_name'].' '.$q['jo_vol'].' '.$q['jo_num']; ?></li>
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
                <div class='hizoom hi2'> <img src="../master/<?php echo $q['jo_img']; ?>" alt="#"  width="100%"> </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-12 col-md-12 product_detail_side detail_style1">
              <div class="product-heading">
                <h2><?php echo $q['jo_name']; ?> - <?php echo $q['jo_vol'].' '.$q['jo_num']; ?></h2>
              </div>
              <div class="product-detail-side"><p><b>Published:</b> <?php  echo substr($q['jo_pub'],8)." ". _date(substr($q['jo_pub'],5, 2)).' '. substr($q['jo_pub'],0, 4); ?></p> </div>
              <div class="detail-contant">

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
                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#description">Articles</a> </li>
                    
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#reviews">Reviews</a> </li>
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div id="description" class="tab-pane active">
                      <div class="categary">
                        <ul><?php $sn=1; foreach(QueryDB("SELECT * FROM articles where j_cat='".$q['jo_code']."' ") as $row){extract($row); $_SESSION['code']= $q['jo_code'];?>
                        <li><?php echo $sn++;  ?>. <a href="../journal/<?php echo $j_id; ?>/<?php echo $j_link;  ?>"><?php echo $j_title;  ?></a>

                          </li><?php } ?>
                        </ul>
                      </div>
                    </div>

                    <div id="reviews" class="tab-pane fade">
                      <div class="product_review">
                        <h3>Reviews (2)</h3>
                        <div class="commant-text row">
                          <div class="col-lg-2 col-md-2 col-sm-4">
                            <div class="profile"> <img class="img-responsive" src="images/it_service/client1.png" alt="#"> </div>
                          </div>
                          <div class="col-lg-10 col-md-10 col-sm-8">
                            <h5>David</h5>
                            <p><span class="c_date">March 2, 2018</span> | <span><a rel="nofollow" class="comment-reply-link" href="#">Reply</a></span></p>
                            <span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span>
                            <p class="msg">ThisThis book is a treatise on the theory of ethics, very popular during the Renaissance. 
                            The first line of Lorem Ipsum, “Lorem ipsum dolor sit amet.. </p>
                          </div>
                        </div>
                        <div class="commant-text row">
                          <div class="col-lg-2 col-md-2 col-sm-4">
                            <div class="profile"> <img class="img-responsive" src="images/it_service/client2.png" alt="#"> </div>
                          </div>
                          <div class="col-lg-10 col-md-10 col-sm-8">
                            <h5>Jack</h5>
                            <p><span class="c_date">March 2, 2018</span> | <span><a rel="nofollow" class="comment-reply-link" href="#">Reply</a></span></p>
                            <span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span>
                            <p class="msg">Nunc augue purus, posuere in accumsan sodales ac, euismod at est. Nunc faccumsan ermentum consectetur metus placerat mattis. Praesent mollis justo felis, accumsan faucibus mi maximus et. Nam hendrerit mauris id scelerisque placerat. Nam vitae imperdiet turpis</p>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="full review_bt_section">
                              <div class="float-right"> <a class="btn sqaure_bt" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Leave a Review</a> </div>
                            </div>
                            <div class="full">
                              <div id="collapseExample" class="full collapse commant_box">
                                <form accept-charset="UTF-8" action="index.html" method="post">
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
                  <h3>Related Journals</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <?php foreach(QueryDB("SELECT * FROM journals ") as $rows){extract($rows); ?>
              <div class="col-md-3 col-sm-6 col-xs-12 margin_bottom_30_all">
                <div class="product_list">
                  <div class="product_img"> <img class="img-responsive" src="../master/<?php echo $jo_img; ?>" alt=""> </div>
                  <div class="product_detail_btm">
                    <div class="center">
                      <h4><a href="../journal/<?php echo strtolower(str_replace(' ', '-', $jo_link)); ?>"><?php echo $jo_name; ?> - <?php echo $jo_vol.' '.$jo_num; ?></a></h4>
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
                  <h4>OUR JOURNALS</h4>
                  <div class="categary">
                    <ul>
                      <?php foreach(QueryDB("SELECT * FROM journals ") as $rows){extract($rows); ?>

                        <li><a href="../journal/<?php echo $jo_link;  ?>"><i class="fa fa-angle-right"></i> <?php echo $jo_name.' '.$jo_vol.' '.$jo_num; ?></a></li>
                      <?php  } ?>

                    </ul>
                  </div>
                </div>


                <div class="side_bar_blog">
                  <h4>RECENT POST</h4>
                  <div class="recent_post">
                    <ul>
                      <?php foreach(QueryDB("SELECT * FROM blog ORDER BY RAND() LIMIT 10 ") as $blg){
                        extract($blg);?>
                        <li><p class="post_head"><a href="../post/<?php echo $id; ?>/<?php echo date('Y',$blog_date); ?>/<?php echo strtolower(str_replace(' ', '-', $blog_link)); ?>"><i class="fa fa-caret-right"></i> <?php echo $blog_title; ?></a></p>
                          <p class="post_date"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo date("M-d-Y", $blog_date); ?></p>
                        </li>
                      <?php  } ?>
                    </ul>
                  </div>
                </div>
                <div class="side_bar_blog">
                  <h4>RECENT Articles</h4>
                  <div class="categary">
                    <ul>
                      <?php foreach(QueryDB("SELECT * FROM articles order by RAND() LIMIT 12 ") as $art){extract($art); ?>
                        <li>
                          <a href="../journal/<?php echo strtolower(str_replace(' ','-',$j_link)); ?>"><i class="fa fa-caret-right"></i> <?php echo $j_title; ?> </a>

                        </li>
                      <?php } ?>

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
      <div class="section padding_layout_1" style="padding: 50px 0;">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="full">
                <ul class="brand_list">
                  <li><img src="../images/isbn.jpg" alt="#" width="100%" /></li>
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end section -->
      <?php include('footer.php'); ?>
      <?php include('scripts.php'); ?>
    </body>
    </html>
