<?php $this->layout('layout', ['title' => 'Edit Event']) ?>

<?php $this->start('main_content') ?>
<div class="main-dashboard container">
    <div class="row">
        <div class="col-xs-2">
            <?= $this->insert('dashboard/navTabs'); ?>
        </div>
    
        <div id="dashboard-events-edit" class="col-xs-8 col-xs-offset-1">
            <div class="container">
               <h2>Edit Event</h2>
                <p><strong><?= $msg ?></strong></p>
                <form method="POST">
                    <div class="form-group">
                        <input class="form-control" type="text" name="title" value="<?= $event["title"] ?>" />
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="date" value="<?= $event["date"] ?>"/>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="place" value="<?= $event["place"] ?>"/>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="description" value="<?= $event["description"] ?>"/>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="link" value="<?= $event["link"] ?>"/>
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary col-xs-3" value="Update"/>
                    </div>
                </form>
            </div>
        </div>
                
<?php $this->stop('main_content') ?>

<?php $this->start('css') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/pages/dashboard.css') ?>">
<?php $this->stop('css') ?>