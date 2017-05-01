<?php $this->layout('layout', ['title' => 'Dashboard']) ?>

<?php $this->start('main_content') ?>
<div class="main-dashboard">
    <aside>
        <?= $this->insert('dashboard/navTabs'); ?>
    </aside>
    
    <?= $this->insert('dashboard/dashboardNav'); ?>
    
    <div class="dashboard-wrapper">
            
            <div class="container">

                <div class="stats-wrapper">
                    <h1>Stats Content Data</h1>
                    <ul>
                    <?php foreach($stats as $key=>$stat) { ?>
                    
                        <li class="col-xs-12 col-md-4">
                            <div class="stat-container">
                                <h2><?= ucfirst($key); ?></h2>
                                <?php
                                    $percent;
                                    
                                    if($stat == 0) { $percent = 0; }
                                    else if($stat<2) { $percent = 25; }
                                    else if($stat>=2 && $stat<4) { $percent = 50; }
                                    else if($stat>=4 && $stat<8) { $percent = 75; }
                                    else { $percent = 100; }
                                ?>
                                <figure class="stat" data-percent="<?= $percent ?>">
                                    <figcaption><?= $stat ?></figcaption>
                                    <svg width="200" height="200">
                                      <circle class="outer" cx="95" cy="95" r="85" transform="rotate(-90, 95, 95)"/>
                                    </svg>
                                </figure>
                            </div>
                        </li>
                        
                    <?php } ?>
                    </ul>
                </div>
                
            </div>
            
    </div>
        
</div>
<?php $this->stop('main_content') ?>

<?php $this->start('css') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/pages/dashboard.css') ?>">
<?php $this->stop('css') ?>

<?php $this->start('js') ?>
	<script src="<?= $this->assetUrl('js/dashboard.min.js') ?>"></script>
<?php $this->stop('js') ?>