<?php  session_start(); ob_start();  require('db/config.php'); require('db/functions.php');  ?>

<!DOCTYPE html>
<html lang="en">
<head>

  <title>Latest News From LOJAS - Lokoja Journal Of Applied Sciences</title>
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
                <h1 class="page-title">Latest News</h1>
                <ol class="breadcrumb">
                  <li><a href="index">Home</a></li>
                  <li class="active">Latest News</li>
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
          <div class="full">
           <?php foreach(QueryDB("SELECT * FROM blog ORDER BY blog_date DESC ") as $row){
            extract($row);?>
            <div class="blog_section">
              <div class="blog_feature_img"> <img src="master/<?php echo $blog_img; ?>" alt="#" /> </div>
              <div class="blog_feature_cantant">
                <p class="blog_head"><?php echo $blog_title; ?></p>
                <div class="post_info">
                  <ul>
                    <li><i class="fa fa-user" aria-hidden="true"></i> LOJAS News</li>
                    <li><i class="fa fa-comment" aria-hidden="true"></i> 5</li>
                    <li><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo date("M-d-Y", $blog_date); ?></li>
                  </ul>
                </div>
                <p><?php echo htmlspecialchars_decode((substr($blog_cont, 0,600))); ?></p>
                <div class="bottom_info">
                  <div class="pull-left"><a class="btn sqaure_bt" href="post/<?php echo $id; ?>/<?php echo date('Y',$blog_date); ?>/<?php echo strtolower(str_replace(' ', '-', $blog_link)); ?>">Read More<i class="fa fa-angle-right"></i></a></div>
                  <div class="pull-right">
                    <div class="shr">Share: </div>
                    <div class="social_icon">
                      <ul>
                        <li class="fb"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li class="twi"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li class="gp"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li class="pint"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          <?php } ?>

          <div class="center">
            <ul class="pagination style_1">
              <li><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="it_blog_grid.html">2</a></li>
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
              <h4>RECENT POST</h4>
              <div class="recent_post">
                <ul>
                 <?php foreach(QueryDB("SELECT * FROM blog ORDER BY RAND() LIMIT 10 ") as $row){
                  extract($row);?>
                  <li>
                    <p class="post_head"><a href="post/<?php echo $id; ?>/<?php echo date('Y',$blog_date); ?>/<?php echo strtolower(str_replace(' ', '-', $blog_link)); ?>"><?php echo $blog_title; ?></a></p>
                    <p class="post_date"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo date("M-d-Y", $blog_date); ?></p>
                  </li>
                <?php  } ?>
              </ul>
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
