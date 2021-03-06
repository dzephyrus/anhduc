<?php
	session_start();
	ob_start();
	include 'connection.php';	
?>
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
            
            <!-- Newsletter Popup End -->
            <header class="pl-155 pr-155 intelligent-header">
                <div class="header-area header-area-2">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters">
                            <div class="col-lg-3 col-md-6 col-6">
                                <div class="logo">
                                    <a href="index.html"><img src="assets/img/logo/logo.png" alt="" /></a>
                                </div>
                            </div>
                            <div class="col-lg-6 menu-none-block menu-center">
                                <div class="main-menu">
                                    <nav>
                                        <ul>
                                            <li><a href="trangchu.php">home</a></li>
                                            <li><a href="about-us.html">about us</a></li>
                                            <li><a href="shop-grid-view-5-col.html">shop</a></li>
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
                                            <li><a href="#">blog</a>
                                                <ul class="dropdown">
                                                    <li><a href="blog.html">blog </a></li>
                                                    <li><a href="blog-details.html">blog details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-6">
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
           
            <!-- login-area start -->
            <div class="register-area ptb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-12 col-lg-6 col-xl-6 ml-auto mr-auto">
                            <div class="login">
                                <div class="login-form-container">
                                    <div class="login-form">
                                        <form action="#" method="post">
											<h3 align="center">Mời bạn đổi mật khẩu</h3>
											<p style="padding: 5px 0px; font-size: 20px;">Tài khoản:<strong style="padding: 5px 10px"><?php echo $_SESSION['name_u']?></strong></p> 
											<input type="hidden" name="name_u" value="<?php echo $_SESSION['name_u']?>">
                                            <input type="password" name="user-password" placeholder="Password cũ">
											<input type="password" name="user-password2" placeholder="Password mới">
											<input type="password" name="user-password3" placeholder="Nhập lại password mới">
                                            <div class="button-box">
                                                <button type="submit" name="update" class="default-btn floatright">Update</button>
                                            </div>
                                        </form>
										<?php
												
											if (isset($_POST['update'])) {
												
												$user = $_SESSION['name_u'];		
												$sqlcheck="select * from user where name_u='$user'";
												$kqcheck= $conn ->query($sqlcheck)->fetch();
												
												if($_POST['user-password2']=="" || $_POST['user-password'] == "" ||$_POST['user-password3']==""){
													echo '<h6 style="color:red; padding:10px 0px;">Dữ liệu không được để trống</h4>';
												}else{
												$pass = $_POST['user-password'];
												$pass2 = $_POST['user-password2'];
												$pass3 = $_POST['user-password3'];
													if($kqcheck['pass'] != $pass){
														echo '<h6 style="color:red; padding:10px 0px;">Mật khẩu cũ không đúng</h4>';
													}
													else if($pass2 != $pass3){
														echo '<h6 style="color:red; padding:10px 0px;">Hai mật khẩu không trùng nhau</h4>';
													}else{
														$sqlupdate = "UPDATE user
																	SET pass = '$pass2'
																	WHERE name_u = '$user'";
														$kqupdate = $conn -> query($sqlupdate);
															if($kqupdate){
																	echo '<h6 style="color:red; padding:10px 0px;">Đổi thành công</h4>';
																}else{
																	echo 'Lỗi';
																}
													}
											}}
									  ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- login-area end -->
            <footer class="footer-area gray-bg pt-100 pb-95">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-5 col-12">
                            <div class="footer-widget">
                                <div class="footer-widget-l-content">
                                    <h4>20 Years Experience</h4>
                                    <ul>
                                        <li><a href="#"><i class="ion-social-twitter"></i></a></li> 
                                        <li><a href="#"><i class="ion-social-tumblr"></i></a></li>
                                        <li><a href="#"><i class="ion-social-facebook"></i></a></li> 
                                        <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li> 
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-7 col-12">
                            <div class="footer-widget">
                                <div class="footer-widget-m-content text-center">
                                    <div class="footer-logo">
                                        <a href="#"><img src="assets/img/logo/logo.png" alt=""></a>
                                    </div>
                                    <div class="footer-nav">
                                        <nav>
                                            <ul>
                                                <li><a href="index.html">home</a></li>
                                                <li><a href="about-us.html">about us</a></li>
                                                <li><a href="shop-grid-view-sidebar.html">shop </a></li>
                                                <li><a href="blog-left-sidebar.html"> blog </a></li>
                                                <li><a href="#">pages </a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <p>Copyright <i class="fa fa-copyright"></i> 2018 <a href="https://freethemescloud.com/" target="_blank" >Free Themes Cloud.</a> All rights reserved. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12 col-12">
                            <div class="footer-widget f-right">
                                <div class="footer-widget-r-content">
                                    <ul>
                                        <li><span>Phone :</span> +00 123 54 0056</li>
                                        <li><span>Email : </span> <a href="#">neha@gmail.com</a></li>
                                        <li><span>Address :</span> Dhaka Bangladesh</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
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
<?php
	ob_end_flush();
?>