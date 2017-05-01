<?php $this->engine->addData(["header_image" => false]) ?>
<?php $this->layout('layout', ['title' => 'Achievements']) ?>

<?php $this->start('main_content') ?>

<h1><?= $title ?></h1>

  <div id="achievements" class="container-fluid">
  	<div class="row">
          <div class="col-xs-12 ach-tab-container">
            <div class="row">
                <div class="col-xs-3 ach-tab-menu">
                  <div class="list-group">

                    <?php
                        foreach ($achievements as $achievement)
                    { ?>

                    <a href="#" class="list-group-item text-center">
                      <h4><?= $achievement['title'] ?></h4>
                    </a>

                    <?php } ?>

                    <a href="#" class="list-group-item text-center">
                      <h4>Publications</h4>
                    </a>
                  </div>
                </div>
                <div class="col-xs-9 ach-tab">

                  <?php
                    foreach ($achievements as $key => $achievement)
                  { ?>

                    <!-- First section -->
                    <div class="ach-tab-content <?php if($key==0) { echo 'active'; } ?>">
                        <div class="col-xs-10 col-xs-offset-1 panel panel-default">
                          <h3><?= $achievement['title'] ?></h3>
                          <h5><?= $achievement['subtitle'] ?></h5>
                          <img src="<?= $achievement['image'] ?>" class="img-responsive"/>
                          <h6 class="text-center"><i class="fa fa-quote-left fa-3x" aria-hidden="true"></i> <?= $achievement['feedback'] ?></h6>
                        </div>
                    </div>

                    <?php
                    } ?>

                    <!-- Second section -->
                    <div class="ach-tab-content <?php if($key==0) { echo 'active'; } ?>">

                      <?php foreach ($publications as $key => $publication) { ?>
                        <div class="col-xs-10 col-xs-offset-1 panel panel-default">
                          <h3 class="text-primary"><?= $publication['year'] ?></h3>
                          <h5>Publication # <?= $publication['item'] ?></h5>
                          <h5><?= $publication['title'] ?></h5>
                        </div>
                        <?php } ?>

                    </div>
                </div>
          </div>
        </div>
    </div>
  </div>

<?php $this->stop('main_content') ?>

<?php $this->start('css') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/pages/achievements.min.css') ?>">
<?php $this->stop('css') ?>

<?php $this->start('js') ?>
	<script src="<?= $this->assetUrl('js/achievements.min.js') ?>"></script>
<?php $this->stop('js') ?>
