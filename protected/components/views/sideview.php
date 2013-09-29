<?php
    $baseUrl = Yii::app()->request->baseUrl;
?>
<!-- Two Column Content Area -->
				<div class="5grid">
					<div class="row">
						<div class="6u">
							<section>
								<h2>Popular</h2>
								<ul class="style4" style="text-align:left">
									<li class="first"><a href="<?= $baseUrl ?>/mission">
										Explore the prospects for online financial platform and online 
										gaming needs as our main mission...
									</a>
									</li>
									<li><a href="#">Blacktrusts operates an independent asset manager, 
										serving the investment needs of private funds...</a></li>
									<li><a href="#">We conduct detailed studies of different investment 
										opportunities of a company or an individual before investing...</a></li>
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