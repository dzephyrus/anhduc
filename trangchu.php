<?php
	session_start();
	ob_start();
	include 'connection.php';	
	
?>
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
					
					<a href="trangchu.php"><img src="image/<?=$row['logo']?>" style="width: 100px; " alt="" width="70%" ></a>
				
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
            <!-- header end --> 
            <!-- sidebar-cart start -->
            
            <!-- main-search start -->
            <div class="main-search-active">
                <div class="sidebar-search-icon">
                    <button class="search-close"><span class="ion-android-close"></span></button>
                </div>
                <div class="sidebar-search-input">
					<form method="get" enctype="multipart/form-data" action="search.php">
                        <div class="form-search">
                            <input id="search" class="input-text" name="search" value="" placeholder="Search Entire Store" type="search">
                            <button name="submit-search" type="submit">
                                <i class="ion-ios-search-strong"></i>
                            </button>
                        </div>
                    </form>
                   <!--<form method="get" enctype="multipart/form-data" action="search.php">
                        <div class="form-search">
                            <input id="search" class="input-text" name="search" value="" placeholder="Search Entire Store" type="search">
                               <button class="btn btn-outline-success my-2 my-sm-0" name="submit-search" type="submit">Search</button>
                        </div>
                    </form>-->
                </div>
            </div>
            
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
			   <?php include 'shareslider.php'?>
           <!--Kết thúc slider-->
          
          
            <div class="product-area pb-100">
                <div class="container">
                   
                       <br>
					<br>
                  <br>
					<br>
                    <div class="product-style">
                        <div class="section-title text-center mb-55">
                        <h2>New Collection</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when look</p>
                    </div>
                        
                        <div class="tab-content jump">
							
                            <div class="tab-pane active show fade" id="home1" role="tabpanel">
									
                               <div class="row">
						<?php
						$sql = "select * from product order by id_p DESC LIMIT 0,8";
						$kqproduct = $conn->query($sql);
						foreach($kqproduct as $key=>$pro){
					
						?>
                        <div class="col-md-6 col-lg-4 col-xl-3" >
							
                            <div class="single-product mb-35">
                                <div class="product-img" style="width: 270px;height: 300px;">
                                    <a href="product-details.php?id=<?php echo $pro['id_p']?>"><img src="image/<?php echo $pro['image_p']?>" alt=""></a>
                                </div>
                                <div class="product-content">
                                    <div class="product-title-price">
                                        <div class="product-title">
                                            <h4><a href="product-details.php?id=<?php echo $pro['id_p']?>"><?php echo $pro['name_p']?></a></h4>
                                        </div>
                                        <div class="product-price">
                                            <span><?php echo $pro['price']?></span>
                                        </div>
                                    </div>
                                    <div class="product-cart-categori">
                                        <div class="product-cart">
                                            <span>Thêm vào giỏ hàng</span>
                                        </div>
                                        <div class="product-categori">
                                             <a href="add-cart.php?id_p=<?php echo $pro['id_p']?>"><i class="ion-bag"></i> Add to cart</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
							
                        </div>
                      <?php
						}
						?>
                    </div>
								
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
					<?php
						$sql = "select * from slide where title='on'  limit 1";
						$kqslide = $conn->query($sql);
						foreach($kqslide as $key=>$value){
					
					?>
            <div class="shop-limited-area bg-img pt-90 pb-100" style="background-image: url(image/<?php echo $value['image_slide']   ?>)" data-overlay="3">
				
                <div class="container">
                    <div class="shop-limited-content text-center">
                       <!--<?php echo $value['detail'] ?> !-->
                        <a class="btn-hover limited-btn" href="">view more</a>
                    </div>
                </div>
            </div>
			<?php }
			?>
            <div class="product-collection-area pt-100 pb-50">
                <div class="container">
                    <div class="section-title text-center mb-55">
                        <h2>Top View</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when look</p>
                    </div>
                    <div class="row">
						<?php
						$sql = "select * from product order by view DESC LIMIT 0,8";
						$kqproduct = $conn->query($sql);
						foreach($kqproduct as $key=>$pro){
					
						?>
                        <div class="col-md-6 col-lg-4 col-xl-3" >
							
                            <div class="single-product mb-35">
                                <div class="product-img" style="width: 270px;height: 300px;">
                                    <a href="product-details.php?id=<?php echo $pro['id_p']?>"><img src="image/<?php echo $pro['image_p']?>" alt=""></a>
                                </div>
                                <div class="product-content">
                                    <div class="product-title-price">
                                        <div class="product-title">
                                            <h4><a href="product-details.php?id=<?php echo $pro['id_p']?>"><?php echo $pro['name_p']?></a></h4>
                                        </div>
                                        <div class="product-price">
                                            <span><?php echo $pro['price']?></span>
                                        </div>
										
                                    </div>
                                    <div class="product-cart-categori">
                                        <div class="product-cart">
                                            <span>Thêm vào giỏ hàng</span>
                                        </div>
                                        <div class="product-categori">
                                             <a href="add-cart.php?id_p=<?php echo $pro['id_p']?>"><i class="ion-bag"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
							
                        </div>
                      <?php
						}
						?>
                    </div>
                </div>
            </div>

          
              <!--đây là footer-->  
             <?php include 'sharefooter.php'?>
          	<!--ket thuc footer-->
       

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
		<?php include 'sharejs.php'?>
    </body>
</html>
