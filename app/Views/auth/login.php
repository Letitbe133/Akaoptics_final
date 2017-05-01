<?php $this->engine->addData(["header_image" => false]) ?>
<?php $this->layout('layout', ['title' => 'Login']) ?>

<?php $this->start('main_content') ?>
<div id="dash-login">

    <div class="loginform">
        <h1 class="text-center">Connect me</h1>

        <div class="has-error text-center"><?php echo $error; ?></div>

        <form action="/akaoptics/public/login" method="POST" class="text-center">
            <div class="form-group col-xs-12">
                <input type="email" name="email" placeholder="Email"/>
            </div>
            <div class="form-group col-xs-12">
                <input type="password" name="password" placeholder="Password"/>
            </div>
            <div class="form-group">
                <input type="submit" class="loginbtn" value="Sign In"/>
            </div>
            <div class="form-group">
                <a class="btn-link" href="/akaoptics/public/lostpassword">Lost password?</a>
            </div>
        </form>
    </div>

</div>
<?php $this->stop('main_content') ?>

<?php $this->start('css') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/pages/auth.css') ?>">
<?php $this->stop('css') ?>
