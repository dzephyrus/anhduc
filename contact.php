<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Neha - Minimalist eCommerce HTML5 Template </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- all css here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/slinky.min.css">
        <link rel="stylesheet" href="assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/ionicons.min.css">
        <link rel="stylesheet" href="assets/css/bundle.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- header start -->
        <div class="wrapper">
            <!-- Newsletter Popup Start -->
            <div class="popup_wrapper hidden-sm hidden-xs">
                <div class="test">
                    <span class="popup_off">Close</span>
                    <div class="subscribe_area text-center">
                        <h2>Newsletter</h2>
                        <p>Subscribe to the Neha mailing list to receive updates on new arrivals, special offers and other discount information.</p>
                        <div id="mc_embed_signup" class="subscribe-bottom">
                            <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                <div id="mc_embed_signup_scroll" class="mc-form">
                                    <input type="email" value="" name="EMAIL" class="email" placeholder="Enter your email address" required>
                                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div class="mc-news" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                    <div class="clear-2"><input type="submit" value="subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                                </div>
                            </form>
                        </div>
                        <div class="subscribe-bottom mt-15">
                            <input type="checkbox" id="newsletter-permission">
                            <label for="newsletter-permission">Don't show this popup again</label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Newsletter Popup End -->
            <header class="pl-155 pr-155 intelligent-header">
                <div class="header-area header-area-2">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters">
                            <div class="col-lg-3 col-md-6 col-6">
                                <div class="logo">
                                <?php
						include 'connection.php';
					$stmt = $conn->query("select * from setting");
					foreach($stmt as $key => $row){
					?>
					
					<a href="trangchu.php"><img src="image/<?=$row['logo']?>" style="width: 100px; background-color: #343A40" alt="" width="70%" ></a>
				
					<?php 
					}
					?>
                                </div>
                            </div>
                            <div class="col-lg-6 menu-none-block menu-center">
                                <div class="main-menu">
                                    <nav>
                                        <ul>
                                            <li><a href="home.php">home</a></li>
                                            <li><a href="about-us.php">about us</a></li>
                                            <li><a href="shop-grid-view-5-col.html">shop</a>
                                            <ul class="dropdown">
													<?php
														include"connection.php";
														$sql= "select * from category";
														//Xử lý lệnh sql
														$stmt = $conn->prepare($sql);
														$stmt->execute();
														$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
													?>
															<?php
																foreach($result as $row){
																	?>
																		 <li><a href="shop-grid-view-5-col.php?id=<?=$row['id_cate']?>"><?=$row['name_cate']?></a></li>


																	<?php
																}
															?>
														
													</ul> 
                                            
                                            
                                            
                                            
                                            
                                            </li>
                                            <li><a href="#">pages</a>
                                                <ul class="dropdown">
                                                    <li><a href="about-us.html">about us</a></li>
                                                    <li><a href="cart.html">cart</a></li>
                                                    <li><a href="checkout.html">checkout</a></li>
                                                    <li><a href="wishlist.html">wishlist</a></li>
                                                    <li><a href="contact.html">contact</a></li>
                                                    <li><a href="login.html">login</a></li>
                                                    <li><a href="register.html">register</a></li>
                                                </ul>
                                            </li>
                                            
                                            <li><a href="contact.php">contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-6">
                                <div class="header-search-cart">
										<div class="main-menu">
                                   			 <nav>
                                      			 <ul>
													<li><a href="#">Tài khoản</a>
															<ul class="dropdown">
																<li><a href="login.php">Đăng nhập</a></li>
																<li><a href="cart.html">Đăng ký</a></li>
															</ul>
													</li>
													
												</ul>
									</div>
                                <div class="header-search-cart">
                                    <div class="header-search common-style">
                                        <button class="sidebar-trigger-search">
                                            <span class="ion-ios-search-strong"></span>
                                        </button>
                                    </div>
                                    <div class="header-cart common-style">
                                        <button class="sidebar-trigger">
                                            <span class="ion-bag"></span>
                                        </button>
                                    </div>
                                    <div class="header-sidebar common-style">
                                        <button class="header-navbar-active">
                                            <span class="ion-navicon"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="mobile-menu-area d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
                                <div class="mobile-menu">
                                    <nav id="mobile-menu-active">
                                        <ul class="menu-overflow">
                                            <li><a href="#">HOME</a>
                                                <ul>
                                                    <li><a href="index.html">furniture</a></li>
                                                    <li><a href="index-electronics.html">electronics</a></li>
                                                    <li><a href="index-fashion.html">fashion</a></li>
                                                    <li><a href="index-jewellery.html">jewellery</a></li>
                                                    <li><a href="index-food-drink.html">food & drink</a></li>
                                                    <li><a href="index-toys.html">Toys & Games</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">pages</a>
                                                <ul>
                                                    <li><a href="about-us.html">about us</a></li>
                                                    <li><a href="cart.html">cart</a></li>
                                                    <li><a href="checkout.html">checkout</a></li>
                                                    <li><a href="wishlist.html">wishlist</a></li>
                                                    <li><a href="contact.html">contact</a></li>
                                                    <li><a href="login.html">login</a></li>
                                                    <li><a href="register.html">register</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">shop</a>
                                                <ul>
                                                    <li><a href="shop-grid-view-3-col.html">grid 3 column</a></li>
                                                    <li><a href="shop-grid-view-5-col.html">grid 5 column</a></li>
                                                    <li><a href="shop-grid-view-sidebar.html">grid with sidebar</a></li>
                                                    <li><a href="shop-list-view-1-col.html">list 1 column</a></li>
                                                    <li><a href="shop-list-view-2-col.html">list 2 column</a></li>
                                                    <li><a href="shop-list-view-sidebar.html">list with sidebar</a></li>
                                                    <li><a href="shop-list-view-1-col-container.html">list 1 column box</a></li>
                                                    <li><a href="product-details.html">tab style 1</a></li>
                                                    <li><a href="product-details-2.html">tab style 2</a></li>
                                                    <li><a href="product-details-3.html">tab style 3</a></li>
                                                    <li><a href="product-details-6.html">sticky style</a></li>
                                                    <li><a href="product-details-7.html">sticky style 2</a></li>
                                                    <li><a href="product-details-8.html">gallery style</a></li>
                                                    <li><a href="product-details-9.html">gallery style 2</a></li>
                                                    <li><a href="product-details-4.html">fixed image style</a></li>
                                                    <li><a href="product-details-5.html">fixed image style 2</a></li> 
                                                </ul>
                                            </li>
                                            <li><a href="#">BLOG</a>
                                                <ul>
                                                    <li><a href="blog.html">blog </a></li>
                                                    <li><a href="blog-2-col.html">blog 2 column</a></li>
                                                    <li><a href="blog-left-sidebar.html">blog left sidebar</a></li>
                                                    <li><a href="blog-details.html">blog details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html"> Contact  </a></li>
                                        </ul>
                                    </nav>							
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="header-space"></div>
            <!-- header end -->
            <!-- sidebar-cart start -->
            <div class="sidebar-cart onepage-sidebar-area">
                <div class="wrap-sidebar">
                    <div class="sidebar-cart-all">
                        <div class="sidebar-cart-icon">
                            <button class="op-sidebar-close"><span class="ion-android-close"></span></button>
                        </div>
                        <div class="cart-content">
                            <h3>Shopping Cart</h3>
                            <ul>
                                <li class="single-product-cart">
                                    <div class="cart-img">
                                        <a href="#"><img src="assets/img/cart/1.jpg" alt=""></a>
                                    </div>
                                    <div class="cart-title">
                                        <h3><a href="#"> HANDCRAFTED MUG</a></h3>
                                        <span>1 x $140.00</span>
                                    </div>
                                    <div class="cart-delete">
                                        <a href="#"><i class="ion-ios-trash-outline"></i></a>
                                    </div>
                                </li>
                                <li class="single-product-cart">
                                    <div class="cart-img">
                                        <a href="#"><img src="assets/img/cart/2.jpg" alt=""></a>
                                    </div>
                                    <div class="cart-title">
                                        <h3><a href="#"> HANDCRAFTED MUG</a></h3>
                                        <span>1 x $140.00</span>
                                    </div>
                                    <div class="cart-delete">
                                        <a href="#"><i class="ion-ios-trash-outline"></i></a>
                                    </div>
                                </li>
                                <li class="single-product-cart">
                                    <div class="cart-img">
                                        <a href="#"><img src="assets/img/cart/3.jpg" alt=""></a>
                                    </div>
                                    <div class="cart-title">
                                        <h3><a href="#"> HANDCRAFTED MUG</a></h3>
                                        <span>1 x $140.00</span>
                                    </div>
                                    <div class="cart-delete">
                                        <a href="#"><i class="ion-ios-trash-outline"></i></a>
                                    </div>
                                </li>
                                <li class="single-product-cart">
                                    <div class="cart-total">
                                        <h4>Total : <span>$ 120</span></h4>
                                    </div>
                                </li>
                                <li class="single-product-cart">
                                    <div class="cart-checkout-btn">
                                        <a class="btn-hover cart-btn-style" href="#">view cart</a>
                                        <a class="no-mrg btn-hover cart-btn-style" href="#">checkout</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main-search start -->
            <div class="main-search-active">
                <div class="sidebar-search-icon">
                    <button class="search-close"><span class="ion-android-close"></span></button>
                </div>
                <div class="sidebar-search-input">
                    <form>
                        <div class="form-search">
                            <input id="search" class="input-text" value="" placeholder="Search Entire Store" type="search">
                            <button>
                                <i class="ion-ios-search-strong"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- main-search start -->
            <div class="cur-lang-acc-active">
                <div class="wrap-sidebar">
                    <div class="sidebar-nav-icon">
                        <button class="op-sidebar-close"><span class="ion-android-close"></span></button>
                    </div>
                    <div class="cur-lang-acc-all">
                        <div class="single-currency-language-account">
                            <div class="cur-lang-acc-title">
                                <h4>Currency: <span>USD </span></h4>
                            </div>
                            <div class="cur-lang-acc-dropdown">
                                <ul>
                                    <li><a href="#">EUR  Euro</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-currency-language-account">
                            <div class="cur-lang-acc-title">
                                <h4>Language: <span><img src="assets/img/icon-img/english.png" alt=""> English </span></h4>
                            </div>
                            <div class="cur-lang-acc-dropdown">
                                <ul>
                                    <li><a href="#"><img src="assets/img/icon-img/english.png" alt=""> English </a></li>
                                    <li><a href="#"><img src="assets/img/icon-img/es.png" alt=""> spanish </a></li>
                                    <li><a href="#"><img src="assets/img/icon-img/fr.png" alt=""> french </a></li>
                                    <li><a href="#"><img src="assets/img/icon-img/ge.png" alt=""> german </a></li>
                                    <li><a href="#"><img src="assets/img/icon-img/es.png" alt=""> spanish </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-currency-language-account">
                            <div class="cur-lang-acc-title">
                                <h4>My Account:</h4>
                            </div>
                            <div class="cur-lang-acc-dropdown">
                                <ul>
                                    <li><a href="#">Compare Products </a></li>
                                    <li><a href="#">Default welcome msg!</a></li>
                                    <li><a href="register.html">register</a></li>
                                    <li><a href="wishlist.html">My Wish List</a></li>
                                    <li><a href="login.html">Sign In </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
						$sql = "select * from banner  where tt='on' limit 1";
						$kqslide = $conn->query($sql);
						foreach($kqslide as $key=>$value){
					
						?>
            <div class="breadcrumb-area pt-205 pb-210" style="background-image: url(image/<?= $value['image']   ?>)">
                <div class="container">
                    <div class="breadcrumb-content">
                        <h2>Contact</h2>
                        <ul>
                            <li><a href="trangchu.php">home</a></li>
                            <li> contact </li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php }
			?>
            <!-- contact-area start -->
            <div class="contact-area ptb-100">
                <div class="container">
                    <div class="contact-info">
                        <h2 class="contact-title">contact info</h2>
                        <div class="row">
                            <div class="col-lg-4 col-md-12 col-12">
                                <div class="single-contact-info mb-40">
                                    <div class="contact-info-icon">
                                        <i class="ion-ios-location-outline"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <p>
                                            Location : <br> 77, avenue, Brat road USA.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single-contact-info mb-40">
                                    <div class="contact-info-icon">
                                        <i class="ion-ios-telephone-outline"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <p>
                                            Phone : <br> +012 345 678 102
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single-contact-info mb-40">
                                    <div class="contact-info-icon">
                                        <i class="ion-ios-email-outline"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <p>Mail : <br> <a href="#">info@example.com</a> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-form-wrap">
                        <h2 class="contact-title">Get In Touch</h2>
                        <div class="contact-message">
                            <form id="contact-form" action="assets/mail.php" method="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="contact-form-style contact-font-one">
                                            <input name="name" placeholder="Your Name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-form-style contact-font-two">
                                            <input name="email" placeholder="Your Email" type="email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="contact-form-style contact-font-three">
                                            <input name="subject" placeholder="Your Title" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="contact-form-style contact-font-four">
                                            <textarea name="message" placeholder="Message"></textarea>
                                            <button class="submit btn-hover" type="submit"> Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <p class="form-messege"></p>
                        </div>
                    </div>
                    <div class="contact-map">
                        <div id="hastech2"></div>
                    </div>
                </div>
            </div>
            <!-- contact-area end -->
            <?php include 'sharefooter.php'?>
        </div>
		
		
		
		
		
		
		
		
		
		<!-- all js here -->
        <script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="assets/js/popper.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/slinky.min.js"></script>
        <script src="assets/js/ajax-mail.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <!-- google map api -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlZPf84AAVt8_FFN7rwQY5nPgB02SlTKs "></script>
        <script>
            var myCenter=new google.maps.LatLng(30.249796, -97.754667);
            function initialize()
            {
                var mapProp = {
                  center:myCenter,
                  scrollwheel: false,
                  zoom:15,
                  mapTypeId:google.maps.MapTypeId.ROADMAP
                  };
                var map=new google.maps.Map(document.getElementById("hastech2"),mapProp);
                var marker=new google.maps.Marker({
                  position:myCenter,
                    animation:google.maps.Animation.BOUNCE,
                  icon:'',
                    map: map,
                  });
                var styles = [
                  {
                    stylers: [
                      { hue: "#c5c5c5" },
                      { saturation: -100 }
                    ]
                  },
                ];
                map.setOptions({styles: styles});
                marker.setMap(map);
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
        <script type="text/javascript">
            // grab an element
            var myElement = document.querySelector(".intelligent-header");
            // construct an instance of Headroom, passing the element
            var headroom  = new Headroom(myElement);
            // initialise
            headroom.init(); 
        </script>
        <script src="assets/js/main.js"></script>
    </body>
</html>
