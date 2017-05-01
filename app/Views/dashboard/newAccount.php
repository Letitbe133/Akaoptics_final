<?php $this->layout('layout', ['title' => 'Contact']) ?>
<?php $this->start('main_content') ?>

<div id="dash-new-account">
    <div class="row">
        <div class="col-xs-8 col-xs-offset-2">
            <h2>Create your account</h2>
        </div>
        <div class="col-xs-8 col-xs-offset-2">
        <form>
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd">
            </div>
            <div class="form-group">
                <label for="firstname">Firstname:</label>
                <input type="text" class="form-control" id="firstname">
            </div>
            <div class="form-group">
                <label for="lastname">Last name:</label>
                <input type="text" class="form-control" id="lastname">
            </div>
            <div class="checkbox">
                <label><input type="checkbox"> Remember me</label>
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