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
				<h2 class="main-title"><?php echo Yii::t('main', 'bxgames_title'); ?></h2>
				<img src="<?= $baseUrl; ?>/images/blackxgames.jpg" alt="">
				<p><?php echo Yii::t('main', 'bxgames_content'); ?></p>
				<img src="<?=$baseUrl ?>/images/fishing-joy.png" width="340px" height="250px">
				<img src="<?=$baseUrl ?>/images/landlord.jpg" width="340px" height="250px">
				<img src="<?=$baseUrl ?>/images/thirdteen.jpg" width="340px" height="250px">
			</section>
			
		</div>

		<!-- Sidebar Area -->
		<div id="sidebar" class="4u">
		
			<!-- Sidebar Section 1 -->
			<section id="box1">				
				
				<?php $this->widget('application.components.SideView'); ?>

			</section>

			<!-- Sidebar Section 2 -->
			<section id="box2">

				<?php $this->widget('application.components.SideView2'); ?>
				
			</section>
		</div>
		
	</div>
	<!-- Page Content -->	
</div>