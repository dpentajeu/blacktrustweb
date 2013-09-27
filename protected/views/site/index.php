<?php
    $baseUrl = Yii::app()->request->baseUrl;
?>
<div id="featured-wrapper">			
	<div id="featured-content" class="5grid-layout">
		<div class="row">
		
			<div class="4u">
				<section>
					<h2><?php echo Yii::t('main', 'mission_head'); ?></h2>
					<img src="<?= $baseUrl ?>/css/images/featured-icon02.png" width="91" height="68" alt="">
					<p><?php echo Yii::t('main', 'mission_content'); ?></p>
					<a href="#" class="button button-style1">Read More</a>
				</section>
			</div>

			<div class="4u">
				<section>
					<h2><?php echo Yii::t('main', 'service_head'); ?></h2>
					<img src="<?= $baseUrl ?>/css/images/featured-icon01.png" width="91" height="68" alt="">
					<p><?php echo Yii::t('main', 'service_content'); ?></p>
					<a href="#" class="button button-style1">Read More</a>
				</section>
			</div>

			<div class="4u">
				<section>
					<h2><?php echo Yii::t('main', 'achievement_head'); ?></h2>
					<img src="<?= $baseUrl ?>/css/images/featured-icon03.png" width="91" height="68" alt="">
					<p><?php echo Yii::t('main', 'achievement_content'); ?></p>
					<a href="#" class="button button-style1">Read More</a>
				</section>
			</div>
		
		</div>
	</div>	
</div>

<!-- Wrapper -->
		<div id="wrapper" class="5grid-layout">
		
			<!-- Page Content -->
			<div id="page" class="row">
				
				<!-- Content Area -->
				<div id="content" class="8u">					
					
					<!-- Two Column Area -->
					<section>
						<div id="two-column" class="5grid">
							<div class="row">
								<div class="6u">
									<section>
										<h2><?php echo Yii::t('main', 'technews_head'); ?></h2>
										<p><?php echo Yii::t('main', 'technews_content'); ?></p>
										<ul class="style3">
											<?php foreach ($activeNews as $index => $element):
												if($index==3) break;
												foreach ($element as $key => $value)
													${$key} = $value; ?>
												<li class="first">
													<p><span class="date"><a href="<?= $link; ?>" target="_blank"><?= $pubDate; ?></a></span><span class="heading-title"><?= $title; ?></span></p>
													<!-- <p><a href="#"><?= $description; ?></a></p> -->
												</li>
											<?php endforeach; ?>
										</ul>
									</section>
								</div>
								<div class="6u">
									<section>
										<h2><?php echo Yii::t('main', 'partnership_head'); ?></h2>
										<ul class="style4">
											<li class="first">
												<h3><?php echo Yii::t('main', 'partnership_1_title'); ?></h3>
												<p><?php echo Yii::t('main', 'partnership_1_content'); ?></p>
											</li>
											<li class="first">
												<h3><?php echo Yii::t('main', 'partnership_2_title'); ?></h3>
												<p><?php echo Yii::t('main', 'partnership_2_content'); ?></p>
											</li>
										</ul>
									</section>
								</div>
							</div>
						</div>					
					</section>			

	
				</div>
	
				<!-- Sidebar Area -->
				<div id="sidebar" class="4u">	
					<!-- Sidebar Section 2 -->
					<section id="box2">
						<h2><?php echo Yii::t('main', 'index_game_head'); ?></h2>
						<ul class="style2">
							<li class="first">
								<p><a href="#"><img src="<?= $baseUrl; ?>/images/landlord.jpg" style="width:140px; height:100px;" alt=""><?php echo Yii::t('main', 'game_landlord_content'); ?></a></p>
							</li>
							<li>
								<p><a href="#"><img src="<?= $baseUrl; ?>/images/thirdteen.jpg" style="width:140px; height:100px;" alt=""><?php echo Yii::t('main', 'game_thirdteen_content'); ?></a></p>
							</li>
							<li>
								<p><a href="#"><img src="<?= $baseUrl; ?>/images/fishing-joy.png" style="width:140px; height:100px;" alt=""><?php echo Yii::t('main', 'game_fishing_content'); ?></a></p>
							</li>
						</ul>
						<a href="#" class="button button-style1">Read More</a>
					</section>


				</div>
				
			</div>
			<!-- Page Content -->
		
		</div>
		<!-- Wrapper Ends Here -->