<?php  session_start(); ob_start();  require('db/config.php'); require('db/functions.php');  ?>
<!DOCTYPE html>
<html lang="en">
<head>

  <title>Journals - Lokoja Journal Of Applied Sciences</title>
  <?php include('nav/head.php'); ?>

</head>
<body id="default_theme" class="it_service blog">
  <!-- loader -->
  <div class="bg_load"> <img class="loader_animation" src="images/loaders/loader_1.png" alt="#" /> </div>
  <!-- end loader -->
  <?php include('nav/header.php'); ?>
  
  <!-- inner page banner -->
  <div id="inner_banner" class="section inner_banner_section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="full">
            <div class="title-holder">
              <div class="title-holder-cell text-left">
                <h1 class="page-title">LOJAS - Journal</h1>
                <ol class="breadcrumb">
                  <li><a href="index">Home</a></li>
                  <li class="active">Journal List</li>
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
  <div class="section padding_layout_1 blog_list">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 pull-right">
         <!--  <div class="row margin_bottom_30">
            <div class="col-lg-6 col-md-6 col-sm-12 about_cont_blog" style="padding:0 15px; margin-bottom: 10px;">
              <div class="full text_align_left">
                <h3>LOJAS - Journal</h3>
                <p>Lokoja Journal of Applied Sciences, LOJAS contains lots of</p>
                <ul>
                  <li><i class="fa fa-check-circle"></i>Persius appetere pro mea harum ridens</li>
                  <li><i class="fa fa-check-circle"></i>Instructior vis at causae legimus luptatum mel</li>
                  <li><i class="fa fa-check-circle"></i>Maluisset id persius appetere pro mea harum</li>
                </ul>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 about_feature_img">
              <div class="full text_align_center"> <img class="img-responsive" src="images/lojas.jpg" alt="#"> </div>
            </div>
            <hr>
          </div> -->
          <div class="full">
            <?php foreach(QueryDB("SELECT * FROM journals ") as $rows){extract($rows); ?>
              <div class="row blog_feature_cantant">
                <div class="col-lg-6 col-md-6 col-sm-12 about_feature_img">
                  <div class="full text_align_center"> <img class="img-responsive" src="master/<?php echo $jo_img; ?>" alt="#" width="100%"> </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 about_cont_blog" style="padding:0 15px; margin-bottom: 10px;">
                  <div class="blog_section">
                    <p class="blog_head"><?php echo $jo_name; ?></p>
                    <div class="post_info">
                      <p><?php echo $jo_vol.' '.$jo_num; ?></p>
                      <ul>
                        <li><i class="fa fa-user" aria-hidden="true"></i> Published</li>
                        <li><i class="fa fa-calendar" aria-hidden="true"></i> <?php  echo substr($jo_pub,8)." ". _date(substr($jo_pub,5, 2)).' '. substr($jo_pub,0, 4); ?></li>
                      </ul>
                    </div>
                    <div class="bottom_info">
                      <div class="pull-left"><a class="btn sqaure_bt" href="journal/<?php echo strtolower(str_replace(' ','-',$jo_link)); ?>">Explore<i class="fa fa-angle-right"></i></a></div>
                    </div>
                  </div>
                </div>

              </div>

            <?php } ?>


            <div class="center">
              <ul class="pagination style_1">
                <li><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="it_blog_grid">2</a></li>
                <li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-left">
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
                <h4>RECENT JOURNALS</h4>
                <div class="recent_post">
                  <ul>
                   <?php foreach(QueryDB("SELECT * FROM journals  order by RAND() LIMIT 12") as $rows){extract($rows); ?>
                    <li>
                      <p class="post_head"><a href="journal/<?php echo strtolower(str_replace(' ','-',$jo_link)); ?>"><?php echo $jo_name; ?> <?php echo $jo_vol.' '.$jo_num; ?></a></p>
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
                    <li><p class="post_head"><a href="post/<?php echo $id; ?>/<?php echo date('Y',$blog_date); ?>/<?php echo strtolower(str_replace(' ', '-', $blog_link)); ?>"><i class="fa fa-caret-right"></i> <?php echo $blog_title; ?></a></p>
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
                      <a href="journal/<?php echo strtolower(str_replace(' ','-',$j_link)); ?>"><i class="fa fa-caret-right"></i> <?php echo $j_title; ?> </a>

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



  <?php include('nav/footer.php'); ?>
  <?php include('nav/scripts.php'); ?>
</body>
</html>
