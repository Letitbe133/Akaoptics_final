<?php $this->layout('layout', ['title' => 'Contact']) ?>

<?php $this->start('main_content') ?>
<div id="dash-login">
   
    <div class="col-xs-8 col-xs-offset-2">
        <h2>Login1</h2>
        <form>
            <div class="form-group">
                <label for="login">Login:</label>
                <input type="text" class="form-control" id="login">
            </div>
            
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="password">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
</div>
<?php $this->stop('main_content') ?>

<?php $this->start('css') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/pages/dashboard.css') ?>">
<?php $this->stop('css') ?>
