<?php
    $baseUrl = Yii::app()->request->baseUrl;
?>
<style type="text/css">
	div.lh { padding-left: 30px; font-size: 18px;}
	td.j { vertical-align: middle; }
</style>
<div id="wrapper" class="5grid-layout">

	<!-- Page Content -->
	<div id="page" class="row">
		
		<!-- Content Area -->
		<div id="content" class="12u">
			
			<!-- Main Content Area -->
			<section>
				<h2 class="main-title"><?php echo Yii::t('main', 'technews_head'); ?></h2>
				<?php foreach ($activeNews as $index => $element):
					if($index==10) break;
					foreach ($element as $key => $value)
						${$key} = $value; ?>
					<p>
						<a href="<?= $link; ?>" target="_blank"><h2 style="font-size: 1.5em"><?= $title; ?></h2></a><span class="heading-title"><?= $pubDate; ?></span><br/><br/><?= $description ?>
					</p>
					<hr>
				<?php endforeach; ?>
			</section>
			
		</div>
		
	</div>
	<!-- Page Content -->	
</div>