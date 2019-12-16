<?php
session_start();

    date_default_timezone_set("Asia/Ho_Chi_Minh"); // set múi giờ hiện tại
    $now = getdate(); // get ngày giờ tuần hiện tại
       $currentTime = $now["hours"] . ":" . $now["minutes"] . ":" . $now["seconds"]; 
       $currentTime;
       
?>
<?php
ob_start();
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Neha - Minimalist eCommerce HTML5 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.2.4/dist/css/uikit.min.css" />

<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.2.4/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.2.4/dist/js/uikit-icons.min.js"></script>


        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

		
		
		<!-- all css here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/slinky.min.css">
        <link rel="stylesheet" href="assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="assets/css/easyzoom.css">
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
                                            <a href="cart.php"><span class="ion-bag"></span></a>
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
            <div class="breadcrumb-area bg-img border-top-1 pt-55">
                <div class="container">
                    <div class="breadcrumb-content-2">
                        <ul>
                            <li><a class="active" href="#">home</a></li>
                            <li><a class="active" href="#">Shop </a></li>
                            <li>Product Name</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="product-details ptb-100 pb-90">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="product-details-btn">
                                <a href="#"><i class="ion-arrow-left-c"></i></a>
                                <a class="active" href="#"><i class="ion-arrow-right-c"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
						<?php 
								include 'connection.php';
								if(isset($_GET['id'])){
								$id=$_GET['id'];
								$sql="select * from product where id_p='$id'";
								$stmt= $conn ->prepare($sql);
								$stmt -> execute();
								$row = $stmt -> fetch(); //fetch giúp đổ dữ liệu của 1 id đó ra ngoài, kiểu hiển thị hết thông tin . Còn fetchAll là đổ dữ liệu của tất cả các id ra ngoài chỗ cần dùng, fetchAll dùng trong hiển thị dữ liệu. Đổ dữ liệu vào biến $row.
								}
							?>
							<?php
									$sq = "update product set view = view + 1 where id_p = '$id'";
									$stmt= $conn ->prepare($sq);
									$stmt -> execute();
							?>
                        <div class="col-md-12 col-lg-7 col-12">
                            <div class="product-details-img-content">
                                <div class="product-details-tab mr-70">
                                    <div class="product-details-large tab-content">
                                        <div class="tab-pane active show fade" id="pro-details1" role="tabpanel">
                                            
                                                <a href="">
                                                    <img src="image/<?=$row['image_p']?>" alt="">
                                                </a>
                                            
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-5 col-12">
                            
							<div class="product-details-content">
								<input type="hidden" name="id" value="<?=$id?>">
                                <h3><?=$row['name_p']?></h3>
                                
                                <div class="details-price">
									<h3><?=$row['sale_p']?></h3>
                                    <span><del><?=$row['price']?></del></span>
                                </div>
                                
                                <div class="details-price">
									
                                    <span><?=$row['detail']?></span>
                                </div>
                                <div class="quickview-plus-minus">
                                    <div class="cart-plus-minus">
                                        <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                    </div>
                                    <div class="quickview-btn-cart">
                                         <a href="add-cart.php?id_p=<?php echo $row['id_p']?>"><i class="ion-bag"></i> Add to cart</a>
                                    </div>
                                     
                                </div>
                                <div class="product-categories product-cat-tag">
                                    <ul>
                                        <li class="categories-title">Categories :</li>
                                        <li><a href="#"><?=$row['name_cate']?></a></li>
                                    </ul>
                                </div>
                                
                                <div class="product-share">
                                    <ul>
                                        <li class="categories-title">Share :</li>
                                        <li>
                                            <a href="#">
                                                <i class="ion-social-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ion-social-tumblr"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ion-social-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ion-social-instagram-outline"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
							
                        </div>
                    </div>
                </div>
            </div>

            <?php
		include('connection.php');
	if(isset($_GET['id'])){
		
		$idm = $_GET['id'];
		$sqlt = "select * from product where id_p ='$id'";
		$kqt = $conn->query($sqlt);
			foreach($kqt as $key => $th){
	
		?>
	<article class="uk-comment uk-comment-primary">
		<?php
		include('connection.php');
	 
		$idmm = $th['id_p'];
		$sqlb = "select * from comment where id_p ='$idm'";
		$kqb = $conn->query($sqlb);
			foreach($kqb as $key => $row){
	
		?>
    <header class="uk-comment-header uk-grid-medium uk-flex-middle" uk-grid>
        <div class="uk-width-auto">
            <img class="uk-comment-avatar" src="image/29ebbf8b3d9c3654c4206e333bd3535a_tn.jpg" width="80" height="80" alt="">
        </div>
        <div class="uk-width-expand">
            <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#"><?php echo $row['name_u'] ?></a></h4>
            <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
                <li><a href="#"><?php echo $row['date'] ?></a></li>
                <li><a href="#">Reply</a></li>
            </ul>
        </div>
    </header>
    <div class="uk-comment-body">
        <p><?php echo $row['detail'] ?></p><br>
    </div>
		<?php } ?>
		
		
</article>
	
	
	<?php } ?>
	
		<?php } ?>
			
	
	<?php
		include('connection.php');
	if(isset($_GET['id'])){
		
		$idm = $_GET['id'];
		$sqlbl = "select * from comment where id_p ='$id'";
		$kqbl = $conn->query($sqlbl)->fetch();
	}
		?>
		


            <div class="container3 bg-dark">
		<h2 style="text-align: center; padding-top: 30px" class="text-light" >ĐÁNH GIÁ CỦA KHÁCH HÀNG</h2>
		<div class="row justify-content-center">
			<div class="col-md-10">
				<?php
					include 'connection.php';
			
                    if(isset($_SESSION['name_u'])){
				?>
				<form method="post" enctype="multipart/form-data" action="product-details.php?id=<?php echo $_GET['id']?>">
				<div class="form-group">
   			 		<label for="exampleFormControlTextarea1" class="text-light">NHẬN XÉT</label>
    				<textarea name="ndbl" class="form-control" placeholder="write your comments here" id="exampleFormControlTextarea1" rows="3"></textarea>
  				</div>
  					<button name="btn_luu" type="submit" class="btn btn-primary">Submit</button>
				</form>
				<?php
                    if(isset($_POST['btn_luu'])){
                        $ngay = date('y-m-d');
                        if(empty($_POST['ndbl'])){
                            ?>
                            <script> alert("Vui lòng nhập bình luận trước khi gửi! "); </script>
                            <?php
                        }else{
                        $ndbl = $_POST['ndbl']; 
                        $sql = "insert into comment values('','$_SESSION[name_u]','$ndbl', '$ngay','$id')";
                        $kqbl = $conn->exec($sql);
							if($kqbl ==1){
                                header("location:product-details.php?id=$idm");
							   }else{
								   echo 'that bai';
							   }
                    }
                }
                    ?>
                    <?php 
				 }else{
                      ?>
                        <div class="alert alert-danger">
                            <a href="login.php" data-toggle="modal" data-target="#myModal" class="alert-link">Đăng nhập để bình luận</a>.
                        </div>
                      <?php
                      }
                  ?>
			</div>
		</div>
	</div>





            <div class="product-description-review-area pb-100">
                <div class="container">
                    <div class="product-description-review text-center">
                        <div class="description-review-title nav" role=tablist>
                            <a class="active" href="#pro-dec" data-toggle="tab" role="tab" aria-selected="true">
                                Description
                            </a>
                            
                        </div>
                        <div class="description-review-text tab-content">
                            <div class="tab-pane active show fade" id="pro-dec" role="tabpanel">
                                <p><?=$row['detail']?></p>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-collection-area pb-60">
                <div class="container">
                    <div class="section-title text-center mb-55">
                        <h2>Related products</h2>
                    </div>
                    <div class="row">
                        <div class="new-collection-slider owl-carousel">
							
							<?php
								//câu lệnh chung để hiển thị từ dòng 3 -> dòng 8
								
								include"connection.php";
								//$sql= "select * from sanpham where ten_dm='melissani'";
								if(isset($_GET['id'])){
									$id=$_GET['id'];
									$sql="select * from product where id_cate=(SELECT id_cate FROM product WHERE id_p='$id') ";
								//Xử lý lệnh sql
								$stmt = $conn->prepare($sql);
								$stmt->execute();
								$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
								}
							?>
							<?php
								foreach($result as $row){
							?>
                            <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                                <div class="single-product mb-35">
                                    <div class="product-img">
                                        <a href="product-details.php?id=<?=$row['id_p']?>"><img src="image/<?=$row['image_p']?>" alt=""></a>
										<?php
											if(isset($row['sale_p'])){
												if($row['sale_p'] >0 ){
												?>
													 <span>sale</span>
												<?php
											} }
										?>
                                        
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title-price flex-column">
                                            <div class="product-title w-100">
                                                <h4><a href="product-details.php?id=<?=$row['id_p']?>"><?php echo $row["name_p"]?></a></h4>
                                            </div>
                                            <div class="product-price d-flex w-100">
												<?php
											if(isset($row['sale_p'])){
												if($row['sale_p'] <=0 ){
												?>
													<h4 style="color: #C05557"><?php echo $row["price"]?></h4> 
												<?php
												}
												else{
													?>
													<h4 style="color: #C05557"><?php echo $row["sale_p"]?></h4> <del style="padding-top: 15px; margin-left: 15px"> <?php echo $row["price"]?></del>
												<?php
												}
											}
												?>
                                                
                                            </div>
                                        </div>
                                        <div class="product-cart-categori">
                                            <div class="product-cart">
                                                <span><?=$row['name_cate']?></span>
                                            </div>
                                            <div class="product-categori">
                                                <a href="add-cart.php?id_p=<?php echo $row['id_p']?>"><i class="ion-bag"></i> Add to cart</a>
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
           <!-- footer-->
			<?php include 'sharefooter.php'?>
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
                                <div class="quick-view-list nav" role=tablist>
                                    <a class="active" href="#modal1" data-toggle="tab" role="tab" aria-selected="true">
                                        <img src="assets/img/quick-view/s1.jpg" alt="">
                                    </a>
                                    <a href="#modal2" data-toggle="tab" role="tab" aria-selected="false">
                                        <img src="assets/img/quick-view/s2.jpg" alt="">
                                    </a>
                                    <a href="#modal3" data-toggle="tab" role="tab" aria-selected="false">
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
                                                <option value="">xl</option>
                                                <option value="">ml</option>
                                                <option value="">m</option>
                                                <option value="">sl</option>
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
                                            <a class="btn-hover-black" href="#">Thêm vào giỏ hàng</a>
                                        </div>
                                        <div class="quickview-btn-wishlist">
                                            <button type="submit"><a class="btn btn-primary text-light" href="checkout.php">Thanh toán</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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