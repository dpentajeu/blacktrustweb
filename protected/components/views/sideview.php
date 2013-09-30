<?php
    $baseUrl = Yii::app()->request->baseUrl;
?>
<!-- Two Column Content Area -->
				<div class="5grid">
					<div class="row">
						<div class="6u">
							<section>
								<h2><?php echo Yii::t('main', 'popular'); ?></h2>
								<ul class="style4" style="text-align:left">
									<li class="first">
										<a href="<?= $baseUrl ?>/mission">
											<?php echo Yii::t('main', 'popular_1'); ?>
										</a>
									</li>
									<li><a href="<?= $baseUrl ?>/services"><?php echo Yii::t('main', 'popular_2'); ?></a></li>
									<li><a href="<?= $baseUrl ?>/portfolio"><?php echo Yii::t('main', 'popular_3'); ?></a></li>
								</ul>
							</section>
						</div>
						<div class="6u">
							<section>
								<h2><?php echo Yii::t('main', 'address_title'); ?></h2>
								<ul class="style4">
									<li class="first"><a href="<?= $baseUrl ?>/ouroffice">About our office</a>
									</li>
									<li>
										90 Long Acre, Covent Garden, 
										<br/>
										London, WC2E 9RZ.
									</li>
									<li>
										Email : info@blacktrusts.com
									</li>
								</ul>
							</section>
						</div>
					</div>
				</div>
				<!-- Two Column Content Area Ends Here -->