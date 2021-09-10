<?php  session_start(); ob_start();   require('db/config.php'); require('db/functions.php');  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- basic -->
  
  <!-- site metas -->
  <title>LOJAS :: Lokoja Journal of Applied Sciences</title>
  <?php include('nav/head.php'); ?>
</head>
<body id="default_theme" class="it_service">
  <!-- loader -->
  <div class="bg_load"> <img class="loader_animation" src="images/loaders/loader_1.png" alt="#" /> </div>
  <!-- end loader -->
  <!-- header -->
  <?php include('nav/header.php'); ?>
  <!-- end header -->
  <!-- section -->
  <div id="slider" class="section main_slider">
    <div class="container-fuild">
      <div class="row">
        <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
          <!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
          <div id="rev_slider_4_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
            <ul>
              <li data-index="rs-1812" data-transition="zoomin" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="images/isbn.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Computer Services" data-description="">
                <!-- MAIN IMAGE -->
                <img src="images/isbn.jpg"  alt="#"  data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. BG -->
                <div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0" 
                id="slide-270-layer-1012" 
                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                data-width="full"
                data-height="full"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                data-transform_out="s:300;s:300;" 
                data-start="750" 
                data-basealign="slide" 
                data-responsive_offset="on" 
                data-responsive="off"
                style="z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0.50);"> </div>
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme rs-parallaxlevel-0" 
                id="slide-18-layer-912" 
                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                data-y="['middle','middle','middle','middle']" data-voffset="['15','15','15','15']" 
                data-width="500"
                data-height="140"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;" 
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                data-mask_in="x:0px;y:0px;" 
                data-mask_out="x:inherit;y:inherit;" 
                data-start="2000" 
                data-responsive_offset="on" 
                style="z-index: 5;background-color:rgba(29, 29, 29, 0.85);border-color:rgba(0, 0, 0, 0.50);"> </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" 
                id="slide-18-layer-112" 
                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                data-fontsize="['70','70','70','35']"
                data-lineheight="['70','70','70','50']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                data-start="1000" 
                data-splitin="chars" 
                data-splitout="none" 
                data-responsive_offset="on" 
                data-elementdelay="0.05" 
                style="z-index: 6; white-space: nowrap;">Lokoja Journal of Applied Sciences </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0" 
                id="slide-18-layer-412" 
                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                data-y="['middle','middle','middle','middle']" data-voffset="['52','51','51','31']" 
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                data-start="1500" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on" 
                style="z-index: 7; white-space: nowrap;">School of Applied Sciences, Lokoja </div>
              </li>
              <li data-index="rs-181" data-transition="zoomin" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="images/lojas.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Easy To Use & Customize" data-description="">
                <!-- MAIN IMAGE -->
                <img src="images/lojas.jpg"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. BG -->
                <div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0" 
                id="slide-270-layer-101" 
                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                data-width="full"
                data-height="full"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                data-transform_out="s:300;s:300;" 
                data-start="750" 
                data-basealign="slide" 
                data-responsive_offset="on" 
                data-responsive="off"
                style="z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0.50);"> </div>
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme rs-parallaxlevel-0" 
                id="slide-18-layer-91" 
                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                data-y="['middle','middle','middle','middle']" data-voffset="['15','15','15','15']" 
                data-width="500"
                data-height="140"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;" 
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                data-mask_in="x:0px;y:0px;" 
                data-mask_out="x:inherit;y:inherit;" 
                data-start="2000" 
                data-responsive_offset="on" 
                style="z-index: 5;background-color:rgba(29, 29, 29, 0.85);border-color:rgba(0, 0, 0, 0.50);"> </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" 
                id="slide-18-layer-11" 
                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                data-fontsize="['70','70','70','35']"
                data-lineheight="['70','70','70','50']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                data-start="1000" 
                data-splitin="chars" 
                data-splitout="none" 
                data-responsive_offset="on" 
                data-elementdelay="0.05" 
                style="z-index: 6; white-space: nowrap;">Lokoja Journal of Applied Sciences </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0" 
                id="slide-18-layer-41" 
                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                data-y="['middle','middle','middle','middle']" data-voffset="['52','51','51','31']" 
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                data-start="1500" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on" 
                style="z-index: 7; white-space: nowrap;">Available On LOJAS.ORG.NG </div>
              </li>
              <li data-index="rs-18" data-transition="zoomin" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="images/logos/it_logo.png"  data-rotate="0"  data-saveperformance="off"  data-title="Perfectly Responsive" data-description="">
                <!-- MAIN IMAGE -->
                <img src="images/logos/it_logo.png"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. BG -->
                <div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0" 
                id="slide-270-layer-10" 
                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                data-width="full"
                data-height="full"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                data-transform_out="s:300;s:300;" 
                data-start="750" 
                data-basealign="slide" 
                data-responsive_offset="on" 
                data-responsive="off"
                style="z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0.50);"> </div>
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme rs-parallaxlevel-0" 
                id="slide-18-layer-9" 
                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                data-y="['middle','middle','middle','middle']" data-voffset="['15','15','15','15']" 
                data-width="500"
                data-height="140"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;" 
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                data-mask_in="x:0px;y:0px;" 
                data-mask_out="x:inherit;y:inherit;" 
                data-start="2000" 
                data-responsive_offset="on" 
                style="z-index: 5;background-color:rgba(29, 29, 29, 0.85);border-color:rgba(0, 0, 0, 0.50);"> </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" 
                id="slide-18-layer-1" 
                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                data-fontsize="['70','70','70','35']"
                data-lineheight="['70','70','70','50']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                data-start="1000" 
                data-splitin="chars" 
                data-splitout="none" 
                data-responsive_offset="on" 
                data-elementdelay="0.05" 
                style="z-index: 6; white-space: nowrap;">Lokoja Journal of Applied Sciences </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0" 
                id="slide-18-layer-4" 
                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                data-y="['middle','middle','middle','middle']" data-voffset="['52','51','51','31']" 
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                data-start="1500" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on" 
                style="z-index: 7; white-space: nowrap;">Available On LOJAS</div>
              </li>
            </ul>
            <div class="tp-static-layers"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end section -->
  <!-- section -->
  <div class="section padding_layout_1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="full">
            <div class="main_heading text_align_center">
              <h2>WELCOME TO LOJAS</h2>
              <p class="large">Given to research and publications!</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="full text_align_center ">
         <div class="center">
          <div class="icon"> <img src="images/lojas.jpg" alt="#" width="100%" /> </div>
        </div>
        <h4 class="theme_color" style="text-align: justify; line-height: 40px; font-size: 3vh; padding: 10px;">
        Lokoja Journal of Applied Sciences (LOJAS) is a peer reviewes publications of the School of Applied Scinecs of Kogi State Polytechnic, Lokoja. It is a contribution of a body of eminent scholars from all discipline in the sciences and other related disciplines. The Journal is floated with the vision and mandate to provide a veritable platform for researchers across the length and breadth of Nigeria for Publication of research findings.</h4>
      </div>
    </div>

  </div>
</div>
<!-- end section -->

<!-- section -->
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_center">
            <h2>Our Journals</h2>
            <p class="large">Read a copy of the latest Journals from LOJAS</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
     <?php foreach(QueryDB("SELECT * FROM journals ") as $rows){extract($rows); ?>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
        <div class="product_list">
          <div class="product_img"> <img class="img-responsive" src="master/<?php echo $jo_img; ?>" alt=""> </div>
          <div class="product_detail_btm">
            <div class="center">
              <h4><a href="journal/<?php echo strtolower(str_replace(' ','-',$jo_link)); ?>"><?php echo $jo_name;?></a></h4>
            </div>
            <div class="product_price">
              <p><span class="new_price"><?php echo $jo_vol.' '.$jo_num;?></span></p>
            </div>
          </div>
        </div>
      </div>
    <?php  } ?>

  </div>
</div>
</div>
<!-- end section -->

<!-- section -->
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_left">
            <h2>Latest from Our Blog</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <?php foreach(QueryDB("SELECT * FROM blog ORDER BY blog_date DESC ") as $row){
        extract($row);?>
        <div class="col-md-4">
          <div class="full blog_colum">
            <div class="blog_feature_img"> <img src="master/<?php echo $blog_img; ?>" alt="#" /> </div>
            <div class="blog_time">
              <p><i class="fa fa-clock-o"></i> <?php echo date("M-d-Y", $blog_date); ?></p>
            </div>
            <div class="blog_feature_head">
              <h4><?php echo $blog_title; ?></h4>
            </div>
            <div class="blog_feature_cont">
              <p><?php echo htmlspecialchars_decode((substr($blog_cont, 0,500))); ?></p>
            </div>
            <div class="button_Section_cont"><a class="btn dark_gray_bt" href="post/<?php echo $id; ?>/<?php echo date('Y',$blog_date); ?>/<?php echo strtolower(str_replace(' ', '-', $blog_link)); ?>">Read More</a> </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>
<!-- end section -->
<!-- section -->
<div class="section padding_layout_1 testmonial_section white_fonts">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_left">
            <h2 style="text-transform: none;">What Readers Say?</h2>
            <p class="large">Here are testimonials from clients..</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-7">
        <div class="full">
          <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
              <li data-target="#testimonial_slider" data-slide-to="0" class="active"></li>
              <li data-target="#testimonial_slider" data-slide-to="1"></li>
              <li data-target="#testimonial_slider" data-slide-to="2"></li>
            </ul>
            <!-- The slideshow -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="testimonial-container">
                  <div class="testimonial-content"> You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first. 
                  I am really satisfied with my first laptop service. </div>
                  <div class="testimonial-photo"> <img src="images/it_service/client1.jpg" class="img-responsive" alt="#" width="150" height="150"> </div>
                  <div class="testimonial-meta">
                    <h4>Maria Anderson</h4>
                    <span class="testimonial-position">CFO, Tech NY</span> </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="testimonial-container">
                    <div class="testimonial-content"> You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first. 
                    I am really satisfied with my first laptop service. </div>
                    <div class="testimonial-photo"> <img src="images/it_service/client2.jpg" class="img-responsive" alt="#" width="150" height="150"> </div>
                    <div class="testimonial-meta">
                      <h4>Maria Anderson</h4>
                      <span class="testimonial-position">CFO, Tech NY</span> </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="testimonial-container">
                      <div class="testimonial-content"> You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first. 
                      I am really satisfied with my first laptop service. </div>
                      <div class="testimonial-photo"> <img src="images/it_service/client3.jpg" class="img-responsive" alt="#" width="150" height="150"> </div>
                      <div class="testimonial-meta">
                        <h4>Maria Anderson</h4>
                        <span class="testimonial-position">CFO, Tech NY</span> </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-5">
              <div class="full"> </div>
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
                  <div class="call_icon"> <img src="images/it_service/phone_icon.png" alt="#" /> </div>
                  <div class="inner_cont">
                    <h2>REQUEST SUBMISSION</h2>
                    <p>Get your Articles, Journal or Publication into LOJAS.</p>
                  </div>
                  <div class="button_Section_cont"> <a class="btn dark_gray_bt" href="it_contact.html">Contact us</a> </div>
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
                  <li><img src="images/isbn.jpg" alt="#" width="100%" /></li>

                </ul>
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
