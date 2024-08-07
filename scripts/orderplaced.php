<?php 
session_start();  
if( (!isset($_SESSION["user"])) || $_SESSION["user"] == "guest" ){
  header("Location:product.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- set the encoding of your site -->
  <meta charset="utf-8">
  <!-- set the viewport width and initial-scale on mobile devices -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Placed Order</title>
  <!-- include the site stylesheet -->
  <link rel="shortcut icon" href="../Images/logos/order.jpg" type="image/x-icon">
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic%7cMontserrat:400,700%7cOxygen:400,300,700' rel='stylesheet' type='text/css'>
  <!-- include the site stylesheet -->
  <link rel="stylesheet" href="../css/bootstrap.css">
  <!-- include the site stylesheet -->
  <link rel="stylesheet" href="../css/animate.css">
  <!-- include the site stylesheet -->
  <link rel="stylesheet" href="../css/icon-fonts.css">
  <!-- include the site stylesheet -->
  <link rel="stylesheet" href="../css/main.css">
  <!-- include the site stylesheet -->
  <link rel="stylesheet" href="../css/responsive.css">
</head>
<body>
  <!-- main container of all the page elements -->  
  <div id="wrapper">
    <!-- Page Loader -->
    <div id="pre-loader" class="loader-container">
      <div class="loader">
        <img src="../Images/rings.svg" alt="loader">
      </div>
    </div>
    <div class="w1">
      <!-- mt -header style14 start from here -->
      <header id="mt-header" class="style4">
                <!-- mt bottom bar start here -->
                <div class="mt-bottom-bar">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12">
                                <!-- mt logo start here -->
                                <div class="mt-logo" style="height:50px;    width:50px;">
                                    <a href="../scripts/home.php"><img src="../Images/logos/Rentac.jpg"
                                            alt="Rentac"></a>
                                </div>
                                <!-- mt icon list start here -->
                                <ul class="mt-icon-list">
                                    <li class="hidden-lg hidden-md">
                                        <a href="#" class="bar-opener mobile-toggle">
                                            <span class="bar"></span>
                                            <span class="bar small"></span>
                                            <span class="bar"></span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- mt icon list end here -->
                                <!-- navigation start here -->
                                <nav id="nav">
                                    <ul>
                                        <li>
                                            <a href="../scripts/home.php">HOME <i class="fa fa-angle-down hidden-lg hidden-md"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="../scripts/product.php">PRODUCTS <i
                                                    class="fa fa-angle-down hidden-lg hidden-md"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                        <li class="drop">
                                            <a href="#">Events <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                            <!-- mt dropmenu start here -->
                                            <div class="mt-dropmenu text-left" style="left:30%; right:0%;">
                                                <!-- mt frame start here -->
                                                <div class="mt-frame"
                                                    style="max-width: 500px; width: 300px; padding: 15px;">
                                                    <!-- mt f box start here -->
                                                    <div class="mt-col-3">
                                                        <div class="sub-dropcont">
                                                            <strong class="title"><a href="product.php"
                                                                    class="mt-subopener">Social
                                                                    Events</a></strong>
                                                            <div class="sub-drop">
                                                                <ul>
                                                                    <li><a
                                                                            href="../scripts/product.php?event=birthday">Birthday</a>
                                                                    </li>
                                                                    <li><a
                                                                            href="../scripts/product.php?event=seminar">Seminar</a>
                                                                    </li>
                                                                    <li><a
                                                                            href="../scripts/product.php?event=party">Party</a>
                                                                    </li>
                                                                    <li><a
                                                                            href="../scripts/product.php?event=wedding">Wedding</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- mt col3 end here -->
                                                    </div>
                                                    <!-- mt f box end here -->
                                                </div>
                                                <!-- mt frame end here -->
                                            </div>
                                            <!-- mt dropmenu end here -->
                                            <span class="mt-mdropover"></span>
                                        </li>
                                        <li><a href="../pages/aboutus.html">About</a></li>
                                        <li>
                                            <a href="../pages/contactus.html">Contact <i
                                                    class="fa fa-angle-down hidden-lg hidden-md"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                          <?php 
                                                if( (!isset($_SESSION["user"]) || $_SESSION["user"] == "guest" ) ){
                                            ?>
                                              <a href="../pages/login.html">Login <i
                                                      class="fa fa-angle-down hidden-lg hidden-md"
                                                      aria-hidden="true"></i></a>
                                            <?php   }else{   ?>
                                              <a href="../scripts/userprofile.php">User Profile <i
                                                      class="fa fa-angle-down hidden-lg hidden-md"
                                                      aria-hidden="true"></i></a>
                                            <?php   }   ?>
                                            
                                          </li>
                                          <li><a href="../scripts/trackorder.php"><i class="icon-handbag"></i></a></li>
                                    </ul>
                                </nav>
                                <!-- mt icon list end here -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- mt bottom bar end here -->
                <span class="mt-side-over"></span>
            </header><!-- mt header style4 end here -->
      <!-- mt search popup start here -->
      <div class="mt-search-popup">
        <div class="mt-holder">
          <a href="#" class="search-close"><span></span><span></span></a>
          <div class="mt-frame">
            <form action="#">
              <fieldset>
                <input type="text" placeholder="Search...">
                <span class="icon-microphone"></span>
                <button class="icon-magnifier" type="submit"></button>
              </fieldset>
            </form>
          </div>
        </div>
      </div><!-- mt search popup end here -->
      <!-- Main of the Page -->
      <main id="mt-main">
        <section class="mt-contact-banner wow fadeInUp" data-wow-delay="0.4s" >
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <h1 class="text-center">SHOPPING CART</h1>
                <!-- Breadcrumbs of the Page -->
                <nav class="breadcrumbs">
                  <ul class="list-unstyled text-center">
                    <li><a href="../scripts/home.php">Home <i class="fa fa-angle-right"></i></a></li>
                    <li>Order Placed</li>
                  </ul>
                </nav>
                <!-- Breadcrumbs of the Page end -->
              </div>
            </div>
          </div>
        </section>
        <!-- Mt Process Section of the Page -->
        <div class="mt-process-sec wow fadeInUp" data-wow-delay="0.4s">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <ul class="list-unstyled process-list">
                <li>
                    <span class="counter">01</span>
                    <strong class="title">Shopping Cart</strong>
                </li>
                <li>
                    <span class="counter">02</span>
                    <strong class="title">Billing Details</strong>
                </li>
                <li class="active">
                    <span class="counter">03</span>
                    <strong class="title">Order Placed</strong>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div><!-- Mt Process Section of the Page end -->
        <!-- Mt Product Table of the Page -->
        <div class="mt-product-table wow fadeInUp" data-wow-delay="0.4s">
          <div class="container">
                <div id="orderMessageWrapper" style="padding: 15px; border: 2px solid #4CAF50; background-color: #DFF2BF; color: #4CAF50; font-size: 18px; text-align: center; margin: 20px auto; width: 80%; border-radius: 5px; opacity: 0; transform: translateY(-20px); transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;">
                    <h1 class="text-center">✔ Order Placed Successfully</h1>
                </div>
          </div>
        </div><!-- Mt Product Table of the Page end -->
        <footer id="mt-footer" class="style7 wow fadeInUp" data-wow-delay="0.4s">
          <div class="footer-holder bg-grey">
              <div class="container">
                  <div class="row">
                      <div class="col-xs-12 col-sm-4 mt-paddingbottomsm">
                          <!-- F Widget About of the Page -->
                          <div class="f-widget-about">
                              <div class="logo">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-8">
                                        <a href="../scripts/home.php"><img src="../Images/logos/Rentac.jpg"
                                                alt="Rentac"></a>
                                    </div>
                                    <div class="col-xs-12 col-sm-4 text-center">
                                        <h3 style="margin : 19px 0 0 0"> Rentac </h3>
                                    </div>
                                </div>
                            </div>
                              <ul class="list-unstyled address-list">
                                  <li><i class="fa fa-map-marker"></i>
                                      <address>Department of Computer Science, Gujarat University <br>Ahmedabad -
                                          384002
                                      </address>
                                  </li>
                                  <li><i class="fa fa-phone" style="margin-bottom: 10px;"></i><a
                                          href="../scripts/home.php">+91 XX
                                          XX XX
                                          XX</a></li>
                                  <li><i class="fa fa-envelope-o"></i><a href="../scripts/home.php">rentac01@gmail.com</a>
                                  </li>
                              </ul>
                          </div>
                          <!-- F Widget About of the Page end -->
                      </div>
                      <nav class="col-xs-12 col-sm-8 col-md-5 mt-paddingbottomsm">
                          <!-- Footer Nav of the Page -->
                          <div class="nav-widget-1">
                              <h3 class="f-widget-heading">Categories</h3>
                              <ul class="list-unstyled f-widget-nav">
                                  <li><a href="../scripts/product.php?category=chair">Chairs</a></li>
                                  <li><a href="../scripts/product.php?category=sofa">Sofas</a></li>
                                  <li><a href="../scripts/product.php?category=table">Tables</a></li>
                              </ul>
                          </div>
                          <!-- Footer Nav of the Page end -->
                          <!-- Footer Nav of the Page -->
                          <div class="nav-widget-1">
                              <h3 class="f-widget-heading">Information</h3>
                              <ul class="list-unstyled f-widget-nav">
                                  <li><a href="../pages/aboutus.html">About Us</a></li>
                                  <li><a href="../pages/contactus.html">Contact Us</a></li>
                              </ul>
                          </div>
                          <!-- Footer Nav of the Page end -->
                          <!-- Footer Nav of the Page -->
                          <div class="nav-widget-1">
                              <h3 class="f-widget-heading">Account</h3>
                              <ul class="list-unstyled f-widget-nav">
                                  <li><a href="../scripts/userprofile.php">My Account</a></li>
                                  <li><a href="../scripts/trackorder.php">Order Tracking</a></li>
                                  <li><a href="../scripts/cart.php">Shopping Cart</a></li>
                              </ul>
                          </div>
                          <!-- Footer Nav of the Page end -->
                      </nav>
                  </div>
              </div>
              <!-- Footer Area of the Page -->
              <div class="footer-area">
                  <div class="container">
                      <div class="row">
                          <div class="col-xs-12 col-sm-6">
                              <p>© <a href="../scripts/home.php">Rentac.</a> - All rights Reserved</p>
                          </div>
                      </div>
                  </div>
              </div>
                    <!-- Footer Area of the Page end -->
            </footer><!-- footer of the Page end -->
      <!-- footer of the Page end -->
    </div>
    <span id="back-top" class="fa fa-arrow-up"></span>
  </div>
  <!-- include jQuery -->
  <script src="../js/jquery.js"></script>
  <!-- include jQuery -->
  <script src="../js/plugins.js"></script>
  <!-- include clear console -->
  <script src="../js/clear console.js"></script>
  <!-- include jQuery -->
  <script src="../js/jquery.main.js"></script>
  <script src="../js/orderplaced.js"></script>
  
</body>
</html>