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
            <h2>Create Account on Knowledge Bay</h2>
        <span class="h-line"></span> </div>
        <!-- Start Main Content -->
        <section class="span12 first">
                <strong class="green-t">Create your account</strong>
                    <form class="form-horizontal" action="register_a.php" method="post" enctype="multipart/form-data">
                        <ul class="billing-form">
                            <li>   
                              <div class="control-group">
                                <label class="control-label" for="inputFirstname">Name <sup>*</sup></label>
                                <div class="controls">
                                  <input type="text" name="first_name" placeholder="Name" required="required">
                                </div>
                              </div>
                              <div class="control-group">
                                <label class="control-label" for="inputLastname">E-mail<sup>*</sup></label>
                                <div class="controls">
                                  <input type="email" id="inputLastname" name="email" placeholder="Email" required="required">
                                </div>
                              </div>
                              
                            </li>
                            <li>   
                              <div class="control-group">
                                <label class="control-label" for="pass">Password<sup>*</sup></label>
                                <div class="controls">
                                  <input name="password" type="password" placeholder="Password" id="password" required="required" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$"
                                  title="Password must contain: Minimum 6 characters atleast 1 Alphabet and 1 Number">
                                </div>
                              </div>
                              <div class="control-group">
                                <label class="control-label" for="cpass">Confirm Password<sup>*</sup></label>
                                <div class="controls">
                                  <input name="confirm_password" type="password"  placeholder="Confirm Password" id="confirm_password" required="required">
                                </div>
                              </div>
                            </li>
                            <li>   
                              <div class="control-group">
                                <label class="control-label" for="inputAddress">Address<sup>*</sup></label>
                                <div class="controls">
                                  <input type="text" name="address" placeholder="Address" required="required" class="address-field">
                                </div>
                              </div>
                            </li>
                            <li>   
                              <div class="control-group">
                                <label class="control-label" for="inputCity">Phone <sup>*</sup></label>
                                <div class="controls">
                                  <input type="number" name="phone" placeholder="Phone Number" required="required">
                                </div>
                              </div>
                              <div class="control-group">
                                <label class="control-label" for="inputState/Province">Image<sup>*</sup></label>
                                <div class="controls">
                                  <input type="file" name="file" accept=".jpg,.jpeg,.png" required>
                                </div>
                              </div>
                            </li>
                            <li>   
                              <div class="control-group">
                                <label class="control-label" for="inputCountry">Payment Method <sup>*</sup></label>
                                <div class="controls">
                                  <select name="payment_method">
                                        <option value="Cash_On_Delivery">Cash on Delivery</option>
                                        <option value="Pay_By_Card">Pay By Card</option>
                                   </select>
                                </div>
                              </div>
                            </li>
                            <li>   
                
                              <div class="control-group">
                                <div class="controls">
                                  <strong class="green-t">* Required Fields</strong>
                                  <div class="text-center">Already have an account? <a href="login.php">Sign in</a></div>
                                </div>
                              </div>
                            </li>
                        	<li>
                            	<div class="control-group">
                                <div class="controls">
                                  <button type="submit" name="save" class="more-btn">Register</button>
                                </div>
                              </div>
                            </li>
                        </ul>
                    </form>
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
  window.onload = function () {
        var txtPassword = document.getElementById("password");
        var txtConfirmPassword = document.getElementById("confirm_password");
        txtPassword.onchange = ConfirmPassword;
        txtConfirmPassword.onkeyup = ConfirmPassword;
        function ConfirmPassword() {
            txtConfirmPassword.setCustomValidity("");
            if (txtPassword.value != txtConfirmPassword.value) {
                txtConfirmPassword.setCustomValidity("Passwords do not match.");
            }
        }
    }
  $(document).ready(function() {
  $('.social_active').hoverdir( {} );
})
/* ]]> */
</script>
</body>
</html>
