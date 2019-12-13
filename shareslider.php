 <div class="breadcrumb-area bg-img">
	<div class="container" >

		 <div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<?php
					$sql = "select * from slide where title='on'";
					$kq = $conn -> query($sql);
					$stt= 0;
					foreach($kq as $key => $row){
						?>
							  <li data-target="#myCarousel" data-slide-to="<?php echo $stt; ?>"<?php if($stt==0){echo " class='active' ";}?>></li>
						<?php
						$stt ++;
					}
				?>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<?php
					$sql = "select * from slide where title = 'on'";
					$kq=$conn -> query($sql);
					$stt =0;
					foreach($kq as $key => $row){
				?>
				 <div class="item <?php  if($stt==0){echo 'active'; }?>">
					<img src="image/<?php echo $row['image_slide'] ?>" style=" height: 550px">
				 </div>
				<?php
					$stt ++;
					}

				?>

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
</div>