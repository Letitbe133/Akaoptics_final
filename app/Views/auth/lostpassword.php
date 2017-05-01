<?php $this->layout('layout', ['title' => 'Home']) ?>

<?php $this->start('main_content') ?>

<div id="dash-password">
    <div class="login-form">
        <h1 class="text-center">Are you lost in the world like me?</h1>

        <form class="text-center" action="/akaoptics/public/lostpassword" method="POST">
            <div class="form-group">
                <input type="text" name="email" placeholder="Email"/>
            </div>
            <div class="form-group">
                <input type="submit" class="loginbtn" value="Recover my password"/>
            </div>
        </form>
    </div>
</div>

<?php $this->stop('main_content') ?>

<?php $this->start('css') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/pages/auth.css') ?>">
<?php $this->stop('css') ?>
