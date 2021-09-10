<?php  session_start(); ob_start();  require('db/config.php'); require('db/functions.php');  ?>

<!DOCTYPE html>
<html lang="en">
<head>

  <title>It.Next - IT Service Responsive Html Theme</title>
  <?php include('nav/head.php'); ?>
</head>
<body id="default_theme" class="contact_us_2">
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
                <h1 class="page-title">Contact</h1>
                <ol class="breadcrumb">
                  <li><a href="index">Home</a></li>
                  <li class="active">Contact</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end inner page banner -->
  <div class="section padding_layout_1">
    <div class="container">
      <div class="row">
        <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12"></div>
        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
          <div class="row">
            <div class="full">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="main_heading text_align_center">
                  <h2>GET IN TOUCH WITH US</h2>
                </div>
              </div>
              <div class="contact_information">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 adress_cont">
                  <div class="information_bottom text_align_center">
                    <div class="icon_bottom"> <i class="fa fa-road" aria-hidden="true"></i> </div>
                    <div class="info_cont">
                      <h4>School of Applied Sciences</h4>
                      <p>Kogi State Polytechnic, Lokoja</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 adress_cont">
                  <div class="information_bottom text_align_center">
                    <div class="icon_bottom"> <i class="fa fa-clock-o" aria-hidden="true"></i> </div>
                    <div class="info_cont">
                      <h4>Opening Hours</h4>
                      <p>Mon-Fri 8:30am-4:30pm</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 adress_cont">
                  <div class="information_bottom text_align_center">
                    <div class="icon_bottom"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
                    <div class="info_cont">
                      <h4>informlojas@gmail.com</h4>
                      <p>24/7 online support</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contant_form">
                <h2 class="text_align_center">SEND US A MESSAGE</h2>
                <div class="form_section">
                  <form class="" action="index">
                    <fieldset>
                      <div class="row">

                        <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                          <input class="field_custom" placeholder="Your name" type="text">
                        </div>
                        <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                          <input class="field_custom" placeholder="Email address" type="email">
                        </div>
                        <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                          <input class="field_custom" placeholder="Phone number" type="text">
                        </div>
                        <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <textarea class="field_custom" placeholder="Message"></textarea>
                        </div>
                        <div class="center"><a class="btn main_bt" href="#">SUBMIT NOW</a></div>
                      </div>
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


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
