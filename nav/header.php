 <header id="default_header" class="header_style_1">
  <!-- header top -->
  <div class="header_top">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="full">

            <div class="topbar-left">
              <ul class="list-inline">
               <li> <span class="topbar-label"><i class="fa  fa-phone"></i></span> <span class="topbar-hightlight"><a href="tel:+2348069804373">+234 806 9804 373</a></span> </li>
               <li> <span class="topbar-label"><i class="fa fa-envelope-o"></i></span> <span class="topbar-hightlight"><a href="mailto:informlojas@gmail.com">informlojas@gmail.com</a></span> </li>
             </ul>
           </div>
         </div>
       </div>
       <div class="col-md-4 right_section_header_top">
        <div class="float-left">
          <div class="social_icon">
            <ul class="list-inline">
              <li><a class="fa fa-facebook" href="https://www.facebook.com/lojas.org.ng" title="Facebook" target="_blank"></a></li>
              <li><a class="fa fa-google-plus" href="https://plus.google.com/" title="Google+" target="_blank"></a></li>
              <li><a class="fa fa-twitter" href="https://twitter.com" title="Twitter" target="_blank"></a></li>
              <li><a class="fa fa-linkedin" href="https://www.linkedin.com" title="LinkedIn" target="_blank"></a></li>
              <li><a class="fa fa-instagram" href="https://www.instagram.com" title="Instagram" target="_blank"></a></li>
            </ul>
          </div>
        </div>
        <div class="float-right">
          <div class="make_appo"> <a class="btn white_btn" href="call_for_paper">Submit Journal</a> </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end header top -->
<!-- header bottom -->
<div class="header_bottom">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
        <!-- logo start -->
        <div class="logo"> <a href="index"><img src="images/logos/it_logo.png" alt="logo" /></a> </div>
        <!-- logo end -->
      </div>
      <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
        <!-- menu start -->
        <div class="menu_side">
          <div id="navbar_menu">
            <ul class="first-ul">
              <li> <a class="active" href="index">Home</a></li>

              <li> <a href="blog">News</a></li>

              <li> <a href="#">Publications</a>
                <ul>
                  <li><a href="#">Conference Proceedings</a></li>

                  <li><a href="journals">Journals</a>
                    <ul>
                      <?php foreach(QueryDB("SELECT * FROM journals ") as $row){extract($row); ?>
                        <li><a href="journal/<?php echo strtolower($jo_link); ?>"><?php echo $jo_name.' '.$jo_vol.' '.$jo_num; ?></a>

                          </li><?php  } ?>

                        </ul>
                      </li>
                      <li><a href="#">Communique</a></li>
                    </ul>
                  </li>
                  <li> <a href="#">Events</a>
                    <ul>
                      <li><a href="#">Conferences</a></li>
                      <li><a href="#">Proceedings</a></li>
                    </ul>
                  </li>
                  <li> <a href="#myPay" data-toggle='modal'>Payments</a>
                    <ul>
                      <li><a href="#">Assessment</a></li>
                      <li><a href="#">Publications</a></li>
                      <li><a href="#">Conferences</a></li>
                    </ul>
                  </li>
                  <li> <a href="#">Submissions</a>
                    <ul>
                      <li><a href="#">Journals</a></li>
                      <li><a href="#">Articles</a></li>
                      <li><a href="#">Papers</a></li>
                    </ul>
                  </li>
                  <li><a href="about-us">About Us</a></li>

                  <li> <a href="contact_us">Contact</a>

                  </li>


                </ul>
              </div>
              <div class="search_icon">
                <ul>
                  <li><a href="#" data-toggle="modal" data-target="#search_bar"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
            <!-- menu end -->
          </div>
        </div>
      </div>
    </div>
    <!-- header bottom end -->
  </header>