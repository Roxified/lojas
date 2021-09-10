<?php  ob_start(); session_start(); require('../db/config.php'); require('../db/functions.php');
$get_title = $_REQUEST['link']; 
$_SESSION['post'] = $get_title; 
$find_title = $db->query("SELECT * FROM  blog WHERE id ='".$_SESSION['post']."'  "); $q = $find_title->fetch(PDO::FETCH_ASSOC); $link = 2; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $q['blog_title']; ?> - Spottable Services</title>
  <?php include('link.php'); ?>
  <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=60267b23a0a5fc001153a5d9&product=inline-share-buttons" async="async"></script>
  <style>li { display: inline-block; }</style>
</head>
<body id="default_theme" class="it_service blog">
  <?php include('nav.php'); ?>
  <!-- inner page banner -->
  <div id="inner_banner" class="section inner_banner_section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="full">
            <div class="title-holder">
              <div class="title-holder-cell text-left">
                <h1 class="page-title">LOJAS Blog</h1>
                <ol class="breadcrumb">
                  <li><a href="../../../index">Home</a></li>
                  <li ><a href="../../../blog">LOJAS Blog</a></li>
                  <li class="active"><?php echo $q['blog_title']; ?></li>
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
  <div class="section padding_layout_1 blog_list" >
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
          <div class="full">  
            <div class="blog_section">


              <h1 class="" style="font-size: 2em"><?php echo $q['blog_title']; ?></h1>
              <p>Published <b><?php echo get_time_ago($q['blog_date']); ?></b> on <?php echo date('M d, Y', $q['blog_date']); ?> <br> By <b>LOJAS Blog</b> </p>
              <div class="sharethis-inline-share-buttons" style="margin-bottom: 20px"></div>
              <img class="img-fluid" src="../../../master/<?php echo $q['blog_img']; ?>" alt="#" style="width:100%; max-width: 500px;">
              
              <div class="text-justify"><?php echo htmlspecialchars_decode($q['blog_cont']); ?></div>
              <div class="sharethis-inline-share-buttons"></div>



            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 pull-left">
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
                      <p class="post_head"><a href="../../../post/<?php echo $id; ?>/<?php echo date('Y',$blog_date); ?>/<?php echo strtolower(str_replace(' ', '-', $blog_link)); ?>"><?php echo $blog_title; ?></a></p>
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
                 <?php foreach(QueryDB("SELECT * FROM journals ") as $rows){extract($rows); ?>
                  <li>
                    <p class="post_head"><a href="../../../journal/<?php echo strtolower(str_replace(' ','-',$jo_link)); ?>"><?php echo $jo_name; ?> <?php echo $jo_vol.' '.$jo_num; ?></a></p>
                    <p class="post_date"><i class="fa fa-calendar" aria-hidden="true"></i> <?php  echo substr($jo_pub,8)." ". _date(substr($jo_pub,5, 2)).' '. substr($jo_pub,0, 4); ?></p>
                  </li>
                <?php } ?>

              </ul>
            </div>
          </div>
          
          <h4>RECENT Articles</h4>
          <div class="categary">
            <ul>
              <?php foreach(QueryDB("SELECT * FROM articles order by RAND() LIMIT 12 ") as $art){extract($art); ?>
                <li>
                  <a href="../../../journal/<?php echo strtolower(str_replace(' ','-',$j_link)); ?>"><i class="fa fa-caret-right"></i> <?php echo $j_title; ?> </a>

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
<?php include('footer.php'); include('scripts.php');  ?>




</body>
</html>
