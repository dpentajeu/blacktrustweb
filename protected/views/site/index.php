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
					<a href="<?= $baseUrl ?>/mission" class="button button-style1">Read More</a>
				</section>
			</div>

			<div class="4u">
				<section>
					<h2><?php echo Yii::t('main', 'service_head'); ?></h2>
					<img src="<?= $baseUrl ?>/css/images/featured-icon01.png" width="91" height="68" alt="">
					<p><?php echo Yii::t('main', 'service_content'); ?></p>
					<a href="<?= $baseUrl ?>/services" class="button button-style1">Read More</a>
				</section>
			</div>

			<div class="4u">
				<section>
					<h2><?php echo Yii::t('main', 'achievement_head'); ?></h2>
					<img src="<?= $baseUrl ?>/css/images/featured-icon03.png" width="91" height="68" alt="">
					<p><?php echo Yii::t('main', 'achievement_content'); ?></p>
					<a href="<?= $baseUrl ?>/portfolio" class="button button-style1">Read More</a>
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
												<h3><?php echo Yii::t('main', 'partnership_2_title'); ?></h3>
												<p><?php echo Yii::t('main', 'partnership_2_content'); ?></p>
											</li>
										</ul>
										<h2><?php echo Yii::t('main', 'address_title'); ?></h2>
										<h3>
											90 Long Acre, Covent Garden, 
											<br/>
											London, WC2E 9RZ.
											<br/><br/>
											<?php echo Yii::t('main', 'office_asia'); ?>
										</h3>
										<img src="<?= $baseUrl; ?>/images/office.png">
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
						<h2><?php echo Yii::t('main', 'testimonials_title'); ?></h2>
						<ul class="style2">
							<li>
								<p><a href="<?= $baseUrl; ?>/blackxgames" target="_blank"><img src="<?= $baseUrl; ?>/images/blackxgames.jpg" style="width:140px; height:80px;" alt=""><?php echo Yii::t('main', 'testimonials_content_2'); ?></a></p>
							</li>
						</ul>

					</section>
					<section>
						<h2>Contact Us</h2>
						<ul class="style2">
							<li>
								<?php if(Yii::app()->user->hasFlash('contact')): ?>

								<div class="flash-success">
									<?php echo Yii::app()->user->getFlash('contact'); ?>
								</div>

								<?php else: ?>

								If you have business inquiries or other questions, please fill out the following form to contact us or email to <a href="mailto:support@blacktrusts.com">support@blacktrusts.com</a>. Thank you.

								<div class="form">

								<?php $form=$this->beginWidget('CActiveForm', array(
									'id'=>'contact-form',
									'enableClientValidation'=>true,
									'clientOptions'=>array(
										'validateOnSubmit'=>true,
									),
								)); ?>

									<?php echo $form->errorSummary($model); ?><br/>
									
									<table>
										<tr>
											<td style="padding-right:60px;">
												<h3 style="padding-bottom:0px;"><?php echo $form->labelEx($model,'name'); ?></h3>
												<?php echo $form->textField($model,'name'); ?>
												<?php echo $form->error($model,'name'); ?>
											</td>
											<td>
												<h3 style="padding-bottom:0px;"><?php echo $form->labelEx($model,'email'); ?></h3>
												<?php echo $form->textField($model,'email'); ?>
												<?php echo $form->error($model,'email'); ?>
											</td>										
									</tr>
									</table>
									</div>

									<div class="row">
										<h3 style="padding-bottom:0px;"><?php echo $form->labelEx($model,'subject'); ?></h3>
										<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
										<?php echo $form->error($model,'subject'); ?>
									</div>

									<div class="row">
										<h3 style="padding-bottom:0px;"><?php echo $form->labelEx($model,'body'); ?></h3>
										<?php echo $form->textArea($model,'body',array('rows'=>2, 'cols'=>50)); ?><br/><br/>
										<?php echo $form->error($model,'body'); ?>
									</div>

									<?php if(CCaptcha::checkRequirements()): ?>
									<div class="row">
										<h3><?php echo $form->labelEx($model,'verifyCode'); ?></h3>
										<div>
										<?php $this->widget('CCaptcha'); ?>
										<?php echo $form->textField($model,'verifyCode'); ?>
										</div><br/>
										<div class="hint">Please enter the letters as they are shown in the image above.
										Letters are not case-sensitive.</div>
										<?php echo $form->error($model,'verifyCode'); ?>
									</div>
									<?php endif; ?>

									<div class="row buttons">
										<?php echo CHtml::submitButton('Submit',array('class'=>'button')); ?>
									</div>

								<?php $this->endWidget(); ?>

								</div><!-- form -->

								<?php endif; ?>
							</li>
						</ul>
					</section>

				</div>
				
			</div>
			<!-- Page Content -->
		
		</div>
		<!-- Wrapper Ends Here -->