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
				<h2 class="main-title"><?php echo Yii::t('main', 'fund_title'); ?></h2>
				<img src="<?= $baseUrl ?>/images/DirectSponsor.png">
				<h3><?php echo Yii::t('main', 'fund_sponsorbonus'); ?></h3>
				<img src="<?= $baseUrl ?>/images/GroupSponsorBonus.png" height="262px">
				<img src="<?= $baseUrl ?>/images/GroupSponsorBonus2.png">
				<h3><?php echo Yii::t('main', 'fund_groupsponsorbonus'); ?></h3>
				<img src="<?= $baseUrl ?>/images/MatchingBonus2.png" height="330px">
				<img src="<?= $baseUrl ?>/images/MatchingBonus.png">
				<h3><?php echo Yii::t('main', 'fund_matchingbonus'); ?></h3>
				<img src="<?= $baseUrl ?>/images/ROI.png">
				<h3><?php echo Yii::t('main', 'fund_roi'); ?></h3>
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