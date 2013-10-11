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