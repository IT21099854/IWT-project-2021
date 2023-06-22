<?php 
  session_start();
  include_once 'database.php';
  $bestSellers = mysqli_query($conn,"SELECT * FROM books WHERE best_seller=1");
  $latestPickups = mysqli_query($conn,"SELECT * FROM books ORDER BY created_at DESC LIMIT 20");
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
          <h1 id="logo"> <a href="index.html"><img src="images/knowledge_bay_logo.png" width="150" height="300"/></a> </h1>
        </section>
        <section class="span8">
          <?php if(isset($_SESSION['id']) && ($_SESSION['id'])) { ?>
            <ul class="top-nav2">
              <li><a href="myaccount.php">My Account</a></li>
              <li><a href="userwishlist.php">My Wishlist </a></li>
              <!--<li><a href="checkout.html">Checkout</a></li> -->
            </ul>
          <?php } ?>
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
    <!-- Start latest pickups -->
    <section class="row-fluid features-books">
      <section class="span12 m-bottom">
        <div class="heading-bar">
          <h2>LATEST PICKUPS</h2>
          <span class="h-line"></span> </div>
        <div class="slider1">
          <?php
            $i=0;
            while($row = mysqli_fetch_array($bestSellers)) {
            ?>
              <div class="slide"> <a href="book-detail.php?bookid=<?php echo $row["id"]; ?>"><img src="<?php echo $row["image"]; ?>" width="140" height="207" alt="" class="pro-img"/></a> <span class="title"><a href="book-detail.html"><?php echo $row["name"]; ?></a></span> <span class="rating-bar"><img src="images/rating-star.png" alt="Rating Star"/></span>
                <div class="cart-price"> <a class="cart-btn2" href="">Add to Cart</a> 
                <span class="price"><?php echo $row["price"].".00 USD"; ?></span> </div>
              </div>
          <?php
            $i++;
          } 
          ?>    
        </div>
      </section>
    </section>
    <!-- End latest pickup -->

    <!-- Start Best sellers -->
    <section class="row-fluid features-books">
      <section class="span12 m-bottom">
        <div class="heading-bar">
          <h2>BEST SELLERS</h2>
          <span class="h-line"></span> </div>
        <div class="slider1">
          <?php
            $i=0;
            while($row = mysqli_fetch_array($latestPickups)) {
            ?>
              <div class="slide"> <a href="book-detail.php?bookid=<?php echo $row["id"]; ?>"><img src="<?php echo $row["image"]; ?>" width="140" height="207" alt="" class="pro-img"/></a> <span class="title"><a href="book-detail.html"><?php echo $row["name"]; ?></a></span> <span class="rating-bar"><img src="images/rating-star.png" alt="Rating Star"/></span>
                <div class="cart-price"> <a class="cart-btn2" href="">Add to Cart</a> <span class="price"><?php echo $row["price"].".00 USD"; ?></span> </div>
              </div>
          <?php
            $i++;
          } 
          ?>
        </div>
      </section>
    </section>
    <!-- End Best sellers -->
    
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
