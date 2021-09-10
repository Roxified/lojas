<?php  session_start(); ob_start();  require('db/config.php'); require('db/functions.php');  ?>

<!DOCTYPE html>
<html lang="en">
<head>

  <title>About LOJAS - IT Service Responsive Html Theme</title>
  <?php include('nav/head.php');  ?>
</head>
<body id="default_theme" class="it_service about">
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
                <h1 class="page-title">About LOJAS</h1>
                <ol class="breadcrumb">
                  <li><a href="index">Home</a></li>
                  <li class="active">About LOJAS</li>
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
  <div class="section padding_layout_1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="full">
            <div class="main_heading text_align_center">
              <h2>LOKOJA JOURNAL OF APPLIED SCIENCES</h2>
              <p class="large">A Publication of School of Applied Sciences. KSP LOkoja</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row about_blog">
       <div class="col-lg-6 col-md-6 col-sm-12 about_feature_img padding_right_0">
        <div class="full text_align_center"> <img class="img-responsive" src="images/lojas.jpg" alt="#" /> </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 about_cont_blog">
        <div class="full text_align_left">
          <h3>About LOJAS</h3>
          <h4 style="word-spacing: 5px; text-align: justify; line-height: 25px;">Lokoja Journal of Applied Sciences (LOJAS) is a peer reviewes publications of the School of Applied Scinecs of Kogi State Polytechnic, Lokoja. It is a contribution of a body of eminent scholars from all discipline in the sciences and other related disciplines. The Journal is floated with the vision and mandate to provide a veritable platform for researchers across the length and breadth of Nigeria for Publication of research findings.</h4 style="padding: 10px;">
          <ul>
            <li style="font-size: 24px; font-weight: bold;"><i class="fa fa-check-circle"></i>Objectives of LOJAS</li>
            <h4 style="word-spacing: 5px; text-align: justify; line-height: 25px;">The Objective of the Journal is to encourage the pursuit of scholarships of the highest order in the various disciplines, conduct research into all aspects of learning relevant to the Nigerian situation and to promote the development of theories and Practices.</h4>
            <li style="font-size: 24px; font-weight: bold;"><i class="fa fa-check-circle"></i>Establishment</li>
            <h4 style="word-spacing: 5px; text-align: justify; line-height: 25px;">Lokoja Journal of Applied Sciences was established to provide a credible forum for the development and propagation of academic theories and practice/ LOJAS welcomes contributions or articles from a wide range of academic disciplines, being a science-based multi-disciplinary journal.</h4>
          </ul>
        </div>
      </div>

    </div>

  </div>
</div>
<!-- end section -->

<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_left">
            <h2>Editorial Consultants</h2>
            <p class="large">Our experts have been featured in press numerous times.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
    <!--   <div class="col-md-3 col-sm-6">
        <div class="full team_blog_colum">
          <div class="it_team_img"> <img class="img-responsive" src="images/it_service/team-member-1.jpg" alt="#"> </div>
          <div class="team_feature_head">
            <h4>Professor J. O. Omolehin</h4>
            <p>Department of Mathematics,<br>Federal University Lokoja</p>
          </div>
          <div class="team_feature_social">
            <div class="social_icon">
              <ul class="list-inline">
                <li><a class="fa fa-facebook" href="https://www.facebook.com/" title="Facebook" target="_blank"></a></li>
                <li><a class="fa fa-google-plus" href="https://plus.google.com/" title="Google+" target="_blank"></a></li>
                <li><a class="fa fa-twitter" href="https://twitter.com" title="Twitter" target="_blank"></a></li>
                <li><a class="fa fa-linkedin" href="https://www.linkedin.com" title="LinkedIn" target="_blank"></a></li>
                <li><a class="fa fa-instagram" href="https://www.instagram.com" title="Instagram" target="_blank"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div> -->
      <div class="col-md-3 col-sm-6">
        <div class="full team_blog_colum">
          <div class="it_team_img"> <img class="img-responsive" src="images/it_service/team-member-2.jpg" alt="#"> </div>
          <div class="team_feature_head">
           <h4>Dr. Lamidi</h4>
           <p>Department of Public Administration,<br>Kogi State Polytechnic, Lokoja</p>
         </div>
         <div class="team_feature_social">
          <div class="social_icon">
            <ul class="list-inline">
              <li><a class="fa fa-facebook" href="https://www.facebook.com/" title="Facebook" target="_blank"></a></li>
              <li><a class="fa fa-google-plus" href="https://plus.google.com/" title="Google+" target="_blank"></a></li>
              <li><a class="fa fa-twitter" href="https://twitter.com" title="Twitter" target="_blank"></a></li>
              <li><a class="fa fa-linkedin" href="https://www.linkedin.com" title="LinkedIn" target="_blank"></a></li>
              <li><a class="fa fa-instagram" href="https://www.instagram.com" title="Instagram" target="_blank"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
 <!--    <div class="col-md-3 col-sm-6">
      <div class="full team_blog_colum">
        <div class="it_team_img"> <img class="img-responsive" src="images/it_service/team-member-3.jpg" alt="#"> </div>
        <div class="team_feature_head">
          <h4>Dr. Onashoga Bukola</h4>
          <p>Department of Comnputer Sciences,<br>Federal University of Agriculture, Abeokuta, Ogun State</p>
        </div>
        <div class="team_feature_social">
          <div class="social_icon">
            <ul class="list-inline">
              <li><a class="fa fa-facebook" href="https://www.facebook.com/" title="Facebook" target="_blank"></a></li>
              <li><a class="fa fa-google-plus" href="https://plus.google.com/" title="Google+" target="_blank"></a></li>
              <li><a class="fa fa-twitter" href="https://twitter.com" title="Twitter" target="_blank"></a></li>
              <li><a class="fa fa-linkedin" href="https://www.linkedin.com" title="LinkedIn" target="_blank"></a></li>
              <li><a class="fa fa-instagram" href="https://www.instagram.com" title="Instagram" target="_blank"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div> -->
    <div class="col-md-3 col-sm-6">
      <div class="full team_blog_colum">
        <div class="it_team_img"> <img class="img-responsive" src="images/it_service/team-member-1.jpg" alt="#"> </div>
        <div class="team_feature_head">
          <h4>Alabi Taiye John J. O. Omolehin</h4>
          <p>Department of Mathematics/Statistics,<br>Kogi State Polytechnic, Lokoja</p>
        </div>
        <div class="team_feature_social">
          <div class="social_icon">
            <ul class="list-inline">
              <li><a class="fa fa-facebook" href="https://www.facebook.com/" title="Facebook" target="_blank"></a></li>
              <li><a class="fa fa-google-plus" href="https://plus.google.com/" title="Google+" target="_blank"></a></li>
              <li><a class="fa fa-twitter" href="https://twitter.com" title="Twitter" target="_blank"></a></li>
              <li><a class="fa fa-linkedin" href="https://www.linkedin.com" title="LinkedIn" target="_blank"></a></li>
              <li><a class="fa fa-instagram" href="https://www.instagram.com" title="Instagram" target="_blank"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="full team_blog_colum">
        <div class="it_team_img"> <img class="img-responsive" src="images/it_service/team-member-1.jpg" alt="#"> </div>
        <div class="team_feature_head">
          <h4>Dr. Obaromi Davies Abiodun</h4>
          <p>Department of Mathematics/Statistics,<br>Kogi State Polytechnic, Lokoja</p>
        </div>
        <div class="team_feature_social">
          <div class="social_icon">
            <ul class="list-inline">
              <li><a class="fa fa-facebook" href="https://www.facebook.com/" title="Facebook" target="_blank"></a></li>
              <li><a class="fa fa-google-plus" href="https://plus.google.com/" title="Google+" target="_blank"></a></li>
              <li><a class="fa fa-twitter" href="https://twitter.com" title="Twitter" target="_blank"></a></li>
              <li><a class="fa fa-linkedin" href="https://www.linkedin.com" title="LinkedIn" target="_blank"></a></li>
              <li><a class="fa fa-instagram" href="https://www.instagram.com" title="Instagram" target="_blank"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="full team_blog_colum">
        <div class="it_team_img"> <img class="img-responsive" src="images/it_service/team-member-1.jpg" alt="#"> </div>
        <div class="team_feature_head">
          <h4>Dr. (Mrs). Ayodele Olukemi Sade</h4>
          <p>Department of Computer Sciences,<br>Kogi State Polytechnic, Lokoja</p>
        </div>
        <div class="team_feature_social">
          <div class="social_icon">
            <ul class="list-inline">
              <li><a class="fa fa-facebook" href="https://www.facebook.com/" title="Facebook" target="_blank"></a></li>
              <li><a class="fa fa-google-plus" href="https://plus.google.com/" title="Google+" target="_blank"></a></li>
              <li><a class="fa fa-twitter" href="https://twitter.com" title="Twitter" target="_blank"></a></li>
              <li><a class="fa fa-linkedin" href="https://www.linkedin.com" title="LinkedIn" target="_blank"></a></li>
              <li><a class="fa fa-instagram" href="https://www.instagram.com" title="Instagram" target="_blank"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- section -->
<div class="section padding_layout_1 testmonial_section white_fonts">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_left">
            <h2 style="text-transform: none;">What Clients Say?</h2>
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
                  I am really satisfied with my first laptop service.</div>
                  <div class="testimonial-photo"> <img src="images/it_service/client1.jpg" class="img-responsive" alt="#" width="150" height="150"> </div>
                  <div class="testimonial-meta">
                    <h4>Maria Anderson</h4>
                    <span class="testimonial-position">CFO, Tech NY</span> </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="testimonial-container">
                    <div class="testimonial-content"> You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first. 
                    I am really satisfied with my first laptop service.</div>
                    <div class="testimonial-photo"> <img src="images/it_service/client2.jpg" class="img-responsive" alt="#" width="150" height="150"> </div>
                    <div class="testimonial-meta">
                      <h4>Maria Anderson</h4>
                      <span class="testimonial-position">CFO, Tech NY</span> </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="testimonial-container">
                      <div class="testimonial-content"> You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first. 
                      I am really satisfied with my first laptop service.</div>
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
                    <h2>REQUEST A FREE QUOTE</h2>
                    <p>Get answers and advice from people you want it from.</p>
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
                  <li><img src="images/it_service/brand_icon1.png" alt="#" /></li>
                  <li><img src="images/it_service/brand_icon2.png" alt="#" /></li>
                  <li><img src="images/it_service/brand_icon3.png" alt="#" /></li>
                  <li><img src="images/it_service/brand_icon4.png" alt="#" /></li>
                  <li><img src="images/it_service/brand_icon5.png" alt="#" /></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end section -->
      <?php include('nav/footer.php'); ?>
      <?php include('nav/scripts.php'); ?>>
    </body>
    </html>
