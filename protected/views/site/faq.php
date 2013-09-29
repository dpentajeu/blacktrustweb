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
				<h2 class="main-title"><?php echo Yii::t('main', 'FAQ'); ?></h2>
				<ul class="style5">
					<li><h3><?php echo Yii::t('main', 'Q1'); ?></h3><p><?php echo Yii::t('main', 'Q1_answer'); ?></p></li>
					<li><h3><?php echo Yii::t('main', 'Q2'); ?></h3><p><?php echo Yii::t('main', 'Q2_answer'); ?></p></li>
					
				</ul>
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