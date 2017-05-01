<?php $this->layout('layout', ['title' => 'Contact']) ?>
<?php $this->start('main_content') ?>

<div id="dash-lost-password">
    <div class="row">
        <div class="col-xs-8 col-xs-offset-2">
            <h2>Lost Password</h2>
        </div>
        <div class="col-xs-8 col-xs-offset-2">
        <form>
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" id="email">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
        
    </div>
    
</div>


<?php $this->stop('main_content') ?>
<?php $this->start('css') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/pages/dashboard.css') ?>">
<?php $this->stop('css') ?>
