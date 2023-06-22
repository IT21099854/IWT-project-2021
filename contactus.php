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
            <li><a href="index.php">Home page</a></li>
            <li><a href="onlinestore.php">Online Store</a></li>
            <li><a href="categories.php">Categories</a></li>
            <!-- <li><a href="shortcodes.html">Short Codes</a></li> -->
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="contactus.php" class="active">Contact Us</a></li>
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
            <h2>Contact Us</h2>
        <span class="h-line"></span> </div>
      <!-- Start Main Content -->
      <section class="span12 first">
        
        <!-- Start Map Section -->
        <section class="map-holder">
        	<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.mu/?ie=UTF8&amp;ll=-20.234496,57.603722&amp;spn=0.093419,0.169086&amp;t=m&amp;z=13&amp;output=embed"></iframe>
        </section>
        <!-- Start Map Section -->
        
        <div class="span6 c-form-holder first">
        	<!-- Start Contact form Section -->
        <form class="form-horizontal" action="submit_contactus_request.php" method="post" enctype="multipart/form-data">
          <div class="control-group">
            <label class="control-label" for="inputEmail">Name <sup>*</sup></label>
            <div class="controls">
              <input type="text" id="name" name="name" placeholder="Enter Name" required="required">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="inputPassword">Email <sup>*</sup></label>
            <div class="controls">
              <input type="email" id="email" name="email" placeholder="Enter email" required="required">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="inputPassword">Subject <sup>*</sup></label>
            <div class="controls">
              <input type="text" id="subject" name="subject" placeholder="Enter title" required="required">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="inputPassword">Message <sup>*</sup></label>
            <div class="controls">
              <textarea name="message" cols="2" rows="20" placeholder="Enter the message" required="required"></textarea>
            </div>
          </div>
          <div class="control-group">
            <div class="controls">
              <button type="submit" class="more-btn2">SEND</button>
            </div>
          </div>
        </form>
        <!-- End Contact form Section -->
        </div>
        <div class="span6">
        	<strong>Contact Info</strong>
        	<p>Office No. 23, 1st Floor,<br /> Media City, Hatton, <br />Sri Lanka.</p>
            <p>Phone: (051) 456-7890 <br />Fax: +94 (51) 456-7890 <br />Email: <a href="#">info@knowledgebay.lk</a> <br />Web: <a href="#">knowledgebay.lk</a></p>
            <strong>Dear Readers,</strong>
            <p>We offer tremendous gathering of books in various classification of Fiction, Non-fiction, Biographies, History, Religions, Self – Help, Children. 
                We likewise move in immense accumulation of Investments and Management, Computers, Engineering, Medical, College and School content references books 
                proposed by various foundations as schedule the nation over. Other than to this, we likewise offer an expansive gathering of E-Books at reasonable valuing.</p>
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
