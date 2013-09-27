<?php
    $baseUrl = Yii::app()->request->baseUrl;
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Blacktrusts</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<noscript>
		<link rel="stylesheet" href="<?= $baseUrl; ?>/css/5grid/core.css" />
		<link rel="stylesheet" href="<?= $baseUrl; ?>/css/5grid/core-desktop.css" />
		<link rel="stylesheet" href="<?= $baseUrl; ?>/css/5grid/core-1200px.css" />
		<link rel="stylesheet" href="<?= $baseUrl; ?>/css/5grid/core-noscript.css" />
		<link rel="stylesheet" href="<?= $baseUrl; ?>/css/style.css" />
		<link rel="stylesheet" href="<?= $baseUrl; ?>/css/style-desktop.css" />
		</noscript>
		<script src="<?= $baseUrl; ?>/css/5grid/jquery.js"></script>
		<script src="<?= $baseUrl; ?>/css/5grid/init.js?use=mobile,desktop,1000px&amp;mobileUI=1&amp;mobileUI.theme=none"></script>
		<!--[if IE 9]><link rel="stylesheet" href="<?= $baseUrl; ?>/css/style-ie9.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
		<div id="header-wrapper">
		
			<header id="header">
				<div class="5grid-layout">
					<div class="row">
						<div class="4u" id="logo">
							<div id="logo"><a href="<?php echo $baseUrl; ?>/"><img style="width:300px;height:102px" src="<?php echo $baseUrl; ?>/images/blacklogo.png"/></a></div>
						</div>
						<div class="8u" id="menu">
							<nav class="mobileUI-site-nav">
								<?php $this->widget('zii.widgets.CMenu', array(
								'activeCssClass'=>'current_page_item',							
								'items'=>array(
									array('label'=>Yii::t('main', 'HOME'), 'url'=>array('/')),
									array('label'=>Yii::t('main', 'ABOUT_US'), 'url'=>array('site/page', 'page'=>'aboutus')),
									array('label'=>Yii::t('main', 'RESEARCH_STRATEGY'), 'url'=>array('site/page', 'page'=>'researchstrategy')),
									array('label'=>Yii::t('main', 'FAQ'), 'url'=>array('site/page', 'page'=>'faq')),
									array('label'=>Yii::t('main', 'NEWS'), 'url'=>array('/')),
									array('label'=>'Languages/语言', 'url'=>array('site/lang', '_lang'=>'en'), 'visible'=>Yii::app()->session['_lang'] == 'cn'),
									array('label'=>'Languages/语言', 'url'=>array('site/lang', '_lang'=>'cn'), 'visible'=>Yii::app()->session['_lang'] == 'en'||!isset(Yii::app()->session['_lang'])),
									),
								)); ?>
							</nav>
						</div>
					</div>
				</div>
			</header>

			<?php $isFrontpage = false;
                        if ((Yii::app()->controller->getId().'/'.Yii::app()->controller->getAction()->getId()) == 'site/index'  ) { 
                            $isFrontpage = true;
                        } if($isFrontpage == true){?>
			<div id="banner" class="5grid-layout">
				<div class="row">
					<div class="12u">
						<section>
							<h2><?php echo Yii::t('main', 'headline'); ?></h2>
							<p><?php echo Yii::t('main', 'subheadline'); ?></p>
							<a href="#" class="button button-style1">Read More</a>
						</section>
					</div>
				</div>
			</div>			
			<?php } ?>

		</div>
		<!-- Header Ends Here -->

		<?php echo $content; ?>

		<!-- Copyright -->
		<div class="5grid-layout" id="copyright">
			<div class="row">
				<div class="12u">
					<section>
						<p>&copy; 2013 Blacktrusts Inc.All Rights Reserved.</p>
					</section>
				</div>
			</div>
		</div>

	</body>
</html>