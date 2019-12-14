<?php
	session_start();
	include 'connection.php';
	$cart = isset($_SESSION['CART']) ? $_SESSION['CART'] : [];
	$totalPrice = 0;
	$sumPrice=0;
?>
<!doctype html>
<html class="no-js" lang="en">
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
                                            <li><a href="trangchu.php">home</a></li>
                                            <li><a href="about-us.php">about us</a></li>
                                            <li><a href="#">shop</a>
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
                                                    <li><a href="login.php">login</a></li>
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

													 <?php

													 	if(isset($_SESSION['name_u'])){
															 $username=$_SESSION['name_u'];
															$sqltk = "select * from user where name_u = '$username'";
        													$kqtk = $conn->query($sqltk)->fetch();
															if($kqtk['quyen'] == 'admin'){
															

													 ?>
													<li><a href="#">chao ban:<?php echo ''.$_SESSION['name_u']; ?></a>
															<?php if($kqtk['quyen']=="user"){?>
																<ul class="dropdown">
																	<li><a href="dangxuat.php">Đăng xuất</a></li>
																	<li><a href="">Đổi mật khẩu</a></li>
																</ul>
															<?php } if($kqtk['quyen']=="admin") {?>
																<ul class="dropdown">
																	<li><a href="dangxuat.php">Đăng xuất</a></li>
																	<li><a href="">Đổi mật khẩu</a></li>
																	<li><a href="danhmuc1.php">Quản trị</a></li>
																</ul>
															<?php }?>
													</li>
													 <?php
															}
															else{
															?>
													 			<li><a href="#">chao ban:<?php echo ''.$_SESSION['name_u']; ?></a>
													
															<ul class="dropdown">
																<li><a href="dangxuat.php">Đăng xuất</a></li>
																<li><a href="">Đổi mật khẩu</a></li>
															</ul>
													</li>
													 		<?php
														}
													 ?>
													<?php } else { ?>
													 <li><a href="#">Tài khoản</a>

															<ul class="dropdown">
																<li><a href="login.php">Đăng nhập</a></li>
																<li><a href="register.php">Đăng ký</a></li>
															</ul>
													</li>
													 <?php 
																 } ?>
												</ul>
									</div>
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
                            
                        </div>
                    </div>
                </div>
            </header>
            <div class="header-space"></div>
            <!-- header end -->
          
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
						$sql = "select * from banner  where tt='off' limit 1";
						$kqslide = $conn->query($sql);
						foreach($kqslide as $key=>$value){
					
						?>
            <div class="breadcrumb-area pt-205 pb-210" style="background-image: url(image/<?= $value['image']   ?>)">

                <div class="container">
                    <div class="breadcrumb-content">
                        <h2>Check out</h2>
                        <ul>
                            <li><a href="trangchu.php">home</a></li>
                            <li> Check out </li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php }
			?>
            <!-- checkout-area start -->
            <div class="checkout-area ptb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-12">
                            <form action="#">
								 <?php
														
									if(isset($_SESSION['name_u']) && $_SESSION['name_u']){
									$sql_dangnhap = "SELECT * FROM user";
									$kq_dangnhap = $conn->query($sql_dangnhap)->fetch();
										
													 ?>
                                <div class="checkbox-form">						
                                    <h3>Điền thông tin nhận hàng</h3>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>First Name <span class="required">*</span></label>									<input type="text" placeholder="<?php echo ''.$_SESSION['name_u']; ?>" name="fullname"/>
                                            </div>
										</div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Phone</label>
                                                <input type="number" placeholder="<?php echo ''.$kq_dangnhap['phone']; ?>" name="phone"/>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Address <span class="required">*</span></label>
                                                <input type="text" placeholder="Street address" name="dc" />
                                            </div>
                                        </div>
										<!-- kết thuc ddien thong tin-->
              						</div>													
                                </div>
								<?php }
								else{?>
									<div class="checkbox-form">						
                                    <h3>Điền thông tin nhận hàng</h3>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>First Name <span class="required">*</span></label>									<input type="text" placeholder="tên" name="fullname"/>
                                            </div>
										</div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Phone</label>
                                                <input type="number" placeholder="phone" name="phone"/>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Address <span class="required">*</span></label>
                                                <input type="text" placeholder="Street address" name="dc" />
                                            </div>
                                        </div>
										<!-- kết thuc ddien thong tin-->
              						</div>													
                                </div>
								<?php	
								}?>
								<input type="submit" value="Place order" name="xacnhan"/>
                            </form>
							
					
                        </div>	
                 		       <div class="col-lg-6 col-md-12 col-12">
                            <div class="your-order">
                                <h3>Giỏ hàng của bạn</h3>
                                <div class="your-order-table table-responsive">
                                    <table>
										
                                        <thead>
                                            <tr>
                                                <th class="product-name">Product</th>
                                                <th class="product-total">Total</th>
                                            </tr>							
                                        </thead>
                                        <tbody>
											<?php foreach ($cart as $key => $item): ?>
                                            <tr class="cart_item">
                                                <td class="product-name">
                                                  	<?php echo $item['name_p'] ;?> <strong class="product-quantity">*<?php echo $item['quantity']?></strong>
                                                </td>
                                                <td class="product-total">
                                                    
														<?php 
															echo 
															$itemTotal = $item['sale_p']*$item['quantity'];
															$totalPrice += $itemTotal;
														?>
													
                                                </td>
                                            </tr>
											<?php  endforeach ?>
										</tbody>
									 </table>
									 <div class="col-md-5 ml-auto">
                                        <div class="cart-page-total" name="tongtien">
                                           <ul>
											    <li>Tổng tiền<span><?php echo $sumPrice+= $totalPrice; $_SESSION['tongtien']=$sumPrice ;?></span></li>
                                            </ul>
                                        </div>
                                    </div>
									 <div class="col-md-5 ml-auto">
                                        <div class="cart-page-total">
                                           <ul>
											   <li><a href="cart.php" >Quay lại</a></li>
                                               
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="payment-method">
                                    <div class="payment-accordion">
                                    	 <div class="order-button-payment">
                                            <input type="submit" value="Place order" />
                                       	 </div>								
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- checkout-area end -->	
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
