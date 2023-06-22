<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Knowledge Bay</title>
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta charset="UTF-8">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<meta name="viewport" content="width=device-width">
<!-- Css Files Start -->
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/bs.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/main-slider.css" />
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="css/font-awesome-ie7.css" rel="stylesheet" type="text/css" />
<noscript>
  <link rel="stylesheet" type="text/css" href="css/noJS.css" />
</noscript>
<!-- Css Files End -->
</head>
<body>


<div class="wrapper">
  <!-- Start Main Header -->
  <section class="top-nav-bar">
    <section class="container-fluid container">
      <section class="row-fluid">
        <section class="span6">
          <ul class="top-nav">
            <li><a href="index.php" class="active">Home page</a></li>
            <li><a href="onlinestore.php">Online Store</a></li>
            <li><a href="categories.php">Categories</a></li>
            <!-- <li><a href="shortcodes.html">Short Codes</a></li> -->
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
          </ul>
          </ul>
        </section>
        <section class="span6 e-commerce-list">
          <ul>
            <li>Welcome! <?php if(isset($_SESSION['id']) && ($_SESSION['id'])) { ?>
                <?php echo $_SESSION['name'];?> <a href="logout.php">Logout</a></li>
              <?php } else {?>
                <a href="login.php">Login</a> or <a href="register.php">Create an account</a></li>
              <?php }?>
          </ul>
          <!-- <div class="c-btn"> <a href="cart.html" class="cart-btn">Cart</a>
            <div class="btn-group">
              <button data-toggle="dropdown" class="btn btn-mini dropdown-toggle">0 item(s) - $0.00<span class="caret"></span></button>
            </div>
          </div> -->
        </section>
      </section>
    </section>
  </section>

  <header id="main-header">
    <section class="container-fluid container">
      <section class="row-fluid">
        <section class="span4">
          <h1 id="logo"> <a href="index.php"><img src="images/knowledge_bay_logo.png" width="150" height="300"/></a> </h1>
        </section>
        <section class="span8">
          <?php if (isset($_SESSION['id']) && ($_SESSION['id'])) {?>
            <ul class="top-nav2">
              <li><a href="myaccount.php">My Account</a></li>
              <li><a href="userwishlist.php">My Wishlist </a></li>
              <!--<li><a href="checkout.html">Checkout</a></li> -->
            </ul>
          <?php }?>
          <div class="search-bar">
            <input name="" type="text" value="search entire store here..." />
            <input name="" type="button" value="Serach" />
          </div>
        </section>
      </section>
    </section>
    <nav id="nav">
      <div class="navbar navbar-inverse">
      </div>
    </nav>
  </header>
  <!-- End Main Header -->


  <!-- Start Main Content -->
  <section id="content-holder" class="container-fluid container">
        <section class="row-fluid">
            <div class="heading-bar">
            <h2>Login To Knowledge Bay</h2>
        <span class="h-line"></span> </div>
        <?php if (isset($_GET['status']) && ($_GET['status'] == 'fail')) {?>
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>Invalid crendentials!</strong>
                    </div>
                    <?php }?>
        <!-- Start Main Content -->
        <section class="span12 first">
                <div class="span5 check-method-right"> <strong class="green-t">Login</strong>
                    <p>Already registered? Please log in below:</p>
                    <form class="form-horizontal" action="loginProcess.php" method="post" enctype="multipart/form-data">
                      <div class="control-group">
                        <label class="control-label" for="inputEmail">Email Address <sup>*</sup></label>
                        <div class="controls">
                          <input type="email" id="email" name="email" placeholder="Email" required="required">
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="inputPassword">Password <sup>*</sup></label>
                        <div class="controls">
                          <input type="password" id="inputPassword" name="pass" placeholder="Password" required="required">
                        </div>
                      </div>
                      <p><a href="register.php">Dont have an account?</a></p>
                      <div class="control-group">
                        <div class="controls">
                          <button type="submit" name="save" class="more-btn">Login</button>
                        </div>
                      </div>
                    </form>
                </div>
        </section>
        </section>
  </section>
  <!-- End Main Content -->

  <!-- Start Footer -->
  <section class="container-fluid footer-top1">
    <section class="container">
      <section class="row-fluid">
        <figure class="span3">
        </figure>
        <figure class="span3">
        </figure>
        <figure class="span3">
          <h4>Newsletter</h4>
          <p>Subscribe to be the first to know about Best Deals and Exclusive Offers!</p>
          <input name="" type="text" class="field-bg" value="Enter Your Email"/>
          <input name="" type="submit" value="Subscribe" class="sub-btn" />
        </figure>
        <figure class="span3">
          <h4>Opening Time</h4>
          <p>Monday-Friday ______8.00am to 6.00pm</p>
          <p>Saturday ____________ 9.00am to 6.00pm</p>
          <p>Sunday _____________10.00am to 2.00pm</p>
        </figure>
      </section>
    </section>
  </section>


  <section class="container-fluid footer-top2">
    <section class="social-ico-bar">
      <section class="container">
        <section class="row-fluid">
          <div id="socialicons" class="hidden-phone">
            <a id="social_linkedin" class="social_active" href="https://www.linkedin.com/" title="Visit Linkedin page"><span></span></a>
            <a id="social_facebook" class="social_active" href="https://www.facebook.com/" title="Visit Facebook page"><span></span></a>
            <a id="social_twitter" class="social_active" href="https://twitter.com/" title="Visit Twitter page"><span></span></a>
            <a id="social_youtube" class="social_active" href="https://www.youtube.com/" title="Visit Youtube"><span></span></a>
            <a id="social_google_plus" class="social_active" href="https://vimeo.com/" title="Visit Vimeo"><span></span></a>
          </div>
          <ul class="footer2-link">
            <li><a href="about-us.html">About Us</a></li>
          </ul>
        </section>
      </section>
    </section>
  </section>


  <footer id="main-footer">
    <section class="social-ico-bar">
      <section class="container">
        <section class="row-fluid">
          <article class="span6">
            <p>© 2021  Knowledge Bay Online Book Store </p>
          </article>
          <article class="span6 copy-right">
            <p>Designed by Knowledgebay.lk</p>
          </article>
        </section>
      </section>
    </section>
  </footer>
  <!-- End Footer -->
</div>

<!-- JS Files Start -->
<script type="text/javascript" src="js/lib.js"></script>
<script type="text/javascript" src="js/modernizr.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/bs.js"></script>
<script type="text/javascript" src="js/bxslider.js"></script>
<script type="text/javascript" src="js/input-clear.js"></script>
<script src="js/range-slider.js"></script>
<script src="js/jquery.zoom.js"></script>
<script type="text/javascript" src="js/bookblock.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/social.js"></script>
<!-- JS Files End -->
<noscript>
<style>
	#socialicons>a span { top: 0px; left: -100%; -webkit-transition: all 0.3s ease; -moz-transition: all 0.3s ease-in-out; -o-transition: all 0.3s ease-in-out; -ms-transition: all 0.3s ease-in-out; transition: all 0.3s 	ease-in-out;}
	#socialicons>ahover div{left: 0px;}
	</style>
</noscript>
<script type="text/javascript">
  /* <![CDATA[ */
  $(document).ready(function() {
  $('.social_active').hoverdir( {} );
})
/* ]]> */
</script>
</body>
</html>
