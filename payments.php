<?php  session_start(); ob_start();   require('db/config.php'); require('db/functions.php');  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- basic -->

  <title>Make Payments  - Lokoja Journal of Applied Sciences</title>
  <?php include('nav/head.php'); ?>

</head>
<body id="default_theme" class="it_serv_shopping_cart it_checkout checkout_page">
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
                <h1 class="page-title">Make Payments</h1>
                <ol class="breadcrumb">
                  <li><a href="index">Home</a></li>
                  <li class="active">Make Payments</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end inner page banner -->
  <div class="section padding_layout_1 checkout_section">
    <div class="container">
      <?php if(isset($_POST['pay_pr'])){

        $_SESSION['pay_code'] =   $_POST['pay_code'];

      } ?>
      <div class="row">




        <div class="col-md-8">
          <div class="full">
            <h3>Make Payment for <?php echo get_pay_name($_SESSION['pay_code']);  ?></h3>
          </div>
          <div class="payment-form">
            <div class="col-xs-12 col-md-12">
              <!-- CREDIT CARD FORM STARTS HERE -->
              <div class="panel panel-default credit-card-box">
                <div class="panel-heading display-table">
                  <div class="display-tr">
                    <h3 class="panel-title display-td">Payment Details</h3>
                    <div class="display-td"> <img class="img-responsive pull-right" src="images/it_service/accepted.png" alt="#"> </div>
                  </div>
                </div>
                <div class="panel-body">
                  <div class="checkout-form">
                    <form action="payments" method="POST">

                      <?php if(isset($_POST['make_pay'])){



                        $full_name = $_POST['full_name'];
                        $phone = $_POST['phone'];
                        $email = $_POST['email'];

                        if(QueryDB("SELECT * FROM payment where pay ")){}



                      } ?>
                    <fieldset>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-field">
                            <label>Full name <span class="red">*</span></label>
                            <input name="full_name" required type="text">
                          </div>
                        </div>


                        <div class="col-md-6">
                          <div class="form-field">
                            <label>Phone <span class="red">*</span></label>
                            <input name="phone" required type="text">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-field">
                            <label>Email address <span class="red">*</span></label>
                            <input name="email" required type="email">
                          </div>
                        </div>

                      </div>
                    </fieldset>

                  </div>
                </div>
              </div>
              <!-- CREDIT CARD FORM ENDS HERE -->
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="shopping-cart-cart">
            <table>
              <tbody>
                <tr class="head-table">
                  <td><h5>Payment Totals</h5></td>
                  <td class="text-right"></td>
                </tr>
                <tr>
                  <td><h4>Subtotal</h4></td>
                  <td class="text-right"><h4><?php echo  get_pay_amt($_SESSION['pay_code']); ?></h4></td>
                </tr>
                <tr>
                  <td><h5>Procesing Fee </h5></td>
                  <td class="text-right"><h4><?php echo  paystack($_SESSION['pay_code']); ?></h4></td>
                </tr>
                <tr>
                  <td><h3>Total</h3></td>
                  <td class="text-right"><h4><?php echo  paystack_total($_SESSION['pay_code']); ?></h4></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 payment-bt">
            <div class="center">
              <button type="submit" name="make_pay" class="bt_main">Make Payment</button>
            </div>
          </div>
        </div>
      </form>
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
<!-- js section -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- menu js -->
<script src="js/menumaker.js"></script>
<!-- wow animation -->
<script src="js/wow.js"></script>
<!-- custom js -->
<script src="js/custom.js"></script>
<!-- revolution js files -->
<script src="revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.video.min.js"></script>




<!-- Modal -->
<div class="modal fade" id="search_bar" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-8 offset-lg-2 offset-md-2 offset-sm-2 col-xs-10 col-xs-offset-1">
            <div class="navbar-search">
              <form action="#" method="get" id="search-global-form" class="search-global">
                <input type="text" placeholder="Type to search" autocomplete="off" name="s" id="search" value="" class="search-global__input">
                <button class="search-global__btn"><i class="fa fa-search"></i></button>
                <div class="search-global__note">Begin typing your search above and press return to search.</div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Model search bar -->


     <!--  <script type="text/javascript">
        $(window).on('load', function() {
          $('#myModal').modal('show');
        });
      </script> -->
      <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-success" style="">
              <h2 class="modal-title" style="text-align: center; color: white">Call for Paper!!!</h2><br>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">

              <div class="text-center">
                <a href="submit_publications"><h2 style="text-decoration: none">Volume 3 Number 2</h2><p></p></a>
                <h3>Submit Your manuscripts for on-line publication at lojaspapersubmit@gmail.com.</h3>
                <h3>Deadline for submission: September 14, 2021</h3>
                <h3>For more enquiries click below</h3>
              </div>
              <div class="text-center"><img src="images/call_for_paper.jpeg" width="50%">

              </div>
              <div class="text-center"><a href="call_for_paper" class="btn btn-success">View More</a></div>
              
              

            </div>
          </div>
        </div>
      </div>

      <div id="myPay" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-success" style="">
              <h2 class="modal-title" style="text-align: center; color: white">Make Payments for Paper!</h2><br>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">

              <div class="text-center">

                <h3>Notice of Redirection!!!</h3>
                <p>You will be redirected to a thir-party playment platform to complete payment</p>
              </div>
              <div class="text-center">
                <form action="payments" method="POST">
                  <div class="form-group">
                    <select class="form-control" required="" name="pay_code">
                      <option value="">[Choose Payment]</option><?php foreach(pay_cat() as $py){extract($py); ?><option value="<?php echo $pay_code; ?>"><?php echo $pay_name.' ('.$pay_amt.' )'; ?></option> <?php } ?>
                    </select>
                  </div>
                  <input type="submit" name="pay_pr" value="Proceed" class="btn btn-success">
                </form>

              </div>
              
              

            </div>
          </div>
        </div>
      </div>

    </body>
    </html>
