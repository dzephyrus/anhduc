  <!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Furniture - Minimalist eCommerce HTML5 Template</title>
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
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/ionicons.min.css">
        <link rel="stylesheet" href="assets/css/bundle.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
    <body>
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
									<?php
						include 'connection.php';
					$stmt = $conn->query("select * from setting");
					foreach($stmt as $key => $row){
					?>
					
					<img src="image/<?=$row['logo']?>" style="width: 100px; background-color: #343A40" alt="" width="70%" >
				
					<?php 
					}
					?>
                                </div>
                            </div>
                            <div class="col-lg-6 menu-none-block menu-center">
                                <div class="main-menu">
                                    <nav>
                                       <ul>
                                            <li><a href="#">home</a></li>
                                            <li><a href="about-us.html">about us</a></li>
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
                                                    <li><a href="login.html">login</a></li>
                                                    <li><a href="register.html">register</a></li>
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
                                        <a href="#"><img src="image/thuc-an-me-o.jpg" alt=""></a>
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
            
                <!--long slider-->
                <div class="container" style ="width: 100%; height: 550px;">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
						<ol class="carousel-indicators">
						  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						  <li data-target="#myCarousel" data-slide-to="1"></li>
						  
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner">
						  <div class="item active">
							<img src="image/ok1.jpg" alt="" style="width:1972px; height:650px;">
						  </div>

						  <div class="item">
							<img src="image/ok2.jpg" alt="" style="width: 1972px; height: 650px;"/>
						  </div>

						  
						</div>

						<!-- Left and right controls -->
						<a class="left carousel-control" href="#myCarousel" data-slide="prev">
						  <span class="glyphicon glyphicon-chevron-left"></span>
						  <span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#myCarousel" data-slide="next">
						  <span class="glyphicon glyphicon-chevron-right"></span>
						  <span class="sr-only">Next</span>
						</a>
					  </div>
				</div>
           <!--Kết thúc slider-->
          
            <div class="banner-area pt-100 pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3 col-12">
                            <div class="single-banner mb-30">
                                <a href="shop-grid-view-sidebar.html"><img src="image/thuc-an-me-o.jpg" width="270px" height="283px" alt=""></a>
                                <div class="banner-content banner-content-position1">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="d-sm-none d-lg-block col-lg-6 col-12">
                            <div class="single-banner mb-30">
                                <a href="shop-grid-view-sidebar.html"><img src="image/bzcmarket-thiet-ke-bao-bi-thuc-an-cho-meo-lon-propet(2).jpg" height="283px;" alt=""></a>
                                <div class="banner-content banner-content-position2">
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 col-12">
                            <div class="single-banner mb-30">
                                <a href="shop-grid-view-sidebar.html"><img src="image/394b65429066fb6955b71e39d630308e.jpg" width="270px" height="283px" alt=""></a>
                                <div class="banner-content banner-content-position3">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-area pb-100">
                <div class="container">
                    <div class="section-title text-center mb-35">
                        <h2>Featured Products</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when look</p>
                    </div>
                    <div class="product-style">
                        <div class="product-tab-list text-center mb-45 nav product-menu-mrg" role="tablist">
                            <a class="active" href="#home1" data-toggle="tab" role="tab" aria-selected="true" aria-controls="home1">
                                <h4>NEW IN </h4>
                            </a>
                            <a href="#home2" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home2">
                                <h4>ON SALE </h4>
                            </a>
                            <a href="#home3" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home3">
                                <h4>FREE SHIPPING</h4>
                            </a>
                            <a href="#home4" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home4">
                                <h4>HIGHEST RATING</h4>
                            </a>
                        </div>
                        <div class="tab-content jump">
                            <div class="tab-pane active show fade" id="home1" role="tabpanel">
                                <div class="row">
                                    <div class="product-slider-active owl-carousel">
                                        <div class="col-md-3 col-lg-3 col-sm-4">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="#"><img src="image/3ad30721fe31d45f25032f0a9b5978c7_tn.jpg"  alt=""   ></a>
                                                    <span>sale</span>
                                                    <div class="product-action">
                                                        <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title-price">
                                                        <div class="product-title">
                                                            <h4><a href="product-details-6.html">WOODEN FURNITURE</a></h4>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>$110.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-cart-categori">
                                                        <div class="product-cart">
                                                            <span>Furniter</span>
                                                        </div>
                                                        <div class="product-categori">
                                                            <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-sm-4">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="#"><img src="image/763_pedigree_beef.jpg"  alt=""></a>
                                                    <div class="product-action">
                                                        <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title-price">
                                                        <div class="product-title">
                                                            <h4><a href="product-details-6.html">WOODEN FURNITURE</a></h4>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>$120.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-cart-categori">
                                                        <div class="product-cart">
                                                            <span>Furniter</span>
                                                        </div>
                                                        <div class="product-categori">
                                                            <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-sm-4">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="#"><img src="image/2302d773b266f20c6c7b1e4294252dee.jpg" alt=""></a>
                                                    <span>sale</span>
                                                    <div class="product-action">
                                                        <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title-price">
                                                        <div class="product-title">
                                                            <h4><a href="product-details-6.html">HANDCRAFTED MUG</a></h4>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>$130.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-cart-categori">
                                                        <div class="product-cart">
                                                            <span>Furniter</span>
                                                        </div>
                                                        <div class="product-categori">
                                                            <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-sm-4">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="#"><img src="image/2100032447.cun-cung-khoe-manh-hon-voi-thuc-an-cho-cho-moshm5.jpg" alt=""></a>
                                                    <div class="product-action">
                                                        <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title-price">
                                                        <div class="product-title">
                                                            <h4><a href="product-details-6.html">WOODEN FURNITURE</a></h4>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>$140.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-cart-categori">
                                                        <div class="product-cart">
                                                            <span>Furniter</span>
                                                        </div>
                                                        <div class="product-categori">
                                                            <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="home2" role="tabpanel">
                                <div class="row">
                                    <div class="product-slider-active owl-carousel">
                                        <div class="col-md-3 col-lg-3 col-sm-4">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="#"><img src="image/aa4431c92157c7099e46-1562.jpg" alt=""></a>
                                                    <span>sale</span>
                                                    <div class="product-action">
                                                        <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title-price">
                                                        <div class="product-title">
                                                            <h4><a href="product-details-6.html">WOODEN FURNITURE</a></h4>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>$150.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-cart-categori">
                                                        <div class="product-cart">
                                                            <span>Furniter</span>
                                                        </div>
                                                        <div class="product-categori">
                                                            <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-sm-4">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="#"><img src="image/bzcmarket-thiet-ke-bao-bi-thuc-an-cho-meo-lon-propet(2).jpg" alt=""></a>
                                                    <div class="product-action">
                                                        <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title-price">
                                                        <div class="product-title">
                                                            <h4><a href="product-details-6.html">WOODEN FURNITURE</a></h4>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>$160.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-cart-categori">
                                                        <div class="product-cart">
                                                            <span>Furniter</span>
                                                        </div>
                                                        <div class="product-categori">
                                                            <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-sm-4">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="#"><img src="image/combo-5-goi-me-o-350gr-thuc-an-dang-hat-cho-meo-lon-vi-ca-ngu-hanpet-201c-7218-3109559-a09d226a8c8d5ac4442987e0f099eb13.jpg" alt=""></a>
                                                    <span>sale</span>
                                                    <div class="product-action">
                                                        <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title-price">
                                                        <div class="product-title">
                                                            <h4><a href="product-details-6.html">HANDCRAFTED MUG</a></h4>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>$170.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-cart-categori">
                                                        <div class="product-cart">
                                                            <span>Furniter</span>
                                                        </div>
                                                        <div class="product-categori">
                                                            <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-sm-4">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="#"><img src="image/aa4431c92157c7099e46-1562.jpg" alt=""></a>
                                                    <div class="product-action">
                                                        <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title-price">
                                                        <div class="product-title">
                                                            <h4><a href="product-details-6.html">HANDCRAFTED MUG</a></h4>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>$180.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-cart-categori">
                                                        <div class="product-cart">
                                                            <span>Furniter</span>
                                                        </div>
                                                        <div class="product-categori">
                                                            <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="home3" role="tabpanel">
                                <div class="row">
                                    <div class="product-slider-active owl-carousel">
                                        <div class="col-md-3 col-lg-3 col-sm-4">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="#"><img src="image/combo-5-goi-me-o-350gr-thuc-an-dang-hat-cho-meo-lon-vi-ca-ngu-hanpet-201c-7218-3109559-a09d226a8c8d5ac4442987e0f099eb13.jpg" alt=""></a>
                                                    <span>sale</span>
                                                    <div class="product-action">
                                                        <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title-price">
                                                        <div class="product-title">
                                                            <h4><a href="product-details-6.html">HANDCRAFTED MUG</a></h4>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>$190.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-cart-categori">
                                                        <div class="product-cart">
                                                            <span>Furniter</span>
                                                        </div>
                                                        <div class="product-categori">
                                                            <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-sm-4">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="#"><img src="image/thuc an cho fib ganador.jpg" alt=""></a>
                                                    <div class="product-action">
                                                        <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title-price">
                                                        <div class="product-title">
                                                            <h4><a href="product-details-6.html">HANDCRAFTED MUG</a></h4>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>$110.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-cart-categori">
                                                        <div class="product-cart">
                                                            <span>Furniter</span>
                                                        </div>
                                                        <div class="product-categori">
                                                            <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-sm-4">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="#"><img src="image/giam-soc-thuc-an-cho-meo-con-me-o-kitten-1-1kg-vi-ca-bien-phu-kien-thu-cung-pet-shop-ha-noi-anh-1.jpg" alt=""></a>
                                                    <span>sale</span>
                                                    <div class="product-action">
                                                        <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title-price">
                                                        <div class="product-title">
                                                            <h4><a href="product-details-6.html">WOODEN FURNITURE</a></h4>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>$120.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-cart-categori">
                                                        <div class="product-cart">
                                                            <span>Furniter</span>
                                                        </div>
                                                        <div class="product-categori">
                                                            <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-sm-4">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="#"><img src="image/giam-soc-thuc-an-cho-meo-con-me-o-kitten-1-1kg-vi-ca-bien-phu-kien-thu-cung-pet-shop-ha-noi-anh-1.jpg" alt=""></a>
                                                    <div class="product-action">
                                                        <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title-price">
                                                        <div class="product-title">
                                                            <h4><a href="product-details-6.html">WOODEN FURNITURE</a></h4>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>$130.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-cart-categori">
                                                        <div class="product-cart">
                                                            <span>Furniter</span>
                                                        </div>
                                                        <div class="product-categori">
                                                            <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="home4" role="tabpanel">
                                <div class="row">
                                    <div class="product-slider-active owl-carousel">
                                        <div class="col-md-3 col-lg-3 col-sm-4">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="#"><img src="image/7b3e4958d07d3ba8624c4288e123f6d9.jpg" alt=""></a>
                                                    <span>sale</span>
                                                    <div class="product-action">
                                                        <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title-price">
                                                        <div class="product-title">
                                                            <h4><a href="product-details-6.html">WOODEN FURNITURE</a></h4>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>$140.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-cart-categori">
                                                        <div class="product-cart">
                                                            <span>Furniter</span>
                                                        </div>
                                                        <div class="product-categori">
                                                            <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-sm-4">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="#"><img src="image/d0c02be86ef889a6d0e9-1537.jpg" alt=""></a>
                                                    <div class="product-action">
                                                        <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title-price">
                                                        <div class="product-title">
                                                            <h4><a href="product-details-6.html">HANDCRAFTED MUG</a></h4>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>$150.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-cart-categori">
                                                        <div class="product-cart">
                                                            <span>Furniter</span>
                                                        </div>
                                                        <div class="product-categori">
                                                            <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-sm-4">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="#"><img src="image/thuc-an-me-o.jpg" alt=""></a>
                                                    <span>sale</span>
                                                    <div class="product-action">
                                                        <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title-price">
                                                        <div class="product-title">
                                                            <h4><a href="product-details-6.html">WOODEN FURNITURE</a></h4>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>$160.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-cart-categori">
                                                        <div class="product-cart">
                                                            <span>Furniter</span>
                                                        </div>
                                                        <div class="product-categori">
                                                            <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-sm-4">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="#"><img src="image/slideshow_1.jpg" alt=""></a>
                                                    <div class="product-action">
                                                        <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title-price">
                                                        <div class="product-title">
                                                            <h4><a href="product-details-6.html">HANDCRAFTED MUG</a></h4>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>$170.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-cart-categori">
                                                        <div class="product-cart">
                                                            <span>Furniter</span>
                                                        </div>
                                                        <div class="product-categori">
                                                            <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shop-limited-area bg-img pt-90 pb-100" style="background-image: url(image/thuc-an-smartheart-cho-cho-1.jpg)" data-overlay="3">
                <div class="container">
                    <div class="shop-limited-content text-center">
                        <h2>Shop Limited Edition.</h2>
                        <a class="btn-hover limited-btn" href="#">view more</a>
                    </div>
                </div>
            </div>
            <div class="product-collection-area pt-100 pb-50">
                <div class="container">
                    <div class="section-title text-center mb-55">
                        <h2>New Collection</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when look</p>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="single-product mb-35">
                                <div class="product-img">
                                    <a href="#"><img src="image/394b65429066fb6955b71e39d630308e.jpg" alt=""></a>
                                    <span>sale</span>
                                    <div class="product-action">
                                        <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-title-price">
                                        <div class="product-title">
                                            <h4><a href="product-details-6.html">WOODEN FURNITURE</a></h4>
                                        </div>
                                        <div class="product-price">
                                            <span>$110.00</span>
                                        </div>
                                    </div>
                                    <div class="product-cart-categori">
                                        <div class="product-cart">
                                            <span>Furniter</span>
                                        </div>
                                        <div class="product-categori">
                                            <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="single-product mb-35">
                                <div class="product-img">
                                    <a href="#"><img src="image/616f7d94b5ec5b64bc9c226b66c740d6.jpg_670x670q75.jpg" alt=""></a>
                                    <div class="product-action">
                                        <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-title-price">
                                        <div class="product-title">
                                            <h4><a href="product-details-6.html">WOODEN FURNITURE</a></h4>
                                        </div>
                                        <div class="product-price">
                                            <span>$120.00</span>
                                        </div>
                                    </div>
                                    <div class="product-cart-categori">
                                        <div class="product-cart">
                                            <span>Furniter</span>
                                        </div>
                                        <div class="product-categori">
                                            <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="single-product mb-35">
                                <div class="product-img">
                                    <a href="#"><img src="image/763_pedigree_beef.jpg" alt=""></a>
                                    <span>sale</span>
                                    <div class="product-action">
                                        <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-title-price">
                                        <div class="product-title">
                                            <h4><a href="product-details-6.html">HANDCRAFTED MUG</a></h4>
                                        </div>
                                        <div class="product-price">
                                            <span>$130.00</span>
                                        </div>
                                    </div>
                                    <div class="product-cart-categori">
                                        <div class="product-cart">
                                            <span>Furniter</span>
                                        </div>
                                        <div class="product-categori">
                                            <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="single-product mb-35">
                                <div class="product-img">
                                    <a href="#"><img src="image/2302d773b266f20c6c7b1e4294252dee.jpg" alt=""></a>
                                    <div class="product-action">
                                        <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-title-price">
                                        <div class="product-title">
                                            <h4><a href="product-details-6.html">HANDCRAFTED MUG</a></h4>
                                        </div>
                                        <div class="product-price">
                                            <span>$140.00</span>
                                        </div>
                                    </div>
                                    <div class="product-cart-categori">
                                        <div class="product-cart">
                                            <span>Furniter</span>
                                        </div>
                                        <div class="product-categori">
                                            <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="single-product mb-35">
                                <div class="product-img">
                                    <a href="#"><img src="image/thuc-an-me-o.jpg" alt=""></a>
                                    <div class="product-action">
                                        <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-title-price">
                                        <div class="product-title">
                                            <h4><a href="product-details-6.html">HANDCRAFTED MUG</a></h4>
                                        </div>
                                        <div class="product-price">
                                            <span>$150.00</span>
                                        </div>
                                    </div>
                                    <div class="product-cart-categori">
                                        <div class="product-cart">
                                            <span>Furniter</span>
                                        </div>
                                        <div class="product-categori">
                                            <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="single-product mb-35">
                                <div class="product-img">
                                    <a href="#"><img src="image/aa4431c92157c7099e46-1562.jpg" alt=""></a>
                                    <span>sale</span>
                                    <div class="product-action">
                                        <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-title-price">
                                        <div class="product-title">
                                            <h4><a href="product-details-6.html">WOODEN FURNITURE</a></h4>
                                        </div>
                                        <div class="product-price">
                                            <span>$160.00</span>
                                        </div>
                                    </div>
                                    <div class="product-cart-categori">
                                        <div class="product-cart">
                                            <span>Furniter</span>
                                        </div>
                                        <div class="product-categori">
                                            <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="single-product mb-35">
                                <div class="product-img">
                                    <a href="#"><img src="image/thuc an cho fib ganador.jpg" alt=""></a>
                                    <div class="product-action">
                                        <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-title-price">
                                        <div class="product-title">
                                            <h4><a href="product-details-6.html">WOODEN FURNITURE</a></h4>
                                        </div>
                                        <div class="product-price">
                                            <span>$170.00</span>
                                        </div>
                                    </div>
                                    <div class="product-cart-categori">
                                        <div class="product-cart">
                                            <span>Furniter</span>
                                        </div>
                                        <div class="product-categori">
                                            <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="single-product mb-35">
                                <div class="product-img">
                                    <a href="#"><img src="image/giam-soc-thuc-an-cho-meo-con-me-o-kitten-1-1kg-vi-ca-bien-phu-kien-thu-cung-pet-shop-ha-noi-anh-1.jpg" alt=""></a>
                                    <span>sale</span>
                                    <div class="product-action">
                                        <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-title-price">
                                        <div class="product-title">
                                            <h4><a href="product-details-6.html">WOODEN FURNITURE</a></h4>
                                        </div>
                                        <div class="product-price">
                                            <span>$180.00</span>
                                        </div>
                                    </div>
                                    <div class="product-cart-categori">
                                        <div class="product-cart">
                                            <span>Furniter</span>
                                        </div>
                                        <div class="product-categori">
                                            <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-area pb-65">
                <div class="container">
                    <div class="section-title text-center mb-55">
                        <h2> Top Stories</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when look</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="single-blog mb-30">
                                <div class="blog-img">
                                    <a href="#"><img src="image/2019-11-09-15-11-29.webp" alt=""></a>
                                </div>
                                <div class="blog-info">
                                    <h3><a href="#">Standard blog post.</a></h3>
                                    <div class="blog-meta">
                                        <ul>
                                            <li>February 13</li>
                                            <li><a href="#">Momen Bhuiyan</a></li>
                                            <li><a href="#">4 comments</a></li>
                                        </ul>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, sectetur adipising elit, sed do eimod tempor incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-blog mb-30">
                                <div class="blog-img">
                                    <a href="#"><img src="image/nhung-luu-y-khi-cham-soc-cho-husky-va-poodle.jpg" alt=""></a>
                                </div>
                                <div class="blog-info">
                                    <h3><a href="#">But I must explain to you.</a></h3>
                                    <div class="blog-meta">
                                        <ul>
                                            <li>February 13</li>
                                            <li><a href="#">Momen Bhuiyan</a></li>
                                            <li><a href="#">4 comments</a></li>
                                        </ul>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, sectetur adipising elit, sed do eimod tempor incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-blog mb-30">
                                <div class="blog-img">
                                    <a href="#"><img src="image/images2209032_T52.gif" alt=""></a>
                                </div>
                                <div class="blog-info">
                                    <h3><a href="#">Lorem ipsum dolor sit.</a></h3>
                                    <div class="blog-meta">
                                        <ul>
                                            <li>February 13</li>
                                            <li><a href="#">Momen Bhuiyan</a></li>
                                            <li><a href="#">4 comments</a></li>
                                        </ul>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, sectetur adipising elit, sed do eimod tempor incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                       <?php
						include 'connection.php';
					$stmt = $conn->query("select * from setting");
					foreach($stmt as $key => $row){
					?>
					
					<img src="image/<?=$row['logo']?>" style="width: 100px; background-color: #343A40" alt="" width="70%" >
				
					<?php 
					}
					?>
                                    </div>
                                    <div class="footer-nav">
                                        <nav>
                                            <ul>
                                                <li><a href="#">home</a></li>
                                                <li><a href="#">about us</a></li>
                                                <li><a href="#">shop </a></li>
                                                <li><a href="#"> blog </a></li>
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
            <!-- modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close" aria-hidden="true"></span>
                </button>
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="qwick-view-left">
                                <div class="quick-view-learg-img">
                                    <div class="quick-view-tab-content tab-content">
                                        <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                            <img src="assets/img/quick-view/l1.jpg" alt="">
                                        </div>
                                        <div class="tab-pane fade" id="modal2" role="tabpanel">
                                            <img src="assets/img/quick-view/l2.jpg" alt="">
                                        </div>
                                        <div class="tab-pane fade" id="modal3" role="tabpanel">
                                            <img src="assets/img/quick-view/l3.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="quick-view-list nav" role="tablist">
                                    <a class="active" href="#modal1" data-toggle="tab" role="tab" aria-selected="true" aria-controls="home1">
                                        <img src="assets/img/quick-view/s1.jpg" alt="">
                                    </a>
                                    <a href="#modal2" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home2">
                                        <img src="assets/img/quick-view/s2.jpg" alt="">
                                    </a>
                                    <a href="#modal3" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home3">
                                        <img src="assets/img/quick-view/s3.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="qwick-view-right">
                                <div class="qwick-view-content">
                                    <h3>Handcrafted Supper Mug</h3>
                                    <div class="price">
                                        <span class="new">$90.00</span>
                                        <span class="old">$120.00  </span>
                                    </div>
                                    <div class="rating-number">
                                        <div class="quick-view-rating">
                                            <i class="ion-ios-star red-star"></i>
                                            <i class="ion-ios-star red-star"></i>
                                            <i class="ion-android-star-outline"></i>
                                            <i class="ion-android-star-outline"></i>
                                            <i class="ion-android-star-outline"></i>
                                        </div>
                                        <div class="quick-view-number">
                                            <span>2 Ratting (S)</span>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do tempor incididun ut labore et dolore magna aliqua. Ut enim ad mi , quis nostrud veniam exercitation .</p>
                                    <div class="quick-view-select">
                                        <div class="select-option-part">
                                            <label>Size*</label>
                                            <select class="select">
                                                <option value="">- Please Select -</option>
                                                <option value="">900</option>
                                                <option value="">700</option>
                                            </select>
                                        </div>
                                        <div class="select-option-part">
                                            <label>Color*</label>
                                            <select class="select">
                                                <option value="">- Please Select -</option>
                                                <option value="">orange</option>
                                                <option value="">pink</option>
                                                <option value="">yellow</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="quickview-plus-minus">
                                        <div class="cart-plus-minus">
											<input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
										</div>
                                        <div class="quickview-btn-cart">
                                            <a class="btn-hover-black" href="#">add to cart</a>
                                        </div>
                                        <div class="quickview-btn-wishlist">
                                            <a class="btn-hover" href="#"><i class="ion-ios-heart-outline"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
           <!--ok-->
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
        <script src="assets/js/main.js"></script>
    </body>
</html>
