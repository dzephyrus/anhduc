<footer class="footer-area gray-bg pt-100 pb-90 pt-90">
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
	</div></footer>