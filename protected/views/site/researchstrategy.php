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
                <h2 class="main-title"><?php echo Yii::t('main', 'research_title'); ?></h2>
                <a href="#" class="image-style1"><img src="<?= $baseUrl; ?>/images/research.jpg" alt=""></a>
                <p>
                    <?php echo Yii::t('main', 'research_content'); ?>
                </p>
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