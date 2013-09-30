<?php
    $baseUrl = Yii::app()->request->baseUrl;
?>
<h2><?php echo Yii::t('main', 'where_invest'); ?></h2>
<p>
	<?php echo Yii::t('main', 'where_invest_0'); ?>
</p>
<ul class="style2">
	<li class="first">
		<p><a href="#"><img src="<?= $baseUrl; ?>/images/blackxgames.jpg" style="width:180px; height:100px;" alt=""><?php echo Yii::t('main', 'where_invest_1'); ?></a></p>
	</li>
	<li>
		<p><a href="#"><img src="<?= $baseUrl; ?>/images/Basic_venture_logo.jpg" style="width:180px; height:100px;" alt=""><?php echo Yii::t('main', 'where_invest_2'); ?></a></p>
	</li>
</ul>