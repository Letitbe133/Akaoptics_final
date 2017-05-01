<?php $this->layout('layout', ['title' => 'Add Event']) ?>

<?php $this->start('main_content') ?>
<div class="main-dashboard container">
    <div class="row">
        <div class="col-xs-2">
            <?= $this->insert('dashboard/navTabs'); ?>
        </div>
    
        <div id="dashboard-events-add" class="col-xs-8 col-xs-offset-1">
            <div class="container">
                <h2>Add Event</h2>
                <p><strong><?= $msg ?></strong></p>
                <form method="POST">
                
                    <div class="form-group ">
                        <label for="name">Title</label>
                        <input class="form-control" type="text" id="title" name="title">
                    </div>
                    
                    <div class="form-group">
                        <label for="subtitle">Date</label>
                        <input class="form-control" type="date" id="date" name="date">
                    </div>
                    
                    <div class="form-group">
                        <label for="description">Location</label>
                        <input class="form-control" type="text" id="place" name="place">
                    </div>
                    
                    <div class="form-group">
                        <label for="tagline">Description</label>
                        <input class="form-control" type="text" id="description" name="description">
                    </div>
                    
                    <div class="form-group">
                        <label for="picture">Link</label>
                        <input class="form-control" type="text" id="link" name="link">
                    </div>
                        
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-create-spec col-xs-3">Create new event</button>
                    </div> 
                    
                </form>
                
            </div>
        </div>
    </div>
</div>
<?php $this->stop('main_content') ?>

<?php $this->start('css') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/pages/dashboard.css') ?>">
<?php $this->stop('css') ?>