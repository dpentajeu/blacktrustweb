<?php
    $baseUrl = Yii::app()->request->baseUrl;
?>
<div id="wrapper" class="5grid-layout">

	<!-- Page Content -->
	<div id="page" class="row">
		
		<!-- Content Area -->
		<div id="content" class="8u">
			
			<!-- Main Content Area -->
			<section>
				<h2 class="main-title"><?php echo Yii::t('main', 'office_title'); ?></h2>
				<h3><?php echo Yii::t('main', 'office_address'); ?></h3>
				<p><?php echo Yii::t('main', 'office_content'); ?></p>
				<img src="<?=$baseUrl ?>/images/office.png" width="340px" height="250px">
				<img src="<?=$baseUrl ?>/images/office_1.png" width="340px" height="250px">
				<img src="<?=$baseUrl ?>/images/office_2.png" width="340px" height="250px">
				<img src="<?=$baseUrl ?>/images/office_3.png" width="340px" height="250px">
			</section>
			
		</div>

		<!-- Sidebar Area -->
		<div id="sidebar" class="4u">
		
			<!-- Sidebar Section 1 -->
			<section id="box1">
				
				<!-- Two Column Content Area -->
				<div class="5grid">
					<div class="row">
						<div class="6u">
							<section>
								<h2>Nulla  eleifend</h2>
								<ul class="style4">
									<li class="first"><a href="#">Maecenas luctus</a></li>
									<li><a href="#">Etiam rhoncus erat</a></li>
									<li><a href="#">Donec metus sapien</a></li>
									<li><a href="#">Integer quis urna</a></li>
									<li><a href="#">Etiam rhoncus erat</a></li>
									<li><a href="#">Donec metus sapien</a></li>
									<li><a href="#">Etiam volutpat erat</a></li>
								</ul>
							</section>
						</div>
						<div class="6u">
							<section>
								<h2>Nulla  eleifend</h2>
								<ul class="style4">
									<li class="first"><a href="#">Luctus sapien</a></li>
									<li><a href="#">Etiam rhoncus </a></li>
									<li><a href="#">Donec dictum metus </a></li>
									<li><a href="#">Integer gravida </a></li>
									<li><a href="#">Donec dictum </a></li>
									<li><a href="#">Integer quis urna</a></li>
									<li><a href="#">Etiam rhoncus erat</a></li>
								</ul>
							</section>
						</div>
					</div>
				</div>
				<!-- Two Column Content Area Ends Here -->
			
			</section>

			<!-- Sidebar Section 2 -->
			<section id="box2">
				<h2>Ipsum Consequat</h2>
				<ul class="style2">
					<li class="first">
						<p><a href="#"><img src="<?= $baseUrl; ?>/images/pics07.jpg" style="width:80px; height:80px;" alt="">Pellentesque viverra vulputate enim. Aliquam erat volutpat. Donec leo, vivamus fermentum nibh in augue praesent congue rutrum. </a></p>
					</li>
					<li>
						<p><a href="#"><img src="<?= $baseUrl; ?>/images/pics08.jpg" style="width:80px; height:80px;" alt="">Aliquam lacinia metus ut elit. Suspendisse iaculis mauris nec lorem. Donec leo, vivamus fermentum augue praesent congue rutrum.</a></p>
					</li>
					<li>
						<p><a href="#"><img src="<?= $baseUrl; ?>/images/pics09.jpg" style="width:80px; height:80px;" alt="">Suspendisse sit amet tellus in eros bibendum condimentum. Donec leo, vivamus fermentum nibh in augue praesent a lacus congue rutrum. </a></p>
					</li>
					<li>
						<p><a href="#"><img src="<?= $baseUrl; ?>/images/pics10.jpg" style="width:80px; height:80px;" alt="">Aliquam lacinia metus ut elit. Suspendisse iaculis mauris nec lorem. Donec leo, vivamus fermentum augue praesent congue rutrum.</a></p>
					</li>
				</ul>
				<a href="#" class="button button-style1">Read More</a>
			</section>
		</div>
		
	</div>
	<!-- Page Content -->	
</div>