<?php $this->layout('layout', ['title' => 'Perdu ?']) ?>

<?php $this->start('main_content'); ?>
<div class="row">
    <div class="col-xs-10 col-xs-offset-1">
        <h1 class="text-center">404. OMG! I'm lost !</h1>
        <div class="col-xs-12 text-center">
            <img class="responsive" src="<?= $this->assetUrl('img/jcvd404.png') ?>" alt="404 page not found"/>
        </div>
        <div class="col-xs-12 text-center lost">
            <a class="btn btn-default btn-lg" href="<?= $this->url('home') ?>" title="Back to home page">Back to home page</a>
        </div>
    </div>
</div>
<?php $this->stop('main_content'); ?>

<?php $this->start('css') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/pages/404.css') ?>">
<?php $this->stop('css') ?>
