<?php
  session_start();
  include_once 'database.php';
  // include 'submit_review.php';
  $bookId = $_GET["bookid"];
  $result = mysqli_query($conn,"SELECT books.*, author.*
                                FROM books
                                JOIN author ON books.author = author.id
                                WHERE books.id = $bookId");
  $reviews =  mysqli_query($conn,"SELECT * FROM book_review WHERE book_id = $bookId ORDER BY created_at DESC LIMIT 6");
  $bestSellers = mysqli_query($conn,"SELECT * FROM books WHERE best_seller=1 LIMIT 4");                               
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


  <?php 
    $bookDetail = mysqli_fetch_array($result);
    $reviewDetails = mysqli_fetch_array($reviews);
    $sql="SELECT * FROM book_review WHERE book_id = $bookId ORDER BY created_at DESC";
    if ($res = mysqli_query($conn,$sql)){
      $reviewCount = mysqli_num_rows($res);
    }else{
      $reviewCount = 0;
    }
  ?>
  <!-- Start Main Content -->
  <section id="content-holder" class="container-fluid container">
        <section class="row-fluid">
    	<div class="heading-bar">
        	<h2>Book Detail</h2>
            <span class="h-line"></span>
        </div>
        <!-- Start Main Content -->
        <section class="span9 first">
            <!-- Strat Book Detail Section -->
            <section class="b-detail-holder">
            	<article class="title-holder">
                	<div class="span6">
                    	<h4><strong><?php echo $bookDetail['name'];?></strong> by <?php echo $bookDetail['author_name'];?></h4>
                    </div>
                    <div class="span6 book-d-nav">
                    	<ul>
                        	<li><a href="#"><?php echo $reviewCount;?> Reviews</a></li>
                        </ul>
                    </div>
                </article>
                <div class="book-i-caption">
                <!-- Strat Book Image Section -->
                	<div class="span6 b-img-holder">
                        <span class='zoom' id='ex1'> <img src='images/image26.jpg' height="219" width="300" id='jack' alt=''/></span>
                    </div>
                <!-- Strat Book Image Section -->
                
                <!-- Strat Book Overview Section -->    
                    <div class="span6">
                    	<strong class="title">Quick Overview</strong>
                    	<p><?php echo $bookDetail['description'];?></p>
                   		<p>Availability: <a href="#">In stock</a></p>
                        <div class="comm-nav">
                        	<strong class="title2">Quantity</strong>
                            <ul>
                            	<li><input name="" type="text" /></li>
                                <li class="b-price"><?php echo $bookDetail['price'].".00 USD";?></li>
                                <!-- <li><a href="cart.html" class="more-btn">+ Add to Cart</a></li> -->
                            </ul>
                            <a href="addtowishlist.php?bookid=<?php echo $bookDetail['id']?>&userid=<?php echo isset($_SESSION["id"]) ? $_SESSION["id"] : '-1'?>">Add to Wishlist</a>
                            <?php
                              if(isset($_GET['wishlist']) && $_GET['wishlist'] == 'success'){  
                            ?>
                              <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>Added to Wishlist</strong> 
                              </div>
                            <?php }?>
                        </div>
                   </div>
                <!-- End Book Overview Section -->
                </div>
                
                <!-- Start Book Summary Section -->
                	<div class="tabbable">
                      <ul class="nav nav-tabs">
                        <li class="active"><a href="#pane1" data-toggle="tab">Book Summary</a></li>
                        <li><a href="#pane2" data-toggle="tab">Additional Information</a></li>
                      </ul>
                      <div class="tab-content">
                        <div id="pane1" class="tab-pane active">
                          <p><?php echo $bookDetail['summary'];?></p>
                        </div>
                        <div id="pane2" class="tab-pane">
                          <p><?php echo $bookDetail['additional_info'];?></p>
                        </div>
                      </div><!-- /.tab-content -->
                    </div><!-- /.tabbable -->
                <!-- End Book Summary Section -->
            
            <!-- Start BX Slider holder -->  
            <section class="related-book">
            <div class="heading-bar">
            	<h2>Related Books</h2>
                <span class="h-line"></span>
            </div>
            <div class="slider6">
                <?php
                  $i=0;
                  while($row = mysqli_fetch_array($bestSellers)) {
                  ?>
                      <div class="slide">
                        <a href="book-detail.php?bookid=<?php echo $row["id"]; ?>"><img src="<?php echo $row["image"]; ?>" alt="" class="pro-img"/></a>
                        <span class="title"><a href="book-detail.php?bookid=<?php echo $row["id"]; ?>"><?php echo $row["name"]; ?></a></span>
                        <span class="rating-bar"><img src="images/rating-star.png" alt="Rating Star"/></span>
                        <div class="cart-price">
                            <a class="cart-btn2" href="cart.html">Add to Cart</a>
                            <span class="price"><?php echo $row["price"].".00 USD"; ?></span>
                        </div>
                      </div>
                  <?php
                    $i++;
                  } 
                  ?>    
                    </div>
               </section>
            <!-- End BX Slider holder -->
            
            <!-- Stsrt Customer Reviews Section -->
            	<section class="reviews-section">
                	<figure class="left-sec">
                    	<div class="r-title-bar">
                        	<strong>Customer Reviews</strong>
                        </div>
                        <ul class="review-list">
                          <?php if($reviewCount > 0) {?>
                            <?php
                              $customerReviews =  mysqli_query($conn,"SELECT * FROM book_review WHERE book_id = $bookId ORDER BY created_at DESC LIMIT 6");
                              $i=0;
                              while($reviewRow = mysqli_fetch_array($customerReviews)) {
                              ?>
                                <li>
                                  <span class="rating-bar"><img src="images/rating-star.png" alt="Rating Star"/></span>
                                  <em class=""><?php echo ucfirst($reviewRow['summary']);?></em>
                                  <p>“ <?php echo $reviewRow['review'];?> ” Review by <?php echo ucfirst($reviewRow['name_of_reviewer']);?>’</p>
                                </li>
                            <?php
                                $i++;
                              } 
                            ?>    
                            <?php } else {?>
                              <?php echo "No reviews to show";
                            }?>
                        </ul>
                        <a href="#" class="grey-btn">Write Your Own Review</a>
                    </figure>
                
                	<figure class="right-sec">
                    	<div class="r-title-bar">
                        	<strong>Write Your Own Review</strong>
                        </div>
                        <form action="submit_review.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="bookid", value="<?php echo $bookDetail['id'];?>">
                        <ul class="review-f-list">
                        	<li>
                            	<label>Your name *</label>
                                <input name="name" type="text" placeholder="Enter your name" required="required"/>
                                <!-- <span class="error" style="color: red;">* <?php echo $nameErr;?></span> -->
                            </li>
                            <li>
                            	<label>Summary of your review *</label>
                            	<input name="summary" type="text" placeholder="Review summary" required="required"/>
                              <!-- <span class="error" style="color: red;">* <?php echo $summaryErr;?></span> -->
                            </li>
                            <li>
                            	<label>Your review *</label>
                                <textarea name="review" cols="2" rows="20" placeholder="Enter review" required="required"></textarea>
                                <!-- <span class="error" style="color: red;">* <?php echo $reviewErr;?></span> -->
                            </li>
                        </ul>
                        <input type="submit" name="submit" value="Write Your Own Review" class="grey-btn left-btn">
                        </form>
                    </figure>
                </section>
            <!-- End Customer Reviews Section -->
            </section>
            <!-- Strat Book Detail Section -->
        </section>
        <!-- End Main Content -->
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
  .error {color: #FF0000;}
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
