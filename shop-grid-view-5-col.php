<?php
	session_start();

?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Neha - Minimalist eCommerce HTML5 Template</title>
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
        <link rel="stylesheet" href="assets/css/jquery-ui.css">
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
                                                    <li><a href="login.php">login</a></li>
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
										<div class="main-menu">
                                   			 <nav>
                                      			 <ul>
													<li><a href="#">Tài khoản</a>
															<ul class="dropdown">
																<li><a href="login.php">Đăng nhập</a></li>
																<li><a href="register.php">Đăng ký</a></li>
															</ul>
													</li>
													
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
								<?php /*?><?php
								if(isset($_POST['addcart'])){
									$id = $_POST['addcart'];
									
									if(!isset($_SESSION['cart'])){
										$_SESSION['cart']= array(); // tạo giỏ hàng
									}
									if(!isset($_SESSION['cart'][$id])){ // nếu ko tồn tại mã hàng thì ta gán số lượng là 1 
										$_SESSION['cart'][$id]['sl']=1;
									}
									else{ // nếu tồn tại mã hàng, cộng thêm 1 
										$_SESSION['cart'][$id]['sl']+=1;
									}
									//in ra giỏi hàng
									//print_r($_SESSION['cart']);
								} 
								?>
								<?php
									
									foreach($_SESSION['cart'] as $row=>$value){
										include 'connection.php';
									$sql="select * from product where id_p='$id'";
									$stmt= $conn ->prepare($sql);
									$stmt -> execute();
									$r = $stmt -> fetch();
										?><?php */?>	
									
                                <li class="single-product-cart">
                                    <div class="cart-img">
                                        <a href="#"><img src="assets/img/cart/1.jpg" alt=""></a>
                                    </div>
                                    <div class="cart-title">
                                        <h3><a href="#"> mã sp là. <?= $row['id']?></a></h3>
                                        <span> số lượng <?= $value['sl']?> <?= $r['price']?></span>
                                    </div>
                                    <div class="cart-delete">
                                        <a href="#"><i class="ion-ios-trash-outline"></i></a>
                                    </div>
                                </li>
								<?php /*?><?php
											}
                                ?><?php */?>
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
                    <form method="get" enctype="multipart/form-data" action="search.php">
                        <div class="form-search">
                            <input id="search" class="input-text" name="search" value="" placeholder="Search Entire Store" type="search">
                            
                               <button class="btn btn-outline-success my-2 my-sm-0" name="submit-search" type="submit">Search</button>
                            
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
            <div class="breadcrumb-area pt-205 pb-210 bg-img" style="background-image: url(image/ok2.jpg)">
                <div class="container">
                    <div class="breadcrumb-content">
                        <h2>shop</h2>
                        <ul>
                            <li><a href="#">home</a></li>
                            <li> shop </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="shop-page-wrapper hidden-items padding-filter">
                <div class="container-fluid">
                    <div class="shop-filters-left">
                        <div class="shop-sidebar">
                            <div class="sidebar-widget mb-50">
                                <h3 class="sidebar-title">Search Products</h3>
                                <div class="sidebar-search">
                                    <form action="#">
                                        <input placeholder="Search Products..." type="text">
                                        <button><i class="ion-ios-search-strong"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="sidebar-widget mb-40">
                                <h3 class="sidebar-title">Filter by Price</h3>
                                <div class="price_filter">
                                    <div id="slider-range"></div>
                                    <div class="price_slider_amount">
                                        <div class="label-input">
                                            <label>price : </label>
                                            <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                                        </div>
                                        <button type="button">Filter</button> 
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-widget mb-45">
                                <h3 class="sidebar-title">Categories</h3>
                                <div class="sidebar-categories">
                                    <ul>
                                        <li><a href="#">Accessories <span>4</span></a></li>
                                        <li><a href="#">Book <span>9</span></a></li>
                                        <li><a href="#">Clothing <span>5</span> </a></li>
                                        <li><a href="#">Homelife <span>3</span></a></li>
                                        <li><a href="#">Kids & Baby <span>4</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget sidebar-overflow mb-45">
                                <h3 class="sidebar-title">color</h3>
                                <div class="product-color">
                                    <ul>
                                        <li class="red">b</li>
                                        <li class="pink">p</li>
                                        <li class="blue">b</li>
                                        <li class="sky">b</li>
                                        <li class="green">y</li>
                                        <li class="purple">g</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget mb-40">
                                <h3 class="sidebar-title">size</h3>
                                <div class="product-size">
                                    <ul>
                                        <li><a href="#">xl</a></li>
                                        <li><a href="#">m</a></li>
                                        <li><a href="#">l</a></li>
                                        <li><a href="#">ml</a></li>
                                        <li><a href="#">lm</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget mb-50">
                                <h3 class="sidebar-title">Top rated products</h3>
                                <div class="sidebar-top-rated-all">
                                    <div class="sidebar-top-rated mb-30">
                                        <div class="single-top-rated">
                                            <div class="top-rated-img">
                                                <a href="#"><img src="assets/img/product/sidebar-product/1.jpg" alt=""></a>
                                            </div>
                                            <div class="top-rated-text">
                                                <h4><a href="#">Flying Drone</a></h4>
                                                <div class="top-rated-rating">
                                                    <ul>
                                                        <li><i class="reting-color ion-android-star"></i></li>
                                                        <li><i class="reting-color ion-android-star"></i></li>
                                                        <li><i class="ion-android-star-outline"></i></li>
                                                        <li><i class="ion-android-star-outline"></i></li>
                                                        <li><i class="ion-android-star-outline"></i></li>
                                                    </ul>
                                                </div>
                                                <span>$140.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sidebar-top-rated mb-30">
                                        <div class="single-top-rated">
                                            <div class="top-rated-img">
                                                <a href="#"><img src="assets/img/product/sidebar-product/2.jpg" alt=""></a>
                                            </div>
                                            <div class="top-rated-text">
                                                <h4><a href="#">Flying Drone</a></h4>
                                                <div class="top-rated-rating">
                                                    <ul>
                                                        <li><i class="reting-color ion-android-star"></i></li>
                                                        <li><i class="reting-color ion-android-star"></i></li>
                                                        <li><i class="ion-android-star-outline"></i></li>
                                                        <li><i class="ion-android-star-outline"></i></li>
                                                        <li><i class="ion-android-star-outline"></i></li>
                                                    </ul>
                                                </div>
                                                <span>$140.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sidebar-top-rated mb-30">
                                        <div class="single-top-rated">
                                            <div class="top-rated-img">
                                                <a href="#"><img src="assets/img/product/sidebar-product/3.jpg" alt=""></a>
                                            </div>
                                            <div class="top-rated-text">
                                                <h4><a href="#">Flying Drone</a></h4>
                                                <div class="top-rated-rating">
                                                    <ul>
                                                        <li><i class="reting-color ion-android-star"></i></li>
                                                        <li><i class="reting-color ion-android-star"></i></li>
                                                        <li><i class="ion-android-star-outline"></i></li>
                                                        <li><i class="ion-android-star-outline"></i></li>
                                                        <li><i class="ion-android-star-outline"></i></li>
                                                    </ul>
                                                </div>
                                                <span>$140.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sidebar-top-rated mb-30">
                                        <div class="single-top-rated">
                                            <div class="top-rated-img">
                                                <a href="#"><img src="assets/img/product/sidebar-product/4.jpg" alt=""></a>
                                            </div>
                                            <div class="top-rated-text">
                                                <h4><a href="#">Flying Drone</a></h4>
                                                <div class="top-rated-rating">
                                                    <ul>
                                                        <li><i class="reting-color ion-android-star"></i></li>
                                                        <li><i class="reting-color ion-android-star"></i></li>
                                                        <li><i class="ion-android-star-outline"></i></li>
                                                        <li><i class="ion-android-star-outline"></i></li>
                                                        <li><i class="ion-android-star-outline"></i></li>
                                                    </ul>
                                                </div>
                                                <span>$140.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shop-filters-right">
                        <div class="shop-bar-area pb-60">
                            <div class="shop-bar">
                                <div class="shop-found-selector">
                                    <div class="shop-found">
                                        <p><span>23</span> Product Found of <span>50</span></p>
                                    </div>
                                    <div class="shop-selector">
                                        <label>Sort By : </label>
                                        <select name="select">
                                            <option value="">Default</option>
                                            <option value="">A to Z</option>
                                            <option value=""> Z to A</option>
                                            <option value="">In stock</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="shop-filter-tab">
                                    <div class="shop-filter">
                                        <a class="shop-filter-active" href="#">Filters <i class="ion-android-options"></i></a>
                                    </div>
                                    <div class="shop-tab nav" role=tablist>
                                       <a class="active" href="#grid-5-col1" data-toggle="tab" role="tab" aria-selected="false">
                                            <i class="ion-android-apps"></i>
                                        </a>
                                        <a href="#grid-5-col2" data-toggle="tab" role="tab" aria-selected="true">
                                            <i class="ion-android-menu"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shop-product-content tab-content">
                            <div id="grid-5-col1" class="tab-pane fade active show">
								
                                <div class="row custom-row">
									<?php
										include 'connection.php';
										if(isset($_GET['id'])){
										$id=$_GET['id'];
										$sql="select * from product where id_cate='$id'";
									//Xử lý lệnh sql
									$stmt = $conn->prepare($sql);
									$stmt->execute();
									$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
										}
									?>
									<?php
										foreach($result as $row){
											?>	
                                    <div class="custom-col-5 custom-col-style">
                                        <div class="single-product mb-35">
                                            <div class="product-img">
                                                <a href="product-details.php?id=<?=$row['id_p']?>" class=""><img src="image/<?php echo $row["image_p"]?>" alt=""></a>
                                                
                                            </div>
                                            <div class="product-content">
                                                <div class="product-title-price">
                                                    <div class="product-title">
                                                        <h4><a href="product-details.php?id=<?=$row['id_p']?>"><?php echo $row["name_p"]?></a></h4>
                                                    </div>
                                                    <div class="product-price">
                                                        <span><?php echo $row["sale_p"]?> <del> <?php echo $row["price"]?></del></span>
                                                    </div>
                                                </div>
                                                <div class="product-cart-categori">
													
                                                    <div class="product-cart">
                                                        <span><?php echo $row["name_cate"]?></span>
                                                    </div>
													
                                                    <div class="product-categori">
														<form action="" method="get">
														<button type="submit" class="btn" name="addcart" value="<?=$row['id_p']?>"><a href="addcart.php?id=<?=$row['id_p']?>">add cart</a></button></form>
                                                    </div>
													
                                                </div>
                                            </div>
                                        </div>
                                   </div>
                                    <?php
		}
	?>	
                                    
                                    
                            <div id="grid-5-col2" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 col-xl-6">
                                        <div class="single-product single-product-list product-list-right-pr mb-40">
                                            <div class="product-img list-img-width">
                                                <a href="#"><img src="assets/img/product/list-img/1.jpg" alt=""></a>
                                                <div class="product-action">
                                                    <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-list">
                                                <div class="product-list-info">
                                                    <h4><a href="#">Flying Drone with Remote</a></h4>
                                                    <span>$150.00</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing el sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                                                </div>
                                                <div class="product-list-cart-wishlist">
                                                    <div class="product-list-cart">
                                                        <a class="btn-hover list-btn-style" href="#">add to cart</a>
                                                    </div>
                                                    <div class="product-list-wishlist">
                                                        <a class="btn-hover list-btn-wishlist" href="#"><i class="ion-ios-heart-outline"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-xl-6">
                                        <div class="single-product single-product-list product-list-right-pr mb-40">
                                            <div class="product-img list-img-width">
                                                <a href="#"><img src="assets/img/product/list-img/2.jpg" alt=""></a>
                                                <div class="product-action">
                                                    <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-list">
                                                <div class="product-list-info">
                                                    <h4><a href="#">Flying Drone with Remote</a></h4>
                                                    <span>$150.00</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing el sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                                                </div>
                                                <div class="product-list-cart-wishlist">
                                                    <div class="product-list-cart">
                                                        <a class="btn-hover list-btn-style" href="#">add to cart</a>
                                                    </div>
                                                    <div class="product-list-wishlist">
                                                        <a class="btn-hover list-btn-wishlist" href="#"><i class="ion-ios-heart-outline"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-xl-6">
                                        <div class="single-product single-product-list product-list-right-pr mb-40">
                                            <div class="product-img list-img-width">
                                                <a href="#"><img src="assets/img/product/list-img/3.jpg" alt=""></a>
                                                <div class="product-action">
                                                    <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-list">
                                                <div class="product-list-info">
                                                    <h4><a href="#">Flying Drone with Remote</a></h4>
                                                    <span>$150.00</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing el sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                                                </div>
                                                <div class="product-list-cart-wishlist">
                                                    <div class="product-list-cart">
                                                        <a class="btn-hover list-btn-style" href="#">add to cart</a>
                                                    </div>
                                                    <div class="product-list-wishlist">
                                                        <a class="btn-hover list-btn-wishlist" href="#"><i class="ion-ios-heart-outline"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-xl-6">
                                        <div class="single-product single-product-list product-list-right-pr mb-40">
                                            <div class="product-img list-img-width">
                                                <a href="#"><img src="assets/img/product/list-img/4.jpg" alt=""></a>
                                                <div class="product-action">
                                                    <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-list">
                                                <div class="product-list-info">
                                                    <h4><a href="#">Flying Drone with Remote</a></h4>
                                                    <span>$150.00</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing el sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                                                </div>
                                                <div class="product-list-cart-wishlist">
                                                    <div class="product-list-cart">
                                                        <a class="btn-hover list-btn-style" href="#">add to cart</a>
                                                    </div>
                                                    <div class="product-list-wishlist">
                                                        <a class="btn-hover list-btn-wishlist" href="#"><i class="ion-ios-heart-outline"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-xl-6">
                                        <div class="single-product single-product-list product-list-right-pr mb-40">
                                            <div class="product-img list-img-width">
                                                <a href="#"><img src="assets/img/product/list-img/5.jpg" alt=""></a>
                                                <div class="product-action">
                                                    <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-list">
                                                <div class="product-list-info">
                                                    <h4><a href="#">Flying Drone with Remote</a></h4>
                                                    <span>$150.00</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing el sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                                                </div>
                                                <div class="product-list-cart-wishlist">
                                                    <div class="product-list-cart">
                                                        <a class="btn-hover list-btn-style" href="#">add to cart</a>
                                                    </div>
                                                    <div class="product-list-wishlist">
                                                        <a class="btn-hover list-btn-wishlist" href="#"><i class="ion-ios-heart-outline"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-xl-6">
                                        <div class="single-product single-product-list product-list-right-pr mb-40">
                                            <div class="product-img list-img-width">
                                                <a href="#"><img src="assets/img/product/list-img/6.jpg" alt=""></a>
                                                <div class="product-action">
                                                    <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-list">
                                                <div class="product-list-info">
                                                    <h4><a href="#">Flying Drone with Remote</a></h4>
                                                    <span>$150.00</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing el sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                                                </div>
                                                <div class="product-list-cart-wishlist">
                                                    <div class="product-list-cart">
                                                        <a class="btn-hover list-btn-style" href="#">add to cart</a>
                                                    </div>
                                                    <div class="product-list-wishlist">
                                                        <a class="btn-hover list-btn-wishlist" href="#"><i class="ion-ios-heart-outline"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-xl-6">
                                        <div class="single-product single-product-list product-list-right-pr mb-40">
                                            <div class="product-img list-img-width">
                                                <a href="#"><img src="assets/img/product/list-img/7.jpg" alt=""></a>
                                                <div class="product-action">
                                                    <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-list">
                                                <div class="product-list-info">
                                                    <h4><a href="#">Flying Drone with Remote</a></h4>
                                                    <span>$150.00</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing el sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                                                </div>
                                                <div class="product-list-cart-wishlist">
                                                    <div class="product-list-cart">
                                                        <a class="btn-hover list-btn-style" href="#">add to cart</a>
                                                    </div>
                                                    <div class="product-list-wishlist">
                                                        <a class="btn-hover list-btn-wishlist" href="#"><i class="ion-ios-heart-outline"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-xl-6">
                                        <div class="single-product single-product-list product-list-right-pr mb-40">
                                            <div class="product-img list-img-width">
                                                <a href="#"><img src="assets/img/product/list-img/8.jpg" alt=""></a>
                                                <div class="product-action">
                                                    <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-list">
                                                <div class="product-list-info">
                                                    <h4><a href="#">Flying Drone with Remote</a></h4>
                                                    <span>$150.00</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing el sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                                                </div>
                                                <div class="product-list-cart-wishlist">
                                                    <div class="product-list-cart">
                                                        <a class="btn-hover list-btn-style" href="#">add to cart</a>
                                                    </div>
                                                    <div class="product-list-wishlist">
                                                        <a class="btn-hover list-btn-wishlist" href="#"><i class="ion-ios-heart-outline"></i></a>
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
            <!-- modal -->
           
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
